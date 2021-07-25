<?php
$footer_logo = get_field('footer_logo', 'options');
$footer_text = get_field('footer_text', 'options');

$menu_title_1 = get_field('menu_title_1', 'options');
$menu_title_2 = get_field('menu_title_2', 'options');
$menu_title_3 = get_field('menu_title_3', 'options');

$copyright_text = get_field('copyright_text', 'options');
$go_to_top_text = get_field('go_to_top', 'options');

$call_us_title = get_field('call_us_title', 'options');
$call_us_link = get_field('call_us_link', 'options');


$footer_pop_up_title = get_field('footer_pop_up_title', 'options');
$footer_pop_up_select_date = get_field('footer_pop_up_select_date', 'options');
$footer_pop_up_select_time = get_field('footer_pop_up_select_time', 'options');
$footer_pop_up_type_message = get_field('footer_pop_up_type_message', 'options');
$footer_pop_up_button_text = get_field('footer_pop_up_button_text', 'options');


$second_modal_title = get_field('second_modal_title', 'options');
$second_modal_first_name_label = get_field('second_modal_first_name_label', 'options');
$second_modal_last_name_label = get_field('second_modal_last_name_label', 'options');
$second_modal_companyname_label = get_field('second_modal_companyname_label', 'options');
$second_modal_address_label = get_field('second_modal_address_label', 'options');
$second_modal_phone_label = get_field('second_modal_phone_label', 'options');
$second_modal_email_label = get_field('second_modal_email_label', 'options');
$second_modal_note_label = get_field('second_modal_note_label', 'options');
$second_modal_style_label = get_field('second_modal_style_label', 'options');
$second_modal_url_label = get_field('second_modal_url_label', 'options');
$second_modal_submit_label = get_field('second_modal_submit_label', 'options');
$second_modal_style_gallery = get_field('second_modal_style_gallery', 'options');
$email_sent_text = get_field('sent_email_text', 'options');
$email_not_sent_text = get_field('email_not_sent_text', 'options');


?>

<div class="block block-small-padding block-gradient block-phone-clock text-center">
    <div class="container">
        <h3 class="block-title text-white ">
            <strong><?= $call_us_title ?></strong>
        </h3>
        <a href="#" class="arrow-btn white-btn  module-btn" id="module-btn" data-toggle="modal" data-target="#call">
            <?= $call_us_link['title'] ?>
            <svg xmlns="http://www.w3.org/2000/svg" width="23.65" height="16.629" viewBox="0 0 23.65 16.629">
                <path id="right-arrow" d="M15.926,4.924A.839.839,0,0,0,14.734,6.1l6.044,6.044H.834A.83.83,0,0,0,0,12.983a.84.84,0,0,0,.834.846H20.777l-6.044,6.032a.856.856,0,0,0,0,1.192.835.835,0,0,0,1.192,0L23.4,13.579a.821.821,0,0,0,0-1.18Z" transform="translate(0 -4.674)" fill="#5DC2CE" />
            </svg>
        </a>
    </div>
</div>
<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a class="footer-logo " href="<?= get_home_url(); ?>">
                    <img src="<?= $footer_logo ?>">
                </a>
                <p class="footer-text ">
                    <?= $footer_text ?>
                </p>
            </div>

            <div class="col-md-8">
                <div class="row">
                    <div class="col-md-4 col-6">
                        <div class="footer-menu">
                            <p class="footer-menu-title ">
                                <?= $menu_title_1 ?>
                            </p>

                            <?php
                            wp_nav_menu(array(
                                'menu' => 'Primary',
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4 col-6">
                        <div class="footer-menu">
                            <p class="footer-menu-title ">
                                <?= $menu_title_2 ?>
                            </p>

                            <?php
                            wp_nav_menu(array(
                                'menu' => 'Quick Links',
                            ));
                            ?>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="footer-menu">
                            <p class="footer-menu-title ">
                                <?= $menu_title_3 ?>
                            </p>

                            <?php
                            wp_nav_menu(array(
                                'menu' => 'Follow Us',
                            ));
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-md-6 col-12">
                <p class="footer-bottom-text ">
                    <?= $copyright_text ?>
                </p>
            </div>
            <div class="col-md-6 col-12">
                <button class="totop-btn" id="scroll-to-top">
                    <p class="footer-bottom-text text-right ">
                        <?= $go_to_top_text ?>
                    </p>
                </button>
            </div>
        </div>
    </div>
</footer>

<div id="email-notification" class="email-notification" style="position: fixed; top:20px; right:20px;min-height: 30px;min-width: 30px;z-index: 999;display: none;">
    <div class="toast" style="opacity: 1;z-index: 9999999;">
        <div class="toast-header bg-danger" id="tost-header">
            <svg xmlns="http://www.w3.org/2000/svg" width="68.085" height="33.919" viewBox="0 0 68.085 33.919">
                <path id="Path_280" data-name="Path 280" d="M62.691,33.919H27.238a5.391,5.391,0,0,1-5.385-5.386V5.386A5.386,5.386,0,0,1,27.238,0H62.69a5.392,5.392,0,0,1,5.386,5.386V28.533A5.392,5.392,0,0,1,62.691,33.919ZM24.863,4.161a2.65,2.65,0,0,0-.3,1.223V28.533a2.676,2.676,0,0,0,2.672,2.673H62.691a2.676,2.676,0,0,0,2.673-2.673V5.386a2.677,2.677,0,0,0-.216-1.054L47.206,18.558a1.354,1.354,0,0,1-1.618.051Zm2.666-1.449L46.312,15.806,62.818,2.715l-.126,0ZM68.076,5.386h0ZM60.463,28.01a1.353,1.353,0,0,1-.952-.391l-6.405-6.311a1.356,1.356,0,1,1,1.9-1.931l6.405,6.31a1.357,1.357,0,0,1-.952,2.323Zm-30.606-.549a1.355,1.355,0,0,1-1-2.276l5.787-6.268a1.356,1.356,0,1,1,1.993,1.84l-5.787,6.268A1.351,1.351,0,0,1,29.857,27.461ZM18.347,22.9H11.469a1.356,1.356,0,0,1,0-2.713h6.877a1.356,1.356,0,1,1,0,2.713Zm0-5.516H6.873a1.356,1.356,0,1,1,0-2.713H18.347a1.356,1.356,0,0,1,0,2.713Zm0-5.516H7.831a1.356,1.356,0,0,1,0-2.713H18.347a1.356,1.356,0,1,1,0,2.713Zm-14.406,0H1.356a1.356,1.356,0,0,1,0-2.713H3.941a1.356,1.356,0,0,1,0,2.713Z" transform="translate(0 0)" fill="#fff" />
            </svg>
            <strong id="email-notification-text" style="color: #fff;">

            </strong>
            <button type="button" class="close" data-dismiss="toast" aria-label="Close" onclick="jQuery('#email-notification').hide()">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
    </div>
</div>


<!-- Modal Call -->
<div class="modal-call modal fade" id="call" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" id="modali10">
            <h3 class="modal-title"><?= $footer_pop_up_title ?></h3>
            <button type="button" class="close" data-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="28.355" height="28.355" viewBox="0 0 28.355 28.355">
                    <g id="Group_189" data-name="Group 189" transform="translate(-1271.322 -105.323)">
                        <rect id="Rectangle_169" data-name="Rectangle 169" width="4.008" height="36.089" rx="2.004" transform="translate(1271.324 108.159) rotate(-45)" fill="#171a29" />
                        <rect id="Rectangle_170" data-name="Rectangle 170" width="4.012" height="36.089" rx="2.006" transform="translate(1274.159 133.679) rotate(-135)" fill="#171a29" />
                    </g>
                </svg>
            </button>

            <form action="" class="quoteForm">
                <div class="row">
                    <div class="col-md-6 col-input datepicker-wrapper" id="datepicker">
                        <svg id="Group_73" data-name="Group 73" xmlns="http://www.w3.org/2000/svg" width="26.688" height="26.688" viewBox="0 0 26.688 26.688">
                            <g id="Group_72" data-name="Group 72">
                                <path id="Path_110" data-name="Path 110" d="M279,281.535a2.087,2.087,0,0,0,2.085,2.085h2.45a2.087,2.087,0,0,0,2.085-2.085v-2.45A2.087,2.087,0,0,0,283.535,277h-2.45A2.087,2.087,0,0,0,279,279.085Zm2.085-2.45h2.45v2.45h-2.451Z" transform="translate(-264.457 -262.561)" fill="#4bc9d7" />
                                <ellipse id="Ellipse_7" data-name="Ellipse 7" cx="1.13" cy="1.017" rx="1.13" ry="1.017" transform="translate(18.984 9.944)" fill="#4bc9d7" />
                                <ellipse id="Ellipse_8" data-name="Ellipse 8" cx="1.13" cy="1.017" rx="1.13" ry="1.017" transform="translate(14.464 9.944)" fill="#4bc9d7" />
                                <path id="Path_111" data-name="Path 111" d="M25.646,18.348a1.042,1.042,0,0,0,1.043-1.043V6.255a4.175,4.175,0,0,0-4.17-4.17H21.163V1.043a1.043,1.043,0,1,0-2.085,0V2.085H14.335V1.043a1.043,1.043,0,1,0-2.085,0V2.085H7.558V1.043a1.043,1.043,0,0,0-2.085,0V2.085H4.17A4.175,4.175,0,0,0,0,6.255V22.518a4.175,4.175,0,0,0,4.17,4.17H22.518a4.175,4.175,0,0,0,4.17-4.17,1.043,1.043,0,0,0-2.085,0A2.087,2.087,0,0,1,22.518,24.6H4.17a2.087,2.087,0,0,1-2.085-2.085V6.255A2.087,2.087,0,0,1,4.17,4.17h1.3V5.213a1.043,1.043,0,0,0,2.085,0V4.17H12.25V5.213a1.043,1.043,0,1,0,2.085,0V4.17h4.743V5.213a1.043,1.043,0,1,0,2.085,0V4.17h1.355A2.087,2.087,0,0,1,24.6,6.255V17.306A1.042,1.042,0,0,0,25.646,18.348Z" fill="#4bc9d7" />
                                <circle id="Ellipse_9" data-name="Ellipse 9" cx="1.017" cy="1.017" r="1.017" transform="translate(5.424 18.984)" fill="#4bc9d7" />
                                <circle id="Ellipse_10" data-name="Ellipse 10" cx="1.017" cy="1.017" r="1.017" transform="translate(5.424 9.944)" fill="#4bc9d7" />
                                <circle id="Ellipse_11" data-name="Ellipse 11" cx="1.017" cy="1.017" r="1.017" transform="translate(5.424 14.464)" fill="#4bc9d7" />
                                <ellipse id="Ellipse_12" data-name="Ellipse 12" cx="1.13" cy="1.017" rx="1.13" ry="1.017" transform="translate(9.944 14.464)" fill="#4bc9d7" />
                                <ellipse id="Ellipse_13" data-name="Ellipse 13" cx="1.13" cy="1.017" rx="1.13" ry="1.017" transform="translate(9.944 9.944)" fill="#4bc9d7" />
                                <ellipse id="Ellipse_14" data-name="Ellipse 14" cx="1.13" cy="1.017" rx="1.13" ry="1.017" transform="translate(9.944 18.984)" fill="#4bc9d7" />
                            </g>
                        </svg>
                        <label class="input-label"><?= $footer_pop_up_select_date ?></label>
                        <input hidden class="datepicker-input" id="modal-datepicker" type="text" name="datepicker">
                    </div>
                    <div class="col-md-6 col-input timepicker-wrapper" id="timepicker">
                        <svg id="clock_4_" data-name="clock (4)" xmlns="http://www.w3.org/2000/svg" width="26.667" height="26.667" viewBox="0 0 26.667 26.667">
                            <path id="Path_124" data-name="Path 124" d="M23.861,7.017A1.111,1.111,0,0,0,23.345,8.5a11,11,0,0,1,1.1,4.833A11.111,11.111,0,1,1,13.333,2.222a10.978,10.978,0,0,1,6.9,2.4A1.111,1.111,0,1,0,21.614,2.88a13.335,13.335,0,1,0,5.053,10.453,13.2,13.2,0,0,0-1.322-5.8A1.11,1.11,0,0,0,23.861,7.017Zm0,0" fill="#4bc9d7" />
                            <path id="Path_125" data-name="Path 125" d="M177.111,64A1.112,1.112,0,0,0,176,65.111v7.778A1.112,1.112,0,0,0,177.111,74h5.556a1.111,1.111,0,1,0,0-2.222h-4.445V65.111A1.112,1.112,0,0,0,177.111,64Zm0,0" transform="translate(-163.778 -59.556)" fill="#4bc9d7" />
                        </svg>
                        <label class="input-label"><?= $footer_pop_up_select_time ?></label>

                        <div class="bfh-timepicker open" id="timepicker" data-align="right">
                            <div class="bfh-timepicker-popover">
                                <table class="table">
                                    <tbody>
                                        <tr>
                                            <td class="hour">
                                                <div class="input-group">
                                                    <input type="text" id="modal-hour" class="form-control bfh-number" data-min="0" data-max="23" data-zeros="true" data-wrap="true">
                                                    <span class="input-group-addon bfh-number-btn inc"><span class="glyphicon glyphicon-chevron-up"></span></span>
                                                    <span class="input-group-addon bfh-number-btn dec"><span class="glyphicon glyphicon-chevron-down"></span></span>
                                                </div>
                                            </td>
                                            <td class="separator">:</td>
                                            <td class="minute">
                                                <div class="input-group">
                                                    <input type="text" id="modal-minutes" class="form-control bfh-number" data-min="0" data-max="59" data-zeros="true" data-wrap="true">
                                                    <span class="input-group-addon bfh-number-btn inc">
                                                        <span class="glyphicon glyphicon-chevron-up"></span>
                                                    </span><span class="input-group-addon bfh-number-btn dec">
                                                        <span class="glyphicon glyphicon-chevron-down"></span>
                                                    </span>
                                                </div>
                                            </td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>

                <button type="button" id="changeFooterModal" class="arrow-btn gradient-btn"> <?= $footer_pop_up_button_text ?> <svg xmlns="http://www.w3.org/2000/svg" width="23.079" height="16.228" viewBox="0 0 23.079 16.228">
                        <path id="right-arrow" d="M15.541,4.918a.818.818,0,0,0-1.163,1.151l5.9,5.9H.814A.81.81,0,0,0,0,12.782a.819.819,0,0,0,.814.826H20.276l-5.9,5.887a.835.835,0,0,0,0,1.163.815.815,0,0,0,1.163,0l7.294-7.294a.8.8,0,0,0,0-1.151Z" transform="translate(0 -4.674)" fill="#fff" />
                    </svg>
                </button>

            </form>

        </div>
    </div>

</div>

<!--Second Modal-->
<div class="modal-call modal fade" id="quoteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content" id="modali">
            <h3 class="modal-title"><?= $second_modal_title ?></h3>
            <button type="button" class="close" data-dismiss="modal">
                <svg xmlns="http://www.w3.org/2000/svg" width="28.355" height="28.355" viewBox="0 0 28.355 28.355">
                    <g id="Group_189" data-name="Group 189" transform="translate(-1271.322 -105.323)">
                        <rect id="Rectangle_169" data-name="Rectangle 169" width="4.008" height="36.089" rx="2.004" transform="translate(1271.324 108.159) rotate(-45)" fill="#171a29" />
                        <rect id="Rectangle_170" data-name="Rectangle 170" width="4.012" height="36.089" rx="2.006" transform="translate(1274.159 133.679) rotate(-135)" fill="#171a29" />
                    </g>
                </svg>
            </button>

            <form action="" class="quoteForm">

                <input type="hidden" name="date" id="meeting-date">
                <input type="hidden" name="time" id="meeting-time">
                <input type="hidden" name="site_url" id="site_url" value="<?php echo get_site_url(); ?>">
                <input type="hidden" id="email_sent_text" value="<?= $email_sent_text; ?>">
                <input type="hidden" id="email_not_sent_text" value="<?= $email_not_sent_text; ?>">

                <div class="row">
                    <div class="col-md-6 col-input left">
                        <input type="text" name="first_name" placeholder="<?= $second_modal_first_name_label ?>" required>
                        <input type="text" name="company_name" placeholder="<?= $second_modal_companyname_label ?>" required>
                        <input type="tel" name="phone_number" placeholder="<?= $second_modal_phone_label ?>" required>
                    </div>
                    <div class="col-md-6 col-input right">
                        <input type="text" name="last_name" placeholder="<?= $second_modal_last_name_label ?>" required>
                        <input type="text" name="address" placeholder="<?= $second_modal_address_label ?>" required>
                        <input type="email" name="email" placeholder="<?= $second_modal_email_label ?>" required>
                    </div>
                    <div class="col-md-12">
                        <input type="text" name="note" placeholder="<?= $second_modal_note_label ?>" required>
                        <span><?= $second_modal_style_label ?></span><br /><br />

                        <?php
                        foreach ($second_modal_style_gallery as $modalImage) {
                        ?>
                            <label>
                                <input type="radio" name="image" value="<?= $modalImage['url'] ?>" class="radiobtn">
                                <img src="<?= $modalImage['url'] ?>">
                            </label>
                        <?php
                        }
                        ?>

                        <input type="url" name="url" placeholder="<?= $second_modal_url_label ?>">
                    </div>

                </div>
                <div class="btn-wrapper" style="position: relative; width: 135px;">
                    <button class="arrow-btn modal-button" > <?= $second_modal_submit_label ?>
                        <svg xmlns="http://www.w3.org/2000/svg" width="23.079" height="16.228" viewBox="0 0 23.079 16.228">
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
            </form>

        </div>
    </div>
</div>

<?php
wp_footer();
?>
<script>
    var emailSentText = '<?php echo $email_sent_label; ?>';
    var emailNotSentText = '<?php echo $email_not_sent_label; ?>';
    var siteURL = '<?php echo get_site_url(); ?>';


    jQuery(function() {
        sendEmail(siteURL, emailSentText, emailNotSentText);
    });
</script>

</html>