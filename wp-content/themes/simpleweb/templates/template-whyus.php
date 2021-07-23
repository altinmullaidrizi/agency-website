<?php

/**
 * Template Name: WhyUs
 *
 */
get_header();

$top_title = get_field('top_title');
$top_content = get_field('top_content');
$top_image = get_field('top_image');

$mission_title = get_field('mission_title');
$mission_content = get_field('mission_content');
$mission_image = get_field('mission_image');

$why_us_section_title = get_field('why_us_section_title');
$why_us_section_items = get_field('why_us_section_items');

$slider = get_field('slider');
$clients_title = get_field('clients_title');
$clients_gallery = get_field('clients_gallery');
?>

<div class="block block-main block-center block-dark block-circle-person block-big-padding">
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
                                $slider_index_why_us = get_row_index();
                            ?>
                                <div class="swiper-slide">
                                    <p><?= $content ?></p>
                                </div>

                            <?php
                            endwhile;
                            ?>

                        </div>
                        <?php
                            if (isset($slider_index_why_us) && $slider_index_why_us > 1) {
                        ?>
                            <div class="swiper-navigation module"></div>
                        <?php } ?>>
                    </div>

                <?php
                endif;
                ?>

            </div>
            <div class="col-lg-6">
            </div>
        </div>
    </div>
    <div class="after module" style="background-image: url('<?= $top_image['url']; ?>')">

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



<div class="block block-our-mission block-large-padding">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <div class="mission-content">
                    <h3 class="mission-title module"><?= $mission_title ?></h3>
                    <p class="margin-top50 module"><?= $mission_content ?></p>
                </div>
            </div>
            <div class="col-md-6">

            </div>
        </div>
    </div>
    <div class="before module" style="background-image: url('<?= get_template_directory_uri(); ?>/images/missionBG.png');">

    </div>
</div>


<div class="block block-about block-big-padding margin-top50">
    <div class="container">
        <h3 class="block-title module"><?= $why_us_section_title ?> </h3>

        <div class="row mobile-hide">

            <?php if (have_rows('why_us_section_items')) :
                while (have_rows('why_us_section_items')) : the_row();

                    $icon = get_sub_field("icon");
                    $title = get_sub_field("title");
                    $content = get_sub_field("content");
            ?>


                    <div class="col-md-4 margin-top50 module">
                        <div class="mission-box">
                            <div class="mission-content">
                                <img src="<?= $icon ?>">
                                <h3><?= $title ?></h3>
                                <p><?= $content ?></p>
                            </div>
                        </div>
                    </div>

            <?php
                endwhile;
            endif;
            ?>


        </div>

    </div>


    <div class="mobile-show block-small-no-container">

        <div class="swiper-container swiper-mobile-mission">
            <div class="swiper-wrapper">
                <?php if (have_rows('why_us_section_items')) :
                    while (have_rows('why_us_section_items')) : the_row();

                        $icon = get_sub_field("icon");
                        $title = get_sub_field("title");
                        $content = get_sub_field("content");
                ?>
                        <div class="swiper-slide margin-top50 module">
                            <div class="mission-box">
                                <div class="mission-content">
                                    <img src="<?= $icon ?>">
                                    <h3><?= $title ?></h3>
                                    <p><?= $content ?></p>
                                </div>
                            </div>
                        </div>
                <?php
                    endwhile;
                endif;
                ?>
            </div>

            <div class="swiper-pagination module"></div>
        </div>


    </div>

</div>

<div class="block block-team block-padding">
    <div class="container ">
        <div class="row">
            <div class="col-md-6">
                <div class="team-slider">

                    <div class="swiper-container swiper-team">

                        <div class="swiper-wrapper">
                            <?php if (have_rows('slider')) : ?>
                                <?php while (have_rows('slider')) : the_row();

                                    $image = get_sub_field('image');
                                    $title = get_sub_field('title');
                                    $content = get_sub_field('content');

                                ?>

                                    <div class="swiper-slide team-slide">
                                        <img src="<?= $image ?>">
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>
                        </div>
                        <div class="swiper-pagination mobile-show module"></div>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="team-content">

                    <div class="tabs module">
                        <?php if (have_rows('slider')) : $count = 0;
                            $length = count(get_field('slider'));
                        ?>
                            <?php while (have_rows('slider')) : the_row();

                                $image = get_sub_field('image');
                                $title = get_sub_field('title');
                                $position = get_sub_field('position');
                                $content = get_sub_field('content');
                                $facebook_label = get_sub_field('facebook_label');
                                $twitter_label = get_sub_field('twitter_label');
                                $linkedin_label = get_sub_field('linkedin_label');
                            ?>

                                <div class="tab-content <?= $length ?> tab-content<?= $count ?> <?php if ($count + 1 == $length) {
                                                                                                    echo 'active';
                                                                                                } ?>">

                                    <h3><?= $title ?></h3>
                                    <h5><?= $position ?></h5>
                                    <p><?= $content ?></p>

                                    <div class="social-icons">
                                        <?php if ($facebook_label) : ?>
                                            <a href="<?= $facebook_label ?>"><svg xmlns="http://www.w3.org/2000/svg" width="14.297" height="26.444" viewBox="0 0 14.297 26.444">
                                                    <path id="Path_267" data-name="Path 267" d="M35.836.006,32.406,0c-3.853,0-6.342,2.554-6.342,6.508v3H22.616a.539.539,0,0,0-.539.539V14.4a.539.539,0,0,0,.539.539h3.448V25.9a.539.539,0,0,0,.539.539h4.5a.539.539,0,0,0,.539-.539V14.935h4.031a.539.539,0,0,0,.539-.539l0-4.347a.54.54,0,0,0-.539-.539H31.641V6.965c0-1.223.291-1.843,1.884-1.843h2.31a.539.539,0,0,0,.539-.539V.545A.539.539,0,0,0,35.836.006Z" transform="translate(-22.077)" />
                                                </svg>
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($twitter_label) : ?>
                                            <a href="<?= $twitter_label ?>"><svg id="twitter" xmlns="http://www.w3.org/2000/svg" width="27.056" height="21.983" viewBox="0 0 27.056 21.983">
                                                    <g id="Group_168" data-name="Group 168" transform="translate(0 0)">
                                                        <path id="Path_268" data-name="Path 268" d="M27.056,50.6a11.564,11.564,0,0,1-3.2.876,5.515,5.515,0,0,0,2.44-3.066,11.085,11.085,0,0,1-3.517,1.343,5.546,5.546,0,0,0-9.595,3.793,5.711,5.711,0,0,0,.129,1.265,15.7,15.7,0,0,1-11.433-5.8,5.548,5.548,0,0,0,1.7,7.413,5.478,5.478,0,0,1-2.506-.683V55.8a5.572,5.572,0,0,0,4.444,5.45,5.536,5.536,0,0,1-1.454.183,4.9,4.9,0,0,1-1.05-.095A5.6,5.6,0,0,0,8.2,65.2,11.145,11.145,0,0,1,1.327,67.57,10.389,10.389,0,0,1,0,67.494a15.615,15.615,0,0,0,8.509,2.489A15.678,15.678,0,0,0,24.3,54.2c0-.245-.008-.482-.02-.717A11.065,11.065,0,0,0,27.056,50.6Z" transform="translate(0 -48)" />
                                                    </g>
                                                </svg>
                                            </a>
                                        <?php endif; ?>
                                        <?php if ($linkedin_label) : ?>
                                            <a href="<?= $linkedin_label ?>"><svg id="linkedin" xmlns="http://www.w3.org/2000/svg" width="25.807" height="25.808" viewBox="0 0 25.807 25.808">
                                                    <path id="Path_269" data-name="Path 269" d="M25.162,25.237h.006V15.771c0-4.63-1-8.2-6.41-8.2A5.619,5.619,0,0,0,13.7,10.356h-.075V8.006H8.489v17.23h5.344V16.7c0-2.246.426-4.418,3.208-4.418,2.741,0,2.782,2.564,2.782,4.563v8.388Z" transform="translate(0.639 0.57)" />
                                                    <path id="Path_270" data-name="Path 270" d="M.4,7.977H5.747v17.23H.4Z" transform="translate(0.03 0.601)" />
                                                    <path id="Path_271" data-name="Path 271" d="M3.1,0A3.114,3.114,0,1,0,6.2,3.1,3.1,3.1,0,0,0,3.1,0Z" />
                                                </svg>
                                            </a>
                                        <?php endif; ?>
                                    </div>


                                    <div class="slider-navigation">
                                        <span class="left-arrow <?php if ($count == 0) {
                                                                    echo 'disable';
                                                                } ?>"></span>
                                        <span class=" right-arrow <?php if ($count + 1 == $length) {
                                                                        echo 'disable';
                                                                    } ?>"></span>
                                    </div>

                                </div>

                            <?php $count++;
                            endwhile; ?>
                        <?php endif; ?>

                    </div>

                </div>
            </div>
        </div>
    </div>
</div>

<div class="block block-clients block-big-padding">
    <div class="container">
        <h3 class="module"><?= $clients_title ?></h3>
    </div>

    <div class="container">

        <div class="clients-image margin-top100">
            <div class="swiper-container swiper-container-clients swiper-no-swipe">
                <div class="swiper-wrapper">

                    <?php if (have_rows('clients')) :
                        while (have_rows('clients')) : the_row();
                            $client_image = get_sub_field("client_image");
                            $client_url = get_sub_field("client_url"); ?>

                            <a class="swiper-slide module" target="_blank" onclick="window.open('<?= $client_url ?>','_blank');return false;"> <img src="<?= $client_image['url'] ?>"> </a>

                    <?php
                        endwhile;
                    endif;
                    ?>

                </div>
                <div class="swiper-pagination mobile-show module"></div>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>