<?php

namespace App\Http\Livewire\Admin;

use App\Repository\TradeRepository;
use Livewire\Component;

class Trades extends Component
{
    protected $trade;
    public $data;

    protected $rules = [
        'data.profit'=>'numeric|integer'
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function __construct()
    {
        $this->trade = new TradeRepository();
    }

    public function warnEndTrade($id)
    {
        $this->data = $this->trade->find($id)->toArray();
        $this->emit('toggle-modal',['id'=>'warn-end-trade']);
    }
    public function endTrade($id)
    {
        $this->emit('toggle-modal',['id'=>'warn-end-trade']);
        $this->trade->endTrade($id);
        $this->emit('success',['message'=>'Trade ended and profit added to balance']);
    }

    public function edit($id)
    {
        $trade = $this->trade->find($id);
        $this->data = $trade->toArray();
        $this->data['user'] =$trade->user->name;
        // dd($this->data);
        $this->emit('toggle-modal',['id'=>'edit-profit']);
    }

    public function update($id)
    {
        $data = $this->validate()['data'];
        $this->trade->update($data,$id);
        $this->emit('success',['message' => 'Trade updated successfully']);
        $this->emit('toggle-modal',['id'=>'edit-profit']);


    }
    private function data()
    {
        $query = $this->trade->getModel();
        if (!empty($this->filter) && $this->filter != "all") {
            $query = $query->where('status', '=', $this->filter);
        }
        if (!empty($this->search)) {
            $query = $query->where('reference','LIKE',"%{$this->search}%")->orWhereHas('user', function ($q) {
                $q->where('name', 'LIKE', "%{$this->search}%");
            });
        }
        return $query->paginate(10);
    }
    public function render()
    {
        return view('livewire.admin.trades',['trades'=>$this->data()]);
    }
}
