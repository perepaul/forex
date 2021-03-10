<div>
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Withdrawals</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i
                                            class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Withdrawals</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="input-group w-200">
                    <input type="text" wire:model='search' class="form-control form-control-sm" placeholder="search...">
                    <div class="input-group-append">
                        <span class="input-group-text"><i class="ti-search"></i></span>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            <div class="row">


                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border d-flex justify-content-between">
                            <h4 class="box-title">Withdrawals</h4>
                            <div class="form-group">
                                <select wire:model='filter' class="form-control">
                                    <option value="all" @if ($filter === 'all') selected @endif>Status</option>
                                    <option value="1" @if ($filter === 1) selected @endif>Pending</option>
                                    <option value="2" @if ($filter === 2) selected @endif>Processing</option>
                                    <option value="3" @if ($filter === 3) selected @endif>Approved</option>
                                    <option value="4" @if ($filter === 4) selected @endif>Declined</option>
                                </select>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="table-responsive">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>ref no.</th>
                                            <th>User</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Action</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($withdrawals as $withdrawal)
                                            <tr>
                                                <td><a href="javascript:void(0)">{{ $withdrawal->reference }}</a></td>
                                                <td>{{ $withdrawal->user->name }}</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i>
                                                        {{ $withdrawal->created_at->format('M d, Y') }}</span>
                                                </td>
                                                <td>{{ format_money($withdrawal->amount) }}</td>
                                                <td><span wire:click='processing({{$withdrawal->id}})' class="btn btn-sm btn-round btn-outline-info">{{config('withdrawals.status_full.'.$withdrawal->status)}}</span></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button
                                                            class="btn btn-sm btn-rounded btn-danger dropdown-toggle no-caret"
                                                            type="button" data-toggle="dropdown"><i
                                                                class="icon ti-settings"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item"
                                                                wire:click='launchModal({{ $withdrawal->id }},"view-withdrawal")'
                                                                href="#"><i class="fa fa-eye"></i> View</a>
                                                            <a class="dropdown-item"
                                                                wire:click='launchModal({{ $withdrawal->id }},"view-withdrawal","approve")'
                                                                href="#"><i class="fa fa-check text-success"></i> Accept</a>
                                                            <a class="dropdown-item"
                                                                wire:click='launchModal({{ $withdrawal->id }},"view-withdrawal","decline")'
                                                                href="#"><i class="fa fa-times text-danger"></i> Decline</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>LOLOLO</td>
                                            </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="mx-auto w-100">
                                {{ $withdrawals->links() }}
                            </div>
                        </div>
                        <!-- /.box-body -->
                    </div>
                    <!-- /.box -->
                </div>


            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>

    <div wire:ignore.self id="view-withdrawal" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="user"> <i class="fa fa-user"> User</i></label>
                        <input type="text" class="form-control" wire:model='data.user.name'>
                    </div>

                    <div class="form-group">
                        <label for="user"> <i class="fa fa-dollar"> Amount</i></label>
                        <input type="text" class="form-control" wire:model='data.withdrawal.amount'>
                    </div>

                    <div class="form-group">
                        <label for="user"> <i class="fa fa-table"> Payment Option</i></label>
                        <input type="text" class="form-control">
                    </div>

                </div>

                <div class="modal-footer d-flex justify-content-end">
                    <button type="button" class="btn-sm btn btn-default" data-dismiss="modal">Cancel</button>
                    @if (isset($data['option']) && $data['option'] == 'approve')
                        <button type="button" class="btn-sm btn btn-success" wire:click='approve({{$data["withdrawal"]["id"]}})'>Approve</button>
                    @endif

                    @if (isset($data['option']) && $data['option'] == 'decline')
                        <button type="button" class="btn-sm btn btn-danger" wire:click='decline({{$data["withdrawal"]["id"]}})'>Declined</button>
                    @endif
                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
