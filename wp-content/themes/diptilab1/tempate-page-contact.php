<?php

/**
 * Template Name: Contact Page
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
                            the_title('<h1>', '</h1>');
                            the_content();
                        }
                    } ?>
                    <form>
                        <label>Namn</label>
                        <input type="text" />
                        <label>E-post</label>
                        <input type="email" />
                        <label>Meddelande</label>
                        <textarea></textarea>
                        <input type="submit" value="Skicka" />
                    </form>
                </div>

            </div>
        </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>