<!DOCTYPE html>
<html>

<head>
	<meta charset="UTF-8" />
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">


	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

	<div id="wrap">

		<header id="header">
			<div class="container">
				<div class="row">
					<div class="col-xs-8 col-sm-6">
						<a class="logo" href="<?php echo get_site_url(); ?>">Labb 1</a>
					</div>
					<div class="col-sm-6 hidden-xs">
						<form id="searchform" class="searchform" action="<?php echo get_site_url(); ?>">
							<div>
								<label class="screen-reader-text">Sök efter:</label>
								<input type="text" value="" name="s" id="s">
								<input type="submit" value="Sök" />
							</div>
						</form>
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
			<form id="searchform" class="searchform" action="<?php echo get_site_url(); ?>">
				<div>
					<label class="screen-reader-text">Sök efter:</label>
					<input type="text" value="" name="s" id="s">
					<input type="submit" value="Sök" />
				</div>
			</form>
		</div>

		<nav id="nav">
			<div class="container">
				<div class="row">
					<div class="col-xs-12">
						<?php

					/* Displays a navigation menu */
						wp_nav_menu(array(
							'theme_location' => 'header-menu',
							'container' => 'ul',
							'menu_class' => 'menu'
						)); ?>
					</div>
				</div>
			</div>
		</nav>