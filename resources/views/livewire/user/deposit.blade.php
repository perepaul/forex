<div>
    <div>
        <div class="content-body">
            <div class="container">
                <div class="mb-3">
                    <div class="d-flex justify-content-between">
                        <a href="{{ route('wallet') }}" class="btn btn-info"> <i class="fas fa-caret-left"></i>
                            Back</a>
                    </div>
                </div>


                <div class="row">

                    <div class="col-md-5 col sm-12 m-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Deposit </h4>
                            </div>
                            <div class="card-body">
                                <form action="#" method="POST" wire:submit.prevent='deposit'>
                                    <div class="form-group">
                                        <label for="">Payment Method</label>
                                        <select name="" id="" class="form-control" wire:model='method'>
                                            <option value="">Deposit Method</option>
                                            <option value="bitcoin">Bitcoin</option>
                                            <option value="ethereum">Ethereum</option>
                                            <option value="paypal">Paypal</option>
                                            <option value="stripe">Stripe</option>
                                            <option value="bank">Bank Transfer</option>
                                        </select>
                                        @error('method')
                                            <span class="error">{{$message}}</span>
                                        @enderror
                                    </div>
                                    @if ($method && $method != 'bank')
                                        <div class="col-5 m-auto">
                                            <img src="{{ config('constants.' . $method . '_qr') }}" alt="" width="170"
                                                class="mx-auto">
                                        </div>
                                        <div class="copy-link">
                                            <label for="">{{ ucfirst($method) }} Address</label>
                                            <div class="input-group">
                                                <input type="text" class="form-control" id="copy-text"
                                                    value="{{ config('constants.' . $method . '_wallet_address') }}">
                                                <button type="button" class="input-group-text pb-0 pt-0 bg-primary"
                                                    id="copy">Copy</button>
                                            </div>

                                        </div>
                                    @endif

                                    <div class="form-group">
                                        <label for="">Amount</label>
                                        <input type="text" class="form-control" wire:model='amount'>
                                        @error('amount')
                                            <span class="error">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <div class="form-group mt-2">
                                        <label for="">Proof of payment</label>
                                        <input type="file" class="form-file-input" id="{{$image_upload_id}}" wire:model='image'>
                                        @error('image')
                                            <span class="error">{{$message}}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-success w-100 mt-3 mb-1">Deposit</button>
                                    <a href="#" wire:click='help' class="float-right">Need help?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                    <h4 class="card-title">History</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped responsive-table">
                                        <thead>
                                            <tr>
                                                <th>reference</th>
                                                <th>Amount</th>
                                                <th>Method</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($this->deposits as $deposit)
                                                <tr>
                                                    <td>{{$deposit->reference}}</td>
                                                    <td>
                                                        {{format_money($deposit->amount)}}
                                                    </td>
                                                    <td>
                                                        {{$deposit->method}}
                                                    </td>
                                                    <td>
                                                        <i class="fa fa-clock"></i>
                                                        {{$deposit->created_at->format('d M, Y')}}
                                                    </td>
                                                    <td>
                                                        {{$deposit->status}}
                                                    </td>
                                                </tr>
                                            @empty
                                                <tr>
                                                    <td colspan="5" class="text-center text-muted">No withdrawals yet.</td>
                                                </tr>
                                            @endforelse
                                            <tr>
                                                <td colspan="8" class="">
                                                    <div class="d-flex justify-content-center">
                                                        <div>
                                                            {{$this->deposits->links()}}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="modal fade" id="payment-help">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Help</h5>
                        <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <p>To deposit to your account, follow this 5 simple steps or contact support for assistance.</p>
                        <ol>
                            <li style="list-style-type: decimal !important;">Copy the address.</li>
                            <li style="list-style-type: decimal !important;">Go to a third-party Cryptocurrency app.
                            </li>
                            <li style="list-style-type: decimal !important;">Send amount to the address.</li>
                            <li style="list-style-type: decimal !important;">Screenshot the success page.</li>
                            <li style="list-style-type: decimal !important;">upload it as the proof of payment</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
