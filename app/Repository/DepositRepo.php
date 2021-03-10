<?php

namespace App\Repository;

use App\Models\Deposit;

class DepositRepo extends BaseRepository
{
    protected $modelClass = Deposit::class;

    public function status($id,$status = 'processing'){
        $data = ['status'=>$status];
        $this->find($id)->update($data);
    }

    public function approve($id)
    {
        $this->status($id,'approved');
        $deposit = $this->find($id);
        $user = $deposit->user;
        $user->update(['balance'=>$user->balance + $deposit->amount]);
    }

    public function decline($id)
    {

    }
}
