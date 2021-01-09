<?php
$title = get_sub_field('title');
$disc = get_sub_field('description');
$background_image = get_sub_field('background_image');


?>


<section class="hero" style="background-image: url(<?php echo $background_image['url']; ?>);">
				<div class="container">
					<div class="row">
						<div class="col-xs-12 column">
							<div class="text">
								<h1><?php echo $title; ?></h1>
								<p><?php echo $disc; ?></p>
							</div>
						</div>
					</div>
				</div>
</section>