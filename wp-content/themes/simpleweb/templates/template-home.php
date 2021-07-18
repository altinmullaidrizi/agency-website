<?php

/**
 * Template Name: Homepage
 *
 */
get_header();

$top_title = get_field('top_title');
$top_slider = get_field('top_slider');
$main_image = get_field("main_image");
$pricing = get_field('pricing');
$pricing_title = get_field('pricing_title');
$pricing_items = get_field('pricing_items');
$what_makes_us_best_title = get_field('what_makes_us_best_title');
$what_makes_us_best_items = get_field('what_makes_us_best_items');
$what_we_can_do = get_field('what_we_can_do');
$what_we_can_do_title = get_field('what_we_can_do_title');
$what_we_can_do_image = get_field('what_we_can_do_image');
$what_can_we_do_items = get_field('what_can_we_do_items');
$services_label = get_field('services_label');
$services_title = get_field('services_title');
$services_content = get_field('services_content');
$services_button_text = get_field('services_button_text');
$services_button_url = get_field('services_button_url');

$service_item_url_1 = get_field('service_item_url_1');
$service_item_url_2 = get_field('service_item_url_2');
$service_item_url_3 = get_field('service_item_url_3');
$service_item_url_4 = get_field('service_item_url_4');
$service_item_url_5 = get_field('service_item_url_5');
$service_item_url_6 = get_field('service_item_url_6');
$service_item_url_7 = get_field('service_item_url_7');


$service_item_content_1 = get_field('service_item_content_1');
$service_item_content_2 = get_field('service_item_content_2');
$service_item_content_3 = get_field('service_item_content_3');
$service_item_content_4 = get_field('service_item_content_4');
$service_item_content_5 = get_field('service_item_content_5');
$service_item_content_6 = get_field('service_item_content_6');
$service_item_content_7 = get_field('service_item_content_7');


$service_item_icon_1 = get_field('service_item_icon_1');
$service_item_icon_2 = get_field('service_item_icon_2');
$service_item_icon_3 = get_field('service_item_icon_3');
$service_item_icon_4 = get_field('service_item_icon_4');
$service_item_icon_5 = get_field('service_item_icon_5');
$service_item_icon_6 = get_field('service_item_icon_6');
$service_item_icon_7 = get_field('service_item_icon_7');

$service_item_title_1 = get_field('service_item_title_1');
$service_item_title_2 = get_field('service_item_title_2');
$service_item_title_3 = get_field('service_item_title_3');
$service_item_title_4 = get_field('service_item_title_4');
$service_item_title_5 = get_field('service_item_title_5');
$service_item_title_6 = get_field('service_item_title_6');
$service_item_title_7 = get_field('service_item_title_7');


$what_others_say_label = get_field('what_others_say_label');
$what_others_say_content = get_field('what_others_say_content');
$testimonial_items = get_field('testimonial_items');

$partners_title = get_field('partners_title');
$partners_description = get_field('partners_description');

$banner_title = get_field('banner_title');
$banner_description = get_field('banner_description');
$banner_button_label = get_field('banner_button_label');
$banner_button_url = get_field('banner_button_url');

$pricing_button_label = get_field('pricing_button_label');
$pricing_button_url = get_field('pricing_button_url');




?>

<div class="block block-main block-center block-dark block-circle-person block-padding">
    <div class="container">
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
                                $slider_index_home = get_row_index();
                            ?>
                                <div class="swiper-slide">
                                    <p><?= $content ?></p>
                                </div>

                            <?php
                            endwhile;
                            ?>

                        </div>
                        <?php
                            if (isset($slider_index_home) && $slider_index_home > 1) {
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
    <div class="after module" style="background-image: url('<?= $main_image['url']; ?>')">

    </div>
    <div class="main-relative-image module">
        <div class="circle-large svg-main-circle">
            <svg class="circle-scale" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="714" height="714" viewBox="0 0 714 714">
                <defs>
                    <linearGradient id="circle-linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#4bc9d7" />
                        <stop offset="1" stop-color="#53a5df" />
                    </linearGradient>
                </defs>
                <circle id="Ellipse_11" data-name="Ellipse 11" cx="357" cy="357" r="357" opacity="0.556" fill="url(#circle-linear-gradient)" />
            </svg>

        </div>
        <div class="circle-medium svg-main-circle">
            <svg class="circle-scale" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="714" height="714" viewBox="0 0 714 714">
                <defs>
                    <linearGradient id="circle-linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#4bc9d7" />
                        <stop offset="1" stop-color="#53a5df" />
                    </linearGradient>
                </defs>
                <g id="Group_189" data-name="Group 189" transform="translate(-5450 20781)">
                    <g id="Ellipse_10" data-name="Ellipse 10" transform="translate(5510 -20721)" stroke="#707070" stroke-width="1" opacity="0.618" fill="url(#circle-linear-gradient)">
                        <circle cx="297.5" cy="297.5" r="297.5" stroke="none" />
                        <circle cx="297.5" cy="297.5" r="297" fill="none" />
                    </g>
                    <rect id="Rectangle_324" data-name="Rectangle 324" width="714" height="714" transform="translate(5450 -20781)" fill="none" />
                </g>
            </svg>

        </div>
        <div class="circle-small svg-main-circle">
            <svg class="circle-scale" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="714" height="714" viewBox="0 0 714 714">
                <defs>
                    <linearGradient id="circle-linear-gradient" x1="0.5" x2="0.5" y2="1" gradientUnits="objectBoundingBox">
                        <stop offset="0" stop-color="#4bc9d7" />
                        <stop offset="1" stop-color="#53a5df" />
                    </linearGradient>
                </defs>
                <g id="Group_189" data-name="Group 189" transform="translate(-5447 20613)">
                    <circle id="Ellipse_9" data-name="Ellipse 9" cx="228.5" cy="228.5" r="228.5" transform="translate(5576 -20484)" fill="url(#circle-linear-gradient)" />
                    <rect id="Rectangle_324" data-name="Rectangle 324" width="714" height="714" transform="translate(5447 -20613)" fill="none" />
                </g>
            </svg>

        </div>
    </div>
</div>

<div class="block block-pricing block-big-padding">

    <div class="container">
        <h2 class="small-title module">
            <?= $pricing ?>
        </h2>
        <p class="block-title module">
            <?= $pricing_title ?>
        </p>
        <div class="row">

            <?php if (have_rows('pricing_items')) : ?>

                <?php while (have_rows('pricing_items')) : the_row(); ?>
                    <?php
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('name');
                    $price_from = get_sub_field('price_from');
                    $price_to = get_sub_field('price_to');
                    $content = get_sub_field('content');
                    $url = get_sub_field('url');
                    ?>

                    <div class="col-lg-4 col-12 col-box module">
                        <div class="box <?php if (get_row_index() == 2) {
                                            echo 'box-orange';
                                        };
                                        if (get_row_index() == 3) {
                                            echo 'box-blue';
                                        }; ?>">
                            <div class="box-icon">
                                <img src="<?= $icon ?>" alt="<?= $title ?>">
                            </div>
                            <div class="box-title">
                                <?= $title ?>
                            </div>
                            <div class="box-price">
                                <?= $price_from ?> <?= $price_to ?>
                            </div>
                            <div class="box-content">
                                <?= $content ?>
                            </div>
                            <div class="box-link">
                                <a href="<?= get_home_url() . $url ?>">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16.02" height="27.207" viewBox="0 0 16.02 27.207">
                                        <path id="Path_256" data-name="Path 256" d="M401,2327.065l11.752,11.6L401,2350.03" transform="translate(-398.879 -2324.944)" fill="none" stroke="#171a29" stroke-linecap="round" stroke-width="3" opacity="0.31" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>

            <a href="<?= $pricing_button_url ?>" class="arrow-btn kosten-btn gradient-btn module"><?= $pricing_button_label ?>
                <svg xmlns="http://www.w3.org/2000/svg" width="23.65" height="16.629" viewBox="0 0 23.65 16.629">
                    <path id="right-arrow" d="M15.926,4.924A.839.839,0,0,0,14.734,6.1l6.044,6.044H.834A.83.83,0,0,0,0,12.983a.84.84,0,0,0,.834.846H20.777l-6.044,6.032a.856.856,0,0,0,0,1.192.835.835,0,0,0,1.192,0L23.4,13.579a.821.821,0,0,0,0-1.18Z" transform="translate(0 -4.674)" fill="#fff"></path>
                </svg>

            </a>
        </div>
    </div>
</div>

<div class="block block-gradient block-small-padding block-big-padding">

    <div class="container">
        <div class="line-flex">
            <div class="flex-4">
                <h3 class="light-font big-title module">
                    <?= $what_makes_us_best_title ?>
                </h3>
            </div>

            <?php if (have_rows('what_makes_us_best_items')) : $count = 0; ?>

                <?php while (have_rows('what_makes_us_best_items')) : the_row(); ?>
                    <?php
                    $icon = get_sub_field('icon');
                    $name = get_sub_field('name');
                    ?>

                    <div class="flex-2">
                        <div class="light-list <?php if ($count == 2) {
                                                    echo 'last';
                                                } ?>">
                            <div class="light-list-icon module">
                                <img src="<?= $icon ?>" alt="<?= $name ?>">
                            </div>
                            <div class="light-list-title module">
                                <?= $name ?>
                            </div>
                        </div>
                    </div>

                <?php $count++;
                endwhile; ?>
            <?php endif; ?>

        </div>
    </div>

</div>

<div class="block block-big-padding">

    <div class="container">
        <h2 class="small-title module">
            <?= $what_we_can_do ?>
        </h2>
        <p class="block-title module">
            <?= $what_we_can_do_title ?>
        </p>

        <div class="row">
            <div class="col-lg-7 col-12 col-box mobile-hide ">
                <?php if ($what_we_can_do_image) { ?>
                    <img class="col-img module" src="<?= $what_we_can_do_image ?>">
                <?php } ?>
            </div>
            <div class="col-lg-5 col-12 col-box">
                <?php if (have_rows('what_can_we_do_items')) :
                    $count = 0; ?>
                    <div class="accordions" id="accordions">
                        <?php
                        while (have_rows('what_can_we_do_items')) : the_row();
                            $icon = get_sub_field('icon');
                            $title = get_sub_field('title');
                            $content = get_sub_field('content');
                        ?>

                            <div class="single-accordion module <?php if ($count !== 0) {
                                                                    echo 'collapsed';
                                                                } ?> " data-toggle="collapse" data-target="#collapse<?= $count ?>" aria-expanded="true" aria-controls="collapse<?= $count ?>">
                                <p class="accordion-title">
                                    <?php if ($icon) { ?>
                                        <img src="<?= $icon ?>" alt="<?= $title ?>">
                                    <?php } ?>
                                    <?= $title ?>
                                </p>
                                <div id="collapse<?= $count ?>" class="collapse <?php if ($count == 0) {
                                                                                    echo 'show';
                                                                                } ?>" aria-labelledby="collapse<?= $count ?>" data-parent="#accordions">
                                    <p><?= $content ?> </p>
                                </div>
                            </div>

                        <?php
                            $count++;
                        endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>

<div class="block block-gradient-down block-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 col-12 col-center">
                <div class="col-center-child margin-bot50">
                    <h2 class="small-title text-left module">
                        <?= $services_label ?>
                    </h2>
                    <p class="block-title block-title-small text-left module">
                        <?= $services_title ?>
                    </p>
                    <p class="description text-left module">
                        <?= $services_content ?>
                    </p>
                    <a href="<?= $services_button_url ?>" class="arrow-btn gradient-btn margin-top50 module">
                        <?= $services_button_text ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="23.65" height="16.629" viewBox="0 0 23.65 16.629">
                            <path id="right-arrow" d="M15.926,4.924A.839.839,0,0,0,14.734,6.1l6.044,6.044H.834A.83.83,0,0,0,0,12.983a.84.84,0,0,0,.834.846H20.777l-6.044,6.032a.856.856,0,0,0,0,1.192.835.835,0,0,0,1.192,0L23.4,13.579a.821.821,0,0,0,0-1.18Z" transform="translate(0 -4.674)" fill="#fff" />
                        </svg>
                    </a>
                </div>
            </div>
            <div class="col-lg-7 col-12">
                <div class="row tablet-flex-hide">

                    <div class="col-4">
                        <a href="<?= $service_item_url_1 ?>" class="service-box module margin-top100">
                            <?php if ($service_item_icon_1) { ?>
                                <img src="<?= $service_item_icon_1 ?>" alt="<?= $service_item_title_1 ?>">
                            <?php } ?>
                            <p>
                                <?= $service_item_title_1 ?>
                            </p>
                            <p class="on-hover-description">
                                <?= $service_item_content_1 ?>
                            </p>
                        </a>
                        <a href="<?= $service_item_url_2 ?>" class="service-box module">
                            <?php if ($service_item_icon_2) { ?>
                                <img src="<?= $service_item_icon_2 ?>" alt="<?= $service_item_title_2 ?>">
                            <?php } ?>
                            <p>
                                <?= $service_item_title_2 ?>
                            </p>
                            <p class="on-hover-description">
                                <?= $service_item_content_2 ?>
                            </p>
                        </a>
                    </div>

                    <div class="col-4">
                        <a href="<?= $service_item_url_3 ?>" class="service-box module margin-top200">
                            <?php if ($service_item_icon_3) { ?>
                                <img src="<?= $service_item_icon_3 ?>" alt="<?= $service_item_title_3 ?>">
                            <?php } ?>
                            <p>
                                <?= $service_item_title_3 ?>
                            </p>
                            <p class="on-hover-description">
                                <?= $service_item_content_3 ?>
                            </p>
                        </a>
                        <a href="<?= $service_item_url_4 ?>" class="service-box module">
                            <?php if ($service_item_icon_4) { ?>
                                <img src="<?= $service_item_icon_4 ?>" alt="<?= $service_item_title_4 ?>">
                            <?php } ?>
                            <p>
                                <?= $service_item_title_4 ?>
                            </p>
                            <p class="on-hover-description">
                                <?= $service_item_content_4 ?>
                            </p>
                        </a>
                    </div>

                    <div class="col-4">
                        <a href="<?= $service_item_url_5 ?>" class="service-box module">
                            <?php if ($service_item_icon_5) { ?>
                                <img src="<?= $service_item_icon_5 ?>" alt="<?= $service_item_title_5 ?>">
                            <?php } ?>
                            <p>
                                <?= $service_item_title_5 ?>
                            </p>
                            <p class="on-hover-description">
                                <?= $service_item_content_5 ?>
                            </p>
                        </a>
                        <a href="<?= $service_item_url_6 ?>" class="service-box module">
                            <?php if ($service_item_icon_6) { ?>
                                <img src="<?= $service_item_icon_6 ?>" alt="<?= $service_item_title_6 ?>">
                            <?php } ?>
                            <p>
                                <?= $service_item_title_6 ?>
                            </p>
                            <p class="on-hover-description">
                                <?= $service_item_content_6 ?>
                            </p>
                        </a>
                        <a href="<?= $service_item_url_7 ?>" class="service-box module">
                            <?php if ($service_item_icon_7) { ?>
                                <img src="<?= $service_item_icon_7 ?>" alt="<?= $service_item_title_7 ?>">
                            <?php } ?>
                            <p>
                                <?= $service_item_title_7 ?>
                            </p>
                            <p class="on-hover-description">
                                <?= $service_item_content_7 ?>
                            </p>
                        </a>
                    </div>

                </div>
                <div class="tablet-show">
                    <div class="swiper-container swiper-mobile-services">
                        <div class="swiper-wrapper">
                            <a href="<?= get_home_url() ?>/dienstleistungen#corporatedesign" class="service-box swiper-slide module">
                                <?php if ($service_item_icon_1) { ?>
                                    <img src="<?= $service_item_icon_1 ?>" alt="<?= $service_item_title_1 ?>">
                                <?php } ?>
                                <p>
                                    <?= $service_item_title_1 ?>
                                </p>
                                <p class="on-hover-description">
                                    <?= $service_item_content_1 ?>
                                </p>
                            </a>
                            <a href="<?= get_home_url() ?>/dienstleistungen#webdevelopment" class="service-box swiper-slide module" title="<?= $service_item_content_2 ?>">
                                <?php if ($service_item_icon_2) { ?>
                                    <img src="<?= $service_item_icon_2 ?>" alt="<?= $service_item_content_2 ?>">
                                <?php } ?>
                                <p>
                                    <?= $service_item_title_2 ?>
                                </p>

                                <p class="on-hover-description">
                                    <?= $service_item_content_2 ?>
                                </p>

                            </a>
                            <a href="<?= get_home_url() ?>/dienstleistungen#googleadwords" class="service-box swiper-slide module">
                                <?php if ($service_item_icon_3) { ?>
                                    <img src="<?= $service_item_icon_3 ?>" alt="<?= $service_item_title_3 ?>">
                                <?php } ?>
                                <p>
                                    <?= $service_item_title_3 ?>
                                </p>
                                <p class="on-hover-description">
                                    <?= $service_item_content_3 ?>
                                </p>
                            </a>
                            <a href="<?= get_home_url() ?>/dienstleistungen#domainwebhosting" class="service-box swiper-slide module">
                                <?php if ($service_item_icon_4) { ?>
                                    <img src="<?= $service_item_icon_4 ?>" alt="<?= $service_item_title_4 ?>">
                                <?php } ?>
                                <p>
                                    <?= $service_item_title_4 ?>
                                </p>
                                <p class="on-hover-description">
                                    <?= $service_item_content_4 ?>
                                </p>
                            </a>
                            <a href="<?= get_home_url() ?>/dienstleistungen#textebilder" class="service-box swiper-slide module">
                                <?php if ($service_item_icon_5) { ?>
                                    <img src="<?= $service_item_icon_5 ?>" alt="<?= $service_item_title_5 ?>">
                                <?php } ?>
                                <p>
                                    <?= $service_item_title_5 ?>
                                </p>
                                <p class="on-hover-description">
                                    <?= $service_item_content_5 ?>
                                </p>
                            </a>
                            <a href="<?= get_home_url() ?>/dienstleistungen#onlineshops" class="service-box swiper-slide module">
                                <?php if ($service_item_icon_6) { ?>
                                    <img src="<?= $service_item_icon_6 ?>" alt="<?= $service_item_title_6 ?>">
                                <?php } ?>
                                <p>
                                    <?= $service_item_title_6 ?>
                                </p>
                                <p class="on-hover-description">
                                    <?= $service_item_content_6 ?>
                                </p>
                            </a>
                            <a href="<?= get_home_url() ?>/dienstleistungen#socialmedia" class="service-box swiper-slide module" title="<?= $service_item_content_7 ?>">
                                <?php if ($service_item_icon_7) { ?>
                                    <img src="<?= $service_item_icon_7 ?>">
                                <?php } ?>
                                <p>
                                    <?= $service_item_title_7 ?>
                                </p>
                                <p class="on-hover-description">
                                    <?= $service_item_content_7 ?>
                                </p>
                            </a>
                        </div>

                        <div class="swiper-pagination module"></div>
                    </div>
                </div>

            </div>
        </div>
    </div>


</div>


<div class="block block-partners block-padding">
    <div class="container">
        <h2 class="block__title module">
            <?= $partners_title ?>
        </h2>
        <p class="partners-small-title module">
            <?= $partners_description ?>
        </p>

        <div class="tab-wrapper">
            <?php
            if (have_rows("partners")) {
                $i = 0;
                while (have_rows("partners")) :
                    the_row();
                    $content = get_sub_field("content");
                    $button_label = get_sub_field("button_label");
                    $button_url = get_sub_field("button_url");
                    $image = get_sub_field("image");
            ?>
                    <div class="tab-container <?php if ($i == 0) {
                                                    echo 'active';
                                                } ?> tab-content tab-<?= $i++ ?>">
                        <div class="row our-partners">
                            <div class="col-md-6 flex-content">
                                <div class="partners-content module">
                                    <p>
                                        <?= $content ?>
                                    </p>
                                    <a target="_blank" onclick="window.open('<?= $button_url ?>','_blank');return false;" class="arrow-btn white-btn module module-btn come-in"><?= $button_label ?>
                                        <svg xmlns="http://www.w3.org/2000/svg" width="23.65" height="16.629" viewBox="0 0 23.65 16.629">
                                            <path id="right-arrow" d="M15.926,4.924A.839.839,0,0,0,14.734,6.1l6.044,6.044H.834A.83.83,0,0,0,0,12.983a.84.84,0,0,0,.834.846H20.777l-6.044,6.032a.856.856,0,0,0,0,1.192.835.835,0,0,0,1.192,0L23.4,13.579a.821.821,0,0,0,0-1.18Z" transform="translate(0 -4.674)" fill="#5DC2CE"></path>
                                        </svg>
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="partners-image module">
                                    <img src="<?= $image['url'] ?>">
                                </div>
                            </div>
                        </div>
                    </div>
            <?php
                endwhile;
            }
            ?>
        </div>


        <div class="swiper-container swiper-partners-section">
            <div class="swiper-wrapper">
                <?php
                if (have_rows("partners")) {
                    $j = 0;
                    while (have_rows("partners")) : the_row();
                        $thumb = get_sub_field("thumb");
                ?>

                        <div class="swiper-slide module <?php if ($j == 0) {
                                                            echo 'active';
                                                        } ?> tab-content tab-<?= $j++ ?>">
                            <div class="partner-box">
                                <img src="<?= $thumb['url'] ?>">
                            </div>
                        </div>

                <?php
                    endwhile;
                }
                ?>
            </div>
        </div>
    </div>
</div>


<div class="block block-padding mobile-hide">

    <div class="container">
        <div class="pricing-banner">
            <div class="banner-content">
                <h2 class="module"><?= $banner_title ?> </h2>
                <p class="module"><?= $banner_description ?></p>
                <a href="<?= $banner_button_url ?>" class="arrow-btn white-btn module module-btn"><?= $banner_button_label ?>
                    <svg class="module" xmlns="http://www.w3.org/2000/svg" width="23.65" height="16.629" viewBox="0 0 23.65 16.629">

                        <path id="right-arrow" d="M15.926,4.924A.839.839,0,0,0,14.734,6.1l6.044,6.044H.834A.83.83,0,0,0,0,12.983a.84.84,0,0,0,.834.846H20.777l-6.044,6.032a.856.856,0,0,0,0,1.192.835.835,0,0,0,1.192,0L23.4,13.579a.821.821,0,0,0,0-1.18Z" transform="translate(0 -4.674)" fill="#5DC2CE"></path>
                    </svg>

                </a>
            </div>
        </div>


        <h2 class="small-title module">
            <?= $what_others_say_label ?>
        </h2>
        <p class="block-title module">
            <?= $what_others_say_content ?>
        </p>

        <div class="row margin-top100 margin-bot50">
            <?php if (have_rows('testimonial_items')) {
                $count = 0; ?>
                <?php while (have_rows('testimonial_items')) : the_row();
                    $content = get_sub_field('content');
                    $name_position = get_sub_field('name_and_job_position');
                ?>

                    <div class="col-md-6 module margin-bot50 <?php if ($count == 0) {
                                                                    echo 'margin-top50';
                                                                } ?>">
                        <div class="testimonial-box small <?php if ($count % 2 == 0) {
                                                                echo 'even';
                                                            } ?>">
                            <p class="testimonial-content">
                                <?= $content ?>
                            </p>
                            <p class="testimonial-name">
                                <?= $name_position ?>
                            </p>
                        </div>
                    </div>

                <?php $count++;
                endwhile; ?>
            <?php } ?>
        </div>
    </div>

</div>

<div class="block block-padding mobile-show">
    <div class="container">
        <div class="pricing-banner">
            <div class="banner-content">

                <h2 class="module come-in"><?= $banner_title ?> </h2>
                <p class="module come-in"><?= $banner_description ?></p>
                <a href="<?= $banner_button_url ?>" class="arrow-btn white-btn module module-btn come-in""><?= $banner_button_label ?>
                <svg xmlns=" http://www.w3.org/2000/svg" width="23.65" height="16.629" viewBox="0 0 23.65 16.629">
                    <path id="right-arrow" d="M15.926,4.924A.839.839,0,0,0,14.734,6.1l6.044,6.044H.834A.83.83,0,0,0,0,12.983a.84.84,0,0,0,.834.846H20.777l-6.044,6.032a.856.856,0,0,0,0,1.192.835.835,0,0,0,1.192,0L23.4,13.579a.821.821,0,0,0,0-1.18Z" transform="translate(0 -4.674)" fill="#5DC2CE"></path>
                    </svg>

                </a>
            </div>
        </div>
        <p class="small-title module">
            <?= $what_others_say_label ?>
        </p>
        <h3 class="block-title module">
            <?= $what_others_say_content ?>
        </h3>

        <div class="testimonial-box testimonial-slider">
            <?php if (have_rows('testimonial_items')) : ?>

                <div class="swiper-container swiper-testimonial">

                    <div class="swiper-wrapper">

                        <?php while (have_rows('testimonial_items')) : the_row();

                            //$image = get_sub_field('image');
                            $content = get_sub_field('content');
                            $name_position = get_sub_field('name_and_job_position');
                        ?>
                            <div class="swiper-slide module testimonial-slide">

                                <div class="row">

                                    <div class="col-md-12">
                                        <p class="testimonial-content">
                                            <?= $content ?>
                                        </p>
                                        <p class="testimonial-name">
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