@extends('app.layout.layout')

@section('seo-breadcrumb')
    {{ Breadcrumbs::view('breadcrumbs::json-ld', 'dashboard') }}
@endsection

@section('page-title', 'Dashboard')


@section('page-css')
    <link rel="stylesheet" type="text/css" href="{{ asset('app-assets') }}/css/pages/dashboard-ecommerce.min.css">
@endsection

@section('custom-css')
    <style>
        .wapper {
            min-height: 550px !important;
        }

        .my_container {
            padding: 0px 10px !important;
            padding-right: 0px !important;
        }

        .main_contant {
            display: flex !important;
            justify-content: space-between !important;
        }

        .left_contant {
            width: 54% !important;
        }

        h1,
        h2,
        h3 {
            color: #4d4d4d !important;
            padding-left: 20px !important;
        }

        .payment_box {
            display: flex !important;
            align-items: center !important;
        }

        .pay_heading {
            font-size: 12px;
            color: #8494a8 !important;
            display: flex !important;
            flex-direction: column !important;
            text-align: center !important;
            min-width: 100px !important;
        }

        .box_row {
            display: flex !important;
            flex-wrap: wrap !important;
            justify-content: flex-start !important;
        }

        .pay_info {
            height: 60px !important;
            padding: 7px 0px !important;
            /* border: solid 1px #000; */
            background-color: #fff !important;
            display: flex !important;
            min-width: 106px !important;
            flex-direction: column !important;
            margin: 3px !important;
            border-radius: 6px !important;
            box-shadow: 1px 1px 8px 2px #ddd !important;
            text-align: center !important;
            cursor: pointer !important;
        }

        .pay_title {
            font-size: 12px !important;
            color: #8494a8 !important;
        }

        .pay_bill {
            font-size: 16px !important;
            font-weight: 800 !important;
            margin-top: 4px !important;
        }

        .center_contant {
            width: 36% !important;
            padding: 0px 8px !important;
        }

        .center_contant iframe {
            height: calc(100vh - 70px) !important;
        }

        .center_contant iframe {
            height: 100% !important;
            width: 100% !important;
            border: none !important;
        }

        .last_contant {
            width: 10% !important;
        }

        .link_icon ul {
            list-style: none;
        }

        .link_icon ul li {
            padding: 15px 0px !important;
            border-bottom: 1px solid #ddd !important;
            margin: 0px 0px !important;
            display: flex !important;
            flex-direction: column !important;
            text-align: center !important;
        }

        .link_icon i {
            font-size: 20px !important;
            margin-bottom: 3px !important;
            color: #000 !important;
        }

        .fa {
            display: inline-block !important;
            font: normal normal normal 14px/1 FontAwesome !important;
            font-size: inherit !important;
            text-rendering: auto !important;
            -webkit-font-smoothing: antialiased !important;
            -moz-osx-font-smoothing: grayscale !important;
        }

        .link_icon ul li span {
            color: #8494a8 !important;
        }

        .pay_frame_info {
            cursor: pointer;
        }

        .text_green {
            color: green;
        }

        .text_red {
            color: red;
        }

        .pay_heading i {
            font-size: 20px !important;
            color: #000 !important;
            margin-bottom: 3px !important;
        }
    </style>
@endsection

@section('seo-breadcrumb')
    {{ Breadcrumbs::view('breadcrumbs::json-ld', 'dashboard') }}
@endsection

@section('content')
    <!-- Dashboard Ecommerce Starts -->
    <section id="renatal-management">
        <div class="wapper">


            <div style="width: 100%; max-width: 1440px;" class="my_container">
                <div class="main_contant">
                    <div class="left_contant">
                        <h2 class="main_heading">Welcome Insul Zone </h2>
                        <div class="payment_box" id="booking-section">
                            <h4 class="pay_heading"><i class="fa fa-calendar" aria-hidden="true"></i>
                                <span>Booking/s</span>
                            </h4>
                            <div class="box_row">
                                <div class="pay_info pay_frame_info" data-section="booking,fleet">
                                    <span class="pay_title">Active</span>
                                    <span class="pay_bill get-u-data text_green active-booking"
                                        id="active-booking">0</span>
                                </div>
                                <div class="pay_info pay_frame_info" data-section="booking,fleet">
                                    <span class="pay_title">Not Confirm</span>
                                    <span class="pay_bill get-u-data text_red not-confirm-booking"
                                        id="not-confirm-booking">0</span>
                                </div>
                                <div class="pay_info pay_frame_info" data-section="booking,fleet">
                                    <span class="pay_title">Confirmed</span>
                                    <span class="pay_bill get-u-data confirm-booking" id="confirm-booking">0</span>
                                </div>
                                <div class="pay_info pay_frame_info" data-section="booking,fleet">
                                    <span class="pay_title">Drop Off Due</span>
                                    <span class="pay_bill get-u-data return-due" id="return-due-booking">0</span>
                                </div>
                                <div class="pay_info pay_frame_info" data-section="booking,fleet">
                                    <span class="pay_title">Pick Up Due</span>
                                    <span class="pay_bill get-u-data pickup-due" id="pickup-due-booking">0</span>
                                </div>

                            </div>
                        </div>

                        <div class="payment_box" id="direct-debit-section">
                            <h4 class="pay_heading">
                                <i class="fa fa-credit-card-alt" aria-hidden="true"></i><span>Payments</span>
                            </h4>

                            <div class="box_row">
                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">In-Queue</span>
                                    <span class="pay_bill get-u-data text_red inqu-dd" id="inqu-dd">0</span>
                                </div>
                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">In Progress</span>
                                    <span class="pay_bill get-u-data text_green inpro-dd" id="inpro-dd">0</span>
                                </div>

                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">Dishonored</span>
                                    <span class="pay_bill get-u-data text_red dis-dd" id="dishonored-dd">0</span>
                                </div>

                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">Success</span>
                                    <span class="pay_bill get-u-data text_red dis-dd" id="success-dd">0</span>
                                </div>
                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">Settled</span>
                                    <span class="pay_bill get-u-data text_green settled-dd" id="settled-dd">0</span>
                                </div>

                            </div>

                        </div>
                        <div class="payment_box" id="fleet-section">
                            <h4 class="pay_heading"><i class="fa  fa-car" aria-hidden="true"></i><span>Fleet</span></h4>

                            <div class="box_row">
                                <div class="pay_info pay_frame_info" data-section="booking,fleet">
                                    <span class="pay_title">Active</span>
                                    <span class="pay_bill get-u-data text_green total-car-css" id="total-cars">0</span>
                                </div>
                                <div class="pay_info pay_frame_info" data-section="booking,fleet">
                                    <span class="pay_title">InActive</span>
                                    <span class="pay_bill get-u-data text_green total-car-css" id="total-in-active">0</span>
                                </div>
                                <div class="pay_info pay_frame_info" data-section="booking,fleet">
                                    <span class="pay_title">Available</span>
                                    <span class="pay_bill get-u-data text_red total-avb-css" id="available-cars">0</span>
                                </div>
                                <div class="pay_info pay_frame_info" data-section="booking,fleet">
                                    <span class="pay_title">Expiry/s</span>
                                    <span class="pay_bill get-u-data total-exp-css" id="exp-all">0</span>
                                </div>

                                <div class="pay_info pay_frame_info" data-section="booking,fleet">
                                    <span class="pay_title">Service</span>
                                    <span class="pay_bill get-u-data total-service-css" id="service-exp">0</span>
                                </div>

                            </div>

                        </div>

                        <div class="payment_box" id="customer-section">
                            <h4 class="pay_heading"><i class="fa fa-user-circle-o"
                                    aria-hidden="true"></i><span>Customer</span></h4>

                            <div class="box_row">

                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">Active</span>
                                    <span class="pay_bill get-u-data text_red total-customer-css"
                                        id="active-customer">0</span>
                                </div>
                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">New</span>
                                    <span class="pay_bill get-u-data total-customer-css" id="new-customer">0</span>
                                </div>

                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">Incomplete</span>
                                    <span class="pay_bill get-u-data total-car-css" id="incomplete-customer">0</span>
                                </div>

                            </div>

                        </div>



                        <div class="payment_box" id="invoices-section" style="">
                            <h4 class="pay_heading"><i class="fa fa-money" aria-hidden="true"></i> <span>Sale</span></h4>

                            <div class="box_row">

                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">19 Feb - 25 Feb</span>
                                    <span class="pay_bill get-u-data invoice-week"
                                        id="invoice-week-total-2024-02-25">0</span>
                                </div>
                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">12 Feb - 18 Feb</span>
                                    <span class="pay_bill get-u-data invoice-week"
                                        id="invoice-week-total-2024-02-18">0</span>
                                </div>
                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">05 Feb - 11 Feb</span>
                                    <span class="pay_bill get-u-data invoice-week"
                                        id="invoice-week-total-2024-02-11">0</span>
                                </div>
                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">29 Jan - 04 Feb</span>
                                    <span class="pay_bill get-u-data invoice-week"
                                        id="invoice-week-total-2024-02-04">0</span>
                                </div>



                            </div>

                        </div>

                        <div class="payment_box" id="invoicesbal-section" style="">
                            <h4 class="pay_heading"><i class="fa fa-money" aria-hidden="true"></i> <span>Balance</span>
                            </h4>

                            <div class="box_row">

                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">19 Feb - 25 Feb</span>
                                    <span class="pay_bill get-u-data invoice-week"
                                        id="invoice-week-bal-2024-02-25">0</span>
                                </div>
                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">12 Feb - 18 Feb</span>
                                    <span class="pay_bill get-u-data invoice-week"
                                        id="invoice-week-bal-2024-02-18">0</span>
                                </div>
                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">05 Feb - 11 Feb</span>
                                    <span class="pay_bill get-u-data invoice-week"
                                        id="invoice-week-bal-2024-02-11">0</span>
                                </div>
                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">29 Jan - 04 Feb</span>
                                    <span class="pay_bill get-u-data invoice-week"
                                        id="invoice-week-bal-2024-02-04">0</span>
                                </div>

                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">All Over</span>
                                    <span class="pay_bill get-u-data all-bal" id="all-over-balance">0</span>
                                </div>


                            </div>

                        </div>

                        <div class="payment_box" id="Diary-section">
                            <h4 class="pay_heading"><i class="fa fa-file-text-o" aria-hidden="true"></i>
                                <span>Diary</span>
                            </h4>

                            <div class="box_row">

                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">All</span>
                                    <span class="pay_bill get-u-data text_red total-car-css" id="total-diary">0</span>
                                </div>
                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">Pending</span>
                                    <span class="pay_bill get-u-data total-car-css" id="diary-pending">0</span>
                                </div>

                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">Review Pending</span>
                                    <span class="pay_bill get-u-data total-avb-css" id="diary-review-pending">0</span>
                                </div>

                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">Complete</span>
                                    <span class="pay_bill get-u-data total-exp-css" id="diary-complete">0</span>
                                </div>
                                <div class="pay_info pay_frame_info">
                                    <span class="pay_title">FollowUp</span>
                                    <span class="pay_bill get-u-data total-exp-css" id="diary-followup">0</span>
                                </div>

                            </div>

                        </div>

                        <!-- <div class="payment_box" id="images-section">
                                <h4 class="pay_heading"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Recent Images</span></h4>
                                <div class="recent_images">


                                </div>

                              </div> -->
                    </div>
                    <div class="center_contant" id="f-result">


                        <iframe enablejsapi="1" id="framecontent" src="https://www.i.starr365.com/app/fleet/index.php?t=DXalYUBiLBiVZN4h4ZJHFQR6BnuVi75yq1_xdgfPywxAsfeI0UNU1rh0h8gywBGoNB2tspRdHeEtE1DEHHMBWVZr6QlhLa64BITrh-Lfw0Yr-zV58ZrE-xATMitPsCikmays1nVPF3MLdrMJSEtelMCzUXK0lS6U_LR0iKGrEd3Nou4OXxSPiTAXZTpQgYpNM4QOSvRMHeaLHY8FpJvoUVBpdpTdO4Vg1q2XDJ05IJmhuwHlApuXJ5eaJ0m4Bh8T&amp;hidetop=1&amp;carIds=58440%2C58441%2C58442%2C58443%2C58444%2C58445%2C58446%2C58447%2C58448%2C58449%2C58451%2C58452%2C58453%2C58454%2C58455%2C58456%2C58458%2C58459%2C58460%2C58461%2C58462%2C58463%2C58464%2C58465%2C58466%2C58467%2C58468%2C58469%2C58470%2C58471%2C58472%2C58473%2C58474%2C58476%2C58478%2C58479%2C58480%2C58481%2C58482%2C58483%2C58484%2C58485%2C58486%2C58488%2C58489%2C58490%2C58491%2C58492%2C58493%2C58494%2C58495%2C58496%2C58498%2C58499%2C58500%2C58501%2C58502%2C58503%2C58504%2C58505%2C58506%2C58508%2C58509%2C58510%2C58511%2C58512%2C58513%2C58514%2C58515%2C58516%2C58517%2C58518%2C58570%2C58639%2C58693%2C58725%2C58842%2C58978%2C58979%2C59188%2C59295%2C59296%2C59342%2C59346%2C59403%2C59457%2C59497%2C59564%2C59565%2C59569%2C59582%2C59589%2C59610%2C59611%2C59612%2C59613%2C59614%2C59615%2C59885%2C60381%2C60409%2C60419%2C60463%2C60465%2C60487%2C60521%2C60522%2C60545%2C60578%2C60654%2C61095%2C61605%2C61606%2C61762%2C62026%2C62074%2C62075%2C62076%2C62310%2C62388%2C62658%2C62660%2C62828%2C62871%2C62876%2C62877%2C62879%2C62880%2C62881%2C62883%2C63162%2C63163%2C63164%2C63240%2C63243%2C63244%2C63245%2C63246%2C63249%2C63250%2C63251%2C63252%2C63784%2C64970%2C65352%2C65383%2C65669%2C65883%2C65897%2C65945%2C65946%2C65986%2C66045%2C66046%2C66081%2C66085%2C66452%2C66455%2C66456%2C67400%2C67544%2C67814%2C67829%2C67958%2C67992%2C68610%2C68612%2C69808%2C70007%2C70112%2C70169%2C70309%2C70463%2C70515%2C70863%2C70864%2C71936%2C71937%2C72029%2C72220%2C72228%2C72283%2C72286%2C72319%2C72329%2C72462%2C72463%2C72582%2C72960%2C72975%2C72976%2C73037%2C73040%2C73267%2C73608%2C73609%2C73610%2C73612%2C73614%2C73615%2C73899%2C74019%2C74105%2C74157%2C74329%2C74604%2C74745%2C75281%2C75295%2C75475%2C75477%2C76340%2C76342%2C76539%2C76546%2C76591%2C76797%2C76798%2C76866%2C76875%2C76920%2C76922%2C76923%2C76945%2C76979%2C77065%2C77117%2C77154%2C77155%2C77157%2C77230%2C77273%2C77304%2C77589%2C77590%2C77591%2C77592%2C77594%2C77649%2C77652%2C77718%2C77719%2C78112%2C78433%2C78435%2C78441%2C78443%2C78446%2C78447%2C78448%2C78452%2C78454%2C78455%2C78457%2C78458%2C78460%2C78461%2C78463%2C78464%2C78478%2C78744%2C79057%2C79199%2C79204%2C79328%2C79329%2C79332&amp;bookIds=9391%2C9397%2C10248%2C10530%2C11323%2C11750%2C12099%2C12279%2C12783%2C13039%2C13175%2C13314%2C13491%2C13612%2C13946%2C14850%2C15088%2C15966%2C16053%2C16074%2C16133%2C16173%2C16663%2C16786%2C18750%2C18996%2C19594%2C19634%2C19657%2C20028%2C20038%2C20529%2C20621%2C20632%2C20657%2C20715%2C20838%2C21003%2C21085%2C21116%2C21180%2C21401%2C21413%2C21554%2C21671%2C21805%2C21820%2C21978%2C21990%2C22274%2C22598%2C22602%2C22811%2C23366%2C23494%2C23542%2C23608%2C23616%2C23632%2C23683%2C23709%2C23747%2C23979%2C24192%2C24329%2C24352%2C24438%2C24522%2C24540%2C24708%2C24933%2C24936%2C25015%2C25023%2C25162%2C25317%2C25387%2C25404%2C25406%2C25419%2C25465%2C25516%2C25520%2C25530%2C25547%2C25572%2C25622%2C26075%2C26078%2C26216%2C26373%2C26493%2C26675%2C26740%2C27026%2C27111%2C27123%2C27192%2C27566%2C27676%2C27787%2C27826%2C27896%2C27998%2C28007%2C28008%2C28185%2C28238%2C28287%2C28290%2C28293%2C28526%2C28537%2C28626%2C28738%2C28795%2C28805%2C28867%2C28881%2C28916%2C29032%2C29069%2C29100%2C29153%2C29274%2C29326%2C29333%2C29353%2C29388%2C29449%2C29501%2C29567%2C29865%2C29878%2C29921%2C29926%2C29979%2C29984%2C29994%2C30101%2C30102%2C30129%2C30149%2C30193%2C30197%2C30286%2C30361%2C30362%2C30442%2C30465%2C30482%2C30616%2C30642%2C30736%2C30749%2C30753%2C30845%2C30871%2C30976%2C31035%2C31050%2C31078%2C31116%2C31140%2C31193%2C31209%2C31233%2C31293%2C31294%2C31297%2C31307%2C31309%2C31344%2C31361%2C31377%2C31430%2C31439%2C31447%2C31590%2C31592%2C31599%2C31643%2C31644%2C31678%2C31689%2C31791%2C31796%2C31801%2C31842%2C31863%2C31936%2C31957%2C31960%2C31968%2C31977%2C32004%2C32010%2C32015%2C32027%2C32033%2C32073%2C32111%2C32133%2C32138%2C32140%2C32211%2C32225%2C32228%2C32244%2C32306%2C32312%2C32347%2C32359%2C32378%2C32381%2C32393%2C32400%2C32434%2C32440%2C32446%2C32497%2C32514%2C32554%2C32580%2C32587%2C32590%2C32592%2C32603%2C32613%2C32647%2C32654%2C32660%2C32671%2C32678%2C32679%2C32779%2C32782%2C32811%2C32819%2C32860%2C32870%2C32885%2C32908%2C32912%2C32913%2C32915%2C32925%2C33002%2C33017%2C33028%2C33031%2C33038%2C33073%2C33086%2C33096%2C33102%2C33108%2C33111%2C33128%2C33182%2C33185%2C33187%2C33211%2C33231%2C33237%2C33272%2C33296%2C33307%2C33310%2C33311&amp;is_dashboard=1" allowfullscreen=""></iframe>
                    </div>
                    <div class="last_contant">
                        <div class="link_icon">
                            <ul>
                                <li class="pay_frame_info" data-section="bills"><i class="fa fa-address-book-o"
                                        aria-hidden="true"></i><span class="get-u-data"
                                        data-url="https://www.i.starr365.com/app/m/bills.php?t=88E0eu-_dTDxTkIKnNQH1B4e2YVM3ORM7kKQABT6UpGrXeWPUforC1LZAzbjF5Y5o0Ic1Cdxm2qymzMmimp4bOvjp-xexYk1_bFWtlOwCKFnNgQf6Yw6HgcjvdpcJw5xHb7snXT-xo1nRI3M3DVPkxhl2_emeePTG94-znWVsNCWl6CcTA-ubcgmtxPJBrOdNLirBXJ35bcPnuVJXmjE8D-bjNtzAM4bkc_OHkUgIiA">Bill</span>
                                </li>
                                <li class="pay_frame_info" data-section="booking,fleet"><i class="fa fa-car"
                                        aria-hidden="true"></i><span class="get-u-data" id="add-new-vehicle"
                                        data-callback="clickchild"
                                        data-url="https://www.i.starr365.com/app/fleet/index.php?t=88E0eu-_dTDxTkIKnNQH1B4e2YVM3ORM7kKQABT6UpGrXeWPUforC1LZAzbjF5Y5o0Ic1Cdxm2qymzMmimp4bOvjp-xexYk1_bFWtlOwCKFnNgQf6Yw6HgcjvdpcJw5xHb7snXT-xo1nRI3M3DVPkxhl2_emeePTG94-znWVsNCWl6CcTA-ubcgmtxPJBrOdNLirBXJ35bcPnuVJXmjE8D-bjNtzAM4bkc_OHkUgIiA&amp;hidetop=1">
                                        Add Fleet</span></li>
                                <li class="pay_frame_info" data-section="customer"><i class="fa fa-user-circle-o"
                                        aria-hidden="true"></i><span class="get-u-data" id="add-new-customer"
                                        data-callback="clickchild"
                                        data-url="https://www.i.starr365.com/app/m/customer.php?t=88E0eu-_dTDxTkIKnNQH1B4e2YVM3ORM7kKQABT6UpGrXeWPUforC1LZAzbjF5Y5o0Ic1Cdxm2qymzMmimp4bOvjp-xexYk1_bFWtlOwCKFnNgQf6Yw6HgcjvdpcJw5xHb7snXT-xo1nRI3M3DVPkxhl2_emeePTG94-znWVsNCWl6CcTA-ubcgmtxPJBrOdNLirBXJ35bcPnuVJXmjE8D-bjNtzAM4bkc_OHkUgIiA">Add
                                        Customer</span></li>

                                <li class="pay_frame_info" data-section="setting"><i class="fa fa-cog"
                                        aria-hidden="true"></i><span class="get-u-data"
                                        data-url="https://www.i.starr365.com/app/setting.php?t=88E0eu-_dTDxTkIKnNQH1B4e2YVM3ORM7kKQABT6UpGrXeWPUforC1LZAzbjF5Y5o0Ic1Cdxm2qymzMmimp4bOvjp-xexYk1_bFWtlOwCKFnNgQf6Yw6HgcjvdpcJw5xHb7snXT-xo1nRI3M3DVPkxhl2_emeePTG94-znWVsNCWl6CcTA-ubcgmtxPJBrOdNLirBXJ35bcPnuVJXmjE8D-bjNtzAM4bkc_OHkUgIiA">Setting</span>
                                </li>
                                <li class="pay_frame_info" data-section="partner"><i class="fa fa-handshake-o"
                                        aria-hidden="true"></i><span class="get-u-data"
                                        data-url="https://www.i.starr365.com/app/supplier/?t=88E0eu-_dTDxTkIKnNQH1B4e2YVM3ORM7kKQABT6UpGrXeWPUforC1LZAzbjF5Y5o0Ic1Cdxm2qymzMmimp4bOvjp-xexYk1_bFWtlOwCKFnNgQf6Yw6HgcjvdpcJw5xHb7snXT-xo1nRI3M3DVPkxhl2_emeePTG94-znWVsNCWl6CcTA-ubcgmtxPJBrOdNLirBXJ35bcPnuVJXmjE8D-bjNtzAM4bkc_OHkUgIiA">Partner</span>
                                </li>
                                <li><i class="fa fa-question-circle" aria-hidden="true"></i><span>Inquiries</span></li>
                                <li class="pay_frame_info" data-section="claim"><i class="fa fa-info-circle"
                                        aria-hidden="true"></i><span class="get-u-data"
                                        data-url="https://www.i.starr365.com/app/m/admin_claim.php?t=88E0eu-_dTDxTkIKnNQH1B4e2YVM3ORM7kKQABT6UpGrXeWPUforC1LZAzbjF5Y5o0Ic1Cdxm2qymzMmimp4bOvjp-xexYk1_bFWtlOwCKFnNgQf6Yw6HgcjvdpcJw5xHb7snXT-xo1nRI3M3DVPkxhl2_emeePTG94-znWVsNCWl6CcTA-ubcgmtxPJBrOdNLirBXJ35bcPnuVJXmjE8D-bjNtzAM4bkc_OHkUgIiA">Claim</span>
                                </li>
                                <li class="pay_frame_info" data-section="rentaaa"><i class="fa fa-question-circle"
                                        aria-hidden="true"></i><span class="get-u-data"
                                        data-url="https://www.i.starr365.com/diary/kiosk/?t=NhIgmFn2M07szcmhbgNX63KoNgUn8P6xO8NoIxnBcY5y-uE2YaEoU1hsD7lJQaeX_owJ2RmTeJpVZ1ubStu1r_wts02XwkASoL59FsqO7YQzZ-uMsxjFzBgCd2NCYvCGFQY0k6S9qH18HrHIuMM8pg">Rentaaa
                                        Support</span></li>
                            </ul>
                        </div>
                    </div>
                </div>





            </div>
        </div>
    </section>
    <!-- Dashboard Ecommerce ends -->
@endsection

@section('page-js')
    <script src="{{ asset('app-assets') }}/js/scripts/pages/dashboard-ecommerce.min.js"></script>
@endsection

@section('custom-js')

    <script src="{{ asset('app-assets') }}/js/dashboard.js"></script>

    <script type="text/javascript">
        $(document).ready(function() {

            // $(document).ready(function() {
                // Activate tooltip
                $('[data-toggle="tooltip"]').tooltip();
            // });
            var previousWeeks = jQuery.parseJSON(
                '[{"start_date":"2024-02-19","end_date":"2024-02-25"},{"start_date":"2024-02-12","end_date":"2024-02-18"},{"start_date":"2024-02-05","end_date":"2024-02-11"},{"start_date":"2024-01-29","end_date":"2024-02-04"}]'
                );
            setInvoiceDateIds(previousWeeks);
            getDashboardData('booking');

            setTimeout(function() {
                getDashboardData('fleet');
            }, 300);

            setTimeout(function() {
                getDashboardData('customer');
            }, 500);

            setTimeout(function() {
                getDashboardData('direct-debit');
            }, 700);


            setTimeout(function() {
                getDashboardData('invoices', {
                    'dates': previousWeeks
                });
            }, 900);

            setTimeout(function() {
                getDashboardData('Diary');
            }, 1100);

            function setInvoiceDateIds(previousWeeks) {
                var jsonObject = {};
                if (previousWeeks.length > 0) {
                    for (var i = 0; i < previousWeeks.length; i++) {
                        var endDate = previousWeeks[i].end_date ?? '';
                        var key = 'invoice-week-total-' + endDate;
                        var keyone = 'invoice-week-bal-' + endDate;
                        var value = {
                            fun: 'callChildFunction',
                            id: {
                                id: 'main_ids_get',
                                callback: 'get_searched_items'
                            }
                        };
                        jsonObject[key] = value;
                        jsonObject[keyone] = value;
                    }
                    myObject = Object.assign(myObject, jsonObject);
                }

            }


        });


        check_new_message_run = 0;
        setTimeout(function() {
            if (check_new_message_run == 1) {
                Check_new_message();
            }
        }, 5000);


        function Check_new_message() {
            $.ajax({
                type: 'POST',
                url: 'dashboard-ajax.php',
                data: {
                    action: 'Check_new_message'
                },
                success: function(response) {
                    console.log(response);
                    // $("#CompanyNum").text(response);

                }
            });
        }
    </script>
@endsection
