<?php

namespace App\Http\Livewire\User;

use App\Models\Deposit;
use Livewire\Component;
use Livewire\WithPagination;
use App\Repository\DepositRepo;
use App\Repository\TradeRepository;
use App\Repository\UserRepository;
use App\Repository\WithdrawalRepo;

class Wallet extends Component
{
    use WithPagination;


    protected $paginationTheme='bootstrap';
    private $userRepo, $depositRepo, $withdrawRepo,$tradeRepo;
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
    public function deposits()
    {
        return $this->user->deposits()->orderBy('status','asc')->paginate(10,['*'],'deposits');
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
        // $withdraw_total = $this->pendingWithdrawalTotal();
        // $deposit_total = $this->pendingDepositsTotal();
        return view('livewire.user.wallet');
    }
}
