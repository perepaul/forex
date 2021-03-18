<?php

namespace App\Http\Livewire\Admin;

use App\Repository\TradeCurrencyRepo;
use Illuminate\Support\Facades\DB;
use Livewire\Component;

class TradeCurrency extends Component
{
    protected $currency;
    public $action = 'Add', $editing = null;
    public $name;
    protected function rules()
    {
        return [
            'name' => ['required', 'unique:trade_currencies,name,' . $this->editing],
        ];
    }

    public function __construct()
    {
        $this->currency = new TradeCurrencyRepo();
    }

    public function resetForm()
    {
        $this->reset('name', 'editing', 'id', 'action');
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
        if ($currency->trades()->count() > 0) {
            $this->emit('error', ['errors' => ['Cannot delete. Trades already use this currency']]);
            return $this->render();
        }
        $currency->delete();
        $this->emit('success', ['message' => 'Currency deleted successfully']);
    }


    private function data()
    {
        $query = $this->currency->getModel();

        return $query->paginate(10);
    }
    public function render()
    {
        return view('livewire.admin.trade-currency', ['trade_currencies' => $this->data()]);
    }
}
