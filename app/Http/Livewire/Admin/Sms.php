<?php

namespace App\Http\Livewire\Admin;

use App\Repository\UserRepository;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Sms extends Component
{
    public $to,$user,$message;
    private $userRepo;

    protected $rules = [
        'to' => 'required',
        'message'=>'required|string'
    ];

    public function __construct()
    {
        $this->userRepo = new UserRepository();
    }

    public function updatedUser($id)
    {
        if(!empty($id)){
            $this->to = $this->userRepo->find($id)->phone;
        }else{
            $this->reset('to');
        }
    }
    private function getUsers()
    {
        return $this->userRepo->all();
    }

    public function send()
    {
        $this->validate();
        try {
            sms($this->to,$this->message);
            $this->emit('success',['message'=>'Sent sms successfully!']);
            $this->reset('message','user');
        } catch (\Throwable $th) {
            Log::error($th);
            $this->emit('error',['errors'=>["Oops! ".$th->getMessage()]]);
        }
    }

    public function render()
    {
        $users = $this->getUsers();
        return view('livewire.admin.sms',['users'=>$users]);
    }
}
