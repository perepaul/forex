<?php

namespace App\Repository;

use App\Models\Withdrawal;

class WithdrawalRepo extends BaseRepository
{
    protected $modelClass = Withdrawal::class;

    public function status($id,$option = 'processing')
    {
        $data = ['status'=>config('withdrawals.status.'.$option)];

        return $this->update($data,$id);
    }

    public function pendingWithdrawalTotal($id)
    {
        return $this->model->where('user_id',$id)->where('status','pending')->groupBy('created_at')->sum('amount');
    }
}
