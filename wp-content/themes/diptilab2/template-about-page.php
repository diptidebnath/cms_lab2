<?php

/**
 * Template Name: About Page
 *
 */
get_header();
?>
<main>
    <section>
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12">
                    <?php if (have_posts()) {
                        while (have_posts()) {
                            the_post();
                            //the_title('<h1>', '</h1>');
                           // the_content();
                        }
                    } ?>
                </div>

            </div>
        </div>
        </div>
    </section>
    
    
    <?php

// Check value exists.
if( have_rows('content_for_about_page') ):

    // Loop through rows.
    while ( have_rows('content_for_about_page') ) : the_row();

        // Case: hero_section.
        if( get_row_layout() == 'two_column_section' ):
            get_template_part(('components/parts_two_column_section'));

        // Case: highlighted_section.
        elseif( get_row_layout() == 'highlighted_section' ): 
            get_template_part(('components/parts_about_highlighted_section'));

             // Case: features_sections.
        elseif( get_row_layout() == 'features_sections' ): 
            get_template_part(('components/parts_features_sections'));

             // Case: slider_section.
        elseif( get_row_layout() == 'slider_section' ): 
            get_template_part(('components/parts_slider_section'));

            // Case: testimonial_sections.
        elseif( get_row_layout() == 'testimonial_sections' ): 
            get_template_part(('components/parts_testimonial_sections'));

        endif;

    // End loop.
    endwhile;

// No value.
else :
    // Do something...
endif;
    
    ?>
    
</main>

<?php
get_footer();
?>