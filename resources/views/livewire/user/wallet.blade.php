<div>
    <div class="content-body">
        <div class="container">
            <div class="mb-3">
                <div class="d-flex justify-content-between">
                    <a href="{{route('deposit')}}" class="btn btn-info">Deposit</a>
                    <a href="{{route('withdraw')}}" class="btn btn-info">Withdraw</a>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="wallet-widget card">
                        <h5>Estimated Balance</h5>
                        <h5><span class="text-primary">{{format_money($this->estimatedBalance,'none')}}</span> <sub>USD</sub></h5>
                        <p>= trade returns + pending deposits - pending withdrawals</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="wallet-widget card">
                        <h5>Available Balance</h5>
                        <h5><span class="text-success">{{format_money($this->user->balance,'none')}}</span> <sub>{{currency_iso()}}</sub></h5>
                        <p> = your current (available) balance</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="wallet-widget card">
                        <h5>Pending Balance</h5>
                        <h5><span class="text-warning">{{format_money($this->activeTradesTotal + $this->pendingDepositsTotal,'none' )}}</span> <sub>{{currency_iso()}}</sub></h5>
                        <p>= withdrawals + deposits (pending)</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="wallet-widget card">
                        <h5>Demo Balance</h5>
                        <h5><span class="text-danger">{{format_money($this->user->demo_balance,'none')}}</span> <sub>{{currency_iso()}}</sub></h5>
                        <p>= your current (available) demo balance</p>
                    </div>
                </div>
            </div>

            <div class="row">

                {{-- <div class="col-xxl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Wallet Addresses </h4>
                        </div>
                        <div class="card-body">

                            <div class="table-responsive">
                                <table class="table table-striped responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Coin Name</th>
                                            <th>Address</th>
                                            <th>QR</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>
                                                <div class="coin-name">
                                                    <i class="cc BTC"></i>
                                                    <span>Bitcoin</span>
                                                </div>
                                            </td>
                                            <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                                            <td>
                                                <img class="qr-img" src="images/qr.svg" alt="" width="40">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="coin-name">
                                                    <i class="cc BTC"></i>
                                                    <span>Bitcoin</span>
                                                </div>
                                            </td>
                                            <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                                            <td>
                                                <img class="qr-img" src="images/qr.svg" alt="" width="40">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="coin-name">
                                                    <i class="cc BTC"></i>
                                                    <span>Bitcoin</span>
                                                </div>
                                            </td>
                                            <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                                            <td>
                                                <img class="qr-img" src="images/qr.svg" alt="" width="40">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <div class="coin-name">
                                                    <i class="cc BTC"></i>
                                                    <span>Bitcoin</span>
                                                </div>
                                            </td>
                                            <td>35Hb5B6qJa5ntYaNFN3hGYXdAjh919g2VH</td>
                                            <td>
                                                <img class="qr-img" src="images/qr.svg" alt="" width="40">
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-xxl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Balance</h4>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">
                                    <div class="balance-chart">
                                        <div
                                            id="balance-chart"
                                            data-info="{{json_encode([
                                                $this->user->balance,
                                                $this->pendingWithdrawalTotal,
                                                $this->activeTradesTotal,
                                                $this->pendingDepositsTotal
                                                ])}}",
                                            data-names ="{{
                                                json_encode([
                                                    'Balance',
                                                    'Withdraw Total',
                                                    'Active Trades',
                                                    'Pending Deposits'
                                                ])
                                            }}"
                                            >
                                        </div>
                                        <h4>Total Balance => {{format_money($this->estimatedBalance)}}</h4>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-6">

                                    <ul class="balance-widget text-sm">
                                        <li>
                                            <div class="icon-title">
                                                {{-- <i class="cc BTC"></i> --}}
                                                <span>Available Balance</span>
                                            </div>
                                            <div class="text-right">
                                                <h5>{{format_money($this->user->balance,'none')}}</h5>
                                                <span>{{currency_iso()}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-title">
                                                <span>Pending Withdrawals</span>
                                            </div>
                                            <div class="text-right">
                                                <h5>{{format_money($this->pendingWithdrawalTotal,'none')}}</h5>
                                                <span>{{currency_iso()}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-title">
                                                <span>Active Trades</span>
                                            </div>
                                            <div class="text-right">
                                                <h5>{{format_money($this->activeTradesTotal,'none')}}</h5>
                                                <span>{{currency_iso()}}</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-title">
                                                <span>Pending Deposit</span>
                                            </div>
                                            <div class="text-right">
                                                <h5>{{format_money($this->pendingDepositsTotal,'none')}}</h5>
                                                <span>{{currency_iso()}}</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
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
