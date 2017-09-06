<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/theme_assets/lib/bootstrap/css/bootstrap.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/theme_assets/lib/font-awesome/css/font-awesome.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/theme_assets/lib/select2/css/select2.min.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/theme_assets/lib/jquery.bxslider/jquery.bxslider.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/theme_assets/lib/owl.carousel/owl.carousel.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/theme_assets/lib/jquery-ui/jquery-ui.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/theme_assets/css/animate.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/theme_assets/css/reset.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/theme_assets/css/style.css')}}" />
    <link rel="stylesheet" type="text/css" href="{{URL::to('public/theme_assets/css/responsive.css')}}" />

    <title>Kute shop</title>
</head>
<body class="category-page">
<!-- HEADER -->
<div id="header" class="header">
    <div id="header" class="header">
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="{{URL::to('public/theme_assets/images/phone.png')}}" />00-62-658-658</a>
                <a href="#"><img alt="email" src="{{URL::to('public/theme_assets/images/email.png')}}" />Contact us today!</a>
            </div>
            <div class="currency ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">USD</a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Dollar</a></li>
                        <li><a href="#">Euro</a></li>
                      </ul>
                </div>
            </div>
            <div class="language ">
                <div class="dropdown">
                      <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#">
                      <img alt="email" src="{{URL::to('public/theme_assets/images/fr.jpg')}}" />French

                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><img alt="email" src="{{URL::to('public/theme_assets/images/en.jpg')}}" />English</a></li>
                        <li><a href="#"><img alt="email" src="{{URL::to('public/theme_assets/images/fr.jpg')}}" />French</a></li>
                    </ul>
                </div>
            </div>

            <div class="support-link">
                <a href="#">Services</a>
                <a href="#">Support</a>
            </div>

            <div id="user-info-top" class="user-info pull-right">
                <div class="dropdown">
                    <a class="current-open" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="#"><span>My Account</span></a>
                    <ul class="dropdown-menu mega_dropdown" role="menu">
                        <li><a href="login.html">Login</a></li>
                        <li><a href="#">Compare</a></li>
                        <li><a href="#">Wishlists</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <!--/.top-header -->
    <!-- MAIN HEADER -->
    <div class="container main-header">
        <div class="row">
            <div class="col-xs-12 col-sm-3 logo">
                <a href="{{ URl::to('/') }}"><img alt="Kute shop - themelot.net" src="{{URL::to('public/theme_assets/images/logo.png')}}" /></a>
            </div>
            <div class="col-xs-7 col-sm-7 header-search-box">
                <form class="form-inline">
                      <div class="form-group form-category">
                        <select class="select-category">
                            <option value="2">All Categories</option>
                            <option value="1">Men</option>
                            <option value="2">Women</option>
                        </select>
                      </div>
                      <div class="form-group input-serach">
                        <input type="text"  placeholder="Keyword here...">
                      </div>
                      <button type="submit" class="pull-right btn-search"></button>
                </form>
            </div>
<?php $cart_contents = Cart::content();?>
  <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
                <a class="cart-link" href="{{URL::to('/show-cart')}}">
                    <span class="title">Shopping cart</span>
                    <span class="total">{{ $cart_contents->count() }} -- BDT {{ Cart::total() }}</span>
                    <span class="notify notify-left">{{ $cart_contents->count() }}</span>
                </a>
                <div class="cart-block">
                    <div class="cart-block-content">
                        <h5 class="cart-title"> {{$cart_contents->count() }} Items in my cart</h5>
                        <div class="cart-block-list">
                            <ul>
                                @foreach($cart_contents as $v_content)
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="{{  asset($v_content->options->image) }}" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">{{ $v_content->name }}</p>
                                        <p class="p-rice">BDT {{ $v_content->price }}</p>
                                    </div>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                        <div class="toal-cart">
                            <span>Total</span>
                            <span class="toal-price pull-right">BDT {{ Cart::total() }}</span>
                        </div>
                        <div class="cart-buttons">
                            <a href="{{URL::to('/checkout')}}" class="btn-check-out">Checkout</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END MANIN HEADER -->
    <div id="nav-top-menu" class="nav-top-menu">
        <div class="container">
            <div class="row">
                <div class="col-sm-3" id="box-vertical-megamenus">
                    <div class="box-vertical-megamenus">
                        <h4 class="title">
                            <span class="title-menu">Categories</span>
                            <span class="btn-open-mobile pull-right home-page"><i class="fa fa-bars"></i></span>
                        </h4>


                    <div class="vertical-menu-content is-home">
                    @foreach($all_cat as $v_cat)
                          @if($v_cat->parent_id == 0)
                          <ul class="vertical-menu-list">

<?php
$sub_cat = DB::table('category')
	->where('parent_id', $v_cat->category_id)
	->get();

?>
                            <li>
                                <a href="{{URL::to('/category/'.$v_cat->category_id)}}" class="parent"> {{ $v_cat->category_name}}</a>
                               <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            <div class="mega-group col-sm-4">
                                              <ul class="group-link-default" >
                                                @foreach($sub_cat as $v_sub_cat)
                                                <li>
                                                        <a href="{{URL::to('/category/'.$v_sub_cat->category_id)}}"> {{ $v_sub_cat->category_name }}</a>
                                                </li>
                                                @endforeach
                                              </ul>
                                            </div>
                                        </div>
                                </div>
                              </li>
                          </ul>

                          @endif
                    @endforeach
                        <div class="all-category"><span class="open-cate">All Categories</span></div>
                    </div>
                </div>
                </div>

                <div id="main-menu" class="col-sm-9 main-menu">
                    <nav class="navbar navbar-default">
                        <div class="container-fluid">
                            <div class="navbar-header">
                                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
                                    <i class="fa fa-bars"></i>
                                </button>
                                <a class="navbar-brand" href="#">MENU</a>
                            </div>
                            <div id="navbar" class="navbar-collapse collapse">
                                <ul class="nav navbar-nav">

                                    <li class="active"><a href="{{URL::to('/')}}">Home</a></li>
                                    @foreach($all_cat as $v_cat)
                                      @if($v_cat->parent_id == 0)


                                        <li>
                                          <a href=" {{URL::to('/category/'.$v_cat->category_id)}} " class="dropdown-toggle" data-toggle="dropdown">{{ $v_cat->category_name }}</a>
                                          <ul class="dropdown-menu mega_dropdown" role="menu" style="width: 300px;">
                                              <li class="block-container col-sm-3">
                                                  <ul class="block">
<?php
$sub_cat = DB::table('category')
	->where('parent_id', $v_cat->category_id)
	->get();

?>
                                                      @foreach($sub_cat as $v_sub_cat)
                                                      <li class="link_container"><a href="{{URL::to('/category/'.$v_sub_cat->category_id)}}">{{ $v_sub_cat->category_name}}</a>
                                                      </li>
                                                      @endforeach
                                                  </ul>
                                              </li>
                                            </ul>
                                          </li>
                                      @endif
                                   @endforeach

                                </ul>
                            </div><!--/.nav-collapse -->
                        </div>
                    </nav>
                </div>
            </div>
            <!-- userinfo on top-->
            <div id="form-search-opntop">
            </div>
            <!-- userinfo on top-->
            <div id="user-info-opntop">
            </div>
            <!-- CART ICON ON MMENU -->
            <div id="shopping-cart-box-ontop">
                <i class="fa fa-shopping-cart"></i>
                <div class="shopping-cart-box-ontop-content"></div>
            </div>
        </div>
    </div>
</div>
<!-- end header -->
<?php
$contents = Cart::content();

?>



<!-- page wapper-->
<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">Checkout</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- page heading-->
        <h2 class="page-heading no-line">
            <span class="page-heading-title2">Checkout</span>
        </h2>

<div class="page-content checkout-page">
            <h3 class="checkout-sep">1. Checkout Method</h3>
            <div class="box-border">
                <div class="row">

                    <div class="col-sm-6">
                        <h4>Login</h4>
                        <p>Already registered? Please log in below:</p>
                        <label>Email address</label>
                        <input type="text" class="form-control input">
                        <label>Password</label>
                        <input type="password" class="form-control input">
                        <p><a href="#">Forgot your password?</a></p>
                        <button class="button">Login</button>
                    </div>

                </div>
            </div>
            <h3 class="checkout-sep">2. Billing Infomations</h3>
            <div class="box-border">
                <form action="{{URL::to('/user-login-check')}}" method="POST">
                        {{ csrf_field() }}
                    <ul>
                        <li class="row">
                            <div class="col-sm-6">
                                <label for="first_name" class="required">First Name</label>
                                <input type="text" class="input form-control" name="first_name" id="first_name" required="1">
                            </div><!--/ [col] -->
                            <div class="col-sm-6">
                                <label for="last_name" class="required">Last Name</label>
                                <input type="text" name="last_name" class="input form-control" id="last_name" required="1">
                            </div><!--/ [col] -->
                        </li><!--/ .row -->
                        <li class="row">
                            <div class="col-sm-6">
                                <label for="email_address" class="required">Email Address</label>
                                <input type="text" class="input form-control" name="email_address" id="email_address" required="1">
                            </div><!--/ [col] -->
                            <div class="col-sm-6">
                                <label for="company_name">Company Name</label>
                                <input type="text" name="company_name" class="input form-control" id="company_name">
                            </div><!--/ [col] -->

                        </li><!--/ .row -->
                        <li class="row">
                            <div class="col-sm-6">
                                <label for="password" class="required">Password</label>
                                <input class="input form-control" type="password" name="password" id="password" required="1">
                            </div><!--/ [col] -->

                            <div class="col-sm-6">
                                <label for="confirm" class="required">Confirm Password</label>
                                <input class="input form-control" type="password" name="" id="confirm" required="1">
                            </div><!--/ [col] -->
                        </li><!--/ .row -->
                        <li class="row">
                            <div class="col-sm-6">
                                <label for="telephone" class="required">Mobile No.</label>
                                <input class="input form-control" type="text" name="mobile_number" id="telephone"  required="1">
                            </div><!--/ [col] -->
                            <div class="col-xs-6">

                                <label for="address" class="required">Address</label>
                                <input type="text" class="input form-control" name="address" id="address" required="1">

                            </div><!--/ [col] -->

                        </li><!-- / .row -->

                        <li class="row">

                            <div class="col-sm-6">

                                <label for="city" class="required">City</label>
                                <input class="input form-control" type="text" name="city" id="city" required="1">

                            </div><!--/ [col] -->
                             <div class="col-sm-6">

                                <label for="postal_code" class="required">Zip/Postal Code</label>
                                <input class="input form-control" type="text" name="zip_code" id="postal_code"  >
                            </div><!--/ [col] -->

                        </li><!--/ .row -->
                        <button class="button pull-right">Continue</button>
                    </ul>
                </form>
            </div>

            <h3 class="checkout-sep">3. Shipping Method</h3>
            <div class="box-border">
                <ul class="shipping_method">
                    <li>
                        <p class="subcaption bold">Free Shipping</p>
                        <label for="radio_button_3"><input type="radio" checked name="radio_3" id="radio_button_3">Free $0</label>
                    </li>

                    <li>
                        <p class="subcaption bold">Free Shipping</p>
                        <label for="radio_button_4"><input type="radio" name="radio_3" id="radio_button_4"> Standard Shipping $5.00</label>
                    </li>
                </ul>
                <button class="button">Continue</button>
            </div>
            <h3 class="checkout-sep">4. Payment Information</h3>
            <div class="box-border">
                <ul>
                    <li>
                        <label for="radio_button_5"><input type="radio" checked name="radio_4" id="radio_button_5"> Check / Money order</label>
                    </li>

                    <li>

                        <label for="radio_button_6"><input type="radio" name="radio_4" id="radio_button_6"> Credit card (saved)</label>
                    </li>

                </ul>
                <button class="button">Continue</button>
            </div>
            <h3 class="checkout-sep">5. Order Review</h3>
            <div class="box-border">
                <table class="table table-bordered table-responsive cart_summary">
                    <thead>
                        <tr>
                            <th class="cart_product">Product</th>
                            <th>Description</th>
                            <th>Avail.</th>
                            <th>Unit price</th>
                            <th>Qty</th>
                            <th>Total</th>
                            <th  class="action"><i class="fa fa-trash-o"></i></th>
                        </tr>
                    </thead>

                    <tbody>
                    @foreach($contents as $v_content)
                        <tr>
                            <td class="cart_product">
                                <a href="#"><img src="assets/data/product-100x122.jpg" alt="Product"></a>
                            </td>
                            <td class="cart_description">
                                <p class="product-name"><a href="#">{{ $v_content->name }} </a></p>
                                <!-- <small class="cart_ref">SKU : #123654999</small><br>
                                <small><a href="#">Color : Beige</a></small><br>
                                <small><a href="#">Size : S</a></small> -->
                            </td>
                            <td class="cart_avail"><span class="label label-success">In stock</span></td>
                            <td class="price"><span> BDT {{ $v_content->price }}</span></td>
                            <td class="qty">
                                <form action="{{ URL::to('/update-cart')}}" method="POST">
                                    {{ csrf_field()}}
                                    <input class="form-control input-sm" name="qty" type="number" value="{{ $v_content->qty }}">
                                    <input class="form-control input-sm" name="rowid" type="hidden" value="{{ $v_content->rowId }}">
                                    <button type="submit">
                                        <div class="button-group">
                                        <br>
                                            <span class="btn btn-success" >Update</span>
                                            <!-- <a class="btn-add-cart" href="#">Add to cart</a> -->
                                        </div>
                                    </button>
                                </form>
                            </td>
                            <td class="price">
                                <span>BDT {{ $v_content->price * $v_content->qty  }}</span>
                            </td>
                            <td class="action">
                                <a href="{{URL::to('/delete-to-cart/'.$v_content->rowId)}}">Delete item</a>
                            </td>
                        </tr>

                    </tbody>
                    <tfoot>
                        <tr>
                            <td colspan="2" rowspan="2"></td>
                            <td colspan="3">Total products (in bdt) </td>
                            <td colspan="2">BDT {{ $v_content->price * $v_content->qty  }}</td>
                        </tr>
                        <tr>
                            <td colspan="3"><strong>Total</strong></td>
                            <td colspan="2"><strong>BDT  &nbsp;{{ Cart::total() }}</strong></td>
                        </tr>
                    </tfoot>
                    @endforeach
                </table>

                <button class="button pull-right">Place Order</button>

            </div>
        </div>
    </div>
</div>
<!-- ./page wapper-->
<!-- Footer -->
<footer id="footer">
     <div class="container">
            <!-- introduce-box -->
            <div id="introduce-box" class="row">
                <div class="col-md-3">
                    <div id="address-box">
                        <a href="#"><img src="{{URL::to('public/theme_assets/data/introduce-logo.png')}}" alt="" /></a>
                        <div id="address-list">
                            <div class="tit-name">Address:</div>
                            <div class="tit-contain">Example Street 68, Mahattan, New York, USA.</div>
                            <div class="tit-name">Phone:</div>
                            <div class="tit-contain">+00 123 456 789</div>
                            <div class="tit-name">Email:</div>
                            <div class="tit-contain">support@business.com</div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="introduce-title">Company</div>
                            <ul id="introduce-company"  class="introduce-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <div class="introduce-title">My Account</div>
                            <ul id = "introduce-Account" class="introduce-list">
                                <li><a href="#">My Order</a></li>
                                <li><a href="#">My Wishlist</a></li>
                                <li><a href="#">My Credit Slip</a></li>
                                <li><a href="#">My Addresses</a></li>
                                <li><a href="#">My Personal In</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <div class="introduce-title">Support</div>
                            <ul id = "introduce-support"  class="introduce-list">
                                <li><a href="#">About Us</a></li>
                                <li><a href="#">Testimonials</a></li>
                                <li><a href="#">Affiliate Program</a></li>
                                <li><a href="#">Terms & Conditions</a></li>
                                <li><a href="#">Contact Us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div id="contact-box">
                        <div class="introduce-title">Newsletter</div>
                        <div class="input-group" id="mail-box">
                          <input type="text" placeholder="Your Email Address"/>
                          <span class="input-group-btn">
                            <button class="btn btn-default" type="button">OK</button>
                          </span>
                        </div><!-- /input-group -->
                        <div class="introduce-title">Let's Socialize</div>
                        <div class="social-link">
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-pinterest-p"></i></a>
                            <a href="#"><i class="fa fa-vk"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-google-plus"></i></a>
                        </div>
                    </div>

                </div>
            </div><!-- /#introduce-box -->

            <!-- #trademark-box -->
            <div id="trademark-box" class="row">
                <div class="col-sm-12">
                    <ul id="trademark-list">
                        <li id="payment-methods">Accepted Payment Methods</li>
                        <li>
                            <a href="#"><img src="{{URL::to('public/theme_assets/data/trademark-ups.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::to('public/theme_assets/data/trademark-qiwi.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::to('public/theme_assets/data/trademark-wu.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::to('public/theme_assets/data/trademark-cn.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::to('public/theme_assets/data/trademark-visa.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::to('public/theme_assets/data/trademark-mc.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::to('public/theme_assets/data/trademark-ems.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::to('public/theme_assets/data/trademark-dhl.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::to('public/theme_assets/data/trademark-fe.jpg')}}"  alt="ups"/></a>
                        </li>
                        <li>
                            <a href="#"><img src="{{URL::to('public/theme_assets/data/trademark-wm.jpg')}}"  alt="ups"/></a>
                        </li>
                    </ul>
                </div>
            </div> <!-- /#trademark-box -->
            <div id="footer-menu-box">

                <p class="text-center"> &copy; <?php echo date('Y') ?> | All Rights Reserved</p>
            </div><!-- /#footer-menu-box -->

        </div>
</footer>

<a href="#" class="scroll_top" title="Scroll to Top" style="display: inline;">Scroll</a>
<!-- Script-->
<script type="text/javascript" src="{{URL::to('public/theme_assets/lib/jquery/jquery-1.11.2.min.js')}}"></script>
<script type="text/javascript" src="{{URL::to('public/theme_assets/lib/bootstrap/js/bootstrap.min.js')}}"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.3/js/select2.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bxslider/4.2.12/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.countdown/2.2.0/jquery.countdown.min.js"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery.actual/1.0.19/jquery.actual.min.js"></script>
<script type="text/javascript" src="{{URL::to('public/theme_assets/js/theme-script.js')}}"></script>

</body>
</html>