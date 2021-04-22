<?php
    session_start();
    // echo 'Hello';
    require_once 'connection.php';

    // fetching Data from DB

     $query = "SELECT * FROM `tblshopregistration`";
     $query_run = mysqli_query($conn, $query);

    
    
    
     $shopCatSQL = "SELECT * FROM tblcategorytable";
     $shopCat = mysqli_query($conn, $shopCatSQL);


?>

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

    <!-- Modals -->
    <!-- Shop Edit Modals -->

    <div class="modal fade bd-example-modal-lg" id = "shopEditModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                
                
                <div class="modal-body">
                    <h3 class="account__title" align="center">Update Shop Details</h3>
                        <form action="shopRegistration1.php" method="POST" enctype="multipart/form-data">
                            <div class="account__form">

                                <?php
                                if(mysqli_num_rows($query_run)>0)
                                { 
                                    while($row = mysqli_fetch_assoc($query_run))
                                    {
                                        ?>
                                        
                                        <div class="input__box">
                                            <label>Shop Name <span>*</span></label>
                                            <input type="text"    name ="txtShopName" value = "<?php echo $row['ShopName'] ?>">

                                        </div>
                                        <div class="input__box">
                                            <label>Shop Phone Number<span>*</span></label>
                                            <input type="tel" minlength="10" maxlength="14" placeholder="Please include your Country Code like +91 xxxxxxxxxx" name ="txtShopPhoneNumber" value = "<?php echo $row['ShopPhone'] ?>">
                                            
                                            
                                        </div>
                                        <div class="input__box">
                                            <label>Address<span>*</span></label>
                                            <input type="text"   placeholder="Street address" name ="txtShopAddress" value = "<?php echo $row['ShopAddress'] ?>" > 
                                            
                                        </div>


                                        <div class="input__box">
                                            <label>Postcode / ZIP <span>*</span></label>
                                            <input type="number"   name ="txtShopPostcode" value = "<?php echo $row['ShopPhone'] ?>"> 

                                        </div>

                                        <div class="input__box">
                                            <label>Location<span>*</span></label>
                                            <input type="text"   name ="txtShopLocation" value = "<?php echo $row['ShopLocation'] ?>">
                                            
                                        </div>

                                        <div class="input__box">
                                            <label>Shop Description <span>*</span></label>
                                            <!-- <input type="textarea" rows> -->
                                            <textarea rows="4" cols="120"   name ="txtShopDescription"></textarea value = "<?php echo $row['ShopDescription'] ?>">
                                            <small> Max 500 words. </small>
                                        </div>

                                        <div class="input__box">
                                            <label>Shop Category<span>*</span></label>
                                            <select class="select__option"   name ="optShopCategory" value = "<?php echo $row['ShopCategory'] ?>">
                                                

                                                <!-- YOUTUBE LINK -->
                                                <!-- https://www.youtube.com/watch?v=V8sIWh_sdvs&list=RDCMUCS3W5vFugqi6QcsoAIHcMpw&start_radio=1&rv=V8sIWh_sdvs&t=148&ab_channel=1BestCsharpblog -->

                                                <option>Select a Category</option>
                                                <option>Clothing</option>
                                                <option>Cosmetics</option>
                                                <option>Electronic</option>
                                                <option>Food</option>
                                                <option>General Store</option>
                                                <option>Hardware</option>
                                                <option>Other</option>
                                            </select>

                                            <!-- <div class="input__box">
                                                <label>Specify if Other<span>*</span></label>
                                                <input type="text" name ="txtOtherShopCategory">
                                            </div> -->

                                        </div>

                                        <div class="input__box ">
                                            <label>Shop Timing <span>*</span></label>
                                            <!-- <input type="text"> -->
                                            <input type="text" min="08:00" max="23:00"   name ="txtShopTiming" placeholder="8:00 AM - 8:00 PM, Mon - Sat" value = "<?php echo $row['ShopTime'] ?>">
                                            <!-- <class="select__option" name ="lstShopOpeningDays"> -->
                                                
                                            <div class="input__box ">
                                                <small>Shop hours are 8:00 am to 11:00 pm</small>
                                            </div>
                                        </div>

                                        

                                        <div class="input__box">
                                            <label>Shop Duration<span>*</span></label>
                                            <select class="select__option"   name ="optShopDuration" value ="<?php echo $row['ShopDuration'] ?>">
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
                                            <input type="file"  name ="txtShopImg1" value="<?php echo $row['ShopImg1'] ?>">
                                            <small> This image will be used as the Primary Shop image</small>
                                        </div>

                                        <div class="form__btn" style="padding:3%" align="center">
                                            <button type = "submit" name="update" value="Update" >Update</button>
                                        </div>
                                        <?php
                                    }
                                }

                                else
                                {
                                    echo 'No DATA';
                                }
                            ?>

                            </div>
                        </form> 
                </div>
            </div>
         </div>
    </div>

    <!-- Shop Delete Modal -->

    <div class="modal fade bd-example-modal-lg" id = "shopDeleteModal" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg">
            <div class="modal-content">
                <div class="modal-header">
                
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            
                <div class="modal-body">
                    <h3 class="account__title" align="center">Delete Shop</h3>
                        <form action="deleteShop.php" method="POST" enctype="multipart/form-data">
                            <div class="account__form">
                                <div class="input__box" align="center">
                                    <label style="font-size: 20px;">Are you sure, You want to delete the shop. <span>*</span></label>
                                    <small> Note: You wont able to recover it later! </small>
                                    
                                </div>
                                

                                <div class="form__btn" style="padding:3%"  align="center">
                                    <button type = "submit" name="btnYesDeleteShop" value="Yes" >Yes</button>
                                    <button type = "submit" name="btnNoDeleteShop" value="No" >No</button>
                                </div>

                            </div>
                        </form>
                
                                
                </div>

            </div>
         </div>
    </div>

    <div class="modal fade" id="shopEditModal" tabindex="-1" role="dialog" aria-labelledby="shopEditModalTitle" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            
        </div>
    </div>
    </div>
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
								<li><a href="myshops.php">My shop</a></li>
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
									<li><a href="myshops.php">My Shop</a></li>
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
	<!-- End Slider area -->
	<!-- Start BEst Seller Area -->
	<section class="wn__product__area brown--color pt--90  pb--30 mt--40">
		<div class="container">
			<div class="row">
				<div class="col-lg-12">
					<div class="section__title text-center">
						<h2 class="title__be--2">My<span class="color--theme">Shops</span></h2>
						<p>Here you can check the Shops that you already published.

					</div>
				</div>
			</div>
            <!--	Start Single Tab Content -->
			<div class="furniture--4 border--round arrows_style owl-carousel owl-theme row mt--50">

				<!-- Start Single Product -->
				<?php


                                $query = "SELECT * FROM tblshopregistration";
                                $result = mysqli_query($conn, $query);
                                while($rows = mysqli_fetch_array($result))
                                {
                                    $_SESSION['deleteid']=$rows['SysId'];
                               
                            ?>
				<div class="product product__style--3">
					<div class="col-lg-3 col-md-4 col-sm-6 col-12">
						<div class="product__thumb">
							<a class="first__img" href="single-product.php?shp_id=<?php echo $rows['SysId'];?> "><img src="images/books/1.jpg"
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
								<li><?php echo $rows['ShopCategary']; ?></li>
								<!--<li class="old_prize">$35.00</li>-->
							</ul>
							<div class="action">
								<div class="actions_inner">
									<ul class="add_to_links">
										<li>
											<h6><?php echo $rows['ShopLocation']; ?></h6>
                                            <!-- Buttons for Modals -->
                                            
                                            <button type="button" class="btn " data-toggle="modal" data-target="#shopEditModal">Edit</button>

                                            <button type="button" class="btn " data-toggle="modal" data-target="#shopDeleteModal">Delete</button>
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
							<h4><a href="single-product.html">mohanlal shop</a></h4>
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
            </div>
        </div>
    </section>

    <!-- Start BEst Seller Area -->
	<!-- Start NEwsletter Area -->

	<!-- End NEwsletter Area -->
	<!-- Start Best Seller Area -->
	<footer id="wn__footer" class="footer__area bg__cat--8 brown--color">
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