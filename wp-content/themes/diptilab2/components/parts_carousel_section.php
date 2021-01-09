<?php
$number_of_img = get_sub_field('how_many_image');

?>

<section class="slideshow" data-autoplay="5000" data-singleitem="false" data-items="<?php echo $number_of_img;?>">

<?php

// Check rows exists.
if (have_rows('slider')) :

    // Loop through rows.
    while (have_rows('slider')) : the_row();

        // Load sub field value.
        $image = get_sub_field('image');
?>

				<div class="slide" style="background-image: url('<?php echo $image['url'];?>');">
				</div>
				<?php
            // End loop.
        endwhile;
    endif;
    ?>
			</section>
            

