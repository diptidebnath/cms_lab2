<?php
$title = get_sub_field('title');
$background_color = get_sub_field('background_color');
?>


<section class="columns <?php echo $background_color; ?> text-center">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12">
                <h2><?php echo $title; ?></h2>
            </div>

        </div>
        <div class="row bottom">
            <?php

            // Check rows exists.
            if (have_rows('team_members')) :

                // Loop through rows.
                while (have_rows('team_members')) : the_row();

                    // Load sub field value.
                    $name = get_sub_field('name');
                    $disc = get_sub_field('description');
                    $image = get_sub_field('image');
                    $button_link = get_sub_field('button_link');
                    $button_text = get_sub_field('button_text');


            ?>


                    <div class="col-xs-3">
                        <img src="<?php echo $image['url']; ?>" />
                        <h3><?php echo $name; ?></h3>
                        <p><?php echo $disc; ?></p>
                        <a href="<?php echo $button_link; ?>" class="btn btn-default"><?php echo $button_text; ?></a>
                    </div>

            <?php
                // End loop.
                endwhile;
            endif;
            ?>

        </div>
    </div>
</section>