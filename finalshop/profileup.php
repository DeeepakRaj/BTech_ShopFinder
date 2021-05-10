<!doctype html>
<html class="no-js" lang="zxx">
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>My Account | Bookshop Responsive Bootstrap4 Template</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Favicons -->
	<link rel="shortcut icon" href="images/favicon.ico">
	<link rel="apple-touch-icon" href="images/icon.png">

	<!-- Google font (font-family: 'Roboto', sans-serif; Poppins ; Satisfy) -->
	<link href="https://fonts.googleapis.com/css?family=Lato:300,300i,400,400i,700,700i,900" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,500,600,600i,700,700i,800" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">

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
	<?php
require('db.php');
include("auth.php");
// If form submitted, insert values into the database.
if (isset($_REQUEST['fname'])){
        // removes backslashes
 $firstname = stripslashes($_REQUEST['fname']);
        //escapes special characters in a string
 $firstname = mysqli_real_escape_string($con,$firstname);

 $lastname = stripslashes($_REQUEST['lname']);
 $lastname = mysqli_real_escape_string($con,$lastname);

  $password = stripslashes($_REQUEST['pwd']);
 $password = mysqli_real_escape_string($con,$password);

  $phno = stripslashes($_REQUEST['phno']);
 $phno = mysqli_real_escape_string($con,$phno);

   $location = stripslashes($_REQUEST['loc']);
 $location = mysqli_real_escape_string($con,$location);

   $email = stripslashes($_REQUEST['mail']);
 $email = mysqli_real_escape_string($con,$email);

   $gen = stripslashes($_REQUEST['gender']);
 $gen = mysqli_real_escape_string($con,$gen);

 $dob = $_POST['DOB'];
// $trn_date = date("Y-m-d H:i:s");
$uid=$_SESSION["uid"];
        $query = "UPDATE tblusertable SET PhoneNumber='$phno',FirstName='$firstname', LastName='$lastname', PassWord='$password', LocationId='$location', UEmail='$email', Gender='$gen', DOB='$dob' WHERE SysId='$uid'";
        $result = mysqli_query($con,$query);
        if($result){
            echo '<script>
            var ask = window.confirm("Update Successful");
            if (ask) {

        		window.location.href = "index.php";

    		} else {}
            </script>';
        }
    }else{
?>
	<!--[if lte IE 9]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
	<![endif]-->

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
		<!-- Start My Account Area -->
		<section class="my_account_area pt--80 pb--55 bg--white">
			<div class="container">
				<div class="row h-100 justify-content-center align-items-center">
					<div class="col-lg-6 col-12">
						<div class="my_account_wrapper">
							<h3 class="account__title" align="center">Profile Update Page</h3>
							<form action="" method="post">
								<div class="account__form">
								<?php
                                                include("connection.php");
												$uid=$_SESSION["uid"];
                                                $sql = "Select * from tblusertable where SysId=$uid";
                                                $Res = mysqli_query($conn,$sql);
                                                while($Row = mysqli_fetch_array($Res))
                                                {
                                                   
                                             
                                            ?>
									<div class="input__box">
										<label>Your Mobile Number<span>*</span></label>
										<input type="text" id="phno" name="phno" pattern="[0-9]{10}" title="10 digit mobile number" value="<?php echo $Row['PhoneNumber']; ?>" required>
									</div>
									<div class="input__box">
										<label>First Name <span>*</span></label>
										<input type="text" id="fname" name="fname" title="Enter first name" value="<?php echo $Row['FirstName']; ?>" required>
									</div>
									<div class="input__box">
										<label>Last Name<span>*</span></label>
										<input type="text" id="lname" name="lname" title="Enter last name" value="<?php echo $Row['LastName']; ?>" required>
									</div>
									<div class="input__box">
										<label>Password<span>*</span></label>
										<input type="Password" id="pwd" name="pwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
									</div>
									<div class="input__box">
										<label>Confirm Password<span>*</span></label>
										<input type="Password" id="resetpwd" name="resetpwd" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters"  required>
									</div>
									<div class="input__box">
										<label>Location<span>*</span></label>
										<input type="text" id="loc" name="loc" title="Fill out your location" value="<?php echo $Row['LocationId']; ?>" required>
									</div>
									<div class="input__box">
										<label>Email ID<span>*</span></label>
										<input type="Email" id="mail" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" title="Only  lowercase letter with @ " value="<?php echo $Row['UEmail']; ?>" required>
									</div>
									<div class="input__box">
										<label>Gender<span>*</span></label>
										<br>
										<label>
											Male:<input type="radio" name="gender" id="male" value="M">
											Female:<input type="radio" name="gender" id="fmale" value="F">
											Other:<input type="radio" name="gender" id="other" value="O">
										</label>
									</div>
									<div class="input__box">
										<label>Date of Birth<span>*</span></label>
										<input type="Date" name="DOB" id="DOB" pattern="(0[1-9]|1[0-9]|2[0-9]|3[01]).(0[1-9]|1[012]).[0-9]{4}" title="DD.MM.YYYY" value="<?php echo $Row['DOB']; ?>" required>
									</div>
									<?php	} ?>
									<br>
									<div class="form__btn" style="padding:3%" align="center" onclick="location.href='login.php">
										<button name="update">Update</button>
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
		<!-- End My Account Area -->
		<!-- Footer Area -->
		<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
			<div class="footer-static-top">
				<div class="container">
					<div class="row">
						<div class="col-lg-12">
							<div class="footer__widget footer__menu">
								<div class="ft__logo">
									<a href="index.html">
										<img src="images/logo/3.png" alt="logo">
									</a>
									<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered duskam alteration variations of passages</p>
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
			</div>
			<div class="copyright__wrapper">
				<div class="container">
					<div class="row">
						<div class="col-lg-6 col-md-6 col-sm-12">
							<div class="copyright">
								<div class="copy__right__inner text-left">
									<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free themes Cloud.</a> All Rights Reserved</p>
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
		
	</div>
	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>
	
<?php } ?>

<style type="text/css">
	.account__form .input__box input[type=radio] {
      height: 14px;
      width: 10%; }
</style>
</body>
</html>