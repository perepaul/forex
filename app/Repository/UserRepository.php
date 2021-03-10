<?php

namespace App\Repository;

use App\Models\User;

class UserRepository extends BaseRepository
{
    protected $modelClass = User::class;


    public function updateStatus($id)
    {
        $user = $this->find($id);
        $user->status = !$user->status;
        $user->save();
    }
}
