<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Home | Bookshop Responsive Bootstrap4 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
		rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700,900" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/plugins.css">
	<link rel="stylesheet" href="style.css">

	<!-- Cusom css -->
	<link rel="stylesheet" href="css/custom.css">

	<!-- Modernizer js -->
	<script src="js/vendor/modernizr-3.5.0.min.js"></script>
</head>

<body>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

	<!-- Main wrapper -->
	<div class="wrapper" id="wrapper">
		<!-- Header -->
		<header id="wn__header" class="header__area header__absolute sticky__header">
			<div class="container-fluid">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<div class="logo">
							<a href="index.php">
								<!----> <img src="images/logo/logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="index.php">Home</a></li>
								<li class="drop"><a href="./ShopRegistration1.php">Shop Registration</a>
									<!--<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">Shop Layout</li>
											<li><a href="shop-grid.html">Shop Registration</a></li>
											<li><a href="single-product.html">Single Product</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Shop Page</li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="cart.html">Cart Page</a></li>
											<li><a href="checkout.html">Checkout Page</a></li>
											<li><a href="wishlist.html">Wishlist Page</a></li>
											<li><a href="error404.html">404 Page</a></li>
											<li><a href="faq.html">Faq Page</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Bargain Books</li>
											<li><a href="shop-grid.html">Bargain Bestsellers</a></li>
											<li><a href="shop-grid.html">Activity Kits</a></li>
											<li><a href="shop-grid.html">B&N Classics</a></li>
											<li><a href="shop-grid.html">Books Under $5</a></li>
											<li><a href="shop-grid.html">Bargain Books</a></li>
										</ul>
									</div>-->
								</li>
								<li class="drop"><a href="shop-grid.html">Categories</a>
									<div class="megamenu mega03">
										<ul class="item item03">


											<li class="title">New Categories

											
											</li>
											<li><?php
                                                include("connection.php");
                                                $sql = "Select * from tblshopregistration";
                                                $catRes = mysqli_query($conn,$sql);
                                                while($catRow = mysqli_fetch_array($catRes))
                                                {
                                                  //  echo '<li ><a href="index.php?cat='. $catRow['cat_id'] . '" >' . $catRow['ShopCategary'] . '</a></li>';
                                                }
                                            ?></li>
											<li><a href="shop-grid.html">Toys</a></li>
											<li><a href="shop-grid.html">Food</a></li>
											<li><a href="shop-grid.html">Gifts</a></li>
											<li><a href="shop-grid.html">footwear</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Customer Favourite</li>
											<li><a href="shop-grid.html">Sports</a></li>
											<li><a href="shop-grid.html">Travel</a></li>
											<li><a href="shop-grid.html">Beauty</a></li>
											<li><a href="shop-grid.html">Health</a></li>
											<li><a href="shop-grid.html">Garden</a></li>
										</ul>
										<ul class="item item03">
											<li class="title">Others</li>
											<li><a href="shop-grid.html">Clothing</a></li>
											<li><a href="shop-grid.html">Automotive</a></li>
											<li><a href="shop-grid.html">Electronics</a></li>
											<li><a href="shop-grid.html">grocery store</a></li>
											<li><a href="shop-grid.html">department store</a></li>
										</ul>
									</div>
								</li>
								<!--<li class="drop"><a href="shop-grid.html">Kids</a>
									<div class="megamenu mega02">
										<ul class="item item02">
											<li class="title">Top Collections</li>
											<li><a href="shop-grid.html">American Girl</a></li>
											<li><a href="shop-grid.html">Diary Wimpy Kid</a></li>
											<li><a href="shop-grid.html">Finding Dory</a></li>
											<li><a href="shop-grid.html">Harry Potter</a></li>
											<li><a href="shop-grid.html">Land of Stories</a></li>
										</ul>
										<ul class="item item02">
											<li class="title">More For Kids</li>
											<li><a href="shop-grid.html">B&N Educators</a></li>
											<li><a href="shop-grid.html">B&N Kids' Club</a></li>
											<li><a href="shop-grid.html">Kids' Music</a></li>
											<li><a href="shop-grid.html">Toys & Games</a></li>
											<li><a href="shop-grid.html">Hoodies</a></li>
										</ul>
									</div>
								</li>
								<li class="drop"><a href="#">Pages</a>
									<div class="megamenu dropdown">
										<ul class="item item01">
											<li><a href="about.html">About Page</a></li>
											<li class="label2"><a href="portfolio.html">Portfolio</a>
												<ul>
													<li><a href="portfolio.html">Portfolio</a></li>
													<li><a href="portfolio-details.html">Portfolio Details</a></li>
												</ul>
											</li>
											<li><a href="my-account.html">My Account</a></li>
											<li><a href="cart.html">Cart Page</a></li>
											<li><a href="checkout.html">Checkout Page</a></li>
											<li><a href="wishlist.html">Wishlist Page</a></li>
											<li><a href="error404.html">404 Page</a></li>
											<li><a href="faq.html">Faq Page</a></li>
											<li><a href="team.html">Team Page</a></li>
										</ul>
									</div>
								</li>-->
								<li class="drop"><a href="blog.html">My Profile</a>
									<!--<div class="megamenu dropdown">
										<ul class="item item01">
											<li><a href="blog.html">Blog Page</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</div>-->
								</li>
								<li><a href="myshop3.php">My shop</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="">logout</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">

							<!--<li class="wishlist"><a href="#"></a></li>-->

							<!--<li class="shopcart"><a class="cartbox_active" href="#"><span
										class="product_qun">3</span></a>-->
							<!-- Start Shopping Cart -->
							<!--<div class="block-minicart minicart__active">
									<div class="minicart-content-wrapper">
										<div class="micart__close">
											<span>close</span>
										</div>
										<div class="items-total d-flex justify-content-between">
											<span>3 items</span>
											<span>Cart Subtotal</span>
										</div>
										<div class="total_amount text-right">
											<span>$66.00</span>
										</div>
										<div class="mini_action checkout">
											<a class="checkout__btn" href="cart.html">Go to Checkout</a>
										</div>
										<div class="single__items">
											<div class="miniproduct">
												<div class="item01 d-flex">
													<div class="thumb">
														<a href="product-details.html"><img
																src="images/product/sm-img/1.jpg"
																alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Voyage Yoga Bag</a></h6>
														<span class="prize">$30.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 01</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a>
																</li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img
																src="images/product/sm-img/3.jpg"
																alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Impulse Duffle</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a>
																</li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a>
																</li>
															</ul>
														</div>
													</div>
												</div>
												<div class="item01 d-flex mt--20">
													<div class="thumb">
														<a href="product-details.html"><img
																src="images/product/sm-img/2.jpg"
																alt="product images"></a>
													</div>
													<div class="content">
														<h6><a href="product-details.html">Compete Track Tote</a></h6>
														<span class="prize">$40.00</span>
														<div class="product_prize d-flex justify-content-between">
															<span class="qun">Qty: 03</span>
															<ul class="d-flex justify-content-end">
																<li><a href="#"><i class="zmdi zmdi-settings"></i></a>
																</li>
																<li><a href="#"><i class="zmdi zmdi-delete"></i></a>
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
										</div>
										<div class="mini_action cart">
											<a class="cart__btn" href="cart.html">View and edit cart</a>
										</div>
									</div>
								</div>-->
							<!-- End Shopping Cart -->
							<li class="shop_search"><a class="search__active" href="#"></a>

								<!--<div class="searchbar__content setting__block">
									<div class="content-inner">
										<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Currency</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">USD - US Dollar</span>
													<ul class="switcher-dropdown">
														<li>GBP - British Pound Sterling</li>
														<li>EUR - Euro</li>
													</ul>
												</div>
											</div>
										</div>-->
								<!--<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Language</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">English01</span>
													<ul class="switcher-dropdown">
														<li>English02</li>
														<li>English03</li>
														<li>English04</li>
														<li>English05</li>
													</ul>
												</div>
											</div>
										</div>-->
								<!--<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>Select Store</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<span class="currency-trigger">Fashion Store</span>
													<ul class="switcher-dropdown">
														<li>Furniture</li>
														<li>Shoes</li>
														<li>Speaker Store</li>
														<li>Furniture</li>
													</ul>
												</div>
											</div>
										</div>-->
								<!--<div class="switcher-currency">
											<strong class="label switcher-label">
												<span>My Account</span>
											</strong>
											<div class="switcher-options">
												<div class="switcher-currency-trigger">
													<div class="setting__menu">
														<span><a href="#">Compare Product</a></span>
														<span><a href="#">My Account</a></span>
														<span><a href="#">My Wishlist</a></span>
														<span><a href="#">Sign In</a></span>
														<span><a href="#">Create An Account</a></span>
													</div>
												</div>
											</div>
										</div>-->





					</div>
					<!-- Start Mobile Menu -->
					<div class="row d-none">
						<div class="col-lg-12 d-none">
							<nav class="mobilemenu__nav">
								<ul class="meninmenu">
									<li><a href="index.html">Home</a></li>
									<li><a href="#">Shop Registration</a>
									</li>


									<li><a href="shop-grid.html">Categories</a>

										<ul>

											<li><?php
                                                include("connection.php");
                                                $sql = "Select * from categorytable";
                                                $catRes = mysqli_query($conn,$sql);
                                                while($catRow = mysqli_fetch_array($catRes))
                                                {
                                                    echo '<li ><a href="index.php?cat='. $catRow['cat_id'] . '" >' . $catRow['cat_name'] . '</a></li>';
                                                }
                                            ?></li>
											<li><a href="shop-grid.html">Toys</a></li>
											<li><a href="shop-grid.html">Food</a></li>
											<li><a href="shop-grid.html">Gifts</a></li>
											<li><a href="shop-grid.html">footwear</a></li>
											<li><a href="shop-grid.html">Sports</a></li>
											<li><a href="shop-grid.html">Travel</a></li>
											<li><a href="shop-grid.html">Beauty</a></li>
											<li><a href="shop-grid.html">Health</a></li>
											<li><a href="shop-grid.html">Garden</a></li>
											<li><a href="shop-grid.html">Clothing</a></li>
											<li><a href="shop-grid.html">Automotive</a></li>
											<li><a href="shop-grid.html">Electronics</a></li>
											<li><a href="shop-grid.html">grocery store</a></li>
											<li><a href="shop-grid.html">department store</a></li>
										</ul>
									</li>
									<li><a href="">My Profile</a></li>
									<li><a href="myshop3.php">My Shop</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="">Logout</a></li>
								</ul>
							</nav>
						</div>
					</div>
					<!-- End Mobile Menu -->
					<div class="mobile-menu d-block d-lg-none">
					</div>
					<!-- Mobile Menu -->
				</div>
		</header>
		<!-- //Header -->
		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" action="#">
				<div class="field__search">
					<input type="text" placeholder="Search entire store here...">
					<div class="action">
						<a href="#"><i class="zmdi zmdi-search"></i></a>
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
		<!-- Start Slider area -->
		<!--<div class="slider-area brown__nav slider--15 slide__activation slide__arrow01 owl-carousel owl-theme">-->
		<!-- Start Single Slide -->
		<!--<div class="slide animation__style10 bg-image--1 fullscreen align__center--left">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="slider__content">
							<div class="contentbox">
								<h2>Buy <span>your </span></h2>
								<h2>favourite <span>Book </span></h2>
								<h2>from <span>Here </span></h2>
								<a class="shopbtn" href="#">shop now</a>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<!-- End Single Slide -->
		<!-- Start Single Slide -->
		<!--<div class="slide animation__style10 bg-image--7 fullscreen align__center--left">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="slider__content">
								<div class="contentbox">
									<h2>Buy <span>your </span></h2>
									<h2>favourite <span>Book </span></h2>
									<h2>from <span>Here </span></h2>
									<a class="shopbtn" href="#">shop now</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>-->
		<!-- End Single Slide -->
	</div>
	<!-- End Slider area -->
	<!-- Start BEst Seller Area -->
	<section class="wn__product__area brown--color pt--90  pb--30 mt--40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section__title text-center">
						<h2 class="title__be--2">New <span class="color--theme">Shops</span></h2>
						<p>Visit your near local shop and help him to grow their business. Be Vocal for Local.
							<br>Buy from paas wali dukaan</p>
					</div>
				</div>
			</div>
			<!--	Start Single Tab Content -->
			<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">

				<!-- Start Single Product -->
				<?php
                                $query = "Select * from tblshopregistration";
                                $result = mysqli_query($conn, $query);
                                while($rows = mysqli_fetch_array($result))
                                {
                                    
                               
                            ?>
				<div class="product product__style--3">
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
						
							<a class="first__img"  href="single-product.php?shp_id=<?php echo $rows['SysId'];?> "><img src="images/books/1.jpg"
									alt="product image"></a>
							<!--<a class="second__img animation1" href="single-product.html"><img src="images/books/2.jpg"
									alt="product image"></a>-->
							<div class="hot__box">
							
								<span class="hot-label">BEST SALLER</span>
							</div>
						</div>
						<div class="product__content content--center">

							<h4><a href="single-product.php?shp_id=<?php echo $rows['SysId'];?> "><?php echo $rows['ShopName']; ?></a></h4>
							<ul class="prize d-flex">
								<li><?php echo $rows['ShopCategory']; ?></li>
								<!--<li class="old_prize">$35.00</li>-->
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										<li>
											<h6><?php echo $rows['ShopLocation']; ?></h6>

										</li>
							
									</ul>
								</div>
							</div>
							<div class="product__hover--content">
								<ul class="rating d-flex">
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<?php }?>
				<!-- Start Single Product -->
				<!-- Start Single Product -->
				<div class="product product__style--3">
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
							<a class="first__img" href="single-product.html"><img src="images/books/2.jpg"
									alt="product image"></a>
							<!--	<a class="second__img animation1" href="single-product.html"><img src="images/books/4.jpg"
									alt="product image"></a>-->
							<div class="hot__box color--2">
								<span class="hot-label">HOT</span>
							</div>
						</div>
						<div class="product__content content--center">
							<h4><a href="single-product.html"></a></h4>
							<ul class="prize d-flex">
								<li>Food</li>
								<!--<li class="old_prize">$35.00</li>-->
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										<li>
											<h6>56,Uttran,varacha,Surat,gujart</h6>

										</li>

									</ul>
								</div>
							</div>
							<div class="product__hover--content">
								<ul class="rating d-flex">
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Start Single Product -->
				<!-- Start Single Product -->
				<div class="product product__style--3">
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
							<a class="first__img" href="single-product.html"><img src="images/books/3.jpg"
									alt="product image"></a>
							<!--<a class="second__img animation1" href="single-product.html"><img src="images/books/6.jpg"
									alt="product image"></a>-->
							<div class="hot__box">
								<span class="hot-label">BEST SALLER</span>
							</div>
						</div>
						<div class="product__content content--center">
							<h4><a href="single-product.html">greenbek shop</a></h4>

							<ul class="prize d-flex">
								<li>Grocery Store</li>
								<!--<li class="old_prize">$35.00</li>-->
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										<li>
											<h6>75,rachna,L.H road,varacha,Surat</h6>

										</li>

									</ul>
								</div>
							</div>
							<div class="product__hover--content">
								<ul class="rating d-flex">
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Start Single Product -->
				<!-- Start Single Product -->
				<div class="product product__style--3">
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
							<a class="first__img" href="single-product.html"><img src="images/books/4.jpg"
									alt="product image"></a>
							<!--<a class="second__img animation1" href="single-product.html"><img src="images/books/8.jpg"
									alt="product image"></a>-->
							<div class="hot__box">
								<span class="hot-label">HOT</span>
							</div>
						</div>
						<div class="product__content content--center">
							<h4><a href="single-product.html">harinam shop</a></h4>
							<ul class="prize d-flex">
								<li>Grocery Store</li>
								<!--<li class="old_prize">$35.00</li>-->
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										<li>
											<h6>12,ramnagar,punagam,Surat</h6>

										</li>

									</ul>
								</div>
							</div>
							<div class="product__hover--content">
								<ul class="rating d-flex">
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Start Single Product -->
				<!-- Start Single Product -->
				<div class="product product__style--3">
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
							<a class="first__img" href="single-product.html"><img src="images/books/5.jpg"
									alt="product image"></a>
							<!--<a class="second__img animation1" href="single-product.html"><img src="images/books/10.jpg"
									alt="product image"></a>-->
							<div class="hot__box">
								<span class="hot-label">HOT</span>
							</div>
						</div>
						<div class="product__content content--center">
							<h4><a href="single-product.html">jalaram shop</a></h4>
							<ul class="prize d-flex">
								<li>$35.00</li>
								<li class="old_prize">$35.00</li>
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
										</li>
										<li><a class="wishlist" href="wishlist.html"><i
													class="bi bi-shopping-cart-full"></i></a>
										</li>
										<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
										<li><a data-toggle="modal" title="Quick View"
												class="quickview modal-view detail-link" href="#productmodal"><i
													class="bi bi-search"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="product__hover--content">
								<ul class="rating d-flex">
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<!-- Start Single Product -->
				<!-- Start Single Product -->
				<div class="product product__style--3">
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
							<a class="first__img" href="single-product.html"><img src="images/books/6.jpg"
									alt="product image"></a>
							<!--<a class="second__img animation1" href="single-product.html"><img src="images/books/2.jpg"
									alt="product image"></a>-->
							<div class="hot__box">
								<span class="hot-label">BEST SALER</span>
							</div>
						</div>
						<div class="product__content content--center content--center">
							<h4><a href="single-product.html">shivam shop</a></h4>
							<ul class="prize d-flex">
								<li>$50.00</li>
								<li class="old_prize">$35.00</li>
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
										</li>
										<li><a class="wishlist" href="wishlist.html"><i
													class="bi bi-shopping-cart-full"></i></a>
										</li>
										<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
										<li><a data-toggle="modal" title="Quick View"
												class="quickview modal-view detail-link" href="#productmodal"><i
													class="bi bi-search"></i></a></li>
									</ul>
								</div>
							</div>
							<div class="product__hover--content">
								<ul class="rating d-flex">
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li class="on"><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
									<li><i class="fa fa-star-o"></i></li>
								</ul>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
				</div>
			</div>
			<!-- End Single Tab Content -->
		</div>
	</section>
	<!--Copy related section shop 1-->
	

	<!--copy tranding section shop 2-->
	<section class="wn__product__area brown--color pt--80  pb--30">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section__title text-center">
						<h2 class="title__be--2">Tranding <span class="color--theme">Shops</span></h2>

					</div>
				</div>
				<!--	Start Single Tab Content -->
				<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">

					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product.html"><img src="images/books/4.jpg"
										alt="product image"></a>
								<!--<a class="second__img animation1" href="single-product.html"><img
										src="images/books/2.jpg" alt="product image"></a>-->
								<div class="hot__box">
									<span class="hot-label">BEST SALLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product.html">raj store</a></h4>
								<ul class="prize d-flex">
									<li>$35.00</li>
									<li class="old_prize">$35.00</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
											</li>
											<li><a class="wishlist" href="wishlist.html"><i
														class="bi bi-shopping-cart-full"></i></a>
											</li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View"
													class="quickview modal-view detail-link" href="#productmodal"><i
														class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product.html"><img src="images/books/3.jpg"
										alt="product image"></a>
								<!--<a class="second__img animation1" href="single-product.html"><img
										src="images/books/4.jpg" alt="product image"></a>-->
								<div class="hot__box color--2">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product.html">mahavir shop</a></h4>
								<ul class="prize d-flex">
									<li>$35.00</li>
									<li class="old_prize">$35.00</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
											</li>
											<li><a class="wishlist" href="wishlist.html"><i
														class="bi bi-shopping-cart-full"></i></a>
											</li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View"
													class="quickview modal-view detail-link" href="#productmodal"><i
														class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product.html"><img src="images/books/5.jpg"
										alt="product image"></a>
								<!--<a class="second__img animation1" href="single-product.html"><img
										src="images/books/6.jpg" alt="product image"></a>-->
								<div class="hot__box">
									<span class="hot-label">BEST SALLER</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product.html">Bolenath shop</a></h4>
								<ul class="prize d-flex">
									<li>$40.00</li>
									<li class="old_prize">$35.00</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
											</li>
											<li><a class="wishlist" href="wishlist.html"><i
														class="bi bi-shopping-cart-full"></i></a>
											</li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View"
													class="quickview modal-view detail-link" href="#productmodal"><i
														class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product.html"><img src="images/books/7.jpg"
										alt="product image"></a>
								<!--<a class="second__img animation1" href="single-product.html"><img
										src="images/books/8.jpg" alt="product image"></a>-->
								<div class="hot__box">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product.html">dipak shop</a></h4>
								<ul class="prize d-flex">
									<li>$35.00</li>
									<li class="old_prize">$50.00</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
											</li>
											<li><a class="wishlist" href="wishlist.html"><i
														class="bi bi-shopping-cart-full"></i></a>
											</li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View"
													class="quickview modal-view detail-link" href="#productmodal"><i
														class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product.html"><img src="images/books/9.jpg"
										alt="product image"></a>
								<!--<a class="second__img animation1" href="single-product.html"><img
										src="images/books/10.jpg" alt="product image"></a>-->
								<div class="hot__box">
									<span class="hot-label">HOT</span>
								</div>
							</div>
							<div class="product__content content--center">
								<h4><a href="single-product.html">maheshvari shop</a></h4>
								<ul class="prize d-flex">
									<li>$35.00</li>
									<li class="old_prize">$35.00</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
											</li>
											<li><a class="wishlist" href="wishlist.html"><i
														class="bi bi-shopping-cart-full"></i></a>
											</li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View"
													class="quickview modal-view detail-link" href="#productmodal"><i
														class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<!-- Start Single Product -->
					<!-- Start Single Product -->
					<div class="product product__style--3">
						<div class="col-lg-3 col-md-4 col-sm-6 col-12">
							<div class="product__thumb">
								<a class="first__img" href="single-product.html"><img src="images/books/10.jpg"
										alt="product image"></a>
								<!--<a class="second__img animation1" href="single-product.html"><img
										src="images/books/2.jpg" alt="product image"></a>-->
								<div class="hot__box">
									<span class="hot-label">BEST SALER</span>
								</div>
							</div>
							<div class="product__content content--center content--center">
								<h4><a href="single-product.html">Ganesh shop</a></h4>
								<ul class="prize d-flex">
									<li>$50.00</li>
									<li class="old_prize">$35.00</li>
								</ul>
								<div class="action">
									<div class="actions_inner">
										<ul class="add_to_links">
											<li><a class="cart" href="cart.html"><i class="bi bi-shopping-bag4"></i></a>
											</li>
											<li><a class="wishlist" href="wishlist.html"><i
														class="bi bi-shopping-cart-full"></i></a>
											</li>
											<li><a class="compare" href="#"><i class="bi bi-heart-beat"></i></a></li>
											<li><a data-toggle="modal" title="Quick View"
													class="quickview modal-view detail-link" href="#productmodal"><i
														class="bi bi-search"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="product__hover--content">
									<ul class="rating d-flex">
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li class="on"><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
										<li><i class="fa fa-star-o"></i></li>
									</ul>
								</div>
							</div>
						</div>
						<!-- Start Single Product -->
					</div>
				</div>
				<!-- End Single Tab Content -->
			</div>
	</section>
	<!-- Start BEst Seller Area -->
	<!-- Start NEwsletter Area -->

	<!-- End NEwsletter Area -->
	<!-- Start Best Seller Area -->

	<div class="copyright__wrapper">
		<div class="container">
			<div class="row">
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="copyright">
						<div class="copy__right__inner text-left">
							<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Shop
									Finder.</a> All Rights
								Reserved</p>
						</div>
					</div>
				</div>
				<div class="col-lg-6 col-md-6 col-sm-12">
					<div class="payment text-right">
						<img src="images/icons/payment.png" alt="" />
					</div>
				</div>
			</div>
		</div>
	</div>
	</footer>
	<!-- //Footer Area -->
	<!-- QUICKVIEW PRODUCT -->
	<div id="quickview-wrapper">
		<!-- Modal -->
		<div class="modal fade" id="productmodal" tabindex="-1" role="dialog">
			<div class="modal-dialog modal__container" role="document">
				<div class="modal-content">
					<div class="modal-header modal__header">
						<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span
								aria-hidden="true">&times;</span></button>
					</div>
					<div class="modal-body">
						<div class="modal-product">
							<!-- Start product images -->
							<div class="product-images">
								<div class="main-image images">
									<img alt="big images" src="images/product/big-img/1.jpg">
								</div>
							</div>
							<!-- end product images -->
							<div class="product-info">
								<h1>Simple Fabric Bags</h1>
								<div class="rating__and__review">
									<ul class="rating">
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
										<li><span class="ti-star"></span></li>
									</ul>
									<div class="review">
										<a href="#">4 customer reviews</a>
									</div>
								</div>
								<div class="price-box-3">
									<div class="s-price-box">
										<span class="new-price">$17.20</span>
										<span class="old-price">$45.00</span>
									</div>
								</div>
								<div class="quick-desc">
									Designed for simplicity and made from high quality materials. Its sleek geometry
									and material combinations creates a modern look.
								</div>
								<div class="select__color">
									<h2>Select color</h2>
									<ul class="color__list">
										<li class="red"><a title="Red" href="#">Red</a></li>
										<li class="gold"><a title="Gold" href="#">Gold</a></li>
										<li class="orange"><a title="Orange" href="#">Orange</a></li>
										<li class="orange"><a title="Orange" href="#">Orange</a></li>
									</ul>
								</div>
								<div class="select__size">
									<h2>Select size</h2>
									<ul class="color__list">
										<li class="l__size"><a title="L" href="#">L</a></li>
										<li class="m__size"><a title="M" href="#">M</a></li>
										<li class="s__size"><a title="S" href="#">S</a></li>
										<li class="xl__size"><a title="XL" href="#">XL</a></li>
										<li class="xxl__size"><a title="XXL" href="#">XXL</a></li>
									</ul>
								</div>
								<div class="social-sharing">
									<div class="widget widget_socialsharing_widget">
										<h3 class="widget-title-modal">Share this product</h3>
										<ul class="social__net social__net--2 d-flex justify-content-start">
											<li class="facebook"><a href="#" class="rss social-icon"><i
														class="zmdi zmdi-rss"></i></a></li>
											<li class="linkedin"><a href="#" class="linkedin social-icon"><i
														class="zmdi zmdi-linkedin"></i></a></li>
											<li class="pinterest"><a href="#" class="pinterest social-icon"><i
														class="zmdi zmdi-pinterest"></i></a></li>
											<li class="tumblr"><a href="#" class="tumblr social-icon"><i
														class="zmdi zmdi-tumblr"></i></a></li>
										</ul>
									</div>
								</div>
								<div class="addtocart-btn">
									<a href="#">Add to cart</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- END QUICKVIEW PRODUCT -->
	</div>

	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>

</body>

</html>