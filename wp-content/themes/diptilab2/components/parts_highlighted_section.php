<?php
$content = get_sub_field('content');
$button_text = get_sub_field('button_text');
$button_url = get_sub_field('button_url');
$background_color = get_sub_field('background_color');
$offset_class = "col-xs-offset-3 text-center";
if($button_url && $button_text){
	$offset_class = "col-xs-offset-2";
}


?>
<section class="testimonial <?php echo $background_color;?> ">
				<div class="container">
					<div class="row">
						<div class="col-xs-6 <?php echo $offset_class; ?> ">
							<h2><?php echo $content; ?></h2>
						</div>

						<?php if($button_url && $button_text):?>
						<div class="col-xs-2 text-right">
							<a href="<?php echo $button_url; ?>" class="btn btn-default"><?php echo $button_text; ?></a>
						</div>
						<?php endif; ?>
					</div>
				</div>
			</section>



			