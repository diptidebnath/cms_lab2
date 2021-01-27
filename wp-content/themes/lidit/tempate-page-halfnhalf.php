<?php

/**
 * Template Name: Half & Half Page
 *
 */
get_header();
$image = get_field('image');
?>
<main>
    <section class="standard">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 col-md-6">
                    <?php if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            the_title('<h1>', '</h1>');
                            the_content();
                        }
                    } ?>
                </div>
                <div class="col-xs-12 col-sm-4 col-md-6">
                    <img src="<?php echo $image['url']; ?>" />

                </div>
            </div>
        </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>