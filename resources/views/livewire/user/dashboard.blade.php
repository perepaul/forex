<div>
    <div class="content-body pt-3">
        <div class="container">

            {{-- Balance run down --}}
            <div class="row">
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="wallet-widget card">
                        <h5>Estimated Balance</h5>
                        <h5><span class="text-primary">{{format_money($this->estimatedBalance,'none')}}</span> <sub>USD</sub></h5>
                        <p>= trade returns + pending deposits - pending withdrawals</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="wallet-widget card">
                        <h5>Available Balance</h5>
                        <h5><span class="text-success">{{format_money($this->user->balance,'none')}}</span> <sub>{{currency_iso()}}</sub></h5>
                        <p> = your current (available) balance</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="wallet-widget card">
                        <h5>Pending Balance</h5>
                        <h5><span class="text-warning">{{format_money($this->activeTradesTotal + $this->pendingDepositsTotal,'none' )}}</span> <sub>{{currency_iso()}}</sub></h5>
                        <p>= withdrawals + deposits (pending)</p>
                    </div>
                </div>
                <div class="col-xxl-3 col-xl-3 col-lg-6 col-md-6 col-sm-6">
                    <div class="wallet-widget card">
                        <h5>Demo Balance</h5>
                        <h5><span class="text-danger">{{format_money($this->user->demo_balance,'none')}}</span> <sub>{{currency_iso()}}</sub></h5>
                        <p>= your current (available) demo balance</p>
                    </div>
                </div>
            </div>
            {{-- Balance run down ends --}}

            <!-- TradingView Widget BEGIN -->
            <x-user.signal-marquee></x-user.signal-marquee>
            <!-- TradingView Widget END -->

            <div class="row">
                <x-user.todo></x-user.todo>
                <x-user.stats></x-user.stats>

                {{-- <div class="col-xxl-4 col-xl-4 col-lg-6">
                    <div class="price-widget bg-btc">
                        <a href="price-details.html">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc BTC-alt"></i>
                                    <span>Bitcoin</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6">
                    <div class="price-widget bg-eth">
                        <a href="price-details.html">name
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc ETH-alt"></i>
                                    <span>Ethereum</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart2"></div>
                        </a>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4 col-lg-6">
                    <div class="price-widget bg-usdt">
                        <a href="price-details.html">
                            <div class="price-content">
                                <div class="icon-title">
                                    <i class="cc USDT-alt"></i>
                                    <span>Tether</span>
                                </div>
                                <h5>$ 11,785.10</h5>
                            </div>
                            <div id="chart3"></div>
                        </a>
                    </div>
                </div> --}}
                <div class="col-12">
                    <div class="tradingview-widget-container card">
                        <div id="tradingview_e8053">
                            <div id="tradingview_7ecf6-wrapper"
                                style="position: relative;box-sizing: content-box;width: 100%;height: 460px;margin: 0 auto !important;padding: 0 !important;font-family:Arial,sans-serif;">
                                <div
                                    style="width: 100%;height: 460px;background: transparent;padding: 0 !important;">
                                    <iframe id="tradingview_7ecf6"
                                        src="https://s.tradingview.com/widgetembed/?frameElementId=tradingview_7ecf6&amp;symbol=BITSTAMP%3ABTCUSD&amp;interval=D&amp;hidesidetoolbar=0&amp;symboledit=1&amp;saveimage=1&amp;toolbarbg=f1f3f6&amp;studies=%5B%5D&amp;theme=Light&amp;style=1&amp;timezone=Etc%2FUTC&amp;withdateranges=1&amp;showpopupbutton=1&amp;studies_overrides=%7B%7D&amp;overrides=%7B%7D&amp;enabled_features=%5B%5D&amp;disabled_features=%5B%5D&amp;showpopupbutton=1&amp;locale=en&amp;utm_source=&amp;utm_medium=widget&amp;utm_campaign=chart&amp;utm_term=BITSTAMP%3ABTCUSD"
                                        style="width: 100%; height: 100%; margin: 0 !important; padding: 0 !important;"
                                        frameborder="0" allowtransparency="true" scrolling="no"
                                        allowfullscreen=""></iframe>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                {{-- <div class="col-xxl-3 col-xl-6 col-lg-6">
                    <div class="card welcome-profile">
                        <div class="card-body">
                            <img src="images/profile/2.png" alt="">
                            <h4>Welcome, Jannatul Maowa!</h4>
                            <p>Looks like you are not verified yet. Verify yourself to use the full potential of Tradee.
                            </p>

                            <ul>
                                <li>
                                    <a href="#">
                                        <span class="verified"><i class="icofont-check-alt"></i></span> Verify account
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="not-verified"><i class="icofont-close-line"></i></span> Two-factor
                                        authentication (2FA)
                                    </a>
                                </li>
                                <li>
                                    <a href="#">
                                        <span class="not-verified"><i class="icofont-close-line"></i></span> Deposit money
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xxl-3 col-xl-6 col-lg-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Quick Trade </h4>
                        </div>
                        <div class="card-body">
                            <form method="post" name="myform" class="currency_validate trade-form row g-3">
                                <div class="col-12">
                                    <label class="form-label">You Send</label>
                                    <div class="input-group">
                                        <select class="form-select" name="method">
                                            <option value="bank">USD</option>
                                            <option value="master">Euro</option>
                                        </select>
                                        <input type="text" name="currency_amount" class="form-control"
                                            placeholder="0.0214 BTC">
                                    </div>
                                </div>

                                <div class="col-12">
                                    <label class="form-label">You get</label>
                                    <div class="input-group">
                                        <select class="form-select" name="method">
                                            <option value="bank">BTC</option>
                                            <option value="master">ETH</option>
                                        </select>
                                        <input type="text" name="currency_amount" class="form-control"
                                            placeholder="0.0214 BTC">
                                    </div>
                                </div>

                                <p class="mb-0">1 USD ~ 0.000088 BTC <a href="#">Expected rate <br>No extra
                                        fees</a></p>

                                <button type="submit" name="submit" class="btn btn-success btn-block">Exchange
                                    Now</button>

                            </form>

                        </div>
                    </div>
                </div> --}}
                {{-- <div class="col-xxl-6">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Balance</h4>
                        </div>
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-xxl-6 col-xl-6 col-lg-6">
                                    <div class="balance-chart">
                                        <div id="balance-chart"></div>
                                        <h4>Total Balance = $ 5360</h4>
                                    </div>
                                </div>
                                <div class="col-xxl-6 col-xl-6 col-lg-6">

                                    <ul class="balance-widget">
                                        <li>
                                            <div class="icon-title">
                                                <i class="cc BTC"></i>
                                                <span>Bitcoin</span>
                                            </div>
                                            <div class="text-right">
                                                <h5>0.000242 BTC</h5>
                                                <span>0.125 USD</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-title">
                                                <i class="cc USDT"></i>
                                                <span>Tether</span>
                                            </div>
                                            <div class="text-right">
                                                <h5>0.000242 USDT</h5>
                                                <span>0.125 USD</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-title">
                                                <i class="cc XTZ"></i>
                                                <span>Tezos</span>
                                            </div>
                                            <div class="text-right">
                                                <h5>0.000242 XTZ</h5>
                                                <span>0.125 USD</span>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="icon-title">
                                                <i class="cc XMR"></i>
                                                <span>Monero</span>
                                            </div>
                                            <div class="text-right">
                                                <h5>0.000242 XMR</h5>
                                                <span>0.125 USD</span>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8">
                    <div class="card home-chart">
                        <div class="card-header">
                            <h4 class="card-title home-chart">Analytics</h4>
                            <select class="form-select" name="report-type" id="report-select">
                                <option value="1">Bitcoin</option>
                                <option value="2">Litecoin</option>
                            </select>

                        </div>
                        <div class="card-body">
                            <div class=" home-chart-height">
                                <div id="chartx"></div>
                                <div class="row">
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                        <div class="chart-price-value">
                                            <span>24hr Volume</span>
                                            <h5>$236,368.00</h5>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                        <div class="chart-price-value">
                                            <span>Marketcap</span>
                                            <h5>$236.025B USD</h5>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                        <div class="chart-price-value">
                                            <span>24hr Volume</span>
                                            <h5>56.3 BTC</h5>
                                        </div>
                                    </div>
                                    <div class="col-xxl-3 col-xl-3 col-lg-3 col-md-6 col-sm-6">
                                        <div class="chart-price-value">
                                            <span>All Time High</span>
                                            <h5>$236,368.00</h5>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Trade Balances</h4>
                        </div>
                        <div class="card-body">
                            <ul class="balance-widget trade-balance">
                                <li>
                                    <h5>Trade Balance</h5>
                                    <div class="text-right">
                                        <h5>$0.0000</h5>
                                        <span>Total margin currency balance.</span>
                                    </div>
                                </li>
                                <li>
                                    <h5>Equity</h5>
                                    <div class="text-right">
                                        <h5>$0.0000</h5>
                                        <span>Trade balance combined with unrealized profit/loss</span>
                                    </div>
                                </li>
                                <li>
                                    <h5>Used Margin</h5>
                                    <div class="text-right">
                                        <h5>$0.0000</h5>
                                        <span>Total margin amount used in open positions.</span>
                                    </div>
                                </li>
                                <li>
                                    <h5>Free Margin</h5>
                                    <div class="text-right">
                                        <h5>$0.0000</h5>
                                        <span>Usable margin balance. Equal to equity minus.</span>
                                    </div>
                                </li>
                                <li>
                                    <h5>Margin Level</h5>
                                    <div class="text-right">
                                        <h5>$0.0000</h5>
                                        <span>Percentage ratio of equity to used margin.</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-4 col-xl-4">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Position Valuation</h4>
                        </div>
                        <div class="card-body">
                            <ul class="balance-widget position-value">
                                <li>
                                    <h5>Opening Cost</h5>
                                    <div class="text-right">
                                        <h5>$0.0000</h5>
                                        <span>Original cost of all open positions.</span>
                                    </div>
                                </li>
                                <li>
                                    <h5>Current Valuation</h5>
                                    <div class="text-right">
                                        <h5>$0.0000</h5>
                                        <span>Paper valuation of all open positions.</span>
                                    </div>
                                </li>
                                <li>
                                    <h5>Profit</h5>
                                    <div class="text-right">
                                        <h5>$0.0000 (0,00%)</h5>
                                        <span>Paper profit of all open positions..</span>
                                    </div>
                                </li>
                                <li>
                                    <h5>Loss</h5>
                                    <div class="text-right">
                                        <h5>$0.0000 (0,00%)</h5>
                                        <span>Paper loss of all open positions.</span>
                                    </div>
                                </li>
                                <li>
                                    <h5>Fees</h5>
                                    <div class="text-right">
                                        <h5>$0.0000</h5>
                                        <span>Current Fee</span>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-8 col-xl-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Transaction</h4>

                        </div>
                        <div class="card-body">
                            <div class="table-responsive transaction-table">
                                <table class="table table-striped responsive-table">
                                    <thead>
                                        <tr>
                                            <th>Ledger ID</th>
                                            <th>Date</th>
                                            <th>Type</th>
                                            <th>Currency</th>
                                            <th>Amount</th>
                                            <th>Fee</th>
                                            <th>Balance</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>523640</td>
                                            <td>January 15</td>
                                            <td>
                                                <span class="danger-arrow"><i class="icofont-arrow-down"></i>
                                                    Sell</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc BTC"></i> Bitcoin
                                            </td>
                                            <td class="text-danger">-0.000242 BTC</td>
                                            <td>0.02%</td>
                                            <td><strong>0.25484 BTC</strong></td>
                                        </tr>
                                        <tr>
                                            <td>523640</td>
                                            <td>January 15</td>
                                            <td><span class="success-arrow"><i class="icofont-arrow-up"></i>Buy</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc LTC"></i> Litecoin
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>0.02%</td>
                                            <td><strong> 0.25484 LTC</strong></td>
                                        </tr>
                                        <tr>
                                            <td>523640</td>
                                            <td>January 15</td>
                                            <td><span class="success-arrow"><i class="icofont-arrow-up"></i>Buy</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc XRP"></i> Ripple
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>0.02%</td>
                                            <td><strong> 0.25484 LTC</strong></td>
                                        </tr>
                                        <tr>
                                            <td>523640</td>
                                            <td>January 15</td>
                                            <td><span class="success-arrow"><i class="icofont-arrow-up"></i>Buy</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc DASH"></i> Dash
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>0.02%</td>
                                            <td><strong> 0.25484 LTC</strong></td>
                                        </tr>
                                        <tr>
                                            <td>523640</td>
                                            <td>January 15</td>
                                            <td><span class="success-arrow"><i class="icofont-arrow-up"></i>Buy</span>
                                            </td>
                                            <td class="coin-name">
                                                <i class="cc LTC"></i> Litecoin
                                            </td>
                                            <td class="text-success">-0.000242 BTC</td>
                                            <td>0.02%</td>
                                            <td><strong> 0.25484 LTC</strong></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="invite-content">
                                <h4>Invite a friend and get $30</h4>
                                <p>You will receive up to $30 when they： 1.Buy Crypto 2. Deposit 3. Finish Trading Tasks
                                    <br><a href="#">Learn more</a>

                                </p>

                                <div class="copy-link">
                                    <form action="#">
                                        <div class="input-group">
                                            <input type="text" class="form-control"
                                                value="https://www.tradee.io/join/12345">
                                            <span class="input-group-text">Copy</span>
                                        </div>
                                    </form>
                                </div>

                                <!-- <div class="social-share-link">
                                                                <a href="#"><span><i class="icofont-facebook"></i></span></a>
                                                                <a href="#"><span><i class="icofont-twitter"></i></span></a>
                                                                <a href="#"><span><i class="icofont-whatsapp"></i></span></a>
                                                                <a href="#"><span><i class="icofont-telegram"></i></span></a>
                                                            </div> -->
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xxl-6 col-xl-6 col-lg-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="invite-content">
                                <h4>Get free BTC every day</h4>
                                <p>Earn free bitcoins in rewards by completing a learning mission daily or inviting friends
                                    to Tradee. <a href="#">Learn more</a>

                                </p>

                                <a href="#" class="btn btn-primary">Invite friends to join</a>
                            </div>
                        </div>
                    </div>
                </div> --}}

            </div>
        </div>
    </div>
</div>
