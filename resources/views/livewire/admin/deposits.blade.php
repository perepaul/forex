<div>
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Deposits</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="{{ route('admin.index') }}"><i
                                            class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">deposits</li>
                            </ol>
                        </nav>
                    </div>
                </div>
                <div class="form-group">
                    <select name="" id="" class="form-control" wire:model='filter'>
                        <option value="all">Status</option>
                        <option value="pending">Pending</option>
                        <option value="paid">Paid</option>
                        <option value="processing">Proccessing</option>
                        <option value="approved">Approved</option>
                        <option value="declined">Declined</option>
                    </select>
                </div>


            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            <div class="row">


                <div class="col-12">
                    <div class="box">
                        <div class="box-header with-border">
                            <h4 class="box-title">Responsive Hover Table</h4>
                            <div class="box-controls pull-right">
                                <div class="lookup lookup-circle lookup-right">
                                    <input type="text" name="s" wire:model='search'>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="table-responsive">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>Reference</th>
                                            <th>User</th>
                                            <th>Date</th>
                                            <th>Amount</th>
                                            <th>Status</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($deposits as $deposit)
                                        <tr>
                                            <td><a href="javascript:void(0)">{{$deposit->reference}}</a></td>
                                            <td>{{$deposit->user->name}}</td>
                                            <td>
                                                <span class="text-muted"><i class="fa fa-clock-o"></i> {{$deposit->created_at->format('M d, Y')}}</span>
                                            </td>
                                            <td>{{format_money($deposit->amount)}}</td>
                                            <td><span class="btn btn-sm btn-round btn-outline-info" wire:click='markProcessing({{$deposit->id}})'>{{ucfirst($deposit->status)}}</span></td>
                                            <td>
                                                <div class="btn-group">
                                                    <button class="btn btn-sm btn-rounded btn-danger dropdown-toggle no-caret"
                                                        type="button" data-toggle="dropdown"><i
                                                            class="icon ti-settings"></i></button>
                                                    <div class="dropdown-menu dropdown-menu-right">
                                                        <a class="dropdown-item" href="#" wire:click='approve({{$deposit->id}})'><i class="fa fa-check"></i> Approve</a>
                                                        <a class="dropdown-item" href="#" wire:click='decline({{$deposit->id}})'><i class="fa fa-times"></i> Decline</a>
                                                        <a class="dropdown-item" target="_blank" rel="noopener" href="{{asset('assets/deposits/'.$deposit->image)}}"><i class="fa fa-eye"></i> View</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="6" class="text-center">
                                                No data found!
                                            </td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                            <div class="mx-auto w-100">
                                {{ $deposits->links() }}
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

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
