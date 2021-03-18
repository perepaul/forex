<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\DB;
use App\Repository\AccountCurrencyRepo;

class AccountCurrency extends Component
{
    protected $currency;
    public $action = 'Add', $editing = null;
    public $name, $iso, $symbol, $id;

    protected function rules()
    {
        return [
            'name' => ['required',$this->unique('name')],
            'iso' => ['required',$this->unique('iso')],
            'symbol' => ['required',$this->unique('symbol')],
        ];
    }
    protected function unique($column)
    {
        return 'unique:account_currencies,'.$column.','.$this->editing;
    }
    public function __construct()
    {
        $this->currency = new AccountCurrencyRepo();
    }

    public function resetForm()
    {
        $this->reset('name','iso','symbol','editing','id','action');
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function edit($id)
    {
        $this->action = 'Update';
        $c = $this->currency->find($id);
        $this->id = $this->editing = $c->id;
        $this->name = $c->name;
        $this->iso = $c->iso;
        $this->symbol = $c->symbol;
    }

    public function createOrUpdate($id = null)
    {
        $this->id = $id;
        $data = $this->validate();
        if (!is_null($this->editing)) {
            $this->currency->update($data, $id);
            $this->emit('success', ['message' => 'Currency updated successfully']);
        } else {
            $this->currency->create($data);
            $this->emit('success', ['message' => 'Currency Created successfully']);
        }
        $this->resetForm();
    }

    public function delete($id)
    {
        $currency = $this->currency->find($id);
        if($currency->users()->count() > 0)
        {
            $this->emit('error',['errors'=>['Cannot delete. Users already use this currency']]);
            return $this->render();
        }
        $currency->delete();
        $this->emit('success',['message'=>'Currency deleted successfully']);
    }

    public function activate($id)
    {
        DB::table('account_currencies')->update(['default'=>0]);
        $currency = $this->currency->find($id);
        $currency->update(['default'=>1]);
        $this->emit('success',['message'=>'Default currency set to '.$currency->name]);
    }


    private function data()
    {
        $query = $this->currency->getModel();

        return $query->paginate(10);
    }
    public function render()
    {
        return view('livewire.admin.account-currency', ['account_currencies' => $this->data()]);
    }
}
