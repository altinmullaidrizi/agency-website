<?php

/**
 * Template Name: Services
 *
 */
get_header();

$top_title = get_field('top_title');
$top_content = get_field('top_content');
$top_image = get_field('top_image');
$top_title = get_field('top_title');
?>


<div class="block block-main block-center block-dark block-circle-person block-big-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 col-12 col-planks col-mobile-bottom  ">
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
                                $slider_index_services = get_row_index();
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
                            <div class="swiper-navigation  "></div>
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
    <div class="after  " style="background-image: url('<?= $top_image; ?>')">

    </div>
    
</div>

<div class="block block-services block-big-padding" id="services-wrapper">

    <div class="container">

        <div class="services-flex">

            <div class="services-sidebar" id="service-sidebar">
                <?php
                if (have_rows('categories')) :
                    $count = 0;
                    while (have_rows('categories')) : the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $class = preg_replace('/[^A-Za-z0-9\-]/', '', strtolower(str_replace(' ', '', $title)));
                ?>
                        <div class="service-sidebar-item   <?php if ($count == 0) {
                                                                    echo 'active';
                                                                } ?>" sidebar-tag="<?= $class ?>" id="sidebar-<?= $class ?>">
                            <img src="<?= $icon['url']; ?>" class="img-fluid" alt="<?= $icon['alt']; ?>">
                            <span>
                                <?= $title ?>
                            </span>
                        </div>
                <?php
                        $count++;
                    endwhile;
                endif;
                ?>
            </div>

            <div class="services-content">
                <?php
                if (have_rows('categories')) :
                    $count = 0;
                    while (have_rows('categories')) : the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $tabs_title = get_sub_field('tabs_title');
                        $title_extra = get_sub_field('content_extra_title');
                        $description_extra = get_sub_field('content_extra_description');

                        $class = preg_replace('/[^A-Za-z0-9\-]/', '', strtolower(str_replace(' ', '', $title)));
                ?>
                        <div class="service-row <?= $class ?>" service-tag="<?= $class ?>" scroll-id="<?= $class ?>">

                            <h5 class="service-title  "><?= $title ?></h5>

                            <div class="service-description  "><?= $description ?></div>

                            <?php if ($tabs_title) : ?>
                                <p class="service-small-title  "><?= $tabs_title ?></p>
                            <?php endif; ?>

                            <?php if (have_rows('tabs')) : $tab_count = 0; ?>
                                <div class="service-tabs accordions" id="accordions<?= $count ?>">

                                    <?php while (have_rows('tabs')) : the_row();
                                        $title = get_sub_field('title');
                                        $image = get_sub_field('image');
                                        $image_content = get_sub_field('image_content');
                                        $content = get_sub_field('content');
                                        $example_title = get_sub_field('example_title');
                                        $extra_title = get_sub_field('extra_title'); ?>

                                        <div class="tab collapsed  " data-toggle="collapse" data-target="#collapse<?= $tab_count ?><?= $count ?>" aria-expanded="false">
                                            <p class="tab-title active"><?= $title ?></p>

                                            <div id="collapse<?= $tab_count ?><?= $count ?>" class="collapse" data-parent="#accordions<?= $count ?>">

                                                <?php if ($image_content) : ?>
                                                    <div class="image-content-row">
                                                        <?= $image_content ?>
                                                    </div>
                                                <?php endif; ?>

                                                <p class="tab-content"><?= $content ?></p>

                                                <?php if (have_rows('examples')) : ?>
                                                    <p class="tab-title"><?= $example_title ?></p>

                                                    <div class="row examples">
                                                        <?php while (have_rows('examples')) : the_row();
                                                            $image = get_sub_field('image');
                                                            $link = get_sub_field('link');
                                                        ?>

                                                            <div class="col-4 col-example">
                                                                <a href="<?= $link['url'] ?>">
                                                                    <img src="<?= $image['url'] ?>" alt="">
                                                                </a>
                                                            </div>

                                                        <?php endwhile; ?>
                                                    </div>
                                                <?php endif; ?>

                                            </div>

                                        </div>
                                    <?php $tab_count++;
                                    endwhile; ?>
                                </div>
                            <?php endif; ?>

                            <p class="service-small-title  "><?= $title_extra ?></p>

                            <div class="service-description  "><?= $description_extra ?></div>


                        </div>
                <?php $count++;
                    endwhile;
                endif;
                ?>
            </div>

        </div>



        <div class="services-mobile-content">
            <div class="accordions" id="mobile-accordions">
                <?php
                if (have_rows('categories')) :
                    $mobileCount = 0;
                    while (have_rows('categories')) : the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $description = get_sub_field('description');
                        $tabs_title = get_sub_field('tabs_title');
                        $title_extra = get_sub_field('content_extra_title');
                        $description_extra = get_sub_field('content_extra_description');

                        $class = preg_replace('/[^A-Za-z0-9\-]/', '', strtolower(str_replace(' ', '', $title)));
                ?>
                        <div class="single-mobile-accordion  " scroll-id="<?= $class ?>">
                            <p class="mobile-accordion-title collapsed" data-toggle="collapse" data-target="#collapse<?= $mobileCount ?>" aria-expanded="false">
                                <img src="<?= $icon['url']; ?>" class="img-fluid" alt="<?= $icon['alt']; ?>"> <?= $title ?>
                            </p>
                            <div id="collapse<?= $mobileCount ?>" class="service-row collapse <?= $class ?>" data-parent="#mobile-accordions">

                                <h5 class="service-title"><?= $title ?></h5>

                                <div class="service-description"><?= $description ?></div>

                                <?php if ($tabs_title) : ?>
                                    <p class="service-small-title"><?= $tabs_title ?></p>
                                <?php endif; ?>

                                <?php if (have_rows('tabs')) : $mobileSlideCount = 0; ?>
                                    <div class="swiper-container swiper-service swiper-service-mobile<?= $mobileCount ?>">

                                        <div class="swiper-wrapper ">

                                            <?php while (have_rows('tabs')) : the_row();
                                                $title = get_sub_field('title');
                                                $image = get_sub_field('image');
                                                $image_content = get_sub_field('image_content');
                                                $content = get_sub_field('content');
                                                $example_title = get_sub_field('example_title');
                                                $extra_title = get_sub_field('extra_title'); ?>

                                                <div class="swiper-slide service-slide" data-toggle="modal" data-target="#service-modal<?= $mobileCount ?><?= $mobileSlideCount ?>">
                                                    <p class="slide-title"><?= $title ?></p>

                                                </div>
                                            <?php $mobileSlideCount++;
                                            endwhile; ?>

                                        </div>

                                        <div class="swiper-pagination"></div>

                                    </div>
                                <?php endif; ?>

                                <p class="service-small-title"><?= $title_extra ?></p>

                                <div class="service-description"><?= $description_extra ?></div>


                            </div>
                        </div>
                <?php $mobileCount++;
                    endwhile;
                endif;
                ?>
            </div>



            <div class="service-modals">
                <?php
                if (have_rows('categories')) :
                    $modalContent = 0;
                    while (have_rows('categories')) : the_row();  ?>

                        <?php if (have_rows('tabs')) : $modalSlideContent = 0; ?>
                            <?php while (have_rows('tabs')) : the_row();
                                $title = get_sub_field('title');
                                $image = get_sub_field('image');
                                $image_content = get_sub_field('image_content');
                                $content = get_sub_field('content');
                                $example_title = get_sub_field('example_title');
                                $extra_title = get_sub_field('extra_title'); ?>

                                <div class="modal service-modal" id="service-modal<?= $modalContent ?><?= $modalSlideContent ?>">
                                    <div class="modal-dialog modal-lg">
                                        <div class="modal-content">
                                            <h3 class="modal-title"><?= $title ?></h3>
                                            <button type="button" class="close" data-dismiss="modal">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="28.355" height="28.355" viewBox="0 0 28.355 28.355">
                                                    <g id="Group_189" data-name="Group 189" transform="translate(-1271.322 -105.323)">
                                                        <rect id="Rectangle_169" data-name="Rectangle 169" width="4.008" height="36.089" rx="2.004" transform="translate(1271.324 108.159) rotate(-45)" fill="#171a29" />
                                                        <rect id="Rectangle_170" data-name="Rectangle 170" width="4.012" height="36.089" rx="2.006" transform="translate(1274.159 133.679) rotate(-135)" fill="#171a29" />
                                                    </g>
                                                </svg>
                                            </button>
                                            <?php if ($image_content) : ?>
                                                <div class="image-content-row">
                                                    <?= $image_content ?>
                                                </div>
                                            <?php endif; ?>

                                            <p class="tab-content"><?= $content ?></p>

                                            <?php if (have_rows('examples')) : ?>
                                                <p class="tab-title"><?= $example_title ?></p>

                                                <div class="row examples">
                                                    <?php while (have_rows('examples')) : the_row();
                                                        $image = get_sub_field('image');
                                                        $link = get_sub_field('link');
                                                    ?>

                                                        <div class="col-6 col-example">
                                                            <a href="<?= $link['url'] ?>">
                                                                <img src="<?= $image['url'] ?>" alt="">
                                                            </a>
                                                        </div>

                                                    <?php endwhile; ?>
                                                </div>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            <?php $modalSlideContent++;
                            endwhile; ?>
                        <?php endif; ?>

                <?php $modalContent++;
                    endwhile;
                endif;  ?>
            </div>


        </div>

    </div>
</div>

<?php get_footer(); ?>