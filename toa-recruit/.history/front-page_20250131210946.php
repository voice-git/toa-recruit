<?php get_header(); ?>
<main>
    <section id="js-mv" class="p-mv">
        <div id="js-slide1" class="p-mv__slide p-mv__slide--first js-mvSlide">
            <div class="p-mv__label">
                <img class="u-pc-only" src="<?php echo theme_url('images/top/mv-label-pc.svg'); ?>" alt="ふつうのサラリーマン">
                <p class="u-sp-only">組織の歯車</p>
                <picture class="p-mv__bar">
                    <source
                        srcset="<?php echo theme_url('images/top/not-bar-fv-sp.svg'); ?>"
                        media="(max-width: 768px)" />
                    <img src="<?php echo theme_url('images/top/not-bar-fv.svg'); ?>" alt="not">
                </picture>
            </div>
            <div class="p-mv__slogan">
                <picture>
                    <source
                        srcset="<?php echo theme_url('images/top/mv-slogan-sp.svg'); ?>"
                        media="(max-width: 576px)" />
                    <img src="<?php echo theme_url('images/top/mv-slogan-pc.svg'); ?>" alt="そんなもんじゃない">
                </picture>
            </div>
        </div>
        <div id="js-slide2" class="p-mv__slide p-mv__slide--second js-mvSlide">
            <div class="p-mv__label">
                <img class="u-pc-only" src="<?php echo theme_url('images/top/mv-label-pc02.svg'); ?>" alt="ふつうのサラリーマン">
                <p class="u-sp-only">ふつうのサラリーマン</p>
                <picture class="p-mv__bar">
                    <source
                        srcset="<?php echo theme_url('images/top/not-bar-fv-sp.svg'); ?>"
                        media="(max-width: 768px)" />
                    <img src="<?php echo theme_url('images/top/not-bar-fv.svg'); ?>" alt="not">
                </picture>
            </div>
            <div class="p-mv__slogan">
                <picture>
                    <source
                        srcset="<?php echo theme_url('images/top/mv-slogan-sp.svg'); ?>"
                        media="(max-width: 576px)" />
                    <img src="<?php echo theme_url('images/top/mv-slogan-pc.svg'); ?>" alt="そんなもんじゃない">
                </picture>
            </div>
        </div>
    </section>
    <!-- /.p-mv -->

    <section id="js-about" class="p-about">
        <div class="p-about__inner c-inner">
            <div class="p-about__slogan  -0ms">
                <picture>
                    <source
                        srcset="<?php echo theme_url('images/top/about-slogan-sp.svg'); ?>"
                        media="(max-width: 576px)" />
                    <img src="<?php echo theme_url('images/top/about-slogan-pc.svg'); ?>" alt="あなたはそんなもんじゃない">
                </picture>
            </div>
            <div class="p-about__text  -0ms">
                <img class="u-pc-only" src="<?php echo theme_url('images/top/about-text-pc.svg'); ?>" alt="あなたの力はそんなもんじゃない。「わたしはこんなもんだ」と思っていたとしても、わたしたちは信じない。あなたはすごい。">
                <p class="u-sp-only">
                    あなたの力はそんなもんじゃない。<br>
                    「わたしはこんなもんだ」と思っていたとしても、<br>
                    わたしたちは信じない。あなたはすごい。<br>
                    あなたは想像以上の何かを持っている。<br>
                    自分の可能性にふたをしないで、<br>
                    「共に育つ」をコンセプトにした教育制度、<br>
                    立場を超えて意見を言い合える社風。<br>
                    TOAなら、あなたの力を引き出せる。<br>
                    TOAなら、あなたの知らないあなたに逢える。
                </p>
            </div>
            <div class="p-about__gif">
                <img src="<?php echo theme_url('images/top/toa.gif'); ?>" alt="">
            </div>
            <div class="p-about__bottomText">
                <picture>
                    <source
                        srcset="<?php echo theme_url('images/top/message-end-sp.svg'); ?>"
                        media="(max-width: 576px)" />
                    <img src="<?php echo theme_url('images/top/message-end-pc.svg'); ?>" alt="TOAと、まだ見たことのないあなたへ。">
                </picture>
            </div>
            <div class="p-about__logo">
                <img src="<?php echo theme_url('images/common/logo-pc.svg'); ?>" alt="TOA">
            </div>
        </div>
    </section>
    <!-- /.p-about -->

    <section class="p-news">
        <div class="p-news__title c-title">
            <div class="c-title__bar js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
            <h2>TOA News</h2>
            <div class="c-title__bar js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
        </div>
        <div class="p-news__inner c-inner">
            <div class="swiper-container u-tb-sp-only">
                <div class="swiper">
                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'posts_per_page' => 4,
                        'orderby' => 'date',
                        'order' => 'DESC'
                    );

                    $news_query = new WP_Query($args);

                    if ($news_query->have_posts()) :
                        echo '<div class="p-news__list swiper-wrapper">';
                        while ($news_query->have_posts()) : $news_query->the_post(); ?>
                            <div class="p-news__item swiper-slide">
                                <a class="c-banner" href="<?php the_permalink(); ?>">
                                    <div class="p-news__image">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php endif; ?>
                                    </div>
                                    <div class="p-news__info">
                                        <time class="p-news__date" datetime="<?php the_time('Y-m-d'); ?>">
                                            <?php the_time('Y.m.d'); ?>
                                        </time>
                                        <div class="p-news__itemTitle">
                                            <?php the_title(); ?>
                                        </div>
                                    </div>
                                </a>
                            </div>
                    <?php
                        endwhile;
                        echo '</div>';
                        wp_reset_postdata();
                    else :
                        echo '<p>TOA NEWSはありません。</p>';
                    endif;
                    ?>
                </div>
            </div>
            <div class="p-news__container u-pc-tb-only">
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 3,
                    'orderby' => 'date',
                    'order' => 'DESC'
                );

                $news_query = new WP_Query($args);

                if ($news_query->have_posts()) :
                    echo '<ul class="p-news__list">';
                    while ($news_query->have_posts()) : $news_query->the_post(); ?>
                        <li class="p-news__item">
                            <a class="c-banner" href="<?php the_permalink(); ?>">
                                <div class="p-news__image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php endif; ?>
                                </div>
                                <div class="p-news__info">
                                    <time class="p-news__date" datetime="<?php the_time('Y-m-d'); ?>">
                                        <?php the_time('Y.m.d'); ?>
                                    </time>
                                    <div class="p-news__itemTitle">
                                        <?php the_title(); ?>
                                    </div>
                                </div>
                            </a>
                        </li>
                <?php
                    endwhile;
                    echo '</ul>';
                    wp_reset_postdata();
                else :
                    echo '<p>TOA NEWSはありません。</p>';
                endif;
                ?>
            </div>

            <div class="p-news__button c-button">
                <a href="<?php echo home_url('news'); ?>">
                    <span>READ MORE</span>
                    <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="#15327e" />
                    </svg>
                </a>
            </div>
    </section>
    <!-- /.p-news -->

    <div class="js-pinWrapper">

    <section class="p-staff">
        <div class="p-staff__title c-title ">
            <div class="c-title__bar js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
            <h2>Staff Interview</h2>
            <div class="c-title__bar js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
        </div>
        <div class="p-staff__inner c-inner">
            <div class="p-staff__slogan">
                <p>予想していた自分を大きく超えてしまった</p>
                <picture>
                    <source
                        srcset="<?php echo theme_url('images/top/staff-slogan-sp.svg'); ?>"
                        media="(max-width: 768px)" />
                    <img src="<?php echo theme_url('images/top/staff-slogan-pc.svg'); ?>" alt="そんなもんじゃなかった社員たち">
                </picture>
            </div>
        </div>
        <div class="p-staff__employees js-wrapper">
            <div class="p-staff__employeesImages js-images">
                <div class="p-staff__employeesImage p-staff__employeesImage--first js-image">
                    <div class="p-staff__pin p-staff__pin--first js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p class="js-slideIn">型にはまる</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not" src="<?php echo theme_url('images/top/not_bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--second js-image">
                    <div class="p-staff__pin p-staff__pin--second js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p class="js-slideIn">働くイメージがない</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not" src="<?php echo theme_url('images/top/not_bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--third js-image">
                    <div class="p-staff__pin p-staff__pin--third js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p class="js-slideIn">8時間デスクワーク</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not" src="<?php echo theme_url('images/top/not_bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--fourth js-image">
                    <div class="p-staff__pin p-staff__pin--fourth js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p class="js-slideIn">替えの効く仕事</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not" src="<?php echo theme_url('images/top/not_bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--fifth js-image">
                    <div class="p-staff__pin p-staff__pin--fifth js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p class="js-slideIn">根性だけの営業</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not" src="<?php echo theme_url('images/top/not_bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--sixth js-image">
                    <div class="p-staff__pin p-staff__pin--sixth js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p class="js-slideIn">汚れる作業着</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not" src="<?php echo theme_url('images/top/not_bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--seventh js-image">
                    <div class="p-staff__pin p-staff__pin--seventh js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p class="js-slideIn">何も分からない</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not" src="<?php echo theme_url('images/top/not_bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--eighth js-image">
                    <div class="p-staff__pin p-staff__pin--eighth js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p class="js-slideIn">過酷な自動車業界人</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not" src="<?php echo theme_url('images/top/not_bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--ninth js-image">
                    <div class="p-staff__pin p-staff__pin--ninth js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p class="js-slideIn">お茶出し</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not" src="<?php echo theme_url('images/top/not_bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-staff__employeesContents js-contents">
                <div class="p-staff__employeesContent p-staff__employeesContent--first js-content">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img class="u-pc-only" src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <p class="u-sp-only">そんなもんじゃなかった</p>
                            <span>01</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>クオリティの<br>管理者</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>生産部 世良田工場　二村 竜矢</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('interview'); ?>">
                                <svg width="79" height="16" viewBox="0 0 79 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.0148 10.2629C23.5124 11.2209 22.5804 13.0071 21.3313 13.0071C21.0541 13.0071 20.8064 12.9603 20.8064 12.3851C20.8064 12.3176 20.8116 11.9555 20.8982 11.4167L20.9017 11.3976C21.139 9.95627 21.1754 9.73452 21.1754 9.25811C21.1754 8.36072 20.6955 7.31434 19.3442 7.31434C18.4936 7.31434 17.6343 7.7128 16.7993 8.23079C17.5338 6.54168 18.5664 4.55634 19.3806 3.13229L19.5625 2.81526L17.591 1.74463L17.1631 2.82046C16.8495 3.61044 16.678 4.04527 16.4511 4.56153C16.0474 5.5005 14.5073 8.96187 13.383 11.4895C12.8511 12.6866 12.4007 13.6966 12.1876 14.1799L12.0352 14.5229L13.875 15.228L14.0101 14.9144C15.2315 12.0819 15.5208 11.4513 16.4112 10.5609C16.7317 10.2404 17.8474 9.19574 18.7985 9.19574C19.1329 9.19574 19.3078 9.41229 19.3078 9.62365C19.3044 9.73106 19.2039 10.3218 19.1519 10.5799C19.022 11.4046 18.9544 12.1183 18.9544 12.399C18.9544 13.9044 19.8154 14.8399 21.2031 14.8399C21.8545 14.8399 22.5111 14.6217 23.211 14.173C24.337 13.4332 24.8862 12.5566 25.3695 11.7822L25.5081 11.5605L24.2937 9.72759L24.0131 10.2629H24.0148Z" fill="white" />
                                    <path d="M35.0439 5.69637L35.2969 5.65653L35.6468 3.60708L35.0873 3.78552C34.7616 3.88946 34.4255 3.99687 33.3687 4.17358C33.5212 3.75434 33.6355 3.40959 33.9473 2.4377L34.0391 2.15185L32.1318 1.15918L32.0538 1.64772C31.8667 2.81017 31.5583 3.80111 31.34 4.46463C31.1616 4.47502 31.0057 4.47502 30.7216 4.47502C29.6717 4.47502 29.256 4.38667 28.8575 4.27926L28.388 4.15279L28.4694 6.0775L28.7865 6.11735C29.0446 6.15026 29.4327 6.19877 30.1603 6.19877C30.2417 6.19877 30.4305 6.19011 30.732 6.17452C30.7493 6.17452 30.7666 6.17279 30.7857 6.17105C29.4188 9.62029 28.485 10.826 27.8579 11.6368L27.5703 12.0076L29.5123 12.7993L29.6665 12.5273C30.9243 10.3254 31.8996 8.00222 32.6896 5.99261C33.5333 5.8956 34.5658 5.76913 35.0405 5.69464L35.0439 5.69637Z" fill="white" />
                                    <path d="M36.7013 11.7199C36.665 11.3041 36.632 10.9368 36.6026 10.6163C36.5212 9.71548 36.4675 9.11953 36.4675 8.95149C36.4675 8.47507 36.587 8.31049 37.0634 7.90857L37.3856 7.63659L35.9893 6.45508L35.7572 6.6699C35.0936 7.28664 34.5843 7.83581 34.5843 8.82329C34.5843 9.02252 34.6502 9.71375 34.7454 10.6683C34.7662 10.8745 34.7853 11.0737 34.8026 11.2469C34.4076 11.1794 33.9537 11.1118 33.531 11.1118C31.6427 11.1118 30.624 12.2292 30.624 13.2808C30.624 14.4969 31.8488 15.7547 33.9 15.7547C35.9512 15.7547 36.3878 14.4571 36.587 13.5701C37.2401 13.8715 37.6472 14.076 38.2692 14.4519L38.6382 14.6754L39.3155 12.8529L39.0332 12.7091C38.4719 12.4215 37.94 12.1478 36.7031 11.7216L36.7013 11.7199ZM34.8407 13.1855C34.8407 13.9859 34.1322 14.0482 33.9139 14.0482C33.1811 14.0482 32.3304 13.7278 32.3304 13.3137C32.3304 13.0989 32.7237 12.7888 33.434 12.7888C33.9191 12.7888 34.4215 12.8893 34.8407 12.9776V13.1855Z" fill="white" />
                                    <path d="M51.9793 9.5959C52.2479 10.0688 52.454 10.6319 52.454 11.2781C52.454 12.8303 51.1668 14.0014 49.4587 14.0014C47.7505 14.0014 47.0731 12.8113 47.0731 11.6956C47.0731 11.3682 47.1095 10.9385 47.1563 10.5747C47.7401 10.5661 48.8489 10.5227 50.2885 10.2837L50.5432 10.2404L50.8758 8.04192L50.3318 8.2117C49.8207 8.37108 48.906 8.6552 47.3798 8.72623C47.385 8.70024 47.3884 8.67252 47.3936 8.64654C47.4716 8.17012 47.5513 7.67812 47.7245 6.72702C48.2616 6.69411 48.9078 6.63001 50.408 6.35282L50.6783 6.30258L50.8377 4.23581L50.3231 4.41425C49.7428 4.61694 49.1312 4.80578 48.1195 4.90452C48.3239 3.85988 48.5266 3.01273 48.7986 2.33362L48.9441 1.97155L46.4356 1.22314L46.4443 1.70995C46.4581 2.50686 46.3542 3.18077 46.0995 4.80578L46.0839 4.90972C45.5538 4.85602 44.8349 4.74687 43.688 4.37787L43.2358 4.23235L43.1839 6.07564L43.4108 6.16919C44.057 6.43771 44.6478 6.60922 45.7704 6.7097C45.6889 7.25714 45.5521 8.10256 45.4585 8.67252C44.7898 8.62402 44.1488 8.49409 43.5858 8.29313L43.1094 8.12335V10.1849L43.487 10.2629C43.8838 10.346 44.3273 10.4379 45.2021 10.5123C45.1779 10.8346 45.1467 11.259 45.1467 11.6592C45.1467 11.9953 45.2021 13.1733 45.9142 14.2318C46.8358 15.597 48.4937 15.7997 49.4015 15.7997C52.1976 15.7997 54.4723 13.7624 54.4723 11.2573C54.4723 10.1468 54.0652 9.21304 53.613 8.50795L51.9845 9.5907L51.9793 9.5959Z" fill="white" />
                                    <path d="M68.1955 10.2629C67.6931 11.2209 66.761 13.0071 65.512 13.0071C65.2348 13.0071 64.987 12.9603 64.987 12.3851C64.987 12.3176 64.9922 11.9555 65.0789 11.4167L65.0823 11.3976C65.3197 9.95627 65.356 9.73452 65.356 9.25811C65.356 8.36072 64.8762 7.31434 63.5249 7.31434C62.6743 7.31434 61.815 7.7128 60.98 8.23079C61.7145 6.54168 62.747 4.55634 63.5613 3.13229L63.7432 2.81526L61.7717 1.74463L61.3438 2.82046C61.0302 3.61044 60.8587 4.04527 60.6317 4.56153C60.2281 5.5005 58.688 8.96187 57.5636 11.4895C57.0318 12.6866 56.5814 13.6966 56.3683 14.1799L56.2158 14.5229L58.0556 15.228L58.1908 14.9144C59.4121 12.0819 59.7014 11.4513 60.5919 10.5609C60.9124 10.2404 62.0298 9.19747 62.9792 9.19747C63.3135 9.19747 63.4885 9.41403 63.4885 9.62538C63.485 9.73279 63.3846 10.3235 63.3326 10.5817C63.2026 11.4063 63.1351 12.1201 63.1351 12.4007C63.1351 13.9062 63.9961 14.8417 65.3838 14.8417C66.0351 14.8417 66.6917 14.6234 67.3916 14.1747C68.5177 13.435 69.0669 12.5584 69.5502 11.784L69.6888 11.5622L68.4744 9.72933L68.1937 10.2646L68.1955 10.2629Z" fill="white" />
                                    <path d="M36.9431 4.25999L36.7127 4.18896L36.1289 5.57663L36.3818 5.67884C38.1472 6.3874 38.5162 6.54332 39.6873 7.25707L39.9402 7.41125L40.6713 5.8798L40.4582 5.7568C39.4413 5.16778 38.2598 4.66538 36.9449 4.26346L36.9431 4.25999Z" fill="white" />
                                    <path d="M9.76846 0.211355L9.58828 0L8.34961 0.807305L8.59041 1.08969C8.98194 1.55051 9.51899 2.28505 9.84641 2.97109L10.0058 3.30545L11.2687 2.42018L11.118 2.16032C10.8668 1.72895 10.3575 0.90432 9.76846 0.211355Z" fill="white" />
                                    <path d="M2.74241 9.36692C3.97935 8.29109 6.55545 7.10785 9.9943 6.03202L10.2663 5.94713L9.87649 3.85091L9.49536 4.04148C9.12636 4.22511 7.78893 4.82106 6.71484 5.29748C6.07904 5.57986 5.51774 5.82933 5.19724 5.97485C4.64287 5.6994 4.41765 5.24897 4.24788 3.59798C4.23402 3.46112 4.21843 3.07306 4.19937 2.66248C4.17338 2.0544 4.14567 1.42553 4.11622 1.19685L4.0781 0.902344L1.88313 1.01842L1.9559 1.38222C2.09622 2.08731 2.15512 2.4234 2.16378 2.51522L2.19324 2.73524C2.49987 5.06187 2.58303 5.69593 3.43538 6.80641C2.18457 7.463 0 8.80388 0 11.3055C0 12.8421 0.786516 13.542 1.08969 13.8106C1.69777 14.3511 2.27293 14.8621 4.72776 14.8621C6.97643 14.8621 8.66034 14.6352 9.77428 14.4845L10.171 14.4308V12.3449L9.77601 12.4385C9.01548 12.6204 8.63781 12.6966 7.90674 12.7902C6.34756 12.9877 4.67752 13.031 4.43498 13.031C2.82557 13.031 1.8277 12.7122 1.8277 11.1236C1.8277 10.493 2.15859 9.85373 2.74241 9.36519V9.36692Z" fill="white" />
                                    <path d="M8.07603 3.74572L8.23888 4.06102L9.47582 3.25199L9.3303 2.99039C8.98382 2.36846 8.51607 1.57847 7.97036 0.97906L7.78672 0.776367L6.58789 1.56115L7.00194 2.13631C7.76593 3.19655 7.86295 3.33168 8.07603 3.74399V3.74572Z" fill="white" />
                                    <path d="M75.5228 12.6831H73.0264V15.1622H75.5228V12.6831Z" fill="white" />
                                    <path d="M74.4864 1.22314C71.8479 1.22314 70.3771 2.6905 70.1138 5.58363L70.0791 5.96303H72.4768L72.5028 5.62348C72.5946 4.41945 72.825 3.24487 74.4846 3.24487C76.1443 3.24487 76.2915 4.50607 76.2915 4.8924C76.2915 5.32723 76.1893 5.92492 75.389 6.7097C74.1468 7.93452 73.1663 8.9012 73.1663 10.4708V11.7025H75.0321L75.3768 11.6956L75.3803 11.3508C75.3976 9.89041 75.3976 9.80379 76.5323 8.66906C78.1712 7.0302 78.6476 6.34763 78.6476 4.97902C78.6476 2.73208 76.9758 1.22314 74.4864 1.22314Z" fill="white" />
                                </svg>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--second js-content">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img class="u-pc-only" src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <p class="u-sp-only">そんなもんじゃなかった</p>
                            <span>02</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>自社ブランドの<br>アンバサダー</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>住宅事業部 商品開発部　中村 咲紀</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('interview'); ?>">
                                <svg width="79" height="16" viewBox="0 0 79 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.0148 10.2629C23.5124 11.2209 22.5804 13.0071 21.3313 13.0071C21.0541 13.0071 20.8064 12.9603 20.8064 12.3851C20.8064 12.3176 20.8116 11.9555 20.8982 11.4167L20.9017 11.3976C21.139 9.95627 21.1754 9.73452 21.1754 9.25811C21.1754 8.36072 20.6955 7.31434 19.3442 7.31434C18.4936 7.31434 17.6343 7.7128 16.7993 8.23079C17.5338 6.54168 18.5664 4.55634 19.3806 3.13229L19.5625 2.81526L17.591 1.74463L17.1631 2.82046C16.8495 3.61044 16.678 4.04527 16.4511 4.56153C16.0474 5.5005 14.5073 8.96187 13.383 11.4895C12.8511 12.6866 12.4007 13.6966 12.1876 14.1799L12.0352 14.5229L13.875 15.228L14.0101 14.9144C15.2315 12.0819 15.5208 11.4513 16.4112 10.5609C16.7317 10.2404 17.8474 9.19574 18.7985 9.19574C19.1329 9.19574 19.3078 9.41229 19.3078 9.62365C19.3044 9.73106 19.2039 10.3218 19.1519 10.5799C19.022 11.4046 18.9544 12.1183 18.9544 12.399C18.9544 13.9044 19.8154 14.8399 21.2031 14.8399C21.8545 14.8399 22.5111 14.6217 23.211 14.173C24.337 13.4332 24.8862 12.5566 25.3695 11.7822L25.5081 11.5605L24.2937 9.72759L24.0131 10.2629H24.0148Z" fill="white" />
                                    <path d="M35.0439 5.69637L35.2969 5.65653L35.6468 3.60708L35.0873 3.78552C34.7616 3.88946 34.4255 3.99687 33.3687 4.17358C33.5212 3.75434 33.6355 3.40959 33.9473 2.4377L34.0391 2.15185L32.1318 1.15918L32.0538 1.64772C31.8667 2.81017 31.5583 3.80111 31.34 4.46463C31.1616 4.47502 31.0057 4.47502 30.7216 4.47502C29.6717 4.47502 29.256 4.38667 28.8575 4.27926L28.388 4.15279L28.4694 6.0775L28.7865 6.11735C29.0446 6.15026 29.4327 6.19877 30.1603 6.19877C30.2417 6.19877 30.4305 6.19011 30.732 6.17452C30.7493 6.17452 30.7666 6.17279 30.7857 6.17105C29.4188 9.62029 28.485 10.826 27.8579 11.6368L27.5703 12.0076L29.5123 12.7993L29.6665 12.5273C30.9243 10.3254 31.8996 8.00222 32.6896 5.99261C33.5333 5.8956 34.5658 5.76913 35.0405 5.69464L35.0439 5.69637Z" fill="white" />
                                    <path d="M36.7013 11.7199C36.665 11.3041 36.632 10.9368 36.6026 10.6163C36.5212 9.71548 36.4675 9.11953 36.4675 8.95149C36.4675 8.47507 36.587 8.31049 37.0634 7.90857L37.3856 7.63659L35.9893 6.45508L35.7572 6.6699C35.0936 7.28664 34.5843 7.83581 34.5843 8.82329C34.5843 9.02252 34.6502 9.71375 34.7454 10.6683C34.7662 10.8745 34.7853 11.0737 34.8026 11.2469C34.4076 11.1794 33.9537 11.1118 33.531 11.1118C31.6427 11.1118 30.624 12.2292 30.624 13.2808C30.624 14.4969 31.8488 15.7547 33.9 15.7547C35.9512 15.7547 36.3878 14.4571 36.587 13.5701C37.2401 13.8715 37.6472 14.076 38.2692 14.4519L38.6382 14.6754L39.3155 12.8529L39.0332 12.7091C38.4719 12.4215 37.94 12.1478 36.7031 11.7216L36.7013 11.7199ZM34.8407 13.1855C34.8407 13.9859 34.1322 14.0482 33.9139 14.0482C33.1811 14.0482 32.3304 13.7278 32.3304 13.3137C32.3304 13.0989 32.7237 12.7888 33.434 12.7888C33.9191 12.7888 34.4215 12.8893 34.8407 12.9776V13.1855Z" fill="white" />
                                    <path d="M51.9793 9.5959C52.2479 10.0688 52.454 10.6319 52.454 11.2781C52.454 12.8303 51.1668 14.0014 49.4587 14.0014C47.7505 14.0014 47.0731 12.8113 47.0731 11.6956C47.0731 11.3682 47.1095 10.9385 47.1563 10.5747C47.7401 10.5661 48.8489 10.5227 50.2885 10.2837L50.5432 10.2404L50.8758 8.04192L50.3318 8.2117C49.8207 8.37108 48.906 8.6552 47.3798 8.72623C47.385 8.70024 47.3884 8.67252 47.3936 8.64654C47.4716 8.17012 47.5513 7.67812 47.7245 6.72702C48.2616 6.69411 48.9078 6.63001 50.408 6.35282L50.6783 6.30258L50.8377 4.23581L50.3231 4.41425C49.7428 4.61694 49.1312 4.80578 48.1195 4.90452C48.3239 3.85988 48.5266 3.01273 48.7986 2.33362L48.9441 1.97155L46.4356 1.22314L46.4443 1.70995C46.4581 2.50686 46.3542 3.18077 46.0995 4.80578L46.0839 4.90972C45.5538 4.85602 44.8349 4.74687 43.688 4.37787L43.2358 4.23235L43.1839 6.07564L43.4108 6.16919C44.057 6.43771 44.6478 6.60922 45.7704 6.7097C45.6889 7.25714 45.5521 8.10256 45.4585 8.67252C44.7898 8.62402 44.1488 8.49409 43.5858 8.29313L43.1094 8.12335V10.1849L43.487 10.2629C43.8838 10.346 44.3273 10.4379 45.2021 10.5123C45.1779 10.8346 45.1467 11.259 45.1467 11.6592C45.1467 11.9953 45.2021 13.1733 45.9142 14.2318C46.8358 15.597 48.4937 15.7997 49.4015 15.7997C52.1976 15.7997 54.4723 13.7624 54.4723 11.2573C54.4723 10.1468 54.0652 9.21304 53.613 8.50795L51.9845 9.5907L51.9793 9.5959Z" fill="white" />
                                    <path d="M68.1955 10.2629C67.6931 11.2209 66.761 13.0071 65.512 13.0071C65.2348 13.0071 64.987 12.9603 64.987 12.3851C64.987 12.3176 64.9922 11.9555 65.0789 11.4167L65.0823 11.3976C65.3197 9.95627 65.356 9.73452 65.356 9.25811C65.356 8.36072 64.8762 7.31434 63.5249 7.31434C62.6743 7.31434 61.815 7.7128 60.98 8.23079C61.7145 6.54168 62.747 4.55634 63.5613 3.13229L63.7432 2.81526L61.7717 1.74463L61.3438 2.82046C61.0302 3.61044 60.8587 4.04527 60.6317 4.56153C60.2281 5.5005 58.688 8.96187 57.5636 11.4895C57.0318 12.6866 56.5814 13.6966 56.3683 14.1799L56.2158 14.5229L58.0556 15.228L58.1908 14.9144C59.4121 12.0819 59.7014 11.4513 60.5919 10.5609C60.9124 10.2404 62.0298 9.19747 62.9792 9.19747C63.3135 9.19747 63.4885 9.41403 63.4885 9.62538C63.485 9.73279 63.3846 10.3235 63.3326 10.5817C63.2026 11.4063 63.1351 12.1201 63.1351 12.4007C63.1351 13.9062 63.9961 14.8417 65.3838 14.8417C66.0351 14.8417 66.6917 14.6234 67.3916 14.1747C68.5177 13.435 69.0669 12.5584 69.5502 11.784L69.6888 11.5622L68.4744 9.72933L68.1937 10.2646L68.1955 10.2629Z" fill="white" />
                                    <path d="M36.9431 4.25999L36.7127 4.18896L36.1289 5.57663L36.3818 5.67884C38.1472 6.3874 38.5162 6.54332 39.6873 7.25707L39.9402 7.41125L40.6713 5.8798L40.4582 5.7568C39.4413 5.16778 38.2598 4.66538 36.9449 4.26346L36.9431 4.25999Z" fill="white" />
                                    <path d="M9.76846 0.211355L9.58828 0L8.34961 0.807305L8.59041 1.08969C8.98194 1.55051 9.51899 2.28505 9.84641 2.97109L10.0058 3.30545L11.2687 2.42018L11.118 2.16032C10.8668 1.72895 10.3575 0.90432 9.76846 0.211355Z" fill="white" />
                                    <path d="M2.74241 9.36692C3.97935 8.29109 6.55545 7.10785 9.9943 6.03202L10.2663 5.94713L9.87649 3.85091L9.49536 4.04148C9.12636 4.22511 7.78893 4.82106 6.71484 5.29748C6.07904 5.57986 5.51774 5.82933 5.19724 5.97485C4.64287 5.6994 4.41765 5.24897 4.24788 3.59798C4.23402 3.46112 4.21843 3.07306 4.19937 2.66248C4.17338 2.0544 4.14567 1.42553 4.11622 1.19685L4.0781 0.902344L1.88313 1.01842L1.9559 1.38222C2.09622 2.08731 2.15512 2.4234 2.16378 2.51522L2.19324 2.73524C2.49987 5.06187 2.58303 5.69593 3.43538 6.80641C2.18457 7.463 0 8.80388 0 11.3055C0 12.8421 0.786516 13.542 1.08969 13.8106C1.69777 14.3511 2.27293 14.8621 4.72776 14.8621C6.97643 14.8621 8.66034 14.6352 9.77428 14.4845L10.171 14.4308V12.3449L9.77601 12.4385C9.01548 12.6204 8.63781 12.6966 7.90674 12.7902C6.34756 12.9877 4.67752 13.031 4.43498 13.031C2.82557 13.031 1.8277 12.7122 1.8277 11.1236C1.8277 10.493 2.15859 9.85373 2.74241 9.36519V9.36692Z" fill="white" />
                                    <path d="M8.07603 3.74572L8.23888 4.06102L9.47582 3.25199L9.3303 2.99039C8.98382 2.36846 8.51607 1.57847 7.97036 0.97906L7.78672 0.776367L6.58789 1.56115L7.00194 2.13631C7.76593 3.19655 7.86295 3.33168 8.07603 3.74399V3.74572Z" fill="white" />
                                    <path d="M75.5228 12.6831H73.0264V15.1622H75.5228V12.6831Z" fill="white" />
                                    <path d="M74.4864 1.22314C71.8479 1.22314 70.3771 2.6905 70.1138 5.58363L70.0791 5.96303H72.4768L72.5028 5.62348C72.5946 4.41945 72.825 3.24487 74.4846 3.24487C76.1443 3.24487 76.2915 4.50607 76.2915 4.8924C76.2915 5.32723 76.1893 5.92492 75.389 6.7097C74.1468 7.93452 73.1663 8.9012 73.1663 10.4708V11.7025H75.0321L75.3768 11.6956L75.3803 11.3508C75.3976 9.89041 75.3976 9.80379 76.5323 8.66906C78.1712 7.0302 78.6476 6.34763 78.6476 4.97902C78.6476 2.73208 76.9758 1.22314 74.4864 1.22314Z" fill="white" />
                                </svg>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--third js-content">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img class="u-pc-only" src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <p class="u-sp-only">そんなもんじゃなかった</p>
                            <span>03</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>補用品<br>ディレクター</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>自動車事業部 生産管理部　川島 樹哉</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('interview'); ?>">
                                <svg width="79" height="16" viewBox="0 0 79 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.0148 10.2629C23.5124 11.2209 22.5804 13.0071 21.3313 13.0071C21.0541 13.0071 20.8064 12.9603 20.8064 12.3851C20.8064 12.3176 20.8116 11.9555 20.8982 11.4167L20.9017 11.3976C21.139 9.95627 21.1754 9.73452 21.1754 9.25811C21.1754 8.36072 20.6955 7.31434 19.3442 7.31434C18.4936 7.31434 17.6343 7.7128 16.7993 8.23079C17.5338 6.54168 18.5664 4.55634 19.3806 3.13229L19.5625 2.81526L17.591 1.74463L17.1631 2.82046C16.8495 3.61044 16.678 4.04527 16.4511 4.56153C16.0474 5.5005 14.5073 8.96187 13.383 11.4895C12.8511 12.6866 12.4007 13.6966 12.1876 14.1799L12.0352 14.5229L13.875 15.228L14.0101 14.9144C15.2315 12.0819 15.5208 11.4513 16.4112 10.5609C16.7317 10.2404 17.8474 9.19574 18.7985 9.19574C19.1329 9.19574 19.3078 9.41229 19.3078 9.62365C19.3044 9.73106 19.2039 10.3218 19.1519 10.5799C19.022 11.4046 18.9544 12.1183 18.9544 12.399C18.9544 13.9044 19.8154 14.8399 21.2031 14.8399C21.8545 14.8399 22.5111 14.6217 23.211 14.173C24.337 13.4332 24.8862 12.5566 25.3695 11.7822L25.5081 11.5605L24.2937 9.72759L24.0131 10.2629H24.0148Z" fill="white" />
                                    <path d="M35.0439 5.69637L35.2969 5.65653L35.6468 3.60708L35.0873 3.78552C34.7616 3.88946 34.4255 3.99687 33.3687 4.17358C33.5212 3.75434 33.6355 3.40959 33.9473 2.4377L34.0391 2.15185L32.1318 1.15918L32.0538 1.64772C31.8667 2.81017 31.5583 3.80111 31.34 4.46463C31.1616 4.47502 31.0057 4.47502 30.7216 4.47502C29.6717 4.47502 29.256 4.38667 28.8575 4.27926L28.388 4.15279L28.4694 6.0775L28.7865 6.11735C29.0446 6.15026 29.4327 6.19877 30.1603 6.19877C30.2417 6.19877 30.4305 6.19011 30.732 6.17452C30.7493 6.17452 30.7666 6.17279 30.7857 6.17105C29.4188 9.62029 28.485 10.826 27.8579 11.6368L27.5703 12.0076L29.5123 12.7993L29.6665 12.5273C30.9243 10.3254 31.8996 8.00222 32.6896 5.99261C33.5333 5.8956 34.5658 5.76913 35.0405 5.69464L35.0439 5.69637Z" fill="white" />
                                    <path d="M36.7013 11.7199C36.665 11.3041 36.632 10.9368 36.6026 10.6163C36.5212 9.71548 36.4675 9.11953 36.4675 8.95149C36.4675 8.47507 36.587 8.31049 37.0634 7.90857L37.3856 7.63659L35.9893 6.45508L35.7572 6.6699C35.0936 7.28664 34.5843 7.83581 34.5843 8.82329C34.5843 9.02252 34.6502 9.71375 34.7454 10.6683C34.7662 10.8745 34.7853 11.0737 34.8026 11.2469C34.4076 11.1794 33.9537 11.1118 33.531 11.1118C31.6427 11.1118 30.624 12.2292 30.624 13.2808C30.624 14.4969 31.8488 15.7547 33.9 15.7547C35.9512 15.7547 36.3878 14.4571 36.587 13.5701C37.2401 13.8715 37.6472 14.076 38.2692 14.4519L38.6382 14.6754L39.3155 12.8529L39.0332 12.7091C38.4719 12.4215 37.94 12.1478 36.7031 11.7216L36.7013 11.7199ZM34.8407 13.1855C34.8407 13.9859 34.1322 14.0482 33.9139 14.0482C33.1811 14.0482 32.3304 13.7278 32.3304 13.3137C32.3304 13.0989 32.7237 12.7888 33.434 12.7888C33.9191 12.7888 34.4215 12.8893 34.8407 12.9776V13.1855Z" fill="white" />
                                    <path d="M51.9793 9.5959C52.2479 10.0688 52.454 10.6319 52.454 11.2781C52.454 12.8303 51.1668 14.0014 49.4587 14.0014C47.7505 14.0014 47.0731 12.8113 47.0731 11.6956C47.0731 11.3682 47.1095 10.9385 47.1563 10.5747C47.7401 10.5661 48.8489 10.5227 50.2885 10.2837L50.5432 10.2404L50.8758 8.04192L50.3318 8.2117C49.8207 8.37108 48.906 8.6552 47.3798 8.72623C47.385 8.70024 47.3884 8.67252 47.3936 8.64654C47.4716 8.17012 47.5513 7.67812 47.7245 6.72702C48.2616 6.69411 48.9078 6.63001 50.408 6.35282L50.6783 6.30258L50.8377 4.23581L50.3231 4.41425C49.7428 4.61694 49.1312 4.80578 48.1195 4.90452C48.3239 3.85988 48.5266 3.01273 48.7986 2.33362L48.9441 1.97155L46.4356 1.22314L46.4443 1.70995C46.4581 2.50686 46.3542 3.18077 46.0995 4.80578L46.0839 4.90972C45.5538 4.85602 44.8349 4.74687 43.688 4.37787L43.2358 4.23235L43.1839 6.07564L43.4108 6.16919C44.057 6.43771 44.6478 6.60922 45.7704 6.7097C45.6889 7.25714 45.5521 8.10256 45.4585 8.67252C44.7898 8.62402 44.1488 8.49409 43.5858 8.29313L43.1094 8.12335V10.1849L43.487 10.2629C43.8838 10.346 44.3273 10.4379 45.2021 10.5123C45.1779 10.8346 45.1467 11.259 45.1467 11.6592C45.1467 11.9953 45.2021 13.1733 45.9142 14.2318C46.8358 15.597 48.4937 15.7997 49.4015 15.7997C52.1976 15.7997 54.4723 13.7624 54.4723 11.2573C54.4723 10.1468 54.0652 9.21304 53.613 8.50795L51.9845 9.5907L51.9793 9.5959Z" fill="white" />
                                    <path d="M68.1955 10.2629C67.6931 11.2209 66.761 13.0071 65.512 13.0071C65.2348 13.0071 64.987 12.9603 64.987 12.3851C64.987 12.3176 64.9922 11.9555 65.0789 11.4167L65.0823 11.3976C65.3197 9.95627 65.356 9.73452 65.356 9.25811C65.356 8.36072 64.8762 7.31434 63.5249 7.31434C62.6743 7.31434 61.815 7.7128 60.98 8.23079C61.7145 6.54168 62.747 4.55634 63.5613 3.13229L63.7432 2.81526L61.7717 1.74463L61.3438 2.82046C61.0302 3.61044 60.8587 4.04527 60.6317 4.56153C60.2281 5.5005 58.688 8.96187 57.5636 11.4895C57.0318 12.6866 56.5814 13.6966 56.3683 14.1799L56.2158 14.5229L58.0556 15.228L58.1908 14.9144C59.4121 12.0819 59.7014 11.4513 60.5919 10.5609C60.9124 10.2404 62.0298 9.19747 62.9792 9.19747C63.3135 9.19747 63.4885 9.41403 63.4885 9.62538C63.485 9.73279 63.3846 10.3235 63.3326 10.5817C63.2026 11.4063 63.1351 12.1201 63.1351 12.4007C63.1351 13.9062 63.9961 14.8417 65.3838 14.8417C66.0351 14.8417 66.6917 14.6234 67.3916 14.1747C68.5177 13.435 69.0669 12.5584 69.5502 11.784L69.6888 11.5622L68.4744 9.72933L68.1937 10.2646L68.1955 10.2629Z" fill="white" />
                                    <path d="M36.9431 4.25999L36.7127 4.18896L36.1289 5.57663L36.3818 5.67884C38.1472 6.3874 38.5162 6.54332 39.6873 7.25707L39.9402 7.41125L40.6713 5.8798L40.4582 5.7568C39.4413 5.16778 38.2598 4.66538 36.9449 4.26346L36.9431 4.25999Z" fill="white" />
                                    <path d="M9.76846 0.211355L9.58828 0L8.34961 0.807305L8.59041 1.08969C8.98194 1.55051 9.51899 2.28505 9.84641 2.97109L10.0058 3.30545L11.2687 2.42018L11.118 2.16032C10.8668 1.72895 10.3575 0.90432 9.76846 0.211355Z" fill="white" />
                                    <path d="M2.74241 9.36692C3.97935 8.29109 6.55545 7.10785 9.9943 6.03202L10.2663 5.94713L9.87649 3.85091L9.49536 4.04148C9.12636 4.22511 7.78893 4.82106 6.71484 5.29748C6.07904 5.57986 5.51774 5.82933 5.19724 5.97485C4.64287 5.6994 4.41765 5.24897 4.24788 3.59798C4.23402 3.46112 4.21843 3.07306 4.19937 2.66248C4.17338 2.0544 4.14567 1.42553 4.11622 1.19685L4.0781 0.902344L1.88313 1.01842L1.9559 1.38222C2.09622 2.08731 2.15512 2.4234 2.16378 2.51522L2.19324 2.73524C2.49987 5.06187 2.58303 5.69593 3.43538 6.80641C2.18457 7.463 0 8.80388 0 11.3055C0 12.8421 0.786516 13.542 1.08969 13.8106C1.69777 14.3511 2.27293 14.8621 4.72776 14.8621C6.97643 14.8621 8.66034 14.6352 9.77428 14.4845L10.171 14.4308V12.3449L9.77601 12.4385C9.01548 12.6204 8.63781 12.6966 7.90674 12.7902C6.34756 12.9877 4.67752 13.031 4.43498 13.031C2.82557 13.031 1.8277 12.7122 1.8277 11.1236C1.8277 10.493 2.15859 9.85373 2.74241 9.36519V9.36692Z" fill="white" />
                                    <path d="M8.07603 3.74572L8.23888 4.06102L9.47582 3.25199L9.3303 2.99039C8.98382 2.36846 8.51607 1.57847 7.97036 0.97906L7.78672 0.776367L6.58789 1.56115L7.00194 2.13631C7.76593 3.19655 7.86295 3.33168 8.07603 3.74399V3.74572Z" fill="white" />
                                    <path d="M75.5228 12.6831H73.0264V15.1622H75.5228V12.6831Z" fill="white" />
                                    <path d="M74.4864 1.22314C71.8479 1.22314 70.3771 2.6905 70.1138 5.58363L70.0791 5.96303H72.4768L72.5028 5.62348C72.5946 4.41945 72.825 3.24487 74.4846 3.24487C76.1443 3.24487 76.2915 4.50607 76.2915 4.8924C76.2915 5.32723 76.1893 5.92492 75.389 6.7097C74.1468 7.93452 73.1663 8.9012 73.1663 10.4708V11.7025H75.0321L75.3768 11.6956L75.3803 11.3508C75.3976 9.89041 75.3976 9.80379 76.5323 8.66906C78.1712 7.0302 78.6476 6.34763 78.6476 4.97902C78.6476 2.73208 76.9758 1.22314 74.4864 1.22314Z" fill="white" />
                                </svg>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--fourth js-content">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img class="u-pc-only" src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <p class="u-sp-only">そんなもんじゃなかった</p>
                            <span>04</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>仲間と現場を<br>良くしたい監督</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>住宅事業部 生産部 新田生産課　赤石 翔太</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('interview'); ?>">
                                <svg width="79" height="16" viewBox="0 0 79 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.0148 10.2629C23.5124 11.2209 22.5804 13.0071 21.3313 13.0071C21.0541 13.0071 20.8064 12.9603 20.8064 12.3851C20.8064 12.3176 20.8116 11.9555 20.8982 11.4167L20.9017 11.3976C21.139 9.95627 21.1754 9.73452 21.1754 9.25811C21.1754 8.36072 20.6955 7.31434 19.3442 7.31434C18.4936 7.31434 17.6343 7.7128 16.7993 8.23079C17.5338 6.54168 18.5664 4.55634 19.3806 3.13229L19.5625 2.81526L17.591 1.74463L17.1631 2.82046C16.8495 3.61044 16.678 4.04527 16.4511 4.56153C16.0474 5.5005 14.5073 8.96187 13.383 11.4895C12.8511 12.6866 12.4007 13.6966 12.1876 14.1799L12.0352 14.5229L13.875 15.228L14.0101 14.9144C15.2315 12.0819 15.5208 11.4513 16.4112 10.5609C16.7317 10.2404 17.8474 9.19574 18.7985 9.19574C19.1329 9.19574 19.3078 9.41229 19.3078 9.62365C19.3044 9.73106 19.2039 10.3218 19.1519 10.5799C19.022 11.4046 18.9544 12.1183 18.9544 12.399C18.9544 13.9044 19.8154 14.8399 21.2031 14.8399C21.8545 14.8399 22.5111 14.6217 23.211 14.173C24.337 13.4332 24.8862 12.5566 25.3695 11.7822L25.5081 11.5605L24.2937 9.72759L24.0131 10.2629H24.0148Z" fill="white" />
                                    <path d="M35.0439 5.69637L35.2969 5.65653L35.6468 3.60708L35.0873 3.78552C34.7616 3.88946 34.4255 3.99687 33.3687 4.17358C33.5212 3.75434 33.6355 3.40959 33.9473 2.4377L34.0391 2.15185L32.1318 1.15918L32.0538 1.64772C31.8667 2.81017 31.5583 3.80111 31.34 4.46463C31.1616 4.47502 31.0057 4.47502 30.7216 4.47502C29.6717 4.47502 29.256 4.38667 28.8575 4.27926L28.388 4.15279L28.4694 6.0775L28.7865 6.11735C29.0446 6.15026 29.4327 6.19877 30.1603 6.19877C30.2417 6.19877 30.4305 6.19011 30.732 6.17452C30.7493 6.17452 30.7666 6.17279 30.7857 6.17105C29.4188 9.62029 28.485 10.826 27.8579 11.6368L27.5703 12.0076L29.5123 12.7993L29.6665 12.5273C30.9243 10.3254 31.8996 8.00222 32.6896 5.99261C33.5333 5.8956 34.5658 5.76913 35.0405 5.69464L35.0439 5.69637Z" fill="white" />
                                    <path d="M36.7013 11.7199C36.665 11.3041 36.632 10.9368 36.6026 10.6163C36.5212 9.71548 36.4675 9.11953 36.4675 8.95149C36.4675 8.47507 36.587 8.31049 37.0634 7.90857L37.3856 7.63659L35.9893 6.45508L35.7572 6.6699C35.0936 7.28664 34.5843 7.83581 34.5843 8.82329C34.5843 9.02252 34.6502 9.71375 34.7454 10.6683C34.7662 10.8745 34.7853 11.0737 34.8026 11.2469C34.4076 11.1794 33.9537 11.1118 33.531 11.1118C31.6427 11.1118 30.624 12.2292 30.624 13.2808C30.624 14.4969 31.8488 15.7547 33.9 15.7547C35.9512 15.7547 36.3878 14.4571 36.587 13.5701C37.2401 13.8715 37.6472 14.076 38.2692 14.4519L38.6382 14.6754L39.3155 12.8529L39.0332 12.7091C38.4719 12.4215 37.94 12.1478 36.7031 11.7216L36.7013 11.7199ZM34.8407 13.1855C34.8407 13.9859 34.1322 14.0482 33.9139 14.0482C33.1811 14.0482 32.3304 13.7278 32.3304 13.3137C32.3304 13.0989 32.7237 12.7888 33.434 12.7888C33.9191 12.7888 34.4215 12.8893 34.8407 12.9776V13.1855Z" fill="white" />
                                    <path d="M51.9793 9.5959C52.2479 10.0688 52.454 10.6319 52.454 11.2781C52.454 12.8303 51.1668 14.0014 49.4587 14.0014C47.7505 14.0014 47.0731 12.8113 47.0731 11.6956C47.0731 11.3682 47.1095 10.9385 47.1563 10.5747C47.7401 10.5661 48.8489 10.5227 50.2885 10.2837L50.5432 10.2404L50.8758 8.04192L50.3318 8.2117C49.8207 8.37108 48.906 8.6552 47.3798 8.72623C47.385 8.70024 47.3884 8.67252 47.3936 8.64654C47.4716 8.17012 47.5513 7.67812 47.7245 6.72702C48.2616 6.69411 48.9078 6.63001 50.408 6.35282L50.6783 6.30258L50.8377 4.23581L50.3231 4.41425C49.7428 4.61694 49.1312 4.80578 48.1195 4.90452C48.3239 3.85988 48.5266 3.01273 48.7986 2.33362L48.9441 1.97155L46.4356 1.22314L46.4443 1.70995C46.4581 2.50686 46.3542 3.18077 46.0995 4.80578L46.0839 4.90972C45.5538 4.85602 44.8349 4.74687 43.688 4.37787L43.2358 4.23235L43.1839 6.07564L43.4108 6.16919C44.057 6.43771 44.6478 6.60922 45.7704 6.7097C45.6889 7.25714 45.5521 8.10256 45.4585 8.67252C44.7898 8.62402 44.1488 8.49409 43.5858 8.29313L43.1094 8.12335V10.1849L43.487 10.2629C43.8838 10.346 44.3273 10.4379 45.2021 10.5123C45.1779 10.8346 45.1467 11.259 45.1467 11.6592C45.1467 11.9953 45.2021 13.1733 45.9142 14.2318C46.8358 15.597 48.4937 15.7997 49.4015 15.7997C52.1976 15.7997 54.4723 13.7624 54.4723 11.2573C54.4723 10.1468 54.0652 9.21304 53.613 8.50795L51.9845 9.5907L51.9793 9.5959Z" fill="white" />
                                    <path d="M68.1955 10.2629C67.6931 11.2209 66.761 13.0071 65.512 13.0071C65.2348 13.0071 64.987 12.9603 64.987 12.3851C64.987 12.3176 64.9922 11.9555 65.0789 11.4167L65.0823 11.3976C65.3197 9.95627 65.356 9.73452 65.356 9.25811C65.356 8.36072 64.8762 7.31434 63.5249 7.31434C62.6743 7.31434 61.815 7.7128 60.98 8.23079C61.7145 6.54168 62.747 4.55634 63.5613 3.13229L63.7432 2.81526L61.7717 1.74463L61.3438 2.82046C61.0302 3.61044 60.8587 4.04527 60.6317 4.56153C60.2281 5.5005 58.688 8.96187 57.5636 11.4895C57.0318 12.6866 56.5814 13.6966 56.3683 14.1799L56.2158 14.5229L58.0556 15.228L58.1908 14.9144C59.4121 12.0819 59.7014 11.4513 60.5919 10.5609C60.9124 10.2404 62.0298 9.19747 62.9792 9.19747C63.3135 9.19747 63.4885 9.41403 63.4885 9.62538C63.485 9.73279 63.3846 10.3235 63.3326 10.5817C63.2026 11.4063 63.1351 12.1201 63.1351 12.4007C63.1351 13.9062 63.9961 14.8417 65.3838 14.8417C66.0351 14.8417 66.6917 14.6234 67.3916 14.1747C68.5177 13.435 69.0669 12.5584 69.5502 11.784L69.6888 11.5622L68.4744 9.72933L68.1937 10.2646L68.1955 10.2629Z" fill="white" />
                                    <path d="M36.9431 4.25999L36.7127 4.18896L36.1289 5.57663L36.3818 5.67884C38.1472 6.3874 38.5162 6.54332 39.6873 7.25707L39.9402 7.41125L40.6713 5.8798L40.4582 5.7568C39.4413 5.16778 38.2598 4.66538 36.9449 4.26346L36.9431 4.25999Z" fill="white" />
                                    <path d="M9.76846 0.211355L9.58828 0L8.34961 0.807305L8.59041 1.08969C8.98194 1.55051 9.51899 2.28505 9.84641 2.97109L10.0058 3.30545L11.2687 2.42018L11.118 2.16032C10.8668 1.72895 10.3575 0.90432 9.76846 0.211355Z" fill="white" />
                                    <path d="M2.74241 9.36692C3.97935 8.29109 6.55545 7.10785 9.9943 6.03202L10.2663 5.94713L9.87649 3.85091L9.49536 4.04148C9.12636 4.22511 7.78893 4.82106 6.71484 5.29748C6.07904 5.57986 5.51774 5.82933 5.19724 5.97485C4.64287 5.6994 4.41765 5.24897 4.24788 3.59798C4.23402 3.46112 4.21843 3.07306 4.19937 2.66248C4.17338 2.0544 4.14567 1.42553 4.11622 1.19685L4.0781 0.902344L1.88313 1.01842L1.9559 1.38222C2.09622 2.08731 2.15512 2.4234 2.16378 2.51522L2.19324 2.73524C2.49987 5.06187 2.58303 5.69593 3.43538 6.80641C2.18457 7.463 0 8.80388 0 11.3055C0 12.8421 0.786516 13.542 1.08969 13.8106C1.69777 14.3511 2.27293 14.8621 4.72776 14.8621C6.97643 14.8621 8.66034 14.6352 9.77428 14.4845L10.171 14.4308V12.3449L9.77601 12.4385C9.01548 12.6204 8.63781 12.6966 7.90674 12.7902C6.34756 12.9877 4.67752 13.031 4.43498 13.031C2.82557 13.031 1.8277 12.7122 1.8277 11.1236C1.8277 10.493 2.15859 9.85373 2.74241 9.36519V9.36692Z" fill="white" />
                                    <path d="M8.07603 3.74572L8.23888 4.06102L9.47582 3.25199L9.3303 2.99039C8.98382 2.36846 8.51607 1.57847 7.97036 0.97906L7.78672 0.776367L6.58789 1.56115L7.00194 2.13631C7.76593 3.19655 7.86295 3.33168 8.07603 3.74399V3.74572Z" fill="white" />
                                    <path d="M75.5228 12.6831H73.0264V15.1622H75.5228V12.6831Z" fill="white" />
                                    <path d="M74.4864 1.22314C71.8479 1.22314 70.3771 2.6905 70.1138 5.58363L70.0791 5.96303H72.4768L72.5028 5.62348C72.5946 4.41945 72.825 3.24487 74.4846 3.24487C76.1443 3.24487 76.2915 4.50607 76.2915 4.8924C76.2915 5.32723 76.1893 5.92492 75.389 6.7097C74.1468 7.93452 73.1663 8.9012 73.1663 10.4708V11.7025H75.0321L75.3768 11.6956L75.3803 11.3508C75.3976 9.89041 75.3976 9.80379 76.5323 8.66906C78.1712 7.0302 78.6476 6.34763 78.6476 4.97902C78.6476 2.73208 76.9758 1.22314 74.4864 1.22314Z" fill="white" />
                                </svg>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--fifth js-content">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img class="u-pc-only" src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <p class="u-sp-only">そんなもんじゃなかった</p>
                            <span>05</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>何でもこなす<br>オールラウンダー</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>住宅事業部 営業開発部 営業開発課　石原 輝大</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('interview'); ?>">
                                <svg width="79" height="16" viewBox="0 0 79 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.0148 10.2629C23.5124 11.2209 22.5804 13.0071 21.3313 13.0071C21.0541 13.0071 20.8064 12.9603 20.8064 12.3851C20.8064 12.3176 20.8116 11.9555 20.8982 11.4167L20.9017 11.3976C21.139 9.95627 21.1754 9.73452 21.1754 9.25811C21.1754 8.36072 20.6955 7.31434 19.3442 7.31434C18.4936 7.31434 17.6343 7.7128 16.7993 8.23079C17.5338 6.54168 18.5664 4.55634 19.3806 3.13229L19.5625 2.81526L17.591 1.74463L17.1631 2.82046C16.8495 3.61044 16.678 4.04527 16.4511 4.56153C16.0474 5.5005 14.5073 8.96187 13.383 11.4895C12.8511 12.6866 12.4007 13.6966 12.1876 14.1799L12.0352 14.5229L13.875 15.228L14.0101 14.9144C15.2315 12.0819 15.5208 11.4513 16.4112 10.5609C16.7317 10.2404 17.8474 9.19574 18.7985 9.19574C19.1329 9.19574 19.3078 9.41229 19.3078 9.62365C19.3044 9.73106 19.2039 10.3218 19.1519 10.5799C19.022 11.4046 18.9544 12.1183 18.9544 12.399C18.9544 13.9044 19.8154 14.8399 21.2031 14.8399C21.8545 14.8399 22.5111 14.6217 23.211 14.173C24.337 13.4332 24.8862 12.5566 25.3695 11.7822L25.5081 11.5605L24.2937 9.72759L24.0131 10.2629H24.0148Z" fill="white" />
                                    <path d="M35.0439 5.69637L35.2969 5.65653L35.6468 3.60708L35.0873 3.78552C34.7616 3.88946 34.4255 3.99687 33.3687 4.17358C33.5212 3.75434 33.6355 3.40959 33.9473 2.4377L34.0391 2.15185L32.1318 1.15918L32.0538 1.64772C31.8667 2.81017 31.5583 3.80111 31.34 4.46463C31.1616 4.47502 31.0057 4.47502 30.7216 4.47502C29.6717 4.47502 29.256 4.38667 28.8575 4.27926L28.388 4.15279L28.4694 6.0775L28.7865 6.11735C29.0446 6.15026 29.4327 6.19877 30.1603 6.19877C30.2417 6.19877 30.4305 6.19011 30.732 6.17452C30.7493 6.17452 30.7666 6.17279 30.7857 6.17105C29.4188 9.62029 28.485 10.826 27.8579 11.6368L27.5703 12.0076L29.5123 12.7993L29.6665 12.5273C30.9243 10.3254 31.8996 8.00222 32.6896 5.99261C33.5333 5.8956 34.5658 5.76913 35.0405 5.69464L35.0439 5.69637Z" fill="white" />
                                    <path d="M36.7013 11.7199C36.665 11.3041 36.632 10.9368 36.6026 10.6163C36.5212 9.71548 36.4675 9.11953 36.4675 8.95149C36.4675 8.47507 36.587 8.31049 37.0634 7.90857L37.3856 7.63659L35.9893 6.45508L35.7572 6.6699C35.0936 7.28664 34.5843 7.83581 34.5843 8.82329C34.5843 9.02252 34.6502 9.71375 34.7454 10.6683C34.7662 10.8745 34.7853 11.0737 34.8026 11.2469C34.4076 11.1794 33.9537 11.1118 33.531 11.1118C31.6427 11.1118 30.624 12.2292 30.624 13.2808C30.624 14.4969 31.8488 15.7547 33.9 15.7547C35.9512 15.7547 36.3878 14.4571 36.587 13.5701C37.2401 13.8715 37.6472 14.076 38.2692 14.4519L38.6382 14.6754L39.3155 12.8529L39.0332 12.7091C38.4719 12.4215 37.94 12.1478 36.7031 11.7216L36.7013 11.7199ZM34.8407 13.1855C34.8407 13.9859 34.1322 14.0482 33.9139 14.0482C33.1811 14.0482 32.3304 13.7278 32.3304 13.3137C32.3304 13.0989 32.7237 12.7888 33.434 12.7888C33.9191 12.7888 34.4215 12.8893 34.8407 12.9776V13.1855Z" fill="white" />
                                    <path d="M51.9793 9.5959C52.2479 10.0688 52.454 10.6319 52.454 11.2781C52.454 12.8303 51.1668 14.0014 49.4587 14.0014C47.7505 14.0014 47.0731 12.8113 47.0731 11.6956C47.0731 11.3682 47.1095 10.9385 47.1563 10.5747C47.7401 10.5661 48.8489 10.5227 50.2885 10.2837L50.5432 10.2404L50.8758 8.04192L50.3318 8.2117C49.8207 8.37108 48.906 8.6552 47.3798 8.72623C47.385 8.70024 47.3884 8.67252 47.3936 8.64654C47.4716 8.17012 47.5513 7.67812 47.7245 6.72702C48.2616 6.69411 48.9078 6.63001 50.408 6.35282L50.6783 6.30258L50.8377 4.23581L50.3231 4.41425C49.7428 4.61694 49.1312 4.80578 48.1195 4.90452C48.3239 3.85988 48.5266 3.01273 48.7986 2.33362L48.9441 1.97155L46.4356 1.22314L46.4443 1.70995C46.4581 2.50686 46.3542 3.18077 46.0995 4.80578L46.0839 4.90972C45.5538 4.85602 44.8349 4.74687 43.688 4.37787L43.2358 4.23235L43.1839 6.07564L43.4108 6.16919C44.057 6.43771 44.6478 6.60922 45.7704 6.7097C45.6889 7.25714 45.5521 8.10256 45.4585 8.67252C44.7898 8.62402 44.1488 8.49409 43.5858 8.29313L43.1094 8.12335V10.1849L43.487 10.2629C43.8838 10.346 44.3273 10.4379 45.2021 10.5123C45.1779 10.8346 45.1467 11.259 45.1467 11.6592C45.1467 11.9953 45.2021 13.1733 45.9142 14.2318C46.8358 15.597 48.4937 15.7997 49.4015 15.7997C52.1976 15.7997 54.4723 13.7624 54.4723 11.2573C54.4723 10.1468 54.0652 9.21304 53.613 8.50795L51.9845 9.5907L51.9793 9.5959Z" fill="white" />
                                    <path d="M68.1955 10.2629C67.6931 11.2209 66.761 13.0071 65.512 13.0071C65.2348 13.0071 64.987 12.9603 64.987 12.3851C64.987 12.3176 64.9922 11.9555 65.0789 11.4167L65.0823 11.3976C65.3197 9.95627 65.356 9.73452 65.356 9.25811C65.356 8.36072 64.8762 7.31434 63.5249 7.31434C62.6743 7.31434 61.815 7.7128 60.98 8.23079C61.7145 6.54168 62.747 4.55634 63.5613 3.13229L63.7432 2.81526L61.7717 1.74463L61.3438 2.82046C61.0302 3.61044 60.8587 4.04527 60.6317 4.56153C60.2281 5.5005 58.688 8.96187 57.5636 11.4895C57.0318 12.6866 56.5814 13.6966 56.3683 14.1799L56.2158 14.5229L58.0556 15.228L58.1908 14.9144C59.4121 12.0819 59.7014 11.4513 60.5919 10.5609C60.9124 10.2404 62.0298 9.19747 62.9792 9.19747C63.3135 9.19747 63.4885 9.41403 63.4885 9.62538C63.485 9.73279 63.3846 10.3235 63.3326 10.5817C63.2026 11.4063 63.1351 12.1201 63.1351 12.4007C63.1351 13.9062 63.9961 14.8417 65.3838 14.8417C66.0351 14.8417 66.6917 14.6234 67.3916 14.1747C68.5177 13.435 69.0669 12.5584 69.5502 11.784L69.6888 11.5622L68.4744 9.72933L68.1937 10.2646L68.1955 10.2629Z" fill="white" />
                                    <path d="M36.9431 4.25999L36.7127 4.18896L36.1289 5.57663L36.3818 5.67884C38.1472 6.3874 38.5162 6.54332 39.6873 7.25707L39.9402 7.41125L40.6713 5.8798L40.4582 5.7568C39.4413 5.16778 38.2598 4.66538 36.9449 4.26346L36.9431 4.25999Z" fill="white" />
                                    <path d="M9.76846 0.211355L9.58828 0L8.34961 0.807305L8.59041 1.08969C8.98194 1.55051 9.51899 2.28505 9.84641 2.97109L10.0058 3.30545L11.2687 2.42018L11.118 2.16032C10.8668 1.72895 10.3575 0.90432 9.76846 0.211355Z" fill="white" />
                                    <path d="M2.74241 9.36692C3.97935 8.29109 6.55545 7.10785 9.9943 6.03202L10.2663 5.94713L9.87649 3.85091L9.49536 4.04148C9.12636 4.22511 7.78893 4.82106 6.71484 5.29748C6.07904 5.57986 5.51774 5.82933 5.19724 5.97485C4.64287 5.6994 4.41765 5.24897 4.24788 3.59798C4.23402 3.46112 4.21843 3.07306 4.19937 2.66248C4.17338 2.0544 4.14567 1.42553 4.11622 1.19685L4.0781 0.902344L1.88313 1.01842L1.9559 1.38222C2.09622 2.08731 2.15512 2.4234 2.16378 2.51522L2.19324 2.73524C2.49987 5.06187 2.58303 5.69593 3.43538 6.80641C2.18457 7.463 0 8.80388 0 11.3055C0 12.8421 0.786516 13.542 1.08969 13.8106C1.69777 14.3511 2.27293 14.8621 4.72776 14.8621C6.97643 14.8621 8.66034 14.6352 9.77428 14.4845L10.171 14.4308V12.3449L9.77601 12.4385C9.01548 12.6204 8.63781 12.6966 7.90674 12.7902C6.34756 12.9877 4.67752 13.031 4.43498 13.031C2.82557 13.031 1.8277 12.7122 1.8277 11.1236C1.8277 10.493 2.15859 9.85373 2.74241 9.36519V9.36692Z" fill="white" />
                                    <path d="M8.07603 3.74572L8.23888 4.06102L9.47582 3.25199L9.3303 2.99039C8.98382 2.36846 8.51607 1.57847 7.97036 0.97906L7.78672 0.776367L6.58789 1.56115L7.00194 2.13631C7.76593 3.19655 7.86295 3.33168 8.07603 3.74399V3.74572Z" fill="white" />
                                    <path d="M75.5228 12.6831H73.0264V15.1622H75.5228V12.6831Z" fill="white" />
                                    <path d="M74.4864 1.22314C71.8479 1.22314 70.3771 2.6905 70.1138 5.58363L70.0791 5.96303H72.4768L72.5028 5.62348C72.5946 4.41945 72.825 3.24487 74.4846 3.24487C76.1443 3.24487 76.2915 4.50607 76.2915 4.8924C76.2915 5.32723 76.1893 5.92492 75.389 6.7097C74.1468 7.93452 73.1663 8.9012 73.1663 10.4708V11.7025H75.0321L75.3768 11.6956L75.3803 11.3508C75.3976 9.89041 75.3976 9.80379 76.5323 8.66906C78.1712 7.0302 78.6476 6.34763 78.6476 4.97902C78.6476 2.73208 76.9758 1.22314 74.4864 1.22314Z" fill="white" />
                                </svg>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--sixth js-content">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>06</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>自働化をめざす<br>設計士</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>住宅事業部 生産部 生産技術課　柏木 陸斗</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('interview'); ?>">
                                <svg width="79" height="16" viewBox="0 0 79 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.0148 10.2629C23.5124 11.2209 22.5804 13.0071 21.3313 13.0071C21.0541 13.0071 20.8064 12.9603 20.8064 12.3851C20.8064 12.3176 20.8116 11.9555 20.8982 11.4167L20.9017 11.3976C21.139 9.95627 21.1754 9.73452 21.1754 9.25811C21.1754 8.36072 20.6955 7.31434 19.3442 7.31434C18.4936 7.31434 17.6343 7.7128 16.7993 8.23079C17.5338 6.54168 18.5664 4.55634 19.3806 3.13229L19.5625 2.81526L17.591 1.74463L17.1631 2.82046C16.8495 3.61044 16.678 4.04527 16.4511 4.56153C16.0474 5.5005 14.5073 8.96187 13.383 11.4895C12.8511 12.6866 12.4007 13.6966 12.1876 14.1799L12.0352 14.5229L13.875 15.228L14.0101 14.9144C15.2315 12.0819 15.5208 11.4513 16.4112 10.5609C16.7317 10.2404 17.8474 9.19574 18.7985 9.19574C19.1329 9.19574 19.3078 9.41229 19.3078 9.62365C19.3044 9.73106 19.2039 10.3218 19.1519 10.5799C19.022 11.4046 18.9544 12.1183 18.9544 12.399C18.9544 13.9044 19.8154 14.8399 21.2031 14.8399C21.8545 14.8399 22.5111 14.6217 23.211 14.173C24.337 13.4332 24.8862 12.5566 25.3695 11.7822L25.5081 11.5605L24.2937 9.72759L24.0131 10.2629H24.0148Z" fill="white" />
                                    <path d="M35.0439 5.69637L35.2969 5.65653L35.6468 3.60708L35.0873 3.78552C34.7616 3.88946 34.4255 3.99687 33.3687 4.17358C33.5212 3.75434 33.6355 3.40959 33.9473 2.4377L34.0391 2.15185L32.1318 1.15918L32.0538 1.64772C31.8667 2.81017 31.5583 3.80111 31.34 4.46463C31.1616 4.47502 31.0057 4.47502 30.7216 4.47502C29.6717 4.47502 29.256 4.38667 28.8575 4.27926L28.388 4.15279L28.4694 6.0775L28.7865 6.11735C29.0446 6.15026 29.4327 6.19877 30.1603 6.19877C30.2417 6.19877 30.4305 6.19011 30.732 6.17452C30.7493 6.17452 30.7666 6.17279 30.7857 6.17105C29.4188 9.62029 28.485 10.826 27.8579 11.6368L27.5703 12.0076L29.5123 12.7993L29.6665 12.5273C30.9243 10.3254 31.8996 8.00222 32.6896 5.99261C33.5333 5.8956 34.5658 5.76913 35.0405 5.69464L35.0439 5.69637Z" fill="white" />
                                    <path d="M36.7013 11.7199C36.665 11.3041 36.632 10.9368 36.6026 10.6163C36.5212 9.71548 36.4675 9.11953 36.4675 8.95149C36.4675 8.47507 36.587 8.31049 37.0634 7.90857L37.3856 7.63659L35.9893 6.45508L35.7572 6.6699C35.0936 7.28664 34.5843 7.83581 34.5843 8.82329C34.5843 9.02252 34.6502 9.71375 34.7454 10.6683C34.7662 10.8745 34.7853 11.0737 34.8026 11.2469C34.4076 11.1794 33.9537 11.1118 33.531 11.1118C31.6427 11.1118 30.624 12.2292 30.624 13.2808C30.624 14.4969 31.8488 15.7547 33.9 15.7547C35.9512 15.7547 36.3878 14.4571 36.587 13.5701C37.2401 13.8715 37.6472 14.076 38.2692 14.4519L38.6382 14.6754L39.3155 12.8529L39.0332 12.7091C38.4719 12.4215 37.94 12.1478 36.7031 11.7216L36.7013 11.7199ZM34.8407 13.1855C34.8407 13.9859 34.1322 14.0482 33.9139 14.0482C33.1811 14.0482 32.3304 13.7278 32.3304 13.3137C32.3304 13.0989 32.7237 12.7888 33.434 12.7888C33.9191 12.7888 34.4215 12.8893 34.8407 12.9776V13.1855Z" fill="white" />
                                    <path d="M51.9793 9.5959C52.2479 10.0688 52.454 10.6319 52.454 11.2781C52.454 12.8303 51.1668 14.0014 49.4587 14.0014C47.7505 14.0014 47.0731 12.8113 47.0731 11.6956C47.0731 11.3682 47.1095 10.9385 47.1563 10.5747C47.7401 10.5661 48.8489 10.5227 50.2885 10.2837L50.5432 10.2404L50.8758 8.04192L50.3318 8.2117C49.8207 8.37108 48.906 8.6552 47.3798 8.72623C47.385 8.70024 47.3884 8.67252 47.3936 8.64654C47.4716 8.17012 47.5513 7.67812 47.7245 6.72702C48.2616 6.69411 48.9078 6.63001 50.408 6.35282L50.6783 6.30258L50.8377 4.23581L50.3231 4.41425C49.7428 4.61694 49.1312 4.80578 48.1195 4.90452C48.3239 3.85988 48.5266 3.01273 48.7986 2.33362L48.9441 1.97155L46.4356 1.22314L46.4443 1.70995C46.4581 2.50686 46.3542 3.18077 46.0995 4.80578L46.0839 4.90972C45.5538 4.85602 44.8349 4.74687 43.688 4.37787L43.2358 4.23235L43.1839 6.07564L43.4108 6.16919C44.057 6.43771 44.6478 6.60922 45.7704 6.7097C45.6889 7.25714 45.5521 8.10256 45.4585 8.67252C44.7898 8.62402 44.1488 8.49409 43.5858 8.29313L43.1094 8.12335V10.1849L43.487 10.2629C43.8838 10.346 44.3273 10.4379 45.2021 10.5123C45.1779 10.8346 45.1467 11.259 45.1467 11.6592C45.1467 11.9953 45.2021 13.1733 45.9142 14.2318C46.8358 15.597 48.4937 15.7997 49.4015 15.7997C52.1976 15.7997 54.4723 13.7624 54.4723 11.2573C54.4723 10.1468 54.0652 9.21304 53.613 8.50795L51.9845 9.5907L51.9793 9.5959Z" fill="white" />
                                    <path d="M68.1955 10.2629C67.6931 11.2209 66.761 13.0071 65.512 13.0071C65.2348 13.0071 64.987 12.9603 64.987 12.3851C64.987 12.3176 64.9922 11.9555 65.0789 11.4167L65.0823 11.3976C65.3197 9.95627 65.356 9.73452 65.356 9.25811C65.356 8.36072 64.8762 7.31434 63.5249 7.31434C62.6743 7.31434 61.815 7.7128 60.98 8.23079C61.7145 6.54168 62.747 4.55634 63.5613 3.13229L63.7432 2.81526L61.7717 1.74463L61.3438 2.82046C61.0302 3.61044 60.8587 4.04527 60.6317 4.56153C60.2281 5.5005 58.688 8.96187 57.5636 11.4895C57.0318 12.6866 56.5814 13.6966 56.3683 14.1799L56.2158 14.5229L58.0556 15.228L58.1908 14.9144C59.4121 12.0819 59.7014 11.4513 60.5919 10.5609C60.9124 10.2404 62.0298 9.19747 62.9792 9.19747C63.3135 9.19747 63.4885 9.41403 63.4885 9.62538C63.485 9.73279 63.3846 10.3235 63.3326 10.5817C63.2026 11.4063 63.1351 12.1201 63.1351 12.4007C63.1351 13.9062 63.9961 14.8417 65.3838 14.8417C66.0351 14.8417 66.6917 14.6234 67.3916 14.1747C68.5177 13.435 69.0669 12.5584 69.5502 11.784L69.6888 11.5622L68.4744 9.72933L68.1937 10.2646L68.1955 10.2629Z" fill="white" />
                                    <path d="M36.9431 4.25999L36.7127 4.18896L36.1289 5.57663L36.3818 5.67884C38.1472 6.3874 38.5162 6.54332 39.6873 7.25707L39.9402 7.41125L40.6713 5.8798L40.4582 5.7568C39.4413 5.16778 38.2598 4.66538 36.9449 4.26346L36.9431 4.25999Z" fill="white" />
                                    <path d="M9.76846 0.211355L9.58828 0L8.34961 0.807305L8.59041 1.08969C8.98194 1.55051 9.51899 2.28505 9.84641 2.97109L10.0058 3.30545L11.2687 2.42018L11.118 2.16032C10.8668 1.72895 10.3575 0.90432 9.76846 0.211355Z" fill="white" />
                                    <path d="M2.74241 9.36692C3.97935 8.29109 6.55545 7.10785 9.9943 6.03202L10.2663 5.94713L9.87649 3.85091L9.49536 4.04148C9.12636 4.22511 7.78893 4.82106 6.71484 5.29748C6.07904 5.57986 5.51774 5.82933 5.19724 5.97485C4.64287 5.6994 4.41765 5.24897 4.24788 3.59798C4.23402 3.46112 4.21843 3.07306 4.19937 2.66248C4.17338 2.0544 4.14567 1.42553 4.11622 1.19685L4.0781 0.902344L1.88313 1.01842L1.9559 1.38222C2.09622 2.08731 2.15512 2.4234 2.16378 2.51522L2.19324 2.73524C2.49987 5.06187 2.58303 5.69593 3.43538 6.80641C2.18457 7.463 0 8.80388 0 11.3055C0 12.8421 0.786516 13.542 1.08969 13.8106C1.69777 14.3511 2.27293 14.8621 4.72776 14.8621C6.97643 14.8621 8.66034 14.6352 9.77428 14.4845L10.171 14.4308V12.3449L9.77601 12.4385C9.01548 12.6204 8.63781 12.6966 7.90674 12.7902C6.34756 12.9877 4.67752 13.031 4.43498 13.031C2.82557 13.031 1.8277 12.7122 1.8277 11.1236C1.8277 10.493 2.15859 9.85373 2.74241 9.36519V9.36692Z" fill="white" />
                                    <path d="M8.07603 3.74572L8.23888 4.06102L9.47582 3.25199L9.3303 2.99039C8.98382 2.36846 8.51607 1.57847 7.97036 0.97906L7.78672 0.776367L6.58789 1.56115L7.00194 2.13631C7.76593 3.19655 7.86295 3.33168 8.07603 3.74399V3.74572Z" fill="white" />
                                    <path d="M75.5228 12.6831H73.0264V15.1622H75.5228V12.6831Z" fill="white" />
                                    <path d="M74.4864 1.22314C71.8479 1.22314 70.3771 2.6905 70.1138 5.58363L70.0791 5.96303H72.4768L72.5028 5.62348C72.5946 4.41945 72.825 3.24487 74.4846 3.24487C76.1443 3.24487 76.2915 4.50607 76.2915 4.8924C76.2915 5.32723 76.1893 5.92492 75.389 6.7097C74.1468 7.93452 73.1663 8.9012 73.1663 10.4708V11.7025H75.0321L75.3768 11.6956L75.3803 11.3508C75.3976 9.89041 75.3976 9.80379 76.5323 8.66906C78.1712 7.0302 78.6476 6.34763 78.6476 4.97902C78.6476 2.73208 76.9758 1.22314 74.4864 1.22314Z" fill="white" />
                                </svg>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--seventh js-content">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>07</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>自動車部品を<br>生み出す人</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>
                                自動車事業部 第三生産技術部<br>
                                シャシー技術三課　柿沼 雅和
                            </p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('interview'); ?>">
                                <svg width="79" height="16" viewBox="0 0 79 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.0148 10.2629C23.5124 11.2209 22.5804 13.0071 21.3313 13.0071C21.0541 13.0071 20.8064 12.9603 20.8064 12.3851C20.8064 12.3176 20.8116 11.9555 20.8982 11.4167L20.9017 11.3976C21.139 9.95627 21.1754 9.73452 21.1754 9.25811C21.1754 8.36072 20.6955 7.31434 19.3442 7.31434C18.4936 7.31434 17.6343 7.7128 16.7993 8.23079C17.5338 6.54168 18.5664 4.55634 19.3806 3.13229L19.5625 2.81526L17.591 1.74463L17.1631 2.82046C16.8495 3.61044 16.678 4.04527 16.4511 4.56153C16.0474 5.5005 14.5073 8.96187 13.383 11.4895C12.8511 12.6866 12.4007 13.6966 12.1876 14.1799L12.0352 14.5229L13.875 15.228L14.0101 14.9144C15.2315 12.0819 15.5208 11.4513 16.4112 10.5609C16.7317 10.2404 17.8474 9.19574 18.7985 9.19574C19.1329 9.19574 19.3078 9.41229 19.3078 9.62365C19.3044 9.73106 19.2039 10.3218 19.1519 10.5799C19.022 11.4046 18.9544 12.1183 18.9544 12.399C18.9544 13.9044 19.8154 14.8399 21.2031 14.8399C21.8545 14.8399 22.5111 14.6217 23.211 14.173C24.337 13.4332 24.8862 12.5566 25.3695 11.7822L25.5081 11.5605L24.2937 9.72759L24.0131 10.2629H24.0148Z" fill="white" />
                                    <path d="M35.0439 5.69637L35.2969 5.65653L35.6468 3.60708L35.0873 3.78552C34.7616 3.88946 34.4255 3.99687 33.3687 4.17358C33.5212 3.75434 33.6355 3.40959 33.9473 2.4377L34.0391 2.15185L32.1318 1.15918L32.0538 1.64772C31.8667 2.81017 31.5583 3.80111 31.34 4.46463C31.1616 4.47502 31.0057 4.47502 30.7216 4.47502C29.6717 4.47502 29.256 4.38667 28.8575 4.27926L28.388 4.15279L28.4694 6.0775L28.7865 6.11735C29.0446 6.15026 29.4327 6.19877 30.1603 6.19877C30.2417 6.19877 30.4305 6.19011 30.732 6.17452C30.7493 6.17452 30.7666 6.17279 30.7857 6.17105C29.4188 9.62029 28.485 10.826 27.8579 11.6368L27.5703 12.0076L29.5123 12.7993L29.6665 12.5273C30.9243 10.3254 31.8996 8.00222 32.6896 5.99261C33.5333 5.8956 34.5658 5.76913 35.0405 5.69464L35.0439 5.69637Z" fill="white" />
                                    <path d="M36.7013 11.7199C36.665 11.3041 36.632 10.9368 36.6026 10.6163C36.5212 9.71548 36.4675 9.11953 36.4675 8.95149C36.4675 8.47507 36.587 8.31049 37.0634 7.90857L37.3856 7.63659L35.9893 6.45508L35.7572 6.6699C35.0936 7.28664 34.5843 7.83581 34.5843 8.82329C34.5843 9.02252 34.6502 9.71375 34.7454 10.6683C34.7662 10.8745 34.7853 11.0737 34.8026 11.2469C34.4076 11.1794 33.9537 11.1118 33.531 11.1118C31.6427 11.1118 30.624 12.2292 30.624 13.2808C30.624 14.4969 31.8488 15.7547 33.9 15.7547C35.9512 15.7547 36.3878 14.4571 36.587 13.5701C37.2401 13.8715 37.6472 14.076 38.2692 14.4519L38.6382 14.6754L39.3155 12.8529L39.0332 12.7091C38.4719 12.4215 37.94 12.1478 36.7031 11.7216L36.7013 11.7199ZM34.8407 13.1855C34.8407 13.9859 34.1322 14.0482 33.9139 14.0482C33.1811 14.0482 32.3304 13.7278 32.3304 13.3137C32.3304 13.0989 32.7237 12.7888 33.434 12.7888C33.9191 12.7888 34.4215 12.8893 34.8407 12.9776V13.1855Z" fill="white" />
                                    <path d="M51.9793 9.5959C52.2479 10.0688 52.454 10.6319 52.454 11.2781C52.454 12.8303 51.1668 14.0014 49.4587 14.0014C47.7505 14.0014 47.0731 12.8113 47.0731 11.6956C47.0731 11.3682 47.1095 10.9385 47.1563 10.5747C47.7401 10.5661 48.8489 10.5227 50.2885 10.2837L50.5432 10.2404L50.8758 8.04192L50.3318 8.2117C49.8207 8.37108 48.906 8.6552 47.3798 8.72623C47.385 8.70024 47.3884 8.67252 47.3936 8.64654C47.4716 8.17012 47.5513 7.67812 47.7245 6.72702C48.2616 6.69411 48.9078 6.63001 50.408 6.35282L50.6783 6.30258L50.8377 4.23581L50.3231 4.41425C49.7428 4.61694 49.1312 4.80578 48.1195 4.90452C48.3239 3.85988 48.5266 3.01273 48.7986 2.33362L48.9441 1.97155L46.4356 1.22314L46.4443 1.70995C46.4581 2.50686 46.3542 3.18077 46.0995 4.80578L46.0839 4.90972C45.5538 4.85602 44.8349 4.74687 43.688 4.37787L43.2358 4.23235L43.1839 6.07564L43.4108 6.16919C44.057 6.43771 44.6478 6.60922 45.7704 6.7097C45.6889 7.25714 45.5521 8.10256 45.4585 8.67252C44.7898 8.62402 44.1488 8.49409 43.5858 8.29313L43.1094 8.12335V10.1849L43.487 10.2629C43.8838 10.346 44.3273 10.4379 45.2021 10.5123C45.1779 10.8346 45.1467 11.259 45.1467 11.6592C45.1467 11.9953 45.2021 13.1733 45.9142 14.2318C46.8358 15.597 48.4937 15.7997 49.4015 15.7997C52.1976 15.7997 54.4723 13.7624 54.4723 11.2573C54.4723 10.1468 54.0652 9.21304 53.613 8.50795L51.9845 9.5907L51.9793 9.5959Z" fill="white" />
                                    <path d="M68.1955 10.2629C67.6931 11.2209 66.761 13.0071 65.512 13.0071C65.2348 13.0071 64.987 12.9603 64.987 12.3851C64.987 12.3176 64.9922 11.9555 65.0789 11.4167L65.0823 11.3976C65.3197 9.95627 65.356 9.73452 65.356 9.25811C65.356 8.36072 64.8762 7.31434 63.5249 7.31434C62.6743 7.31434 61.815 7.7128 60.98 8.23079C61.7145 6.54168 62.747 4.55634 63.5613 3.13229L63.7432 2.81526L61.7717 1.74463L61.3438 2.82046C61.0302 3.61044 60.8587 4.04527 60.6317 4.56153C60.2281 5.5005 58.688 8.96187 57.5636 11.4895C57.0318 12.6866 56.5814 13.6966 56.3683 14.1799L56.2158 14.5229L58.0556 15.228L58.1908 14.9144C59.4121 12.0819 59.7014 11.4513 60.5919 10.5609C60.9124 10.2404 62.0298 9.19747 62.9792 9.19747C63.3135 9.19747 63.4885 9.41403 63.4885 9.62538C63.485 9.73279 63.3846 10.3235 63.3326 10.5817C63.2026 11.4063 63.1351 12.1201 63.1351 12.4007C63.1351 13.9062 63.9961 14.8417 65.3838 14.8417C66.0351 14.8417 66.6917 14.6234 67.3916 14.1747C68.5177 13.435 69.0669 12.5584 69.5502 11.784L69.6888 11.5622L68.4744 9.72933L68.1937 10.2646L68.1955 10.2629Z" fill="white" />
                                    <path d="M36.9431 4.25999L36.7127 4.18896L36.1289 5.57663L36.3818 5.67884C38.1472 6.3874 38.5162 6.54332 39.6873 7.25707L39.9402 7.41125L40.6713 5.8798L40.4582 5.7568C39.4413 5.16778 38.2598 4.66538 36.9449 4.26346L36.9431 4.25999Z" fill="white" />
                                    <path d="M9.76846 0.211355L9.58828 0L8.34961 0.807305L8.59041 1.08969C8.98194 1.55051 9.51899 2.28505 9.84641 2.97109L10.0058 3.30545L11.2687 2.42018L11.118 2.16032C10.8668 1.72895 10.3575 0.90432 9.76846 0.211355Z" fill="white" />
                                    <path d="M2.74241 9.36692C3.97935 8.29109 6.55545 7.10785 9.9943 6.03202L10.2663 5.94713L9.87649 3.85091L9.49536 4.04148C9.12636 4.22511 7.78893 4.82106 6.71484 5.29748C6.07904 5.57986 5.51774 5.82933 5.19724 5.97485C4.64287 5.6994 4.41765 5.24897 4.24788 3.59798C4.23402 3.46112 4.21843 3.07306 4.19937 2.66248C4.17338 2.0544 4.14567 1.42553 4.11622 1.19685L4.0781 0.902344L1.88313 1.01842L1.9559 1.38222C2.09622 2.08731 2.15512 2.4234 2.16378 2.51522L2.19324 2.73524C2.49987 5.06187 2.58303 5.69593 3.43538 6.80641C2.18457 7.463 0 8.80388 0 11.3055C0 12.8421 0.786516 13.542 1.08969 13.8106C1.69777 14.3511 2.27293 14.8621 4.72776 14.8621C6.97643 14.8621 8.66034 14.6352 9.77428 14.4845L10.171 14.4308V12.3449L9.77601 12.4385C9.01548 12.6204 8.63781 12.6966 7.90674 12.7902C6.34756 12.9877 4.67752 13.031 4.43498 13.031C2.82557 13.031 1.8277 12.7122 1.8277 11.1236C1.8277 10.493 2.15859 9.85373 2.74241 9.36519V9.36692Z" fill="white" />
                                    <path d="M8.07603 3.74572L8.23888 4.06102L9.47582 3.25199L9.3303 2.99039C8.98382 2.36846 8.51607 1.57847 7.97036 0.97906L7.78672 0.776367L6.58789 1.56115L7.00194 2.13631C7.76593 3.19655 7.86295 3.33168 8.07603 3.74399V3.74572Z" fill="white" />
                                    <path d="M75.5228 12.6831H73.0264V15.1622H75.5228V12.6831Z" fill="white" />
                                    <path d="M74.4864 1.22314C71.8479 1.22314 70.3771 2.6905 70.1138 5.58363L70.0791 5.96303H72.4768L72.5028 5.62348C72.5946 4.41945 72.825 3.24487 74.4846 3.24487C76.1443 3.24487 76.2915 4.50607 76.2915 4.8924C76.2915 5.32723 76.1893 5.92492 75.389 6.7097C74.1468 7.93452 73.1663 8.9012 73.1663 10.4708V11.7025H75.0321L75.3768 11.6956L75.3803 11.3508C75.3976 9.89041 75.3976 9.80379 76.5323 8.66906C78.1712 7.0302 78.6476 6.34763 78.6476 4.97902C78.6476 2.73208 76.9758 1.22314 74.4864 1.22314Z" fill="white" />
                                </svg>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--eighth js-content">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>08</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>部品加工<br>マネージャー</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>
                                自動車事業部 第二生産技術部<br>
                                新加工技術課　野村 清之
                            </p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('interview'); ?>">
                                <svg width="79" height="16" viewBox="0 0 79 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.0148 10.2629C23.5124 11.2209 22.5804 13.0071 21.3313 13.0071C21.0541 13.0071 20.8064 12.9603 20.8064 12.3851C20.8064 12.3176 20.8116 11.9555 20.8982 11.4167L20.9017 11.3976C21.139 9.95627 21.1754 9.73452 21.1754 9.25811C21.1754 8.36072 20.6955 7.31434 19.3442 7.31434C18.4936 7.31434 17.6343 7.7128 16.7993 8.23079C17.5338 6.54168 18.5664 4.55634 19.3806 3.13229L19.5625 2.81526L17.591 1.74463L17.1631 2.82046C16.8495 3.61044 16.678 4.04527 16.4511 4.56153C16.0474 5.5005 14.5073 8.96187 13.383 11.4895C12.8511 12.6866 12.4007 13.6966 12.1876 14.1799L12.0352 14.5229L13.875 15.228L14.0101 14.9144C15.2315 12.0819 15.5208 11.4513 16.4112 10.5609C16.7317 10.2404 17.8474 9.19574 18.7985 9.19574C19.1329 9.19574 19.3078 9.41229 19.3078 9.62365C19.3044 9.73106 19.2039 10.3218 19.1519 10.5799C19.022 11.4046 18.9544 12.1183 18.9544 12.399C18.9544 13.9044 19.8154 14.8399 21.2031 14.8399C21.8545 14.8399 22.5111 14.6217 23.211 14.173C24.337 13.4332 24.8862 12.5566 25.3695 11.7822L25.5081 11.5605L24.2937 9.72759L24.0131 10.2629H24.0148Z" fill="white" />
                                    <path d="M35.0439 5.69637L35.2969 5.65653L35.6468 3.60708L35.0873 3.78552C34.7616 3.88946 34.4255 3.99687 33.3687 4.17358C33.5212 3.75434 33.6355 3.40959 33.9473 2.4377L34.0391 2.15185L32.1318 1.15918L32.0538 1.64772C31.8667 2.81017 31.5583 3.80111 31.34 4.46463C31.1616 4.47502 31.0057 4.47502 30.7216 4.47502C29.6717 4.47502 29.256 4.38667 28.8575 4.27926L28.388 4.15279L28.4694 6.0775L28.7865 6.11735C29.0446 6.15026 29.4327 6.19877 30.1603 6.19877C30.2417 6.19877 30.4305 6.19011 30.732 6.17452C30.7493 6.17452 30.7666 6.17279 30.7857 6.17105C29.4188 9.62029 28.485 10.826 27.8579 11.6368L27.5703 12.0076L29.5123 12.7993L29.6665 12.5273C30.9243 10.3254 31.8996 8.00222 32.6896 5.99261C33.5333 5.8956 34.5658 5.76913 35.0405 5.69464L35.0439 5.69637Z" fill="white" />
                                    <path d="M36.7013 11.7199C36.665 11.3041 36.632 10.9368 36.6026 10.6163C36.5212 9.71548 36.4675 9.11953 36.4675 8.95149C36.4675 8.47507 36.587 8.31049 37.0634 7.90857L37.3856 7.63659L35.9893 6.45508L35.7572 6.6699C35.0936 7.28664 34.5843 7.83581 34.5843 8.82329C34.5843 9.02252 34.6502 9.71375 34.7454 10.6683C34.7662 10.8745 34.7853 11.0737 34.8026 11.2469C34.4076 11.1794 33.9537 11.1118 33.531 11.1118C31.6427 11.1118 30.624 12.2292 30.624 13.2808C30.624 14.4969 31.8488 15.7547 33.9 15.7547C35.9512 15.7547 36.3878 14.4571 36.587 13.5701C37.2401 13.8715 37.6472 14.076 38.2692 14.4519L38.6382 14.6754L39.3155 12.8529L39.0332 12.7091C38.4719 12.4215 37.94 12.1478 36.7031 11.7216L36.7013 11.7199ZM34.8407 13.1855C34.8407 13.9859 34.1322 14.0482 33.9139 14.0482C33.1811 14.0482 32.3304 13.7278 32.3304 13.3137C32.3304 13.0989 32.7237 12.7888 33.434 12.7888C33.9191 12.7888 34.4215 12.8893 34.8407 12.9776V13.1855Z" fill="white" />
                                    <path d="M51.9793 9.5959C52.2479 10.0688 52.454 10.6319 52.454 11.2781C52.454 12.8303 51.1668 14.0014 49.4587 14.0014C47.7505 14.0014 47.0731 12.8113 47.0731 11.6956C47.0731 11.3682 47.1095 10.9385 47.1563 10.5747C47.7401 10.5661 48.8489 10.5227 50.2885 10.2837L50.5432 10.2404L50.8758 8.04192L50.3318 8.2117C49.8207 8.37108 48.906 8.6552 47.3798 8.72623C47.385 8.70024 47.3884 8.67252 47.3936 8.64654C47.4716 8.17012 47.5513 7.67812 47.7245 6.72702C48.2616 6.69411 48.9078 6.63001 50.408 6.35282L50.6783 6.30258L50.8377 4.23581L50.3231 4.41425C49.7428 4.61694 49.1312 4.80578 48.1195 4.90452C48.3239 3.85988 48.5266 3.01273 48.7986 2.33362L48.9441 1.97155L46.4356 1.22314L46.4443 1.70995C46.4581 2.50686 46.3542 3.18077 46.0995 4.80578L46.0839 4.90972C45.5538 4.85602 44.8349 4.74687 43.688 4.37787L43.2358 4.23235L43.1839 6.07564L43.4108 6.16919C44.057 6.43771 44.6478 6.60922 45.7704 6.7097C45.6889 7.25714 45.5521 8.10256 45.4585 8.67252C44.7898 8.62402 44.1488 8.49409 43.5858 8.29313L43.1094 8.12335V10.1849L43.487 10.2629C43.8838 10.346 44.3273 10.4379 45.2021 10.5123C45.1779 10.8346 45.1467 11.259 45.1467 11.6592C45.1467 11.9953 45.2021 13.1733 45.9142 14.2318C46.8358 15.597 48.4937 15.7997 49.4015 15.7997C52.1976 15.7997 54.4723 13.7624 54.4723 11.2573C54.4723 10.1468 54.0652 9.21304 53.613 8.50795L51.9845 9.5907L51.9793 9.5959Z" fill="white" />
                                    <path d="M68.1955 10.2629C67.6931 11.2209 66.761 13.0071 65.512 13.0071C65.2348 13.0071 64.987 12.9603 64.987 12.3851C64.987 12.3176 64.9922 11.9555 65.0789 11.4167L65.0823 11.3976C65.3197 9.95627 65.356 9.73452 65.356 9.25811C65.356 8.36072 64.8762 7.31434 63.5249 7.31434C62.6743 7.31434 61.815 7.7128 60.98 8.23079C61.7145 6.54168 62.747 4.55634 63.5613 3.13229L63.7432 2.81526L61.7717 1.74463L61.3438 2.82046C61.0302 3.61044 60.8587 4.04527 60.6317 4.56153C60.2281 5.5005 58.688 8.96187 57.5636 11.4895C57.0318 12.6866 56.5814 13.6966 56.3683 14.1799L56.2158 14.5229L58.0556 15.228L58.1908 14.9144C59.4121 12.0819 59.7014 11.4513 60.5919 10.5609C60.9124 10.2404 62.0298 9.19747 62.9792 9.19747C63.3135 9.19747 63.4885 9.41403 63.4885 9.62538C63.485 9.73279 63.3846 10.3235 63.3326 10.5817C63.2026 11.4063 63.1351 12.1201 63.1351 12.4007C63.1351 13.9062 63.9961 14.8417 65.3838 14.8417C66.0351 14.8417 66.6917 14.6234 67.3916 14.1747C68.5177 13.435 69.0669 12.5584 69.5502 11.784L69.6888 11.5622L68.4744 9.72933L68.1937 10.2646L68.1955 10.2629Z" fill="white" />
                                    <path d="M36.9431 4.25999L36.7127 4.18896L36.1289 5.57663L36.3818 5.67884C38.1472 6.3874 38.5162 6.54332 39.6873 7.25707L39.9402 7.41125L40.6713 5.8798L40.4582 5.7568C39.4413 5.16778 38.2598 4.66538 36.9449 4.26346L36.9431 4.25999Z" fill="white" />
                                    <path d="M9.76846 0.211355L9.58828 0L8.34961 0.807305L8.59041 1.08969C8.98194 1.55051 9.51899 2.28505 9.84641 2.97109L10.0058 3.30545L11.2687 2.42018L11.118 2.16032C10.8668 1.72895 10.3575 0.90432 9.76846 0.211355Z" fill="white" />
                                    <path d="M2.74241 9.36692C3.97935 8.29109 6.55545 7.10785 9.9943 6.03202L10.2663 5.94713L9.87649 3.85091L9.49536 4.04148C9.12636 4.22511 7.78893 4.82106 6.71484 5.29748C6.07904 5.57986 5.51774 5.82933 5.19724 5.97485C4.64287 5.6994 4.41765 5.24897 4.24788 3.59798C4.23402 3.46112 4.21843 3.07306 4.19937 2.66248C4.17338 2.0544 4.14567 1.42553 4.11622 1.19685L4.0781 0.902344L1.88313 1.01842L1.9559 1.38222C2.09622 2.08731 2.15512 2.4234 2.16378 2.51522L2.19324 2.73524C2.49987 5.06187 2.58303 5.69593 3.43538 6.80641C2.18457 7.463 0 8.80388 0 11.3055C0 12.8421 0.786516 13.542 1.08969 13.8106C1.69777 14.3511 2.27293 14.8621 4.72776 14.8621C6.97643 14.8621 8.66034 14.6352 9.77428 14.4845L10.171 14.4308V12.3449L9.77601 12.4385C9.01548 12.6204 8.63781 12.6966 7.90674 12.7902C6.34756 12.9877 4.67752 13.031 4.43498 13.031C2.82557 13.031 1.8277 12.7122 1.8277 11.1236C1.8277 10.493 2.15859 9.85373 2.74241 9.36519V9.36692Z" fill="white" />
                                    <path d="M8.07603 3.74572L8.23888 4.06102L9.47582 3.25199L9.3303 2.99039C8.98382 2.36846 8.51607 1.57847 7.97036 0.97906L7.78672 0.776367L6.58789 1.56115L7.00194 2.13631C7.76593 3.19655 7.86295 3.33168 8.07603 3.74399V3.74572Z" fill="white" />
                                    <path d="M75.5228 12.6831H73.0264V15.1622H75.5228V12.6831Z" fill="white" />
                                    <path d="M74.4864 1.22314C71.8479 1.22314 70.3771 2.6905 70.1138 5.58363L70.0791 5.96303H72.4768L72.5028 5.62348C72.5946 4.41945 72.825 3.24487 74.4846 3.24487C76.1443 3.24487 76.2915 4.50607 76.2915 4.8924C76.2915 5.32723 76.1893 5.92492 75.389 6.7097C74.1468 7.93452 73.1663 8.9012 73.1663 10.4708V11.7025H75.0321L75.3768 11.6956L75.3803 11.3508C75.3976 9.89041 75.3976 9.80379 76.5323 8.66906C78.1712 7.0302 78.6476 6.34763 78.6476 4.97902C78.6476 2.73208 76.9758 1.22314 74.4864 1.22314Z" fill="white" />
                                </svg>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--ninth js-content">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>09</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>社内共育の<br>責任者</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>自動車事業部 TPM推進室　渡邉 南美</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('interview'); ?>">
                                <svg width="79" height="16" viewBox="0 0 79 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M24.0148 10.2629C23.5124 11.2209 22.5804 13.0071 21.3313 13.0071C21.0541 13.0071 20.8064 12.9603 20.8064 12.3851C20.8064 12.3176 20.8116 11.9555 20.8982 11.4167L20.9017 11.3976C21.139 9.95627 21.1754 9.73452 21.1754 9.25811C21.1754 8.36072 20.6955 7.31434 19.3442 7.31434C18.4936 7.31434 17.6343 7.7128 16.7993 8.23079C17.5338 6.54168 18.5664 4.55634 19.3806 3.13229L19.5625 2.81526L17.591 1.74463L17.1631 2.82046C16.8495 3.61044 16.678 4.04527 16.4511 4.56153C16.0474 5.5005 14.5073 8.96187 13.383 11.4895C12.8511 12.6866 12.4007 13.6966 12.1876 14.1799L12.0352 14.5229L13.875 15.228L14.0101 14.9144C15.2315 12.0819 15.5208 11.4513 16.4112 10.5609C16.7317 10.2404 17.8474 9.19574 18.7985 9.19574C19.1329 9.19574 19.3078 9.41229 19.3078 9.62365C19.3044 9.73106 19.2039 10.3218 19.1519 10.5799C19.022 11.4046 18.9544 12.1183 18.9544 12.399C18.9544 13.9044 19.8154 14.8399 21.2031 14.8399C21.8545 14.8399 22.5111 14.6217 23.211 14.173C24.337 13.4332 24.8862 12.5566 25.3695 11.7822L25.5081 11.5605L24.2937 9.72759L24.0131 10.2629H24.0148Z" fill="white" />
                                    <path d="M35.0439 5.69637L35.2969 5.65653L35.6468 3.60708L35.0873 3.78552C34.7616 3.88946 34.4255 3.99687 33.3687 4.17358C33.5212 3.75434 33.6355 3.40959 33.9473 2.4377L34.0391 2.15185L32.1318 1.15918L32.0538 1.64772C31.8667 2.81017 31.5583 3.80111 31.34 4.46463C31.1616 4.47502 31.0057 4.47502 30.7216 4.47502C29.6717 4.47502 29.256 4.38667 28.8575 4.27926L28.388 4.15279L28.4694 6.0775L28.7865 6.11735C29.0446 6.15026 29.4327 6.19877 30.1603 6.19877C30.2417 6.19877 30.4305 6.19011 30.732 6.17452C30.7493 6.17452 30.7666 6.17279 30.7857 6.17105C29.4188 9.62029 28.485 10.826 27.8579 11.6368L27.5703 12.0076L29.5123 12.7993L29.6665 12.5273C30.9243 10.3254 31.8996 8.00222 32.6896 5.99261C33.5333 5.8956 34.5658 5.76913 35.0405 5.69464L35.0439 5.69637Z" fill="white" />
                                    <path d="M36.7013 11.7199C36.665 11.3041 36.632 10.9368 36.6026 10.6163C36.5212 9.71548 36.4675 9.11953 36.4675 8.95149C36.4675 8.47507 36.587 8.31049 37.0634 7.90857L37.3856 7.63659L35.9893 6.45508L35.7572 6.6699C35.0936 7.28664 34.5843 7.83581 34.5843 8.82329C34.5843 9.02252 34.6502 9.71375 34.7454 10.6683C34.7662 10.8745 34.7853 11.0737 34.8026 11.2469C34.4076 11.1794 33.9537 11.1118 33.531 11.1118C31.6427 11.1118 30.624 12.2292 30.624 13.2808C30.624 14.4969 31.8488 15.7547 33.9 15.7547C35.9512 15.7547 36.3878 14.4571 36.587 13.5701C37.2401 13.8715 37.6472 14.076 38.2692 14.4519L38.6382 14.6754L39.3155 12.8529L39.0332 12.7091C38.4719 12.4215 37.94 12.1478 36.7031 11.7216L36.7013 11.7199ZM34.8407 13.1855C34.8407 13.9859 34.1322 14.0482 33.9139 14.0482C33.1811 14.0482 32.3304 13.7278 32.3304 13.3137C32.3304 13.0989 32.7237 12.7888 33.434 12.7888C33.9191 12.7888 34.4215 12.8893 34.8407 12.9776V13.1855Z" fill="white" />
                                    <path d="M51.9793 9.5959C52.2479 10.0688 52.454 10.6319 52.454 11.2781C52.454 12.8303 51.1668 14.0014 49.4587 14.0014C47.7505 14.0014 47.0731 12.8113 47.0731 11.6956C47.0731 11.3682 47.1095 10.9385 47.1563 10.5747C47.7401 10.5661 48.8489 10.5227 50.2885 10.2837L50.5432 10.2404L50.8758 8.04192L50.3318 8.2117C49.8207 8.37108 48.906 8.6552 47.3798 8.72623C47.385 8.70024 47.3884 8.67252 47.3936 8.64654C47.4716 8.17012 47.5513 7.67812 47.7245 6.72702C48.2616 6.69411 48.9078 6.63001 50.408 6.35282L50.6783 6.30258L50.8377 4.23581L50.3231 4.41425C49.7428 4.61694 49.1312 4.80578 48.1195 4.90452C48.3239 3.85988 48.5266 3.01273 48.7986 2.33362L48.9441 1.97155L46.4356 1.22314L46.4443 1.70995C46.4581 2.50686 46.3542 3.18077 46.0995 4.80578L46.0839 4.90972C45.5538 4.85602 44.8349 4.74687 43.688 4.37787L43.2358 4.23235L43.1839 6.07564L43.4108 6.16919C44.057 6.43771 44.6478 6.60922 45.7704 6.7097C45.6889 7.25714 45.5521 8.10256 45.4585 8.67252C44.7898 8.62402 44.1488 8.49409 43.5858 8.29313L43.1094 8.12335V10.1849L43.487 10.2629C43.8838 10.346 44.3273 10.4379 45.2021 10.5123C45.1779 10.8346 45.1467 11.259 45.1467 11.6592C45.1467 11.9953 45.2021 13.1733 45.9142 14.2318C46.8358 15.597 48.4937 15.7997 49.4015 15.7997C52.1976 15.7997 54.4723 13.7624 54.4723 11.2573C54.4723 10.1468 54.0652 9.21304 53.613 8.50795L51.9845 9.5907L51.9793 9.5959Z" fill="white" />
                                    <path d="M68.1955 10.2629C67.6931 11.2209 66.761 13.0071 65.512 13.0071C65.2348 13.0071 64.987 12.9603 64.987 12.3851C64.987 12.3176 64.9922 11.9555 65.0789 11.4167L65.0823 11.3976C65.3197 9.95627 65.356 9.73452 65.356 9.25811C65.356 8.36072 64.8762 7.31434 63.5249 7.31434C62.6743 7.31434 61.815 7.7128 60.98 8.23079C61.7145 6.54168 62.747 4.55634 63.5613 3.13229L63.7432 2.81526L61.7717 1.74463L61.3438 2.82046C61.0302 3.61044 60.8587 4.04527 60.6317 4.56153C60.2281 5.5005 58.688 8.96187 57.5636 11.4895C57.0318 12.6866 56.5814 13.6966 56.3683 14.1799L56.2158 14.5229L58.0556 15.228L58.1908 14.9144C59.4121 12.0819 59.7014 11.4513 60.5919 10.5609C60.9124 10.2404 62.0298 9.19747 62.9792 9.19747C63.3135 9.19747 63.4885 9.41403 63.4885 9.62538C63.485 9.73279 63.3846 10.3235 63.3326 10.5817C63.2026 11.4063 63.1351 12.1201 63.1351 12.4007C63.1351 13.9062 63.9961 14.8417 65.3838 14.8417C66.0351 14.8417 66.6917 14.6234 67.3916 14.1747C68.5177 13.435 69.0669 12.5584 69.5502 11.784L69.6888 11.5622L68.4744 9.72933L68.1937 10.2646L68.1955 10.2629Z" fill="white" />
                                    <path d="M36.9431 4.25999L36.7127 4.18896L36.1289 5.57663L36.3818 5.67884C38.1472 6.3874 38.5162 6.54332 39.6873 7.25707L39.9402 7.41125L40.6713 5.8798L40.4582 5.7568C39.4413 5.16778 38.2598 4.66538 36.9449 4.26346L36.9431 4.25999Z" fill="white" />
                                    <path d="M9.76846 0.211355L9.58828 0L8.34961 0.807305L8.59041 1.08969C8.98194 1.55051 9.51899 2.28505 9.84641 2.97109L10.0058 3.30545L11.2687 2.42018L11.118 2.16032C10.8668 1.72895 10.3575 0.90432 9.76846 0.211355Z" fill="white" />
                                    <path d="M2.74241 9.36692C3.97935 8.29109 6.55545 7.10785 9.9943 6.03202L10.2663 5.94713L9.87649 3.85091L9.49536 4.04148C9.12636 4.22511 7.78893 4.82106 6.71484 5.29748C6.07904 5.57986 5.51774 5.82933 5.19724 5.97485C4.64287 5.6994 4.41765 5.24897 4.24788 3.59798C4.23402 3.46112 4.21843 3.07306 4.19937 2.66248C4.17338 2.0544 4.14567 1.42553 4.11622 1.19685L4.0781 0.902344L1.88313 1.01842L1.9559 1.38222C2.09622 2.08731 2.15512 2.4234 2.16378 2.51522L2.19324 2.73524C2.49987 5.06187 2.58303 5.69593 3.43538 6.80641C2.18457 7.463 0 8.80388 0 11.3055C0 12.8421 0.786516 13.542 1.08969 13.8106C1.69777 14.3511 2.27293 14.8621 4.72776 14.8621C6.97643 14.8621 8.66034 14.6352 9.77428 14.4845L10.171 14.4308V12.3449L9.77601 12.4385C9.01548 12.6204 8.63781 12.6966 7.90674 12.7902C6.34756 12.9877 4.67752 13.031 4.43498 13.031C2.82557 13.031 1.8277 12.7122 1.8277 11.1236C1.8277 10.493 2.15859 9.85373 2.74241 9.36519V9.36692Z" fill="white" />
                                    <path d="M8.07603 3.74572L8.23888 4.06102L9.47582 3.25199L9.3303 2.99039C8.98382 2.36846 8.51607 1.57847 7.97036 0.97906L7.78672 0.776367L6.58789 1.56115L7.00194 2.13631C7.76593 3.19655 7.86295 3.33168 8.07603 3.74399V3.74572Z" fill="white" />
                                    <path d="M75.5228 12.6831H73.0264V15.1622H75.5228V12.6831Z" fill="white" />
                                    <path d="M74.4864 1.22314C71.8479 1.22314 70.3771 2.6905 70.1138 5.58363L70.0791 5.96303H72.4768L72.5028 5.62348C72.5946 4.41945 72.825 3.24487 74.4846 3.24487C76.1443 3.24487 76.2915 4.50607 76.2915 4.8924C76.2915 5.32723 76.1893 5.92492 75.389 6.7097C74.1468 7.93452 73.1663 8.9012 73.1663 10.4708V11.7025H75.0321L75.3768 11.6956L75.3803 11.3508C75.3976 9.89041 75.3976 9.80379 76.5323 8.66906C78.1712 7.0302 78.6476 6.34763 78.6476 4.97902C78.6476 2.73208 76.9758 1.22314 74.4864 1.22314Z" fill="white" />
                                </svg>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.p-staff -->
    </div>

    <section id="features" class="p-features">
        <div class="p-features__title c-title c-title--blue ">
            <div class="c-title__bar js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-blue.svg'); ?>" alt="">
            </div>
            <h2>TOA Features</h2>
            <div class="c-title__bar js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-blue.svg'); ?>" alt="">
            </div>
        </div>
        <div class="p-features__outer">
            <div class="p-features__inner c-inner c-inner--narrow">
                <div class="p-features__slogan">
                    <p>可能性を引き出すために、そんなもんはやらない。</p>
                    <picture>
                        <source
                            srcset="<?php echo theme_url('images/top/10-of-not-sp.svg'); ?>"
                            media="(max-width: 768px)" />
                        <img src="<?php echo theme_url('images/top/10-of-not.svg'); ?>" alt="10のNOT">
                    </picture>
                </div>
                <ol class="p-features__list p-features__list--first">
                    <li class="p-features__item p-features__item--first">
                        <button class="p-features__itemTrigger" data-micromodal-trigger="modal-01">
                            <div class="p-features__itemNumber">
                                <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                                <span>01</span>
                            </div>
                            <h3 class="p-features__itemTitle p-features__itemTitle--first js-slideIn">
                                放ったらかし
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/common/not-bar-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img class="c-not not-svg-staff" src="<?php echo theme_url('images/common/not-bar-normal.svg'); ?>" alt="not">
                                </picture>
                            </h3>
                            <div class="p-features__itemMore">
                                <p>MORE</p>
                            </div>
                        </button>
                    </li>
                    <li class="p-features__item p-features__item--second">
                        <button class="p-features__itemTrigger" data-micromodal-trigger="modal-02">
                            <div class="p-features__itemNumber">
                                <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                                <span>02</span>
                            </div>
                            <h3 class="p-features__itemTitle p-features__itemTitle--second js-slideIn">
                                文系理系指定
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/common/not-bar-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img class="c-not not-svg-staff" src="<?php echo theme_url('images/common/not-bar-normal.svg'); ?>" alt="not">
                                </picture>
                            </h3>
                            <div class="p-features__itemMore">
                                <p>MORE</p>
                            </div>
                        </button>
                    </li>
                </ol>
                <ol class="p-features__list p-features__list--second">
                    <li class="p-features__item p-features__item--large">
                        <button class="p-features__itemTrigger" data-micromodal-trigger="modal-03">
                            <div class="p-features__itemNumber">
                                <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                                <span>03</span>
                            </div>
                            <h3 class="p-features__itemTitle p-features__itemTitle--large js-slideIn">
                                賞与カット
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/common/not-bar-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img class="c-not not-svg-staff" src="<?php echo theme_url('images/common/not-bar-large.svg'); ?>" alt="not">
                                </picture>
                            </h3>
                            <div class="p-features__itemMore">
                                <p>MORE</p>
                            </div>
                        </button>
                    </li>
                    <li class="p-features__item p-features__item--small">
                        <button class="p-features__itemTrigger" data-micromodal-trigger="modal-04">
                            <div class="p-features__itemNumber">
                                <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                                <span>04</span>
                            </div>
                            <h3 class="p-features__itemTitle p-features__itemTitle--small js-slideIn">
                                社歴・年齢
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/common/not-bar-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img class="c-not not-svg-staff" src="<?php echo theme_url('images/common/not-bar-small.svg'); ?>" alt="not">
                                </picture>
                            </h3>
                            <div class="p-features__itemMore">
                                <p>MORE</p>
                            </div>
                        </button>
                    </li>
                    <li class="p-features__item p-features__item--middle">
                        <button class="p-features__itemTrigger" data-micromodal-trigger="modal-05">
                            <div class="p-features__itemNumber">
                                <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                                <span>05</span>
                            </div>
                            <h3 class="p-features__itemTitle p-features__itemTitle--middle js-slideIn">
                                単純労働
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/common/not-bar-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img class="c-not not-svg-staff" src="<?php echo theme_url('images/common/not-bar-small.svg'); ?>" alt="not">
                                </picture>
                            </h3>
                            <div class="p-features__itemMore">
                                <p>MORE</p>
                            </div>
                        </button>
                    </li>
                </ol>

                <ol class="p-features__list p-features__list--first">
                    <li class="p-features__item p-features__item--first">
                        <button class="p-features__itemTrigger" data-micromodal-trigger="modal-06">
                            <div class="p-features__itemNumber">
                                <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                                <span>06</span>
                            </div>
                            <h3 class="p-features__itemTitle p-features__itemTitle--first js-slideIn">
                                キャリアの不安
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/common/not-bar-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img class="c-not not-svg-staff" src="<?php echo theme_url('images/common/not-bar-normal.svg'); ?>" alt="not">
                                </picture>
                            </h3>
                            <div class="p-features__itemMore">
                                <p>MORE</p>
                            </div>
                        </button>
                    </li>
                    <li class="p-features__item p-features__item--second">
                        <button class="p-features__itemTrigger" data-micromodal-trigger="modal-07">
                            <div class="p-features__itemNumber">
                                <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                                <span>07</span>
                            </div>
                            <h3 class="p-features__itemTitle p-features__itemTitle--second js-slideIn">
                                薄い福利厚生
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/common/not-bar-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img class="c-not not-svg-staff" src="<?php echo theme_url('images/common/not-bar-normal.svg'); ?>" alt="not">
                                </picture>
                            </h3>
                            <div class="p-features__itemMore">
                                <p>MORE</p>
                            </div>
                        </button>
                    </li>
                </ol>
                <ol class="p-features__list p-features__list--second">
                    <li class="p-features__item p-features__item--small">
                        <button class="p-features__itemTrigger" data-micromodal-trigger="modal-08">
                            <div class="p-features__itemNumber">
                                <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                                <span>08</span>
                            </div>
                            <h3 class="p-features__itemTitle p-features__itemTitle--small js-slideIn">
                                やる気ゼロ
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/common/not-bar-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img class="c-not not-svg-staff" src="<?php echo theme_url('images/common/not-bar-small.svg'); ?>" alt="not">
                                </picture>
                            </h3>
                            <div class="p-features__itemMore">
                                <p>MORE</p>
                            </div>
                        </button>
                    </li>
                    <li class="p-features__item p-features__item--middle">
                        <button class="p-features__itemTrigger" data-micromodal-trigger="modal-09">
                            <div class="p-features__itemNumber">
                                <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                                <span>09</span>
                            </div>
                            <h3 class="p-features__itemTitle p-features__itemTitle--middle js-slideIn">
                                休めない
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/common/not-bar-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img class="c-not not-svg-staff" src="<?php echo theme_url('images/common/not-bar-small.svg'); ?>" alt="not">
                                </picture>
                            </h3>
                            <div class="p-features__itemMore">
                                <p>MORE</p>
                            </div>
                        </button>
                    </li>
                    <li class="p-features__item p-features__item--large">
                        <button class="p-features__itemTrigger" data-micromodal-trigger="modal-10">
                            <div class="p-features__itemNumber">
                                <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                                <span>10</span>
                            </div>
                            <h3 class="p-features__itemTitle p-features__itemTitle--large js-slideIn">
                                突然のリストラ
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/common/not-bar-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img class="c-not not-svg-staff" src="<?php echo theme_url('images/common/not-bar-normal.svg'); ?>" alt="not">
                                </picture>
                            </h3>
                            <div class="p-features__itemMore">
                                <p>MORE</p>
                            </div>
                        </button>
                    </li>
                </ol>
            </div>
        </div>

        <!-- モーダル -->
        <div id="modal-01" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-01-title">
                    <header class="p-modal__header">
                        <div class="p-modal__number">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>01</span>
                        </div>
                        <h3 class="p-modal__title" id="modal-01-title">
                            放ったらかし
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-modal-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="js-not-modal" src="<?php echo theme_url('images/top/not-bar-modal.svg'); ?>" alt="not">
                            </picture>
                        </h3>
                        <button class="p-modal__close" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content" id="modal-01-content">
                        <div class="p-modal__texts">
                            <h4>人材は人財。<br class="u-tb-sp-only">人を第一に考えています。</h4>
                            <p>
                                TOAは創業から一度もリストラをしたことがありません。<br class="u-pc-tb-only">縁あって入社した社員には、できる限り長く活躍してほしいと願っています。<br class="u-pc-tb-only">社会の高齢化で、年金を受給できる年齢が徐々に繰り上げられるなか、<br class="u-pc-tb-only">社員の働き方を工夫して70歳まで働ける環境づくりを進めています。
                            </p>
                        </div>
                    </div>
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev js-pagination-btn" data-micromodal-trigger="modal-10">
                        </button>

                        <button class="p-modal__next js-pagination-btn" data-micromodal-trigger="modal-02">
                        </button>
                    </div>
                </div>
            </div>
        </div>

        <div id="modal-02" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-02-title">
                    <header class="p-modal__header">
                        <div class="p-modal__number">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>02</span>
                        </div>
                        <h3 class="p-modal__title" id="modal-02-title">
                            文系理系指定
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-modal-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="js-not-modal" src="<?php echo theme_url('images/top/not-bar-modal.svg'); ?>" alt="not">
                            </picture>
                        </h3>
                        <button class="p-modal__close" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content" id="modal-02-content">
                        <div class="p-modal__texts">
                            <h4>人材は人財。<br class="u-tb-sp-only">人を第一に考えています。</h4>
                            <p>
                                TOAは創業から一度もリストラをしたことがありません。<br class="u-pc-tb-only">縁あって入社した社員には、できる限り長く活躍してほしいと願っています。<br class="u-pc-tb-only">社会の高齢化で、年金を受給できる年齢が徐々に繰り上げられるなか、<br class="u-pc-tb-only">社員の働き方を工夫して70歳まで働ける環境づくりを進めています。
                            </p>
                        </div>
                    </div>
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev js-pagination-btn" data-micromodal-trigger="modal-01">
                        </button>

                        <button class="p-modal__next js-pagination-btn" data-micromodal-trigger="modal-03">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-03" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-03-title">
                    <header class="p-modal__header">
                        <div class="p-modal__number">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>03</span>
                        </div>
                        <h3 class="p-modal__title" id="modal-03-title">
                            賞与カット
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-modal-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="js-not-modal" src="<?php echo theme_url('images/top/not-bar-modal.svg'); ?>" alt="not">
                            </picture>
                        </h3>
                        <button class="p-modal__close" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content" id="modal-03-content">
                        <div class="p-modal__texts">
                            <h4>人材は人財。<br class="u-tb-sp-only">人を第一に考えています。</h4>
                            <p>
                                TOAは創業から一度もリストラをしたことがありません。<br class="u-pc-tb-only">縁あって入社した社員には、できる限り長く活躍してほしいと願っています。<br class="u-pc-tb-only">社会の高齢化で、年金を受給できる年齢が徐々に繰り上げられるなか、<br class="u-pc-tb-only">社員の働き方を工夫して70歳まで働ける環境づくりを進めています。
                            <p>
                        </div>
                    </div>
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev js-pagination-btn" data-micromodal-trigger="modal-02">
                        </button>

                        <button class="p-modal__next js-pagination-btn" data-micromodal-trigger="modal-04">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-04" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-04-title">
                    <header class="p-modal__header">
                        <div class="p-modal__number">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>04</span>
                        </div>
                        <h3 class="p-modal__title" id="modal-04-title">
                            社歴・年齢
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-modal-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="js-not-modal" src="<?php echo theme_url('images/top/not-bar-modal.svg'); ?>" alt="not">
                            </picture>
                        </h3>
                        <button class="p-modal__close" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content" id="modal-04-content">
                        <div class="p-modal__texts">
                            <h4>人材は人財。<br class="u-tb-sp-only">人を第一に考えています。</h4>
                            <p>
                                TOAは創業から一度もリストラをしたことがありません。<br class="u-pc-tb-only">縁あって入社した社員には、できる限り長く活躍してほしいと願っています。<br class="u-pc-tb-only">社会の高齢化で、年金を受給できる年齢が徐々に繰り上げられるなか、<br class="u-pc-tb-only">社員の働き方を工夫して70歳まで働ける環境づくりを進めています。
                            </p>
                        </div>
                    </div>
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev js-pagination-btn" data-micromodal-trigger="modal-03">
                        </button>

                        <button class="p-modal__next js-pagination-btn" data-micromodal-trigger="modal-05">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-05" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-05-title">
                    <header class="p-modal__header">
                        <div class="p-modal__number">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>05</span>
                        </div>
                        <h3 class="p-modal__title" id="modal-05-title">
                            単純労働
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-modal-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="js-not-modal" src="<?php echo theme_url('images/top/not-bar-modal.svg'); ?>" alt="not">
                            </picture>
                        </h3>
                        <button class="p-modal__close" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content" id="modal-05-content">
                        <div class="p-modal__texts">
                            <h4>人材は人財。<br class="u-tb-sp-only">人を第一に考えています。</h4>
                            <p>
                                TOAは創業から一度もリストラをしたことがありません。<br class="u-pc-tb-only">縁あって入社した社員には、できる限り長く活躍してほしいと願っています。<br class="u-pc-tb-only">社会の高齢化で、年金を受給できる年齢が徐々に繰り上げられるなか、<br class="u-pc-tb-only">社員の働き方を工夫して70歳まで働ける環境づくりを進めています。
                            </p>
                        </div>
                    </div>
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev js-pagination-btn" data-micromodal-trigger="modal-04">
                        </button>

                        <button class="p-modal__next js-pagination-btn" data-micromodal-trigger="modal-06">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-06" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-06-title">
                    <header class="p-modal__header">
                        <div class="p-modal__number">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>06</span>
                        </div>
                        <h3 class="p-modal__title" id="modal-06-title">
                            キャリアの不安
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-modal-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="js-not-modal" src="<?php echo theme_url('images/top/not-bar-modal.svg'); ?>" alt="not">
                            </picture>
                        </h3>
                        <button class="p-modal__close" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content" id="modal-06-content">
                        <div class="p-modal__texts">
                            <h4>人材は人財。<br class="u-tb-sp-only">人を第一に考えています。</h4>
                            <p>
                                TOAは創業から一度もリストラをしたことがありません。<br class="u-pc-tb-only">縁あって入社した社員には、できる限り長く活躍してほしいと願っています。<br class="u-pc-tb-only">社会の高齢化で、年金を受給できる年齢が徐々に繰り上げられるなか、<br class="u-pc-tb-only">社員の働き方を工夫して70歳まで働ける環境づくりを進めています。
                            <p>
                        </div>
                    </div>
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev js-pagination-btn" data-micromodal-trigger="modal-05">
                        </button>

                        <button class="p-modal__next js-pagination-btn" data-micromodal-trigger="modal-07">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-07" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-07-title">
                    <header class="p-modal__header">
                        <div class="p-modal__number">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>07</span>
                        </div>
                        <h3 class="p-modal__title" id="modal-07-title">
                            薄い福利厚生
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-modal-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="js-not-modal" src="<?php echo theme_url('images/top/not-bar-modal.svg'); ?>" alt="not">
                            </picture>
                        </h3>
                        <button class="p-modal__close" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content" id="modal-07-content">
                        <div class="p-modal__texts">
                            <h4>人材は人財。<br class="u-tb-sp-only">人を第一に考えています。</h4>
                            <p>
                                TOAは創業から一度もリストラをしたことがありません。<br class="u-pc-tb-only">縁あって入社した社員には、できる限り長く活躍してほしいと願っています。<br class="u-pc-tb-only">社会の高齢化で、年金を受給できる年齢が徐々に繰り上げられるなか、<br class="u-pc-tb-only">社員の働き方を工夫して70歳まで働ける環境づくりを進めています。
                            </p>
                        </div>

                    </div>
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev js-pagination-btn" data-micromodal-trigger="modal-06">
                        </button>
                        <button class="p-modal__next js-pagination-btn" data-micromodal-trigger="modal-08">
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-08" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-08-title">
                    <header class="p-modal__header">
                        <div class="p-modal__number">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>08</span>
                        </div>
                        <h3 class="p-modal__title" id="modal-08-title">
                            やる気ゼロ
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-modal-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="js-not-modal" src="<?php echo theme_url('images/top/not-bar-modal.svg'); ?>" alt="not">
                            </picture>
                        </h3>
                        <button class="p-modal__close" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content" id="modal-08-content">
                        <div class="p-modal__texts">
                            <h4>人材は人財。<br class="u-tb-sp-only">人を第一に考えています。</h4>
                            <p>
                                TOAは創業から一度もリストラをしたことがありません。<br class="u-pc-tb-only">縁あって入社した社員には、できる限り長く活躍してほしいと願っています。<br class="u-pc-tb-only">社会の高齢化で、年金を受給できる年齢が徐々に繰り上げられるなか、<br class="u-pc-tb-only">社員の働き方を工夫して70歳まで働ける環境づくりを進めています。

                            </p>
                        </div>
                    </div>
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev js-pagination-btn" data-micromodal-trigger="modal-07">

                        </button>

                        <button class="p-modal__next js-pagination-btn" data-micromodal-trigger="modal-09">

                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-09" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-09-title">
                    <header class="p-modal__header">
                        <div class="p-modal__number">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>09</span>
                        </div>
                        <h3 class="p-modal__title" id="modal-09-title">
                            休めない
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-modal-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="js-not-modal" src="<?php echo theme_url('images/top/not-bar-modal.svg'); ?>" alt="not">
                            </picture>
                        </h3>
                        <button class="p-modal__close" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content" id="modal-09-content">
                        <div class="p-modal__texts">
                            <h4>人材は人財。<br class="u-tb-sp-only">人を第一に考えています。</h4>
                            <p>
                                TOAは創業から一度もリストラをしたことがありません。<br class="u-pc-tb-only">縁あって入社した社員には、できる限り長く活躍してほしいと願っています。<br class="u-pc-tb-only">社会の高齢化で、年金を受給できる年齢が徐々に繰り上げられるなか、<br class="u-pc-tb-only">社員の働き方を工夫して70歳まで働ける環境づくりを進めています。
                            </p>
                        </div>
                    </div>
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev js-pagination-btn" data-micromodal-trigger="modal-08">

                        </button>

                        <button class="p-modal__next js-pagination-btn" data-micromodal-trigger="modal-10">

                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div id="modal-10" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-10-title">
                    <header class="p-modal__header">
                        <div class="p-modal__number">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>10</span>
                        </div>
                        <h3 class="p-modal__title" id="modal-10-title">
                            突然のリストラ
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-modal-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="js-not-modal" src="<?php echo theme_url('images/top/not-bar-modal.svg'); ?>" alt="not">
                            </picture>
                        </h3>
                        <button class="p-modal__close" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content" id="modal-10-content">
                        <div class="p-modal__texts">
                            <h4>人材は人財。<br class="u-tb-sp-only">人を第一に考えています。</h4>
                            <p>
                                TOAは創業から一度もリストラをしたことがありません。<br class="u-pc-tb-only">縁あって入社した社員には、できる限り長く活躍してほしいと願っています。<br class="u-pc-tb-only">社会の高齢化で、年金を受給できる年齢が徐々に繰り上げられるなか、<br class="u-pc-tb-only">社員の働き方を工夫して70歳まで働ける環境づくりを進めています。
                            </p>
                        </div>
                    </div>
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev js-pagination-btn" data-micromodal-trigger="modal-09">

                        </button>

                        <button class="p-modal__next js-pagination-btn" data-micromodal-trigger="modal-01">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.features -->
    <!-- </div> -->

    <section class="p-fields">
        <div class="p-fields__top">
            <div class="p-fields__title c-title ">
                <div class="c-title__bar js-bar-first">
                    <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
                </div>
                <h2>Career Fields</h2>
                <div class="c-title__bar js-bar-last">
                    <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
                </div>
            </div>

            <div class="p-fields__slogan">
                <picture>
                    <source
                        srcset="<?php echo theme_url('images/top/fields-slogan-sp.svg'); ?>"
                        media="(max-width: 768px)" />
                    <img src="<?php echo theme_url('images/top/fields-slogan-pc.svg'); ?>" alt="あなたの力を引き出すフィールドがある">
                </picture>
            </div>
            <div class="p-fields__topButton">
                <a href="<?php echo home_url('job_list'); ?>">
                    <span>活躍したい分野から職種を探す</span>
                </a>
            </div>
        </div>

        <div class="p-fields__content">
            <div class="p-fields__inner">
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'career',
                    'posts_per_page' => -1,
                    'paged' => $paged,
                    'orderby' => 'post_date',
                    'order' => 'ASC',
                    'post_status' => 'publish',
                );
                $job_query = new WP_Query($args);
                ?>
                <?php if ($job_query->have_posts()): ?>
                    <ul class="p-fields__list">
                        <?php while ($job_query->have_posts()) : $job_query->the_post(); ?>
                            <li class="p-fields__item">
                                <?php $post_id = get_the_id(); ?>
                                <div class="p-fields__itemTitle">
                                    <h3>
                                        <?php the_field('career_name'); ?>
                                    </h3>
                                </div>
                                <picture class="p-fields__field">
                                    <source
                                        srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="フィールド">
                                </picture>
                                <div class="p-fields__itemText">
                                    <p>
                                        <?php echo nl2br(get_field('career_text')); ?>
                                    </p>
                                </div>
                                <button class="p-fields__itemButton" data-micromodal-trigger="link-<?php the_ID(); ?>">
                                    <span>More</span>
                                    <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                                    </svg>
                                </button>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php else : ?>
                    <p>フィールドがありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <div class="p-fields__button c-button">
                    <a href="<?php echo home_url('job_list'); ?>">
                        <span class="is-ja">職種一覧へ</span>
                        <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.7832 2.50013L-0.00265767 4.92663L-0.00265743 0.0736237L4.7832 2.50013Z" fill="#15327e" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <?php
        $args = array(
            'post_type' => 'career',
            'paged' => $paged,
            'posts_per_page' => -1,
            'post_date' => 'DESC',
            'post_status' => 'publish',
        );
        $card_query = new WP_Query($args);
        ?>
        <?php if ($card_query->have_posts()): ?>
            <?php while ($card_query->have_posts()) : $card_query->the_post(); ?>
                <?php $post_id = get_the_ID(); ?>
                <div id="link-<?php the_ID(); ?>" class="p-modal" aria-hidden="true">
                    <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                        <div class="p-modal__container p-modal__container--job" role="dialog" aria-modal="true" aria-labelledby="link-<?php the_ID(); ?>-title">
                            <header class="p-modal__header">
                                <h3 class="p-modal__title p-modal__title--job" id="modal-<?php the_ID(); ?>-title">
                                    <?php the_field('career_name'); ?>
                                </h3>
                                <picture class="p-modal__field">
                                    <source
                                        srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="フィールド">
                                </picture>
                                <button class="p-modal__close p-modal__close--job" aria-label="Close modal" data-micromodal-close>
                                    <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                        <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                                    </svg>
                                </button>
                            </header>
                            <div class="p-modal__content p-modal__content--job" id="link-<?php the_ID(); ?>-content">
                                <div class="p-modal__text">
                                    <p class="u-pc-tb-only">
                                        <?php the_field('career_text'); ?>
                                    </p>
                                    <p class="u-tb-sp-only">
                                        <?php echo nl2br(get_field('career_text')); ?>
                                    </p>
                                </div>
                            </div>
                            <?php
                            $career_id = get_the_ID();

                            // チェックボックスで選択された項目を取得
                            $selected_categories = get_field('job_category', $career_id);

                            if ($selected_categories) :
                            ?>
                                <ul class="p-modal__cards">
                                    <?php
                                    foreach ($selected_categories as $category):
                                        $category_name = $category['value'];

                                        $args = [
                                            'post_type'      => 'job_list', // カスタム投稿タイプ名
                                            'posts_per_page' => 1, // 1つの投稿を取得
                                            'meta_query'     => [
                                                [
                                                    'key'     => 'job_title', // ACFのフィールド名
                                                    'value'   => $category_name, // チェックボックスで選択された値
                                                    'compare' => '=' // 完全一致
                                                ]
                                            ]
                                        ];
                                        $job_query = new WP_Query($args);

                                        if ($job_query->have_posts()):
                                            while ($job_query->have_posts()): $job_query->the_post();
                                                // ACFフィールド値を取得
                                                $job_title = get_field('job_title');
                                                $job_english_title = get_field('job_english_title');
                                                $job_description = get_field('job_description');
                                                $job_icon = get_field('job_icon'); // 画像
                                    ?>
                                                <li class="c-card c-card--modal">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <div class="c-card__inner">
                                                            <div class="c-card__topWrapper">
                                                                <div class="c-card__image c-card__image--modal">
                                                                    <?php if ($job_icon && is_array($job_icon)): ?>
                                                                        <img src="<?php echo esc_url($job_icon['url']); ?>" alt="<?php echo esc_attr($job_icon['alt']); ?>">
                                                                    <?php endif; ?>
                                                                </div>
                                                                <div class="c-card__title c-card__title--modal u-tb-sp-only">
                                                                    <h3>
                                                                        <?php
                                                                        echo esc_html($job_title);
                                                                        ?>
                                                                    </h3>
                                                                    <p class="is-modal">
                                                                        <?php
                                                                        echo esc_html($job_english_title);
                                                                        ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                            <div class="c-card__texts c-card__texts--modal">
                                                                <div class="c-card__title c-card__title--modal u-pc-tb-only">
                                                                    <h3>
                                                                        <?php
                                                                        echo esc_html($job_title);
                                                                        ?>
                                                                    </h3>
                                                                    <p>
                                                                        <?php
                                                                        echo esc_html($job_english_title);
                                                                        ?>
                                                                    </p>
                                                                </div>
                                                                <span class="c-card__circle c-card__circle--modal">
                                                                </span>
                                                                <div class="c-card__text c-card__text--modal">
                                                                    <p>
                                                                        <?php
                                                                        if (mb_strlen($job_description) > 50) {
                                                                            $text = mb_substr($job_description, 0, 49);
                                                                            echo $text . '…';
                                                                        } else {
                                                                            echo esc_html($job_description);
                                                                        }
                                                                        ?>
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                            <?php endwhile;
                                            wp_reset_postdata(); ?>
                                        <?php endif; ?>
                                    <?php endforeach; ?>
                                </ul>
                            <?php endif; ?>
                        </div>
                    </div>
                </div>
            <?php endwhile;
            wp_reset_postdata(); ?>
        <?php endif; ?>
    </section>
    <!-- /.p-fields -->

    <section class="p-top-message">
        <div class="p-top-message__title c-title ">
            <div class="c-title__bar js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
            <h2>Top Message</h2>
            <div class="c-title__bar js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
        </div>
        <div class="p-top-message__wrapper">
            <div class="p-top-message__inner c-inner">
                <div class="p-top-message__text u-pc-tb-only">
                    <img src="<?php echo theme_url('images/top/top-message-text-pc.svg'); ?>" alt="「見たことのないあなたに逢える」自信を持って言えるほどの成長できる環境があります。">
                </div>
                <div class="p-top-message__info">
                    <p>
                        代表取締役社長<br class="u-tb-sp-only"> 飯塚 慎一
                    </p>
                </div>
                <div class="p-top-message__button c-button u-pc-tb-only">
                    <a class="has-noBorder" href="<?php echo home_url('message'); ?>">
                        <span>Read More</span>
                        <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.7832 2.50013L-0.00265767 4.92663L-0.00265743 0.0736237L4.7832 2.50013Z" fill="#15327e" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
        <div class="p-top-message__container u-tb-sp-only">
            <div class="p-top-message__containerInner">
                <div class="p-top-message__text">
                    <p>
                        あなたは潜在能力を眠らせている。<br>
                        その秘めた力を引き出すことが<br>
                        私の重要な仕事です。
                    </p>
                    <!-- <img src="<?php echo theme_url('images/top/top-message-text-sp.svg'); ?>" alt="「見たことのないあなたに逢える」自信を持って言えるほどの成長できる環境があります。"> -->
                </div>
                <div class="p-top-message__button c-button">
                    <a href="<?php echo home_url('message'); ?>">
                        <span>Read More</span>
                        <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.7832 2.50013L-0.00265767 4.92663L-0.00265743 0.0736237L4.7832 2.50013Z" fill="#15327e" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /.p-top-message -->

    <section class="l-other-contents">
        <div class="l-other-contents__title c-title ">
            <div class="c-title__bar js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
            <h2 class="is-other-contents">Other Contents</h2>
            <div class="c-title__bar js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
        </div>
        <div class="l-other-contents__inner c-inner">
            <ul class="l-other-contents__list">
                <li class="l-other-contents__item js-slideIn">
                    <a href="<?php echo home_url('data'); ?>">
                        <h3 class="l-other-contents__itemTitle js-slideIn">
                            TOA DATA
                            <span>数字で見るTOA</span>
                        </h3>
                        <div class="l-other-contents__circle">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                        <div class="l-other-contents__button c-button c-button--other u-pc-tb-only">
                            <span>Read More</span>
                            <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.70508 4.02507L0.840324 7.41109L0.840324 0.639053L6.70508 4.02507Z" fill="#15327e" />
                            </svg>
                        </div>
                    </a>
                </li>
                <li class="l-other-contents__item js-slideIn">
                    <a href="<?php echo home_url('faq'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--faq">
                            FAQ
                            <span>よくある質問</span>
                        </h3>
                        <div class="l-other-contents__circle">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                        <div class="l-other-contents__button c-button c-button--other u-pc-tb-only">
                            <span>Read More</span>
                            <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.70508 4.02507L0.840324 7.41109L0.840324 0.639053L6.70508 4.02507Z" fill="#15327e" />
                            </svg>
                        </div>
                    </a>
                </li>
                <li class="l-other-contents__item js-slideIn">
                    <a href="<?php echo home_url('guideline'); ?>">
                        <h3 class="l-other-contents__itemTitle">
                            GUIDELINES
                            <span>募集要項</span>
                        </h3>
                        <div class="l-other-contents__circle">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                        <div class="l-other-contents__button c-button c-button--other u-pc-tb-only">
                            <span>Read More</span>
                            <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.70508 4.02507L0.840324 7.41109L0.840324 0.639053L6.70508 4.02507Z" fill="#15327e" />
                            </svg>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <!-- /.l-other-contents -->


    <?php get_template_part('parts/section-entry'); ?>
</main>

<?php get_footer(); ?>
