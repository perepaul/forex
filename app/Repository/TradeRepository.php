<?php

namespace App\Repository;

use App\Models\Trade;

class TradeRepository extends BaseRepository
{
    protected $modelClass = Trade::class;

    public function endTrade(int $id)
    {
        $trade = $this->find($id);
        $profit = $trade->amount + $trade->profit;
        $user = $trade->user;
        $balance = $trade->is_demo?'demo_balance':'balance';
        $user->{$balance} +=$profit;
        $user->save();
        $trade->status = 'inactive';
        $trade->save();
    }

    public function placeTrade($data,$balance,$user_id)
    {
        $userRepo = new UserRepository();
        $user = $userRepo->find($user_id);
        $user->{$balance} = $user->{$balance} - ($data['amount'] + $data['fee']);
        $user->trades()->save(new Trade($data));
        $user->save();
    }
}
