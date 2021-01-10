<?php

/**
 * Template Name: Flexible Content Page
 *
 */
get_header();
?>
<main>

    <?php

    // Check value exists.
    if (have_rows('content_for_home_page')) :

        // Loop through rows.
        while (have_rows('content_for_home_page')) : the_row();

            // Case: hero_section.
            if (get_row_layout() == 'hero_section') :
                get_template_part(('components/parts_hero_section'));

            // Case: highlighted_section.
            elseif (get_row_layout() == 'highlighted_section') :
                get_template_part(('components/parts_highlighted_section'));

            // Case: highlighted_section.
            elseif (get_row_layout() == 'two_column_content_section') :
                get_template_part(('components/parts_two_column_content_section'));

            // Case: features_sections.
            elseif (get_row_layout() == 'features_sections') :
                get_template_part(('components/parts_features_sections'));

            // Case: slider_section.
            elseif (get_row_layout() == 'slider_section') :
                get_template_part(('components/parts_slider_section'));

            // Case: testimonial_sections.
            elseif (get_row_layout() == 'testimonial_sections') :
                get_template_part(('components/parts_testimonial_sections'));

            // Case: testimonial_sections.
            elseif (get_row_layout() == 'team_section') :
                get_template_part(('components/parts_team_section'));
            // Case: testimonial_sections.
            elseif (get_row_layout() == 'carousel_section') :
                get_template_part(('components/parts_carousel_section'));
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