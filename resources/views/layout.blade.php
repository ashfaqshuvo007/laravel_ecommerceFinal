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

    <title>Kute shop - themelot.net</title>
</head>
<body class="home">
<!-- TOP BANNER -->
<!--<div id="top-banner" class="top-banner">
    <div class="bg-overlay"></div>
    <div class="container">
        <h1>Special Offer!</h1>
        <h2>Additional 40% OFF For Men & Women Clothings</h2>
        <span>This offer is for online only 7PM to middnight ends in 30th July 2015</span>
        <span class="btn-close"></span>
    </div>
</div>-->
<!-- HEADER -->
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
                <a href="index.html"><img alt="Kute shop - themelot.net" src="{{URL::to('public/theme_assets/images/logo.png')}}" /></a>
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
            <div id="cart-block" class="col-xs-5 col-sm-2 shopping-cart-box">
                <a class="cart-link" href="order.html">
                    <span class="title">Shopping cart</span>
                    <span class="total">2 items - 122.38 €</span>
                    <span class="notify notify-left">2</span>
                </a>
                <div class="cart-block">
                    <div class="cart-block-content">
                        <h5 class="cart-title">2 Items in my cart</h5>
                        <div class="cart-block-list">
                            <ul>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="{{URL::to('public/theme_assets/data/product-100x122.jpg" alt="p10')}}">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="{{URL::to('public/theme_assets/data/product-s5-100x122.jpg')}}" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                        <p>Qty: 1</p>
                                    </div>
                                </li>
                            </ul>
                        </div>
                        <div class="toal-cart">
                            <span>Total</span>
                            <span class="toal-price pull-right">122.38 €</span>
                        </div>
                        <div class="cart-buttons">
                            <a href="order.html" class="btn-check-out">Checkout</a>
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
                    @foreach($all_cat_info as $v_cat)
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
                                    @foreach($all_cat_info as $v_cat)
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
<!-- Home slideder-->
<div id="home-slider">
    <div class="container">
        <div class="row">
            <div class="col-sm-3 slider-left"></div>
            <div class="col-sm-9 header-top-right">
                <div class="homeslider">
                    <div class="content-slide">
                        <ul id="contenhomeslider">

<?php
$featured_product = DB::table('product')
	->where('is_featured', 1)
	->limit(3)
	->get();

?>
                          @foreach($featured_product as $v_feat_pro)
                          <li>
                            <img alt="Funky roots" src="{{ $v_feat_pro->product_image }}" title="Funky roots" />
                          </li>

                          @endforeach
                        </ul>
                    </div>
                </div>
                <div class="header-banner banner-opacity">
                    <a href="#"><img alt="Funky roots" src="{{URL::to('public/theme_assets/data/ads1.jpg')}}" /></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- END Home slideder-->
<!-- servives -->
<div class="container">
    <div class="service ">
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">
                <img alt="services" src="{{URL::to('public/theme_assets/data/s1.png')}}" />
            </div>
            <div class="info">
                <a href="#"><h3>Free Shipping</h3></a>
                <span>On order over $200</span>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">
                <img alt="services" src="{{URL::to('public/theme_assets/data/s2.png')}}" />
            </div>
            <div class="info">
                <a href="#"><h3>30-day return</h3></a>
                <span>Moneyback guarantee</span>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">
                <img alt="services" src="{{URL::to('public/theme_assets/data/s3.png')}}" />
            </div>

            <div class="info" >
                <a href="#"><h3>24/7 support</h3></a>
                <span>Online consultations</span>
            </div>
        </div>
        <div class="col-xs-6 col-sm-3 service-item">
            <div class="icon">
                <img alt="services" src="{{URL::to('public/theme_assets/data/s4.png')}}" />
            </div>
            <div class="info">
                <a href="#"><h3>SAFE SHOPPING</h3></a>
                <span>Safe Shopping Guarantee</span>
            </div>
        </div>
    </div>
</div>
<!-- end services -->

<div class="page-top">
    <div class="container">
        <div class="row">
            <div class="col-xs-12 col-sm-12 page-top-left">
                <div class="popular-tabs">
                      <ul class="nav-tab">
                        <li class="active"><a data-toggle="tab" href="#tab-1">New Products</a></li>
                        <li><a data-toggle="tab" href="#tab-2">ON SALE</a></li>
                        <li><a data-toggle="tab" href="#tab-3">Best Sellers</a></li>
                      </ul>
                      <div class="tab-container">
                            <div id="tab-1" class="tab-panel active">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3'>
<?php

$new_product = DB::table('product')
	->orderBy('product_id', 'desc')
	->limit(3)
	->get();

?>


                                    @foreach($new_product as $v_new)

                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                                <img class="img-responsive" alt="product" src="{{ $v_new->product_image }}" />
                                            </a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                            <div class="group-price">
                                                <span class="product-new">NEW</span>
                                                <!-- <span class="product-sale">Sale</span> -->
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">{{ $v_new->product_name}}</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">BDT {{ $v_new->new_price}}</span>
                                                <span class="price old-price">BDT {{ $v_new->old_price}}</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>
                                    @endforeach
                                </ul>
                            </div>
                            <div id="tab-2" class="tab-panel">
                                <ul class="product-list owl-carousel"  data-dots="false" data-loop="true" data-nav = "true" data-margin = "30"  data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                            <img class="img-responsive" alt="product" src="{{URL::to('public/theme_assets/data/p48.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                            <div id="tab-3" class="tab-panel">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":3'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#"><img class="img-responsive" alt="product" src="{{URL::to('public/theme_assets/data/p60.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Maecenas consequat mauris</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>
                                        </div>
                                    </li>

                                </ul>
                            </div>
                      </div>
                </div>
            </div>

        </div>
    </div>
</div>
<!---->
<div class="content-page">
    <div class="container">
        <!-- featured category fashion -->
        @foreach($all_cat_info as $v_cat)
          @if($v_cat->parent_id == 0)
        <div class="category-featured">
            <nav class="navbar nav-menu nav-menu-red show-brand">
              <div class="container">
                <!-- Brand and toggle get grouped for better mobile display -->
                  <div class="navbar-brand"><a href="#"><img alt="fashion" src="{{URL::to('public/theme_assets/data/fashion.png')}}" />{{$v_cat->category_name}}</a></div>
                  <span class="toggle-menu"></span>
            <?php $sub_cat = DB::table('category')->where('parent_id', $v_cat->category_id)->get()?>

                <!-- Collect the nav links, forms, and other content for toggling -->
                <div class="collapse navbar-collapse">
                  <ul class="nav navbar-nav">
                    <li class="active"><a data-toggle="tab" href="#tab-4">Best Seller</a></li>
                    <li><a data-toggle="tab" href="#tab-5">Most Viewed</a></li>
                    @foreach($sub_cat as $v_sub_cat)
                    <li><a href="#">{{ $v_sub_cat->category_name}}</a></li>
                    @endforeach
                  </ul>
                </div><!-- /.navbar-collapse -->
              </div><!-- /.container-fluid -->
              <div id="elevator-1" class="floor-elevator">
                    <a href="#" class="btn-elevator up disabled fa fa-angle-up"></a>
                    <a href="#elevator-2" class="btn-elevator down fa fa-angle-down"></a>
              </div>
            </nav>
            <!-- <div class="category-banner">
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{URL::to('public/theme_assets/data/ads2.jpg')}}" /></a>
                </div>
                <div class="col-sm-6 banner">
                    <a href="#"><img alt="ads2" class="img-responsive" src="{{URL::to('public/theme_assets/data/ads3.jpg')}}" /></a>
                </div>
           </div> -->


           <div class="product-featured clearfix">
                <div class="banner-featured">
                    <div class="featured-text"><span>featured</span></div>
                    <div class="banner-img">
                        <a href="#"><img alt="Featurered 1" src="{{ $v_cat->category_image }}" /></a>
                    </div>
                </div>

                <div class="product-featured-content">
                    <div class="product-featured-list">
                        <div class="tab-container">
                            <!-- tab product -->
                            <div class="tab-panel active" id="tab-4">



                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4'>

                                  @foreach($pro_by_cat as $v_pro)

                                      <li>
                                          <div class="left-block">
                                              <a href="#">
                                              <img  alt="product" src="{{ $v_pro->product_image }}" width="600" /></a>
                                              <div class="quick-view">
                                                      <a title="Add to my wishlist" class="heart" href="#"></a>
                                                      <a title="Add to compare" class="compare" href="#"></a>
                                                      <a title="Quick view" class="search" href="#"></a>
                                              </div>
                                              <div class="add-to-cart">
                                                  <a title="Add to Cart" href="#">Add to Cart</a>
                                              </div>
                                          </div>
                                          <div class="right-block">
                                              <h5 class="product-name"><a href="#">{{ $v_pro->product_name}}</a></h5>
                                              <div class="content_price">
                                                  <span class="price product-price">BDT {{ $v_pro->new_price}}</span>

                                              </div>
                                              <div class="product-star">
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star"></i>
                                                  <i class="fa fa-star-half-o"></i>
                                              </div>
                                              <p>{{ strip_tags($v_pro->product_description) }}</p>
                                          </div>
                                      </li>

                                  @endforeach

                                </ul>


                            </div>
                            <!-- tab product -->
                            <div class="tab-panel" id="tab-5">
                                <ul class="product-list owl-carousel" data-dots="false" data-loop="true" data-nav = "true" data-margin = "0" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-responsive='{"0":{"items":1},"600":{"items":3},"1000":{"items":4'>
                                    <li>
                                        <div class="left-block">
                                            <a href="#">
                                            <img class="img-responsive" alt="product" src="{{URL::to('public/theme_assets/data/04_nice-dress.jpg')}}" /></a>
                                            <div class="quick-view">
                                                    <a title="Add to my wishlist" class="heart" href="#"></a>
                                                    <a title="Add to compare" class="compare" href="#"></a>
                                                    <a title="Quick view" class="search" href="#"></a>
                                            </div>
                                            <div class="add-to-cart">
                                                <a title="Add to Cart" href="#">Add to Cart</a>
                                            </div>
                                        </div>
                                        <div class="right-block">
                                            <h5 class="product-name"><a href="#">Nice Dress</a></h5>
                                            <div class="content_price">
                                                <span class="price product-price">$38,95</span>
                                                <span class="price old-price">$52,00</span>
                                            </div>
                                            <div class="product-star">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>

                                        </div>
                                    </li>

                                </ul>
                            </div>
                        </div>

                    </div>
                </div>

           </div>

        </div>
          @endif
        @endforeach

        <!-- Baner bottom -->
        <div class="row banner-bottom">
            <div class="col-sm-6">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="{{URL::to('public/theme_assets/data/ads17.jpg')}}" /></a>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="banner-boder-zoom">
                    <a href="#"><img alt="ads" class="img-responsive" src="{{URL::to('public/theme_assets/data/ads18.jpg')}}" /></a>
                </div>
            </div>
        </div>
        <!-- end banner bottom -->
    </div>
</div>

<div id="content-wrap">
    <div class="container">
        <div id="hot-categories" class="row">
            <div class="col-sm-12 group-title-box">
                <h2 class="group-title ">
                    <span>Hot categories</span>
                </h2>
            </div>

            <div class="col-sm-6  col-lg-3 cate-box">
                <div class="cate-tit" >
                    <div class="div-1" style="width: 46%;">
                        <div class="cate-name-wrap">
                            <p class="cate-name">Electronics</p>
                        </div>
                        <a href="" class="cate-link link-active" data-ac="flipInX" ><span>shop now</span></a>
                    </div>
                    <div class="div-2" >
                        <a href="#">
                            <img src="{{URL::to('public/theme_assets/data/cate-product1.png')}}" alt="Electronics" class="hot-cate-img" />
                        </a>
                    </div>

                </div>
                <div class="cate-content">
                    <ul>
                        <li><a href="#">Batteries & Chargers</a></li>
                        <li><a href="#">Headphone, Headset</a></li>
                        <li><a href="#">Home Audio</a></li>
                        <li><a href="#">Mp3 Player Accessories</a></li>
                    </ul>
                </div>
            </div> <!-- /.cate-box -->

            <div class="col-sm-6  col-lg-3 cate-box">
                <div class="cate-tit" >
                    <div class="div-1" style="width: 46%;">
                        <div class="cate-name-wrap">
                            <p class="cate-name">Sport & Outdoors</p>
                        </div>
                        <a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>
                    </div>
                    <div class="div-2" >
                        <a href="#">
                            <img src="{{URL::to('public/theme_assets/data/cate-product2.png')}}" alt="Electronics" class="hot-cate-img" />
                        </a>
                    </div>
                </div>
                <div class="cate-content">
                    <ul>
                        <li><a href="#">Golf Supplies</a></li>
                        <li><a href="#">Outdoor & Traveling Supplies</a></li>
                        <li><a href="#">Camping & Hiking</a></li>
                        <li><a href="#">Fishing</a></li>
                    </ul>
                </div>
            </div> <!-- /.cate-box -->
            <div class="col-sm-6  col-lg-3 cate-box">
                <div class="cate-tit" >
                    <div class="div-1" style="width: 46%;">
                        <div class="cate-name-wrap">
                            <p class="cate-name">Fashion</p>
                        </div>
                        <a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>
                    </div>
                    <div class="div-2" >
                        <a href="#">
                            <img src="{{URL::to('public/theme_assets/data/cate-product3.png')}}" alt="Electronics" class="hot-cate-img"/>
                        </a>
                    </div>

                </div>
                <div class="cate-content">
                    <ul>
                        <li><a href="#">Batteries & Chargers</a></li>
                        <li><a href="#">Headphone, Headset</a></li>
                        <li><a href="#">Home Audio</a></li>
                        <li><a href="#">Mp3 Player Accessories</a></li>
                    </ul>
                </div>
            </div> <!-- /.cate-box -->
            <div class="col-sm-6  col-lg-3 cate-box">
                <div class="cate-tit" >
                    <div class="div-1" style="width: 46%;">
                        <div class="cate-name-wrap">
                            <p class="cate-name">Health & Beauty</p>
                        </div>
                        <a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>
                    </div>
                    <div class="div-2" >
                        <a href="#">
                            <img src="{{URL::to('public/theme_assets/data/cate-product4.png')}}" alt="Electronics" class="hot-cate-img" />
                        </a>
                    </div>

                </div>
                <div class="cate-content">
                    <ul>
                        <li><a href="#">Bath & Body</a></li>
                        <li><a href="#">Shaving & Hair Removal</a></li>
                        <li><a href="#">Fragrances</a></li>
                        <li><a href="#">Salon & Spa Equipment</a></li>
                    </ul>
                </div>
            </div> <!-- /.cate-box -->
            <div class="col-sm-6  col-lg-3 cate-box">
                <div class="cate-tit" >
                    <div class="div-1" style="width: 46%;">
                        <div class="cate-name-wrap">
                            <p class="cate-name">Jewelry & Watches</p>
                        </div>
                        <a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>
                    </div>
                    <div class="div-2" >
                        <a href="#">
                            <img src="{{URL::to('public/theme_assets/data/cate-product5.png')}}" alt="Electronics" class="hot-cate-img" />
                        </a>
                    </div>
                </div>
                <div class="cate-content">
                    <ul>
                        <li><a href="#">Men Watches</a></li>
                        <li><a href="#">Wedding Rings</a></li>
                        <li><a href="#">Earring</a></li>
                        <li><a href="#">Necklaces</a></li>
                    </ul>
                </div>
            </div> <!-- /.cate-box -->

            <div class="col-sm-6  col-lg-3 cate-box">
                <div class="cate-tit" >
                    <div class="div-1" style="width: 46%;">
                        <div class="cate-name-wrap">
                            <p class="cate-name">Digital</p>
                        </div>
                        <a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>
                    </div>
                    <div class="div-2" >
                        <a href="#">
                            <img src="{{URL::to('public/theme_assets/data/cate-product6.png')}}" alt="Electronics" class="hot-cate-img" />
                        </a>
                    </div>
                </div>
                <div class="cate-content">
                    <ul>
                        <li><a href="#">Accessories for iPhone</a></li>
                        <li><a href="#">Accessories for iPad</a></li>
                        <li><a href="#">Accessories for Tablet PC</a></li>
                        <li><a href="#">Tablet PC</a></li>
                    </ul>
                </div>
            </div><!-- /.cate-box -->
            <div class="col-sm-6  col-lg-3 cate-box">
                <div class="cate-tit" >
                    <div class="div-1" style="width: 46%;">
                        <div class="cate-name-wrap">
                            <p class="cate-name">Furniture</p>
                        </div>
                        <a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>
                    </div>
                    <div class="div-2" >
                        <a href="#">
                            <img src="{{URL::to('public/theme_assets/data/cate-product7.png')}}" alt="Electronics" class="hot-cate-img" />
                        </a>
                    </div>

                </div>
                <div class="cate-content">
                    <ul>
                        <li><a href="#">Batteries & Chargers</a></li>
                        <li><a href="#">Headphone, Headset</a></li>
                        <li><a href="#">Home Audio</a></li>
                        <li><a href="#">Mp3 Player Accessories</a></li>
                    </ul>
                </div>
            </div> <!-- /.cate-box -->
            <div class="col-sm-6  col-lg-3 cate-box">
                <div class="cate-tit" >
                    <div class="div-1" style="width: 46%;">
                        <div class="cate-name-wrap">
                            <p class="cate-name">Toys & Hobbies</p>
                        </div>
                        <a href="" class="cate-link" data-ac="flipInX" ><span>shop now</span></a>
                    </div>
                    <div class="div-2" >
                        <a href="#">
                            <img src="{{URL::to('public/theme_assets/data/cate-product8.png')}}" alt="Electronics" class="hot-cate-img" />
                        </a>
                    </div>
                </div>
                <div class="cate-content">
                    <ul>
                        <li><a href="#">Walkera</a></li>
                        <li><a href="#">Fpv System & Parts</a></li>
                        <li><a href="#">RC Cars & Parts</a></li>
                        <li><a href="#">Helicopters & Part</a></li>
                    </ul>
                </div>
            </div><!-- /.cate-box -->
        </div> <!-- /#hot-categories -->

    </div> <!-- /.container -->
</div>

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

            <!-- #trademark-text-box -->

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