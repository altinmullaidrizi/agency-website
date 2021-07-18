<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>

    <link rel="apple-touch-icon" sizes="180x180" href="<?= get_template_directory_uri() ?>/images/favico/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?= get_template_directory_uri() ?>/images/favico/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?= get_template_directory_uri() ?>/images/favico/favicon-16x16.png">
    <link rel="manifest" href="<?= get_template_directory_uri() ?>/images/favico/site.webmanifest">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="theme-color" content="#ffffff">
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">
    <meta name="robots" content="index,follow" />
    <title><?php
            global $page, $paged;
            wp_title('|', true, 'right');
            // Add the blog name.
            bloginfo('name');
            //Add the blog description for the home/fron page.
            $site_description = get_bloginfo('description', 'display');
            if ($site_description && (is_home() || is_front_page()))
                echo " | $site_description";
            ?>
    </title>
    
    <?php wp_head(); 

    $logo = get_field('site_logo', 'options');
    $contact_us_menu = get_field('contact_us_menu', 'options');

    ?>
</head>

<body <?php body_class(); ?>>
    <div id="loader-wrapper">
        <div class="loader-wrapper-logo loader-wrapper-child">
            <div class="container">

                <div class="loader-logo">

                    <svg class="easyweb-svg" id="Group_194" data-name="Group 194" xmlns="http://www.w3.org/2000/svg" width="139.97" height="34.233" viewBox="0 0 139.97 34.233">
                        <path id="Path_281" data-name="Path 281" d="M834.907,511.607a7.943,7.943,0,0,1-.071,1.183H819.41a6.374,6.374,0,0,0,2,4.057,5.972,5.972,0,0,0,4.2,1.55,6.12,6.12,0,0,0,3.325-.906,5.982,5.982,0,0,0,2.212-2.437h3.134a9.022,9.022,0,0,1-8.672,6.025,8.828,8.828,0,0,1-6.6-2.7,10.194,10.194,0,0,1,0-13.668,9.374,9.374,0,0,1,13.233.035A9.469,9.469,0,0,1,834.907,511.607Zm-3.065-1.08a6.371,6.371,0,0,0-1.95-4.213,6.479,6.479,0,0,0-8.532,0,6.5,6.5,0,0,0-1.985,4.213Z" transform="translate(-816.38 -494.473)" fill="#fff" />
                        <path id="Path_282" data-name="Path 282" d="M901.068,515.708q0,2.717,2.09,2.717v2.4a.775.775,0,0,0-.349,0,2.86,2.86,0,0,1-.87-.088,9.9,9.9,0,0,1-1.115-.313,3.018,3.018,0,0,1-1.1-.713,3.48,3.48,0,0,1-.818-1.22,5.908,5.908,0,0,1-2.7,1.985,9.427,9.427,0,0,1-3.673.8,7.872,7.872,0,0,1-5.207-1.515,4.926,4.926,0,0,1-1.793-3.953,4.678,4.678,0,0,1,1.636-3.6q1.638-1.479,5.642-2.107a16.556,16.556,0,0,1,2.02-.226q1.322-.088,2.263-.123h.976V508.6a4.084,4.084,0,0,0-.959-2.576,3.984,3.984,0,0,0-3.22-1.114q-3.483,0-4.388,2.821l-2.925-.766q1.741-4.737,7.313-4.737,3.69,0,5.432,1.916a6.692,6.692,0,0,1,1.741,4.666Zm-2.96-3.621-4.284.278a10.485,10.485,0,0,0-2.786.558q-2.4.8-2.4,2.75a2.461,2.461,0,0,0,1.445,2.386,6.4,6.4,0,0,0,6.635-.853q1.393-1.253,1.392-1.985Z" transform="translate(-865.268 -494.64)" fill="#fff" />
                        <path id="Path_283" data-name="Path 283" d="M961.1,507.741q-.662-3.17-4.248-3.169a3.952,3.952,0,0,0-2.995.94,2.826,2.826,0,0,0-.871,1.916,1.8,1.8,0,0,0,1.062,1.654,13.287,13.287,0,0,0,3.291,1.062q1.289.278,1.95.453a15.445,15.445,0,0,1,1.742.609,5.316,5.316,0,0,1,1.62.94,4.757,4.757,0,0,1,.974,1.393,4.577,4.577,0,0,1,.436,2.038,4.851,4.851,0,0,1-1.864,4.039,7.812,7.812,0,0,1-4.963,1.463,7.664,7.664,0,0,1-5.276-1.689,6.13,6.13,0,0,1-2.142-4.058h2.925A3.947,3.947,0,0,0,954,517.544a4.451,4.451,0,0,0,3.17.993,5.186,5.186,0,0,0,2.89-.748,2.47,2.47,0,0,0,1.149-2.211,1.965,1.965,0,0,0-.976-1.829,13.719,13.719,0,0,0-3.342-1.167,19,19,0,0,1-5.329-1.9,3.523,3.523,0,0,1-1.567-3.22,5.36,5.36,0,0,1,.314-1.794,5.509,5.509,0,0,1,1.044-1.741,5.224,5.224,0,0,1,2.107-1.394,8.913,8.913,0,0,1,3.256-.539,7.371,7.371,0,0,1,5.241,1.689,6.305,6.305,0,0,1,2.037,4.057Z" transform="translate(-910.709 -494.473)" fill="#fff" />
                        <path id="Path_284" data-name="Path 284" d="M1015.424,503.541q-1.461,4.075-4.84,13.129t-4.841,13.129h-2.995l3.482-9.612-6.72-16.646h3.447q.731,1.949,4.318,11.491a.342.342,0,0,0,.365.227.4.4,0,0,0,.366-.261l4.11-11.457Z" transform="translate(-945.838 -495.566)" fill="#fff" />
                        <path id="Path_285" data-name="Path 285" d="M1095.485,503.657l-8.81,18.179h-4.528l-2.437-12.328-5.955,12.328h-4.528l-3.726-18.179h4.423l2.472,12.293,5.989-12.293h4.075l2.473,12.259,5.989-12.259Z" transform="translate(-993.489 -495.648)" fill="#fff" />
                        <path id="Path_286" data-name="Path 286" d="M1181.648,511.885q-.245,1.428-.279,1.6l-13.894-.035q.451,3.552,3.9,3.552a5.438,5.438,0,0,0,4.352-2.089l4.877.209a10.942,10.942,0,0,1-3.884,4.353,9.928,9.928,0,0,1-5.484,1.6,7.773,7.773,0,0,1-6.339-2.786,8.684,8.684,0,0,1-1.705-7.035,10.55,10.55,0,0,1,3.481-6.651,9.888,9.888,0,0,1,6.791-2.612,7.876,7.876,0,0,1,6.425,2.856A8.664,8.664,0,0,1,1181.648,511.885Zm-4.354-2.054a4.027,4.027,0,0,0-1.114-2.786,3.893,3.893,0,0,0-2.821-.975,5.346,5.346,0,0,0-3.325,1.1,6.019,6.019,0,0,0-2.073,2.942Z" transform="translate(-1062.462 -494.473)" fill="#fff" />
                        <path id="Path_287" data-name="Path 287" d="M1243.693,483.92a6.8,6.8,0,0,1,5.851,2.769,9.309,9.309,0,0,1,1.428,7.018,11.448,11.448,0,0,1-3.2,6.7A8.659,8.659,0,0,1,1241.43,503a6.012,6.012,0,0,1-4.737-2.054l-.278,1.567h-4.493l3.657-26.188h4.492l-1.393,9.507A7.415,7.415,0,0,1,1243.693,483.92Zm-2.75,14.975a4.9,4.9,0,0,0,3.726-1.55,7.473,7.473,0,0,0,1.846-4.161,5.431,5.431,0,0,0-.558-3.814,3.354,3.354,0,0,0-3.03-1.376,4.968,4.968,0,0,0-3.76,1.533,7.373,7.373,0,0,0-1.846,4.144,5.431,5.431,0,0,0,.574,3.83A3.383,3.383,0,0,0,1240.942,498.9Z" transform="translate(-1111.135 -476.329)" fill="#fff" />
                    </svg>


                </div>
            </div>
        </div>
        <div class="rocket-wrapper loader-wrapper-child">
            <div class="container">

                <div class="rocket-in">
                    <svg class="rocketsvg" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="40.353" height="39.306" viewBox="0 0 40.353 39.306">
                        <defs>
                            <linearGradient id="linear-gradient" y1="0.5" x2="1" y2="0.5" gradientUnits="objectBoundingBox">
                                <stop offset="0" stop-color="#4c79e0" />
                                <stop offset="1" stop-color="#34d1d5" />
                            </linearGradient>
                        </defs>
                        <g id="Group_196" data-name="Group 196" transform="translate(88.517 2613.729)">
                            <path id="Path_296" data-name="Path 296" d="M696.246,480.917c-7.844-.2-13.756,1.176-20.841,8.491a11.551,11.551,0,0,0-9.181,3.178l-.809.729,6.7,4.809.29,1.154a7.859,7.859,0,0,0,5.355,5.608l1.114.336,4.483,6.895.756-.731a11.74,11.74,0,0,0,3.565-9.03c7.605-6.773,9.254-12.647,9.4-20.518l.017-.9Zm-9.387,13.572a3.976,3.976,0,0,1-3.7-4.147,3.935,3.935,0,0,1,4.151-3.694,3.976,3.976,0,0,1,3.7,4.146A3.9,3.9,0,0,1,686.858,494.489Z" transform="translate(-745.258 -3094.628)" fill-rule="evenodd" fill="url(#linear-gradient)" />
                        </g>
                    </svg>

                    <div id="smoke">
                        <span class="s0"></span>
                        <span class="s1"></span>
                        <span class="s2"></span>
                        <span class="s3"></span>
                        <span class="s4"></span>
                        <span class="s5"></span>
                        <span class="s6"></span>
                        <span class="s7"></span>
                        <span class="s8"></span>
                        <span class="s9"></span>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <header>
        <div class="container">
            <nav class="navbar navbar-expand-lg" id="top">
                <div>
                    <a class="navbar__logo" href="<?= get_home_url(); ?>">
                        <?php if ($logo) { ?>

                            <img src="<?= $logo['url'] ?>" alt="<?= $logo['alt'] ?>">

                        <?php } ?>
                    </a>
                </div>
                <button class="navbar-toggler" type="button">
                    <span class="navbar-toggler-icon">
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                </button>
                <div class="navbar-collapse">
                    <ul class="navbar-nav">
                        <?php
                        echo wp_nav_menu_no_ul();
                        ?>
                    </ul>
                    <a href="<?= $contact_us_menu['url'] ?>" class="menu-link">
                        <?= $contact_us_menu['title'] ?>
                    </a>
                </div>
            </nav>
        </div>
    </header>