<?php

namespace App\Http\Livewire\Admin;

use App\Repository\PlanRepository;
use Illuminate\Support\Facades\Log;
use Livewire\Component;

class Plans extends Component
{
    protected $plan;
    public $action = "Add Plan", $editing = null, $active = 'plan';
    public $data;

    public function __construct()
    {
        $this->plan = new PlanRepository();
    }

    protected function rules()
    {
        if ($this->active == 'plan') {
            $rules = [
                'data.plan.name'=>'required|min:4,max:30',
                'data.plan.demo_balance'=>'required|numeric|integer|gt:0',
                'data.plan.topup_bonus_percentage'=>'required|numeric|integer|gt:0'
            ];
        } else {
            $rules = [
                'data.features.*.value'=>'required|string|min:4|max:45'
            ];
        }
        return $rules;
    }

    protected $messages = [
        'data.features.*.value.required' => 'each :attribute cannot be empty.',
        'data.features.*.value.min' => 'each :attribute must be lesser than 4 characters.',
        'data.features.*.value.max' => 'each :attribute must be greater than 45 characters.'
    ];

    protected $validationAttributes = [
        'data.plan.name' => 'plan name',
        'data.plan.demo_balance' => 'demo balance',
        'data.plan.topup_bonus_percentage' => 'bonus percentage',
        'data.features.*.value' => 'feature'
    ];

    public function updated($field)
    {
        // dd($field);
        $this->validateOnly($field);
    }

    private function switch($to = 'feature'){
        if($to == 'feature' && !isset($this->data['featrues']))
        {
            $this->data['features'] = [];
        }
        $status = $this->editing == null?'Add ':'Edit ';

        $this->active = $to == 'feature' ? 'feature':'plan';
        $this->action = $status.ucfirst($this->active);
    }

    public function edit($id)
    {
        $plan = $this->plan->find($id);
        $this->editing = $plan->id;
        $this->data['plan'] = $plan->toArray();
        $this->switch('plan');
    }

    public function addOrUpdatePlan($id=null)
    {
        if($id == null){
            try {
                $plan = $this->addPlan();
                $this->editing = $plan->id;
                $this->emit('success',['message'=>'Plan added successfully']);
                $this->switch('feature');
            } catch (\Throwable $th) {
                Log::error($th);
                $this->emit('error',['errors'=>['Oops! an unknown error occured']]);
            }
        }else{
            $this->updatePlan($id);
            $this->emit('success',['message'=>'Plan Updated!']);
            $this->resetForm();
        }
    }

    public function addPlan()
    {
        $data = $this->validate()['data']['plan'];
        return $this->plan->create($data);
    }

    public function updatePlan($id)
    {
        $data = $this->validate()['data']['plan'];
        $this->plan->update($data,$id);
    }

    public function addorUpdateFeatures($id)
    {
        if(!empty($this->data['features'])){
            $data = $this->validate()['data']['features'];
            $this->plan->reconcileFeatures($data,$id);
            $this->emit('success',['message'=>'plans added successfully']);
            $this->resetForm();
        }else{
            $this->emit('error',['errors'=>['No features to add to plan']]);
        }
    }

    public function resetForm()
    {
        $this->reset('action','editing','active','data');
    }

    public function attachFeatures($id)
    {
        $plan = $this->plan->find($id);
        $this->editing = $plan->id;
        $this->switch();
        $this->data['features'] = $plan->features->toArray();
        // dd($this->data);

    }

    public function addEntry()
    {
        array_unshift($this->data['features'],['value']);
    }

    public function removeEntry($index)
    {
        // dd($index);
        $this->data['features'] = array_filter($this->data['features'],function($k) use ($index){
            return $k != $index;
        },ARRAY_FILTER_USE_KEY);

        array_unshift($this->data['features']);

    }

    public function delete($id)
    {
        $plan = $this->plan->find($id);
        $plan->features()->delete();
        $plan->delete();
        $this->emit('success',['message'=>'Plan deleted!']);
    }
    private function data()
    {
        $query = $this->plan->getModel();
        if (!empty($this->filter) && $this->filter != "all") {
            $query = $query->where('status', '=', $this->filter);
        }
        if (!empty($this->search)) {
            $query = $query->where('reference', 'LIKE', "%{$this->search}%")->orWhereHas('user', function ($q) {
                $q->where('name', 'LIKE', "%{$this->search}%");
            });
        }
        return $query->paginate(10);
    }

    public function render()
    {
        return view('livewire.admin.plans', ['plans' => $this->data()]);
    }
}
