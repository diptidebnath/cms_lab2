<?php

/**
 * Template Name: Left Sidebar Page
 *
 */
get_header();
?>
<main>
    <section class="standard">
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9 col-md-push-3">
                    <?php if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            the_title('<h1>', '</h1>');
                            the_content();
                        }
                    } ?>
                </div>
                <aside id="secondary" class="col-xs-12 col-md-3 col-md-pull-9">


                    <?php
                    

                    if (is_page() && $post->post_parent > 0) {
                        // post has parents

                        $parent_id = wp_get_post_parent_id($post->ID);
                    } else {
                        // post has no parents
                        $parent_id = $post->ID;
                    }

                    $children = wp_list_pages(array(
                        'child_of' => $parent_id,
                        'exclude' => $parent_id,
                        'depth' => 1,
                        'echo' => false,
                        'title_li' => '',
                    ));

                    $children = wp_list_pages(array(
                        'child_of' => $post->post_parent,
                        'exclude' => wp_get_post_parent_id($post->ID),
                        'depth' => 1,
                        'echo' => false,
                        'title_li' => '',
                    ));

                    if ($children) : ?>
                        <ul class="side-menu">
                            <?php echo $children; ?>
                        </ul>
                    <?php endif; ?>

                </aside>
            </div>
        </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>