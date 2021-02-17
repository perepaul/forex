<?php

namespace App\Http\Livewire\Admin;

use App\Models\Withdrawal;
use App\Repository\WithdrawalRepo;
use Livewire\Component;
use Livewire\WithPagination;

class Withdrawals extends Component
{
    use WithPagination;
    protected $withdrawal;
    protected $paginationTheme = 'bootstrap';
    public $search, $filter, $data,$modal = false, $info = "hello";


    public function __construct()
    {
        $this->withdrawal = new WithdrawalRepo(new Withdrawal());
    }

    public function updatingSearch($val)
    {
        $this->resetPage();
    }

    public function launchModal($id,$modal_id)
    {
        $withdrawal = $this->withdrawal->find($id);

        $this->data = [
            'withdrawal' => $withdrawal->toArray(),
            'user' => $withdrawal->user->toArray()
        ];

        $this->emit('toggle-modal',['id'=>$modal_id]);
    }

    public function approve($id)
    {

    }

    public function decline($id)
    {

    }

    private function data()
    {
        $query = $this->withdrawal->getModel();
        if ($this->filter != "all" && in_array($this->filter,[1,2,3])) {
            // dd($this->filter);
            $query = $query->where('status','=', $this->filter);
        }
        if (!empty($this->search)) {
            $query = $query->whereHas('user', function ($q) {
                $q->where('name', 'LIKE', "%{$this->search}%");
            });
        }
        return $query->paginate(10);
    }
    public function render()
    {
        // dd($this->withdrawals());
        return view('livewire.admin.withdrawals', [
            'withdrawals' => $this->data()
        ]);
    }
}
