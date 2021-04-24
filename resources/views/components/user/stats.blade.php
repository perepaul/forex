<div class="col-xxl-3 col-xl-6 col-lg-6">
    <div class="card">
        <div class="card-header">
            <h4 class="card-title">Account Stats </h4>
        </div>
        <div class="card-body">
            <div class="row">
                <div class="col-sm-6 mt-3"><strong>User</strong></div>
                <div class="col-sm-6 mt-3">{{auth('web')->user()->name}}</div>
                <div class="col-sm-6 mt-3"><strong>Plan</strong></div>
                <div class="col-sm-6 mt-3">{{auth('web')->user()->plan->name ?? "Not subscribed to a plan"}}</div>
                <div class="col-sm-6 mt-3"><strong>Balance</strong></div>
                <div class="col-sm-6 mt-3">{{format_money(auth('web')->user()->balance)}}</div>
                <div class="col-sm-6 mt-3"><strong>Demo Balance</strong></div>
                <div class="col-sm-6 mt-3">{{format_money(auth('web')->user()->demo_balance)}}</div>
                <div class="col-sm-6 mt-3"><strong>Total Trades</strong></div>
                <div class="col-sm-6 mt-3">{{auth('web')->user()->trades()->count()}}</div>
                <div class="col-sm-6 mt-3"><strong>Total Deposits</strong></div>
                <div class="col-sm-6 mt-3">{{auth('web')->user()->deposits()->count()}}</div>
                <div class="col-sm-6 mt-3"><strong>Total Withdrawals</strong></div>
                <div class="col-sm-6 mt-3">{{auth('web')->user()->withdrawals()->count()}}</div>
            </div>
        </div>
    </div>
</div>
