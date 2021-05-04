<?php

namespace App\Http\Livewire\User;

use App\Actions\Fortify\PasswordValidationRules;
use App\Helpers\CountryHelper;
use App\Repository\UserRepository;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Log;
use Livewire\Component;
use Livewire\WithFileUploads;

class ProfileEdit extends Component
{
    use WithFileUploads;
    use PasswordValidationRules;
    private $userRepo, $countryHelper;
    public $user, $image, $image_id, $password, $validate_password,
        $password_confirmation, $phone, $two_factor_auth;
    public $countries,
        $states,
        $cities,
        $city,
        $state,
        $country,
        $zip_code,
        $address,
        $gender,
        $dob;
    public function __construct()
    {
        $this->userRepo = new UserRepository();
        $this->countryHelper = new CountryHelper();
    }

    public function getAuthUserProperty()
    {
        return $this->userRepo->find(auth('web')->user()->id);
    }

    public function mount()
    {
        $this->user = $this->auth_user->toArray();
        $this->image_id = rand();
        $this->setPageData();
    }

    private function setPageData()
    {
        $this->dob = optional($this->auth_user->dob)->format('Y-m-d');
        $this->countries = $this->countryHelper->countries()->toArray();
        $country = array_values(array_where($this->countries, $this->auth_user->country, 'name'));
        $this->country = $country[0]['iso2'];
        $this->states = $this->countryHelper->states($this->country)->toArray();
        $state = array_values(array_where($this->states, $this->auth_user->state, 'name'));
        $this->state = $state[0]['iso2'];
        $this->cities = $this->countryHelper->cities($this->country, $this->state)->toArray();
        $this->city = $this->auth_user->city;
        $this->zip_code = $this->auth_user->zip_code;
        $this->phone = $this->auth_user->phone;
    }

    public function profileUpdate()
    {
        $this->validate([
            'image' => 'sometimes|mimes:png,jpg,jpeg|max:20480',
            'user.name' => 'required|string'
        ]);
        $user['name'] = $this->user['name'];
        if (isset($this->image)) {
            $user['avatar'] = basename($this->image->store('images/profile', 'custom_public'));
            try {
                @unlink(public_path('images/profile' . $this->auth_user->avatar));
            } catch (\Throwable $th) {
                Log::error($th);
            }
        }
        $this->auth_user->update($user);
        $this->image_id = rand();
        $this->reset('image');
        $this->emit('success', ['message' => 'Basic profile info updated']);
    }

    public function getStateName()
    {
        $state = array_values(array_where($this->states, $this->state));
        return $state[0]['name'];
    }

    public function getCountryName()
    {
        $country = array_values(array_where($this->countries, $this->country));
        return $country[0]['name'];
    }

    public function updatedCountry()
    {
        $this->setStates();
    }

    public function updatedState()
    {
        $this->setCities();
    }

    private function setStates()
    {
        $this->states = $this->cities = [];
        $this->states = $this->countryHelper->states($this->country)->toArray();
    }

    private function setCities()
    {
        $this->cities = [];
        $this->cities = $this->countryHelper->cities($this->country, $this->state)->toArray();
    }

    public function updatePersonalInfo()
    {
        $data = $this->validate([
            'country' => 'required|string',
            'state' => 'required|string',
            'city' => 'required|string',
            'address' => 'required|string',
            'zip_code' => 'bail|min:5|integer',
            'dob' => 'required',
            'gender' => 'required'
        ]);

        $data['country'] = $this->getCountryName();
        $data['state'] = $this->getStateName();
        $this->userRepo->update($data, $this->auth_user->id);
        $this->emit('success', ['message' => 'Updated personal information']);
    }

    protected function rules()
    {
        return [
            'phone' => 'required|regex:/^[+][0-9]/',
            'password' => ['nullable','string', new \Laravel\Fortify\Rules\Password, 'confirmed'],
            'two_factor_auth' => 'nullable'
        ];
    }

    public function getPasswordPrompt()
    {
        $data = $this->validate();
        $this->emit('toggle-modal', ['id' => 'confirm-password']);
    }

    public function saveSecurityData()
    {
        $data = $this->validate();
        if (Hash::check($this->validate_password, $this->auth_user->password)) {
            $updateFields['phone'] = $data['phone'];
            if (isset($data['password']) && $data['password'] != '') {
                $updateFields['password'] = $data['password'];
                $this->emit('redirect',['to'=>route('profile-edit')]);
            }
            $this->auth_user->update($updateFields);
            $this->emit('toggle-modal', ['id' => 'confirm-password']);
            $this->emit('success',['message'=>'Security data updated. Reloadinig..']);
        }else{
            $this->emit('error',['errors'=>['Incorret or invalid password']]);
        }
    }

    public function render()
    {
        return view('livewire.user.profile-edit');
    }
}
