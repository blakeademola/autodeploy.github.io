<!DOCTYPE html>
<!--
* CoreUI - Free Bootstrap Admin Template
* @version v3.2.0
* @link https://coreui.io
* Copyright (c) 2020 creativeLabs Łukasz Holeczek
* Licensed under MIT (https://coreui.io/license)
-->

<html lang="en">
<head>
    <base href="./">
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="description" content="CoreUI - Open Source Bootstrap Admin Template">
    <meta name="author" content="Łukasz Holeczek">
    <meta name="keyword" content="Bootstrap,Admin,Template,Open,Source,jQuery,CSS,HTML,RWD,Dashboard">
    <title>CoreUI Free Bootstrap Admin Template</title>
    <link rel="apple-touch-icon" sizes="57x57" href="assets/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="assets/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="assets/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="assets/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="assets/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="assets/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="assets/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="assets/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/favicon/apple-icon-180x180.png">
    <link rel="icon" type="image/png" sizes="192x192" href="assets/favicon/android-icon-192x192.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="96x96" href="assets/favicon/favicon-96x96.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/favicon/favicon-16x16.png">
    <link rel="manifest" href="assets/favicon/manifest.json">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="assets/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">
    <!-- Main styles for this application-->
    <link rel="stylesheet" href="https://unpkg.com/@coreui/coreui/dist/css/coreui.min.css">
    <link href="//netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css" rel="stylesheet">
    <!-- Global site tag (gtag.js) - Google Analytics-->
    <script async="" src="https://www.googletagmanager.com/gtag/js?id=UA-118965717-3"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }

        gtag('js', new Date());
        // Shared ID
        gtag('config', 'UA-118965717-3');
        // Bootstrap ID
        gtag('config', 'UA-118965717-5');
    </script>
    <link href="node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css" rel="stylesheet">
</head>
<body class="c-app">
<div class="c-sidebar c-sidebar-dark c-sidebar-fixed c-sidebar-lg-show" id="sidebar">
    <div class="c-sidebar-brand d-lg-down-none">
        <svg class="c-sidebar-brand-full" width="118" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#full"></use>
        </svg>
        <svg class="c-sidebar-brand-minimized" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="assets/brand/coreui.svg#signet"></use>
        </svg>
    </div>
    <ul class="c-sidebar-nav">
        <li class="c-sidebar-nav-item"><a class="c-sidebar-nav-link" href="index.php">
                <svg class="c-sidebar-nav-icon">
                    <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-speedometer"></use>
                </svg>
                Dashboard<span class="badge badge-info">NEW</span></a></li>

    </ul>
    <button class="c-sidebar-minimizer c-class-toggler" type="button" data-target="_parent"
            data-class="c-sidebar-minimized"></button>
</div>
<div class="c-wrapper c-fixed-components">
    <header class="c-header c-header-light c-header-fixed c-header-with-subheader">
        <button class="c-header-toggler c-class-toggler d-lg-none mfe-auto" type="button" data-target="#sidebar"
                data-class="c-sidebar-show">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
            </svg>
        </button>
        <a class="c-header-brand d-lg-none" href="#">
            <svg width="118" height="46" alt="CoreUI Logo">
                <use xlink:href="assets/brand/coreui.svg#full"></use>
            </svg>
        </a>
        <button class="c-header-toggler c-class-toggler mfs-3 d-md-down-none" type="button" data-target="#sidebar"
                data-class="c-sidebar-lg-show" responsive="true">
            <svg class="c-icon c-icon-lg">
                <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-menu"></use>
            </svg>
        </button>
        <ul class="c-header-nav d-md-down-none">
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Dashboard</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Users</a></li>
            <li class="c-header-nav-item px-3"><a class="c-header-nav-link" href="#">Settings</a></li>
        </ul>
        <ul class="c-header-nav ml-auto mr-4">
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                    <svg class="c-icon">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                    </svg>
                </a></li>
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                    <svg class="c-icon">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-list-rich"></use>
                    </svg>
                </a></li>
            <li class="c-header-nav-item d-md-down-none mx-2"><a class="c-header-nav-link" href="#">
                    <svg class="c-icon">
                        <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                    </svg>
                </a></li>
            <li class="c-header-nav-item dropdown"><a class="c-header-nav-link" data-toggle="dropdown" href="#"
                                                      role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="c-avatar"><img class="c-avatar-img" src="assets/img/avatars/6.jpg" alt="user@email.com">
                    </div>
                </a>
                <div class="dropdown-menu dropdown-menu-right pt-0">
                    <div class="dropdown-header bg-light py-2"><strong>Account</strong></div>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-bell"></use>
                        </svg>
                        Updates<span class="badge badge-info ml-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-envelope-open"></use>
                        </svg>
                        Messages<span class="badge badge-success ml-auto">42</span></a><a class="dropdown-item"
                                                                                          href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-task"></use>
                        </svg>
                        Tasks<span class="badge badge-danger ml-auto">42</span></a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-comment-square"></use>
                        </svg>
                        Comments<span class="badge badge-warning ml-auto">42</span></a>
                    <div class="dropdown-header bg-light py-2"><strong>Settings</strong></div>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-user"></use>
                        </svg>
                        Profile</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-settings"></use>
                        </svg>
                        Settings</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-credit-card"></use>
                        </svg>
                        Payments<span class="badge badge-secondary ml-auto">42</span></a><a class="dropdown-item"
                                                                                            href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-file"></use>
                        </svg>
                        Projects<span class="badge badge-primary ml-auto">42</span></a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-lock-locked"></use>
                        </svg>
                        Lock Account</a><a class="dropdown-item" href="#">
                        <svg class="c-icon mr-2">
                            <use xlink:href="node_modules/@coreui/icons/sprites/free.svg#cil-account-logout"></use>
                        </svg>
                        Logout</a>
                </div>
            </li>
        </ul>
        <div class="c-subheader px-3">
            <!-- Breadcrumb-->
            <ol class="breadcrumb border-0 m-0">
                <li class="breadcrumb-item">Home</li>
                <li class="breadcrumb-item"><a href="#">Admin</a></li>
                <li class="breadcrumb-item active">Dashboard</li>
                <!-- Breadcrumb Menu-->
            </ol>
        </div>
    </header>
    <div class="c-body">
        <main class="c-main">
            <div class="container-fluid">
                <div class="fade-in">

                    {{-- start here--}}
                    <div class="card">
                        <div class="card-header"><strong>ITEMS ORDER LIST</strong></div>
                        <div class="card-body">
                            <table style="width:100%">
                                <tr>
                                    <th>Order No</th>
                                    <th>User</th>
                                    <th>Item</th>
                                    <th>Desc</th>
                                    <th>Qty</th>
                                    <th>Weight</th>
                                    <th> Mode</th>
                                    <th>Dispatch from</th>
                                    <th>Tax</th>
                                    <th>Total</th>
                                    <th>Grand Total</th>
                                    <th>Status</th>
                                </tr>
                                @forelse($item_orders as $order)
                                    <tr>
                                        <td>{{$order->order_no}}</td>
                                        <td>{{$order->user->name}}</td>
                                        <td>{{$order->item->name}}</td>
                                        <td>{{$order->desc}}</td>
                                        <td>{{$order->qty}}</td>
                                        <td>{{$order->weight}}</td>
                                        <td>{{$order->mode->name}}</td>
                                        <td>{{$order->dispatch->name}}</td>
                                        <td>{{$order->tax}}</td>
                                        <td>{{$order->total}}</td>
                                        <td>{{$order->grand_total}}</td>
                                        <td>{{$order->status}}</td>
                                    </tr>
                                @empty
                                    <tr>
                                        No data found
                                    </tr>
                                @endforelse

                            </table>
                        </div>
                    </div>
                    <div class="card">
                        <div class="card-header"><strong>Super Freight</strong> Order Form for: <b>{{$user->name}}</b>
                        </div>
                        <div class="card-body">
                            <form class="form-horizontal" action="" method="post" id="formField"
                                  enctype="multipart/form-data">
                                @if(session('success'))
                                    <div class="alert alert-success alert-dismissible fade show"
                                         role="alert">{{session('success')}}</div>
                                @endif
                                <div class="alert alert-danger alert-dismissible fade show" role="alert"
                                     style="display: none">

                                </div>
                                <div class="alert alert-success" role="alert" style="display: none">
                                    <button class="close" type="button" data-dismiss="alert" aria-label="Close"><span
                                            aria-hidden="true">×</span></button>
                                </div>
                                <div style="border: solid #b8b8b8 1px; padding: 20px; border-radius:7px" id="item_form">

                                    <div class="row">
                                        <div class="form-group col-sm-6">
                                            <label for="item"><b>Item</b></label>
                                            <select class="form-control items" id="items" name="item">
                                                <option value="">please select</option>
                                                @foreach($items as $item)
                                                    <option value="{{$item->name}}">{{$item->name}}</option>
                                                @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="desc"><b>Desc</b></label>
                                            <input class="form-control desc" id="desc" name="desc" type="textarea"
                                                   placeholder="Description here">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-sm-6">
                                            <div class="form-group">
                                                <label for="weight"><b>Item Weight</b></label>
                                                <input class="form-control weight" name="weight" id="weight"
                                                       type="number" min="1"
                                                       placeholder="kg">
                                            </div>
                                        </div>
                                        <div class="form-group col-sm-6">
                                            <label for="qty"><b>Qty</b></label>
                                            <input class="form-control quantity" name="qty" id="quantity"
                                                   type="number" min="1"
                                                   placeholder="number here">
                                        </div>
                                    </div>
                                </div>
                                <p></p>
                                <div id="append_div"
                                     style="display: none; border: solid #b8b8b8 1px; padding: 20px; border-radius:7px"
                                     id="item_form"></div>
                                <p></p>
                                <div class="" style="text-align: right">
                                    <btn class="btn btn-success" id="add_more"><b> + Add More</b></btn>
                                </div>
                                <div class="row">
                                    <div class="form-group col-sm-6">
                                        <label for="country"><b> Dispatch Country</b></label>
                                        <select class="form-control" id="dispatch" name="country">
                                            <option value="">select</option>
                                            @foreach($countries as $country)
                                                <option value="{{$country->name}}">{{$country->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group col-sm-6">
                                        <label for="mode"><b>Mode of Transport</b></label>
                                        <select class="form-control transport_mode" name="mode" id="transport_mode">
                                            <option value="">select</option>
                                            @foreach($transport_modes as $mode)
                                                <option value="{{$mode->name}}">{{$mode->name}}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="" style="text-align: right">
                                    <div class="" id="total"><b>Total:</b>0</div>
                                    <br/>
                                    <div class="" id="tax"><b>Tax:</b>0</div>
                                    <br/>
                                    <div class="" id="grand_total"><b>Grand Total:</b>0</div>
                                </div>
                                <div class="card-footer" style="text-align: right">
                                    <button class="btn btn-sm btn-primary" data-save="false" id="save_form"
                                            type="submit"> Save
                                    </button>


                                </div>
                            </form>

                            @if(isset($item_order))
                                <div id="total_pay"
                                     style="text-align: center; color: darkred; {{isset($item_order) && !is_null($item_order->first()) ? '':'display: none'}}">
                                    <strong> To pay: {{$item_order->first()->grand_total ?? null}}</strong>
                                </div>
                                <form class="form-horizontal" action="{{ route('pay') }}" method="post">
                                    <input type="hidden" name="email" value="{{$user->email}}">
                                    <input type="hidden" name="orderID"
                                           value="{{$item_order->first()->order_no ?? null}}">
                                    <input type="hidden" name="amount" id="paste_total"
                                           value="{{(isset($item_order->first()->grand_total) ? (($item_order->first()->grand_total)*100):0)}}">
                                    {{--                                    <input type="hidden" name="quantity"--}}
                                    {{--                                           value="{{array_sum($item_order->pluck('qty')->toArray()) ?? null}}">--}}
                                    <input type="hidden" name="currency" value="NGN">
                                    <input type="hidden" name="reference"
                                           value="{{ Paystack::genTranxRef() }}">

                                    <input type="hidden" name="_token"
                                           value="{{ csrf_token() }}">

                                    @if(isset($item_order))
                                        <button class="btn btn-sm btn-block btn-primary" id="process_pay"
                                                style="{{isset($item_order) && !is_null($item_order->first()) ? '':'display: none'}}"
                                                type="submit"> Process Payment
                                        </button>
                                    @endif
                                </form>
                            @endif
                        </div>

                    </div>
                    {{-- end here--}}


                </div>
            </div>
        </main>
        <footer class="c-footer">
            <div><a href="https://coreui.io">CoreUI</a> &copy; 2020 creativeLabs.</div>
            <div class="ml-auto">Powered by&nbsp;<a href="https://coreui.io/">CoreUI</a></div>
        </footer>
    </div>
</div>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.bundle.min.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/@coreui/coreui/dist/js/coreui.min.js"></script>
<script>
    $(document).ready(function () {
        let result;
        var mode;
        let qty;
        let weight;
        let dispatch;
        let count = 0;
        let item;
        let countItem = "{{count($items)-1}}";
        $("#add_more").click(function () {
            count++;
            $("#append_div").show();
            var itemName = ($('#items').val());

            $("#item_form").clone().appendTo("#append_div")

                .find("#desc").val("").end()
                .find("#weight").val("").end()
                .find("#quantity").val("").end();


            if (count <= countItem) {
                $("#add_more").hide(); //hide button once all the possible item options are added
            }
        });


        $(document).on('click', '.quantity', function () {
            qty = $(this).val();
            console.log('qty:' + qty)
            calculate();
        });

        $(document).on('change', '.items', function () {
            item = $(this).val();
            console.log('item:' + item)
            calculate();
        });

        $(document).on('click', '.weight', function () {
            weight = $(this).val();
            console.log('weight' + weight)
            calculate();
        });

        $('#transport_mode').change(function (e) {
            if ($(this).val() === 'air') {
                mode = 50000;
                console.log('air:' + mode)
                calculate();
            }
            if ($(this).val() === 'sea') {
                mode = 15000;
                console.log('sea:' + mode)
                calculate();
            }
        });

        $('#dispatch').change(function (e) {
            if ($(this).val() === 'usa') {
                dispatch = 1500;
                console.log('usa:' + dispatch)
            }
            if ($(this).val() === 'uk') {
                dispatch = 800;
                console.log('uk:' + dispatch)
            }
            calculate();
        });


        $('#save_form').click(function (e) {
            e.preventDefault();
            if (confirm('Are You sure?')) {
               $(this).attr("data-save","true");
                calculate();
            }

        });

        function calculate() {
            var url = "{{route('get-total')}}";
            var form = $('#formField').serializeArray();
            var save = $('#save_form').attr("data-save");

            $.ajax({
                type: "POST",
                url: url,
                data: {
                    "_token": "{{ csrf_token() }}",
                    "form": form, "save":save,
                },
                dataType: "json",

                success: function (res) {
                    console.log(res)
                    if (res.status == false) {
                        $('.alert-danger').show().empty().append(res.msg + "<button class=\"close\" type=\"button\" data-dismiss=\"alert\" aria-label=\"Close\"><span aria-hidden=\"true\">×</span></button>")
                    }

                    if (res.status == true) {
                        $('.alert-danger').hide();
                        $('.alert-success').append('saved successfully')
                        $('#total').html('<b>' + 'Total: ' + '</b>' + res.total);
                        $('#tax').html('<b>' + 'Tax: ' + '</b>' + res.tax);
                        $('#grand_total').html('<b>' + 'Grand Total: ' + '</b>' + res.grand_total);
                        $('#total_pay').html('<b>' + 'To Pay: ' + '</b>' + ((res.grand_total))).show();
                        if($('#save_form').attr("data-save")=='true') {
                            $('#process_pay').show();
                        }
                        $('#paste_total').val(((res.grand_total) * 100));
                    }
                },
            });
        }

    });
</script>
</body>
</html>
