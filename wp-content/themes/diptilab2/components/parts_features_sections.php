<?php
$title = get_sub_field('title');
$columns = get_sub_field('how_many_column');
$background_color = get_sub_field('background_color');

if($columns == 2){
	$columns_class = "col-xs-6";
}
else if($columns == 3){
	$columns_class = "col-xs-4";
}
else{
	$columns_class = "col-xs-3";
}

?>



<section class="columns text-center <?php echo $background_color;?> ">
				<div class="container">
					<div class="row top">
						<div class="col-xs-12">
							<h2><?php echo $title;?></h2>
						</div>
					</div>
					<div class="row bottom">


                    <?php

// Check rows exists.
if (have_rows('feature')) :

    // Loop through rows.
    while (have_rows('feature')) : the_row();

        // Load sub field value.
        $feature_title = get_sub_field('title');
        $disc = get_sub_field('description');
        $icon_class = get_sub_field('icon_class');
        

?>



						<div class="<?php echo $columns_class; ?>">
							<i class="<?php echo $icon_class;?>"></i>
							<h3><?php echo $feature_title;?></h3>
							<p><?php echo $disc;?></p>
						</div>
                        
                        <?php
        // End loop.
        endwhile;
    endif;
    ?>
					</div>
				</div>
			</section>