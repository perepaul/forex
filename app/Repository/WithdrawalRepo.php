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
}
