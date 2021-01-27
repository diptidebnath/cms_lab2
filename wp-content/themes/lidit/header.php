
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


<header>
    <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <a class="navbar-brand" href="<?php echo get_site_url(); ?>">
	  <?php if($logo){?>
	  <img src="<?php echo $logo; ?>">
	  <?php } 
							else {
								echo get_bloginfo( 'name' );
							}
							
							?>
							</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
        aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item">
            <a class="nav-link" href="index.html">HOME</a>
          </li>


          <li class="nav-item active">
            <a class="nav-link" href="about.html">ABOUT US<span class="sr-only">(current)</span></a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="services.html">SERVICES</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="team.html">OUR TEAM</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="portfolio.html">PORTFOLIO</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="contacts.html">CONTACTS</a>
          </li>


        </ul>

      </div>
    </nav>
  </header>