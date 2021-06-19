<?php

namespace App\Http\Livewire\User;

use Livewire\Component;
use Livewire\WithFileUploads;
use App\Helpers\CountryHelper;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Mail;
use App\Repository\AccountCurrencyRepo;
use App\Mail\User\DetailsSubmittedMailable;

class Verify extends Component
{
    use WithFileUploads;
    public $user,$data;
    private $userRepo,$countryHelper,$currencyRepo;
    public $countries,$states,$cities,$image_id;

    public function __construct()
    {
        $this->userRepo = new UserRepository();
        $this->user = $this->setUser();
        $this->countryHelper = new CountryHelper();
        $this->currencyRepo = new AccountCurrencyRepo();
        $this->image_id = rand();
        $this->setCountries();
        // dd($this->currencyRepo->all()->values()->toArray());
    }

    protected function rules()
    {
        return [
            'data.country'=>'required',
            'data.state' => 'required',
            'data.city' =>'sometimes|required',
            'data.currency_id'=>'required|numeric|integer',
            'data.address' => 'required',
            'data.zip_code' => 'bail|required|string|min:5',
            'data.id_file' => 'required|file|mimes:jpeg,jpg,png|max:1024'
        ];
    }

    public function updated($field,$value)
    {
        $this->validateOnly($field);
    }

    public function setCountries()
    {
        $this->countries = $this->countryHelper->countries()->toArray();
    }

    public function updatedDataCountry($val){
        $this->setStates();
    }

    public function updatedDataState($val)
    {
        $this->setCities();
    }

    public function setStates()
    {
        $this->states = $this->countryHelper->states($this->data['country'])->toArray();
    }

    public function setCities()
    {
        $this->cities = $this->countryHelper->cities($this->data['country'],$this->data['state'])->toArray();
    }

    public function setUser()
    {
        return $this->userRepo->find(auth('web')->user()->id)->toArray();
    }

    public function getStateName()
    {
        $state = array_values(array_where($this->states,$this->data['state']));
        return $state[0]['name'];
    }

    public function getCountryName()
    {
        $country = array_values(array_where($this->countries,$this->data['country']));
        return $country[0]['name'];
    }

    public function getCurrenciesProperty()
    {
        return $this->currencyRepo->all();
    }

    public function submit()
    {
        $data = $this->validate();
        $userData = $data['data'];
        $userData['state'] = $this->getStateName();
        $userData['country'] = $this->getCountryName();
        $userData['status'] = 2;
        $userData['id_file'] = basename($this->data['id_file']->storePublicly('assets/identification','custom_public'));
        $this->userRepo->update($userData,auth('web')->user()->id);
        $this->emit('success',['message'=>'We have received your details, our agents will verify the data you submitted.']);
        Mail::to(auth('web')->user())->send(new DetailsSubmittedMailable);
        $this->reset('data');
        $this->image_id = rand();
        $this->emit('redirect',['to'=>route('profile')]);


    }
    public function render()
    {
        return view('livewire.user.verify');
    }
}
