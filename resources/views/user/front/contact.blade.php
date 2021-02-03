@extends('layouts.user.app')

@section('title', 'Contact us')
@section('page')
    <div class="contact-form section-padding">
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
                <div class="col-xl-4 col-md-4 col-sm-12">
                    <div class="info-list">
                        <h4 class="mb-3">Address</h4>
                        <ul>
                            <li><i class="fa fa-map-marker"></i> California, USA</li>
                            <li><i class="fa fa-phone"></i> (+880) 1243 665566</li>
                            <li><i class="fa fa-envelope"></i> hello@example.com</li>
                        </ul>
                    </div>
                </div>
                <div class="col-xl-8 col-md-8 col-sm-12">
                    <form method="post" name="myform" class="contact_validate">
                        <div class="row">
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Full name
                                    </label>
                                    <input type="text" class="form-control" id="contactName" placeholder="Full name"
                                        name="name" value="{{auth('web')->user()->name ?? ''}}">
                                </div>
                            </div>
                            <div class="col-12 col-md-6">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Email
                                    </label>
                                    <input type="email" class="form-control" name="email" placeholder="hello@domain.com" value="{{auth('web')->user()->email ?? ''}}">

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <label class="form-label">
                                        Subject
                                    </label>
                                    <input type="text" class="form-control" name="subject" placeholder="Enter subject">

                                </div>
                            </div>
                            <div class="col-12">
                                <div class="mb-3">
                                    <textarea class="form-control p-3" name="message" rows="5" cols="10"
                                        placeholder="Tell us what we can help you with!"></textarea>
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
@endsection
