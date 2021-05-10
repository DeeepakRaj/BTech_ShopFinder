<?php
//connection to database.
include("auth.php");
	include("connection.php");
	//for session management
 // session_start();
 //if(!isset($_SESSION['uid']) || $_SESSION['uid'] == "")
   //     header("Location:userlogin.php");
   //to get SysId from previous page
if(isset($_GET['shp_id']))
	{
        error_reporting(0);
		$Id=$_GET['shp_id'];
		//query to fetch data from tblshopregistration table.
        $sql = "Select * from tblshopregistration where SysId=" . $Id;
       
		$res = mysqli_query($conn,$sql);
        $row = mysqli_fetch_array($res);
        
       
  }
  
  ?>

<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Shop-Single </title>
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
								<li class="drop"><a href="shopRegistration1.php">Shop Registration</a>
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
								<li class="drop"><a href="shop-grid.php">Categories</a>
									<div class="megamenu dropdown">
										<ul class="item item03">


											<li class="title">Categories</li>
											<li>
											
											
											<?php
                                                include("connection.php");
                                                $sql = "Select * from tblcategorytable";
                                                $catRes = mysqli_query($conn,$sql);
                                                while($catRow = mysqli_fetch_array($catRes))
                                                {
                                                    echo '<li style="text-align:center"><a href="shop-grid.php?cat='. $catRow['SysId'] . '" >' . $catRow['CatName'] . '</a></li>';
                                                }
                                            ?>
											
											
											
											</li>
											
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
								<li class="drop"><a href="profile.php">My Profile</a>
									<!--<div class="megamenu dropdown">
										<ul class="item item01">
											<li><a href="blog.html">Blog Page</a></li>
											<li><a href="blog-details.html">Blog Details</a></li>
										</ul>
									</div>-->
								</li>
								<li><a href="myshops.php">My shop</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="logout.php">logout</a></li>
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
									<li><a href="index.php">Home</a></li>
									<li><a href="shopRegistration1.php">Shop Registration</a>
									</li>


									<li><a href="shop-grid.php">Categories</a>

										<ul>

											<li><?php
                                                include("connection.php");
                                                $sql = "Select * from tblShopcategorytable";
                                                $catRes = mysqli_query($conn,$sql);
                                                while($catRow = mysqli_fetch_array($catRes))
                                                {
                                                    echo '<li ><a href="shop-grid.php?cat='. $catRow['cat_id'] . '" >' . $catRow['cat_name'] . '</a></li>';
                                                }
                                            ?></li>
											
										</ul>
									</li>
									<li><a href="profile.php">My Profile</a></li>
									<li><a href="myshops.php">My Shop</a></li>
									<li><a href="contact.html">Contact</a></li>
									<li><a href="logout.php">Logout</a></li>
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
			<form id="search_mini_form" class="minisearch" method="post" action="shop-grid.php">
				<div class="field__search">
					<input type="text" id="srchFld" name="srchFld" placeholder="Search entire store here...">
					<div class="action">
					<button type="submit" id="btnearchSubmit" name="btnSearchSubmit" class="zmdi zmdi-search"></button>
					<!--		<a href="#"><i class="zmdi zmdi-search"></i></a>-->
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
		<!-- Start Bradcaump area -->
		<div class="ht__bradcaump__area"></div>

		<!-- End Bradcaump area -->
		<!-- Start main Content -->
		<div class="maincontent bg--white pt--80 pb--55">
			<div class="container">
				<div class="row">
					<div class="col-lg-9 col-12">
						<div class="wn__single__product">
							<div class="row">
								<div class="col-lg-6 col-12">
									<div class="wn__fotorama__wrapper">
										<div class="fotorama wn__fotorama__action" data-nav="thumbs">
											<a href="<?php echo $row['ShopImg1']; ?>"><img src="<?php echo $row['ShopImg1']; ?>" alt=""></a>
											<?php
                              				    $sql = "Select * from tblshopimage where SrId=" . $Id;
                               				    $tres = mysqli_query($conn,$sql);
                                				while($trow = mysqli_fetch_array($tres))
                               				    {
                                 				   echo '<a href="' . $trow['ImgUrl'] . '"> <img " src="' . $trow['ImgUrl'] . '" alt=""/></a>';
												}	?>
											
										</div>
									</div>
								</div>
								<div class="col-lg-6 col-12">
									<div class="product__info__main">
									<!--query to display shopname-->
										<h1><?php echo $row['ShopName']; ?></h1>
										<br>
										<div class="product-reviews-summary d-flex">
											<ul class="rating-summary d-flex">
												<li><i class="zmdi zmdi-star-outline"></i></li>
												<li><i class="zmdi zmdi-star-outline"></i></li>
												<li><i class="zmdi zmdi-star-outline"></i></li>
												<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
												<li class="off"><i class="zmdi zmdi-star-outline"></i></li>
											</ul>
										</div>
										<br>
										<div class="price-box">
										<!--query to display shoplocation-->
									
											<span><?php echo $row['ShopLocation']; ?></span>

										</div>
										<!--<div class="product__overview">
											<p>Ideal for cold-weather training or work outdoors, the Chaz Hoodie
												promises superior warmth with every wear. Thick material blocks out the
												wind as ribbed cuffs and bottom band seal in body heat.</p>
											<p>Ideal for cold-weather training or work outdoors, the Chaz Hoodie
												promises superior warmth with every wear. </p>
										</div>-->

										<div class="box-tocart d-flex">



											<div class="product-addto-links clearfix">
												<p>

												</p>
											</div>
										</div>
										<div class="product_meta">
											<h5 class="posted_in">Categories:</h5>
											<!--query to display shopcategory-->
									
											
											

											<?php
                                                include('connection.php');
												$sql = "Select * from tblcategorytable" ;
											  $sql .= " Where SysId in (select ShopCategory from tblshopregistration where SysId=$Id) ";
											   //   $sql .= " and cat_id<>" . $Id;
												  $res = mysqli_query($conn,$sql);
												  while($row1 = mysqli_fetch_array($res))
                                                {
                                                    echo '<a href="shop-grid.php?cat='. $row1['SysId'] . '" >' . $row1['CatName'] . '</a>';
                                                }
                                            ?>









										

										</div>



										<br>
										<div><!--query to display shopphone-->
									
											<h6>Mobile No.</h6><a><?php echo $row['ShopPhone']; ?></a>

										</div>
										<br>
										<div><!--query to display shopOctime-->
									
											<h6>Shop Timing</h6><a><?php echo $row['ShopOctime']; ?></a>

										</div>
										<br>
										<div><!--query to display shopTemp-->
									
											<h6>Shop Duration</h6><a><?php echo $row['ShopTemp']; ?></a>

										</div>
										<!--<div class="product-share">
											<ul>

												<li class="categories-title">Share :</li>
												<li>
													<a href="#">
														<i class="icon-social-twitter icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-tumblr icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-facebook icons"></i>
													</a>
												</li>
												<li>
													<a href="#">
														<i class="icon-social-linkedin icons"></i>
													</a>
												</li>
											</ul>

										</div>-->
										<br>
										<div class="box-tocart d-flex">
											<div class="product-addto-links clearfix">
												<div class="addtocart__actions">
					
												<input type="button" class="tocart" onclick="location.href='mailto:d19ce169@charusat.edu.in?subject=Report Shop&body=Reason To Report Shop';" value="Report Shop" />
													<!--	<button class="tocart" ></button>-->
												</div>
												<br>
												<!--	<div class="addtocart__actions">
													<button class="tocart" type="submit">Save
														Shop</button>
												</div>-->

											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="product__info__detailed">
							<div class="pro_details_nav nav justify-content-start" role="tablist">
								<a class="nav-item nav-link active" data-toggle="tab" href="#nav-details"
									role="tab">Details</a>
								<a class="nav-item nav-link" data-toggle="tab" href="#nav-review" role="tab">Reviews</a>
							</div>
							<div class="tab__container">
								<!-- Start Single Tab Content -->
								<div class="pro__tab_label tab-pane fade show active" id="nav-details" role="tabpanel">
									<div class="description__attribute">
									<!--query to display shopDescription-->
									
										<p><?php echo $row['ShopDescription']; ?></p>
									<!--	<ul>
											<li>• Two-tone gray heather hoodie.</li>
											<li>• Drawstring-adjustable hood. </li>
											<li>• Machine wash/dry.</li>
										</ul>
										<p></p>-->
									</div>

								</div>
								<!-- End Single Tab Content -->
								<!-- Start Single Tab Content -->
								<div class="pro__tab_label tab-pane fade" id="nav-review" role="tabpanel">
									<div class="review__attribute">
										<h2>Customers Ratings</h2>
										<div class="review__ratings__type d-flex">
											<div class="review-ratings">
												<div class="rating-summary d-flex">
													<span>Ratings</span>
													<ul class="rating d-flex">
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
													</ul>
												</div>

												<!--<div class="rating-summary d-flex">
													<span>Price</span>
													<ul class="rating d-flex">
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
													</ul>
												</div>
												<div class="rating-summary d-flex">
													<span>value</span>
													<ul class="rating d-flex">
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
													</ul>
												</div>-->
											</div>

										</div>
									</div>
									<div class="review-fieldset">
										<h2>You're review</h2>
										<!--<h3>Shop Name</h3>-->
										<div class="review-field-ratings">
											<div class="product-review-table">
												<div class="review-field-rating d-flex">
													<span>My Rating</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
													</ul>
												</div>
												<!--<div class="review-field-rating d-flex">
													<span>Price</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
													</ul>
												</div>
												<div class="review-field-rating d-flex">
													<span>Value</span>
													<ul class="rating d-flex">
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
														<li class="off"><i class="zmdi zmdi-star"></i></li>
													</ul>
												</div>-->
											</div>
										</div>
										<div class="review_form_field">
											<!--<div class="input__box">
												<span>Nickname</span>
												<input id="nickname_field" type="text" name="nickname">
											</div>
											<div class="input__box">
												<span>Summary</span>
												<input id="summery_field" type="text" name="summery">
											</div>-->
											<div class="input__box">
												<span>Review</span>
												<textarea name="review"></textarea>
											</div>
											<div class="review-form-actions">
												<button>Submit Review</button>
											</div>
										</div>
									</div>
								</div>
								<!-- End Single Tab Content -->
							</div>
						</div>
						<div class="wn__related__product pt--80 pb--50">
							<div class="section__title text-center">
								<h2 class="title__be--2">Related Shop</h2>
							</div>
							<div class="row mt--60">
								<div class="productcategory__slide--2 arrows_style owl-carousel owl-theme">
									<!-- Start Single Product -->
									<?php
                                $query = "Select * from tblshopregistration";
								$query .= " Where ShopCategory in (select ShopCategory from tblshopregistration where SysId=$Id) ";
							    $result = mysqli_query($conn, $query);
                                while($rows = mysqli_fetch_array($result))
                                {
                                    
									//$id=$rows['SysId'];
                            ?>
				<div class="product product__style--3">
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
						
							<a class="first__img"  href="single-product.php?shp_id=<?php echo $rows['SysId'];?> "><img src="<?php echo $rows['ShopImg1'];?>"
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
								<li>
								<?php
                                 			   include('connection.php');
                                  			    $sql = "Select * from tblcategorytable" ;
                                 			   $sql .= " Where SysId in (select ShopCategory from tblshopregistration where SysId=$Id) ";
                               				  //   $sql .= " and cat_id<>" . $Id;
                              				      $res = mysqli_query($conn,$sql);
                                  				  while($row1 = mysqli_fetch_array($res))
                                  				  {
                                  				      echo $row1['CatName'];
                                  				  }
                                   				 ?>
								
								
								</li>
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
								<!--	<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img
													src="images/books/3.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product.html"><img
													src="images/books/4.jpg" alt="product image"></a>
											<div class="hot__box color--2">-->
												<!--<span class="hot-label">HOT</span>-->
										<!--	</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">The Remainng</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart.html"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="wishlist.html"><i
																	class="bi bi-shopping-cart-full"></i></a>
														</li>
														<li><a class="compare" href="#"><i
																	class="bi bi-heart-beat"></i></a>
														</li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
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
									</div>-->
									<!-- Start Single Product -->
									<!-- Start Single Product -->
									<!--<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img
													src="images/books/7.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product.html"><img
													src="images/books/8.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">Lando</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">$50.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart.html"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="wishlist.html"><i
																	class="bi bi-shopping-cart-full"></i></a>
														</li>
														<li><a class="compare" href="#"><i
																	class="bi bi-heart-beat"></i></a>
														</li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
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
									</div>-->
									<!-- Start Single Product -->
									<!-- Start Single Product -->
									<!--<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img
													src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product.html"><img
													src="images/books/10.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">Doctor Wldo</a></h4>
											<ul class="prize d-flex">
												<li>$35.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart.html"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="wishlist.html"><i
																	class="bi bi-shopping-cart-full"></i></a>
														</li>
														<li><a class="compare" href="#"><i
																	class="bi bi-heart-beat"></i></a>
														</li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
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
									</div>-->
									<!-- Start Single Product -->
									<!-- Start Single Product -->
										<!--<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img
													src="images/books/11.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product.html"><img
													src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product.html">Animals Life</a></h4>
											<ul class="prize d-flex">
												<li>$50.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart.html"><i
																	class="bi bi-shopping-bag4"></i></a></li>
														<li><a class="wishlist" href="wishlist.html"><i
																	class="bi bi-shopping-cart-full"></i></a>
														</li>
														<li><a class="compare" href="#"><i
																	class="bi bi-heart-beat"></i></a>
														</li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
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
									</div>-->
									<!-- Start Single Product -->
									<!-- Start Single Product -->

									<!-- Start Single Product -->
									<!-- Start Single Product -->
									<!--<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img
													src="images/books/9.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product.html"><img
													src="images/books/10.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">HOT</span>
											</div>
										</div>
										<div class="product__content content--center">
											<h4><a href="single-product.html">Raj Mobile shop</a></h4>
											<ul class="prize d-flex">
												<li>Computers</li>-->
												<!--<li class="old_prize">$35.00</li>-->
										<!--	</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li>
															<h6>Vip Circle,kapodra,varacha,Surat,gujart</h6>

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
									</div>-->
									<!-- Start Single Product -->
									<!-- Start Single Product -->
								<!--	<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img
													src="images/books/11.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product.html"><img
													src="images/books/2.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product.html">Keshav Travels</a></h4>
											<ul class="prize d-flex">
												<li>Travel</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li>
															<h6>Rachna circle,kapodra,kamrej</h6>

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
									</div>-->
									<!-- Start Single Product -->
									<!-- Start Single Product -->
								<!--	<div class="product product__style--3 col-lg-4 col-md-4 col-sm-6 col-12">
										<div class="product__thumb">
											<a class="first__img" href="single-product.html"><img
													src="images/books/1.jpg" alt="product image"></a>
											<a class="second__img animation1" href="single-product.html"><img
													src="images/books/6.jpg" alt="product image"></a>
											<div class="hot__box">
												<span class="hot-label">BEST SALER</span>
											</div>
										</div>
										<div class="product__content content--center content--center">
											<h4><a href="single-product.html">Olio Madu</a></h4>
											<ul class="prize d-flex">
												<li>$50.00</li>
												<li class="old_prize">$35.00</li>
											</ul>
											<div class="action">
												<div class="actions_inner">
													<ul class="add_to_links">
														<li><a class="cart" href="cart.html"><i
																	class="bi bi-shopping-bag4"></i></a>
														</li>
														<li><a class="wishlist" href="wishlist.html"><i
																	class="bi bi-shopping-cart-full"></i></a>
														</li>
														<li><a class="compare" href="#"><i
																	class="bi bi-heart-beat"></i></a>
														</li>
														<li><a data-toggle="modal" title="Quick View"
																class="quickview modal-view detail-link"
																href="#productmodal"><i class="bi bi-search"></i></a>
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
									</div>-->
									<!-- Start Single Product -->
								</div>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-12 md-mt-40 sm-mt-40">
						<div class="shop__sidebar">
							<aside class="wedget__categories poroduct--cat">
								<h3 class="wedget__title" style="text-align:center">Shop Categories</h3>
								<ul>
								<?php
                                                include("connection.php");
                                                $sql = "Select * from tblcategorytable";
                                                $catRes = mysqli_query($conn,$sql);
                                                while($catRow = mysqli_fetch_array($catRes))
                                                {
                                                    echo '<li style="text-align:center"><a href="shop-grid.php?cat='. $catRow['SysId'] . '" >' . $catRow['CatName'] . '</a></li>';
                                                }
                                            ?>
								</ul>
							</aside>



						</div>
					</div>
				</div>
			</div>
		</div>
		<!-- End main Content -->
		<!-- Start Search Popup -->
		<div class="brown--color box-search-content search_active block-bg close__top">
			<form id="search_mini_form" class="minisearch" method="post" action="shop-grid.php">
				<div class="field__search">
					<input type="text" id="srchFld" name="srchFld" placeholder="Search entire store here...">
					<div class="action">
					<button type="submit" id="btnearchSubmit" name="btnSearchSubmit" class="zmdi zmdi-search"></button>
					<!--		<a href="#"><i class="zmdi zmdi-search"></i></a>-->
					</div>
				</div>
			</form>
			<div class="close__wrap">
				<span>close</span>
			</div>
		</div>
		<!-- End Search Popup -->
		<!-- Footer Area -->
		<!--<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
		<div class="footer-static-top">
			<div class="container">
				<div class="row">
					<div class="col-lg-12">
						<div class="footer__widget footer__menu">
							<div class="ft__logo">
								<a href="index.html">
									<img src="images/logo/3.png" alt="logo">
								</a>
								<p>There are many variations of passages of Lorem Ipsum available, but the majority
									have
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
									<li><a href="index.html">Trending</a></li>
									<li><a href="index.html">Best Seller</a></li>
									<li><a href="index.html">All Product</a></li>
									<li><a href="index.html">Wishlist</a></li>
									<li><a href="index.html">Blog</a></li>
									<li><a href="index.html">Contact</a></li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>-->
		<div class="copyright__wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="copyright">
							<div class="copy__right__inner text-left">
								<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free
										themes Cloud.</a> All Rights Reserved</p>
							</div>
						</div>
					</div>
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="payment text-right">
							<!--<img src="images/icons/payment.png" alt="" />-->
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
										and
										material combinations creates a modern look.
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
								</div><!-- .product-info -->
							</div><!-- .modal-product -->
						</div><!-- .modal-body -->
					</div><!-- .modal-content -->
				</div><!-- .modal-dialog -->
			</div>
			<!-- END Modal -->
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