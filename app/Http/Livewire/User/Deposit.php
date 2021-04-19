<?php

namespace App\Http\Livewire\User;

use App\Repository\DepositRepo;
use Livewire\Component;
use Livewire\WithFileUploads;

class Deposit extends Component
{
    use WithFileUploads;
    public $method,$amount,$image;
    private $depositRepo;

    public function __construct()
    {
        $this->depositRepo = new DepositRepo();
    }

    protected function rules()
    {
        return [
            'method' => 'required',
            'image' => 'required|mimes:jpeg,jpg,png,pdf|max:512',
            'amount'=> 'required|numeric|integer|min:20'
        ];
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function updatedMethod($value)
    {
        if(in_array($value,['bank','paypal','stripe'])){
            $this->emit('error',['errors'=>['Sorry, the '.ucfirst($value).' deposit option is not available. Contact support']]);
            $this->reset('method');
        }
    }

    public function help(){
        $this->emit('toggle-modal',['id'=>'payment-help']);
    }

    public function getReferenceProperty()
    {
        $reference = generateReference();
        while($this->depositRepo->getModel()->where('reference',$reference)->count())
        {
            $reference = generateReference();
        }
        return $reference;
    }
    public function deposit()
    {
        $data = $this->validate();
        $data['image'] = basename($this->image->storePublicly(config('constants.deposit_image'),'custom_public'));
        $data['user_id'] = auth('web')->user()->id;
        $data['reference'] = $this->reference;
        $data['status'] = 'paid';
        $this->depositRepo->create($data);
        $this->emit('success',['message'=>'Deposit successful']);
        $this->reset('method','amount','image');


    }
    public function render()
    {
        return view('livewire.user.deposit');
    }
}
