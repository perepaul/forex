@extends('layouts.user.app')

@section('title', 'Terms and Conditions')

    @push('css')
        <style>
            .terms_condition-text li {
                display: list-item;
            }

            li {
                list-style: decimal;
                padding-left: 15px;
                margin-left: 25px;
                margin-bottom: 10px;
            }

            li ul li {
                list-style: disc;
                font-size: 16px;
            }

            li ul li ul li {
                list-style: lower-roman;
            }

        </style>
    @endpush

@section('page')
    <div class="terms_condition" bis_skin_checked="1">
        <div class="container" bis_skin_checked="1">
            <div class="row justify-content-center" bis_skin_checked="1">
                <div class="col-lg-9" bis_skin_checked="1">
                    <div class="terms_condition-content" bis_skin_checked="1">
                        <div class="terms_condition-text" bis_skin_checked="1">
                            <h1>Terms & Conditions</h1>
                            <p>
                                This Agreement is entered into by and these Terms & Conditions (hereinafter referred to as
                                the “Agreement”) shall regulate the relationship between Piplots LLC, with company No.
                                14870 IBC 2016, and registered at: {{ config('constants.address') }}
                                (hereinafter referred to as the “Company”), and the user (a natural or legal entity)
                                (hereinafter referred to as the “Client”) of <a
                                    href="https:://piplosts.com">https:://piplosts.com</a> (hereinafter referred as the
                                “Website”).
                            </p>
                            <ul id="terms">
                                <li>
                                    The Client confirms that he/she has read, understood and accepted all information,
                                    conditions and terms set out on the Website which are open to be reviewed and can be
                                    examined by the public and which include important legal Information.
                                </li>
                                <li>
                                    By accepting this Agreement, the Client agrees and irrevocably accepts the terms and
                                    conditions contained in this Agreement, its annexes and/or appendices as well as other
                                    documentation/information published on the Website, including without limitation to the
                                    Privacy Policy, Payment Policy, Withdrawal Policy, Code of Conduct, Order Execution
                                    Policy and Anti-Money Laundering Policy. The Client accepts this Agreement by
                                    registering an Account on the Website and depositing funds. By accepting the Agreement,
                                    and subject to the Company’s final approval, the Client enters into a legal and binding
                                    agreement with the Company.
                                </li>
                                <li>
                                    The terms of this Agreement shall be considered accepted unconditionally by the Client
                                    upon the Company’s receipt of an advance payment made by the Client. As soon as the
                                    Company receives the Client's advance payment, every operation made by the Client on the
                                    Trading Platform shall be subject to the terms of this Agreement and other
                                    documentation/information on the Website.
                                </li>
                                <li>
                                    The Client hereby acknowledges that each and any Operation, activity, transaction, order
                                    and/or communication performed by him/her on the Trading Platform, including without
                                    limitation through the Account, and the Website, shall be governed by and/or must be
                                    executed in accordance with the terms and conditions of this Agreement and other
                                    documentation/information on the Website.
                                </li>
                                <li>By accepting this current agreement, the Client confirms that he/she is able to receive
                                    information, including amendments to the present Agreement either via email or through
                                    the Website.</li>
                            </ul>

                            <h3>1. Terms</h3>

                            <ul>
                                <li>
                                    <strong>Account</strong> – means a unique personified account registered in the name of
                                    the Client and which contains all of the Client’s transactions/ operations on the
                                    Trading Platform (as defined below) of the Company.
                                </li>
                                <li>
                                    <strong>Ask</strong> - means the higher price in a quote. The price the Client may buy
                                    at.
                                </li>
                                <li>
                                    <strong>Bid</strong> - means the lower price in a quote. The price the Client may sell
                                    at.
                                </li>
                                <li>
                                    <strong>CFD (contract for difference)</strong> - means a tradeable contract entered into
                                    between the
                                    Client and the Company, who exchange the difference in the value of an Instrument, as
                                    specified on the Trading Platform at the time of opening a Transaction, and the value of
                                    that Instrument at the contract’s end.
                                </li>
                                <li>
                                    <strong>Digital Option Contract</strong> - means a type of derivative instrument where
                                    the Client earns a
                                    payout if they correctly predict the price movement of the underlying asset at the time
                                    of the option’s expiry. The prediction can be made as to whether the value of the
                                    underlying asset will fall above or below the strike price at time of expiration. Should
                                    the option expire at the selected strike price, it will be considered to expire
                                    out-of-the money and will result in the loss of the invested amount.
                                </li>
                                <li>
                                    <strong>Execution</strong> - means the execution of Client order(s) by the Company
                                    acting as the Client's counterparty as per the terms of the present agreement.
                                </li>
                                <li>
                                    <strong>Financial Instruments</strong> - means the Financial Instruments as per
                                    paragraph 2.4 below that are available on the Company’s Trading Platform.
                                </li>
                                <li>
                                    <strong>KYC documents</strong> - means the documents to be provided by the Client,
                                    including without
                                    limitation to the a copy of the passport or ID and utility bill of the Client, in case
                                    it is a natural person and/or certificates showing the management and ownership going
                                    all the way up to the ultimate beneficial owner, in case it is a legal entity, and any
                                    other documents the Company may request upon its sole discretion.
                                </li>
                                <li>
                                    <strong>Market</strong> - means the market on which the Financial Instruments are
                                    subject to and/or
                                    traded on, whether this market is organized / regulated or not and whether it is in St.
                                    Vincent and the Grenadines or abroad.
                                </li>
                                <li>
                                    <strong>Market Maker</strong> - means a company which provides BID and ASK prices for
                                    financial instruments.
                                </li>
                                <li>
                                    <strong>Operations</strong> – means actions performed at the Client’s Account, following
                                    an order placed by the Client,, connected with but not limited to crediting of funds,
                                    return of funds, opening and closing of trade transactions/positions and/or that relate
                                    to financial instruments.
                                </li>
                                <li>
                                    <strong>Prices</strong> - means the prices offered to the Client for each transaction
                                    which may be
                                    changed without prior notice. Where this is relevant, the “Prices” given through the
                                    Trading Platform include the Spread (see definition below).
                                </li>
                                <li>
                                    <strong>Services</strong> – means the services described in section 3 of this Agreement.
                                </li>
                                <li>
                                    <strong>Spread</strong> - means the difference between the purchase price Ask (rate) and
                                    the sale price Bid (rate) at the same moment. For avoidance of doubt, a predefined
                                    spread is for the purposes of this Agreement assimilated commission.
                                </li>
                                <li>
                                    <strong>Trading Platform</strong> - means an electronic system on the internet that
                                    consists of all programs and technology that present quotes in real-time, allow the
                                    placement/modification/deletion of orders and calculate all mutual obligations of the
                                    Client and the Company.
                                </li>
                            </ul>
                            <h3>2. Subject of the Agreement</h3>
                            <ol>
                                <li>
                                    The subject of the Agreement shall be the provision of Services to the Client by the
                                    Company under the Agreement and through the Trading Platform.
                                </li>
                                <li>
                                    The Company shall carry out all transactions as provided in this Agreement on an
                                    execution-only basis, neither managing the account nor advising the Client. The Company
                                    is entitled to execute transactions requested by the Client as provided in this
                                    Agreement even if the transaction is not beneficial for the Client. The Company is under
                                    no obligation, unless otherwise agreed in this Agreement and/or other
                                    documentation/information on the Website, to monitor or advise the Client on the status
                                    of any transaction, to make margin calls, or to close out any of the Client’s open
                                    positions. Unless otherwise specifically agreed, the Company is not obligated to make an
                                    attempt to execute the Client’s order using quotes more favorable than those offered
                                    through the Trading Platform.
                                </li>
                                <li>
                                    The Investment and Ancillary Services which the Company should provide under the terms
                                    of the Agreement are stated below, and the Company will provide them in its capacity as
                                    a market maker under the terms of this Agreement. The Services that the Company provides
                                    in relation to one or more Financial Instruments are the following (the list below shall
                                    not be regarded as exhaustive):

                                    <ul>
                                        <li>
                                            Investment services
                                            <ul>
                                                <li>
                                                    Reception and transmission of orders in relation to one or more
                                                    Financial Instruments.
                                                </li>
                                                <li>
                                                    Execution of the orders on behalf of the Clients.
                                                </li>
                                                <li>Dealing on Own Account.</li>
                                                <li>Portfolio Management.</li>
                                                <li>
                                                    Investment Advice.
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            Ancillary Services
                                            <ul>
                                                <li>Safekeeping and administration of the Financial Instruments for the
                                                    Client’s Trading Account, including custodianship and related services
                                                    such as cash/collateral management.</li>
                                                <li>Granting credits or loans to one or more financial instruments, where
                                                    the firm granting the credit or loan is involved in the transaction.
                                                </li>
                                                <li>Foreign exchange services where these are connected to the provision of
                                                    the Investment Services.</li>
                                                The Company does not provide investment, tax or trading advice unless
                                                specified as such between the Client and the Company in a separate
                                                agreement. Our services include ‘execution only’ meaning that the
                                                Company will act on your instructions and will not advise you on any
                                                transaction, nor will we monitor your trading decisions to determine if
                                                they are appropriate for you or to help you avoid losses. You should
                                                obtain your own financial, legal, taxation and other professional
                                                advice.
                                            </ul>
                                        </li>
                                        <li>
                                            Financial Instruments (the list below shall not be regarded as exhaustive):
                                            <ul>
                                                <li>
                                                    Digital Options and/or Binary Options Contracts in stocks, commodities,
                                                    indices and currency pairs;
                                                </li>
                                                <li>
                                                    Financial Contracts for Difference (CFDs) in stocks, currency pairs
                                                    (FX), commodities, ETFs, indices and CFDs in cryptocurrencies;
                                                </li>
                                            </ul>
                                            Trading in CFDs and other derivatives does not give you any right, voting right,
                                            title or interest in the underlying instrument of the Transaction. You
                                            understand that you are not entitled to take delivery and are not entitled to
                                            ownership of any underlying instrument. CFDs and other derivatives are not
                                            traded on a regulated exchange and are not cleared on a central clearinghouse.
                                            This exchange and clearinghouse rules and protections do not apply. The Company
                                            reserves the right to, at its sole discretion and for all CFD products, impose
                                            the following expiration times: daily/weekly/monthly and/or no expiration at
                                            all.
                                        </li>
                                        <li>
                                            Protected CFDs
                                            <p>
                                                On its Website the Company is entitled to provide financial services of
                                                Contracts for Difference (CFD) with intrinsic protection (Protected CFDs).
                                                The risk of loss for Protected CFDs is limited to does not exceed the sum
                                                invested by the Client in a particular CFD contract with the addition of any
                                                trading and/or ongoing trading fees incurred as a result of opening such
                                                CFD.
                                            </p>
                                            <p>
                                                Clients may choose to opt in or out from the features offered by Protected
                                                CFDs by choosing the option to use the balance in their trading account in
                                                order to keep a CFD position open (“CFDs on margin”). In this instance, when
                                                the loss for a position reaches 95%, an additional 20% of the original
                                                investment amount is reserved from the Client’s account. If the CFD position
                                                takes further losses, the Client’s available balance is further reduced by
                                                20% accordingly. The Client can limit the additional funds reserved on his
                                                account balance by specifying his acceptable level of loss for a CFD
                                                position.
                                            </p>
                                            <p>
                                                In both features of CFDs described above, the Company offers negative
                                                account balance protection i.e. the Client’s losses may never exceed the
                                                total amount of funds available in the Client’s account. In addition, the
                                                risk of loss in relation to the corresponding potential benefits for CFDs
                                                described above, is reasonably understandable in light of the particular
                                                nature of the proposed financial contract.
                                            </p>
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                            <h3>3. Services of the Company</h3>
                            <ol>
                                <li>
                                    Services – services provided by the Company to the Client through the Trading Platform
                                    of the Company, including without limitation to customer, analytics, news and marketing
                                    information services.
                                </li>
                                <li>
                                    The Company shall facilitate the execution of trade activities/orders and/or
                                    transactions of the Client but the Client hereby acknowledges and accepts that the
                                    Company shall not at any time provide any trust services and/or trading consultation or
                                    advisory services to the Client.
                                </li>
                                <li>
                                    The Company shall process all transactions/Operations of the Client in accordance with
                                    the terms and conditions of this Agreement and on an execution-only basis. The Company
                                    shall not manage the Client’s Account nor advise the Client in any way.
                                </li>
                                <li>
                                    The Company shall process the orders/transactions requested by the Client under this
                                    Agreement irrespective of whether such orders/transactions may result to not being
                                    beneficial for the Client. The Company is under no obligation, unless otherwise agreed
                                    in this Agreement and/or other documentation/information on the Website, to monitor or
                                    advise the Client on the status of any transaction/order, to make margin calls to the
                                    Client, or to close out any of the Client’s open positions. Unless otherwise
                                    specifically agreed, the Company is not obligated to process or attempt to process the
                                    Client’s order/transaction using quotes more favorable than those offered through the
                                    Trading Platform.
                                </li>
                                <li>
                                    The Company shall not be financially liable for any operations conducted by the Client
                                    through the Account and/or on the Trading Platform.
                                </li>
                                <li>
                                    Each Client shall be the only authorized user of the Company’s services and of the
                                    corresponding Account. The Client is granted an exclusive and non-assignable right to
                                    the use of and to access the Account and it is his/her responsibility to ensure that no
                                    other third party, including, without limitation, to any next of kin and/or to members
                                    of his/her immediate family, shall gain access to and/or trade through the Account
                                    assigned to her/him.
                                </li>
                                <li>
                                    The Client shall be liable for all orders given through his security information and any
                                    orders received in this manner by the Company shall be considered to have been given by
                                    the Client. So long as any order is submitted through the Account of a Client, the
                                    Company shall reasonably assume that such orders are submitted by Client and the Company
                                    shall not be under any obligation to investigate further into the matter. The Company
                                    shall not be liable to and/or does not maintain any legal relations with, any third
                                    party other than the Client.
                                </li>
                                <li>
                                    If the Client acts on behalf of any third party and/or on behalf of any third party’s
                                    name, the Company shall not accept this person as a Client and shall not be liable
                                    before this person regardless if such person was identified or not.
                                </li>
                                <li>
                                    The Client has the right to cancel his order given to the Company within 3 seconds after
                                    the moment of giving such order to the Company (hereinafter referred to as the
                                    “Cancellation”). The client agrees and understands that the three seconds cancellation
                                    option offered by the Company is applicable and available for the client as long as the
                                    price remains unchanged. Three seconds from the moment of giving the order to the
                                    Company by the Client via the platform, the Company may (but is not obliged to) offer to
                                    buyout the option from the Client and the Client have the right to agree to such offer
                                    (hereinafter referred to as the “Buyout”). The Client is entitled to use such
                                    Cancellation or Buyout option subject to the conditions specified on the platform. Such
                                    conditions can also include the fee charged by the Company. Such fee is specified on the
                                    platform. The Company is obliged to provide all necessary information as to the
                                    conditions of Cancellation and Buyout, their cost, etc. The Client acknowledges and
                                    agrees that provision of such information on the platform is sufficient. The Client
                                    acknowledges and agrees that the use of Cancellation or Buyout is very risky to the
                                    Client as long as the cost of Cancellation and/or Buyout depends on the market
                                    situation. The Client acknowledges and agrees that he bears all the risks associated
                                    with the use of Cancellation and/or Buyout.
                                </li>
                                <li>
                                    The Client is entitled to use such Cancellation or Buyout option subject to the
                                    conditions specified on the Trading Platform/Website, including without limitation to
                                    any fee to be charged by the Company. The Company shall be obliged to provide all
                                    necessary information as to the conditions of Cancellation and Buyout, including any
                                    applicable costs, etc. The Client acknowledges, accepts and agrees that provision of
                                    such information on the Trading Platform is sufficient. The Client acknowledges, accepts
                                    and agrees that the use of Cancellation or Buyout option entail large risks for the
                                    Client, especially in the case where the costs associated with Cancellation and/or
                                    Buyout, depend on the market situation. The Client acknowledges, accepts and agrees that
                                    he/she shall bear all risks associated with the use of Cancellation and/or Buyout
                                    option.
                                </li>
                                <li>
                                    It is understood and agreed by the Client that the Company may from time to time, at its
                                    sole discretion, utilize a third party to hold the Client’s funds and/or for the purpose
                                    of receiving payment execution services. These funds will be held in segregated accounts
                                    from such third party’s own funds and will not affect the rights of the Client to such
                                    funds.
                                </li>
                                <li>
                                    The Company offers internal live chats where clients can share inter alia their trading
                                    ideas and/or express their general thoughts. The client acknowledges and agrees that the
                                    Company’s live chat feature is not and will not constitute a valid and/or accurate
                                    information and/or information addressed to the clients/potential clients and/or in any
                                    way information that is controlled by the Company and/or investment advice, as it is
                                    merely a feature allowing clients to inter alia express their thoughts and ideas between
                                    themselves.
                                </li>
                                <li>
                                    Provision of investment advice shall only be carried out by the Company subject to a
                                    separate written agreement with the Client and after assessing the Client’s personal
                                    circumstances. Unless such written agreement has been entered into between the Client
                                    and the Company, the provision of reports, news, opinions and any other information by
                                    the Company to the Client does not constitute investment advice or investment research.
                                </li>
                            </ol>
                            <h3>4. Execution of Orders / Electronic Trading</h3>
                            <ol>
                                <li>
                                    By accepting this Agreement, the Client accepts that he has read and understood all
                                    provisions of this Agreement and related information on the Website. The Client accepts
                                    and understands that all orders received shall be executed by the Company as the
                                    counterparty of the transaction in its capacity of Market Maker. The Company shall act
                                    as a principal and not as an agent on the Client’s behalf for the purpose of the
                                    Execution of orders. The Client is informed that Conflicts of Interest may arise because
                                    of this model.
                                </li>
                                <li>
                                    Reception of the order by the Company shall not constitute acceptance and acceptance
                                    shall only be constituted by the execution of the order by the Company.
                                </li>
                                <li>
                                    The Company shall be obliged to execute the Client's orders sequentially and promptly.
                                </li>
                                <li>
                                    The Client acknowledges and accepts a) the risk of mistakes or misinterpretations in the
                                    orders sent through the Trading Platform due to technical or mechanical failures of such
                                    electronic means, b) the risk of any delays or other problems as well as c) the risk
                                    that the orders may be placed by persons unauthorised to use and/or access the Account,
                                    and the Client agrees to indemnify the Company in full for any loss incurred as a result
                                    of acting in accordance with such orders.
                                </li>
                                <li>
                                    The Client accepts that during the reception and transmission of his/her order, the
                                    Company shall have no responsibility as to its content and/or to the identity of the
                                    person placing the order, except where there is gross negligence, willful default or
                                    fraud by the Company.
                                </li>
                                <li>
                                    The Client acknowledges that the Company will not take action based on the orders
                                    transmitted to the Company for execution by electronic means other than those orders
                                    transmitted using the predetermined electronic means such as the Trading Platform, and
                                    the Company shall have no liability towards the Client for failing to take action based
                                    on such orders.
                                </li>
                                <li>
                                    The client acknowledges and agrees that any products or services that may be offered by
                                    the Company may not always be available for purchasing or use for trading purposes, and
                                    it is in the Company's absolute discretion whether it will make these products available
                                    or not to the clients at any time. The Company shall bear no liability, monetary or
                                    otherwise, in relation to this section, including without limitation to not making
                                    available any product at any given time.
                                </li>
                                <li>
                                    The client agrees and understands the following in consideration of the below corporate
                                    actions:
                                    <ul>
                                        <li>
                                            Where it is publicly available that a specific Company has filled and/or is in
                                            the process of filing for Chapter 11 under US bankruptcy law and/or an
                                            equivalent to Chapter 11 corporate action related to bankruptcy and/or
                                            bankruptcy law under any national legislation/regulations, the Company reserves
                                            the right to close any and all relevant positions in regard to the asset(s) of
                                            such Company and suspend the related asset(s); the client’s position(s) held in
                                            the referred asset(s) will be closed by the Company with the last available
                                            price on the platform and the client will receive a prior notice on this matter.
                                            It should be noted that the Company will not be held liable for any losses
                                            incurred to the client in relation to the aforesaid closure of the position(s)
                                            and/or the suspension of the asset(s).
                                        </li>
                                        <li>
                                            In circumstances where the underlying asset offered by the Company might be
                                            subject to split and/or reverse split, the Company may decide to close the
                                            client’s position(s) held in the referred asset with the last available price on
                                            the platform prior to the occurence of the split and/or reverse split event and
                                            the client will receive a notification in this re
                                        </li>
                                    </ul>
                                </li>
                                <li>
                                    The Client acknowledges that the Company will have the right, at any time and for any
                                    reason and without justification, at its sole discretion, to refuse to execute orders,
                                    including, without limitation, in the following circumstances:
                                    <ul>
                                        <li>
                                            If the execution of the order aims or may aim to manipulate the market price of
                                            the financial instruments (market manipulation);
                                        </li>
                                        <li>
                                            If the execution of the order constitutes or may constitute abusive exploitation
                                            of confidential information (insider tradin
                                        </li>
                                        <li>
                                            If the execution of the order contributes or may contribute to the legalization
                                            of the proceeds of illegal activities (money laundering);
                                        </li>
                                        <li>
                                            If the Client has insufficient funds to cover the purchase of financial
                                            instruments or if there is insufficient number of financial instruments to cover
                                            their sale;
                                        </li>
                                        <li>
                                            If the Client fails to fulfill any of his/her obligations towards the Company
                                            under this Agreement;
                                        </li>
                                        <li>
                                            The Company’s own exposure levels as set out in the Company’s internal policies
                                            have been reached in respect of the Financial Instrument or the underlying asset
                                            of the Financial Instrument the Client wishes to buy/sell;
                                        </li>
                                        <li>
                                            If the Client seeks to become or becomes a US Reportable Person or a resident of
                                            USA/territories of the US, Canada, Australia, Belgium, Israel, Palestine, Japan,
                                            Syria, Iran, North Korea, the Russian Federation, the United Kingdom and/or any
                                            country of the European Economic Area.
                                            Any such refusal by the Company shall not affect any obligation, which the
                                            Client may have towards the Company.
                                        </li>
                                        <li>
                                            The Client acknowledges that, at its own discretion, under certain market
                                            conditions and in particular where it has reached or surpassed internal exposure
                                            levels, the Company may have to close all or a part of the Client’s positions in
                                            CFDs. The Company undertakes to provide adequate notification to the Client in
                                            case a CFD position will be liquidated by the Company and shall provide no less
                                            than 5 (five) working days notice before proceeding with the liquidation.
                                        </li>
                                        <li>
                                            In addition to the above, the Company maintains the right, but not the
                                            obligation, to charge each Client a maintenance/custodial fee for any open
                                            cryptocurrency position (without leverage) maintained with the Company (“Open
                                            Positions”). Such right arises and may be exercised by the Company if such Open
                                            Positions remain open for more than three (3) months from the date of their
                                            opening (“Minimum Period”).
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                            <h3>5. Limitation of Liability</h3>
                            <ol>
                                <li>
                                    The Company does not guarantee uninterrupted service, safe and errors-free, and immunity
                                    from unauthorized access to the trading sites' servers nor disruptions caused from
                                    damages, malfunctions or failures in hardware, software, communications and systems in
                                    the Client's computers and in the Company's suppliers.
                                </li>
                                <li>
                                    Supplying services by the Company depends, inter alia, on third parties and the Company
                                    bears no responsibility for any actions or omissions of third parties and bears no
                                    responsibility for any damage and/or loss and/or expense caused to the Client and/or
                                    third party as a result of and/or in relation to any aforesaid action or omission.
                                </li>
                                <li>
                                    The Company will bear no responsibility for any damage of any kind allegedly caused to
                                    the Client, which involves force majeure or any such event that the Company has no
                                    control of and which has influenced the accessibility of its trading site.
                                </li>
                                <li>
                                    Under no circumstances will the Company or its Agent(s) hold responsibility for direct
                                    or indirect damages of any kind, even if the Company or its Agent(s) had been notified
                                    of the possibility of aforesaid damages.
                                </li>
                                <li>
                                    In case a Client registers an Account through an Introducing Broker, referring agents,
                                    or other third parties, it is hereby agreed as follows:
                                    <ul>
                                        <li>
                                            The Company shall not be responsible or liable for any agreement or arrangement
                                            that may exist between the Client and these persons or for any additional costs
                                            that may arise as a result of such agreement;
                                        </li>
                                        <li>
                                            The Introducing Broker and/or referring agents are not representatives or agents
                                            of the Company and they do not act on behalf of the Company. In this respect,
                                            they are not authorized to provide any guarantees or any promises regarding the
                                            Company or its services nor provide advice or personal recommendations to the
                                            Client regarding the Client’s Account and/or transactions and the Company shall
                                            accept no responsibility whatsoever for any such advice or recommendations.
                                        </li>
                                    </ul>
                                </li>
                            </ol>
                            <h3>6. Settlement of Transactions</h3>
                            <ol>
                                <li>
                                    The Company shall proceed to a settlement of all transactions upon execution of such
                                    transactions.
                                </li>
                                <li>
                                    An online statement of Account will be available for printing to the Client on the
                                    Trading Platform of the Company, at all times.
                                </li>
                            </ol>
                            <h3>7. Indemnity and Liability</h3>
                            <ol>
                                <li>
                                    The Client shall indemnify and keep indemnified the Company and its directors, officers,
                                    employees or representatives against all direct or indirect liabilities (including
                                    without limitation all losses, damages, claims, costs or expenses), incurred by the
                                    Company or any other third party in respect to any act or omission by the Client in the
                                    performance of his/her obligations under this Agreement and/or the liquidation of any
                                    financial instruments of the Client in settlement of any claims with the Company, unless
                                    such liabilities result from gross negligence, willful default or fraud by the Company.
                                    This indemnity shall survive termination of this Agreement.
                                </li>
                                <li>
                                    The Company shall not be liable for any direct and/or indirect loss, expense, cost or
                                    liability incurred by the Client in relation to this Agreement, unless such loss,
                                    expense, cost or liability is a result of gross negligence, willful default or fraud by
                                    the Company. Notwithstanding the provisions of section 8.1 above, the Company shall have
                                    no liability to the Client whether in tort (including negligence), breach of statutory
                                    duty, or otherwise, for any loss of profit, or for any indirect or consequential loss
                                    arising under and/or in connection with the Agreement.
                                </li>
                                <li>
                                    The Company shall not be liable for any loss of opportunity as a result of which the
                                    value of the financial instruments of the Client could have been increased or for any
                                    decrease in the value of the financial instruments of the Client, regardless of the
                                    cause, unless such loss is directly due to gross negligence, willful default or fraud on
                                    the part of the Compan
                                </li>
                                <li>
                                    The Company shall not be liable for any loss which is the result of misrepresentation of
                                    facts, error in judgment or any act done or which the Company has omitted to do,
                                    whenever caused, unless such act or omission resulted from gross negligence, willful
                                    default or fraud by the Company.
                                </li>
                                <li>
                                    The Company shall not be liable for any act or omission or for the insolvency of any
                                    counterparty, bank, custodian or other third party which acts on behalf of the Client or
                                    with or through whom transactions on behalf of the Client are carried out.
                                </li>
                            </ol>
                            <h3>8. Personal Data</h3>
                            <ol>
                                <li>
                                    By accepting the terms and conditions of this Agreement, the Client irrevocably consents
                                    to the collection and processing of his/her personal data/information by the Company
                                    without the use of automatic controls, as the same are provided by him/her to the
                                    Company. The term personal data for the purposes of this Agreement shall mean: the Name,
                                    Surname, Patronymic, gender, address, phone number, e-mail, IP address of the Client,
                                    Cookies and information that relate to the provision of Services to the Client (for
                                    example, the Client’s trading story).
                                </li>
                                <li>
                                    The Client shall be obliged to provide correct, accurate and complete personal
                                    data/information as requested by the Company.
                                </li>
                                <li>
                                    The purpose of collecting and processing the personal data is to comply with applicable
                                    regulating legislation requirements, including without limitation to anti-money
                                    laundering regulations, as well as for any and all purposes in relation to this
                                    Agreement, including without limitation to enable the Company to discharge its
                                    obligations towards the Client.
                                </li>
                                <li>
                                    The Client acknowledges and consents to that, for the purposes described at the section
                                    directly above, the Company shall be entitled to collect, record, systematize,
                                    accumulate, store, adjust (update, change), extract, use, transfer (disseminate,
                                    provide, access), anonymize, block, delete, destroy such personal data and/or perform
                                    any other actions according to the current regulating legislation.
                                </li>
                                <li>
                                    The Client acknowledges and consents to the Company storing, maintaining and processing
                                    his/her personal data in the manner as described in this Agreement during the term of
                                    the Agreement and for 5 years following any termination of the Agreement.
                                </li>
                                <li>
                                    The Client hereby acknowledges, accepts, agrees and consents to the disclosure of
                                    personal data by the Company to third parties and their representatives, solely for the
                                    purposes of the Agreement, including without limitation in order to facilitate
                                    processing/execution of the Client’s orders/Operations, provided that at all times (i)
                                    the amount of personal data to be disclosed to any such third party is proportionate
                                    and/or limited solely to facilitate to the actions as described above, and (ii) the
                                    Company shall ensure that such third party shall treat the personal data in accordance
                                    with applicable laws and regulati
                                </li>
                                <li>
                                    The Company shall not be entitled to make available the personal data in public and/or
                                    disclose such personal data for any other purposes, subject to disclosure required under
                                    applicable laws and regulations.
                                </li>
                                <li>
                                    During processing of the personal data, the Company shall take necessary legal,
                                    organizational and technical measures to protect such personal data from unauthorized or
                                    accidental access, destruction, change, blocking, copying, provision, and dissemination
                                    as well as from any other illegal actions.
                                </li>
                            </ol>
                            <h3>9. Assignment</h3>
                            <ol>
                                <li>
                                    The Agreement shall be personal to the Client and the Client shall not be entitled to
                                    assign or transfer any of his/her rights or obligations under this Agreement.
                                </li>
                                <li>
                                    The Company may at any time assign or transfer any of its rights or obligations under
                                    this Agreement to a third party. The Company shall notify the Client of any such
                                    assignment.
                                </li>
                            </ol>
                            <h3>10. Risk Statement</h3>
                            <p>
                                The Client hereby confirms to have read, understood and hereby accepts the risk statement
                                relating to the use of Services on the Website, as the same is available electronically via
                                the Website.
                            </p>
                            <p>
                                By accepting this Agreement the Client accepts that the Client has read and understood the
                                information contained in this Agreement and the Company’s general description of the nature
                                and risks of different Financial Instruments and/or Service(s) which can be found in our
                                Risk Disclosure.
                            </p>

                            <h3>11. One Click Trading Terms and Conditions</h3>

                            <p>
                                One Click Trading mode allows you to perform trading operations on the platform with only
                                one click on the Buy/Call or Sell/Put buttons without any additional confirmations.
                            </p>
                            <p>
                                Opting in for the One Click Trading mode means that you acknowledge that you have read and
                                understood the following terms and conditions, and you agree to be bound hereby.
                            </p>
                            <p>
                                Your current version of the platform enables you to choose between the following modes for
                                order submission. You agree that you will be bound by the procedures and conditions
                                specified herein with respect to each such mode.
                            </p>
                            <ul>
                                <li>
                                    There are several steps you have to follow when using the default mode for the
                                    submission of orders. Using the default mode, you first invoke the instruments menu and
                                    choose the assets you want to trade. Then you select all parameters depending on the
                                    instrument you have chosen and confirm your order submission by clicking either Buy/Call
                                    or Sell/Put buttons depending on the particular order type selected and your trading
                                    intentions. Using the default mode, a confirmation window will appear and you will have
                                    to confirm your intentions and the trade details in order to confirm the transaction.
                                    Your order will not be submitted until you have completed the aforementioned procedure.
                                </li>
                                <li>
                                    The One Click Trading mode for order submission ("One-click trading") is a one-step
                                    process. You will be submitting orders when you single-click either Buy/Call or Sell/Put
                                    buttons.
                                </li>
                            </ul>
                            <p>
                                There will be no subsequent confirmation prompt for you to click; hence you should ensure
                                beforehand that all parameters are set based on your trading intentions. You will not be
                                able to withdraw your order once you click Buy/Call or Sell/Put buttons (with the exemption
                                of a 3 second cancellation period for binary options) and only certain parameters such as
                                stop loss and take profit orders for CFDs can be modified after having opened a trade. Under
                                normal market conditions and system performance, a market order will be promptly filled
                                after submission and you will have entered into a binding transaction.
                            </p>
                            <p>
                                You can activate or deactivate One Click Trading mode in the settings of the platform. One
                                Click Trading can be activated or deactivated for one or several instruments in the
                                settings.
                            </p>
                            <p>
                                By selecting the One Click Trading mode, you understand that your orders will be submitted
                                by clicking the Buy/Call or Sell/Put button, without any further order confirmation. You
                                agree to accept all risks associated with the use of the order submission mode you have
                                chosen, including, without limitation, the risk of errors, omissions or mistakes made in
                                submitting any order.
                            </p>
                            <p>
                                You agree to fully indemnify and hold harmless the Company from any and all losses, costs
                                and expenses that may incur as a result of any such errors, omissions or mistakes by you or
                                any other person trading on your behalf.
                            </p>
                            <p>
                                If you accept the One Click Trading terms and conditions, tick the "buy in one click" option
                                when opening trades on the platform. If you do not accept the conditions, do not tick the
                                box and do not use the One Click Trading function.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
