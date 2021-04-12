<?php

namespace App\Http\Livewire\Admin;

use App\Mail\CommunicationMailable;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;
use Livewire\WithFileUploads;

class Emails extends Component
{
    use WithFileUploads;

    private $userRepo;
    public $user,$to,$subject,$message,$attachments=[];


    public function __construct(){
        $this->userRepo = new UserRepository();
    }

    protected $rules = [
        'subject'=>'required',
        'to'=>'required|email',
        'message'=>'required|string',
        'attachments.*'=>'sometimes|file|mimes:jpeg,jpg,png,gif,pdf,doc,docx|max:5120'
    ];

    public function updatedUser($id)
    {
        if(!is_null($id)){
            $this->to = $this->userRepo->find($id)->email;
        }else{
            $this->resetForm();
        }
    }

    public function updated($field){
        $this->validateOnly($field);
    }

    public function resetForm()
    {
        $this->reset('user','to','subject');
    }

    public function send()
    {
        $data = $this->validate();
        if(!is_null($this->user)) $user = $this->userRepo->find($this->user);
        $files = [];
        if(count($this->attachments) > 0){
            foreach($this->attachments as $k => $attachment)
            {
                $files[] = $this->uploadFile($attachment,$k + 1);
            }
        }

        dd($data);
        Mail::to($data['to'])->send(
            new CommunicationMailable(
                $data['subject'],
                $data['message'],
                $files,
                $user ?? $this->user
                )
        );
        $this->resetForm();
        $this->emait('success',['message'=>'Mail sent successfully']);
    }

    private function uploadFile($file,$index)
    {
        $dir = $file->storePublicly('attachments','attachement');
        $name = 'Attachment'.$index.'.'.$file->extension();
        return [
            'data' => file_get_contents(attachment_path($dir)),
            'name' => $name,
            'mime'=>$file->getMimetype(),
        ];
    }

    private function data()
    {
        return $this->userRepo->all();
    }

    public function render()
    {
        $users = $this->data();
        return view('livewire.admin.emails',compact('users'));
    }
}
