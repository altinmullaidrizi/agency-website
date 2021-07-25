<?php

/**
 * Template Name: Terms and Privacy
 *
 */
get_header();

?>

<div class="block block-main block-center">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <?php if ( have_posts() ) : 
                        while ( have_posts() ) : the_post();
                            the_content();
                        endwhile;?>
                <?php endif; ?>
            </div>
        </div>
    </div>
   

</div>

<?php get_footer(); ?>