<?php

namespace App\Http\Livewire\Admin;

use App\Repository\UserRepository;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithPagination;
use Throwable;

class Users extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    protected $user;
    public $search, $data;
    public $modal = false, $id;

    protected $rules = [
        'data.name' => 'required',
        'data.email' => 'required|email',
        'data.phone' => 'required',
        'data.balance'=> 'required|numeric'
    ];

    protected $validationAttributes = [
        'data.name' => 'name',
        'data.email' => 'email address',
        'data.phone' => 'phone number',
        'data.balance' => 'account balance'
    ];

    public function __construct()
    {
        $this->user = new UserRepository(new \App\Models\User());
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }


    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function updatingName($val)
    {
    }

    public function changeStatus($id)
    {
        $user = $this->user->find($id);
        $user->update(['status'=>!!$user->status]);
        $this->emit('success',['message'=>'sucess: status updated']);
    }

    public function edit($id)
    {
        $user = $this->user->find($id);
        $this->id = $user->id;
        $this->data = $user->toArray();
        $this->emit('toggle-modal', ['id' => 'updat-user-modal']);
    }

    public function update($id)
    {
        $this->user->update($this->data, $id);
        $this->emit('toggle-modal', ['id' => 'updat-user-modal']);
        $this->emit('success', ['message' => 'User data updated successfully']);
    }

    public function delete($id)
    {
        try {
            $this->user->delete($id);
            $this->emit('success', ['message' => 'User Deleted successfully']);
        } catch (Throwable $e) {
            Log::error($e);
            $this->emit('error', ['errors' => ['Oops! Unable to delete user']]);
        }
    }

    private function getData()
    {
        if (!empty($this->search)) {
            return $this->user->getModel()->where('name', 'like', "%{$this->search}%")->paginate();
        }
        return $this->user->paginate();
    }
    public function render()
    {
        return view('livewire.admin.users', [
            'users' => $this->user->paginate()
        ]);
    }
}
