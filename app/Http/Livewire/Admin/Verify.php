<?php

namespace App\Http\Livewire\Admin;

use App\Mail\User\VerifiedMailable;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithPagination;

class Verify extends Component
{
    use WithPagination;

    protected $paginationTheme = 'bootstrap';

    private $userRepo;

    public function __construct()
    {
        $this->userRepo = new UserRepository();
    }

    public function getUsersProperty()
    {
        return $this->userRepo->getModel()->where('status',2)->paginate(7);

    }

    public function verify($id)
    {
        $user =  $this->userRepo->find($id);
        $user->status = 1;
        $user->save();
        Mail::to($user)->send(new VerifiedMailable($user));
        $this->emit('success',['message'=>'User Verified!']);

    }

    public function decline($id)
    {
        $user =  $this->userRepo->find($id);
        $user->status = 0;
        $user->save();
        Mail::to($user)->send(new VerifiedMailable($user));
        $this->emit('success',['message'=>'User Declined!']);
    }
    public function render()
    {
        return view('livewire.admin.verify');
    }
}
