<?php

namespace App\Http\Livewire\User;

use App\Models\Trade as TradeModel;
use App\Repository\TradeCurrencyRepo;
use App\Repository\TradeRepository;
use App\Repository\UserRepository;
use Livewire\Component;
use Livewire\WithPagination;

class Trade extends Component
{
    use WithPagination;
    protected $paginationTheme = 'bootstrap';
    private $userRepo, $currencyRepo, $tradeRepo;
    public $trade_currency_id, $is_demo = 1, $amount = 1, $type, $fee = 2.25,$ending;
    public function __construct()
    {
        $this->userRepo = new UserRepository();
        $this->currencyRepo = new TradeCurrencyRepo();
        $this->tradeRepo = new TradeRepository();
    }

    protected $rules = [
        'trade_currency_id' => 'required',
        'is_demo' => 'required',
        'amount' => 'required|gt:10|numeric|integer',
        'type' => 'required'
    ];

    public function updated($field)
    {
        $this->validateOnly($field);
    }

    public function getTradesProperty()
    {
        $user = $this->userRepo->find(auth()->user()->id);
        return TradeModel::where('user_id',$user->id)->orderBy('status','asc')->paginate(5);
    }


    public function getCurrenciesProperty()
    {
        return $this->currencyRepo->all();
    }

    public function buy()
    {
        $this->type = 'buy';
        $this->validate();
        $this->emit('toggle-modal', ['id' => 'trade-modal']);
    }

    public function sell()
    {
        $this->type = "sell";
        $this->validate();
        $this->emit('toggle-modal', ['id' => 'trade-modal']);
    }

    public function trade()
    {
        $this->emit('toggle-modal', ['id' => 'trade-modal']);
        $data = $this->validate();
        $user = auth('web')->user();
        $balance = $data['is_demo'] ? 'demo_balance' : 'balance';
        // dd($user->plan);
        if ($user->plan) {
            if ($user->{$balance} < ($data['amount'] + $this->fee)) {
                $this->emit('error', ['errors' => ['Insufficient Balance, fund your account and try again!']]);
            } else {
                $data['fee'] =  $this->fee;
                $this->tradeRepo->placeTrade($data, $balance, $user->id);
                $this->emit('toggle-modal', ['id' => 'success-modal']);
                $this->reset('trade_currency_id', 'is_demo', 'amount', 'type');
            }
        } else {
            $this->emit('error', ['errors' => ['To trade, you must subscribe to a plan.']]);
        }
    }

    public function warnEndTrade($id)
    {
        $this->ending = $id;
        $this->emit('toggle-modal',['id'=>'confirm-end-trade']);
    }

    public function endTrade($id)
    {
        $this->emit('toggle-modal',['id'=>'confirm-end-trade']);
        $this->tradeRepo->endTrade($id);
        $this->emit('success',['message'=>'Trade ended and profit added to balance']);

    }

    public function render()
    {
        return view('livewire.user.trade');
    }
}
