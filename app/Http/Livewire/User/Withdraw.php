<?php

namespace App\Http\Livewire\User;

use App\Repository\WithdrawalRepo;
use Livewire\Component;

class Withdraw extends Component
{
    public $method, $amount, $address, $save,$message;
    private $withdrawRepo;

    public function __construct()
    {
        $this->withdrawRepo = new WithdrawalRepo();
    }

    protected function rules()
    {
        return [
            'method' => 'required',
            'address' => 'required',
            'amount' => 'required|numeric|integer|min:20'
        ];
    }

    protected function messages()
    {
        return [
            'method.required' => 'Please select a payment method.',
            'address.required' => 'Please enter a crypto address.',
            'amount.min' => 'you cannot withdraw less than ' . currency_symbol() . '20',
        ];
    }

    public function updatedMethod($value)
    {
        if (in_array($value, ['bank', 'paypal', 'stripe'])) {
            $this->emit('error', ['errors' => ['Sorry, the ' . ucfirst($value) . ' deposit option is not available. Contact support']]);
            $this->reset('method');
        } else {
            $this->setAddress($value);
        }
    }
    private function setAddress($type)
    {
        $address = $type.'_address';
        $this->address = $this->user->{$address};
    }
    public function getUserProperty()
    {
        return auth('web')->user();
    }

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function help()
    {
        $this->emit('toggle-modal', ['id' => 'payment-help']);
    }

    public function getReferenceProperty()
    {
        $reference = generateReference();
        while($this->withdrawRepo->getModel()->where('reference',$reference)->count())
        {
            $reference = generateReference();
        }
        return $reference;
    }

    public function withdraw()
    {
        if(!$this->user->plan_id)
        {
            $this->emit('error', ['errors' => ['You have to subscribe to plan, to make deposit']]);
            return $this->render();
        }
        $data = $this->validate();
        if ($this->save) {
            $this->user->update([$this->method . '_address' => $this->address]);
        }
        $data['user_id'] = $this->user->id;
        $data['reference'] = $this->reference;
        if ($this->amount > $this->user->balance) {
            $this->emit('error', ['errors' => ['Insufficient Funds']]);
            return $this->render();
        }

        $this->withdrawRepo->create($data);
        $this->message = 'Withdraw successful. Reference: '.$data['reference'];
        $this->emit('toggle-modal', ['id'=>'success-modal']);
    }

    public function render()
    {
        return view('livewire.user.withdraw');
    }
}
