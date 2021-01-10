<section class="slideshow" data-autoplay="3000" data-singleitem="true">

    <?php

    // Check rows exists.
    if (have_rows('slider')) :

        // Loop through rows.
        while (have_rows('slider')) : the_row();

            // Load sub field value.
            $title = get_sub_field('title');
            $disc = get_sub_field('description');
            $enable_image = get_sub_field('enable_image');
            
            if ($enable_image == "image") {
                $image = get_sub_field('image');
                $image_content = '<img src="' . $image['url'] . '" />';
            }
             else if ($enable_image == "icon"){
                $icon_class = get_sub_field('icon_class');
                $image_content = '<i class="' . $icon_class . '"></i>';
            }
            else{
                $image_content = "";
            }
         
            $content_class = ($image_content == "")?"col-xs-12":"col-xs-6";

            $background_color = get_sub_field('background_color');
            $content_alignment = get_sub_field('content_alignment');
            $background_image = get_sub_field('background_image');
            
    ?>
            <div class="slide <?php echo $background_color; ?> no-image" <?php if($background_image){?> 
            style="background-image: url(<?php echo $background_image['url']; ?>);" <?php }?> >
                <div class="container">
                    <div class="row">
                        <?php if ($content_alignment == "Left" && $image_content != "") : ?>
                            <div class="col-xs-6 text-center">
                                <?php echo $image_content; ?>
                            </div>
                        <?php endif; ?>
                        <div class="<?php echo $content_class ?>">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $disc; ?></p>
                        </div>
                        <?php if ($content_alignment == "Right" && $image_content != "") : ?>
                            <div class="col-xs-6 text-center">
                                <?php echo $image_content; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>

    <?php
        // End loop.
        endwhile;
    endif;
    ?>
</section>