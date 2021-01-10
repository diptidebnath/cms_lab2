<?php

/**
 * 404 page
 *
 */
get_header();
?>
<main>
    <section class="standard">
        <div class="container">
            <div class="row">
                <div id="primary" class="col-xs-12">
                    <h1 class="entry-title"><?php _e('Sidan Hittas Inte', 'diptilab1'); ?></h1>

                    <div class="intro-text-not-found">
                        <p><?php _e('Sidan du letade efter kunde inte hittas. Det kan ha tagits bort, bytt namn på eller existerade i första hand.', 'diptilab1'); ?></p>
                    </div>


                </div>

            </div>
        </div>
        </div>
    </section>
</main>

<?php
get_footer();
?>