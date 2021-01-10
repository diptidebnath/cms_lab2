<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8" />
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php
$logo = get_field('logo','option');
$facebook = get_field('facebook','option');
$twitter = get_field('twitter','option');
$instagram = get_field('instagram','option');
$linkedin = get_field('linkedin','option');
?>








	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
					<a class="logo" href="<?php echo get_site_url(); ?>">

							<?php if($logo){?>
							<img src="<?php echo $logo; ?>">
							<?php } 
							else {
								echo get_bloginfo( 'name' );
							}
							
							?>

						</a>
					</div>
					<div class="col-sm-6 hidden-xs">
					<?php

					/* Displays a navigation menu */
						wp_nav_menu(array(
							'theme_location' => 'header-menu',
							'container' => 'ul',
							'menu_class' => 'menu'
						)); ?>
					</div>
					<div class="col-xs-4 text-right visible-xs">
						<div class="mobile-menu-wrap">
							<i class="fa fa-search"></i>
							<i class="fa fa-bars menu-icon"></i>
						</div>
					</div>
				</div>
			</div>
		</header>

		<div class="mobile-search">
			<form id="searchform" class="searchform">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" />
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-8">
						<?php echo get_breadcrumb(); ?>
					</div>
					<div class="col-xs-4">
						<ul class="social">
							<li>
								<a href="<?php echo $facebook;?>">
									<i class="fa fa-facebook"></i>
								</a>
							</li>
							<li>
								<a href="<?php echo $twitter;?>">
									<i class="fa fa-twitter"></i>
								</a>
							</li>
							<li>
								<a href="<?php echo $instagram;?>">
									<i class="fa fa-instagram"></i>
								</a>
							</li>
							<li>
								<a href="<?php echo $linkedin;?>">
									<i class="fa fa-linkedin"></i>
								</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>