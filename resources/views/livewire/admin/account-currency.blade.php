<div>
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Settings</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">Settings</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content">

            <div class="row">
                <div class="col-xxxl-7 col-xl-7 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Account Currencies</h5>
                        </div>
                        <div class="box-body">
                            <div class="table-responsive">
                                <table class="table table-sm">
                                    <thead>
                                        <tr>
                                            <th class="col-5">Name</th>
                                            <th>ISO</th>
                                            <th>Symbol</th>
                                            <th class="col-3">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($account_currencies as $currency)
                                        <tr>
                                            <td>{{$currency->name}}</td>
                                            <td>{{$currency->iso}}</td>
                                            <td>{{$currency->symbol}}</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    @if(!$currency->default)
                                                    <button class="btn btn-sm btn-success" wire:click='activate({{$currency->id}})'><i class="fa fa-check"></i></button>
                                                    @endif
                                                    <button class="btn btn-sm btn-default" wire:click='edit({{$currency->id}})'><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger" wire:click='delete({{$currency->id}})'><i class="fa fa-trash"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        @empty
                                        <tr>
                                            <td colspan="4" class="text-center text-sm text-muted"> Hmmm! Nothing to show.</td>
                                        </tr>
                                        @endforelse
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-xxxl-5 col-xl-5 col-12">
                    <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">{{$action}} Currency</h5>
                        </div>
                        <div class="box-body">
                            <form action="" wire:submit.prevent='createOrUpdate({{$editing}})'>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" placeholder="eg. US Dollar" class="form-control" wire:model='name'>
                                    @error('name') <span class="error">{{$message}}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="iso">ISO</label>
                                    <input type="text" placeholder="eg. USD" class="form-control" wire:model='iso'>
                                    @error('iso') <span class="error">{{$message}}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="symbol">Symbol</label>
                                    <input type="text" placeholder="eg. $" class="form-control" wire:model='symbol'>
                                    @error('symbol') <span class="error">{{$message}}</span> @enderror
                                </div>
                                <button type="button" class="btn btn-danger pull-left" wire:click='resetForm'>Reset</button>
                                <button type="submit" class="btn btn-info pull-right">{{$action}}</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
</div>
