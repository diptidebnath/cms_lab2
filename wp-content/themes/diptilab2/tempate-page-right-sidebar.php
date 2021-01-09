<?php

/**
 * Template Name: Right Sidebar Page
 *
 */
get_header();
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12 col-md-9">
                    <?php if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            the_title('<h1>', '</h1>');
                            the_content();
                        }
                    } ?>

                </div>
                <aside id="secondary" class="col-xs-12 col-md-3">
                    <?php
                    $children = wp_list_pages(array(
                        'title_li' => '',
                        'child_of' => $post->post_parent,
                        'echo' => false,
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