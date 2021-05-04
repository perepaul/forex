<?php

namespace App\Http\Livewire\Admin;

use App\Repository\DepositRepo;
use App\Repository\TradeRepository;
use App\Repository\UserRepository;
use App\Repository\WithdrawalRepo;
use Livewire\Component;

class Dashboard extends Component
{
    private $userRepo,$tradesRepo,$withdrawalRepo,$depositRepo;
    public function __construct()
    {
        $this->userRepo = new UserRepository();
        $this->tradesRepo = new TradeRepository();
        $this->withdrawalRepo = new WithdrawalRepo();
        $this->depositRepo = new DepositRepo();
    }
    public function mount()
    {

    }

    public function getUsersProperty()
    {
        return $this->userRepo->getModel()->where('status',1)->get();
    }

    public function getPendingUsersProperty()
    {
        return $this->userRepo->getModel()->where('status',2)->get();
    }

    public function getTradesProperty()
    {
        return $this->tradesRepo->getModel()->where('status',1)->get();
    }

    public function getWithdrawalsProperty()
    {
        return $this->withdrawalRepo->getModel()->where('status',1)->get();
    }

    public function getDepositsProperty()
    {
        return $this->depositRepo->getModel()->where('status',1)->get();
    }
    public function render()
    {
        return view('livewire.admin.dashboard');
    }
}
