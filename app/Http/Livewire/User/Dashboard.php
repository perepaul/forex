<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use App\Repository\DepositRepo;
use App\Repository\UserRepository;
use App\Repository\WithdrawalRepo;
use App\Repository\TradeRepository;

class Dashboard extends Component
{

    private $userRepo, $depositRepo, $withdrawRepo, $tradeRepo;
    public function __construct()
    {
        $this->userRepo = new UserRepository();
        $this->depositRepo = new DepositRepo();
        $this->withdrawRepo = new WithdrawalRepo();
        $this->tradeRepo = new TradeRepository();
    }
    public function getUserProperty()
    {
        return $this->userRepo->find(auth('web')->user()->id);
    }
    public function getPendingDepositsTotalProperty()
    {
        return $this->depositRepo->pendingDepositsTotal($this->user->id);
    }

    public function getPendingWithdrawalTotalProperty()
    {
        return $this->withdrawRepo->pendingWithdrawalTotal($this->user->id);
    }

    public function getActiveTradesTotalProperty()
    {
        return $this->tradeRepo->activeTradesTotal($this->user->id);
    }

    public function getEstimatedBalanceProperty()
    {
        $activeTRadesAmount = $this->activeTradesTotal;
        $pendingWithdrawals = $this->pendingWithdrawalTotal;
        $pendingDeposit = $this->pendingDepositsTotal;
        return $this->user->balance + $activeTRadesAmount + $pendingDeposit - $pendingWithdrawals;
    }

    public function render()
    {
        return view('livewire.user.dashboard');
    }
}
