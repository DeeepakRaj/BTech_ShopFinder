<?php

require_once 'connection.php';
   // fetching Data from DB

     $query = "SELECT * FROM `tblshopregistration`";
     $query_run = mysqli_query($conn, $query);


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
							<a href="index.html">
								<!----> <img src="images/logo/logo.png" alt="logo images">
							</a>
						</div>
					</div>
					<div class="col-lg-8 d-none d-lg-block">
						<nav class="mainmenu__nav">
							<ul class="meninmenu d-flex justify-content-start">
								<li class="drop with--one--item"><a href="index.html">Home</a></li>
								<li class="drop"><a href="#">Shop Registration</a>

								</li>
								<li class="drop"><a href="shop-grid.html">Categories</a>
									<div class="megamenu mega03">
										<ul class="item item03">
											<li class="title">New Categories</li>
											<li><a href="shop-grid.html">Baby</a></li>
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

								<li class="drop"><a href="blog.html">My Profile</a>

								</li>
								<li><a href="">My shop</a></li>
								<li><a href="contact.html">Contact</a></li>
								<li><a href="">logout</a></li>
							</ul>
						</nav>
					</div>
					<div class="col-md-6 col-sm-6 col-6 col-lg-2">
						<ul class="header__sidebar__right d-flex justify-content-end align-items-center">

							<!-- End Shopping Cart -->
							<li class="shop_search"><a class="search__active" href="#"></a>

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
											<li><a href="shop-grid.html">Baby</a></li>
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
									<li><a href="">My Shop</a></li>
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

		<!-- End Single Slide -->
	</div>

	<!-- End Bradcaump area -->



			<!-- Shop Delete Modal -->
		<div class="modal fade" id="shopDeleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
			<div class="modal-dialog" role="document">
				<div class="modal-content">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Shop Delete</h5>
						<button type="button" class="close" data-dismiss="modal" aria-label="Close">
						<span aria-hidden="true">&times;</span>
						</button>
					</div>
					<div class="modal-body">
					
						<form action="deleteShop.php" method="POST" >
							<div class="account__form">
								<div class="input__box">
									<label name ="lbShopDelete" style="font-size: 20px; text-align: center;">Are you Really sure you want to delete shop? <span>*</span></label>
									

								</div>
						
								<div class="form__btn" style="padding:3%" align="center" >
                                    <?php
					

                                        $query = "SELECT * FROM tblshopregistration";
                                        $result = mysqli_query($conn, $query);
                                        while($rows = mysqli_fetch_array($result))
                                        {
                                            $_SESSION['shopId']=$rows['SysId'];
                                            // echo $_SESSION['shopId'];    
                                    }                          
                                    ?>

									<input type="button" class="btn" onclick="location.href='deleteShop.php?shp_id=<?php echo $rows['SysId'];?> ';" value="Yes" />

                                    <input type="button" class="btn" onclick="location.href='myShop3?shp_id=<?php echo $rows['SysId'];?> ';" value="No" />
									
								
								</div>

							</div>
						</form>


					</div>

				</div>
			</div>
		</div>

	<!-- Start Shop Page -->
	<div class=" brown--color pt--90  pb--30 mt--40">
		<div class="container">
			<div class="section__title text-center">
				<h2 class="title__be--2">My<span class="color--theme">Shops</span></h2>


			</div>
			<div class="col-lg-12 col-12 order-1 order-lg-3">


				<div class="row">
					<!-- Start Single Product -->
                    <?php
					

                                $query = "SELECT * FROM tblshopregistration";
                                $result = mysqli_query($conn, $query);
                                while($rows = mysqli_fetch_array($result))
                                {
                                    $_SESSION['shopId']=$rows['SysId'];
									// echo $_SESSION['shopId'];                               
                            ?>

					<div class="product product__style--3 col-lg-4 col-md-4 col-sm-9 col-12">
						<div class="product__thumb">
							<a class="first__img" href="single-product.html"><img src="images/books/1.jpg"
									alt="product image"></a>

							<div class="hot__box">
								<span class="hot-label">HOT</span>

							</div>
						</div>
						<div class="product__content content--center">
							<h4><a href="single-product.html"><?php echo $rows['ShopName']; ?></a></h4>
							<ul class="prize d-flex">
								<li><?php echo $rows['ShopCategory']; ?></li>
							</ul>
							<div class="action">
                    
								<div class="actions_inner">
									<ul class="add_to_links">
										<li>
											<h6><?php echo $rows['ShopAddress']; ?></h6>

											<form action="myShops2Edit.php" method="POST">
                                                <input type="button" class="btn" onclick="location.href='myShops2Edit.php?shp_id=<?php echo $rows['SysId'];?> ';" value="Edit" />
                                                    
                                                <button type="button" class="btn" data-toggle="modal" data-target="#shopDeleteModal">
												Delete
											</button>
                                                

                                            </form>
                                            <!-- Shop Edit Modal Button -->
											

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
                    <?php }?>
					
				</div>
				<ul class="wn__pagination">
					<li class="active"><a href="#">1</a></li>
					<li><a href="#">2</a></li>
					<li><a href="#">3</a></li>
					<li><a href="#">4</a></li>
					<li><a href="#"><i class="zmdi zmdi-chevron-right"></i></a></li>
				</ul>
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