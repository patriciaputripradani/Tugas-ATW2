<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Dashboard | Admin</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
        ============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="{{('public')}}/assets/img/favicon.ico">
    <!-- Google Fonts
        ============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/bootstrap.min.css">
    <!-- Bootstrap CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/font-awesome.min.css">
    <!-- nalika Icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/nalika-icon.css">
    <!-- owl.carousel CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/owl.carousel.css">
    <link rel="stylesheet" href="{{('public')}}/assets/css/owl.theme.css">
    <link rel="stylesheet" href="{{('public')}}/assets/css/owl.transitions.css">
    <!-- animate CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/animate.css">
    <!-- normalize CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/normalize.css">
    <!-- meanmenu icon CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/meanmenu.min.css">
    <!-- main CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/main.css">
    <!-- morrisjs CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/morrisjs/morris.css">
    <!-- mCustomScrollbar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/scrollbar/jquery.mCustomScrollbar.min.css">
    <!-- metisMenu CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/metisMenu/metisMenu.min.css">
    <link rel="stylesheet" href="{{('public')}}/assets/css/metisMenu/metisMenu-vertical.css">
    <!-- calendar CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/calendar/fullcalendar.min.css">
    <link rel="stylesheet" href="{{('public')}}/assets/css/calendar/fullcalendar.print.min.css">
    <!-- style CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/style.css">
    <!-- responsive CSS
        ============================================ -->
    <link rel="stylesheet" href="{{('public')}}/assets/css/responsive.css">
    <!-- modernizr JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/vendor/modernizr-2.8.3.min.js"></script>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

 @include('template/section/sidebar')
    <!-- Start Welcome area -->
    <div class="all-content-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="logo-pro">
                        <a href="index.html"><img class="main-logo" src="{{('public')}}/assets/img/logo/logo.png" alt="" /></a>
                    </div>
                </div>
            </div>
        </div>
  @include('template/section/header')
            <!-- Mobile Menu start -->
 <div class="breadcome-area">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                            <div class="breadcome-list">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-wp">
                                            <div class="breadcomb-icon">
                                                <i class="icon nalika-home"></i>
                                            </div>
                                            <div class="breadcomb-ctn">
                                                <h2>Product Cart</h2>
                                                <p>Welcome to Nalika <span class="bread-ntd">Admin Template</span></p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                                        <div class="breadcomb-report">
                                            <button data-toggle="tooltip" data-placement="left" title="Download Report" class="btn"><i class="icon nalika-download"></i></button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="product-cart-area mg-b-30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="product-cart-inner">
                            <div id="example-basic">
                                <h3>Shopping Cart</h3>
                                <section>
                                    <h3 class="product-cart-dn">Shopping</h3>
                                    <div class="product-list-cart">
                                        <div class="product-status-wrap border-pdt-ct">
                                            <table>
                                                <tr>
                                                    <th>Image</th>
                                                    <th>Product Title</th>
                                                    <th>Quality</th>
                                                    <th>Price</th>
                                                    <th>Action</th>
                                                </tr>
                                                <tr>
                                                    <td><img src="img/product/1.jpg" alt="" /></td>
                                                    <td>
                                                        <h3>Product Title 1</h3>
                                                        <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum.</p>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="2">
                                                    </td>
                                                    <td>$18</td>
                                                    <td>
                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="img/product/2.jpg" alt="" /></td>
                                                    <td>
                                                        <h3>Product Title 2</h3>
                                                        <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum.</p>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="1">
                                                    </td>
                                                    <td>$17</td>
                                                    <td>
                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="img/product/3.jpg" alt="" /></td>
                                                    <td>
                                                        <h3>Product Title 3</h3>
                                                        <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum.</p>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="3">
                                                    </td>
                                                    <td>$15</td>
                                                    <td>
                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="img/product/2.jpg" alt="" /></td>
                                                    <td>
                                                        <h3>Product Title 4</h3>
                                                        <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum.</p>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="2">
                                                    </td>
                                                    <td>$12</td>
                                                    <td>
                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><img src="img/product/1.jpg" alt="" /></td>
                                                    <td>
                                                        <h3>Product Title 5</h3>
                                                        <p>Lorem ipsum dolor sit consec te imperdiet iaculis ipsum.</p>
                                                    </td>
                                                    <td>
                                                        <input type="text" class="form-control" value="1">
                                                    </td>
                                                    <td>$18</td>
                                                    <td>
                                                        <button data-toggle="tooltip" title="Edit" class="pd-setting-ed"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button>
                                                        <button data-toggle="tooltip" title="Trash" class="pd-setting-ed"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
                                                    </td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </section>
                                <h3>Delivery Details</h3>
                                <section>
                                    <h3 class="product-cart-dn">Shopping</h3>
                                    <div class="product-delivary">
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">First name *</label>
                                            <input id="name-2" name="name" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Last name *</label>
                                            <input id="surname-2" name="surname" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="card-number" class="form-label">Select Country</label>
                                            <select class="form-control required">
                                                    <option>Select Country</option>
                                                    <option>Gujarat</option>
                                                    <option>Kerala</option>
                                                    <option>Manipur</option>
                                                    <option>Tripura</option>
                                                    <option>Sikkim</option>
                                                </select>
                                        </div>
                                        <div class="form-group">
                                            <label for="address" class="form-label">Address *</label>
                                            <input id="address" name="address" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="city" class="form-label">City *</label>
                                            <input id="city" name="city" type="text" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label for="phone-2" class="form-label">Phone #</label>
                                            <input id="phone-2" name="phone" type="number" class="form-control phone">
                                        </div>
                                    </div>
                                </section>
                                <h3>Payment Details</h3>
                                <section>
                                    <h3 class="product-cart-dn">Shopping</h3>
                                    <div class="payment-details">
                                        <select id="hello-single" class="form-control">
                                                <option value="">---- Select card ----</option>
                                                <option value="married">Visa</option>
                                                <option value="unmarried">Master</option>
                                                <option value="married">American Express</option>
                                                <option value="unmarried">Discover</option>
                                            </select>
                                        <div class="form-group mg-t-15">
                                            <label for="card-number" class="form-label">Card number</label>
                                            <input id="card-number" class="form-control" type="text" name="card_number">
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                <label for="expdate-month" class="form-label">Expiration date</label>
                                                <div class="row gutter-xs">
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="input-group">
                                                            <select id="expdate-month" class="form-control" name="expdate_month">
                                                                    <option value="" selected="selected">Month</option>
                                                                    <option value="1">01</option>
                                                                    <option value="2">02</option>
                                                                    <option value="3">03</option>
                                                                    <option value="4">04</option>
                                                                    <option value="5">05</option>
                                                                    <option value="6">06</option>
                                                                    <option value="7">07</option>
                                                                    <option value="8">08</option>
                                                                    <option value="9">09</option>
                                                                    <option value="10">10</option>
                                                                    <option value="11">11</option>
                                                                    <option value="12">12</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
                                                        <div class="form-group">
                                                            <select id="expdate-year" class="form-control" name="expdate_year">
                                                                    <option value="" selected="selected">Year</option>
                                                                    <option value="2016">2016</option>
                                                                    <option value="2017">2017</option>
                                                                    <option value="2018">2018</option>
                                                                    <option value="2019">2019</option>
                                                                    <option value="2020">2020</option>
                                                                    <option value="2021">2021</option>
                                                                    <option value="2022">2022</option>
                                                                    <option value="2023">2023</option>
                                                                    <option value="2024">2024</option>
                                                                    <option value="2025">2025</option>
                                                                    <option value="2026">2026</option>
                                                                    <option value="2027">2027</option>
                                                                    <option value="2028">2028</option>
                                                                    <option value="2029">2029</option>
                                                                    <option value="2030">2030</option>
                                                                    <option value="2031">2031</option>
                                                                    <option value="2032">2032</option>
                                                                    <option value="2033">2033</option>
                                                                    <option value="2034">2034</option>
                                                                    <option value="2035">2035</option>
                                                                    <option value="2036">2036</option>
                                                                </select>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-5 offset-md-1">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="form-group">
                                                            <label for="cvv2-number" class="form-label">Card Security Code</label>
                                                            <input id="cvv2-number" class="form-control" type="text" name="cvv2_number">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="promotional-code" class="control-label">Promotional code</label>
                                            <input id="promotional-code" class="form-control" type="text" name="promotional_code">
                                        </div>
                                        <button type="submit" class="btn btn-primary btn-block">Submit</button>
                                    </div>
                                </section>
                                <h3>Confirmation</h3>
                                <section>
                                    <div class="product-confarmation">
                                        <h2>Congratulations! Your Order is accepted.</h2>
                                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled
                                            it to make a type specimen book.</p>
                                        <button class="btn btn-primary m-y">Track Order</button>
                                    </div>
                                </section>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            @include('template/section/footer')
    </div>

    <!-- jquery
        ============================================ -->
    <script src="{{('public')}}/assets/js/vendor/jquery-1.12.4.min.js"></script>
    <!-- bootstrap JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/bootstrap.min.js"></script>
    <!-- wow JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/wow.min.js"></script>
    <!-- price-slider JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/jquery.meanmenu.js"></script>
    <!-- owl.carousel JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/owl.carousel.min.js"></script>
    <!-- sticky JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/jquery.sticky.js"></script>
    <!-- scrollUp JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/jquery.scrollUp.min.js"></script>
    <!-- mCustomScrollbar JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <script src="{{('public')}}/assets/js/scrollbar/mCustomScrollbar-active.js"></script>
    <!-- metisMenu JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/metisMenu/metisMenu.min.js"></script>
    <script src="{{('public')}}/assets/js/metisMenu/metisMenu-active.js"></script>
    <!-- sparkline JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/sparkline/jquery.sparkline.min.js"></script>
    <script src="{{('public')}}/assets/js/sparkline/jquery.charts-sparkline.js"></script>
    <!-- calendar JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/calendar/moment.min.js"></script>
    <script src="{{('public')}}/assets/js/calendar/fullcalendar.min.js"></script>
    <script src="{{('public')}}/assets/js/calendar/fullcalendar-active.js"></script>
    <!-- float JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/flot/jquery.flot.js"></script>
    <script src="{{('public')}}/assets/js/flot/jquery.flot.resize.js"></script>
    <script src="{{('public')}}/assets/js/flot/curvedLines.js"></script>
    <script src="{{('public')}}/assets/js/flot/flot-active.js"></script>
    <!-- plugins JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/plugins.js"></script>
    <!-- main JS
        ============================================ -->
    <script src="{{('public')}}/assets/js/main.js"></script>
</body>

</html>