<?php
// include 'includes/connect.php';
// include 'includes/wallet.php';

		?>
<!DOCTYPE HTML>
<html>

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Management Restoran</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />

	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lora:400,400i,700,700i" rel="stylesheet">

	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.css">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">
	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">

	<link rel="stylesheet" href="css/style.css">


	<!-- Modernizr JS -->
	<script src="js/modernizr-2.6.2.min.js"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

</head>

<body>

	<nav id="colorlib-main-nav" role="navigation">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle active"><i></i></a>
		<div class="js-fullheight colorlib-table">
			<!-- <div class="colorlib-table-cell js-fullheight"> -->
			<div class="row">
				<div class="col-md-6 col-md-offset-3">
					<div class="form-group">
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12 text-center">
					<ul>
						<li class="active"><a href="index.php">Home</a></li>
						<li><a href="menu.html">menus</a></li>
						<li><a href="specialties.html">specialties</a></li>
						<!-- <li><a href="reservation.html">Reservation</a></li> -->
						<li><a>Login</a></li>
						<div class="dropdown">
							<div class="dropdown-content">
								<a href="food-master\login.php">Login</a> || 
								<a href="food-master\loginKoki.php">Koki</a>
							</div>
						</div>
					</ul>
				</div>
			</div>
		</div>
		</div>
	</nav>

	<div id="colorlib-page">
		<header>
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="colorlib-navbar-brand">
							<a class="colorlib-logo" href="index.html"><i class="flaticon-cutlery"> </i></a>
						</div>
						<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
					</div>
				</div>
			</div>
		</header>
		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
					<li style="background-image: url(images/bg1.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner text-center">
										<div class="desc">
											<span class="icon"><i class="flaticon-cutlery"></i></span>
											<h1>Sangat Spesial &amp; Enak</h1>
											<p>Dalam Restoran Kami, kami dapat menjamin kepuasan anda sebagai pelanggan yang akan kami anggap sebagai Raja</p>											
											<div class="desc2"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/bg2.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner text-center">
										<div class="desc">
											<span class="icon"><i class="flaticon-cutlery"></i></span>
											<h1>Terbuat dari Masakan Chef Yang Profesional</h1>
											<p>Pembuatan Makanan yang sangat higienis dan dibuat oleh Chef yang sangat mahir di dalam Makanan Indonesia</p>											
											<div class="desc2"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li style="background-image: url(images/bg3.jpg);">
						<div class="overlay"></div>
						<div class="container-fluid">
							<div class="row">
								<div class="col-md-6 col-sm-12 col-xs-12 col-md-offset-3 slider-text">
									<div class="slider-text-inner text-center">
										<div class="desc">
											<span class="icon"><i class="flaticon-cutlery"></i></span>
											<h1>Restoran kami sangat bersih dan mewah</h1>
											<p>Restoran kami yang terletak di tanah yang sejuk kota Malang dan memiliki bangunan yang sangat mewah dan bertemakan
												tradisional
											</p>											
											<div class="desc2"></div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</li>

				</ul>
				<div class="mouse">
					<a href="#" class="mouse-icon">
						<div class="mouse-wheel"></div>
					</a>
				</div>
			</div>
		</aside>

		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-map4"></i>
							</span>
							<h2>Alamat</h2>
							<p>Kota Malang Jl. Soekarno Hatta</p>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-clock4"></i>
							</span>
							<h2>Waktu Buka</h2>
							<p>Selasa-Minggu</p>
							<span>10.00 - 21.00</span>
						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-mobile2"></i>
							</span>
							<h2>Phone</h2>
							<p>1235688</p>

						</div>
					</div>
					<div class="col-md-3 col-sm-6 text-center">
						<div class="intro animate-box">
							<span class="icon">
								<i class="icon-envelope"></i>
							</span>
							<h2>Email</h2>
							<p><a href="#">iashiddiqi13@gmail.com</a><br><a href="#">admin@gmail.com</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="goto-here"></div>

		<div class="colorlib-about" class="colorlib-light-grey">
			<div class="container">
				<div class="row">
					<div class="col-md-5">
						<div class="row">
							<div class="about-desc">
								<div class="col-md-12 col-md-offset-0 animate-box intro-heading">
									<span>Selamat Datang</span>
									<h2>Rasa yang terinspirasi dari Indonesia &amp; Hati</h2>
								</div>
								<div class="col-md-12 animate-box">
									<p>Dalam Restoran Kami, kami dapat menjamin kepuasan anda sebagai pelanggan yang akan kami anggap sebagai Raja</p>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-7">
						<div class="row">
							<div class="col-md-6 animate-box">
								<div class="about-img" style="background-image: url(images/bg3.jpg);">
								</div>
							</div>
							<div class="col-md-6 animate-box">
								<div class="about-img about-img-2" style="background-image: url(images/bg1.jpg);">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-introduction" style="background-image: url(images/bg1.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 col-md-push-3">
						<div class="intro-box animate-box">
							<h2><a href="#"></a>Makanan yang tidak akan terlupakan</h2>
							<p>Bahkan makanan kami sangatlah enak hingga tidak dapat dikatakan dengan kata - kata</p>
							<p><a href="https://www.youtube.com/watch?v=IJ9a_n25CqM" class="btn btn-primary btn-lg btn-outline popup-vimeo"><i
									 class="icon-play3"></i> Watch Video</a></p>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-menu">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<span class="icon"><i class="flaticon-cutlery"></i></span>
						<h2>Menu Utama Kami</h2>
						<p>Menu makanan yang tidak akan pernah anda lupakan</p>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/ag.jpg);"></div>
								<div class="desc">
									<h2><a href="#">Ayam Bakar</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/ng.jpg);"></div>
								<div class="desc">
									<h2><a href="#">Nasi Goreng</a></h2>
								</div>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="dish-wrap">
							<div class="wrap">
								<div class="dish-img" style="background-image: url(images/sa.jpg);"></div>
								<div class="desc">
									<h2><a href="#">Sate</a></h2>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-testimony" style="background-image: url(images/cover_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<h2>Our Customer Says</h2>
					</div>
				</div>
				<div class="row animate-box">
					<div class="owl-carousel">
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p>Pingin Nambah Terus</p>
										<span>" &mdash; Cak Lontong</span>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p>Never forget</p>
										<span>" &mdash; Cak Wadi</span>
									</blockquote>
								</div>
							</div>
						</div>
						<div class="item">
							<div class="col-md-8 col-md-offset-2 text-center">
								<div class="testimony">
									<blockquote>
										<p>Paling enak</p>
										<span>" &mdash; Cak Li</span>
									</blockquote>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

		<div class="colorlib-menu">
			<div class="container">
				<div class="colorlib-menu-2">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
							<span class="icon"><i class="flaticon-cutlery"></i></span>
							<h2>Menu</h2>
							<p>Menu - menu terbaik dari kami</p>
						</div>
					</div>
					<div class="row">
						<div class="col-md-12 animate-box">
							<div class="row">
								<div class="col-md-12 text-center">
									<ul class="nav nav-tabs text-center" role="tablist">
										<li role="presentation" class="active"><a href="#main" aria-controls="mains" role="tab" data-toggle="tab">Main</a></li>
										<li role="presentation"><a href="#desserts" aria-controls="desserts" role="tab" data-toggle="tab">Desserts</a></li>
										<li role="presentation"><a href="#drinks" aria-controls="drinks" role="tab" data-toggle="tab">Drinks</a></li>
									</ul>
								</div>
							</div>
							<div class="tab-content">
								<div role="tabpanel" class="tab-pane active" id="main">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">

												<li>
													<figure class="dish-entry">
														<div class="dish-img" style="background-image: url(images/ag.jpg);"></div>
													</figure>
													<div class="text">
														<span class="price">Rp25.000,-</span>
														<h3>Ayam Bakar</h3>
													</div>
												</li>
												<li>
													<figure class="dish-entry">
														<div class="dish-img" style="background-image: url(images/sa.jpg);"></div>
													</figure>
													<div class="text">
														<span class="price">Rp25.000,-</span>
														<h3>Sate</h3>

													</div>
												</li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="menu-dish">

												<li>
													<figure class="dish-entry">
														<div class="dish-img" style="background-image: url(images/ng.jpg);"></div>
													</figure>
													<div class="text">
														<span class="price">Rp25.000,-</span>
														<h3>Nasi Goreng</h3>

													</div>
												</li>
												<li>
													<figure class="dish-entry">
														<div class="dish-img" style="background-image: url(images/dish-14.jpg);"></div>
													</figure>
													<div class="text">
														<span class="price">Rp25.000,-</span>
														<h3>Sunny sideup egg</h3>

													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="desserts">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">

												</li>
												<li>
													<figure class="dish-entry">
														<div class="dish-img" style="background-image: url(images/dessert-5.jpg);"></div>
													</figure>
													<div class="text">
														<span class="price">Rp25.000,-</span>
														<h3>Choco Cake</h3>

													</div>
												</li>
												<li>
													<figure class="dish-entry">
														<div class="dish-img" style="background-image: url(images/dessert-6.jpg);"></div>
													</figure>
													<div class="text">
														<span class="price">Rp25.000,-</span>
														<h3>Sweet Caramel Bread</h3>

													</div>
												</li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="menu-dish">

												<li>
													<figure class="dish-entry">
														<div class="dish-img" style="background-image: url(images/dessert-11.jpg);"></div>
													</figure>
													<div class="text">
														<span class="price">Rp25.000,-</span>
														<h3>Biko Sweet</h3>

													</div>
												</li>
												<li>
													<figure class="dish-entry">
														<div class="dish-img" style="background-image: url(images/dessert-12.jpg);"></div>
													</figure>
													<div class="text">
														<span class="price">Rp25.000,-</span>
														<h3>Burger King</h3>

													</div>
												</li>
											</ul>
										</div>
									</div>
								</div>

								<div role="tabpanel" class="tab-pane" id="drinks">
									<div class="row">
										<div class="col-md-6">
											<ul class="menu-dish">

												<li>
													<figure class="dish-entry">
														<div class="dish-img" style="background-image: url(images/drink-5.jpg);"></div>
													</figure>
													<div class="text">
														<span class="price">Rp25.000,-</span>
														<h3>Fresh Fruits Juice</h3>

													</div>
												</li>
												<li>
													<figure class="dish-entry">
														<div class="dish-img" style="background-image: url(images/drink-6.jpg);"></div>
													</figure>
													<div class="text">
														<span class="price">Rp25.000,-</span>
														<h3>Coconut Juice</h3>

													</div>
												</li>
											</ul>
										</div>
										<div class="col-md-6">
											<ul class="menu-dish">

												<li>
													<figure class="dish-entry">
														<div class="dish-img" style="background-image: url(images/drink-11.jpg);"></div>
													</figure>
													<div class="text">
														<span class="price">Rp25.000,-</span>
														<h3>Can Juice</h3>

													</div>
												</li>
												<li>
													<figure class="dish-entry">
														<div class="dish-img" style="background-image: url(images/drink-12.jpg);"></div>
													</figure>
													<div class="text">
														<span class="price">Rp25.000,-</span>
														<h3>Choco Juice</h3>

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
			</div>
		</div>

		<div class="colorlib-reservation reservation-img" style="background-image: url(images/cover_bg_2.jpg);" data-stellar-background-ratio="0.5">
			<div class="overlay"></div>
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-md-offset-3 text-center animate-box intro-heading">
						<h2>Pesan Meja Online</h2>
                        <p>Registrasi untuk pelanggan baru, dan dapatkan kemudahan dalam pemesanan online.</p>
                        <p>Klik link dibawah</p>
                        <a href="food-master\register.php">REGISTRASI</a>
					</div>
                </div>
                
				<!-- <div class="row">
					<div class="col-md-8 col-md-offset-2">
						<div class="row">
							<div class="col-md-12">
								<form method="post" class="colorlib-form">
									<div class="row">
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="name">Nama Panjang</label>
												<div class="form-field">
													<input type="text" class="form-control" placeholder="nama">
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="email">Email</label>
												<div class="form-field">
													<input type="text" class="form-control" placeholder="email">
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="phone">Nomor HP</label>
												<div class="form-field">
													<input type="text" class="form-control" placeholder="phone">
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="date">Tanggal:</label>
												<div class="form-field">
													<i class="icon icon-calendar2"></i>
													<input type="text" id="date" class="form-control date" placeholder="tanggal">
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="time">Jam</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3"></i>
													<select name="time" id="time" class="form-control">
														<option value="#">6:30am</option>
														<option value="#">7:00am</option>
														<option value="#">7:30am</option>
														<option value="#">8:00am</option>
														<option value="#">8:30am</option>
														<option value="#">9:00am</option>
														<option value="#">9:30am</option>
														<option value="#">10:00am</option>
														<option value="#">10:30am</option>
														<option value="#">11:00am</option>
														<option value="#">11:30am</option>
														<option value="#">12:00am</option>
														<option value="#">12:30am</option>
														<option value="#">1:00pm</option>
														<option value="#">1:30pm</option>
														<option value="#">2:00pm</option>
														<option value="#">2:30pm</option>
														<option value="#">3:00pm</option>
														<option value="#">3:30pm</option>
														<option value="#">4:00pm</option>
														<option value="#">4:30pm</option>
														<option value="#">5:00pm</option>
														<option value="#">5:30pm</option>
														<option value="#">6:00pm</option>
														<option value="#">6:30pm</option>
														<option value="#">7:00pm</option>
														<option value="#">7:30pm</option>
														<option value="#">8:00pm</option>
														<option value="#">8:30pm</option>
														<option value="#">9:00pm</option>
														<option value="#">9:30pm</option>
														<option value="#">10:00pm</option>
														<option value="#">10:30pm</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-6 animate-box">
											<div class="form-group">
												<label for="person">Banyak Kursi</label>
												<div class="form-field">
													<i class="icon icon-arrow-down3 fa fa-black-tie" aria-hidden="true" "></i>
													<select name="people " id="people " class="form-control ">
														<option value="# ">2</option>
														<option value="# ">5</option>
														<option value="# ">5+</option>
														<option value="# ">Party</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12 animate-box ">
											<div class="row ">
												<label for="person ">pilihan tempat</label>
												<div class="col-md-4 col-md-offset-4 ">
													<i class="icon icon-arrow-down3 fa fa-black-tie " aria-hidden="true " "></i>
													<select name="table " id="table " class="row ">
														<option value="# ">indoor</option>
														<option value="# ">outdoor</option>
													</select>
												</div>
											</div>
										</div>
										<div class="col-md-12 animate-box ">
											<div class="row ">
												<div class="col-md-4 col-md-offset-4 ">
													<input type="submit " name="submit " id="submit " value="Pesan " class="btn btn-primary btn-block ">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
                </div> -->
                
			</div>
		</div>

		<footer>
			<div id="footer ">
				<div class="container ">
					<div class="row ">
						<div class="col-md-3 col-pb-sm ">
							<h2>Manajemen Restoran</h2>
							<p>Kami memiliki banyak Akun Sosial Media</p>
							<p class="colorlib-social-icons ">
								<a href="# "><i class="icon-facebook4 "></i></a>
								<a href="# "><i class="icon-twitter3 "></i></a>
								<a href="# "><i class="icon-googleplus "></i></a>
								<a href="# "><i class="icon-dribbble2 "></i></a>
							</p>
						</div>



					</div>
				</div>
		</footer>

		</div>

		<!-- jQuery -->
		<script src="js/jquery.min.js "></script>
		<!-- jQuery Easing -->
		<script src="js/jquery.easing.1.3.js "></script>
		<!-- Bootstrap -->
		<script src="js/bootstrap.min.js "></script>
		<!-- Waypoints -->
		<script src="js/jquery.waypoints.min.js "></script>
		<!-- Parallax -->
		<script src="js/jquery.stellar.min.js "></script>
		<!-- Owl Carousel -->
		<script src="js/owl.carousel.min.js "></script>
		<!-- Magnific Popup -->
		<script src="js/jquery.magnific-popup.min.js "></script>
		<script src="js/magnific-popup-options.js "></script>
		<!-- Flexslider -->
		<script src="js/jquery.flexslider-min.js "></script>
		<!-- Date Picker -->
		<script src="js/bootstrap-datepicker.js "></script>

		<!-- Main JS (Do not remove) -->
		<script src="js/main.js "></script>

</body>

</html>
