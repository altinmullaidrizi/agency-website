<?php
/**
 * Template Name: Reference
 *
 */
get_header();
    $top_title = get_field('top_title');
    $top_content = get_field('top_content');
    $top_image = get_field('top_image');
    $categories_title = get_field('categories_title');
    $testimonails_title = get_field('testimonials_title');
?>

    <div class="block block-references block-main block-dark block-padding block-relative block-center margin-bot100">
        <div class="container z2">
            <div class="row">
                <div class="col-lg-6 col-12 col-planks col-mobile-bottom module">
                    <h1 class="main-title">
                        <?= $top_title ?>
                    </h1>
                    <?php
                    if (have_rows('top_slider')) :
                        ?>

                        <div class="swiper-container swiper-main">
                            <div class="swiper-wrapper">

                                <?php
                                while (have_rows('top_slider')) : the_row();
                                    $content = get_sub_field('content');
                                    $slider_index_reference = get_row_index();
                                    ?>
                                    <div class="swiper-slide">
                                        <p><?= $content ?></p>
                                    </div>

                                <?php
                                endwhile;
                                ?>

                            </div>
                              <?php
                            if (isset($slider_index_services) && $slider_index_services > 1) {
                        ?>
                            <div class="swiper-navigation module"></div>
                        <?php } ?>
                        </div>

                    <?php
                    endif;
                    ?>

                </div>
                <div class="col-lg-6">
                </div>
            </div>
        </div>
        <div class="rotate-wrapper z1">
            <div class="floating-image">
                <img class="module" src="<?= $top_image ?>">
            </div>
        </div>
    </div>

    <div class="block block-padding">
        <div class="container">
            <h3 class="block-title module">
                <?= $categories_title ?>
            </h3>
            <div class="categories-slider">
                <div class="swiper-container swiper-categories swiper-no-swiping">
                    <div class="swiper-wrapper">
                        
                        <?php if( have_rows('categories')) : ?>
                            <?php $count = 0; ?>
                            <?php while( have_rows('categories')) : the_row(); 
                            
                                $title = get_sub_field('title');
                                $icon = get_sub_field('icon');
                            ?>
                            
                            <div class="swiper-slide module <?php if ( $count == 0 ) : echo 'active'; endif;  ?> categories-item" tab-index="<?= $count ?>">
                                <div class="item-icon">
                                    <img src="<?= $icon['url'] ?>" alt="<?= $icon['alt'] ?>">
                                </div>
                                <p class="item-title">
                                    <?= $title ?>
                                </p>

                            </div>


                            <?php $count++; endwhile; ?>

                        <?php endif; ?>
                            
                    </div>

                    <div class="swiper-pagination module"></div>
                </div>
            </div>
        
        </div>
    </div>


    <div class="block block-reference-tabs margin-bot80">
            <div class="tabs">

                <?php if( have_rows('categories')) : $count = 0; ?>

                    <?php while( have_rows('categories')) : the_row(); ?>  

                    <div class="tab-content tab-content<?= $count ?> single-cat-slider <?php if ( $count == 0 ) { echo 'active'; } ?>">
                        <div class="swiper-container swiper-tabs swiper-tab-<?= $count ?>">
                            <div class="swiper-wrapper">

                                <?php if ( have_rows('slider') ) : ?>
                                    <?php while ( have_rows('slider') ) : the_row(); 
                                        $title = get_sub_field('title');
                                        $image = get_sub_field('image');
                                        $description_title = get_sub_field('description_title');
                                        $description_content = get_sub_field('description_content');
                                        $description_label = get_sub_field('description_label');
                                        $description_url = get_sub_field('description_url');
                                        $single_button_link = get_sub_field('single_button_link');
                                        $single_button_label = get_sub_field('single_button_label');
                                        $slider_index_services_category = get_row_index();

                                    ?>

                                    <div class="swiper-slide single-cat">

                                        <div class="cat-wrapper">
                                            <p class="cat-title module">
                                                <?= $title ?>
                                            </p>
                                            <div class="container">
                                                <img class="module" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                                <a href="<?= $single_button_link ?>" class="single-btn arrow-btn gradient-btn module"><?= $single_button_label ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="23.65" height="16.629" viewBox="0 0 23.65 16.629">
                                                        <path id="right-arrow" d="M15.926,4.924A.839.839,0,0,0,14.734,6.1l6.044,6.044H.834A.83.83,0,0,0,0,12.983a.84.84,0,0,0,.834.846H20.777l-6.044,6.032a.856.856,0,0,0,0,1.192.835.835,0,0,0,1.192,0L23.4,13.579a.821.821,0,0,0,0-1.18Z" transform="translate(0 -4.674)" fill="#fff"/>
                                                    </svg>
                                                </a>

                                            </div>
                                        </div>

                                        <div class="container">
                                            <div class="cat-description">
                                                <p class="cat-description-title module">
                                                    <?= $description_title ?>
                                                </p>
                                                <p class="cat-description-content module">
                                                    <?= $description_content ?>
                                                </p>

                                                <a href="<?= $description_url ?>" class="arrow-btn gradient-btn module">
                                                    <?= $description_label ?>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="23.65" height="16.629" viewBox="0 0 23.65 16.629">
                                                        <path id="right-arrow" d="M15.926,4.924A.839.839,0,0,0,14.734,6.1l6.044,6.044H.834A.83.83,0,0,0,0,12.983a.84.84,0,0,0,.834.846H20.777l-6.044,6.032a.856.856,0,0,0,0,1.192.835.835,0,0,0,1.192,0L23.4,13.579a.821.821,0,0,0,0-1.18Z" transform="translate(0 -4.674)" fill="#fff"/>
                                                    </svg>
                                                </a>
                                            </div>
                                        </div>

                                    </div>

                                    <?php endwhile; ?>
                                <?php endif; ?>
                            </div>
                            <?php
                                if (isset($slider_index_services_category) && $slider_index_services_category > 1) {
                            ?>
                                <div class="swiper-pagination module"></div>
                                <div class="swiper-button-next module"></div>
                                <div class="swiper-button-prev module"></div>
                            <?php } ?>

                        </div>
                    </div>

                    <?php $count++; endwhile; ?>

                <?php endif; ?>

        </div>
    </div>

    <div class="block block-padding">
        <div class="container">
            <h3 class="block-title module">
                <?= $testimonails_title ?>
            </h3>

            <div class="testimonial-box testimonial-slider">
                <?php if( have_rows('testimonials')) : ?>

                    <div class="swiper-container swiper-testimonial">
                    
                        <div class="swiper-wrapper">
                                
                            <?php while( have_rows('testimonials')) : the_row();
                            
                            $image = get_sub_field('image');
                            $content = get_sub_field('content');
                            $name_position = get_sub_field('name_and_position');
                            ?>  
                                <div class="swiper-slide testimonial-slide">
                                
                                    <div class="row">
                                    
                                        <div class="col-md-3">
                                            <div class="testimonial-image">
                                                <?php if ( $image ) { ?>
                                                    <img class="module" src="<?= $image['url'] ?>" alt="<?= $image['alt'] ?>">
                                                <?php } ?>

                                                <p class="testimonial-name mobile-show module">
                                                    <?= $name_position ?>
                                                </p>
                                            </div>
                                        </div>

                                        <div class="col-md-9">
                                            <p class="testimonial-content module">
                                                <?= $content ?>
                                            </p>
                                            <p class="testimonial-name mobile-hide module">
                                                <?= $name_position ?>
                                            </p>
                                        </div>
                                    
                                    </div>

                                </div>

                            <?php endwhile; ?>


                        </div>

                        <div class="swiper-pagination module"></div>
                    </div>
                <?php endif; ?>

            </div>
        </div>
    </div>
<?php get_footer(); ?>