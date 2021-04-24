<div>
    <div class="content-body">
        <div class="container">
            <div class="trade-app section-padding">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-xl-6">
                            <div class="section-title text-center">
                                <h2>Our Trading Plans</h2>
                                <p> Click on subcribe button to choose to a plan </p>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        @foreach ($this->plans as $k => $plan)
                            <div class="col-xl-4 col-lg-4 col-md-12">
                                <div class="card trade-app-content @if($loop->odd)bg-secondary @endif">
                                    <div class="card-body">
                                        <span><i class="fas fa-gift"></i></span>
                                        <h4 class="card-title">{{$plan->name}}</h4>
                                        {{-- <p>All the power of Tradee's cryptocurrency exchange, in the palm of your hand.
                                            Download the
                                            Tradee mobile crypto trading app today</p> --}}
                                            <ul class="list-group list-group-flush text-left rounded">
                                                <li class="list-group-item"><i class="fa fa-check text-success"> </i>&nbsp;&nbsp; Get {{$plan->topup_bonus_percentage}}% of your first deposit</li>
                                                <li class="list-group-item"><i class="fa fa-check text-success"> </i>&nbsp;&nbsp; Get {{format_money($plan->demo_balance)}} on your demo account for practice</li>
                                                @foreach ($plan->features as $feature)
                                                <li class="list-group-item"><i class="fa fa-check text-success"> </i>&nbsp;&nbsp; {{$feature->value}}</li>
                                                @endforeach
                                              </ul>

                                        <a href="#" wire:click='subscribe({{$plan->id}})' class="btn btn-primary text-white mt-3"> Subscribe</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
        <div class="modal fade" id="success-modal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Success</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <div class="auth-form">
                                <div class="identity-content">
                                    <span class="icon"><i class="icofont-check"></i></span>
                                    <p>{{$message}}</p>
                                </div>
                            <div class="card-footer text-center">
                                <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
