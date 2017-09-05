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
    <div class="top-header">
        <div class="container">
            <div class="nav-top-links">
                <a class="first-item" href="#"><img alt="phone" src="{{URL::to('public/assets/theme_assets/images/phone.png')}}" />00-62-658-658</a>
                <a href="#"><img alt="email" src="{{URL::to('public/assets/theme_assets/images/email.png')}}" />Contact us today!</a>
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
                      <img alt="email" src="{{URL::to('public/assets/theme_assets/images/fr.jpg')}}" />French
                      </a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#"><img alt="email" src="{{URL::to('public/assets/theme_assets/images/en.jpg')}}" />English</a></li>
                        <li><a href="#"><img alt="email" src="{{URL::to('public/assets/theme_assets/images/fr.jpg')}}" />French</a></li>
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
                                        <img class="img-responsive" src="{{URL::to('public/assets/theme_assets/data/product-100x122.jpg')}}" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
                                    </div>
                                </li>
                                <li class="product-info">
                                    <div class="p-left">
                                        <a href="#" class="remove_link"></a>
                                        <a href="#">
                                        <img class="img-responsive" src="{{URL::to('public/assets/theme_assets/data/product-s5-100x122.jpg')}}" alt="p10">
                                        </a>
                                    </div>
                                    <div class="p-right">
                                        <p class="p-name">Donec Ac Tempus</p>
                                        <p class="p-rice">61,19 €</p>
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
                        <span class="btn-open-mobile pull-right"><i class="fa fa-bars"></i></span>
                    </h4>
                    <div class="vertical-menu-content is-home">
                        <ul class="vertical-menu-list">
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/1.png')}}">Electronics</a></li>
                            <li>
                                <a class="parent" href="#"><img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/2.png')}}">Sports &amp; Outdoors</a>
                                <div class="vertical-dropdown-menu">
                                    <div class="vertical-groups col-sm-12">
                                        <div class="mega-group col-sm-4">
                                            <h4 class="mega-group-header"><span>Tennis</span></h4>
                                            <ul class="group-link-default">
                                                <li><a href="#">Tennis</a></li>
                                                <li><a href="#">Coats &amp; Jackets</a></li>
                                                <li><a href="#">Blouses &amp; Shirts</a></li>
                                                <li><a href="#">Tops &amp; Tees</a></li>
                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                <li><a href="#">Intimates</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-group col-sm-4">
                                            <h4 class="mega-group-header"><span>Swimming</span></h4>
                                            <ul class="group-link-default">
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Coats &amp; Jackets</a></li>
                                                <li><a href="#">Blouses &amp; Shirts</a></li>
                                                <li><a href="#">Tops &amp; Tees</a></li>
                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                <li><a href="#">Intimates</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-group col-sm-4">
                                            <h4 class="mega-group-header"><span>Shoes</span></h4>
                                            <ul class="group-link-default">
                                                <li><a href="#">Dresses</a></li>
                                                <li><a href="#">Coats &amp; Jackets</a></li>
                                                <li><a href="#">Blouses &amp; Shirts</a></li>
                                                <li><a href="#">Tops &amp; Tees</a></li>
                                                <li><a href="#">Hoodies &amp; Sweatshirts</a></li>
                                                <li><a href="#">Intimates</a></li>
                                            </ul>
                                        </div>
                                        <div class="mega-custom-html col-sm-12">
                                            <a href="#"><img src="{{URL::to('public/assets/theme_assets/data/banner-megamenu.jpg')}}" alt="Banner"></a>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/3.png')}}">Smartphone &amp; Tablets</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/4.png')}}">Health &amp; Beauty Bags</a></li>
                            <li>
                                <a class="parent" href="#">
                                <img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/5.png')}}">Shoes &amp; Accessories</a>
                                <div class="vertical-dropdown-menu">
                                        <div class="vertical-groups col-sm-12">
                                            <div class="mega-group col-sm-12">
                                                <h4 class="mega-group-header"><span>Special products</span></h4>
                                                <div class="row mega-products">
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="{{URL::to('public/assets/theme_assets/data/p10.jpg')}}" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="{{URL::to('public/assets/theme_assets/data/p11.jpg')}}" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="{{URL::to('public/assets/theme_assets/data/p12.jpg')}}" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                    <div class="col-sm-3 mega-product">
                                                        <div class="product-avatar">
                                                            <a href="#"><img src="{{URL::to('public/assets/theme_assets/data/p13.jpg')}}" alt="product1"></a>
                                                        </div>
                                                        <div class="product-name">
                                                            <a href="#">Fashion hand bag</a>
                                                        </div>
                                                        <div class="product-price">
                                                            <div class="new-price">$38</div>
                                                            <div class="old-price">$45</div>
                                                        </div>
                                                        <div class="product-star">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star-half-o"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                            </li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/6.png')}}">Toys &amp; Hobbies</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/7.png')}}">Computers &amp; Networking</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/8.png')}}">Laptops &amp; Accessories</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/9.png')}}">Jewelry &amp; Watches</a></li>
                            <li><a href="#"><img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/10.png')}}">Flashlights &amp; Lamps</a></li>
                            <li>
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/11.png')}}">
                                    Cameras &amp; Photo
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/5.png')}}">
                                    Television
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/7.png')}}">Computers &amp; Networking
                                </a>
                            </li>
                            <li class="cat-link-orther">
                                <a href="#">
                                    <img class="icon-menu" alt="Funky roots" src="{{URL::to('public/assets/theme_assets/data/6.png')}}">
                                    Toys &amp; Hobbies
                                </a>
                            </li>
                            <li class="cat-link-orther">
                            <a href="#"><img class="icon-menu" alt="Funky roots" src="assets/data/9.png">Jewelry &amp; Watches</a></li>
                        </ul>
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
                                    <li class="active"><a href="{{URL::to('/product-detail')}}">Home</a></li>
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

<div class="columns-container">
    <div class="container" id="columns">
        <!-- breadcrumb -->
        <div class="breadcrumb clearfix">
            <a class="home" href="#" title="Return to Home">Home</a>
            <span class="navigation-pipe">&nbsp;</span>
            <span class="navigation_page">{{$cat_info->category_name}}</span>
        </div>
        <!-- ./breadcrumb -->
        <!-- row -->
        <div class="row">
            <!-- Left colunm -->
            <div class="column col-xs-12 col-sm-3" id="left_column">
                <!-- block category -->
                <div class="block left-module">
                    <p class="title_block">Product types</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-category">
                            <div class="layered-content">
                                <ul class="tree-menu">
                                    <li class="active">
                                        <span></span><a href="#">Tops</a>
                                        <ul>
                                            <li><span></span><a href="#">T-shirts</a></li>
                                            <li><span></span><a href="#">Dresses</a></li>
                                            <li><span></span><a href="#">Casual</a></li>
                                            <li><span></span><a href="#">Evening</a></li>
                                            <li><span></span><a href="#">Summer</a></li>
                                            <li><span></span><a href="#">Bags & Shoes</a></li>
                                            <li><span></span><a href="#"><span></span>Blouses</a></li>
                                        </ul>
                                    </li>
                                    <li><span></span><a href="#">T-shirts</a></li>
                                    <li><span></span><a href="#">Dresses</a></li>
                                    <li><span></span><a href="#">Jackets and coats </a></li>
                                    <li><span></span><a href="#">Knitted</a></li>
                                    <li><span></span><a href="#">Pants</a></li>
                                    <li><span></span><a href="#">Bags & Shoes</a></li>
                                    <li><span></span><a href="#">Best selling</a></li>
                                </ul>
                            </div>
                        </div>
                        <!-- ./layered -->
                    </div>
                </div>
                <!-- ./block category  -->
                <!-- block filter -->
                <div class="block left-module">
                    <p class="title_block">Filter selection</p>
                    <div class="block_content">
                        <!-- layered -->
                        <div class="layered layered-filter-price">
                            <!-- filter categgory -->
                            <div class="layered_subtitle">CATEGORIES</div>
                            <div class="layered-content">
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="c1" name="cc" />
                                        <label for="c1">
                                        <span class="button"></span>
                                        Tops<span class="count">(10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="c2" name="cc" />
                                        <label for="c2">
                                        <span class="button"></span>
                                        T-shirts<span class="count">(10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="c3" name="cc" />
                                        <label for="c3">
                                        <span class="button"></span>
                                        Dresses<span class="count">(10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="c4" name="cc" />
                                        <label for="c4">
                                        <span class="button"></span>
                                        Jackets and coats<span class="count">(10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="c5" name="cc" />
                                        <label for="c5">
                                        <span class="button"></span>
                                        Knitted<span class="count">(10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="c6" name="cc" />
                                        <label for="c6">
                                        <span class="button"></span>
                                        Pants<span class="count">(10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="c7" name="cc" />
                                        <label for="c7">
                                        <span class="button"></span>
                                        Bags & Shoes<span class="count">(10)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="c8" name="cc" />
                                        <label for="c8">
                                        <span class="button"></span>
                                        Best selling<span class="count">(10)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- ./filter categgory -->
                            <!-- filter price -->
                            <div class="layered_subtitle">price</div>
                            <div class="layered-content slider-range">

                                <div data-label-reasult="Range:" data-min="0" data-max="500" data-unit="$" class="slider-range-price" data-value-min="50" data-value-max="350"></div>
                                <div class="amount-range-price">Range: $50 - $350</div>
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="p1" name="cc" />
                                        <label for="p1">
                                        <span class="button"></span>
                                        $20 - $50<span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p2" name="cc" />
                                        <label for="p2">
                                        <span class="button"></span>
                                        $50 - $100<span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="p3" name="cc" />
                                        <label for="p3">
                                        <span class="button"></span>
                                        $100 - $250<span class="count">(0)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- ./filter price -->
                            <!-- filter color -->
                            <div class="layered_subtitle">Color</div>
                            <div class="layered-content filter-color">
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="color1" name="cc" />
                                        <label style=" background:#aab2bd;" for="color1"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color2" name="cc" />
                                        <label style=" background:#cfc4a6;" for="color2"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color3" name="cc" />
                                        <label style=" background:#aab2bd;" for="color3"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color4" name="cc" />
                                        <label style=" background:#fccacd;" for="color4"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color5" name="cc" />
                                        <label style="background:#964b00;" for="color5"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color6" name="cc" />
                                        <label style=" background:#faebd7;" for="color6"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color7" name="cc" />
                                        <label style=" background:#e84c3d;" for="color7"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color8" name="cc" />
                                        <label style=" background:#c19a6b;" for="color8"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color9" name="cc" />
                                        <label style=" background:#f39c11;" for="color9"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color10" name="cc" />
                                        <label style=" background:#5d9cec;" for="color10"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color11" name="cc" />
                                        <label style=" background:#a0d468;" for="color11"><span class="button"></span></label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="color12" name="cc" />
                                        <label style=" background:#f1c40f;" for="color12"><span class="button"></span></label>
                                    </li>

                                </ul>
                            </div>
                            <!-- ./filter color -->
                            <!-- ./filter brand -->
                            <div class="layered_subtitle">brand</div>
                            <div class="layered-content filter-brand">
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="brand1" name="cc" />
                                        <label for="brand1">
                                        <span class="button"></span>
                                        Channelo<span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="brand2" name="cc" />
                                        <label for="brand2">
                                        <span class="button"></span>
                                        Mamypokon<span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="brand3" name="cc" />
                                        <label for="brand3">
                                        <span class="button"></span>
                                        Pamperson<span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="brand4" name="cc" />
                                        <label for="brand4">
                                        <span class="button"></span>
                                        Pumano<span class="count">(0)</span>
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="brand5" name="cc" />
                                        <label for="brand5">
                                        <span class="button"></span>
                                        AME<span class="count">(0)</span>
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- ./filter brand -->
                            <!-- ./filter size -->
                            <div class="layered_subtitle">Size</div>
                            <div class="layered-content filter-size">
                                <ul class="check-box-list">
                                    <li>
                                        <input type="checkbox" id="size1" name="cc" />
                                        <label for="size1">
                                        <span class="button"></span>X
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size2" name="cc" />
                                        <label for="size2">
                                        <span class="button"></span>XXL
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size3" name="cc" />
                                        <label for="size3">
                                        <span class="button"></span>XL
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size4" name="cc" />
                                        <label for="size4">
                                        <span class="button"></span>XXL
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size5" name="cc" />
                                        <label for="size5">
                                        <span class="button"></span>M
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size6" name="cc" />
                                        <label for="size6">
                                        <span class="button"></span>XXS
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size7" name="cc" />
                                        <label for="size7">
                                        <span class="button"></span>S
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size8" name="cc" />
                                        <label for="size8">
                                        <span class="button"></span>XS
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size9" name="cc" />
                                        <label for="size9">
                                        <span class="button"></span>34
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size10" name="cc" />
                                        <label for="size10">
                                        <span class="button"></span>36
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size11" name="cc" />
                                        <label for="size11">
                                        <span class="button"></span>35
                                        </label>
                                    </li>
                                    <li>
                                        <input type="checkbox" id="size12" name="cc" />
                                        <label for="size12">
                                        <span class="button"></span>37
                                        </label>
                                    </li>
                                </ul>
                            </div>
                            <!-- ./filter size -->
                        </div>
                        <!-- ./layered -->

                    </div>
                </div>
                <!-- ./block filter  -->

                <!-- left silide -->
                <div class="col-left-slide left-module">
                    <ul class="owl-carousel owl-style2" data-loop="true" data-nav = "false" data-margin = "30" data-autoplayTimeout="1000" data-autoplayHoverPause = "true" data-items="1" data-autoplay="true">
                        <li><a href="#"><img src="assets/data/slide-left.jpg" alt="slide-left"></a></li>
                        <li><a href="#"><img src="assets/data/slide-left2.jpg" alt="slide-left"></a></li>
                        <li><a href="#"><img src="assets/data/slide-left3.png" alt="slide-left"></a></li>
                    </ul>

                </div>
                <!--./left silde-->
                <!-- SPECIAL -->
                <div class="block left-module">
                    <p class="title_block">SPECIAL PRODUCTS</p>
                    <div class="block_content">
                        <ul class="products-block">
                            <li>
                                <div class="products-block-left">
                                    <a href="#">
                                        <img src="assets/data/product-100x122.jpg" alt="SPECIAL PRODUCTS">
                                    </a>
                                </div>
                                <div class="products-block-right">
                                    <p class="product-name">
                                        <a href="#">Woman Within Plus Size Flared</a>
                                    </p>
                                    <p class="product-price">$38,95</p>
                                    <p class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </p>
                                </div>
                            </li>
                        </ul>
                        <div class="products-block">
                            <div class="products-block-bottom">
                                <a class="link-all" href="#">All Products</a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- ./SPECIAL -->
                <!-- TAGS -->
                <div class="block left-module">
                    <p class="title_block">TAGS</p>
                    <div class="block_content">
                        <div class="tags">
                            <a href="#"><span class="level1">actual</span></a>
                            <a href="#"><span class="level2">adorable</span></a>
                            <a href="#"><span class="level3">change</span></a>
                            <a href="#"><span class="level4">consider</span></a>
                            <a href="#"><span class="level3">phenomenon</span></a>
                            <a href="#"><span class="level4">span</span></a>
                            <a href="#"><span class="level1">spanegs</span></a>
                            <a href="#"><span class="level5">spanegs</span></a>
                            <a href="#"><span class="level1">actual</span></a>
                            <a href="#"><span class="level2">adorable</span></a>
                            <a href="#"><span class="level3">change</span></a>
                            <a href="#"><span class="level4">consider</span></a>
                            <a href="#"><span class="level2">gives</span></a>
                            <a href="#"><span class="level3">change</span></a>
                            <a href="#"><span class="level2">gives</span></a>
                            <a href="#"><span class="level1">good</span></a>
                            <a href="#"><span class="level3">phenomenon</span></a>
                            <a href="#"><span class="level4">span</span></a>
                            <a href="#"><span class="level1">spanegs</span></a>
                            <a href="#"><span class="level5">spanegs</span></a>
                        </div>
                    </div>
                </div>
                <!-- ./TAGS -->

            </div>
            <!-- ./left colunm -->
            <!-- Center colunm-->
            <div class="center_column col-xs-12 col-sm-9" id="center_column">

                <div id="view-product-list" class="view-product-list">
                    <h2 class="page-heading">
                        <span class="page-heading-title">{{$cat_info->category_name}}</span>
                    </h2>
                    <ul class="display-product-option">
                        <li class="view-as-grid selected">
                            <span>grid</span>
                        </li>
                        <li class="view-as-list">
                            <span>list</span>
                        </li>
                    </ul>
                    <!-- PRODUCT LIST -->
                    <ul class="row product-list grid">
                    @foreach($pro_by_cat_info as $v_pro_by_cat)
                        @if($v_pro_by_cat->publication_status == 1)
                        <li class="col-sx-12 col-sm-4">
                            <div class="product-container">
                                <div class="left-block">
                                    <a href="#">
                                        <img class="img-responsive" alt="product" src="{{ asset($v_pro_by_cat->product_image) }}" width="300" />

                                    </a>
                                    <div class="quick-view">
                                            <a title="Add to my wishlist" class="heart" href="#"></a>
                                            <a title="Add to compare" class="compare" href="#"></a>
                                            <a title="Quick view" class="search" href="{{URL::to('/product-detail/'.$v_pro_by_cat->product_id)}}"></a>
                                    </div>
                                    <div class="add-to-cart">
                                        <a title="Add to Cart" href="#add">Add to Cart</a>
                                    </div>
                                </div>
                                <div class="right-block">
                                    <h5 class="product-name"><a href="{{URL::to('/product-detail/'.$v_pro_by_cat->product_id)}}">{{$v_pro_by_cat->product_name}}</a></h5>
                                    <div class="product-star">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star-half-o"></i>
                                    </div>
                                    <div class="content_price">
                                        <span class="price product-price">BDT {{$v_pro_by_cat->new_price}}</span>
                                        <span class="price old-price"> BDT {{$v_pro_by_cat->old_price}}</span>
                                    </div>
                                    <br><br>
                                    <button class="btn btn-info pull-right"><a style="color: #fff; text-align: center;" href="{{URL::to('/product-detail/'.$v_pro_by_cat->product_id)}}">View more</a></button>
                                    <div class="info-orther">
                                        <!-- <p>Item Code: #453217907</p> -->
                                        <p class="availability">Availability: <span>In stock</span></p>
                                        <div class="product-desc">
                                            {{ $v_pro_by_cat->product_description }}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endif
                     @endforeach

                    </ul>
                    <!-- ./PRODUCT LIST -->
                </div>


            </div>
            <!-- ./ Center colunm -->
        </div>
        <!-- ./row-->
    </div>
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



            <div id="footer-menu-box">
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Company Info - Partnerships</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Online Shopping</a></li>
                        <li><a href="#" >Promotions</a></li>
                        <li><a href="#" >My Orders</a></li>
                        <li><a href="#" >Help</a></li>
                        <li><a href="#" >Site Map</a></li>
                        <li><a href="#" >Customer Service</a></li>
                        <li><a href="#" >Support</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Most Populars</a></li>
                        <li><a href="#" >Best Sellers</a></li>
                        <li><a href="#" >New Arrivals</a></li>
                        <li><a href="#" >Special Products</a></li>
                        <li><a href="#" >Manufacturers</a></li>
                        <li><a href="#" >Our Stores</a></li>
                        <li><a href="#" >Shipping</a></li>
                        <li><a href="#" >Payments</a></li>
                        <li><a href="#" >Warantee</a></li>
                        <li><a href="#" >Refunds</a></li>
                        <li><a href="#" >Checkout</a></li>
                        <li><a href="#" >Discount</a></li>
                    </ul>
                </div>
                <div class="col-sm-12">
                    <ul class="footer-menu-list">
                        <li><a href="#" >Terms & Conditions</a></li>
                        <li><a href="#" >Policy</a></li>
                        <li><a href="#" >Shipping</a></li>
                        <li><a href="#" >Payments</a></li>
                        <li><a href="#" >Returns</a></li>
                        <li><a href="#" >Refunds</a></li>
                        <li><a href="#" >Warrantee</a></li>
                        <li><a href="#" >FAQ</a></li>
                        <li><a href="#" >Contact</a></li>
                    </ul>
                </div>
                <hr>
                <p class="text-center">Copyrights &#169;<?php echo date('Y') ?> | All Rights Reserved </p>
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