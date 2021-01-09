<?php
$title = get_sub_field('title');
$description = get_sub_field('description');
$image = get_sub_field('image');
if($image){
	$image_url = $image['url'];
}
else{
	$image_url = "https://via.placeholder.com/728x90.png?text=placeholder+image";
}
$alignment = get_sub_field('alignment');
?>
<section class="standard">
	<div class="container">
		<div class="row">
			<?php if ($alignment == "image_content") { ?>
				<div class="col-xs-6">
					<img src="<?php echo $image_url; ?>" />
				</div>
			<?php } ?>

			<div class="col-xs-6">
				<?php if ($title) { ?>
					<h1><?php echo $title; ?></h1>
				<?php } ?>
				<?php if ($description) {
					echo $description;
				} ?>

			</div>
			<?php if ($alignment != "image_content") { ?>
				<div class="col-xs-6">
				<img src="<?php echo $image_url; ?>" />
				</div>
			<?php } ?>

		</div>
	</div>
</section>