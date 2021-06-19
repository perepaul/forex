<div>
    <x-loader :targets="'data.country,data.state,data.city,submit,data.id_file'"/>
    <div class="content-body">
        <div class="container">
            <div class="col-md-6 col-sm-12 m-auto">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Verify Account</h4>
                    </div>
                    <div class="card-body">
                        <form action="#" method="POST" wire:submit.prevent='submit'>
                            <div class="form-group mt-3">
                                <label for="">Name</label>
                                <input type="text" class="form-control" wire:model='user.name' disabled>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Email</label>
                                <input type="email" class="form-control" wire:model='user.email' disabled>
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Country</label>
                                <select name="" id="" class="form-control" wire:model='data.country'>
                                    <option value="" selected>Select Country</option>
                                    @foreach ($countries as $country)
                                        <option value="{{ $country['iso2'] }}">{{ $country['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('data.country')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            @if (!empty($states))
                                <div class="form-group mt-3">
                                    <label for="">State / Province</label>
                                    <select name="" id="" class="form-control" wire:model='data.state'>
                                        <option value="" selected>Select State / Province</option>
                                        @foreach ($states as $stat)
                                            <option value="{{ $stat['iso2'] }}">{{ $stat['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('data.state')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endif

                            @if (!empty($cities))
                                <div class="form-group mt-3">
                                    <label for="">City / Town</label>
                                    <select name="" id="" class="form-control" wire:model='data.city'>
                                        <option value="" selected>Select City / Town</option>
                                        @foreach ($cities as $citi)
                                            <option value="{{ $citi['name'] }}">{{ $citi['name'] }}</option>
                                        @endforeach
                                    </select>
                                    @error('data.city')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            @endif
                            <div class="form-group mt-3">
                                <label for="">Account Currency</label>
                                <select name="" id="" class="form-control" wire:model='data.currency_id'>
                                    <option value="" selected>Select Currency</option>
                                    @foreach ($this->currencies as $k => $currency)
                                        <option value="{{ $currency['id'] }}">{{ $currency['name'] }}</option>
                                    @endforeach
                                </select>
                                @error('data.currency_id')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="">Address</label>
                                <input type="text" class="form-control" wire:model.lazy='data.address'>
                                @error('data.address')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group mt-3">
                                <label for="">Zip Code</label>
                                <input type="text" class="form-control" wire:model.lazy='data.zip_code'>
                                @error('data.zip_code')
                                    <span class="error">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-group mt-3">
                                <label for="">Means of Identification</label>
                                <div class="custom-file">
                                    <input type="file" accept="image/*" class="custom-file-input" id="{{$image_id}}" wire:model='data.id_file'>
                                    {{-- <label class="custom-file-label" for="customFile">Choose file</label> --}}
                                    @error('data.id_file')
                                        <span class="error">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>

                            <button class="btn btn-success w-100 mt-3">Submit</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
