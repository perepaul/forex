<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Mail\Admin\ContactMailable;
use Illuminate\Support\Facades\Mail;

class Contact extends Component
{

    public $check,$name,$email,$subject,$message;

    protected function rules()
    {
        return [
            'check'=>'max:0',
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required|string',
            'message' => 'required|string',
        ];
    }

    public function updated($field,$value)
    {
        $this->validateOnly($field);
    }

    public function send()
    {
        $data = $this->validate();
        if($data){
            Mail::to('perepaul15@gmail.com')->send(new ContactMailable($data));

            $this->reset('check','name','subject','message');
            $this->emit('success',['message'=>'Contact submitted successfully']);
        }
    }
    public function mount()
    {
        $this->name = auth('web')->user()->name ?? '';
        $this->email = auth('web')->user()->email ?? '';
    }


    public function render()
    {
        return view('livewire.user.contact');
    }
}
