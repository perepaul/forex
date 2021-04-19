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
                                <h4 class="card-title">Withdrawal History</h4>
                            </div>
                            <div class="card-body">
                                <form action="#" method="POST" wire:submit.prevent='withdraw'>
                                    <div class="form-group">
                                        <label for="">Withdrawal Method</label>
                                        <select name="" id="" class="form-control" wire:model='method'>
                                            <option value="">Deposit Method</option>
                                            <option value="bitcoin">Bitcoin</option>
                                            <option value="ethereum">Ethereum</option>
                                            <option value="paypal">Paypal</option>
                                            <option value="stripe">Stripe</option>
                                            <option value="bank">Bank Transfer</option>
                                        </select>
                                        @error('method')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    @if ($method && $method != 'bank')
                                        <div class="form-group mt-3">
                                            <label for="">{{ ucfirst($method) }} Address</label>
                                            <input type="text" class="form-control" wire:model='address'>
                                            @error('address')
                                                <span class="error">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        <div class="form-group d-flex justify-content-between mt-3">
                                            <label for="">Save Address</label>
                                            <input type="checkbox" wire:model='save' class="ml-3">
                                        </div>
                                    @endif

                                    <div class="form-group mt-3">
                                        <label for="">Amount</label>
                                        <input type="text" class="form-control" wire:model='amount'>
                                        @error('amount')
                                            <span class="error">{{ $message }}</span>
                                        @enderror
                                    </div>

                                    <button type="submit" class="btn btn-success w-100 mt-3 mb-1">Withdraw</button>
                                    <a href="#" wire:click='help' class="float-right">Need help?</a>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header d-flex justify-content-between">
                                <h4 class="card-title">Withdrawal History</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Amount</th>
                                                <th>Fee</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($this->withdrawals as $withdrawal)
                                                <tr>
                                                    <td>{{ $withdrawal->reference }}</td>
                                                    <td>
                                                        {{ format_money($withdrawal->amount) }}
                                                    </td>
                                                    <td>
                                                        0.02%
                                                    </td>
                                                    <td>
                                                        <i class="fa fa-clock"></i>
                                                        {{ $withdrawal->created_at->format('d M, Y') }}
                                                    </td>
                                                    <td>
                                                        Pending
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
                                                            {{ $this->withdrawals->links() }}
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

                    {{-- <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Deposit History </h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped responsive-table">
                                        <thead>
                                            <tr>
                                                <th>Asset</th>
                                                <th>Balance</th>
                                                <th>Available</th>
                                                <th>Locked</th>
                                                <th>% Gain</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="coin-name">
                                                    <i class="cc BTC"></i>
                                                    <span>Bitcoin</span>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                <td>
                                                    >0
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                <td class="success-arrow">
                                                    <strong>0.005%</strong>
                                                    <i class="icofont-arrow-up ml-2"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="coin-name">
                                                    <i class="cc BTC"></i>
                                                    <span>Bitcoin</span>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                <td>
                                                    >0
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                <td class="success-arrow">
                                                    <strong>0.005%</strong>
                                                    <i class="icofont-arrow-up ml-2"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="coin-name">
                                                    <i class="cc BTC"></i>
                                                    <span>Bitcoin</span>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                <td>
                                                    >0
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                <td class="success-arrow">
                                                    <strong>0.005%</strong>
                                                    <i class="icofont-arrow-up ml-2"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="coin-name">
                                                    <i class="cc BTC"></i>
                                                    <span>Bitcoin</span>
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                <td>
                                                    >0
                                                </td>
                                                <td>
                                                    0
                                                </td>
                                                <td class="success-arrow">
                                                    <strong>0.005%</strong>
                                                    <i class="icofont-arrow-up ml-2"></i>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> --}}
                    {{-- <div class="col-12">
                        <h4 class="card-title">Deposit History</h4>
                    </div>
                    <div class="col-xxl-6">
                        <div class="card">
                            <div class="card-header">
                                <div class="d-flex d-justify-content-between">
                                    <h4 class="card-title">Deposit History</h4>
                                    <div>
                                        <div class="form-group">
                                            <label for="">Type</label>
                                            <select name="" id="" class="form-control">
                                                <option value=""></option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped responsive-table">
                                        <thead>
                                            <tr>
                                                <th>ID</th>
                                                <th>Type</th>
                                                <th>Amount</th>
                                                <th>Date</th>
                                                <th>Hash</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($deposits as $deposit)
                                                <tr>
                                                    <td>12345</td>
                                                    <td class="coin-name">
                                                        <i class="cc BTC"></i>
                                                        <span>Bitcoin</span>
                                                    </td>
                                                    <td>
                                                        0
                                                    </td>
                                                    <td>
                                                        Jan 01
                                                    </td>
                                                    <td>
                                                        #1236598745565
                                                    </td>
                                                    <td>
                                                        Pending
                                                    </td>
                                                </tr>
                                            @empty

                                            @endforelse
                                        </tbody>
                                    </table>
                                </div>

                                <div class="table-responsive">
                                    <table class="table table-striped responsive-table">
                                        <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>Amount</th>
                                                <th>Fee</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($withdrawals as $withdrawal)
                                                <tr>
                                                    <td>{{$withdrawal->reference}}</td>
                                                    <td>
                                                        {{format_money($withdrawal->amount)}}
                                                    </td>
                                                    <td>
                                                        0.02%
                                                    </td>
                                                    <td>
                                                        <i class="fa fa-clock"></i>
                                                        {{$withdrawal->created_at->format('d M, Y')}}
                                                    </td>
                                                    <td>
                                                        Pending
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
                                                            {{$withdrawals->links()}}
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>

                            </div>
                        </div>
                    </div> --}}
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
                        <p>To withdarw from your available balance, fill out the form, an we will send the amount to the
                            payment method you select</p>
                        <ol>
                            <li style="list-style-type: decimal !important;">Select your payment method.</li>
                            <li style="list-style-type: decimal !important;">Fill out the details that appear after
                                that.</li>
                            <li style="list-style-type: decimal !important;">Enter amount you wish to withdraw.</li>
                        </ol>
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
                    <div class="modal-body pt-5 pb-5">
                        <div class="identity-content">
                            <span class="icon"><i class="icofont-check"></i></span>
                        </div>

                        <p class="text-center">{{ $this->message }}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
