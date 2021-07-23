<?php

/**
 * Template Name: ContactUs
 *
 */
get_header();

$top_title = get_field('top_title');
$top_content = get_field('top_content');
$image = get_field('image');

$contact_steps = get_field('contact_steps');
$contact_steps_title = get_field('contact_steps_title');
$pricing_type_title = get_field('pricing_type_title');
$pricing_type_options = get_field('pricing_type_options');

$package_type_title = get_field('package_type_title');
$package_type_options = get_field('package_type_options');

$form_title = get_field('form_title');
$first_name_label = get_field('first_name_label');
$last_name_label = get_field('last_name_label');
$company_name_label = get_field('company_name_label');
$address_label = get_field('address_label');
$phone_number_label = get_field('phone_number_label');
$email_label = get_field('email_label');
$note_label = get_field('note_label');
$select_style_label = get_field('select_style_label');
$select_style_options = get_field('select_style_options');
$website_link_label = get_field('website_link_label');
$submit_button_text = get_field('submit_button_text');

$other_ways_to_contact_title = get_field('other_ways_to_contact_title');
$address_icon = get_field('address_icon');
$address_title = get_field('address_title');
$address_line_1 = get_field('address_line_1');
$address_line_2 = get_field('address_line_2');
$address_line_3 = get_field('address_line_3');
$contact_icon = get_field('contact_icon');
$contact_title = get_field('contact_title');
$contact_line_1 = get_field('contact_line_1');
$contact_line_1_call_number = get_field('contact_line_1_call_number');
$contact_line_2 = get_field('contact_line_2');
$contact_line_3 = get_field('contact_line_3');


$pricing_modal_images = get_field('pricing_modal_images');
$map_iframe = get_field("map_iframe");

$email_sent_label = get_field('email_sent_label');
$email_not_sent_label = get_field('email_not_sent_label');

?>

<div class="block block-main block-center block-circle-person block-dark block-big-padding">
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
                                $slider_index_contact = get_row_index();
                            ?>
                                <div class="swiper-slide">
                                    <p><?= $content ?></p>
                                </div>

                            <?php
                            endwhile;
                            ?>

                        </div>
                        <?php
                        if (isset($slider_index_contact) && $slider_index_contact > 1) {
                        ?>
                            <div class="swiper-navigation module"></div>
                        <?php } ?>

                    </div>

                <?php
                endif;
                ?>

            </div>
            <div class="col-md-6">
            </div>
        </div>
    </div>

    <div class="after module" style="background-image: url('<?= $image['url']; ?>')">

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

<div class="block block-contactmain-form block-contactform  block-contact-secondary block-big-padding">
    <div class="container">
        <p class="small-title module">
            <?= $contact_steps ?>
        </p>
        <h3 class="module"><?= $contact_steps_title ?></h3>

        <form action="" class="quoteForm">
            <div class="row before-border">
                <div class="col-lg-4">
                    <h5 class="left-title module"> <?= $pricing_type_title ?> </h5>
                </div>
                <div class="col-lg-8">
                    <div class="row">
                        <?php
                        if (have_rows('pricing_type_options')) :
                            $count = 0;
                            while (have_rows('pricing_type_options')) : the_row();
                                $icon = get_sub_field('icon');
                                $title = get_sub_field('title');
                                $price_from = get_sub_field('price_from');
                                $price_to = get_sub_field('price_to');
                        ?>
                                <div class="col-md-4 module">
                                    <label class="block-label pricing-label" for="<?= strtolower($title) ?>">
                                        <input class="pricing-radio" type="radio" value="<?= $title ?>" hidden name="pricing_type" id="<?= strtolower($title) ?>">
                                        <div class="contact-item <?php if (get_row_index() == 2) {
                                                                        echo 'contact-orange';
                                                                    };
                                                                    if (get_row_index() == 3) {
                                                                        echo 'contact-blue';
                                                                    };  ?>">
                                            <div class="item-icon">
                                                <img src="<?= $icon ?>" alt="">
                                            </div>
                                            <div class="item-title">
                                                <h5><?= $title ?></h5>
                                                <p><?= $price_from ?> <?= $price_to ?></p>
                                            </div>

                                        </div>
                                    </label>
                                </div>
                        <?php
                                $count++;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>

            <div class="row before-border-second">
                <div class="col-lg-4">
                    <h5 class="left-title module"> <?= $package_type_title ?> </h5>
                </div>

                <div class="col-lg-8">
                    <div class="row">

                        <?php
                        if (have_rows('package_type_options')) :
                            $count = 0;
                            while (have_rows('package_type_options')) : the_row();

                                $title = get_sub_field('title');

                        ?>
                                <div class="col-md-3">
                                    <label class="block-label package-label module" for="<?= strtolower($title) ?>">

                                        <input type="radio" hidden name="type" value="<?= $title ?>" id="<?= strtolower($title) ?>">
                                        <div class="second-box">
                                            <div class="box-button-second">
                                                <button>
                                                    <p><?= $title ?></p>
                                                </button>
                                            </div>
                                        </div>

                                    </label>
                                </div>
                        <?php
                                $count++;
                            endwhile;
                        endif;
                        ?>
                    </div>
                </div>
            </div>

            <div class="modal-content">
                <h3 class="modal-title module"><?= $form_title ?></h3>
                <div action="" class="form-limited-width">
                    <input type="hidden" value="contact" name="page">

                    <div class="row">
                        <div class="col-md-6 col-input left">
                            <input class="module" type="text" name="first_name" placeholder="<?= $first_name_label ?>" required>
                            <input class="module" type="text" name="company_name" placeholder="<?= $company_name_label ?>" required>
                            <input class="module" type="tel" name="phone_number" placeholder="<?= $phone_number_label ?>" required>
                        </div>
                        <div class="col-md-6 col-input right">
                            <input class="module" type="text" name="last_name" placeholder="<?= $last_name_label ?>" required>
                            <input class="module" type="text" name="address" placeholder="<?= $address_label ?>" required>
                            <input class="module" type="email" name="email" placeholder="<?= $email_label ?>" required>
                        </div>
                        <div class="col-md-12">
                            <div class="margin-bot15">
                                <input class="module" type="text" name="note" placeholder="<?= $note_label ?>" required>
                                <span><?= $select_style_label ?></span>
                            </div>

                            <div class="swiper-container swiper-form-label swiper-no-swiping">
                                <div class="swiper-wrapper">

                                    <?php
                                    foreach ($pricing_modal_images as $modalImage) {
                                    ?>
                                        <label class="swiper-slide module">
                                            <input type="radio" name="image" value="<?= $modalImage['url'] ?>" class="radiobtn">
                                            <img src="<?= $modalImage['url'] ?>">
                                        </label>
                                    <?php
                                    }
                                    ?>


                                </div>

                                <div class="swiper-pagination mobile-show module"></div>
                            </div>

                            <input class="module" type="url" name="url" placeholder="<?= $website_link_label ?>">
                        </div>

                    </div>
                    <button class="arrow-btn gradient-btn module"> <?= $submit_button_text ?> <svg xmlns="http://www.w3.org/2000/svg" width="23.079" height="16.228" viewBox="0 0 23.079 16.228">
                            <path id="right-arrow" d="M15.541,4.918a.818.818,0,0,0-1.163,1.151l5.9,5.9H.814A.81.81,0,0,0,0,12.782a.819.819,0,0,0,.814.826H20.276l-5.9,5.887a.835.835,0,0,0,0,1.163.815.815,0,0,0,1.163,0l7.294-7.294a.8.8,0,0,0,0-1.151Z" transform="translate(0 -4.674)" fill="#fff" />
                        </svg>
                        <div class="loading-icon">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 469.333 469.333" style="enable-background:new 0 0 469.333 469.333;" xml:space="preserve">
                                <g>
                                    <g>
                                        <g>
                                            <path d="M234.667,362.667c-70.72,0-128-57.28-128-128c0-21.653,5.44-41.92,14.827-59.84L90.347,143.68
                                    C73.813,170.133,64,201.173,64,234.667c0,94.293,76.373,170.667,170.667,170.667v64L320,384l-85.333-85.333V362.667z" fill="#fff" />
                                            <path d="M234.667,64V0l-85.333,85.333l85.333,85.333v-64c70.72,0,128,57.28,128,128c0,21.653-5.44,41.92-14.827,59.84
                                    l31.147,31.147c16.533-26.453,26.347-57.493,26.347-90.987C405.333,140.373,328.96,64,234.667,64z" fill="#fff" />
                                        </g>
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>
                        </div>
                        <div class="completed-icon">
                            <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                                <g>
                                    <g>
                                        <path d="M497.36,69.995c-7.532-7.545-19.753-7.558-27.285-0.032L238.582,300.845l-83.522-90.713
                                        c-7.217-7.834-19.419-8.342-27.266-1.126c-7.841,7.217-8.343,19.425-1.126,27.266l97.126,105.481
                                        c3.557,3.866,8.535,6.111,13.784,6.22c0.141,0.006,0.277,0.006,0.412,0.006c5.101,0,10.008-2.026,13.623-5.628L497.322,97.286
                                        C504.873,89.761,504.886,77.54,497.36,69.995z" fill="#fff"/>
                                    </g>
                                </g>
                                <g>
                                    <g>
                                        <path d="M492.703,236.703c-10.658,0-19.296,8.638-19.296,19.297c0,119.883-97.524,217.407-217.407,217.407
                                        c-119.876,0-217.407-97.524-217.407-217.407c0-119.876,97.531-217.407,217.407-217.407c10.658,0,19.297-8.638,19.297-19.296
                                        C275.297,8.638,266.658,0,256,0C114.84,0,0,114.84,0,256c0,141.154,114.84,256,256,256c141.154,0,256-114.846,256-256
                                        C512,245.342,503.362,236.703,492.703,236.703z" fill="#fff" />
                                    </g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                                <g>
                                </g>
                            </svg>
                        </div>
                    </button>
                </div>
            </div>
        </form>


        <div id="email-notification" class="email-notification" style="position: relative; top:20px; right:20px;min-height: 30px;min-width: 30px;z-index: 999;display: none;">
            <div class="toast" style="opacity: 1;z-index: 999;">
                <div class="toast-header bg-danger" id="tost-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="68.085" height="33.919" viewBox="0 0 68.085 33.919">
                        <path id="Path_280" data-name="Path 280" d="M62.691,33.919H27.238a5.391,5.391,0,0,1-5.385-5.386V5.386A5.386,5.386,0,0,1,27.238,0H62.69a5.392,5.392,0,0,1,5.386,5.386V28.533A5.392,5.392,0,0,1,62.691,33.919ZM24.863,4.161a2.65,2.65,0,0,0-.3,1.223V28.533a2.676,2.676,0,0,0,2.672,2.673H62.691a2.676,2.676,0,0,0,2.673-2.673V5.386a2.677,2.677,0,0,0-.216-1.054L47.206,18.558a1.354,1.354,0,0,1-1.618.051Zm2.666-1.449L46.312,15.806,62.818,2.715l-.126,0ZM68.076,5.386h0ZM60.463,28.01a1.353,1.353,0,0,1-.952-.391l-6.405-6.311a1.356,1.356,0,1,1,1.9-1.931l6.405,6.31a1.357,1.357,0,0,1-.952,2.323Zm-30.606-.549a1.355,1.355,0,0,1-1-2.276l5.787-6.268a1.356,1.356,0,1,1,1.993,1.84l-5.787,6.268A1.351,1.351,0,0,1,29.857,27.461ZM18.347,22.9H11.469a1.356,1.356,0,0,1,0-2.713h6.877a1.356,1.356,0,1,1,0,2.713Zm0-5.516H6.873a1.356,1.356,0,1,1,0-2.713H18.347a1.356,1.356,0,0,1,0,2.713Zm0-5.516H7.831a1.356,1.356,0,0,1,0-2.713H18.347a1.356,1.356,0,1,1,0,2.713Zm-14.406,0H1.356a1.356,1.356,0,0,1,0-2.713H3.941a1.356,1.356,0,0,1,0,2.713Z" transform="translate(0 0)" fill="#fff" />
                    </svg>
                    <strong class="mr-auto" id="email-notification-text" style="color: #fff;">

                    </strong>
                    <button type="button" class="close" data-dismiss="toast" aria-label="Close" onclick="jQuery('#email-notification').hide()">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
        </div>

    </div>
</div>


<div class="block block-other-contacts block-big-padding">
    <div class="container">
        <h3 class="title module"><?= $other_ways_to_contact_title ?></h3>
        <div class="row">
            <div class="col-md-6">
                <img class="module" src="<?= $address_icon ?>">
                <p class="contact-title module"><?= $address_title ?></p>
                <p class="contact-content module"><strong><?= $address_line_1 ?></strong></a> <br /><strong><?= $address_line_2 ?> </strong><br /> <strong><?= $address_line_3 ?></strong></p>
            </div>
            <div class="col-md-6">
                <img class="module" src="<?= $contact_icon ?>">
                <p class="contact-title module"><?= $contact_title ?></p>
                <p class="contact-content module"><a class="noredirect-animation" href="tel:<?= $contact_line_1_call_number ?>"><strong><?= $contact_line_1 ?></strong></a> <br /><strong><?= $contact_line_2 ?></strong> <br /> <a class="noredirect-animation" href="mailto:<?= $contact_line_3 ?>"><strong><?= $contact_line_3 ?></strong></a></p>
            </div>
        </div>
    </div>
</div>

<div class="block block-map module">
    <?= $map_iframe ?>
</div>


<?php get_footer(); ?>

