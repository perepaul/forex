<div>
    <div class="content-body pt-3">
        <div class="container">
            <div class="row">
                <div class="col-xxl-12 col-xl-12">
                    <div class="page-title">
                        <h4>Profile</h4>
                    </div>
                    <div class="row">
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">User Profile</h4>
                                </div>
                                <div class="card-body">
                                    <form wire:submit.prevent='profileUpdate'>
                                        <div class="row g-3">
                                            <div class="col-xxl-12">
                                                <label class="form-label">Name</label>
                                                <input type="text" class="form-control" placeholder="Name"
                                                    wire:model='user.name'>
                                            </div>
                                            <div class="col-xxl-12">
                                                <label class="form-label">Email</label>
                                                <input type="email" class="form-control" placeholder="Name"
                                                    wire:model='user.email' disabled>
                                            </div>
                                            <div class="col-xxl-12">
                                                <div class="d-flex align-items-center">
                                                    <img class="mr-3 rounded-circle mr-0 mr-sm-3" src="@if (isset($image)) {{ $image->temporaryUrl() }} @else {{ profile_picture() }} @endif" width="62" height="62" alt="">
                                                    <div class="media-body">
                                                        {{-- <h4 class="mb-0">Jannatul Maowa</h4> --}}
                                                        <p class="mb-0">Max file size is 20mb
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-xxl-12">
                                                <div class="form-file">
                                                    <input type="file" accept="image/*" class="form-file-input"
                                                        id="customFile" wire:model="image" id="image_id">
                                                    @error('image')
                                                        <span class="error d-block">{{ $message }}</span>
                                                    @enderror
                                                </div>
                                            </div>
                                            <div class="col-xxl-12">
                                                <button class="btn btn-success waves-effect">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-6 col-xl-6 col-lg-6">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Account Security</h4>
                                </div>
                                <div class="card-body">
                                    <form action="#" wire:submit.prevent='getPasswordPrompt'>
                                        <div class="row g-3">
                                            <div class="col-xxl-12">
                                                <label class="form-label">Phone <small class="error">* (Use
                                                        international format)</small></label>
                                                <input type="text" class="form-control" placeholder="eg. +182984839344"
                                                    wire:model='phone'>
                                                @error('phone')
                                                    <span class="error d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-xxl-12">
                                                <label class="form-label">Password</label>
                                                <input type="password" class="form-control" placeholder="Password" wire:model='password'>
                                                @error('password')
                                                    <span class="error d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-xxl-12">
                                                <label class="form-label">Confirm Password</label>
                                                <input type="password" class="form-control"
                                                    placeholder="Confirm password" wire:model='password_confirmation'>
                                                    @error('password_confirmation')
                                                        <span class="error d-block">{{ $message }}</span>
                                                    @enderror
                                            </div>
                                            <div class="col-xxl-12">
                                                {{-- <label class="form-label">2 Factor Authentication</label> --}}
                                                <div class="form-check form-switch">
                                                    <input class="form-check-input " type="checkbox"
                                                        id="flexSwitchCheckDefault" name="remember" wire:model='two_factor_auth'>
                                                    <label class="form-check-label" for="flexSwitchCheckDefault">2
                                                        Factor Authentication</label>
                                                </div>
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-success waves-effect">Save</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="col-xxl-12">
                            <div class="card">
                                <div class="card-header">
                                    <h4 class="card-title">Personal Information</h4>
                                </div>
                                <div class="card-body">
                                    <form method="post" wire:submit.prevent='updatePersonalInfo' name="myform"
                                        class="personal_validate">
                                        <div class="row g-4">

                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">Country</label>
                                                <select name="" id="" wire:model='country' class="form-select">
                                                    <option value="">Select Country</option>
                                                    @foreach ($countries as $c)
                                                        <option value="{{ $c['iso2'] }}">{{ $c['name'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('country')
                                                    <span class="error d-block">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">State / Region</label>
                                                <select name="" id="" wire:model='state' class="form-select">
                                                    <option value="">Select State / Region</option>
                                                    @foreach ($states as $s)
                                                        <option value="{{ $s['iso2'] }}">{{ $s['name'] }}</option>
                                                    @endforeach
                                                </select>
                                                @error('state')
                                                    <span class="error d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">City</label>
                                                <select name="" id="" class="form-select" wire:model='city'>
                                                    <option value="">Select City</option>
                                                    @foreach ($cities as $ci)
                                                        <option value="{{ $ci['name'] }}">{{ $ci['name'] }}
                                                        </option>
                                                    @endforeach
                                                </select>
                                                @error('city')
                                                    <span class="error d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3">
                                                <label class="form-label">Date of birth</label>
                                                <input type="date" class="form-control hasDatepicker"
                                                    placeholder="10-10-2020" id="datepicker" autocomplete="off"
                                                    name="dob" wire:model='dob'>
                                                @error('dob')
                                                    <span class="error d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-xxl-3 col-xl-3 col-lg-3">
                                                <label class="form-label">Gender</label>
                                                <select name="" id="" class="form-select" wire:model='gender'>
                                                    <option value="">Select Gender</option>
                                                    <option value="male">Male</option>
                                                    <option value="female">Female</option>
                                                    <option value="rather not say">Rather not say</option>
                                                </select>
                                                @error('gender')
                                                    <span class="error d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">Address</label>
                                                <input type="text" class="form-control"
                                                    placeholder="56, Old Street, Brooklyn" wire:model='address'>
                                                @error('address')
                                                    <span class="error d-block">{{ $message }}</span>
                                                @enderror
                                            </div>
                                            <div class="col-xxl-6 col-xl-6 col-lg-6">
                                                <label class="form-label">Zip Code</label>
                                                <input type="text" class="form-control" placeholder="25481"
                                                    wire:model='zip_code'>
                                                @error('zip_code')
                                                    <span class="error d-block">{{ $message }}</span>
                                                @enderror
                                            </div>

                                            <div class="col-12">
                                                <button class="btn btn-success pl-5 pr-5 waves-effect">Update</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div wire:ignore>
        <div class="modal fade" id="confirm-password">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Confirm password</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <form class="auth-form" wire:submit.prevent='saveSecurityData'>
                                <div class="identity-content mb-1">
                                    <p>Please confirm your password to continue.</p>
                                    <img class="rounded-circle" src="@if (isset($image)) {{ $image->temporaryUrl() }} @else {{ profile_picture() }} @endif" width="62" height="62" alt="">
                                    <h4>{{$user['name']}}</h4>
                                    <div class="col-xxl-12">
                                        <input type="password" class="form-control" placeholder="Password" wire:model='validate_password'>
                                        @error('password')
                                            <span class="error d-block">{{ $message }}</span>
                                        @enderror
                                    </div>
                                </div>
                            <div class="text-center mt-2">
                                <button type="submit" class="btn btn-success">Validate</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
