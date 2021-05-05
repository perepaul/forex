<div>
    <div class="container-full">
        <section class="content">
            <div class="row">
                <div class="col-xl-12 col-12">
                    <div class="row">
                        <div class="col-lg-3 col-12">
                            <div class="box">
                                <div class="box-body py-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="text-fade">Active Users</h5>
                                            <h2 class="font-weight-500 mb-0">{{ $this->users->count() }}</h2>
                                        </div>
                                        <div>
                                            <div id="revenue1"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="box">
                                <div class="box-body py-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="text-fade">
                                                Active Trades
                                            </h5>
                                            <h2 class="font-weight-500 mb-0">{{ $this->trades->count() }}</h2>
                                        </div>
                                        <div>
                                            <div id="revenue2"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="box">
                                <div class="box-body py-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="text-fade">Withdrawals</h5>
                                            <h2 class="font-weight-500 mb-0">{{ $this->withdrawals->count() }}</h2>
                                        </div>
                                        <div>
                                            <div id="revenue3"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-3 col-12">
                            <div class="box">
                                <div class="box-body py-0">
                                    <div class="d-flex justify-content-between align-items-center">
                                        <div>
                                            <h5 class="text-fade">Deposits</h5>
                                            <h2 class="font-weight-500 mb-0">{{ $this->deposits->count() }}</h2>
                                        </div>
                                        <div>
                                            <div id="revenue4"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-xxxl-8 col-xl-8 col-12">
                            <div class="box">
                                <div class="box-header">
                                    <h4 class="box-title">Recent Trades</h4>
                                    <ul class="box-controls pull-right d-md-flex d-none">
                                        <li>
                                            <a href="{{ route('admin.trades') }}" class="btn btn-warning">view all</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-body">
                                    <div class="table-responsive">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Amount</th>
                                                    <th>Profit</th>
                                                    <th>Date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($this->trades as $trade)
                                                    @if ($loop->index > 4)
                                                    @break;
                                                @endif

                                                <tr>
                                                    <td>{{ $trade->user->name }}</td>
                                                    <td>{{ format_money($trade->amount, $trade->user->currency->symbol) }}
                                                    </td>
                                                    <td>{{ format_money($trade->profit, $trade->user->currency->symbol) }}
                                                    </td>
                                                    <td>{{ $trade->created_at->format('d M, Y') }}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="4" class="text-center">No data found!</td>
                                                </tr>
                                                    @endforelse
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxxl-4 col-xl-4 col-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h4 class="box-title">Highest Accounts</h4>
                                    </div>
                                    <div class="box-body">
                                        <table class="table table-sm">
                                            <thead>
                                                <tr>
                                                    <th>User</th>
                                                    <th>Balance</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @forelse ($this->users->sortByDesc('amount') as $high_user)
                                                    @if ($loop->index > 4)
                                                    @break
                                                @endif
                                                <tr>
                                                    <td>{{ $high_user->name }}</td>
                                                    <td>{{ format_money($high_user->balance) }}</td>
                                                </tr>
                                                @empty
                                                <tr>
                                                    <td colspan="2" class="text-center">No data found!</td>
                                                </tr>
                                                @endforelse
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xxxl-4 col-xl-6 col-12">
                                <div class="box">
                                    <div class="box-header with-border">
                                        <h4 class="box-title">Recent Deposits</h4>
                                    </div>
                                    <div class="box-body">
                                        <div class="table-responsive">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Amount</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($this->deposits as $d)
                                                        @if ($loop->index > 4)
                                                        @break;
                                                    @endif
                                                    <tr>
                                                        <td>{{ $this->d->user->name }}</td>
                                                        <td>{{ format_money($d->amount, $d->user->currency->symbol) }}
                                                        </td>
                                                        <td>{{ $this->d->created_at->format('d M, Y') }}}/td>
                                                    </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="3" class="text-center">No deposits yet!</td>
                                                        </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xxxl-8 col-xl-6 col-12">
                                    <div class="box">
                                        <div class="box-header">
                                            <h4 class="box-title">Recent Withdrawals</h4>
                                            <ul class="box-controls pull-right d-md-flex d-none">
                                                <li>
                                                    <a href="#" class="btn btn-success btn-md">view all</a>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="box-body">
                                            <table class="table table-sm">
                                                <thead>
                                                    <tr>
                                                        <th>User</th>
                                                        <th>Amount</th>
                                                        <th>Date</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    @forelse ($this->withdrawals as $withdrawal)
                                                        @if ($loop->index > 4)
                                                            @break;
                                                        @endif
                                                    <tr>
                                                        <td>{{ $withdrawal->user->name }}</td>
                                                        <td>{{ format_money($withdrawal->amount, $withdrawal->user->currency->symbol) }}
                                                        </td>
                                                        <td>{{ $withdrawal->created_at->format('d M, Y') }}</td>
                                                    </tr>
                                                    @empty
                                                        <tr>
                                                            <td colspan="3" class="text-center">No withdrawals yet!</td>
                                                        </tr>
                                                        @endforelse
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="box">
                                            <div class="box-header">
                                                <h4 class="box-title">Unverified Users</h4>
                                                <ul class="box-controls pull-right d-md-flex d-none">
                                                    <li>
                                                        <a href="#" class="btn btn-success btn-md">view all</a>
                                                    </li>
                                                </ul>
                                            </div>
                                            <div class="box-body">
                                                <table class="table table-sm">
                                                    <thead>
                                                        <tr>
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Phone</th>
                                                            <th>Country</th>
                                                            <th>State / Region</th>
                                                            <th>City</th>
                                                            <th>Date</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        @forelse ($this->pending_users as $pending_user)
                                                            @if ($loop->index > 4)
                                                            @break
                                                        @endif
                                                        <tr>
                                                            <td>{{$pending_user->name}}</td>
                                                            <td>{{$pending_user->email}}</td>
                                                            <td>{{$pending_user->phone}}</td>
                                                            <td>{{$pending_user->country}}</td>
                                                            <td>{{$pending_user->state}}</td>
                                                            <td>{{$pending_user->city}}</td>
                                                            <td>{{$pending_user->created_at->format('d M, Y')}}</td>
                                                        </tr>
                                                        @empty
                                                            <tr>
                                                                <td colspan="7" class="text-center">No data found!</td>
                                                            </tr>
                                                            @endforelse
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </section>
                </div>
