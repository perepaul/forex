<div>
    <div class="container-full">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="d-flex align-items-center">
                <div class="mr-auto">
                    <h3 class="page-title">Email</h3>
                    <div class="d-inline-block align-items-center">
                        <nav>
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="#"><i class="mdi mdi-home-outline"></i></a></li>
                                <li class="breadcrumb-item active" aria-current="page">email</li>
                            </ol>
                        </nav>
                    </div>
                </div>

            </div>
        </div>

        <!-- Main content -->
        <section class="content d-flex justify-content-center">
            <div class="col-md-7">
                <div class="box">
                    <div class="box-header">
                        <h4 class="box-title">Send Email</h4>
                    </div>
                    <div class="box-body">
                        <form action="" method="POST" wire:submit.prevent='send'>
                            <div class="form-group">
                                <label for=""><i class="fa fa-user"></i> User</label>
                                <select name="" id="" wire:model='user' class="form-control">
                                    <option value="" selected>Select user</option>
                                    @foreach ($users as $user)
                                        <option value="{{ $user->id }}">{{ $user->name }} ({{ $user->email }})
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="">To</label>
                                <input type="text" class="form-control" wire:model='to'>
                                @error('to')
                                    <span class="error">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Subject</label>
                                <input type="text" class="form-control" wire:model='subject'>
                                @error('subject')
                                    <span class="error">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Message</label>
                                <textarea
                                 id=""
                                 cols="30"
                                 rows="10"
                                 class="form-control"
                                 wire:model='message'>
                                </textarea>
                                @error('message')
                                    <span class="error">{{$message}}</span>
                                @enderror
                            </div>
                            <div class="form-group">
                                <label for="">Attachements</label>
                                <input type="file" multiple class="form-control" wire:model='attachments' id="">
                                @error('attachments.*')
                                    <span class="error">{{$message}}</span>
                                @enderror
                            </div>
                            <button type="submit" class="btn btn-default btn-round pull-right">Send <i class="fa fa-envelope"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- /.content -->
    </div>

</div>
