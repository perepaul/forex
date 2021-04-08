<?php

namespace App\Repository;

use App\Models\Plan;
use App\Models\PlanFeature;
use Illuminate\Support\Facades\DB;

class PlanRepository extends BaseRepository
{
    protected $modelClass = Plan::class;

    public function reconcileFeatures($data,$id)
    {
        $plan = $this->find($id);
        $plan->features()->delete();
        foreach($data as $d)
        {
            $plan->features()->save(new PlanFeature($d));
        }
    }
}
