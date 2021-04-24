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
                                            <th class="col-4">Name</th>
                                            <th>Demo Balance</th>
                                            <th>Topup Bonus(%)</th>
                                            <th class="col-3">Actions</th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        @forelse($plans as $plan)
                                        <tr>
                                            <td>{{$plan->name}}</td>
                                            <td>{{$plan->demo_balance}}</td>
                                            <td>{{$plan->topup_bonus_percentage}}</td>
                                            <td>
                                                <div class="d-flex justify-content-end">
                                                    <button class="btn btn-sm btn-success" wire:click='attachFeatures({{$plan->id}})' ><i class="fa fa-table"></i></button>
                                                    <button class="btn btn-sm btn-default" wire:click='edit({{$plan->id}})'><i class="fa fa-edit"></i></button>
                                                    <button class="btn btn-sm btn-danger" wire:click='delete({{$plan->id}})'><i class="fa fa-trash"></i></button>
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
                            <h5 class="box-title">{{$action}}</h5>
                        </div>
                        <div class="box-body">
                            @if($active == 'plan')
                            <form action="" wire:submit.prevent='addOrUpdatePlan({{$editing}})'>
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" placeholder="eg. Silver" class="form-control" wire:model='data.plan.name'>
                                    @error('data.plan.name') <span class="error">{{$message}}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="demo_balance">Demo Balance</label>
                                    <input type="text" placeholder="eg. 1000" class="form-control" wire:model='data.plan.demo_balance'>
                                    @error('data.plan.demo_balance') <span class="error">{{$message}}</span> @enderror
                                </div>
                                <div class="form-group">
                                    <label for="topup_bonus_percentage">Topup Bonus (%)</label>
                                    <input type="text" placeholder="eg. 10" class="form-control" wire:model='data.plan.topup_bonus_percentage'>
                                    @error('data.plan.topup_bonus_percentage') <span class="error">{{$message}}</span> @enderror
                                </div>
                                <button type="button" class="btn btn-danger pull-left" wire:click='resetForm'>Reset</button>
                                <button type="submit" class="btn btn-info pull-right">{{$action}}</button>
                            </form>
                            @else
                            <form action="" wire:submit.prevent='addorUpdateFeatures({{$editing}})'>
                                <div class="d-flex justify-content-between p-3">
                                    <h5>Features</h6>
                                    <button class="btn btn-sm btn-success" wire:click.prevent='addEntry'><i class="fa fa-plus"></i></button>

                                </div>
                                <div class="form-group">
                                @foreach ($data['features'] as $k => $feature)
                                <div class="form-group">
                                    <div class="input-group input-group-sm">
                                        <input @if($loop->first) autofocus='true' @endif type="text" class="form-control" placeholder="eg. Silver" wire:model='data.features.{{$k}}.value'>
                                        <div class="input-group-append">
                                            <span class="input-group-text bg-danger text-white" id="basic-addon2" wire:click='removeEntry({{$k}})'><i class="fa fa-times"></i></span>
                                        </div>
                                    </div>
                                    @error('data.features.*.value') <span class="error">{{$message}}</span> @enderror
                                </div>
                                @endforeach

                                <button type="button" class="btn btn-danger pull-left" wire:click='resetForm'>Reset</button>
                                <button type="submit" class="btn btn-info pull-right">{{$action}}</button>
                            </form>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
            <!-- /.row -->

        </section>
        <!-- /.content -->
    </div>
</div>
