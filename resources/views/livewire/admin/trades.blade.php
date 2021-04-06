<div>
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Trades</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">Tables</li>
                                <li class="breadcrumb-item active" aria-current="page">Basic Tables</li>
                            </ol>
                        </nav>
                    </div>
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
                                    <input type="text" name="s">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body no-padding">
                            <div class="table-responsive">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>User</th>
                                            <th>Amount</th>
                                            <th>Currency</th>
                                            <th>Date</th>
                                            <th>Demo</th>
                                            <th>Profit</th>
                                            <th>Status</th>
                                            <th>Country</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($trades as $trade)
                                            <tr>
                                                <td><a href="javascript:void(0)">{{$trade->user->name}}</a></td>
                                                <td>{{format_money($trade->amount)}}</td>
                                                <td>{{$trade->currency->name}}</td>
                                                <td><span class="text-muted"><i class="fa fa-clock-o"></i> {{$trade->created_at->format('d m, Y')}}</span>
                                                </td>
                                                <td><span class="badge badge-pill badge-{{$trade->is_demo?'danger':'success'}}">{!!$trade->is_demo?'Yes':'No'!!}</span></td>
                                                <td>{{format_money($trade->profit)}}</td>
                                                <td><span class="badge badge-pill badge-{{$trade->status == 'active'?'success':'danger'}}">{{ucfirst($trade->status)}}</span></td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button class="btn btn-rounded btn-sm btn-danger dropdown-toggle no-caret"
                                                            type="button" data-toggle="dropdown"><i
                                                                class="icon ti-settings"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#" wire:click='edit({{$trade->id}})'> <i class="fa fa-edit"></i> Edit</a>
                                                            <a class="dropdown-item" href="#" wire:click='warnEndTrade({{$trade->id}})'> <i class="fa fa-check-circle"></i> End trade </a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>

                                        @empty

                                        @endforelse
                                    </tbody>
                                </table>
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
    <div wire:ignore.self id="edit-profit" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
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
                        <input type="text" class="form-control" wire:model='data.user' disable readonly>
                    </div>

                    <div class="form-group">
                        <label for="user"> <i class="fa fa-dollar"> Amount</i></label>
                        <input type="text" class="form-control" wire:model='data.amount' disable readonly>
                    </div>
                    <div class="form-group">
                        <label for="user"> <i class="fa fa-dollar"> Profit</i></label>
                        <input type="text" class="form-control" wire:model='data.profit'>
                        @error('data.profit') <span class="error">{{ $message }}</span> @enderror
                    </div>

                    <div class="form-group">
                        <label for="user"> <i class="fa fa-table">Type</i></label>
                        @isset($data['is_demo'])
                        <input type="text" class="form-control" value="{{$data['is_demo']?'Demo Trade':'Paid Trade'}}">
                        @endisset
                    </div>

                </div>

                <div class="modal-footer d-flex justify-content-end">
                    @isset($data['id'])
                    <button type="button" class="btn-sm btn btn-success" wire:click='update({{$data['id']}})'>Update</button>
                    @endisset
                    <button type="button" class="btn-sm btn btn-default" data-dismiss="modal">Cancel</button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
    <div wire:ignore.self id="warn-end-trade" class="modal fade in" tabindex="-1" role="dialog" aria-labelledby="myModalLabel"
        aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title" id="myModalLabel"></h4>
                    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                </div>
                <div class="modal-body">
                    <p>Are you sure you want to end this trade?</p>

                </div>

                <div class="modal-footer d-flex justify-content-end">
                    @isset($data['id'])
                    <button type="button" class="btn-sm btn btn-danger" wire:click='endTrade({{$data['id']}})'>Yes</button>
                    @endisset
                    <button type="button" class="btn-sm btn btn-success" data-dismiss="modal">No</button>

                </div>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div>
</div>
