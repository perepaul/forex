@extends('layouts.admin.app')
@section('title', 'Dashboard')
@section('content')
    <!-- BEGIN: Content-->
    <main>
        <div class="container-full">
            <!-- Main content -->
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
                                                <h2 class="font-weight-500 mb-0">{cnt}</h2>
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
                                                <h5 class="text-fade">Trades</h5>
                                                <h2 class="font-weight-500 mb-0">{cnt}</h2>
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
                                                <h2 class="font-weight-500 mb-0">{cnt}</h2>
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
                                                <h2 class="font-weight-500 mb-0">{cnt}</h2>
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
                                                <a href="#" class="btn btn-warning">view all</a>
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
                                                    <tr>
                                                        <td>Perekpo Paulinus Emmanuel</td>
                                                        <td>5000</td>
                                                        <td>300</td>
                                                        <td>12-03-2021</td>
                                                    </tr>
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
                                                <tr>
                                                    <td>Perekpo Paulinus Emmanuel</td>
                                                    <td>5000</td>
                                                </tr>
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
                                                <tr>
                                                    <td>Perekpo Paulinus Emmanuel</td>
                                                    <td>5000</td>
                                                    <td>12-03-2021</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>


                            <div class="col-12">
                                <div class="box">
                                    <div class="box-header">
                                        <h4 class="box-title">Recent Tickets</h4>
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
                                                <tr>
                                                    <td>Perekpo Paulinus Emmanuel</td>
                                                    <td>5000</td>
                                                    <td>12-03-2021</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>








                        </div>
                    </div>










                    {{-- <div class="col-xl-3 col-12">
                        <div class="box">
                            <div class="box-body">
                                <div class="box no-shadow">
                                    <div class="box-body px-0 pt-0">
                                        <div id="calendar" class="dask evt-cal min-h-350"></div>
                                    </div>
                                </div>
                                <div>
                                    <h4 class="box-title mb-30">Scheduled Meeting</h4>
                                    <div>
                                        <div class="d-flex align-items-center mb-30 justify-content-between">
                                            <div class="mr-15 text-center rounded15 box-shadowed h-50 w-50 d-table">
                                                <p class="mt-5 mb-0 text-warning">Thu</p>
                                                <p class="mb-0">8</p>
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 font-weight-500 min-w-p60">
                                                <a href="#"
                                                    class="text-dark hover-primary mb-1 font-size-16 overflow-hidden text-nowrap text-overflow">Interview</a>
                                                <span class="font-size-10 text-fade"><i class="fa fa-clock-o"></i> 9:00am -
                                                    11:30am </span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i
                                                        class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30 justify-content-between">
                                            <div class="mr-15 text-center rounded15 box-shadowed h-50 w-50 d-table">
                                                <p class="mt-5 mb-0 text-warning">Fri</p>
                                                <p class="mb-0">10</p>
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 font-weight-500 min-w-p60">
                                                <a href="#"
                                                    class="text-dark hover-primary mb-1 font-size-16 overflow-hidden text-nowrap text-overflow">Organizational
                                                    meeting</a>
                                                <span class="font-size-10 text-fade"><i class="fa fa-clock-o"></i> 10:00am -
                                                    10:30am </span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i
                                                        class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30 justify-content-between">
                                            <div class="mr-15 text-center rounded15 box-shadowed h-50 w-50 d-table">
                                                <p class="mt-5 mb-0 text-warning">Mon</p>
                                                <p class="mb-0">17</p>
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 font-weight-500 min-w-p60">
                                                <a href="#"
                                                    class="text-dark hover-primary mb-1 font-size-16 overflow-hidden text-nowrap text-overflow">Meeting
                                                    with the manager</a>
                                                <span class="font-size-10 text-fade"><i class="fa fa-clock-o"></i> 9:00am -
                                                    11:30am </span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i
                                                        class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-30 justify-content-between">
                                            <div class="mr-15 text-center rounded15 box-shadowed h-50 w-50 d-table">
                                                <p class="mt-5 mb-0 text-warning">Set</p>
                                                <p class="mb-0">18</p>
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 font-weight-500 min-w-p60">
                                                <a href="#"
                                                    class="text-dark hover-primary mb-1 font-size-16 overflow-hidden text-nowrap text-overflow">Interview</a>
                                                <span class="font-size-10 text-fade"><i class="fa fa-clock-o"></i> 9:00am -
                                                    11:30am </span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i
                                                        class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="d-flex align-items-center mb-20 justify-content-between">
                                            <div class="mr-15 text-center rounded15 box-shadowed h-50 w-50 d-table">
                                                <p class="mt-5 mb-0 text-warning">Fri</p>
                                                <p class="mb-0">22</p>
                                            </div>
                                            <div class="d-flex flex-column flex-grow-1 font-weight-500 min-w-p60">
                                                <a href="#"
                                                    class="text-dark hover-primary mb-1 font-size-16 overflow-hidden text-nowrap text-overflow">Organizational
                                                    meeting</a>
                                                <span class="font-size-10 text-fade"><i class="fa fa-clock-o"></i> 10:00am -
                                                    10:30am </span>
                                            </div>
                                            <div class="dropdown">
                                                <a class="px-10 pt-5" href="#" data-toggle="dropdown"><i
                                                        class="ti-more-alt"></i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#">Action</a>
                                                    <a class="dropdown-item" href="#">Delete</a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div> --}}



                </div>
            </section>
            <!-- /.content -->
        </div>
    </main>
    <!-- END: Content-->
@endsection
@push('js')
<script src="js/admin/pages/dashboard.js"></script>
@endpush
