<?php

namespace App\Http\Livewire\Admin;

use App\Repository\DepositRepo;
use Livewire\Component;
use Livewire\WithPagination;

class Deposits extends Component
{
    use WithPagination;
    protected $deposit;
    protected $paginationTheme = 'bootstrap';
    public $search, $filter;
    public function __construct()
    {
        $this->deposit = new DepositRepo();
    }

    public function updatingSearch(){
        $this->resetPage();
    }

    public function markProcessing($id)
    {
        if($this->deposit->find($id)->status != 'paid'){
            $this->emit('warn',['warns'=>['Failed: User have not paid for the deposit.']]);
            return $this->render();
        }

        if($this->deposit->find($id)->status == 'processing'){
            $this->emit('warn',['warns'=>['Already marked processing.']]);
            return $this->render();
        }
        $this->deposit->status($id);
        $this->emit('success',['message'=>'Deposit marked processing successfully']);
    }

    public function approve($id)
    {
        if($this->deposit->find($id)->status != 'paid'){
            $this->emit('warn',['warns'=>['Failed: User have not paid for the deposit.']]);
            return $this->render();
        }
        $this->deposit->approve($id);
        $this->emit('success',['message'=>'Deposit approved successfully']);
    }

    public function declineModal($id)
    {
        $this->emit('toggle-modal',['id'=>'decline-modal']);
    }

    public function decline($id)
    {

    }

    private function data()
    {
        $query = $this->deposit->getModel();

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
        // dd($this->data());
        return view('livewire.admin.deposits',['deposits'=>$this->data()]);
    }
}
