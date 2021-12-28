<div class="contact-form section-padding">
    <x-loader :targets="'send'" />
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-xl-7">
                <div class="section-title text-center">
                    <span>Ask Question</span>
                    <h2>Let us hear from you directly!</h2>
                </div>
            </div>
        </div>
        <div class="row">
            {{-- <div class="col-xl-4 col-md-4 col-sm-12">
                <div class="info-list">
                    <h4 class="mb-3">Address</h4>
                    <ul>
                        <li><i class="fa fa-map-marker"></i> {{config('constants.address')}}</li>
                        <li><i class="fa fa-phone"></i> {{config('constants.phone_number')}}</li>
                        <li><i class="fa fa-envelope"></i> {{config('constants.contact_email')}}</li>
                    </ul>
                </div>
            </div> --}}
            <div class="col-xl-8 col-md-8 col-sm-12">
                <form method="post" name="myform" class="contact_validate" wire:submit.prevent='send'>
                    <div class="row">
                        <div class="col-12 col-md-6">
                            <input type="text" wire:model='check' style="display:none">
                            <div class="mb-3">
                                <label class="form-label">
                                    Full name
                                </label>
                                <input type="text" class="form-control" id="contactName" placeholder="Full name"
                                     wire:model='name'>
                                     @error('name')<span class="error">{{$message}}</span>@enderror
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="mb-3">
                                <label class="form-label">
                                    Email
                                </label>
                                <input type="email" class="form-control" name="email" placeholder="hello@domain.com"
                                     wire:model='email'>
                                     @error('email')<span class="error">{{$message}}</span>@enderror


                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <label class="form-label">
                                    Subject
                                </label>
                                <input type="text" class="form-control" name="subject" placeholder="Enter subject" wire:model='subject'>
                                @error('subject')<span class="error">{{$message}}</span>@enderror


                            </div>
                        </div>
                        <div class="col-12">
                            <div class="mb-3">
                                <textarea class="form-control p-3" name="message" rows="5" cols="10"
                                    placeholder="Tell us what we can help you with!" wire:model='message'></textarea>
                                    @error('message')<span class="error">{{$message}}</span>@enderror

                            </div>
                        </div>
                    </div>
                    <button type="submit" class="btn btn-primary px-4 py-2">
                        Send message
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
