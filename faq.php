
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<title>Muka - Bakery and Cooking Classes HTML template</title>
	<meta charset="utf-8">
	<!--[if IE]>
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<![endif]-->
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->

	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="css/animations.css">
	<link rel="stylesheet" href="css/font-awesome.css">
	<link rel="stylesheet" href="css/main.css" class="color-switcher-link">
	<script src="js/vendor/modernizr-2.6.2.min.js"></script>

	<!--[if lt IE 9]>
		<script src="js/vendor/html5shiv.min.js"></script>
		<script src="js/vendor/respond.min.js"></script>
		<script src="js/vendor/jquery-1.12.4.min.js"></script>1px solid #20252b
	<![endif]-->

</head>

<body>
	<!--[if lt IE 9]>
		<div class="bg-danger text-center">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/" class="color-main">upgrade your browser</a> to improve your experience.</div>
	<![endif]-->

	<div class="preloader">
		<h1>Cooking in progress...</h1>
		<div id="cooking">
			<div class="bubble"></div>
			<div class="bubble"></div>
			<div class="bubble"></div>
			<div class="bubble"></div>
			<div class="bubble"></div>
			<div id="area">
				<div id="sides">
					<div id="pan"></div>
					<div id="handle"></div>
				</div>
				<div id="pancake">
					<div id="pastry"></div>
				</div>
			</div>
		</div>
	</div>

	<!-- search modal -->
	<div class="modal" tabindex="-1" role="dialog" aria-labelledby="search_modal" id="search_modal">
		<button type="button" class="close" data-dismiss="modal" aria-label="Close">
			<span aria-hidden="true">&times;</span>
		</button>
		<div class="widget widget_search">
			<form method="get" class="searchform search-form" action="/">
				<div class="form-group">
					<input type="text" value="" name="search" class="form-control" placeholder="Search keyword" id="modal-search-input">
				</div>
				<button type="submit" class="btn">Search</button>
			</form>
		</div>
	</div>

	<!-- Unyson messages modal -->
	<div class="modal fade" tabindex="-1" role="dialog" id="messages_modal">
		<div class="fw-messages-wrap ls p-normal">
			<!-- Uncomment this UL with LI to show messages in modal popup to your user: -->
			<!--
		<ul class="list-unstyled">
			<li>Message To User</li>
		</ul>
		-->

		</div>
	</div>
	<!-- eof .modal -->

	<!-- wrappers for visual page editor and boxed version of template -->
	<div id="canvas">
		<div id="box_wrapper">

			<!-- template sections -->


			<!--topline section visible only on small screens|-->


			<!-- header with three Bootstrap columns - left for logo, center for navigation and right for includes-->
			<header class="page_header ls justify-nav-center">
				<div class="container-fluid">
					<div class="row align-items-center">
						<div class="col-xl-2 col-lg-3 col-11">
							<a href="./" class="logo">
								<img src="images/logo.png" alt="">
								<span class="logo-text color-darkgrey">Muka
									<strong class="color-main logo-dot">.</strong>
								</span>
							</a>
						</div>
						<div class="col-xl-8 col-lg-5 col-1 text-sm-center">
							<!-- main nav start -->
							<nav class="top-nav">
								<ul class="nav sf-menu">


									<li class="active">
										<a href="index.html">Homepage</a>
										<ul>
											<li>
												<a href="index.html">MultiPage</a>
											</li>
											<li>
												<a href="index_static.html">Static Intro</a>
											</li>
											<li>
												<a href="index_singlepage.html">Single Page</a>
											</li>
										</ul>
									</li>

									<li>
										<a href="about.html">Pages</a>
										<ul>

											<li>
												<a href="about.html">About</a>
											</li>
											<li>
												<a href="clients.html">Clients</a>
											</li>

											<li>
												<a href="pricing.html">Pricing</a>
											</li>

											<!-- shop -->
											<li>
												<a href="shop-right.html">Shop</a>
												<ul>
													<li>
														<a href="shop-account-dashboard.html">Account</a>
														<ul>

															<li>
																<a href="shop-account-details.html">Account details</a>
															</li>
															<li>
																<a href="shop-account-addresses.html">Addresses</a>
															</li>
															<li>
																<a href="shop-account-address-edit.html">Edit Address</a>
															</li>
															<li>
																<a href="shop-account-orders.html">Orders</a>
															</li>
															<li>
																<a href="shop-account-order-single.html">Single Order</a>
															</li>
															<li>
																<a href="shop-account-downloads.html">Downloads</a>
															</li>
															<li>
																<a href="shop-account-password-reset.html">Password Reset</a>
															</li>
															<li>
																<a href="shop-account-login.html">Login/Logout</a>
															</li>

														</ul>
													</li>
													<li>
														<a href="shop-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="shop-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="shop-product-right.html">Product Right Sidebar</a>
													</li>
													<li>
														<a href="shop-product-left.html">Product Left Sidebar</a>
													</li>
													<li>
														<a href="shop-cart.html">Cart</a>
													</li>
													<li>
														<a href="shop-checkout.html">Checkout</a>
													</li>
													<li>
														<a href="shop-order-received.html">Order Received</a>
													</li>

												</ul>
											</li>
											<!-- eof shop -->

											<!-- features -->
											<li>
												<a href="shortcodes_iconbox.html">Shortcodes</a>
												<ul>
													<li>
														<a href="shortcodes_typography.html">Typography</a>
													</li>
													<li>
														<a href="shortcodes_buttons.html">Buttons</a>
													</li>
													<li>
														<a href="shortcodes_pricing.html">Pricing</a>
													</li>
													<li>
														<a href="shortcodes_iconbox.html">Icon Boxes</a>
													</li>
													<li>
														<a href="shortcodes_progress.html">Progress</a>
													</li>
													<li>
														<a href="shortcodes_tabs.html">Tabs &amp; Collapse</a>
													</li>
													<li>
														<a href="shortcodes_bootstrap.html">Bootstrap Elements</a>
													</li>
													<li>
														<a href="shortcodes_animation.html">Animation</a>
													</li>
													<li>
														<a href="shortcodes_icons.html">Template Icons</a>
													</li>
													<li>
														<a href="shortcodes_socialicons.html">Social Icons</a>
													</li>
												</ul>
											</li>
											<!-- eof shortcodes -->

											<li>
												<a href="shortcodes_widgets_default.html">Widgets</a>
												<ul>
													<li>
														<a href="shortcodes_widgets_default.html">Default Widgets</a>
													</li>
													<li>
														<a href="shortcodes_widgets_shop.html">Shop Widgets</a>
													</li>
													<li>
														<a href="shortcodes_widgets_custom.html">Custom Widgets</a>
													</li>
												</ul>

											</li>


											<!-- events -->
											<li>
												<a href="events-left.html">Events</a>
												<ul>
													<li>
														<a href="events-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="events-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="events-full.html">Full Width</a>
													</li>
													<li>
														<a href="event-single-left.html">Single Event</a>
														<ul>
															<li>
																<a href="event-single-left.html">Left Sidebar</a>
															</li>
															<li>
																<a href="event-single-right.html">Right Sidebar</a>
															</li>
															<li>
																<a href="event-single-full.html">Full Width</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<!-- eof events -->

											<li>
												<a href="chiefs.html">Chiefs</a>
												<ul>
													<li>
														<a href="chiefs.html">Chiefs List</a>
													</li>
													<li>
														<a href="chief-single.html">Chiefs Member</a>
													</li>
												</ul>
											</li>


											<li>
												<a href="comingsoon.html">Comingsoon</a>
											</li>

											<li>
												<a href="faq.html">FAQ</a>
												<ul>
													<li>
														<a href="faq.html">FAQ</a>
													</li>
													<li>
														<a href="faq2.html">FAQ 2</a>
													</li>
												</ul>
											</li>
											<li>
												<a href="404.html">404</a>
											</li>

										</ul>
									</li>
									<!-- eof pages -->

									<li>
										<a href="program1.html">Programs</a>
										<ul>
											<li>
												<a href="program1.html">Program 1</a>
											</li>
											<li>
												<a href="program2.html">Program 2</a>
											</li>
											<li>
												<a href="program3.html">Program 3</a>
											</li>
											<li>
												<a href="program-single.html">Single Program</a>
											</li>
										</ul>
									</li>

									<!-- blog -->
									<li>
										<a href="blog-right.html">recipes</a>
										<ul>

											<li>
												<a href="blog-right.html">Right Sidebar</a>
											</li>
											<li>
												<a href="blog-left.html">Left Sidebar</a>
											</li>
											<li>
												<a href="blog-full.html">No Sidebar</a>
											</li>
											<li>
												<a href="blog-grid.html">Blog Grid</a>
											</li>

											<li>
												<a href="blog-single-right.html">Post</a>
												<ul>
													<li>
														<a href="blog-single-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="blog-single-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="blog-single-full.html">No Sidebar</a>
													</li>
												</ul>
											</li>

											<li>
												<a href="blog-single-video-right.html">Video Post</a>
												<ul>
													<li>
														<a href="blog-single-video-right.html">Right Sidebar</a>
													</li>
													<li>
														<a href="blog-single-video-left.html">Left Sidebar</a>
													</li>
													<li>
														<a href="blog-single-video-full.html">No Sidebar</a>
													</li>
												</ul>
											</li>

										</ul>
									</li>
									<!-- eof blog -->


									<!-- gallery -->
									<li>
										<a href="gallery-regular-3-cols.html">Gallery</a>
										<ul>
											<!-- Gallery image only -->
											<li>
												<a href="gallery-regular-3-cols.html">Gallery Regular</a>
												<ul>
													<li>
														<a href="gallery-regular-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-regular-3-cols.html">3 columns</a>
													</li>
													<li>
														<a href="gallery-regular-4-cols.html">4 columns</a>
													</li>

												</ul>
											</li>
											<!-- eof Gallery image only -->

											<!-- Gallery with title -->
											<li>
												<a href="gallery-title-3-cols.html">Gallery Title</a>
												<ul>
													<li>
														<a href="gallery-title-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-title-3-cols.html">3 column</a>
													</li>
													<li>
														<a href="gallery-title-4-cols.html">4 columns</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery with title -->

											<!-- Gallery with excerpt -->
											<li>
												<a href="gallery-excerpt-3-cols.html">Gallery Excerpt</a>
												<ul>
													<li>
														<a href="gallery-excerpt-2-cols.html">2 columns</a>
													</li>
													<li>
														<a href="gallery-excerpt-3-cols.html">3 column</a>
													</li>
													<li>
														<a href="gallery-excerpt-4-cols.html">4 columns fullwdith</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery with excerpt -->

											<li>
												<a href="gallery-tiled.html">Tiled Gallery</a>
											</li>

											<!-- Gallery item -->
											<li>
												<a href="gallery-single.html">Gallery Item</a>
												<ul>
													<li>
														<a href="gallery-single.html">Style 1</a>
													</li>
													<li>
														<a href="gallery-single2.html">Style 2</a>
													</li>
												</ul>
											</li>
											<!-- eof Gallery item -->
										</ul>
									</li>
									<!-- eof Gallery -->

									<!-- contacts -->
									<li>
										<a href="contact.html">Contacts</a>
										<ul>
											<li>
												<a href="contact.html">Contact 1</a>
											</li>
											<li>
												<a href="contact2.html">Contact 2</a>
											</li>
											<li>
												<a href="contact3.html">Contact 3</a>
											</li>
											<li>
												<a href="contact4.html">Contact 4</a>
											</li>
											<li>
												<a href="contact5.html">Contact 5</a>
											</li>
										</ul>
									</li>
									<!-- eof contacts -->

									<li>
										<a href="#">Features</a>
										<div class="mega-menu">
											<ul class="mega-menu-row">
												<li class="mega-menu-col">
													<a href="#">Headers</a>
													<ul>
														<li>
															<a href="header1.html">Header Type 1</a>
														</li>
														<li>
															<a href="header2.html">Header Type 2</a>
														</li>
														<li>
															<a href="header3.html">Header Type 3</a>
														</li>
														<li>
															<a href="header4.html">Header Type 4</a>
														</li>
														<li>
															<a href="header5.html">Header Type 5</a>
														</li>
														<li>
															<a href="header6.html">Header Type 6</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="#">Side Menus</a>
													<ul>
														<li>
															<a href="header-side.html">Push Left</a>
														</li>
														<li>
															<a href="header-side-right.html">Push Right</a>
														</li>
														<li>
															<a href="header-side-slide.html">Slide Left</a>
														</li>
														<li>
															<a href="header-side-slide-right.html">Slide Right</a>
														</li>
														<li>
															<a href="header-side-sticked.html">Sticked Left</a>
														</li>
														<li>
															<a href="header-side-sticked-right.html">Sticked Right</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="title1.html">Title Sections</a>
													<ul>
														<li>
															<a href="title1.html">Title section 1</a>
														</li>
														<li>
															<a href="title2.html">Title section 2</a>
														</li>
														<li>
															<a href="title3.html">Title section 3</a>
														</li>
														<li>
															<a href="title4.html">Title section 4</a>
														</li>
														<li>
															<a href="title5.html">Title section 5</a>
														</li>
														<li>
															<a href="title6.html">Title section 6</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="footer1.html#footer">Footers</a>
													<ul>
														<li>
															<a href="footer1.html#footer">Footer Type 1</a>
														</li>
														<li>
															<a href="footer2.html#footer">Footer Type 2</a>
														</li>
														<li>
															<a href="footer3.html#footer">Footer Type 3</a>
														</li>
														<li>
															<a href="footer4.html#footer">Footer Type 4</a>
														</li>
														<li>
															<a href="footer5.html#footer">Footer Type 5</a>
														</li>
														<li>
															<a href="footer6.html#footer">Footer Type 6</a>
														</li>
													</ul>
												</li>
												<li class="mega-menu-col">
													<a href="copyright1.html#copyright">Copyright</a>

													<ul>
														<li>
															<a href="copyright1.html#copyright">Copyright 1</a>
														</li>
														<li>
															<a href="copyright2.html#copyright">Copyright 2</a>
														</li>
														<li>
															<a href="copyright3.html#copyright">Copyright 3</a>
														</li>
														<li>
															<a href="copyright4.html#copyright">Copyright 4</a>
														</li>
														<li>
															<a href="copyright5.html#copyright">Copyright 5</a>
														</li>
														<li>
															<a href="copyright6.html#copyright">Copyright 6</a>
														</li>
													</ul>
												</li>

											</ul>
										</div>
										<!-- eof mega menu -->
									</li>
									<!-- eof features -->
								</ul>


							</nav>
							<!-- eof main nav -->
						</div>
						<div class="col-xl-2 col-lg-3 text-left text-xl-right d-none d-lg-block">
							<span>
								<a href="#" class="btn btn-maincolor2">Visit workshop</a>
							</span>
						</div>
					</div>
				</div>
				<!-- header toggler -->
				<span class="toggle_menu">
					<span></span>
				</span>
			</header>


			<section class="page_title ds s-py-10 s-py-xl-25 breadcrumb-image s-overlay">
				<div class="container">
					<div class="row">

						<div class="divider-50"></div>

						<div class="col-md-12 text-center">
							<h1 class="fw-400">FAQ</h1>
							<ol class="breadcrumb">
								<li class="breadcrumb-item">
									<a href="./">Home</a>
								</li>
								<li class="breadcrumb-item">
									<a href="#">Pages</a>
								</li>
								<li class="breadcrumb-item active">
									FAQ
								</li>
							</ol>
						</div>

						<div class="divider-50"></div>

					</div>
				</div>
			</section>


			<section class="ls s-pt-75 s-pb-75 s-pb-md-50 s-py-lg-100">
				<div class="container">
					<div class="row">
						<div class="divider-60 d-none d-xl-block"></div>


						<div class="col-md-6">
							<div id="accordion01" role="tablist">
								<div class="card">
									<div class="card-header" role="tab" id="collapse01_header">
										<h5>
											<a data-toggle="collapse" href="#collapse01" aria-expanded="true" aria-controls="collapse01">
												<i class="fa fa-pencil" aria-hidden="true"></i>
												Bacon ipsum dolor amet tail?
											</a>
										</h5>
									</div>

									<div id="collapse01" class="collapse show" role="tabpanel" aria-labelledby="collapse01_header" data-parent="#accordion01">
										<div class="card-body">
											<p>
												Bacon ipsum dolor amet boudin jerky chuck turkey tail shank andouille capicola shankle corned beef shoulder jowl. Turducken short loin kielbasa ribeye salami filet.
											</p>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" role="tab" id="collapse02_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse02" aria-expanded="false" aria-controls="collapse02">
												<i class="fa fa-pencil" aria-hidden="true"></i>
												Lorem ipsum dolor sit amet elit?
											</a>
										</h5>
									</div>
									<div id="collapse02" class="collapse" role="tabpanel" aria-labelledby="collapse02_header" data-parent="#accordion01">
										<div class="card-body">
											<p>
												Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred.
											</p>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" role="tab" id="collapse04_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse04" aria-expanded="false" aria-controls="collapse04">
												<i class="fa fa-pencil" aria-hidden="true"></i>
												Integer venenatis tellus et est?
											</a>
										</h5>
									</div>
									<div id="collapse04" class="collapse" role="tabpanel" aria-labelledby="collapse04_header" data-parent="#accordion01">
										<div class="card-body">
											<p>
												Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable sunt aliqua put a bird on.
											</p>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" role="tab" id="collapse05_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse05" aria-expanded="false" aria-controls="collapse05">
												<i class="fa fa-pencil" aria-hidden="true"></i>
												Maecenas vel libero ex nec sem eros?
											</a>
										</h5>
									</div>
									<div id="collapse05" class="collapse" role="tabpanel" aria-labelledby="collapse05_header" data-parent="#accordion01">
										<div class="card-body">
											<p>
												Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred.
											</p>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" role="tab" id="collapse06_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse06" aria-expanded="false" aria-controls="collapse06">
												<i class="fa fa-pencil" aria-hidden="true"></i>
												Etiam massa diam, malesuada ac purus?
											</a>
										</h5>
									</div>
									<div id="collapse06" class="collapse" role="tabpanel" aria-labelledby="collapse06_header" data-parent="#accordion01">
										<div class="card-body">
											<p>
												Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable sunt aliqua put a bird on.
											</p>
										</div>
									</div>
								</div>
							</div>
							<!-- collapse -->
						</div>

						<div class="col-md-6">

							<div id="accordion02" role="tablist">

								<div class="card">
									<div class="card-header" role="tab" id="collapse03_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse03" aria-expanded="false" aria-controls="collapse03">
												<i class="fa fa-pencil" aria-hidden="true"></i>
												Cras non tincidunt massa?
											</a>
										</h5>
									</div>
									<div id="collapse03" class="collapse" role="tabpanel" aria-labelledby="collapse03_header" data-parent="#accordion02">
										<div class="card-body">
											<p>
												Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable sunt aliqua put a bird on.
											</p>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" role="tab" id="collapse07_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse07" aria-expanded="false" aria-controls="collapse07">
												<i class="fa fa-pencil" aria-hidden="true"></i>
												Etiam suscipit arcu quis massa?
											</a>
										</h5>
									</div>
									<div id="collapse07" class="collapse" role="tabpanel" aria-labelledby="collapse07_header" data-parent="#accordion02">
										<div class="card-body">
											<p>
												Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred.
											</p>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" role="tab" id="collapse08_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse08" aria-expanded="false" aria-controls="collapse08">
												<i class="fa fa-pencil" aria-hidden="true"></i>
												Maecenas ornare ante pharetra?
											</a>
										</h5>
									</div>
									<div id="collapse08" class="collapse" role="tabpanel" aria-labelledby="collapse08_header" data-parent="#accordion02">
										<div class="card-body">
											<p>
												Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable sunt aliqua put a bird on.
											</p>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" role="tab" id="collapse09_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse09" aria-expanded="false" aria-controls="collapse09">
												<i class="fa fa-pencil" aria-hidden="true"></i>
												Aliquam mattis vel tortor ac tristique?
											</a>
										</h5>
									</div>
									<div id="collapse09" class="collapse" role="tabpanel" aria-labelledby="collapse09_header" data-parent="#accordion02">
										<div class="card-body">
											<p>
												Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred.
											</p>
										</div>
									</div>
								</div>

								<div class="card">
									<div class="card-header" role="tab" id="collapse10_header">
										<h5>
											<a class="collapsed" data-toggle="collapse" href="#collapse10" aria-expanded="false" aria-controls="collapse10">
												<i class="fa fa-pencil" aria-hidden="true"></i>
												Sed aliquam fermentum mauris?
											</a>
										</h5>
									</div>
									<div id="collapse10" class="collapse" role="tabpanel" aria-labelledby="collapse10_header" data-parent="#accordion02">
										<div class="card-body">
											<p>
												Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable sunt aliqua put a bird on it squid.
											</p>
										</div>
									</div>
								</div>


							</div>
							<!-- collapse -->

						</div>

						<div class="divider-50 d-none d-xl-block"></div>

					</div>
				</div>
			</section>

			<footer class="page_footer ds s-pt-90 s-pb-15 s-pt-lg-130 s-pb-lg-75 c-gutter-60 s-parallax">
				<div class="s-pt-60 s-pb-60 s-py-lg-60 cs cs2 s-parallax s-overlay discount text-center text-lg-left">
					<div class="container">
						<div class="row align-items-center">

							<div class="col-lg-8">
								<h3>
									Do You Want to Get a 30% Discount?
								</h3>
								<h6 class="small-text">
									Fill in the registration form for the course now and get a discount
								</h6>
							</div>

							<div class="col-lg-4 text-center text-lg-right">
								<a href="#" class="btn btn-lightcolor">fill out the form now</a>
							</div>
						</div>
					</div>
					<div class="divider-10"></div>
				</div>

				<div class="container">
					<div class="row">
						<div class="divider-30 d-none d-xl-block"></div>

						<div class="col-md-12 col-lg-4 animate text-center text-lg-left" data-animation="fadeInUp">
							<div class="widget widget_icons_list footer-list">
								<div class="text-center">
									<a href="./" class="logo logo-footer">
										<img src="images/logo.png" alt="">
										<span class="logo-text color-darkgrey">Muka
											<strong class="color-main">.</strong>
										</span>
									</a>
								</div>
								<p class="after-logo">Our Cooking School features a long and proud history of more than 100 years. Founded at the end of the XIXth century.</p>
								<p class="icon-inline">
									<span class="icon-styled color-main2">
										<i class="fa fa-map-marker"></i>
									</span>
									<span>828 Curtis Ferry, New York, USA</span>
								</p>
								<p class="icon-inline">
									<span class="icon-styled color-main2">
										<i class="fa fa-phone"></i>
									</span>
									<span>+8 (800) 238 3597 (admin)</span>
								</p>
								<p class="icon-inline">
									<span class="icon-styled color-main2">
										<i class="fa fa-envelope"></i>
									</span>
									<span>
										<a class="border-bottom" href="#"><span class="__cf_email__" data-cfemail="f499819f95ab9b92929d9791b4918c9599849891da979b99">[email&#160;protected]</span></a>
									</span>
								</p>
								<p class="icon-inline">
									<span class="icon-styled color-main2">
										<i class="fa fa-internet-explorer"></i>
									</span>
									<span>
										<a href="#">www.muka_cooking.com</a>
									</span>
								</p>

							</div>
						</div>
						<div class="col-md-6 col-lg-4 animate" data-animation="fadeInUp">
							<div class="widget widget_recent_posts">

								<h3 class="widget-title">Recent Posts</h3>
								<ul class="list-unstyled">
									<li class="media">
										<a class="media-image" href="blog-single-right.html">
											<img src="images/events/01.jpg" alt="">
										</a>
										<div class="media-body">
											<p>
												<a href="blog-single-right.html">Pro Cooking Tips Braising Meats For Tenderness</a>
											</p>
											<h6 class="item-meta">
												<i class="fa fa-calendar color-main"></i>
												20 jan, 18
											</h6>
										</div>
									</li>

									<li class="media">
										<a class="media-image" href="blog-single-right.html">
											<img src="images/events/02.jpg" alt="">
										</a>
										<div class="media-body">
											<p>
												<a href="blog-single-right.html">Barbecue Party Tips For A Truly Amazing Event</a>
											</p>
											<h6 class="item-meta">
												<i class="fa fa-calendar color-main"></i>
												23 jan, 18
											</h6>

										</div>
									</li>

									<li class="media">
										<a class="media-image" href="blog-single-right.html">
											<img src="images/events/03.jpg" alt="">
										</a>
										<div class="media-body">
											<p>
												<a href="blog-single-right.html">The Best Way To Cook Your Freshly Caught Fish</a>
											</p>
											<h6 class="item-meta">
												<i class="fa fa-calendar color-main"></i>
												25 jan, 18
											</h6>

										</div>
									</li>

								</ul>
							</div>


						</div>

						<div class="col-md-6 col-lg-4 animate text-center text-lg-left" data-animation="fadeInUp">
							<div class="widget widget_mailchimp footer_mailchimp">

								<h3 class="widget-title">Subscribe Now</h3>

								<p>
									Enter Email here to be updated. We promise not to send you spam!
								</p>

								<form class="signup" action="/">
									<label for="mailchimp_email">
										<span class="screen-reader-text">Subscribe:</span>
									</label>

									<input id="mailchimp_email" name="email" type="email" class="form-control mailchimp_email ds" placeholder="Enter Email address">

									<button type="submit" class="btn btn-maincolor">Subscribe</button>
									<div class="response"></div>
								</form>

							</div>
						</div>
						<div class="divider-20 d-none d-xl-block"></div>
					</div>
				</div>
			</footer>

			<section class="page_copyright ds s-py-25 s-py-lg-5 s-parallax s-overlay footer-overlay">
				<div class="container">
					<div class="row align-items-center">
						<div class="divider-20 d-none d-lg-block"></div>
						<div class="col-md-12 text-center">
							<p>&copy; Copyright
								<span class="copyright_year">2018</span> All Rights Reserved</p>
						</div>
						<div class="divider-20 d-none d-lg-block"></div>
					</div>
				</div>
			</section>


		</div>
		<!-- eof #box_wrapper -->
	</div>
	<!-- eof #canvas -->


  <script src="js/compressed.js"></script>
	<script src="js/main.js"></script>
	<script src="js/switcher.js"></script>

</body>

</html>