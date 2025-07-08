<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <meta property='og:type' content='website'>
    <meta property='og:title' content='株式会社グロウアーツ｜内装仕上工事・内装デザインは大阪市淀川区のグロウアーツへ'>
    <meta property='og:url' content=''>
    <meta property='og:description' content='大阪市淀川区を拠点とするグロウアーツは、マンションやオフィス、公共施設などの仕上げ工事や内装デザインを行っております。'>
    <meta property="og:image" content="img/ogp.png">
    <meta name='keywords' content='内装仕上工事,軽鉄工事,公共施設,大阪市淀川区,グロウアーツ'>
    <meta name="description" content="大阪市淀川区を拠点とするグロウアーツは、マンションやオフィス、公共施設などの仕上げ工事や内装デザインを行っております。" /> -->
    <!-- <meta name="robots" content="noindex,nofollow" /> -->
    <title>TOA INDUSTRIES 2026 RECRUIT</title>
    <!-- <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico" /> -->

    <!-- <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Allison&family=Barlow:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&family=Oswald:wght@200..700&family=Yuji+Syuku&display=swap" rel="stylesheet"> -->
    <!-- <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendors/reset.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/vendors/swiper-bundle.min.css">
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css?<?php echo date('YmdHis'); ?>"> -->

    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
    <!-- <?php if (is_front_page()) : ?>
        <div class="p-loading">
        </div>
    <?php endif; ?> -->


    <div class="l-global-container <?php echo is_front_page() ? 'is-hidden' : ''; ?>">
        <header id="js-header" class="l-header">
            <div class="l-header__inner">
                <h1 class="l-header__title">
                    <a href="<?php echo home_url(); ?>">
                        <img src="<?php echo theme_url('images/'); ?>" alt="TOA INDUSTRIES 2026 RECRUIT" />
                    </a>
                </h1>
                <div class="l-header__wrapper u-pc-tb-only">
                    <nav class="l-header__nav">
                        <ul class="l-header__list">
                            <li class="l-header__item">
                                <a href="<?php echo home_url(''); ?>">INTERVIEW</a>
                            </li>
                            <li class="l-header__item">
                                <a href="<?php echo home_url(''); ?>">10_NOT</a>
                            </li>
                            <li class="l-header__item">
                                <a href="<?php echo home_url(''); ?>">MESSAGE</a>
                            </li>
                            <li class="l-header__item">
                                <a href="<?php echo home_url(''); ?>">FAQ</a>
                            </li>
                            <li class="l-header__item">
                                <a href="<?php echo home_url(''); ?>">DATE</a>
                            </li>
                            <li class="l-header__item">
                                <a href="<?php echo home_url(''); ?>">GUIDELINE</a>
                            </li>
                            <li class="l-header__item">
                                <a href="<?php echo home_url(''); ?>">NEWS</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <button class="l-header__hamburger js-hamburger u-tb-sp-only">
                    <span></span>
                    <span></span>
                    <span></span>
                </button>

                <div class="l-mobile-menu js-mobile-menu u-tb-sp-only">
                    <div class="l-mobile-menu__wrapper">
                        <nav class="l-mobile-menu__nav">
                            <ul class="l-mobile-menu__list">
                                <li class="l-mobile-menu__item">
                                    <a href="<?php echo home_url(''); ?>"> INTERVIEW </a>
                                </li>
                                <li class="l-mobile-menu__item">
                                    <a href="<?php echo home_url(''); ?>"> 10_NOT </a>
                                </li>
                                <li class="l-mobile-menu__item">
                                    <a href="<?php echo home_url(''); ?>"> MESSAGE </a>
                                </li>
                                <li class="l-mobile-menu__item">
                                    <a href="<?php echo home_url(''); ?>"> FAQ </a>
                                </li>
                                <li class="l-mobile-menu__item">
                                    <a href="<?php echo home_url(''); ?>"> DATE </a>
                                </li>
                                <li class="l-mobile-menu__item">
                                    <a href="<?php echo home_url(''); ?>"> GUIDELINE </a>
                                </li>
                                <li class="l-mobile-menu__item">
                                    <a href="<?php echo home_url(''); ?>"> NEWS </a>
                                </li>
                            </ul>
                        </nav>
                        <div class="l-mobile-menu__slogan">
                            <img src="" alt="あなたはそんなもんじゃない">
                        </div>
                        <div class="l-mobile-menu__icon">
                            <img src="" alt="TOA">
                        </div>
                        <div class="l-mobile-menu__copyright">
                            <p>
                                Copyright© TOA INDUSTRIES CO.,LTD. All Rights Reserved.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <!-- /.l-header -->
