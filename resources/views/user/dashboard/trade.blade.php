@extends('layouts.user.dashboard')
@section('content')
    <div class="content-body pt-3">
        <div class="container">
            <div class="row">
                <div class="col-xxl-3 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Buy </h4>
                        </div>
                        <div class="card-body">
                            <form method="post" name="myform" class="currency_validate trade-form row g-3">
                                <div class="col-12">
                                    <label class="form-label">Send</label>
                                    <div class="input-group">
                                        <select class="form-control" name="method">
                                            <option value="bank">USD</option>
                                            <option value="master">Euro</option>
                                        </select>
                                        <input type="text" name="currency_amount" class="form-control"
                                            placeholder="0.0214 BTC">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Receive</label>
                                    <div class="input-group">
                                        <select class="form-control" name="method">
                                            <option value="bank">BTC</option>
                                            <option value="master">ETH</option>
                                        </select>
                                        <input type="text" name="currency_amount" class="form-control"
                                            placeholder="0.0214 BTC">
                                    </div>
                                </div>

                                <p class="mb-0">1 USD ~ 0.000088 BTC <a href="#">Expected rate <br>No extra
                                        fees</a></p>

                                <!-- <button type="submit" name="submit" class="btn btn-success btn-block">Exchange
                                            Now</button> -->
                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                    data-target="#BuyModal">
                                    Buy Now
                                </button>

                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sell </h4>
                        </div>
                        <div class="card-body">
                            <form method="post" name="myform" class="currency_validate trade-form row g-3">
                                <div class="col-12">
                                    <label class="form-label">Send</label>
                                    <div class="input-group">
                                        <select class="form-control" name="method">
                                            <option value="bank">USD</option>
                                            <option value="master">Euro</option>
                                        </select>
                                        <input type="text" name="currency_amount" class="form-control"
                                            placeholder="0.0214 BTC">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Receive</label>
                                    <div class="input-group">
                                        <select class="form-control" name="method">
                                            <option value="bank">BTC</option>
                                            <option value="master">ETH</option>
                                        </select>
                                        <input type="text" name="currency_amount" class="form-control"
                                            placeholder="0.0214 BTC">
                                    </div>
                                </div>

                                <p class="mb-0">1 USD ~ 0.000088 BTC <a href="#">Expected rate <br>No extra
                                        fees</a></p>

                                <button type="button" class="btn btn-primary btn-block" data-toggle="modal"
                                    data-target="#SellModal">
                                    Sell Now
                                </button>

                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transfer </h4>
                        </div>
                        <div class="card-body">
                            <form name="myform" class="currency_validate trade-form row g-3">
                                <div class="col-12">
                                    <label class="form-label">Send</label>
                                    <div class="input-group">
                                        <select class="form-control" name="method">
                                            <option value="bank">USD</option>
                                            <option value="master">Euro</option>
                                        </select>
                                        <input type="text" name="currency_amount" class="form-control"
                                            placeholder="0.0214 BTC">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">Receive</label>
                                    <div class="input-group">
                                        <select class="form-control" name="method">
                                            <option value="bank">BTC</option>
                                            <option value="master">ETH</option>
                                        </select>
                                        <input type="text" name="currency_amount" class="form-control"
                                            placeholder="0.0214 BTC">
                                    </div>
                                </div>

                                <p class="mb-0">1 USD ~ 0.000088 BTC <a href="#">Expected rate <br>No extra
                                        fees</a></p>

                                <button type="button" class="btn btn-success btn-block" data-toggle="modal"
                                    data-target="#transferModal">Transfer
                                    Now</button>

                            </form>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Convert </h4>
                        </div>
                        <div class="card-body">
                            <form method="post" name="myform" class="currency_validate trade-form row g-3">
                                <div class="col-12">
                                    <label class="form-label">From</label>
                                    <div class="input-group">
                                        <select class="form-control" name="method">
                                            <option value="bank">USD</option>
                                            <option value="master">Euro</option>
                                        </select>
                                        <input type="text" name="currency_amount" class="form-control"
                                            placeholder="0.0214 BTC">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">To</label>
                                    <div class="input-group">
                                        <select class="form-control" name="method">
                                            <option value="bank">BTC</option>
                                            <option value="master">ETH</option>
                                        </select>
                                        <input type="text" name="currency_amount" class="form-control"
                                            placeholder="0.0214 BTC">
                                    </div>
                                </div>

                                <p class="mb-0">1 USD ~ 0.000088 BTC <a href="#">Expected rate <br>No extra
                                        fees</a></p>

                                <button type="button" class="btn btn-success btn-block" data-toggle="modal"
                                    data-target="#convertModal">Convert
                                    Now</button>

                            </form>

                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Buy Transaction</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Coin Name</th>
                                            <th>Wallet</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sold</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i> Bitcoin
                                            </td>
                                            <td>
                                                Using - Bank *******5264
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="success-arrow"><i class="icofont-arrow-up"></i>
                                                    Buy</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc LTC"></i> Litecoin
                                            </td>
                                            <td>
                                                Using - Card *******8475
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sold</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc XRP"></i> Ripple
                                            </td>
                                            <td>
                                                Using - Card *******8475
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="success-arrow"><i class="icofont-arrow-up"></i>
                                                    Buy</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc DASH"></i> Dash
                                            </td>
                                            <td>
                                                Using - Card *******2321
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sold</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i> Bitcoin
                                            </td>
                                            <td>
                                                Using - Card *******2321
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Sell Transaction</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Coin Name</th>
                                            <th>Wallet</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sold</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i> Bitcoin
                                            </td>
                                            <td>
                                                Using - Bank *******5264
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="success-arrow"><i class="icofont-arrow-up"></i>
                                                    Buy</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc LTC"></i> Litecoin
                                            </td>
                                            <td>
                                                Using - Card *******8475
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sold</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc XRP"></i> Ripple
                                            </td>
                                            <td>
                                                Using - Card *******8475
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="success-arrow"><i class="icofont-arrow-up"></i>
                                                    Buy</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc DASH"></i> Dash
                                            </td>
                                            <td>
                                                Using - Card *******2321
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sold</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i> Bitcoin
                                            </td>
                                            <td>
                                                Using - Card *******2321
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transfer Transaction</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Coin Name</th>
                                            <th>Wallet</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sold</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i> Bitcoin
                                            </td>
                                            <td>
                                                Using - Bank *******5264
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="success-arrow"><i class="icofont-arrow-up"></i>
                                                    Buy</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc LTC"></i> Litecoin
                                            </td>
                                            <td>
                                                Using - Card *******8475
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sold</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc XRP"></i> Ripple
                                            </td>
                                            <td>
                                                Using - Card *******8475
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="success-arrow"><i class="icofont-arrow-up"></i>
                                                    Buy</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc DASH"></i> Dash
                                            </td>
                                            <td>
                                                Using - Card *******2321
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sold</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i> Bitcoin
                                            </td>
                                            <td>
                                                Using - Card *******2321
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Convert Transaction</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Type</th>
                                            <th>Coin Name</th>
                                            <th>Wallet</th>
                                            <th>Amount</th>
                                            <th>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td><span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sold</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i> Bitcoin
                                            </td>
                                            <td>
                                                Using - Bank *******5264
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="success-arrow"><i class="icofont-arrow-up"></i>
                                                    Buy</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc LTC"></i> Litecoin
                                            </td>
                                            <td>
                                                Using - Card *******8475
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sold</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc XRP"></i> Ripple
                                            </td>
                                            <td>
                                                Using - Card *******8475
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="success-arrow"><i class="icofont-arrow-up"></i>
                                                    Buy</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc DASH"></i> Dash
                                            </td>
                                            <td>
                                                Using - Card *******2321
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                        <tr>
                                            <td><span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sold</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i> Bitcoin
                                            </td>
                                            <td>
                                                Using - Card *******2321
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>-0.125 USD</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('modals')
<div class="modal fade" id="BuyModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><span class="text-primary">Buyer Email</span></td>
                                    <td><span class="text-primary">buyer@example.com</span></td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">Seller Email</span></td>
                                    <td><span class="text-primary">seller@example.com</span></td>
                                </tr>
                                <tr>
                                    <td>Exchange Rate</td>
                                    <td>0.00212455 BTC</td>
                                </tr>
                                <tr>
                                    <td>Fee</td>
                                    <td>$28.00 USD</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>$854.00 USD</td>
                                </tr>
                                <tr>
                                    <td>Vat</td>
                                    <td>
                                        <div class="text-danger">$25.00 USD</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Sub Total</td>
                                    <td> $1232.00 USD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#buySuccessleModal">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="buySuccessleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Success</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="auth-form">
                        <form action="http://demo.qkit.io/tradee/verify-step-2.html" class="identity-upload">
                            <div class="identity-content">
                                <span class="icon"><i class="icofont-check"></i></span>
                                <p>Congratulation. Your transaction is successful</p>
                            </div>
                        </form>
                        <div class="card-footer text-center">
                            <a href="signup.html">Go to Transaction</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Buy Modal -->
    <div class="modal fade" id="SellModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Confirmation</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table class="table">
                            <tbody>
                                <tr>
                                    <td><span class="text-primary">Buyer Email</span></td>
                                    <td><span class="text-primary">buyer@example.com</span></td>
                                </tr>
                                <tr>
                                    <td><span class="text-primary">Seller Email</span></td>
                                    <td><span class="text-primary">seller@example.com</span></td>
                                </tr>
                                <tr>
                                    <td>Exchange Rate</td>
                                    <td>0.00212455 BTC</td>
                                </tr>
                                <tr>
                                    <td>Fee</td>
                                    <td>$28.00 USD</td>
                                </tr>
                                <tr>
                                    <td>Total</td>
                                    <td>$854.00 USD</td>
                                </tr>
                                <tr>
                                    <td>Vat</td>
                                    <td>
                                        <div class="text-danger">$25.00 USD</div>
                                    </td>
                                </tr>
                                <tr>
                                    <td> Sub Total</td>
                                    <td> $1232.00 USD</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="text-right">
                        <button type="button" class="btn btn-primary" data-dismiss="modal" data-toggle="modal" data-target="#buySuccessleModal">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="SellSuccessleModal">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Success</h5>
                    <button type="button" class="btn-close" data-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <div class="auth-form">
                        <form action="http://demo.qkit.io/tradee/verify-step-2.html" class="identity-upload">
                            <div class="identity-content">
                                <span class="icon"><i class="icofont-check"></i></span>
                                <p>Congratulation. Your transaction is successful</p>
                            </div>
                        </form>
                        <div class="card-footer text-center">
                            <a href="signup.html">Go to Transaction</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
