<?php

/**
 * Template Name: Pricing
 *
 */
get_header();

global $post;

$top_title = get_field('top_title');
$top_content = get_field('top_content');
$price_from = get_field('price_from');
$price_to = get_field('price_to');
$top_services = get_field('top_services');

$pricing = get_field('pricing');
$pricing_title = get_field('pricing_title');

$is_box_displayed = get_field('is_box_displayed');

$pricing_border_icon = get_field("pricing_border_icon");
$pricing_border_button = get_field("pricing_border_button");
$pricing_border_estellung = get_field("pricing_border_estellung");
$pricing_border_estellung_price = get_field("pricing_border_estellung_price");
$price_border_servicepaket = get_field("price_border_servicepaket");
$price_border_servicepaket_price = get_field("price_border_servicepaket_price");
$price_border_second_icon = get_field("price_border_second_icon");
$pricing_modal_images = get_field('pricing_modal_images');

$pricing_border_icon_2 = get_field("pricing_border_icon_2");
$pricing_border_button_2 = get_field("pricing_border_button_2");
$pricing_border_estellung_2 = get_field("pricing_border_estellung_2");
$pricing_border_estellung_price_2 = get_field("pricing_border_estellung_price_2");
$price_border_servicepaket_2 = get_field("price_border_servicepaket_2");
$price_border_servicepaket_price_2 = get_field("price_border_servicepaket_price_2");
$price_border_second_icon_2 = get_field("price_border_second_icon_2");
$pricing_modal_images_2 = get_field('pricing_modal_images_2');

$pricing_border_icon_3 = get_field("pricing_border_icon_3");
$pricing_border_button_3 = get_field("pricing_border_button_3");
$pricing_border_estellung_3 = get_field("pricing_border_estellung_3");
$pricing_border_estellung_price_3 = get_field("pricing_border_estellung_price_3");
$price_border_servicepaket_3 = get_field("price_border_servicepaket_3");
$price_border_servicepaket_price_3 = get_field("price_border_servicepaket_price_3");
$price_border_second_icon_3 = get_field("price_border_second_icon_3");
$pricing_modal_images_3 = get_field('pricing_modal_images_3');


$pricing_border_icon_4 = get_field("pricing_border_icon_4");
$pricing_border_button_4 = get_field("pricing_border_button_4");
$pricing_border_estellung_4 = get_field("pricing_border_estellung_4");
$pricing_border_estellung_price_4 = get_field("pricing_border_estellung_price_4");
$price_border_servicepaket_4 = get_field("price_border_servicepaket_4");
$price_border_servicepaket_price_4 = get_field("price_border_servicepaket_price_4");
$price_border_second_icon_4 = get_field("price_border_second_icon_4");
$pricing_modal_images_4 = get_field('pricing_modal_images_4');

$features = get_field('features');
$features_title = get_field('features_title');
$feature_items = get_field('feature_items');

$get_a_quote_label = get_field('get_a_quote_label');
$contact_for_package_label = get_field('contact_for_package_label');
$email_sent_label = get_field('email_sent_label');
$email_not_sent_label = get_field('email_not_sent_label');


$modal_title = get_field("modal_title");
$modal_orange_title = get_field("modal_orange_title");
$modal_blue_title = get_field("modal_blue_title");
$modal_green_title = get_field("modal_green_title");
$modal_name_label = get_field("modal_name_label");
$modal_surname_label = get_field("modal_surname_label");
$modal_company_label = get_field("modal_company_label");
$modal_address_label = get_field("modal_address_label");
$modal_phone_label = get_field("modal_phone_label");
$modal_email_label = get_field("modal_email_label");
$modal_note_label = get_field("modal_note_label");
$modal_select_label = get_field("modal_select_label");
$modal_link_label = get_field("modal_link_label");
$modal_button_label = get_field("modal_button_label");

?>

<div class="block block-main block-center block-dark block-padding">
    <div class="container">
        <div class="row">
            <div class="col-lg-7 col-12 col-planks col-mobile-bottom module">
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
                                $slider_index_price = get_row_index();
                                ?>
                                <div class="swiper-slide">
                                    <p><?= $content ?></p>
                                </div>

                            <?php
                            endwhile;
                            ?>

                        </div>
                        <?php
                            if (isset($slider_index_price) && $slider_index_price > 1) {
                        ?>
                            <div class="swiper-navigation module"></div>
                        <?php } ?>

                    </div>

                <?php
                endif;
                ?>

            </div>
            <div class="col-lg-5 order-lg-last order-first">
                <div class="pricing-content module">

                    <div class="price-border">
                        <h2 class="module"> <?= $price_from ?> <br /> <?= $price_to ?> </h2>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="block block-gradient">
    <div class="container">
        <div class="flex-wrapper">
            <?php
            if (have_rows('top_services')) :
                while (have_rows('top_services')) : the_row();
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
            ?>
                    <div class="flex-item">
                        <div class="service-content">
                            <div class="service-image module">
                                <img src="<?= $icon ?>" alt="<?= $title ?>">
                            </div>

                            <p class="module"><?= $title ?></p>
                        </div>
                    </div>
            <?php
                endwhile;
            endif;
            ?>
        </div>
    </div>
</div>

<div class="block block-pricing block-big-padding">
    <div class="container">
        <p class="small-title module">
            <?= $pricing ?>
        </p>
        <h3 class="block-title module">
            <?= $pricing_title ?>
        </h3>

        <div class="row">
            <?php $box_class = 'col-lg-4';

            if ($is_box_displayed) {
                $box_class = 'col-lg-6';
            }

            ?>
            <?php if (
                $pricing_border_icon &&
                $pricing_border_button &&
                $pricing_border_estellung &&
                $pricing_border_estellung_price &&
                $price_border_servicepaket &&
                $price_border_servicepaket_price &&
                $price_border_second_icon
            ) : ?>
                <div class="<?= $box_class ?> col-12 col-box module">
                    <div class="box">
                        <div class="box-hover">
                            <div class="box-content">
                                <?php if ($contact_for_package_label) { ?>
                                    <h3><?= $contact_for_package_label ?></h3>
                                <?php } ?>
                                <?php if ($get_a_quote_label) { ?>
                                    <button class="module-btn" data-toggle="modal" data-target="#quoteModal"><?= $get_a_quote_label ?></button>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="box-icon">
                            <img src="<?= $pricing_border_icon["url"] ?>" alt="<?= $title ?>">
                        </div>
                        <div class="box-button">
                            <a href="<?= $pricing_border_button['url'] ?>">
                                <span><?= $pricing_border_button['title'] ?></span>
                            </a>
                        </div>
                        <div class="box-pricing <?php if ($is_box_displayed) {
                                                    echo 'box-pricing-max';
                                                } ?>">
                            <div class="price-type">
                                <p> <?= $pricing_border_estellung ?> </p>
                            </div>
                            <div class="price-numbers">
                                <p><?= $pricing_border_estellung_price ?></p>
                            </div>
                        </div>
                        <div class="box-pricing <?php if ($is_box_displayed) {
                                                    echo 'box-pricing-max';
                                                } ?>">
                            <div class="price-type">
                                <p> <?= $price_border_servicepaket ?> </p>
                            </div>
                            <div class="price-numbers">
                                <p><?= $price_border_servicepaket_price ?></p>
                            </div>
                        </div>
                        <div class="box-link">
                            <a href="#">
                                <img src="<?= $price_border_second_icon["url"] ?>" alt="<?= $title ?>">
                            </a>
                        </div>
                    </div>

                </div>
            <?php endif; ?>

            <?php if (
                $pricing_border_icon_2 &&
                $pricing_border_button_2 &&
                $pricing_border_estellung_2 &&
                $pricing_border_estellung_price_2 &&
                $price_border_servicepaket_2 &&
                $price_border_servicepaket_price_2 &&
                $price_border_second_icon_2
            ) : ?>
                <div class="<?= $box_class ?> col-12 col-box module">
                    <div class="box box-orange">
                        <div class="box-hover">
                            <div class="box-content">
                                <?php if ($contact_for_package_label) { ?>
                                    <h3><?= $contact_for_package_label ?></h3>
                                <?php } ?>
                                <?php if ($get_a_quote_label) { ?>
                                    <button class="module-btn" data-toggle="modal" data-target="#quoteModalOrange"><?= $get_a_quote_label ?></button>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="box-icon">
                            <img src="<?= $pricing_border_icon_2["url"] ?>" alt="<?= $title ?>">
                        </div>
                        <div class="box-button">
                            <a href="<?= $pricing_border_button_2['url'] ?>">
                                <span><?= $pricing_border_button_2['title'] ?></span>
                            </a>
                        </div>
                        <div class="box-pricing <?php if ($is_box_displayed) {
                                                    echo 'box-pricing-max';
                                                } ?>">
                            <div class="price-type">
                                <p> <?= $pricing_border_estellung_2 ?> </p>
                            </div>
                            <div class="price-numbers">
                                <p><?= $pricing_border_estellung_price_2 ?></p>
                            </div>
                        </div>
                        <div class="box-pricing <?php if ($is_box_displayed) {
                                                    echo 'box-pricing-max';
                                                } ?>">
                            <div class="price-type">
                                <p> <?= $price_border_servicepaket_2 ?> </p>
                            </div>
                            <div class="price-numbers">
                                <p><?= $price_border_servicepaket_price_2 ?></p>
                            </div>
                        </div>
                        <div class="box-link">
                            <a href="#">
                                <img src="<?= $price_border_second_icon_2["url"] ?>" alt="<?= $title ?>">
                            </a>
                        </div>
                    </div>
                </div>


            <?php endif; ?>

            <?php if (
                $pricing_border_icon_3 &&
                $pricing_border_button_3 &&
                $pricing_border_estellung_3 &&
                $pricing_border_estellung_price_3 &&
                $price_border_servicepaket_3 &&
                $price_border_servicepaket_price_3 &&
                $price_border_second_icon_3
            ) : ?>
                <div class="<?= $box_class ?> col-12 col-box module">
                    <div class="box box-blue">
                        <div class="box-hover">
                            <div class="box-content">
                                <?php if ($contact_for_package_label) { ?>
                                    <h3><?= $contact_for_package_label ?></h3>
                                <?php } ?>
                                <?php if ($get_a_quote_label) { ?>
                                    <button class="module-btn" data-toggle="modal" data-target="#quoteModalBlue"><?= $get_a_quote_label ?></button>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="box-icon">
                            <img src="<?= $pricing_border_icon_3["url"] ?>" alt="<?= $title ?>">
                        </div>
                        <div class="box-button">
                            <a href="<?= $pricing_border_button_3['url'] ?>">
                                <span><?= $pricing_border_button_3['title'] ?></span>
                            </a>
                            <div class=""></div>
                        </div>
                        <div class="box-pricing <?php if ($is_box_displayed) {
                                                    echo 'box-pricing-max';
                                                } ?>">
                            <div class="price-type">
                                <p> <?= $pricing_border_estellung_3 ?> </p>
                            </div>
                            <div class="price-numbers">
                                <p><?= $pricing_border_estellung_price_3 ?></p>
                            </div>
                        </div>
                        <div class="box-pricing <?php if ($is_box_displayed) {
                                                    echo 'box-pricing-max';
                                                } ?>">
                            <div class="price-type">
                                <p> <?= $price_border_servicepaket_3 ?> </p>
                            </div>
                            <div class="price-numbers">
                                <p><?= $price_border_servicepaket_price_3 ?></p>
                            </div>
                        </div>
                        <div class="box-link">
                            <a href="#">
                                <img src="<?= $price_border_second_icon_3["url"] ?>" alt="<?= $title ?>">
                            </a>
                        </div>
                    </div>
                </div>


            <?php endif; ?>

            <?php if (
                $pricing_border_icon_4 &&
                $pricing_border_button_4 &&
                $pricing_border_estellung_4 &&
                $pricing_border_estellung_price_4 &&
                $price_border_servicepaket_4 &&
                $price_border_servicepaket_price_4 &&
                $price_border_second_icon_4
            ) : ?>
                <div class="<?= $box_class ?> col-12 col-box module">
                    <div class="box box-green">
                        <div class="box-hover">
                            <div class="box-content">
                                <?php if ($contact_for_package_label) { ?>
                                    <h3><?= $contact_for_package_label ?></h3>
                                <?php } ?>
                                <?php if ($get_a_quote_label) { ?>
                                    <button class="module-btn" data-toggle="modal" data-target="#quoteModalGreen"><?= $get_a_quote_label ?></button>
                                <?php } ?>
                            </div>
                        </div>
                        <div class="box-icon">
                            <img src="<?= $pricing_border_icon_4["url"] ?>" alt="<?= $title ?>">
                        </div>
                        <div class="box-button">
                            <a href="<?= $pricing_border_button_4['url'] ?>">
                                <span><?= $pricing_border_button_4['title'] ?></span>
                            </a>
                            <div class=""></div>
                        </div>
                        <div class="box-pricing <?php if ($is_box_displayed) {
                                                    echo 'box-pricing-max';
                                                } ?>">
                            <div class="price-type">
                                <p> <?= $pricing_border_estellung_4 ?> </p>
                            </div>
                            <div class="price-numbers">
                                <p><?= $pricing_border_estellung_price_4 ?></p>
                            </div>
                        </div>
                        <div class="box-pricing <?php if ($is_box_displayed) {
                                                    echo 'box-pricing-max';
                                                } ?>">
                            <div class="price-type">
                                <p> <?= $price_border_servicepaket_4 ?> </p>
                            </div>
                            <div class="price-numbers">
                                <p><?= $price_border_servicepaket_price_4 ?></p>
                            </div>
                        </div>
                        <div class="box-link">
                            <a href="#">
                                <img src="<?= $price_border_second_icon_4["url"] ?>" alt="<?= $title ?>">
                            </a>
                        </div>
                    </div>
                </div>

            <?php endif; ?>

        </div>

        <div class="row">
            <div class="container">
                <p class="price-expression">
                *jährlich                          
                </p>
            </div>
        </div>
    </div>
    
</div>

<div class="block block-features">
    <div class="container">
        <p class="small-title module">
            <?= $features ?>
        </p>
        <h3 class="block-title module">
            <?= $features_title ?>
        </h3>

        <?php if (have_rows('feature_items')) : $count = 0; ?>

            <div class="feature-row margin-top100 margin-bot100 mobile-hide">
                <?php while (have_rows('feature_items')) : the_row(); ?>
                    <?php
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                    ?>

                    <div class="feature-col module">

                        <div class="feature-box <?php if ($count == 1) {
                                                    echo 'margin-top100';
                                                } ?> <?php if ($count % 2 == 0 && $count !== 0) {
                                                            echo 'margin-top-100';
                                                        } ?>">
                            <div class="feature-content">

                                <h2><img src="<?= $icon ?>"> <?= $title ?></h2>
                                <p><?= $content ?></p>

                            </div>

                        </div>

                    </div>

                <?php
                    $count++;
                endwhile;
                ?>

            </div>

        <?php
        endif;
        ?>

    </div>

    <div class="block-no-container mobile-show">
        <?php if (have_rows('feature_items')) : $count = 0; ?>

            <div class="swiper-container swiper-mobile-features">
                <div class="swiper-wrapper">
                <?php while (have_rows('feature_items')) : the_row(); ?>
                    <?php
                    $icon = get_sub_field('icon');
                    $title = get_sub_field('title');
                    $content = get_sub_field('content');
                    ?>

                    <div class="feature-col swiper-slide module">

                        <div class="feature-box">
                            <div class="feature-content">

                                <h2><img src="<?= $icon ?>"> <?= $title ?></h2>
                                <p><?= $content ?></p>

                            </div>

                        </div>

                    </div>

                <?php
                    $count++;
                endwhile;
                ?>

                </div>
                <div class="swiper-pagination module"></div>
            </div>

        <?php
        endif;
        ?>
    </div>
</div>


<!-- Modal -->
<div class="modal-call modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" id="modali">
            <h3 class="modal-title"><?= $modal_title ?></h3>
            <button type="button" class="close" data-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="28.355" height="28.355" viewBox="0 0 28.355 28.355">
                    <g id="Group_189" data-name="Group 189" transform="translate(-1271.322 -105.323)">
                        <rect id="Rectangle_169" data-name="Rectangle 169" width="4.008" height="36.089" rx="2.004" transform="translate(1271.324 108.159) rotate(-45)" fill="#171a29" />
                        <rect id="Rectangle_170" data-name="Rectangle 170" width="4.012" height="36.089" rx="2.006" transform="translate(1274.159 133.679) rotate(-135)" fill="#171a29" />
                    </g>
                </svg>
            </button>

            <form action="" class="quoteForm">
                <input type="hidden" value="pricing" name="page">
                <?php
                if ($top_title) { ?>
                    <input type="hidden" name="pricing_type" value="<?= $top_title ?>">
                <?php } else { ?>
                    <input type="hidden" name="pricing_type" value="<?= $post->post_name ?>">
                <?php }
                ?>

                <input type="hidden" name="type" value="<?= $pricing_border_button['title'] ?>">
                <div class="row">
                    <div class="col-md-6 col-input left">
                        <input type="text" name="first_name" placeholder="<?= $modal_name_label ?>" required>
                        <input type="text" name="company_name" placeholder="<?= $modal_company_label ?>" required>
                        <input type="tel" name="phone_number" placeholder="<?= $modal_phone_label ?>" required>
                    </div>
                    <div class="col-md-6 col-input right">
                        <input type="text" name="last_name" placeholder="<?= $modal_surname_label ?>" required>
                        <input type="text" name="address" placeholder="<?= $modal_address_label ?>" required>
                        <input type="email" name="email" placeholder="<?= $modal_email_label ?>" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" name="note" placeholder="Note" required>
                        <span><?= $modal_select_label ?></span><br /><br />


                        <?php
                        foreach ($pricing_modal_images as $modalImage) {
                        ?>
                            <label>
                                <input type="radio" name="image" value="<?= $modalImage['url'] ?>" class="radiobtn">
                                <img src="<?= $modalImage['url'] ?>">
                            </label>
                        <?php
                        }
                        ?>

                        <input type="url" name="url" placeholder="<?= $modal_link_label ?>">
                    </div>

                </div>
                <button class="modal-button"> <?= $modal_button_label ?> <svg xmlns="http://www.w3.org/2000/svg" width="23.079" height="16.228" viewBox="0 0 23.079 16.228">
                        <path id="right-arrow" d="M15.541,4.918a.818.818,0,0,0-1.163,1.151l5.9,5.9H.814A.81.81,0,0,0,0,12.782a.819.819,0,0,0,.814.826H20.276l-5.9,5.887a.835.835,0,0,0,0,1.163.815.815,0,0,0,1.163,0l7.294-7.294a.8.8,0,0,0,0-1.151Z" transform="translate(0 -4.674)" fill="#fff" />
                    </svg>
                </button>
            </form>

        </div>
    </div>
</div>

<!-- ModalGreen -->
<div class="modal-call modal fade" id="quoteModalGreen" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <h3 class="modal-title"><?= $modal_green_title ?></h3>
            <button type="button" class="close" data-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="28.355" height="28.355" viewBox="0 0 28.355 28.355">
                    <g id="Group_189" data-name="Group 189" transform="translate(-1271.322 -105.323)">
                        <rect id="Rectangle_169" data-name="Rectangle 169" width="4.008" height="36.089" rx="2.004" transform="translate(1271.324 108.159) rotate(-45)" fill="#171a29" />
                        <rect id="Rectangle_170" data-name="Rectangle 170" width="4.012" height="36.089" rx="2.006" transform="translate(1274.159 133.679) rotate(-135)" fill="#171a29" />
                    </g>
                </svg>
            </button>



            <form action="" class="quoteForm">
                <input type="hidden" value="pricing" name="page">
                <?php
                if ($top_title) { ?>
                    <input type="hidden" name="pricing_type" value="<?= $top_title ?>">
                <?php } else { ?>
                    <input type="hidden" name="pricing_type" value="<?= $post->post_name ?>">
                <?php }
                ?>

                <input type="hidden" name="type" value="<?= $pricing_border_button_4['title'] ?>">
                <div class="row">
                    <div class="col-md-6 col-input left">
                        <input type="text" name="first_name" placeholder="<?= $modal_name_label ?>" required>
                        <input type="text" name="company_name" placeholder="<?= $modal_company_label ?>" required>
                        <input type="tel" name="phone_number" placeholder="<?= $modal_phone_label ?>" required>
                    </div>
                    <div class="col-md-6 col-input right">
                        <input type="text" name="last_name" placeholder="<?= $modal_surname_label ?>" required>
                        <input type="text" name="address" placeholder="<?= $modal_address_label ?>" required>
                        <input type="email" name="email" placeholder="<?= $modal_email_label ?>" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" placeholder="Note" name="note">
                        <span><?= $modal_select_label ?></span><br /><br />
                        <?php
                        foreach ($pricing_modal_images_4 as $modalImage) {
                        ?>
                            <label>
                                <input type="radio" name="image" value="<?= $modalImage['url'] ?>" class="radiobtn">
                                <img src="<?= $modalImage['url'] ?>">
                            </label>
                        <?php
                        }
                        ?>
                        <input type="url" placeholder="<?= $modal_link_label ?>">
                    </div>

                </div>
                <button class="modal-button"> <? $modal_button_label ?>
                    <svg xmlns="http://www.w3.org/2000/svg" width="23.079" height="16.228" viewBox="0 0 23.079 16.228">
                        <path id="right-arrow" d="M15.541,4.918a.818.818,0,0,0-1.163,1.151l5.9,5.9H.814A.81.81,0,0,0,0,12.782a.819.819,0,0,0,.814.826H20.276l-5.9,5.887a.835.835,0,0,0,0,1.163.815.815,0,0,0,1.163,0l7.294-7.294a.8.8,0,0,0,0-1.151Z" transform="translate(0 -4.674)" fill="#fff" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>

<!-- ModalBlue -->
<div class="modal-call modal fade" id="quoteModalBlue" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <h3 class="modal-title"><?= $modal_blue_title ?></h3>
            <button type="button" class="close" data-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="28.355" height="28.355" viewBox="0 0 28.355 28.355">
                    <g id="Group_189" data-name="Group 189" transform="translate(-1271.322 -105.323)">
                        <rect id="Rectangle_169" data-name="Rectangle 169" width="4.008" height="36.089" rx="2.004" transform="translate(1271.324 108.159) rotate(-45)" fill="#171a29" />
                        <rect id="Rectangle_170" data-name="Rectangle 170" width="4.012" height="36.089" rx="2.006" transform="translate(1274.159 133.679) rotate(-135)" fill="#171a29" />
                    </g>
                </svg>
            </button>

            <form action="" class="quoteForm">
                <input type="hidden" value="pricing" name="page">

                <?php
                if ($top_title) { ?>
                    <input type="hidden" name="pricing_type" value="<?= $top_title ?>">
                <?php } else { ?>
                    <input type="hidden" name="pricing_type" value="<?= $post->post_name ?>">
                <?php }
                ?>

                <input type="hidden" name="type" value="<?= $pricing_border_button_3['title'] ?>">
                <div class="row">
                    <div class="col-md-6 col-input left">
                        <input type="text" name="first_name" placeholder="<?= $modal_name_label ?>" required>
                        <input type="text" name="company_name" placeholder="<?= $modal_company_label ?>" required>
                        <input type="tel" name="phone_number" placeholder="<?= $modal_phone_label ?>" required>
                    </div>
                    <div class="col-md-6 col-input right">
                        <input type="text" name="last_name" placeholder="<?= $modal_surname_label ?>" required>
                        <input type="text" name="address" placeholder="<?= $modal_address_label ?>" required>
                        <input type="email" name="email" placeholder="<?= $modal_email_label ?>" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" placeholder="Note" name="note">
                        <span><?= $modal_select_label ?></span><br /><br />
                        <?php
                        foreach ($pricing_modal_images_3 as $modalImage) {
                        ?>
                            <label>
                                <input type="radio" name="image" value="<?= $modalImage['url'] ?>" class="radiobtn">
                                <img src="<?= $modalImage['url'] ?>">
                            </label>
                        <?php
                        }
                        ?>
                        <input type="url" placeholder="<?= $modal_link_label ?>">
                    </div>

                </div>
                <button class="modal-button"> <?= $modal_button_label ?> <svg xmlns="http://www.w3.org/2000/svg" width="23.079" height="16.228" viewBox="0 0 23.079 16.228">
                        <path id="right-arrow" d="M15.541,4.918a.818.818,0,0,0-1.163,1.151l5.9,5.9H.814A.81.81,0,0,0,0,12.782a.819.819,0,0,0,.814.826H20.276l-5.9,5.887a.835.835,0,0,0,0,1.163.815.815,0,0,0,1.163,0l7.294-7.294a.8.8,0,0,0,0-1.151Z" transform="translate(0 -4.674)" fill="#fff" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>

<!-- ModalOrange -->
<div class="modal-call modal fade" id="quoteModalOrange" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content">
            <h3 class="modal-title"><?= $modal_orange_title ?></h3>
            <button type="button" class="close" data-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="28.355" height="28.355" viewBox="0 0 28.355 28.355">
                    <g id="Group_189" data-name="Group 189" transform="translate(-1271.322 -105.323)">
                        <rect id="Rectangle_169" data-name="Rectangle 169" width="4.008" height="36.089" rx="2.004" transform="translate(1271.324 108.159) rotate(-45)" fill="#171a29" />
                        <rect id="Rectangle_170" data-name="Rectangle 170" width="4.012" height="36.089" rx="2.006" transform="translate(1274.159 133.679) rotate(-135)" fill="#171a29" />
                    </g>
                </svg>
            </button>

            <form action="" class="quoteForm">
                <input type="hidden" value="pricing" name="page">
                <?php
                if ($top_title) { ?>
                    <input type="hidden" name="pricing_type" value="<?= $top_title ?>">
                <?php } else { ?>
                    <input type="hidden" name="pricing_type" value="<?= $post->post_name ?>">
                <?php }
                ?>

                <input type="hidden" name="type" value="<?= $pricing_border_button_2['title'] ?>">
                <div class="row">
                    <div class="col-md-6 col-input left">
                        <input type="text" name="first_name" placeholder="<?= $modal_name_label ?>" required>
                        <input type="text" name="company_name" placeholder="<?= $modal_company_label ?>" required>
                        <input type="tel" name="phone_number" placeholder="<?= $modal_phone_label ?>" required>
                    </div>
                    <div class="col-md-6 col-input right">
                        <input type="text" name="last_name" placeholder="<?= $modal_surname_label ?>" required>
                        <input type="text" name="address" placeholder="<?= $modal_address_label ?>" required>
                        <input type="email" name="email" placeholder="<?= $modal_email_label ?>" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" placeholder="Note" name="note">
                        <span><?= $modal_note_label ?></span><br /><br />
                        <?php
                        foreach ($pricing_modal_images_2 as $modalImage) {
                        ?>
                            <label>
                                <input type="radio" name="image" value="<?= $modalImage['url'] ?>" class="radiobtn">
                                <img src="<?= $modalImage['url'] ?>">
                            </label>
                        <?php
                        }
                        ?>
                        <input type="url" placeholder="<?= $modal_link_label ?>">
                    </div>

                </div>
                <button class="modal-button"> <?= $modal_button_label ?> <svg xmlns="http://www.w3.org/2000/svg" width="23.079" height="16.228" viewBox="0 0 23.079 16.228">
                        <path id="right-arrow" d="M15.541,4.918a.818.818,0,0,0-1.163,1.151l5.9,5.9H.814A.81.81,0,0,0,0,12.782a.819.819,0,0,0,.814.826H20.276l-5.9,5.887a.835.835,0,0,0,0,1.163.815.815,0,0,0,1.163,0l7.294-7.294a.8.8,0,0,0,0-1.151Z" transform="translate(0 -4.674)" fill="#fff" />
                    </svg>
                </button>
            </form>
        </div>
    </div>
</div>


<?php get_footer(); ?>

<script>
    var emailSentText = '<?php echo $email_sent_label; ?>';
    var emailNotSentText = '<?php echo $email_not_sent_label; ?>';
    var siteURL = '<?php echo get_site_url(); ?>';


    jQuery(function() {
        sendEmail(siteURL, emailSentText, emailNotSentText);
    });
</script>