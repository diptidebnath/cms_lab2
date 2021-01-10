<?php
$title = get_sub_field('title');
$background_color = get_sub_field('background_color');


?>
<section class="columns text-center <?php echo $background_color;?> ">
    <div class="container">
        <div class="row top">
            <div class="col-xs-12">
                <h2><?php echo $title; ?></h2>
            </div>
        </div>
        <div class="row bottom">

            <?php


            // Check rows exists.
            if (have_rows('testimonial')) :
                $count = 0;
                
                // Loop through rows.
                while (have_rows('testimonial')) : the_row();

                    // Load sub field value.

                    $testimony_disc = get_sub_field('description');
                   
                    

                    if($count % 2 == 0){
                        $offset_class = "col-xs-offset-1";
                    }
                    else{
                        $offset_class = "";
                    }

                    $count = $count + 1;
                    
            ?>



                    <div class="col-xs-5  <?php echo $offset_class; ?> ">
                        <blockquote>
                            <p><?php echo $testimony_disc; ?></p>
                        </blockquote>
                    </div>



            <?php
                // End loop.
                endwhile;
            endif;
            ?>
        </div>
        </div>
</section>