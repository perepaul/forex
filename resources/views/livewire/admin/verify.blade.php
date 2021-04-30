<div >
    <x-loader :targets="'verify,decline'" />
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">User verification</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item" aria-current="page">users</li>
                                <li class="breadcrumb-item active" aria-current="page">verification</li>
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
                            <h4 class="box-title">Pending Accounts</h4>
                            <div class="box-controls pull-right">
                                <div class="lookup lookup-circle lookup-right">
                                    <input type="text" wire:model="search" class="border">
                                </div>
                            </div>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pb-0">
                            <div class="table-responsive">
                                <table class="table table-hover table-sm">
                                    <thead>
                                        <tr>
                                            <th>Name</th>
                                            <th>Email</th>
                                            <th>Phone</th>
                                            <th>Country</th>
                                            <th>State</th>
                                            <th>City</th>
                                            <th>Actions</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse ($this->users as $user)
                                            <tr>
                                                <td>{{ $user->name }}</td>
                                                <td>{{ $user->email }}</td>
                                                <td><a
                                                        href="{{ $user->phone ? 'tel:' . $user->phone : '#' }}">{{ $user->phone }}</a>
                                                </td>
                                                <td>{{ $user->country }}</td>
                                                <td>{{ $user->state }}</td>
                                                <td>{{ $user->city }}</td>
                                                <td>
                                                    <div class="btn-group">
                                                        <button
                                                            class="btn btn-sm btn-rounded btn-danger dropdown-toggle no-caret"
                                                            type="button" data-toggle="dropdown"><i
                                                                class="icon ti-settings"></i></button>
                                                        <div class="dropdown-menu dropdown-menu-right">
                                                            <a class="dropdown-item" href="#"
                                                                wire:click.prevent="verify({{ $user->id }})"><i
                                                                    class="fa fa-edit text-info"></i> Verify</a>
                                                            <a class="dropdown-item" href="#" wire:click.prevent='decline({{$user->id}})'><i
                                                                    class="fa fa-trash text-danger"></i> Decline</a>
                                                            <a class="dropdown-item" target="_blank" rel="noopener" href="{{asset('assets/identification/'.$user->id_file)}}"><i class="fa fa-bitcoin"></i>
                                                                View</a>
                                                        </div>
                                                    </div>
                                                </td>
                                            </tr>
                                        @empty
                                            <tr>
                                                <td>No pending users</td>
                                            </tr>
                                        @endforelse

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="pt-3">
                            <div class="mx-auto w-100">
                                {{ $this->users->links() }}
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

    {{-- <div wire:ignore.self id="updat-user-modal" class="modal fade in" tabindex="-1" role="dialog"
        aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form class="form-horizontal" wire:submit.prevent='update({{$id}})'>
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Add Contact</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label class="col-md-12">Name</label>
                            <div class="col-md-12">
                                <input wire:model='data.name' type="text" class="form-control">
                                @error('data.name') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <label class="col-md-12">Email</label>
                            <div class="col-md-12">
                                <input wire:model='data.email' type="email" class="form-control" placeholder="Email">
                                @error('data.email') <span class="error">{{ $message }}</span> @enderror

                            </div>
                            <label class="col-md-12">Phone</label>
                            <div class="col-md-12">
                                <input type="tel" wire:model='data.phone' class="form-control" placeholder="Phone">
                                @error('data.phone') <span class="error">{{ $message }}</span> @enderror
                            </div>
                            <label class="col-md-12">Balance</label>
                            <div class="col-md-12">
                                <input type="number" wire:model='data.balance' class="form-control" placeholder="Balance">
                                @error('data.balance') <span class="error">{{ $message }}</span> @enderror

                            </div>
                        </div>
                    </div>
                    <div class="modal-footer d-flex justify-content-between">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-success">Add</button>
                    </div>
                </form>
            </div>
            <!-- /.modal-content -->
        </div>
        <!-- /.modal-dialog -->
    </div> --}}

</div>
