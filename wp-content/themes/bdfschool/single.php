<?php

/**
 * The single post
 *
 */

get_header();
?>
 
<section class="origin-post main clearfix">

    <?php if (have_posts()) {
        while (have_posts()) {
            the_post();

            the_content();
        }
    } ?>
</section>
<?php get_sidebar(); ?>
<?php
get_footer();
?>