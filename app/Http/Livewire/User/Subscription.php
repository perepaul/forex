<?php

namespace App\Http\Livewire\User;

use App\Repository\PlanRepository;
use App\Repository\UserRepository;
use Livewire\Component;

class Subscription extends Component
{
    private $userRepo, $planRepo;
    public $message;

    public function __construct()
    {
        $this->planRepo = new PlanRepository();
        $this->userRepo = new UserRepository();
    }

    public function getPlansProperty()
    {
        return $this->planRepo->all()->all();
    }

    public function getUserProperty()
    {
        return $this->userRepo->find(auth('web')->user()->id);
    }

    public function subscribe($id)
    {
        if (!$this->user->isActive()) {
            $this->emit('error',['errors' => ['You account is not verified yet!']]);
            return $this->emit('redirect', ['to' => route('profile'), 'timeout' => 2000]);
        }

        $plan = $this->planRepo->find($id);
        $this->user->update(['plan_id' => $plan->id,'demo_balance'=>$plan->demo_balance]);
        $this->message = "Yay! Your subscription to $plan->name was successful. Redirecting...";
        $this->emit('toggle-modal', ['id' => 'success-modal']);
        $this->emit('redirect', ['to' => route('profile'), 'timeout' => 3500]);
    }

    public function render()
    {
        return view('livewire.user.subscription');
    }
}
