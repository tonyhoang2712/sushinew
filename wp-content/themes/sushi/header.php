<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package sushi
 */

?>
<!doctype html>
	<html <?php language_attributes(); ?>>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&family=Oregano&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/carousel/dist/assets/owl.carousel.min.css">
		<link rel="stylesheet" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/carousel/dist/assets/owl.theme.default.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/mycss/main.css">
		<link rel="stylesheet" type="text/css" href="<?php echo esc_url(get_template_directory_uri()); ?>/assets/mycss/style.css">
		<?php wp_head(); ?>
		<title>Jiro Sushi</title>
	</head>
	<body <?php body_class(); ?>>
		<div class="my-loading">
			<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/Loading_icon.gif">
		</div>
		<header class="clearfix">
			<!-- <div class="header_desktop"> -->
				<div class="container">
					<nav class="navbar navbar-expand-lg navbar-light main-nav">
						<a class="navbar-brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/logo.png" alt="Logo"></a>
						<div>
							<button class="js-show-min-cart js-show-min-cart-custom-1">
								<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart.png" class="icon-nav" alt="cart">
							</button>
							<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
								<span class="navbar-toggler-icon"></span>
							</button>
						</div>
						<div class="collapse navbar-collapse" id="navbarText">
							<ul class="navbar-nav ml-auto navbar-nav-custom">
								<li class="nav-item active">
									<a class="nav-link" href="<?php echo get_home_url(); ?>">Trang Ch???</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo get_permalink( wc_get_page_id( 'shop' ) ); ?>">Th???c ????n</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="<?php echo get_home_url(); ?>#contact">?????t B??n</a>
								</li>
								<li class="nav-item">
									<a class="nav-link" href="tel:0964883997">
										<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/call.png" class="icon-nav" alt="call">
										<span>0964 883 997</span></a>
									</li>
									<li class="nav-item">
										<a class="nav-link position-relative js-show-min-cart" href="#">
											<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/cart.png" class="icon-nav" alt="cart">
											<span class="badge badge-light"><?php echo WC()->cart->get_cart_contents_count() ;?></span>
										</a>
									</li>
								</ul>
							</div>
						</nav>

						<div class="shop-mini">

							<?php
							woocommerce_mini_cart(); ?>
							<!-- <button class="shop-mini-close">
								<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M19.5304 5.53033C19.8232 5.23744 19.8232 4.76256 19.5304 4.46967C19.2375 4.17678 18.7626 4.17678 18.4697 4.46967L12 10.9394L5.53033 4.46967C5.23744 4.17678 4.76256 4.17678 4.46967 4.46967C4.17678 4.76257 4.17678 5.23744 4.46967 5.53033L10.9394 12L4.4697 18.4697C4.1768 18.7626 4.1768 19.2374 4.4697 19.5303C4.76259 19.8232 5.23746 19.8232 5.53036 19.5303L12 13.0607L18.4697 19.5303C18.7626 19.8232 19.2374 19.8232 19.5303 19.5303C19.8232 19.2374 19.8232 18.7626 19.5303 18.4697L13.0607 12L19.5304 5.53033Z" fill="#999999"/>
								</svg>
							</button>
							<div class="box-item">
								<div class="img">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ic-mini.png" alt="ICON" />
								</div>
								<div class="payment">
									<p>Set Sushi 1</p>
									<p class="price">69.000??</p>
									<p class="wrap-quantity">
										<a class="unNum">-</a>
										<input type="text" value="1" class="quantity" aria-label="quantity">
										<a class="upNum">+</a>
									</p>
								</div>
								<div class="action">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/trash.png" alt="ICON" />
								</div>
							</div>
							<div class="box-item">
								<div class="img">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ic-mini.png" alt="ICON" />
								</div>
								<div class="payment">
									<p>Set Sushi 1</p>
									<p class="price">69.000??</p>
									<p class="wrap-quantity">
										<a class="unNum">-</a>
										<input type="text" value="1" class="quantity" aria-label="quantity">
										<a class="upNum">+</a>
									</p>
								</div>
								<div class="action">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/trash.png" alt="ICON" />
								</div>
							</div>
							<div class="box-item">
								<div class="img">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/ic-mini.png" alt="ICON" />
								</div>
								<div class="payment">
									<p class="title">Set Sushi 1</p>
									<p class="price">69.000??</p>
									<p class="wrap-quantity">
										<a class="unNum">-</a>
										<input type="text" value="1" class="quantity" aria-label="quantity">
										<a class="upNum">+</a>
									</p>
								</div>
								<div class="action">
									<img src="<?php echo esc_url(get_template_directory_uri()); ?>/assets/images/trash.png" alt="ICON" />
								</div>
							</div>
							<div class="box-calculation">
								<span>T???ng ti???n h??ng</span>
								<span>150.000??</span>
							</div> -->
						</div>

					</div>
  </header>

  <style type="text/css">
  	p.woocommerce-mini-cart__buttons.buttons {
  		display: flex;
	    align-items: center;
	    justify-content: space-around;
  	}
  	.shop-mini {
	    width: 300px;
	    padding: 10px;
	    height: auto;
	}
	.woocommerce ul.cart_list li img, .woocommerce ul.product_list_widget li img {
	    float: right;
	    margin-left: 4px;
	    width: 55px;
	    height: auto;
	    box-shadow: none;
	}
  </style>