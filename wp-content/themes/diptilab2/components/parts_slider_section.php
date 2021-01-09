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
            if ($enable_image) {
                $image = get_sub_field('image');
                $image_content = '<img src="' . $image['url'] . '" />';
            } else {
                $icon_class = get_sub_field('icon_class');
                $image_content = '<i class="' . $icon_class . '"></i>';
            }

            $background_color = get_sub_field('background_color');
            $content_alignment = get_sub_field('content_alignment');

    ?>
            <div class="slide <?php echo $background_color; ?> no-image">
                <div class="container">
                    <div class="row">
                        <?php if ($content_alignment == "Left") : ?>
                            <div class="col-xs-6 text-center">
                                <?php echo $image_content; ?>
                            </div>
                        <?php endif; ?>
                        <div class="col-xs-6">
                            <h2><?php echo $title; ?></h2>
                            <p><?php echo $disc; ?></p>
                        </div>
                        <?php if ($content_alignment == "Right") : ?>
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