<?php
include("auth.php");
?>
<!doctype html>
<html class="no-js" lang="zxx">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Shop-Grid | Bookshop Responsive Bootstrap4 Template</title>
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

		<!-- End Single Slide -->
	</div>

	<!-- End Bradcaump area -->
	<!-- Start Shop Page -->
	<div class=" brown--color pt--90  pb--30 mt--40">
		<div class="container">
			<div class="section__title text-center">
				<h2 class="title__be--2">My<span class="color--theme">Shops</span></h2>
				<p>Here you can check the Shops that you already published.</p>
<br><br>
			</div>
			<div class="col-lg-12 col-12 order-1 order-lg-3">


				<div class="row">
					<!-- Start Single Product -->
					<?php
								include("connection.php");
								
								$UId=$_SESSION["uid"];
								
                                $query = "Select * from tblshopregistration where UId=$UId AND RecStatus=1";
                                $result = mysqli_query($conn, $query);
                                while($rows = mysqli_fetch_array($result))
                                {
                                    
									$id=$rows['SysId'];
                            ?>
					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-9 col-12">
						<div class="product__thumb">
							<a class="first__img" href="single-product.php?shp_id=<?php echo $rows['SysId'];?> "><img src="<?php echo $rows['ShopImg1'];?>"
									alt="product image"></a>

							<div class="hot__box">

							</div>
						</div>
						<div class="product__content content--center">
							<h4><a href="single-product.php?shp_id=<?php echo $rows['SysId'];?> "><?php echo $rows['ShopName']; ?></a></h4>
							<ul class="prize d-flex">
								<li><?php  $sql = "Select * from tblcategorytable" ;
                                 			   $sql .= " Where SysId in (select ShopCategory from tblshopregistration where SysId=$id) ";
                               				  //   $sql .= " and cat_id<>" . $Id;
                              				      $res = mysqli_query($conn,$sql);
                                  				  while($row1 = mysqli_fetch_array($res))
                                  				  {
                                  				      echo $row1['CatName'];
                                  				  } ?></li>
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										<li>
											<h6><?php echo $rows['ShopLocation']; ?></h6>
											<input type="button" class="btn" name="btnShopEdit" onclick="location.href='myShops2Edit.php?shp_id=<?php echo $rows['SysId'];?> ';" value="Edit" />
												<input type="button" class="btn" name="btnShopDelete" onclick="window.location.href='deleteShop.php?shp_id=<?php echo $rows['SysId'];?> ';" value="Delete" />
												
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
					</div>	<?php }?>
					<!-- End Single Product -->
					
				</div>
				
			</div>
			<div class="shop-grid tab-pane fade" id="nav-list" role="tabpanel">
				<div class="list__view__wrapper">
					<!-- Start Single Product -->
					<div class="list__view">
						<div class="thumb">
							<a class="first__img" href="single-product.html"><img src="images/product/1.jpg"
									alt="product images"></a>

						</div>
						<div class="content">
							<h2><a href="single-product.html">Ali Smith</a></h2>
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
							<ul class="prize__box">
								<li>$111.00</li>
								<li class="old__prize">$220.00</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla
								augue nec est tristique auctor. Donec non est at libero vulputate
								rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi,
								vulputate adipiscing cursus eu, suscipit id nulla.</p>
							<ul class="cart__action d-flex">
								<li class="cart"><a href="cart.html">Add to cart</a></li>
								<li class="wishlist"><a href="cart.html"></a></li>
								<li class="compare"><a href="cart.html"></a></li>
							</ul>

						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="list__view mt--40">
						<div class="thumb">
							<a class="first__img" href="single-product.html"><img src="images/product/2.jpg"
									alt="product images"></a>

						</div>
						<div class="content">
							<h2><a href="single-product.html">Blood In Water</a></h2>
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
							<ul class="prize__box">
								<li>$111.00</li>
								<li class="old__prize">$220.00</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla
								augue nec est tristique auctor. Donec non est at libero vulputate
								rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi,
								vulputate adipiscing cursus eu, suscipit id nulla.</p>
							<ul class="cart__action d-flex">
								<li class="cart"><a href="cart.html">Add to cart</a></li>
								<li class="wishlist"><a href="cart.html"></a></li>
								<li class="compare"><a href="cart.html"></a></li>
							</ul>

						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="list__view mt--40">
						<div class="thumb">
							<a class="first__img" href="single-product.html"><img src="images/product/3.jpg"
									alt="product images"></a>

						</div>
						<div class="content">
							<h2><a href="single-product.html">Madeness Overated</a></h2>
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
							<ul class="prize__box">
								<li>$111.00</li>
								<li class="old__prize">$220.00</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla
								augue nec est tristique auctor. Donec non est at libero vulputate
								rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi,
								vulputate adipiscing cursus eu, suscipit id nulla.</p>
							<ul class="cart__action d-flex">
								<li class="cart"><a href="cart.html">Add to cart</a></li>
								<li class="wishlist"><a href="cart.html"></a></li>
								<li class="compare"><a href="cart.html"></a></li>
							</ul>

						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="list__view mt--40">
						<div class="thumb">
							<a class="first__img" href="single-product.html"><img src="images/product/4.jpg"
									alt="product images"></a>

						</div>
						<div class="content">
							<h2><a href="single-product.html">Watching You</a></h2>
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
							<ul class="prize__box">
								<li>$111.00</li>
								<li class="old__prize">$220.00</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla
								augue nec est tristique auctor. Donec non est at libero vulputate
								rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi,
								vulputate adipiscing cursus eu, suscipit id nulla.</p>
							<ul class="cart__action d-flex">
								<li class="cart"><a href="cart.html">Add to cart</a></li>
								<li class="wishlist"><a href="cart.html"></a></li>
								<li class="compare"><a href="cart.html"></a></li>
							</ul>

						</div>
					</div>
					<!-- End Single Product -->
					<!-- Start Single Product -->
					<div class="list__view mt--40">
						<div class="thumb">
							<a class="first__img" href="single-product.html"><img src="images/product/5.jpg"
									alt="product images"></a>

						</div>
						<div class="content">
							<h2><a href="single-product.html">Court Wings Run</a></h2>
							<ul class="rating d-flex">
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li class="on"><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
								<li><i class="fa fa-star-o"></i></li>
							</ul>
							<ul class="prize__box">
								<li>$111.00</li>
								<li class="old__prize">$220.00</li>
							</ul>
							<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Nam fringilla
								augue nec est tristique auctor. Donec non est at libero vulputate
								rutrum. Morbi ornare lectus quis justo gravida semper. Nulla tellus mi,
								vulputate adipiscing cursus eu, suscipit id nulla.</p>
							<ul class="cart__action d-flex">
								<li class="cart"><a href="cart.html">Add to cart</a></li>
								<li class="wishlist"><a href="cart.html"></a></li>
								<li class="compare"><a href="cart.html"></a></li>
							</ul>
						</div>
					</div>
					<!-- End Single Product -->
				</div>
			</div>
		</div>
	</div>
	</div>
	</div>
	</div>
	<!-- End Shop Page -->
	<!-- Footer Area -->
	<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">

		<div class="copyright__wrapper">
			<div class="container">
				<div class="row">
					<div class="col-lg-6 col-md-6 col-sm-12">
						<div class="copyright">
							<div class="copy__right__inner text-left">
								<p>Copyright <i class="fa fa-copyright"></i> <a href="https://freethemescloud.com/">Free
										themes Cloud.</a> All Rights
									Reserved</p>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</footer>
	<!-- //Footer Area -->
	<!-- QUICKVIEW PRODUCT -->

	<!-- END QUICKVIEW PRODUCT -->

	<!-- //Main wrapper -->

	<!-- JS Files -->
	<script src="js/vendor/jquery-3.2.1.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/plugins.js"></script>
	<script src="js/active.js"></script>

</body>

</html>