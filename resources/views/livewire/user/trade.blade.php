<div>
    <div>
        <div class="content-body pt-3">
            <div class="container">
                <div class="row">
                    <div class="col-md-5 rounded col-sm-12 m-auto">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Trade</h4>
                            </div>
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="">Currency</label>
                                    <select wire:model='trade_currency_id' class="form-control">
                                        <option value="" selected>Select Currency</option>
                                        @foreach ($this->currencies as $currency)
                                            <option value="{{ $currency->id }}">{{ $currency->name }}</option>
                                        @endforeach
                                    </select>
                                    @error('trade_currency_id')
                                        <span class="error">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Pay with</label>
                                    <select wire:model='is_demo' class="form-control">
                                        @foreach (['Demo Balance', 'Balance'] as $method)
                                            <option value="{{ $loop->first ? 1 : 0 }}">{{ $method }}</option>
                                        @endforeach
                                    </select>
                                    @error('is_demo')
                                        <span class="error">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="form-group">
                                    <label for="">Amount</label>
                                    <input type="number" class="form-control" min="1" value="1" wire:model='amount'>
                                    @error('amount')
                                        <span class="error">{{$message}}</span>
                                    @enderror
                                </div>

                                <div class="d-flex justify-content-between mt-3">
                                    <button type="button" class="btn btn-success btn-flat btn-round" wire:click='buy'>
                                        &nbsp; &nbsp; Buy &nbsp; &nbsp;
                                    </button>
                                    <button type="button" class="btn btn-primary btn-flat btn-round" wire:click='sell'>
                                        &nbsp; &nbsp; Sell &nbsp; &nbsp;
                                    </button>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-xxl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Trades</h4>
                            </div>
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-striped responsive-table">
                                        <thead>
                                            <tr>
                                                <th>Type</th>
                                                <th>Currency</th>
                                                <th>From</th>
                                                <th>Amount</th>
                                                <th>Profit/Loss</th>
                                                <th>Date</th>
                                                <th>Status</th>
                                                <th>Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @forelse ($this->trades as $trade)

                                                <tr>
                                                    <td><span
                                                            class="{{ $trade->type == 'sell' ? 'danger-arrow' : 'success-arrow' }}"><i
                                                                class="icofont-arrow-{{ $trade->type == 'sell' ? 'down' : 'up' }}"></i>
                                                            {{ ucfirst($trade->type) }}</span>
                                                    </td>
                                                    <td class="coin-name">
                                                        {{ $trade->currency->name }}
                                                    </td>
                                                    <td>
                                                        {{ $trade->is_demo ? 'Demo Balance' : 'Balance' }}
                                                    </td>
                                                    <td>{{ format_money($trade->amount) }}</td>
                                                    <td class="text-{{ $trade->profit < 0 ? 'danger' : 'success' }}">
                                                        {{ format_money($trade->profit) }}
                                                    </td>
                                                    <td>
                                                        <i class="fa fa-clock"></i>
                                                        {{ $trade->created_at->format('d M, Y') }}
                                                    </td>
                                                    <td class="text-{{ $trade->status == 'inactive' ? 'danger' : 'success' }}">
                                                        {{ucfirst($trade->status)}}
                                                    </td>
                                                    <td>
                                                       <button class="btn btn-sm btn-primary btn-glow" wire:click='warnEndTrade({{$trade->id}})'>End Trade</button>
                                                    </td>
                                                </tr>
                                            @empty
                                            <tr>
                                                <td colspan="8" class="text-center text-muted">You have no trades yet!</td>
                                            </tr>
                                            @endforelse
                                            <tr>
                                                <td colspan="8" class="">
                                                    <div class="d-flex justify-content-center">
                                                        <div>
                                                            {{$this->trades->links()}}
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
    <div >
        {{-- @section('modals') --}}
            <div class="modal fade" id="trade-modal" style="">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Confirmation</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="table-responsive">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td>Type</td>
                                            <td>{{ ucfirst($type) }}</td>
                                        </tr>
                                        <tr>
                                            <td>Fee</td>
                                            <td>{{format_money($fee)}}</td>
                                        </tr>
                                        @if(!empty($amount))
                                        <tr>
                                            <td>Total</td>
                                            <td>{{ format_money($amount) }}</td>
                                        </tr>
                                        <tr>
                                            <td> Sub Total</td>
                                            <td> {{format_money($amount + $fee)}}</td>
                                        </tr>
                                        @endif
                                    </tbody>
                                </table>
                            </div>
                            <div class="text-right">
                                <button type="button" class="btn btn-primary" wire:click='trade'>Confirm</button>
                            </div>
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
                                        <p>Congratulation. Your transaction is successful</p>
                                    </div>
                                <div class="card-footer text-center">
                                    <button type="button" class="btn btn-success" data-dismiss="modal" aria-label="Close">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="modal fade" id="confirm-end-trade">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Success</h5>
                            <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <div class="auth-form">
                                    <div class="identity-content">
                                        <span class="icon"><i class="icofont-exclamation"></i></span>
                                        <p class="text-danger">Are you sure, you want to end this trade?</p>
                                    </div>
                                <div class="card-footer text-center">
                                    <button type="button" class="btn btn-success mr-1" data-dismiss="modal" aria-label="Close">No</button>
                                    <button type="button" class="btn btn-danger ml-1" wire:click='endTrade({{$ending}})'>Yes</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        {{-- @endsection --}}
    </div>
</div>
