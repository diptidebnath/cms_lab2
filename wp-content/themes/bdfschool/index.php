<?php

/**
 * The main template file
 *
 */

get_header();
?>

<section class="main clearfix">
    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();

            the_content();
        }
    } ?>
</section>
<?php
get_footer();
?>