<!-- // php code for handling session (5-21)
//Redirecting to Add_More_Shop_Images.html page after setting session else print error message. -->

<?php

session_start();

if (isset($_POST['next'])){
    //creating session for perserving form data.

    foreach($_POST as $key => $value )
    {
        $_SESSION['info'][$key] = $value;
    }

    $keys = array_keys($_SESSION['info']);

    if(in_array('next', $keys))
    {
        unset($_SESSION['info']['next']);
    }

    header("Location:../Add_More_Shop_Images.html");
}
else{
    //echo'Error in Session';
}

?>
<!doctype html>
<html class="no-js" lang="en-us">
    <!-- Linking all CSS, JS, Icons and Images used in page -->
	<head>
		<meta charset="utf-8">
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title>Shop Registration | Shop Finder </title>
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<!-- php -->
		<link rel="stylesheet" href="../Coding/php/ShopRegistration.php"> 

		<!-- Favicons -->
		<link rel="shortcut icon" href="../images/favicon.ico">
		<link rel="apple-touch-icon" href="../images/icon.png">

		<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
		<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800"
			rel="stylesheet">
		<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

		<!-- Stylesheets -->
		<link rel="stylesheet" href="../css/bootstrap.min.css">
		<link rel="stylesheet" href="../css/plugins.css">
		<link rel="stylesheet" href="../style.css">

		<!-- Cusom css -->
		<link rel="stylesheet" href="../css/custom.css">

		<!-- Modernizer js -->
		<script src="../js/vendor/modernizr-3.5.0.min.js"></script>

        <!-- JS Files -->
		<script src="js/vendor/jquery-3.2.1.min.js"></script>
		<script src="js/popper.min.js"></script>
		<script src="js/bootstrap.min.js"></script>
		<script src="js/plugins.js"></script>
		<script src="js/active.js"></script>

	</head>

	<body>
		<!--[if lte IE 9]>
			<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
		<![endif]-->

		<!-- Main wrapper -->
		<div class="wrapper" id="wrapper">
			<!-- Header -->
			<header id="wn__header" class="oth-page header__area header__absolute sticky__header">
				<div class="container-fluid">
					<div class="row">

                        <!-- Website Logo -->
						<div class="col-md-4 col-sm-4 col-7 col-lg-2">
							<div class="logo">
								<a href="../index.html">
									<img src="../images/logo/logo.png" alt="logo images">
								</a>
							</div>
						</div>

                        <!-- Adding Nav bar -->
						<div class="col-lg-8 d-none d-lg-block">
							<nav class="mainmenu__nav">
								<ul class="meninmenu d-flex justify-content-start">
									<li class="drop with--one--item"><a href="../index.html">Home</a></li>
									<li class="drop"><a href="#">Shop</a>
										<div class="megamenu mega03">
											<ul class="item item03">
												<li class="title">Shop Layout</li>
												<li><a href="../shop-grid.html">Shop Grid</a></li>
												<li><a href="../single-product.html">Single Product</a></li>
											</ul>
											<ul class="item item03">
												<li class="title">Shop Page</li>
												<li><a href="../my-account.html">My Account</a></li>
												<li><a href="../cart.html">Cart Page</a></li>
												<li><a href="../checkout.html">Checkout Page</a></li>
												<li><a href="../wishlist.html">Wishlist Page</a></li>
												<li><a href="../error404.html">404 Page</a></li>
												<li><a href="../faq.html">Faq Page</a></li>
											</ul>
											<ul class="item item03">
												<li class="title">Bargain Books</li>
												<li><a href="../shop-grid.html">Bargain Bestsellers</a></li>
												<li><a href="../shop-grid.html">Activity Kits</a></li>
												<li><a href="../shop-grid.html">B&N Classics</a></li>
												<li><a href="../shop-grid.html">Books Under $5</a></li>
												<li><a href="../shop-grid.html">Bargain Books</a></li>
											</ul>
										</div>
									</li>
									<li class="drop"><a href="../shop-grid.html">Books</a>
										<div class="megamenu mega03">
											<ul class="item item03">
												<li class="title">Categories</li>
												<li><a href="../shop-grid.html">Biography </a></li>
												<li><a href="../shop-grid.html">Business </a></li>
												<li><a href="../shop-grid.html">Cookbooks </a></li>
												<li><a href="../shop-grid.html">Health & Fitness </a></li>
												<li><a href="../shop-grid.html">History </a></li>
											</ul>
											<ul class="item item03">
												<li class="title">Customer Favourite</li>
												<li><a href="../shop-grid.html">Mystery</a></li>
												<li><a href="../shop-grid.html">Religion & Inspiration</a></li>
												<li><a href="../shop-grid.html">Romance</a></li>
												<li><a href="../shop-grid.html">Fiction/Fantasy</a></li>
												<li><a href="../shop-grid.html">Sleeveless</a></li>
											</ul>
											<ul class="item item03">
												<li class="title">Collections</li>
												<li><a href="../shop-grid.html">Science </a></li>
												<li><a href="../shop-grid.html">Fiction/Fantasy</a></li>
												<li><a href="../shop-grid.html">Self-Improvemen</a></li>
												<li><a href="../shop-grid.html">Home & Garden</a></li>
												<li><a href="../shop-grid.html">Humor Books</a></li>
											</ul>
										</div>
									</li>
									<li class="drop"><a href="../shop-grid.html">Kids</a>
										<div class="megamenu mega02">
											<ul class="item item02">
												<li class="title">Top Collections</li>
												<li><a href="../shop-grid.html">American Girl</a></li>
												<li><a href="../shop-grid.html">Diary Wimpy Kid</a></li>
												<li><a href="../shop-grid.html">Finding Dory</a></li>
												<li><a href="../shop-grid.html">Harry Potter</a></li>
												<li><a href="../shop-grid.html">Land of Stories</a></li>
											</ul>
											<ul class="item item02">
												<li class="title">More For Kids</li>
												<li><a href="../shop-grid.html">B&N Educators</a></li>
												<li><a href="../shop-grid.html">B&N Kids' Club</a></li>
												<li><a href="../shop-grid.html">Kids' Music</a></li>
												<li><a href="../shop-grid.html">Toys & Games</a></li>
												<li><a href="../shop-grid.html">Hoodies</a></li>
											</ul>
										</div>
									</li>
									<li class="drop"><a href="#">Pages</a>
										<div class="megamenu dropdown">
											<ul class="item item01">
												<li><a href="about.html">About Page</a></li>
												<li class="label2"><a href="../portfolio.html">Portfolio</a>
													<ul>
														<li><a href="../portfolio.html">Portfolio</a></li>
														<li><a href="../portfolio-details.html">Portfolio Details</a></li>
													</ul>
												</li>
												<li><a href="../my-account.html">My Account</a></li>
												<li><a href="../cart.html">Cart Page</a></li>
												<li><a href="../checkout.html">Checkout Page</a></li>
												<li><a href="../wishlist.html">Wishlist Page</a></li>
												<li><a href="../error404.html">404 Page</a></li>
												<li><a href="../faq.html">Faq Page</a></li>
												<li><a href="../team.html">Team Page</a></li>
											</ul>
										</div>
									</li>
									<li class="drop"><a href="../blog.html">Blog</a>
										<div class="megamenu dropdown">
											<ul class="item item01">
												<li><a href="../blog.html">Blog Page</a></li>
												<li><a href="../blog-details.html">Blog Details</a></li>
											</ul>
										</div>
									</li>
									<li><a href="../contact.html">Contact</a></li>
								</ul>
							</nav>
						</div>

                        <!-- Top Right sided controls like Search, Faviorites, Cart and Account Management  -->
						<div class="col-md-8 col-sm-8 col-5 col-lg-2">
							<ul class="header__sidebar__right d-flex justify-content-end align-items-center">
								<li class="shop_search"><a class="search__active" href="#"></a></li>
								<li class="wishlist"><a href="#"></a></li>
								<li class="shopcart"><a class="cartbox_active" href="#"><span
											class="product_qun">3</span></a>
									<!-- Start Shopping Cart -->
									<div class="block-minicart minicart__active">
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
												<a class="checkout__btn" href="../cart.html">Go to Checkout</a>
											</div>
											<div class="single__items">
												<div class="miniproduct">
													<div class="item01 d-flex">
														<div class="thumb">
															<a href="../product-details.html"><img
																	src="../images/product/sm-img/1.jpg"
																	alt="product images"></a>
														</div>
														<div class="content">
															<h6><a href="../product-details.html">Voyage Yoga Bag</a></h6>
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
															<a href="../product-details.html"><img
																	src="../images/product/sm-img/3.jpg"
																	alt="../product images"></a>
														</div>
														<div class="content">
															<h6><a href="../product-details.html">Impulse Duffle</a></h6>
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
									</div>
									<!-- End Shopping Cart -->
								</li>

								<li class="setting__bar__icon"><a class="setting__active" href="#"></a>
									<div class="searchbar__content setting__block">
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
											</div>
											<div class="switcher-currency">
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
											</div>
											<div class="switcher-currency">
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
											</div>
											<div class="switcher-currency">
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
											</div>
										</div>
									</div>
								</li>
							</ul>
						</div>
					</div>

                    <!-- Mobile Campatible CSS and JS is used to give user a bettter experince -->
					<!-- Start Mobile Menu -->
					<div class="row d-none">
						<div class="col-lg-12 d-none">
							<nav class="mobilemenu__nav">
								<ul class="meninmenu">
									<li><a href="../index.html">Home</a></li>
									<li><a href="#">Pages</a>
										<ul>
											<li><a href="../about.html">About Page</a></li>
											<li><a href="../portfolio.html">Portfolio</a>
												<ul>
													<li><a href="../portfolio.html">Portfolio</a></li>
													<li><a href="../portfolio-details.html">Portfolio Details</a></li>
												</ul>
											</li>
											<li><a href="../my-account.html">My Account</a></li>
											<li><a href="../cart.html">Cart Page</a></li>
											<li><a href="../checkout.html">Checkout Page</a></li>
											<li><a href="../wishlist.html">Wishlist Page</a></li>
											<li><a href="../error404.html">404 Page</a></li>
											<li><a href="../faq.html">Faq Page</a></li>
											<li><a href="../team.html">Team Page</a></li>
										</ul>
									</li>
									<li><a href="../shop-grid.html">Shop</a>
										<ul>
											<li><a href="../shop-grid.html">Shop Grid</a></li>
											<li><a href="../single-product.html">Single Product</a></li>
										</ul>
									</li>
									<li><a href="../blog.html">Blog</a>
										<ul>
											<li><a href="../blog.html">Blog Page</a></li>
											<li><a href="../blog-details.html">Blog Details</a></li>
										</ul>
									</li>
									<li><a href="../contact.html">Contact</a></li>
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
            <!-- Full Screen will be covered to show search -->
			<div class="box-search-content search_active block-bg close__top">
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

            <!-- Adding page Title and access path in the center -->
			<!-- Start Bradcaump area -->
			<div class="ht__bradcaump__area bg-image--6">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="bradcaump__inner text-center">
								<h2 class="bradcaump-title">SHOP</h2>
								<nav class="bradcaump-content">
									<a class="breadcrumb_item" href="../index.html">Home</a>
									<span class="brd-separetor">/</span>
									<span class="breadcrumb_item active">Shop Registration</span>
								</nav>
							</div>
						</div>
					</div>
				</div>
			</div>
			<!-- End Bradcaump area -->


			<!-- Start of Shop Registration Form
            In this form is of two page, First Page there are necessary field for registering shop and all the field's data will be stored in session and will be redirected to next page where show owner can upload more Shop images. On submmiting the next page form, all fields data will be stored in Database. Which can be edited later on by the shop owner, if needed -->

			<section class="my_account_area pt--80 pb--55 bg--white">
				<div class="container">
					<div class="row h-100 justify-content-center align-items-center">
						<div class="col-lg-6 col-12">
							<div class="my_account_wrapper">
								<h3 class="account__title" align="center">Shop Registration</h3>
								<form action="../php/Add_More_Shop_Images.php" method="POST">
									<div class="account__form">
										<div class="input__box">
											<label>Shop Name <span>*</span></label>
											<input type="text"     name ="txtShopName"																
												 <?= isset($_SESSION['info']['txtShopName'])? $_SESSION['info']['txtShopName'] : ''?> >
											

										</div>
										<div class="input__box">
											<label>Shop Phone Number<span>*</span></label>
											<input type="number" minlength="10" maxlength="14"   
											pattern="[0-9]{14}" placeholder="Please include your Country Code like +91 xxxxxxxxxx" name ="txtShopPhoneNumber"
                                            
												<?= isset($_SESSION['info']['txtShopPhoneNumber']) ? $_SESSION['info']['txtShopPhoneNumber'] : ''?> >
                                            

										</div>
										<div class="input__box">
											<label>Address<span>*</span></label>
											<input type="text"    placeholder="Street address" name ="txtShopAddress" 
                                            
											
											<?= isset($_SESSION['info']['txtShopAddress']) ? $_SESSION['info']['txtShopAddress'] : ''?>
										</div>


										<div class="input__box">
											<label>Postcode / ZIP <span>*</span></label>
											<input type="number"    name ="txtShopPostcode" 
                                            
                                            <?= isset($_SESSION['info']['txtShopPostcode']) ? $_SESSION['info']['txtShopPostcode'] : ''?>>
										</div>



										<!-- <div class="input__box">
											<label>Location<span>*</span></label>
											<input type="text">
										</div> -->
										<div class="input__box">
											<label>Location<span>*</span></label>
											<input type="text"    name ="txtShopLocation" 
											<?= isset($_SESSION['info']['txtShopLocation']) ? $_SESSION['info']['txtShopLocation'] : ''?>>
											
										</div>

										
										<!--
														<div class="input__box">
															<label>Shop Image2 <span>*</span></label>
															<input type="file" id="myfile2" name="myfile" >
														</div>

														<div class="input__box">
															<label>Shop Image3 <span>*</span></label>
															<input type="file" id="myfile3" name="myfile" >
														</div>
										-->

										<!--	want to add more images -->
										<!-- <div class="form__btn" style="padding:3%" align="right"
											onclick="location.href='Add_More_Shop_Images.html'">
											<button>Add More Images</button>
										</div> -->

										<div class="input__box">
											<label>Shop Description <span>*</span></label>
											<!-- <input type="textarea" rows> -->
											<textarea rows="4" cols="120"    name ="txtShopDescription" 
												<?= isset($_SESSION['info']['txtShopDescription']) ? $_SESSION['info']['txtShopDescription'] : ''?>
												>
											</textarea>
											<small> Max 500 words. </small>
										</div>

										<div class="input__box">
											<label>Shop Category<span>*</span></label>
											<select class="select__option"    name ="optShopCategory"
											<?= isset($_SESSION['info']['optShopCategory']) ? $_SESSION['info']['optShopCategory'] : ''?>
											>
												<option>Select a Category</option>
												<option>Electronic</option>
												<option>Food</option>
												<option>Hardware</option>
												<option>Clothes</option>
												<option>Cosmetics</option>
												<option>General Store</option>
											</select>
										</div>

										<div class="input__box ">
											<label>Opening Time <span>*</span></label>
											<!-- <input type="text"> -->
											<input type="time" min="08:00" max="23:00"    name ="lstShopOpeningTime"
											
											<?= isset($_SESSION['info']['lstShopOpeningTime']) ? $_SESSION['info']['lstShopOpeningTime'] : ''?>
											
											>
											<div class="input__box ">
												<small>Shop hours are 8:00 am to 11:00 pm</small>
											</div>
										</div>

										<div class="input__box ">
											<label>Closing Time <span>*</span></label>
											<!-- <input type="text"> -->
											<input type="time" min="08:00" max="23:00"    name ="lstShopClosingTime"
											<?= isset($_SESSION['info']['lstShopClosingTime']) ? $_SESSION['info']['lstShopClosingTime'] : ''?>
											>
										</div>

										<div class="input__box">
											<label>Shop Duration<span>*</span></label>
											<select class="select__option"    name ="optShopDuration"
											<?= isset($_SESSION['info']['optShopDuration']) ? $_SESSION['info']['optShopDuration'] : ''?>
											>
												<option>Select a Duration</option>
												<option>Permanent</option>
												<option>Temporary</option>
												<option>Event </option>
												</option>Sessional</option>
												<option>Tent</option>
											</select>
										</div>

										<div class="input__box">
											<label>Shop Image <span>*</span></label>
											<!-- <input type="text"> -->
											<input type="file" id="myfile1" name="myfile"     accept="image/jpg, image/jpeg, image/png" name ="txtShopImg1"
											<?= isset($_SESSION['info']['txtShopImg1']) ? $_SESSION['info']['txtShopImg1'] : ''?>
											>
											<small> Select a image to Display shop main Image. You can upload more images by going next</small>
										</div>

										<div class="form__btn" style="padding:3%" align="center"
											onclick="location1.href='Add_More_Shop_Images'">
											<button name ="next">Next</button>
										</div>

									</div>
								</form>
							</div>
						</div>

					</div>
				</div>
			</section>
		</div>
		</div>
		<div class="col-lg-6 col-12">

		</div>
		</div>
		</section>

        <!-- The below serves as the footer as it used in most of all pages. It Comprises of Social media links of the shop owner, other useful links like treding, wishlist, contact etc.
        At ht very bottom there is information about developer.  -->
		<!-- End My Account Area -->
		<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="../index.html">
										<img src="../images/logo/3.png" alt="logo">
									</a>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have
										suffered duskam alteration variations of passages</p>
								</div>
								<div class="footer__content">
									<ul class="social__net social__net--2 d-flex justify-content-center">
										<li><a href="#"><i class="bi bi-facebook"></i></a></li>
										<li><a href="#"><i class="bi bi-google"></i></a></li>
										<li><a href="#"><i class="bi bi-twitter"></i></a></li>
										<li><a href="#"><i class="bi bi-linkedin"></i></a></li>
										<li><a href="#"><i class="bi bi-youtube"></i></a></li>
									</ul>
									<ul class="mainmenu d-flex justify-content-center">
										<li><a href="../index.html">Trending</a></li>
										<li><a href="../index.html">Best Seller</a></li>
										<li><a href="../index.html">All Product</a></li>
										<li><a href="../index.html">Wishlist</a></li>
										<li><a href="../index.html">Blog</a></li>
										<li><a href="../index.html">Contact</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> D2G3, All Rights Reserved</p>
								</div>
							</div>
						</div>
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="payment text-right">
								<img src="../images/icons/payment.png" alt="" />
							</div>
						</div>
					</div>
				</div>
			</div>
		</footer>
		<!-- //Footer Area -->

		</div>
		<!-- //Main wrapper -->


	</body>


</html>