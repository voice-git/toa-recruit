<?php get_header(); ?>
<main>
    <section class="p-mv js-not">
        <div class="p-mv__label">
            <img class="u-pc-only" src="<?php echo theme_url('images/top/mv-label-pc.svg'); ?>" alt="ふつうのサラリーマン">
            <p class="u-sp-only">ふつうのサラリーマン</p>
            <svg id="not-svg" class="c-not u-pc-only" width="965" height="20" viewBox="0 0 965 20" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- "n" -->
                <path id="n-part" d="M46.262 0.370715H54.3438V19.435H47.257L8.37677 8.42143V19.435H0.294922V0.370715H7.38171L46.262 11.3843V0.370715Z" fill="white" id="letter-n" />

                <!-- "o" -->
                <path id="o-part" d="M904.989 7.00071V12.8293V19.4471H67.8742L60.12 19.435V0.370715H68.2019L896.919 0.38286L905.001 0.370715V0.38286V7.00071H904.989ZM896.907 7.00071H68.1897V12.8293H896.907V7.00071Z" fill="white" id="letter-o" />

                <!-- "t" -->
                <path id="t-part" d="M964.498 0.310001H910.013V6.98857H933.178V19.52H941.321V6.98857H964.486V0.310001H964.498Z" fill="white" id="letter-t" />
            </svg>

            <!-- <svg
                id="not-svg"
                class="c-not u-pc-only"
                viewBox="0 0 228 20"
                fill="none"
                xmlns="http://www.w3.org/2000/svg">

                <path
                    id="n-part"
                    d="M45.97 0.06H54.05V19.12H46.96L8.08 8.11V19.12H0V0.06H7.09L45.97 11.07V0.06"
                    fill="white" />

                <path
                    id="o-part"
                    d="M167.69 6.69V19.14H59.83V0.06H159.62H167.7V6.69H167.69M159.6 6.69H67.89V12.52H159.6V6.69Z"
                    fill="white" />

                <path
                    id="t-part"
                    d="M227.2 0H172.72V6.68H195.88V19.21H204.02V6.68H227.19V0H227.2Z"
                    fill="white" />
            </svg> -->

            <svg id="not-svg" class="c-not u-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                <!-- Nの部分 -->
                <path id="n-part"
                    d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                    fill="white" />
                <!-- Oの部分 -->
                <path id="o-part"
                    d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                    fill="white" />
                <!-- Tの部分 -->
                <path id="t-part"
                    d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                    fill="white" />
            </svg>

        </div>
        <div class="p-mv__slogan">
            <picture>
                <source
                    srcset="<?php echo theme_url('images/top/mv-slogan-sp.svg'); ?>"
                    media="(max-width: 576px)" />
                <img src="<?php echo theme_url('images/top/mv-slogan-pc.svg'); ?>" alt="そんなもんじゃない">
            </picture>
        </div>
    </section>
    <!-- /.p-mv -->


    <section class="p-about">
        <div class="p-about__inner c-inner">
            <div class="p-about__slogan js-fadein js-fadein-0ms">
                <picture>
                    <source
                        srcset="<?php echo theme_url('images/top/about-slogan-sp.svg'); ?>"
                        media="(max-width: 576px)" />
                    <img src="<?php echo theme_url('images/top/about-slogan-pc.svg'); ?>" alt="あなたはそんなもんじゃない">
                </picture>
            </div>
            <div class="p-about__text js-fadein js-fadein-0ms">
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
                <img src="<?php echo theme_url('images/top/gif@2x.png'); ?>" width="210.27" height="195.36" alt="">
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
                                <a href="<?php the_permalink(); ?>">
                                    <div class="p-news__image">
                                        <?php if (has_post_thumbnail()) : ?>
                                            <?php the_post_thumbnail(); ?>
                                        <?php else : ?>
                                            <picture>
                                                <img src="<?php bloginfo('template_url'); ?>/assets/images/noimage.png" alt="No image">
                                            </picture>
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
                <!-- <div class="swiper-pagination"></div> -->
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
                        <li class="p-news__item js-fadein js-fadein-0ms">
                            <a href="<?php the_permalink(); ?>">
                                <div class="p-news__image">
                                    <?php if (has_post_thumbnail()) : ?>
                                        <?php the_post_thumbnail(); ?>
                                    <?php else : ?>
                                        <picture>
                                            <img src="<?php bloginfo('template_url'); ?>/assets/images/noimage.png" alt="No image">
                                        </picture>
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

            <div class="p-news__button c-button js-fadein js-fadein-0ms">
                <a href="<?php echo home_url('news'); ?>">
                    <span>READ MORE</span>
                    <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="#3F6EB4" />
                    </svg>
                </a>
            </div>
    </section>
    <!-- /.p-news -->


    <section class="p-staff">
        <div class="p-staff__title c-title js-fadein js-fadein-0s">
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
                        media="(max-width: 576px)" />
                    <img src="<?php echo theme_url('images/top/staff-slogan-pc.svg'); ?>" alt="そんなもんじゃなかった社員たち">
                </picture>
            </div>
        </div>
        <div class="p-staff__employees js-wrapper">
            <div class="p-staff__employeesImages js-images">
                <div class="p-staff__employeesImage p-staff__employeesImage--first js-image js-not-sp js-not-bar">
                    <div class="p-staff__pin p-staff__pin--first js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p>定時上がりの事務職</p>
                            <!-- <svg class="c-not not-svg-staff u-pc-only" width="605" height="13" viewBox="0 0 605 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M29.5908 0.363885H34.6468V12.5127H30.2133L5.88996 5.49424V12.5127H0.833984V0.363885H5.26746L29.5908 7.38234V0.363885ZM566.808 4.58888V8.30317V12.5204H43.1114L38.2604 12.5127V0.363885H43.3164L561.759 0.371625L566.815 0.363885V0.371625V4.58888H566.808ZM561.752 4.58888H43.3088V8.30317H561.752V4.58888ZM604.037 0.325195H569.951V4.58115H584.443V12.5669H589.537V4.58115H604.029V0.325195H604.037Z" fill="white" />
                        </svg> -->
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not not-svg-staff" src="<?php echo theme_url('images/top/not-bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--second js-image js-not-sp js-not-bar">
                    <div class="p-staff__pin p-staff__pin--second js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p>高卒の工場勤務</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not not-svg-staff" src="<?php echo theme_url('images/top/not-bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--third js-image js-not-sp js-not-bar">
                    <div class="p-staff__pin p-staff__pin--third js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p>熱血体育会系営業</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not not-svg-staff" src="<?php echo theme_url('images/top/not-bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--fourth js-image js-not-sp js-not-bar">
                    <div class="p-staff__pin p-staff__pin--fourth js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p>大工場の一つの駒</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not not-svg-staff" src="<?php echo theme_url('images/top/not-bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                            <!-- <svg class="c-not not-svg-staff u-pc-only" width="605" height="13" viewBox="0 0 605 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path
                                    class="n-part-staff"
                                    d="M29.5908 0.363885H34.6468V12.5127H30.2133L5.88996 5.49424V12.5127H0.833984V0.363885H5.26746L29.5908 7.38234V0.363885"
                                    fill="white" />

                                <path
                                    class="o-part-staff"
                                    d="M566.808 4.58888V8.30317V12.5204H43.1114L38.2604 12.5127V0.363885H43.3164L561.759 0.371625L566.815 0.363885V0.371625V4.58888H566.808M561.752 4.58888H43.3088V8.30317H561.752V4.58888"
                                    fill="white" />

                                <path
                                    class="t-part-staff"
                                    d="M604.037 0.325195H569.951V4.58115H584.443V12.5669H589.537V4.58115H604.029V0.325195H604.037"
                                    fill="white" />
                            </svg>
                            <svg class="c-not not-svg-staff-sp u-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="n-part-staff-sp"
                                    d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                    fill="white" />
                                <path class="o-part-staff-sp"
                                    d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                    fill="white" />
                                <path class="t-part-staff-sp"
                                    d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                    fill="white" />
                            </svg> -->
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--fifth js-image js-not-sp js-not-bar">
                    <div class="p-staff__pin p-staff__pin--fifth js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p>知識ゼロの文系出身</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not not-svg-staff" src="<?php echo theme_url('images/top/not-bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesImage p-staff__employeesImage--sixth js-not-sp js-not-bar">
                    <div class="p-staff__pin p-staff__pin--sixth js-pin">
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--old">
                            <p>高卒の工場勤務</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/top/not-bar-staff-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not not-svg-staff" src="<?php echo theme_url('images/top/not-bar-staff-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>
                </div>
            </div>
            <div class="p-staff__employeesContents js-contents">
                <div class="p-staff__employeesContent p-staff__employeesContent--first js-content js-not">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img class="u-pc-only" src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <p class="u-sp-only">そんなもんじゃなかった</p>
                            <span>01</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>車体骨格開発の<br>エース</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>技術開発部　川上 真由子</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('#'); ?>">
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/top/button-text-sp.svg'); ?>"
                                        media="(max-width: 576px)" />
                                    <img src="<?php echo theme_url('images/top/button-text.svg'); ?>" alt="どんなもん？">
                                </picture>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--second js-content js-not">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>02</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>アメリカ勤務<br>2年目</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>第3生産技術部　田島 遼</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('#'); ?>">
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/top/button-text-sp.svg'); ?>"
                                        media="(max-width: 576px)" />
                                    <img src="<?php echo theme_url('images/top/button-text.svg'); ?>" alt="どんなもん？">
                                </picture>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--third js-content js-not">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>03</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>設計もできる<br>営業マン</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>営業部　山岡 智樹</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('#'); ?>">
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/top/button-text-sp.svg'); ?>"
                                        media="(max-width: 576px)" />
                                    <img src="<?php echo theme_url('images/top/button-text.svg'); ?>" alt="どんなもん？">
                                </picture>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--fourth js-content js-not">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>04</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>あの鉄骨部材の<br>設計者</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>第2生産技術部　吉田 咲希</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('#'); ?>">
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/top/button-text-sp.svg'); ?>"
                                        media="(max-width: 576px)" />
                                    <img src="<?php echo theme_url('images/top/button-text.svg'); ?>" alt="どんなもん？">
                                </picture> <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--fifth js-content js-not">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>05</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>車体骨格開発の<br>エース</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>技術開発部　川上 真由子</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('#'); ?>">
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/top/button-text-sp.svg'); ?>"
                                        media="(max-width: 576px)" />
                                    <img src="<?php echo theme_url('images/top/button-text.svg'); ?>" alt="どんなもん？">
                                </picture>
                                <svg width="6" height="7" viewBox="0 0 6 7" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M5.04004 3.52141L0.387806 6.20738L0.387806 0.835442L5.04004 3.52141Z" fill="white" />
                                </svg>

                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-staff__employeesContent p-staff__employeesContent--sixth js-content js-not">
                    <div class="p-staff__employeesInner">
                        <div class="p-staff__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>06</span>
                        </div>
                        <div class="p-staff__employeesSlogan p-staff__employeesSlogan--new">
                            <p>自動化設備の<br>導入を一任</p>
                        </div>
                        <div class="p-staff__employeesInfo">
                            <p>システム開発部　田島 遼</p>
                        </div>
                        <div class="p-staff__button c-button c-button--blue">
                            <a href="<?php echo home_url('#'); ?>">
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/top/button-text-sp.svg'); ?>"
                                        media="(max-width: 576px)" />
                                    <img src="<?php echo theme_url('images/top/button-text.svg'); ?>" alt="どんなもん？">
                                </picture>
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

    <section class="p-features">
        <div class="p-features__title c-title c-title--blue js-fadein js-fadein-0s">
            <div class="c-title__bar js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-blue.svg'); ?>" alt="">
            </div>
            <h2>TOA Features</h2>
            <div class="c-title__bar js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-blue.svg'); ?>" alt="">
            </div>
        </div>
        <div class="p-features__inner c-inner c-inner--narrow">
            <div class="p-features__slogan">
                <p>可能性を引き出すために、そんなもんはやらない。</p>
                <picture>
                    <source
                        srcset="<?php echo theme_url('images/top/10-not-sp.svg'); ?>"
                        media="(max-width: 768px)" />
                    <img src="<?php echo theme_url('images/top/10-not.svg'); ?>" alt="10のNOT">
                </picture>
            </div>

            <ol class="p-features__list p-features__list--first">
                <li class="p-features__item p-features__item--first js-not-bar">
                    <button class="p-features__itemTrigger" data-micromodal-trigger="modal-01">
                        <div class="p-features__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>01</span>
                        </div>
                        <h3 class="p-features__itemTitle p-features__itemTitle--first">
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
                <li class="p-features__item p-features__item--second js-not-bar">
                    <button class="p-features__itemTrigger" data-micromodal-trigger="modal-02">
                        <div class="p-features__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>02</span>
                        </div>
                        <h3 class="p-features__itemTitle p-features__itemTitle--second">
                            文系理系指定
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/common/not-bar-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img class="c-not not-svg-staff" src="<?php echo theme_url('images/common/not-bar-normal.svg'); ?>" alt="not">
                            </picture>
                            <!-- <svg
                                class="c-not js-not-svg is-content u-pc-only"
                                width="547"
                                height="8"
                                viewBox="0 0 547 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <path
                                    class="n-part is-features"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <path
                                    class="o-part is-features"
                                    d="M521.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L518.029 0.030342L521.477 0.0252841V0.030342V2.78635H521.472ZM518.024 2.78635L28.9695 2.78646V5.21377L518.024 5.21365V2.78635Z"
                                    fill="white" />
                                <path
                                    class="t-part is-features"
                                    d="M546.864 0H523.616V2.78129H533.5V8H536.974V2.78129H546.859V0H546.864Z"
                                    fill="white" />
                            </svg>
                            <svg class="c-not js-not-svg is-features-sp u-sp-only" width="330" height="6" viewBox="0 0 330 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path class="n-part is-features-sp" d="M14.1119 0.02H16.575V5.95H14.4236L2.59096 2.52V5.95H0.12793V0.02H2.27931L14.1019 3.45V0.02H14.1119Z" fill="white" />
                                <path class="o-part is-features-sp" d="M311.526 2.08V5.96H18.3242V0.02H311.536V2.09H309.073H20.7772V3.9H309.062H311.526Z" fill="white" />
                                <path class="t-part is-features-sp" d="M329.631 0H313.064V2.08H320.111V5.98H322.584V2.08H329.631V0Z" fill="white" />
                            </svg> -->
                        </h3>
                        <div class="p-features__itemMore">
                            <p>MORE</p>
                        </div>
                    </button>
                </li>
            </ol>
            <ol class="p-features__list p-features__list--second">
                <li class="p-features__item p-features__item--large js-not-bar">
                    <button class="p-features__itemTrigger" data-micromodal-trigger="modal-03">
                        <div class="p-features__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>03</span>
                        </div>
                        <h3 class="p-features__itemTitle p-features__itemTitle--large">
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
                <li class="p-features__item p-features__item--small js-not-bar">
                    <button class="p-features__itemTrigger" data-micromodal-trigger="modal-04">
                        <div class="p-features__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>04</span>
                        </div>
                        <h3 class="p-features__itemTitle p-features__itemTitle--small">
                            年功序列
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
                <li class="p-features__item p-features__item--middle js-not-bar">
                    <button class="p-features__itemTrigger" data-micromodal-trigger="modal-05">
                        <div class="p-features__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>05</span>
                        </div>
                        <h3 class="p-features__itemTitle p-features__itemTitle--middle">
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

            <!-- <picture class="p-features__image">
                <source
                    srcset="<?php echo theme_url('images/top/features-image-01-sp@2x.jpg'); ?>"
                    media="(max-width: 768px)" />
                <img src="<?php echo theme_url('images/top/features-image-01-pc@2x.jpg'); ?>" width="1338" height="616" alt="">
            </picture> -->

            <ol class="p-features__list p-features__list--first">
                <li class="p-features__item p-features__item--first js-not-bar">
                    <button class="p-features__itemTrigger" data-micromodal-trigger="modal-06">
                        <div class="p-features__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>06</span>
                        </div>
                        <h3 class="p-features__itemTitle p-features__itemTitle--first">
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
                <li class="p-features__item p-features__item--second js-not-bar">
                    <button class="p-features__itemTrigger" data-micromodal-trigger="modal-07">
                        <div class="p-features__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>07</span>
                        </div>
                        <h3 class="p-features__itemTitle p-features__itemTitle--second">
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
                            <img src="" alt="">
                        </div>
                    </button>
                </li>
            </ol>
            <ol class="p-features__list p-features__list--second">
                <li class="p-features__item p-features__item--small js-not-bar">
                    <button class="p-features__itemTrigger" data-micromodal-trigger="modal-08">
                        <div class="p-features__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>08</span>
                        </div>
                        <h3 class="p-features__itemTitle p-features__itemTitle--small">
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
                            <img src="" alt="">
                        </div>
                    </button>
                </li>
                <li class="p-features__item p-features__item--middle js-not-bar">
                    <button class="p-features__itemTrigger" data-micromodal-trigger="modal-09">
                        <div class="p-features__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>09</span>
                        </div>
                        <h3 class="p-features__itemTitle p-features__itemTitle--middle">
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
                            <img src="" alt="">
                        </div>
                    </button>
                </li>
                <li class="p-features__item p-features__item--large js-not-bar">
                    <button class="p-features__itemTrigger" data-micromodal-trigger="modal-10">
                        <div class="p-features__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>10</span>
                        </div>
                        <h3 class="p-features__itemTitle p-features__itemTitle--large">
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
                            <img src="" alt="">
                        </div>
                    </button>
                </li>
            </ol>

            <!-- <picture class="p-features__image">
                <source
                    srcset="<?php echo theme_url('images/top/features-image-02-sp@2x.jpg'); ?>"
                    media="(max-width: 768px)" />
                <img src="<?php echo theme_url('images/top/features-image-02-pc@2x.jpg'); ?>" width="1339" height="617" alt="">
                </picture> -->
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
                            <svg
                                class="c-not not-svg-modal-pc u-pc-tb-only"
                                width="717"
                                height="8"
                                viewBox="0 0 717 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part-modal-pc"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part-modal-pc"
                                    d="M691.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L688.029 0.030342L691.477 0.0252841V0.030342V2.78635H691.472ZM688.024 2.78635L28.9695 2.78646V5.21377L688.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part-modal-pc"
                                    d="M716.864 0H693.616V2.78129H703.5V8H706.974V2.78129H716.859V0H716.864Z"
                                    fill="white" />
                            </svg>

                            <svg class="c-not not-svg-modal-sp u-tb-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- N部分 -->
                                <path
                                    class="n-part-modal-sp"
                                    d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                    fill="white" />

                                <!-- O部分 -->
                                <path
                                    class="o-part-modal-sp"
                                    d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                    fill="white" />

                                <!-- T部分 -->
                                <path
                                    class="t-part-modal-sp"
                                    d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                    fill="white" />
                            </svg>
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
                    <!-- <footer class="p-modal__footer"> -->
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev" data-micromodal-trigger="modal-10">
                        </button>

                        <button class="p-modal__next" data-micromodal-trigger="modal-02">

                        </button>
                    </div>
                    <!-- </footer> -->
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
                            <svg
                                class="c-not not-svg-modal-pc u-pc-tb-only"
                                width="717"
                                height="8"
                                viewBox="0 0 717 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part-modal-pc"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part-modal-pc"
                                    d="M691.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L688.029 0.030342L691.477 0.0252841V0.030342V2.78635H691.472ZM688.024 2.78635L28.9695 2.78646V5.21377L688.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part-modal-pc"
                                    d="M716.864 0H693.616V2.78129H703.5V8H706.974V2.78129H716.859V0H716.864Z"
                                    fill="white" />
                            </svg>

                            <svg class="c-not not-svg-modal-sp u-tb-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- N部分 -->
                                <path
                                    class="n-part-modal-sp"
                                    d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                    fill="white" />

                                <!-- O部分 -->
                                <path
                                    class="o-part-modal-sp"
                                    d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                    fill="white" />

                                <!-- T部分 -->
                                <path
                                    class="t-part-modal-sp"
                                    d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                    fill="white" />
                            </svg>
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
                    <!-- <footer class="p-modal__footer"> -->
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev" data-micromodal-trigger="modal-01">

                        </button>

                        <button class="p-modal__next" data-micromodal-trigger="modal-03">

                        </button>
                    </div>
                    <!-- </footer> -->
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
                            <svg
                                class="c-not not-svg-modal-pc u-pc-tb-only"
                                width="717"
                                height="8"
                                viewBox="0 0 717 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part-modal-pc"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part-modal-pc"
                                    d="M691.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L688.029 0.030342L691.477 0.0252841V0.030342V2.78635H691.472ZM688.024 2.78635L28.9695 2.78646V5.21377L688.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part-modal-pc"
                                    d="M716.864 0H693.616V2.78129H703.5V8H706.974V2.78129H716.859V0H716.864Z"
                                    fill="white" />
                            </svg>

                            <svg class="c-not not-svg-modal-sp u-tb-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- N部分 -->
                                <path
                                    class="n-part-modal-sp"
                                    d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                    fill="white" />

                                <!-- O部分 -->
                                <path
                                    class="o-part-modal-sp"
                                    d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                    fill="white" />

                                <!-- T部分 -->
                                <path
                                    class="t-part-modal-sp"
                                    d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                    fill="white" />
                            </svg>
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
                    <!-- <footer class="p-modal__footer"> -->
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev" data-micromodal-trigger="modal-02">

                        </button>

                        <button class="p-modal__next" data-micromodal-trigger="modal-04">

                        </button>
                    </div>
                    <!-- </footer> -->
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
                            年功序列
                            <svg
                                class="c-not not-svg-modal-pc u-pc-tb-only"
                                width="717"
                                height="8"
                                viewBox="0 0 717 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part-modal-pc"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part-modal-pc"
                                    d="M691.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L688.029 0.030342L691.477 0.0252841V0.030342V2.78635H691.472ZM688.024 2.78635L28.9695 2.78646V5.21377L688.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part-modal-pc"
                                    d="M716.864 0H693.616V2.78129H703.5V8H706.974V2.78129H716.859V0H716.864Z"
                                    fill="white" />
                            </svg>

                            <svg class="c-not not-svg-modal-sp u-tb-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- N部分 -->
                                <path
                                    class="n-part-modal-sp"
                                    d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                    fill="white" />

                                <!-- O部分 -->
                                <path
                                    class="o-part-modal-sp"
                                    d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                    fill="white" />

                                <!-- T部分 -->
                                <path
                                    class="t-part-modal-sp"
                                    d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                    fill="white" />
                            </svg>
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
                    <!-- <footer class="p-modal__footer"> -->
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev" data-micromodal-trigger="modal-03">

                        </button>

                        <button class="p-modal__next" data-micromodal-trigger="modal-05">

                        </button>
                    </div>
                    <!-- </footer> -->
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
                            <svg
                                class="c-not not-svg-modal-pc u-pc-tb-only"
                                width="717"
                                height="8"
                                viewBox="0 0 717 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part-modal-pc"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part-modal-pc"
                                    d="M691.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L688.029 0.030342L691.477 0.0252841V0.030342V2.78635H691.472ZM688.024 2.78635L28.9695 2.78646V5.21377L688.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part-modal-pc"
                                    d="M716.864 0H693.616V2.78129H703.5V8H706.974V2.78129H716.859V0H716.864Z"
                                    fill="white" />
                            </svg>

                            <svg class="c-not not-svg-modal-sp u-tb-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- N部分 -->
                                <path
                                    class="n-part-modal-sp"
                                    d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                    fill="white" />

                                <!-- O部分 -->
                                <path
                                    class="o-part-modal-sp"
                                    d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                    fill="white" />

                                <!-- T部分 -->
                                <path
                                    class="t-part-modal-sp"
                                    d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                    fill="white" />
                            </svg>
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
                    <!-- <footer class="p-modal__footer"> -->
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev" data-micromodal-trigger="modal-04">

                        </button>

                        <button class="p-modal__next" data-micromodal-trigger="modal-06">

                        </button>
                    </div>
                    <!-- </footer> -->
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
                            <svg
                                class="c-not not-svg-modal-pc u-pc-tb-only"
                                width="717"
                                height="8"
                                viewBox="0 0 717 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part-modal-pc"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part-modal-pc"
                                    d="M691.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L688.029 0.030342L691.477 0.0252841V0.030342V2.78635H691.472ZM688.024 2.78635L28.9695 2.78646V5.21377L688.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part-modal-pc"
                                    d="M716.864 0H693.616V2.78129H703.5V8H706.974V2.78129H716.859V0H716.864Z"
                                    fill="white" />
                            </svg>

                            <svg class="c-not not-svg-modal-sp u-tb-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- N部分 -->
                                <path
                                    class="n-part-modal-sp"
                                    d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                    fill="white" />

                                <!-- O部分 -->
                                <path
                                    class="o-part-modal-sp"
                                    d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                    fill="white" />

                                <!-- T部分 -->
                                <path
                                    class="t-part-modal-sp"
                                    d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                    fill="white" />
                            </svg>
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
                    <!-- <footer class="p-modal__footer"> -->
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev" data-micromodal-trigger="modal-05">

                        </button>

                        <button class="p-modal__next" data-micromodal-trigger="modal-07">

                        </button>
                    </div>
                    <!-- </footer> -->
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
                        <h3 class="p-modal__title" id="modal-02-title">
                            薄い福利厚生
                            <svg
                                class="c-not not-svg-modal-pc u-pc-tb-only"
                                width="717"
                                height="8"
                                viewBox="0 0 717 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part-modal-pc"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part-modal-pc"
                                    d="M691.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L688.029 0.030342L691.477 0.0252841V0.030342V2.78635H691.472ZM688.024 2.78635L28.9695 2.78646V5.21377L688.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part-modal-pc"
                                    d="M716.864 0H693.616V2.78129H703.5V8H706.974V2.78129H716.859V0H716.864Z"
                                    fill="white" />
                            </svg>

                            <svg class="c-not not-svg-modal-sp u-tb-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- N部分 -->
                                <path
                                    class="n-part-modal-sp"
                                    d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                    fill="white" />

                                <!-- O部分 -->
                                <path
                                    class="o-part-modal-sp"
                                    d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                    fill="white" />

                                <!-- T部分 -->
                                <path
                                    class="t-part-modal-sp"
                                    d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                    fill="white" />
                            </svg>
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
                    <!-- <footer class="p-modal__footer"> -->
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev" data-micromodal-trigger="modal-06">
                        </button>
                        <button class="p-modal__next" data-micromodal-trigger="modal-08">
                        </button>
                    </div>
                    <!-- </footer> -->
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
                            <svg
                                class="c-not not-svg-modal-pc u-pc-tb-only"
                                width="717"
                                height="8"
                                viewBox="0 0 717 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part-modal-pc"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part-modal-pc"
                                    d="M691.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L688.029 0.030342L691.477 0.0252841V0.030342V2.78635H691.472ZM688.024 2.78635L28.9695 2.78646V5.21377L688.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part-modal-pc"
                                    d="M716.864 0H693.616V2.78129H703.5V8H706.974V2.78129H716.859V0H716.864Z"
                                    fill="white" />
                            </svg>

                            <svg class="c-not not-svg-modal-sp u-tb-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- N部分 -->
                                <path
                                    class="n-part-modal-sp"
                                    d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                    fill="white" />

                                <!-- O部分 -->
                                <path
                                    class="o-part-modal-sp"
                                    d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                    fill="white" />

                                <!-- T部分 -->
                                <path
                                    class="t-part-modal-sp"
                                    d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                    fill="white" />
                            </svg>
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
                    <!-- <footer class="p-modal__footer"> -->
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev" data-micromodal-trigger="modal-07">

                        </button>

                        <button class="p-modal__next" data-micromodal-trigger="modal-09">

                        </button>
                    </div>
                    <!-- </footer> -->
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
                            <svg
                                class="c-not not-svg-modal-pc u-pc-tb-only"
                                width="717"
                                height="8"
                                viewBox="0 0 717 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part-modal-pc"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part-modal-pc"
                                    d="M691.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L688.029 0.030342L691.477 0.0252841V0.030342V2.78635H691.472ZM688.024 2.78635L28.9695 2.78646V5.21377L688.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part-modal-pc"
                                    d="M716.864 0H693.616V2.78129H703.5V8H706.974V2.78129H716.859V0H716.864Z"
                                    fill="white" />
                            </svg>

                            <svg class="c-not not-svg-modal-sp u-tb-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- N部分 -->
                                <path
                                    class="n-part-modal-sp"
                                    d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                    fill="white" />

                                <!-- O部分 -->
                                <path
                                    class="o-part-modal-sp"
                                    d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                    fill="white" />

                                <!-- T部分 -->
                                <path
                                    class="t-part-modal-sp"
                                    d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                    fill="white" />
                            </svg>
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
                        <!-- <div clss="p-modal__image">
                            <img src="<?php echo theme_url('images/top/modal-01-pc@2x.jpg'); ?>" width="281" height="281" alt="">
                        </div> -->
                    </div>
                    <!-- <footer class="p-modal__footer"> -->
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev" data-micromodal-trigger="modal-08">

                        </button>

                        <button class="p-modal__next" data-micromodal-trigger="modal-10">

                        </button>
                    </div>
                    <!-- </footer> -->
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
                            <svg
                                class="c-not not-svg-content u-pc-tb-only"
                                width="717"
                                height="8"
                                viewBox="0 0 717 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part-modal-pc"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part-modal-pc"
                                    d="M691.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L688.029 0.030342L691.477 0.0252841V0.030342V2.78635H691.472ZM688.024 2.78635L28.9695 2.78646V5.21377L688.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part-modal-pc"
                                    d="M716.864 0H693.616V2.78129H703.5V8H706.974V2.78129H716.859V0H716.864Z"
                                    fill="white" />
                            </svg>

                            <svg class="c-not not-svg-modal-sp u-tb-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- N部分 -->
                                <path
                                    class="n-part-modal-sp"
                                    d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                    fill="white" />

                                <!-- O部分 -->
                                <path
                                    class="o-part-modal-sp"
                                    d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                    fill="white" />

                                <!-- T部分 -->
                                <path
                                    class="t-part-modal-sp"
                                    d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                    fill="white" />
                            </svg>
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
                        <!-- <div class="p-modal__image"
                            <img src="<?php echo theme_url('images/top/modal-01-pc@2x.jpg'); ?>" width="281" height="281" alt="">
                        </div> -->
                    </div>
                    <!-- <footer class="p-modal__footer"> -->
                    <div class="p-modal__pagination">
                        <button class="p-modal__prev" data-micromodal-trigger="modal-09">

                        </button>

                        <button class="p-modal__next" data-micromodal-trigger="modal-01">
                            <!-- <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <circle cx="10.5455" cy="10.5455" r="10.0455" transform="matrix(-1 0 0 1 21.9546 0.636353)" stroke="white" />
                                <path d="M10.0909 9.20457L14.0454 11.5114L10.0909 13.8182" stroke="white" stroke-linecap="round" />
                            </svg> -->
                        </button>
                    </div>
                    <!-- </footer> -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.features -->

    <section class="p-fields">
        <div class="p-fields__top">
            <div class="p-fields__title c-title js-fadein js-fadein-0s">
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
                <!-- <h3>あなたの力を引き出す<br>フィールドがある</h3> -->
            </div>
            <div class="p-fields__topButton">
                <a href="#">
                    <span>活躍したい分野から職種を探す</span>
                </a>
            </div>
        </div>





        <!-- 静的コーディング（カスタムフィールドはポップアップの中身から ）新-->
        <div class="p-fields__content">
            <div class="p-fields__inner">
                <ul class="p-fields__list">
                    <li class="p-fields__item">
                        <div class="p-fields__itemTitle">
                            <h3>
                                生産
                            </h3>
                        </div>
                        <picture class="p-fields__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <div class="p-fields__itemText">
                            <p>
                                最前線の現場で<br>ものづくりの力を引き出す
                            </p>
                        </div>
                        <button class="p-fields__itemButton" data-micromodal-trigger="link-01">
                            <span>More</span>
                            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                            </svg>
                        </button>
                    </li>
                    <li class="p-fields__item">
                        <div class="p-fields__itemTitle">
                            <h3>
                                モノ
                            </h3>
                        </div>
                        <picture class="p-fields__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <div class="p-fields__itemText">
                            <p>
                                大量の生産活動を<br>全体で俯瞰する力を引き出す
                            </p>
                        </div>
                        <button class="p-fields__itemButton" data-micromodal-trigger="link-02">
                            <!-- <a href="#"> -->
                            <span>More</span>
                            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                            </svg>
                            <!-- </a> -->
                        </button>
                    </li>
                    <li class="p-fields__item">
                        <div class="p-fields__itemTitle">
                            <h3>
                                技術
                            </h3>
                        </div>
                        <picture class="p-fields__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <div class="p-fields__itemText">
                            <p>
                                大量の生産活動を<br>全体で俯瞰する力を引き出す
                            </p>
                        </div>
                        <button class="p-fields__itemButton" data-micromodal-trigger="link-03">
                            <!-- <a href="#"> -->
                            <span>More</span>
                            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                            </svg>
                            <!-- </a> -->
                        </button>
                    </li>
                    <li class="p-fields__item">
                        <div class="p-fields__itemTitle">
                            <h3>
                                先進
                            </h3>
                        </div>
                        <picture class="p-fields__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <div class="p-fields__itemText">
                            <p>
                                最前線の現場で<br>ものづくりの力を引き出す
                            </p>
                        </div>
                        <button class="p-fields__itemButton" data-micromodal-trigger="link-04">
                            <!-- <a href="#"> -->
                            <span>More</span>
                            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                            </svg>
                            <!-- </a> -->
                        </button>
                    </li>
                    <li class="p-fields__item">
                        <div class="p-fields__itemTitle">
                            <h3>
                                世界
                            </h3>
                        </div>
                        <picture class="p-fields__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <div class="p-fields__itemText">
                            <p>
                                大量の生産活動を<br>全体で俯瞰する力を引き出す
                            </p>
                        </div>
                        <button class="p-fields__itemButton" data-micromodal-trigger="link-05">
                            <!-- <a href="#"> -->
                            <span>More</span>
                            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                            </svg>
                            <!-- </a> -->
                        </button>
                    </li>
                    <li class="p-fields__item">
                        <div class="p-fields__itemTitle">
                            <h3>
                                経営
                            </h3>
                        </div>
                        <picture class="p-fields__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <div class="p-fields__itemText">
                            <p>
                                大量の生産活動を<br>全体で俯瞰する力を引き出す
                            </p>
                        </div>
                        <button class="p-fields__itemButton" data-micromodal-trigger="link-06">
                            <!-- <a href="#"> -->
                            <span>More</span>
                            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                            </svg>
                            <!-- </a> -->
                        </button>
                    </li>
                    <li class="p-fields__item">
                        <div class="p-fields__itemTitle">
                            <h3>
                                創造
                            </h3>
                        </div>
                        <picture class="p-fields__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <div class="p-fields__itemText">
                            <p>
                                最前線の現場で<br>ものづくりの力を引き出す
                            </p>
                        </div>
                        <button class="p-fields__itemButton" data-micromodal-trigger="link-07">
                            <!-- <a href="#"> -->
                            <span>More</span>
                            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                            </svg>
                            <!-- </a> -->
                        </button>
                    </li>
                    <li class="p-fields__item">
                        <div class="p-fields__itemTitle">
                            <h3>
                                インフラ
                            </h3>
                        </div>
                        <picture class="p-fields__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <div class="p-fields__itemText">
                            <p>
                                大量の生産活動を<br>全体で俯瞰する力を引き出す
                            </p>
                        </div>
                        <button class="p-fields__itemButton" data-micromodal-trigger="link-08">
                            <!-- <a href="#"> -->
                            <span>More</span>
                            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                            </svg>
                            <!-- </a> -->
                        </button>
                    </li>
                    <li class="p-fields__item">
                        <div class="p-fields__itemTitle">
                            <h3>
                                DX
                            </h3>
                        </div>
                        <picture class="p-fields__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <div class="p-fields__itemText">
                            <p>
                                大量の生産活動を<br>全体で俯瞰する力を引き出す
                            </p>
                        </div>
                        <button class="p-fields__itemButton" data-micromodal-trigger="link-09">
                            <!-- <a href="#"> -->
                            <span>More</span>
                            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                            </svg>
                            <!-- </a> -->
                        </button>
                    </li>
                    <li class="p-fields__item">
                        <div class="p-fields__itemTitle">
                            <h3>
                                ヒト
                            </h3>
                        </div>
                        <picture class="p-fields__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <div class="p-fields__itemText">
                            <p>
                                最前線の現場で<br>ものづくりの力を引き出す
                            </p>
                        </div>
                        <button class="p-fields__itemButton" data-micromodal-trigger="link-10">
                            <!-- <a href="#"> -->
                            <span>More</span>
                            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                            </svg>
                            <!-- </a> -->
                        </button>
                    </li>
                    <li class="p-fields__item">
                        <div class="p-fields__itemTitle">
                            <h3>
                                管理
                            </h3>
                        </div>
                        <picture class="p-fields__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <div class="p-fields__itemText">
                            <p>
                                大量の生産活動を<br>全体で俯瞰する力を引き出す
                            </p>
                        </div>
                        <button class="p-fields__itemButton" data-micromodal-trigger="link-11">
                            <!-- <a href="#"> -->
                            <span>More</span>
                            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                            </svg>
                            <!-- </a> -->
                        </button>
                    </li>
                    <li class="p-fields__item">
                        <div class="p-fields__itemTitle">
                            <h3>
                                広報
                            </h3>
                        </div>
                        <picture class="p-fields__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <div class="p-fields__itemText">
                            <p>
                                大量の生産活動を<br>全体で俯瞰する力を引き出す
                            </p>
                        </div>
                        <button class="p-fields__itemButton" data-micromodal-trigger="link-12">
                            <!-- <a href="#"> -->
                            <span>More</span>
                            <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                            </svg>
                            <!-- </a> -->
                        </button>
                    </li>
                </ul>
                <div class="p-fields__button c-button">
                    <a href="<?php echo home_url('job_list'); ?>">
                        <span class="is-ja">職種一覧へ</span>
                        <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.7832 2.50013L-0.00265767 4.92663L-0.00265743 0.0736237L4.7832 2.50013Z" fill="#3F6EB4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>

        <!-- モーダル（Topページに記載するのはカスタムフィールドじゃない。職種選択したら、ポップアップに表示されるのは管理画面で事前にチェックした職種のみ） 新-->
        <div id="link-01" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container p-modal__container--job" role="dialog" aria-modal="true" aria-labelledby="link-01-title">
                    <header class="p-modal__header">
                        <h3 class="p-modal__title" id="modal-01-title">
                            生産
                        </h3>
                        <picture class="p-modal__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <button class="p-modal__close p-modal__close--job" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content p-modal__content--job" id="link-01-content">
                        <div class="p-modal__text">
                            <p>
                                文章はダミーです。大量の生産活動を全体で俯瞰する力を引き出す。
                            </p>
                        </div>
                    </div>

                    <?php
                    // トップページ設定の固定ページの投稿IDを指定
                    $settings_page_id = get_page_by_title('TOP')->ID;

                    // チェックボックスで選択された項目を取得
                    $selected_categories = get_field('job_category', $settings_page_id);

                    if ($selected_categories): ?>
                        <ul class="p-modal__cards">
                            <?php
                            foreach ($selected_categories as $category):
                                // `value` を取得
                                $category_name = $category['value'];

                                // カスタム投稿タイプ `job_list` から該当する投稿を取得
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
                                                <div class="c-card__image c-card__image--modal">
                                                    <?php if ($job_icon && is_array($job_icon)): ?>
                                                        <img src="<?php echo esc_url($job_icon['url']); ?>" alt="<?php echo esc_attr($job_icon['alt']); ?>">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="c-card__texts c-card__texts--modal">
                                                    <div class="c-card__title c-card__title--modal">
                                                        <h3>
                                                            <?php echo esc_html($job_title); ?>
                                                        </h3>
                                                    </div>
                                                    <span class="c-card__circle c-card__circle--modal">
                                                    </span>
                                                    <div class="c-card__text c-card__text--modal">
                                                        <p>
                                                            <?php echo esc_html($job_description); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                            <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                            endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p>取得できてない</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>


        <div id="link-02" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container p-modal__container--job" role="dialog" aria-modal="true" aria-labelledby="link-02-title">
                    <header class="p-modal__header">
                        <h3 class="p-modal__title" id="modal-02-title">
                            モノ
                        </h3>
                        <picture class="p-modal__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <button class="p-modal__close p-modal__close--job" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content p-modal__content--job" id="link-01-content">
                        <div class="p-modal__text">
                            <p>
                                大量の生産活動を全体で俯瞰する力を引き出す
                            </p>
                        </div>
                    </div>

                    <?php
                    // トップページ設定の固定ページの投稿IDを指定
                    $settings_page_id = get_page_by_title('TOP')->ID;

                    // チェックボックスで選択された項目を取得
                    $selected_categories = get_field('job_category', $settings_page_id);

                    if ($selected_categories): ?>
                        <ul class="p-modal__cards">
                            <?php
                            foreach ($selected_categories as $category):
                                // `value` を取得
                                $category_name = $category['value'];

                                // カスタム投稿タイプ `job_list` から該当する投稿を取得
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
                                                <div class="c-card__image c-card__image--modal">
                                                    <?php if ($job_icon && is_array($job_icon)): ?>
                                                        <img src="<?php echo esc_url($job_icon['url']); ?>" alt="<?php echo esc_attr($job_icon['alt']); ?>">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="c-card__texts c-card__texts--modal">
                                                    <div class="c-card__title c-card__title--modal">
                                                        <h3>
                                                            <?php echo esc_html($job_title); ?>
                                                            <span>
                                                                <?php echo esc_html($job_english_title); ?>
                                                            </span>
                                                        </h3>
                                                    </div>
                                                    <span class="c-card__circle c-card__circle--modal">
                                                    </span>
                                                    <div class="c-card__text c-card__text--modal">
                                                        <p>
                                                            <?php echo esc_html($job_description); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                            <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                            endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p>取得できてない</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>




        <div id="link-03" class="p-modal" aria-hidden="true">
            <div class="p-modal__overlay" tabindex="-1" data-micromodal-close>
                <div class="p-modal__container p-modal__container--job" role="dialog" aria-modal="true" aria-labelledby="link-03-title">
                    <header class="p-modal__header">
                        <h3 class="p-modal__title" id="modal-03-title">
                            技術
                        </h3>
                        <picture class="p-modal__field">
                            <source
                                srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                        </picture>
                        <button class="p-modal__close p-modal__close--job" aria-label="Close modal" data-micromodal-close>
                            <svg width="27" height="27" viewBox="0 0 27 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M1 1L26 26" stroke="white" stroke-width="2" />
                                <path d="M26 1L1 26" stroke="white" stroke-width="2" />
                            </svg>
                        </button>
                    </header>
                    <div class="p-modal__content p-modal__content--job" id="link-01-content">
                        <div class="p-modal__text">
                            <p>
                                大量の生産活動を全体で俯瞰する力を引き出す
                            </p>
                        </div>
                    </div>

                    <?php
                    // トップページ設定の固定ページの投稿IDを指定
                    $settings_page_id = get_page_by_title('TOP')->ID;

                    // チェックボックスで選択された項目を取得
                    $selected_categories = get_field('job_category', $settings_page_id);

                    if ($selected_categories): ?>
                        <ul class="p-modal__cards">
                            <?php
                            foreach ($selected_categories as $category):
                                // `value` を取得
                                $category_name = $category['value'];

                                // カスタム投稿タイプ `job_list` から該当する投稿を取得
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
                                                <div class="c-card__image c-card__image--modal">
                                                    <?php if ($job_icon && is_array($job_icon)): ?>
                                                        <img src="<?php echo esc_url($job_icon['url']); ?>" alt="<?php echo esc_attr($job_icon['alt']); ?>">
                                                    <?php endif; ?>
                                                </div>
                                                <div class="c-card__texts c-card__texts--modal">
                                                    <div class="c-card__title c-card__title--modal">
                                                        <h3>
                                                            <?php echo esc_html($job_title); ?>
                                                            <span>
                                                                <?php echo esc_html($job_english_title); ?>
                                                            </span>
                                                        </h3>
                                                    </div>
                                                    <span class="c-card__circle c-card__circle--modal">
                                                    </span>
                                                    <div class="c-card__text c-card__text--modal">
                                                        <p>
                                                            <?php echo esc_html($job_description); ?>
                                                        </p>
                                                    </div>
                                                </div>
                                            </a>
                                        </li>
                            <?php
                                    endwhile;
                                    wp_reset_postdata();
                                endif;
                            endforeach; ?>
                        </ul>
                    <?php else: ?>
                        <p>取得できてない</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
























        <!-- カスタムフィールドで表示するやつ  最新にしようとしてる-->
        <div class="p-fields__content">
            <div class="p-fields__inner">
                <?php
                $paged = get_query_var('paged') ? get_query_var('paged') : 1;
                $args = array(
                    'post_type' => 'career',
                    'posts_per_page' => -1,
                    'paged' => $paged,
                    'orderby' => 'post_date',
                    'order' => 'DESC',
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
                                        <!-- 生産 -->
                                        <?php the_field('career_name'); ?>
                                    </h3>
                                </div>
                                <picture class="p-fields__field">
                                    <source
                                        srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
                                </picture>
                                <div class="p-fields__itemText">
                                    <p>
                                        <!-- 最前線の現場で<br>ものづくりの力を引き出す -->
                                        <?php echo nl2br(get_field('career_text')); ?>
                                    </p>
                                </div>
                                <button class="p-fields__itemButton" data-micromodal-trigger="link-<?php the_ID(); ?>">
                                    <!-- <a href="#"> -->
                                    <span>More</span>
                                    <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.83008 2.50013L0.627248 4.92663L0.627248 0.0736237L4.83008 2.50013Z" fill="white" />
                                    </svg>
                                    <!-- </a> -->
                                </button>
                            </li>
                        <?php endwhile; ?>
                    </ul>
                <?php else : ?>
                    <p>フィールドがありません。</p>
                <?php endif; ?>
                <?php wp_reset_postdata(); ?>
                <div class="p-fields__button c-button">
                    <a href="<?php echo home_url('#'); ?>">
                        <span class="is-ja">職種一覧へ</span>
                        <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.7832 2.50013L-0.00265767 4.92663L-0.00265743 0.0736237L4.7832 2.50013Z" fill="#3F6EB4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>


        <!-- モーダル（過去のやつ（Topページで選択したやつしか表示されない） 最新にしようとしてる（フィールドのカスタム投稿追加して、フィールドカスタム投稿をトップページのフィールドとして反映、Moreボタン押すと、フィールドの投稿がポップアップとして表示、表示項目はフィールド投稿のチェックボックスで選んだやつ、項目はそれぞれカスタム投稿の職種から持ってきてる。項目を選択すると職種の詳細ページにいく-->
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
                                <!-- <div class="p-modal__number">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>01</span>
                        </div> -->
                                <h3 class="p-modal__title" id="modal-<?php the_ID(); ?>-title">
                                    <!-- 放ったらかし -->
                                    <?php the_field('career_name'); ?>
                                </h3>
                                <picture class="p-modal__field">
                                    <source
                                        srcset="<?php echo theme_url('images/top/field-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img src="<?php echo theme_url('images/top/field.svg'); ?>" alt="">
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
                                    <p>
                                        <!-- 最前線の現場で<br>ものづくりの力を引き出す -->
                                        <?php the_field('career_text'); ?>
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
                                        // `value` を取得
                                        $category_name = $category['value'];

                                        // カスタム投稿タイプ `job_list` から該当する投稿を取得
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


                                                <!-- <?php
                                                        // while ($job_query->have_posts()) : $job_query->the_post(); 
                                                        ?>
                                        <?php
                                                // if (get_the_ID() === $post_id) : 
                                        ?> -->
                                                <li class="c-card c-card--modal">
                                                    <a href="<?php the_permalink(); ?>">
                                                        <div class="c-card__image c-card__image--modal">
                                                            <?php
                                                            // $job_icon = get_field('job_icon'); // ACF のフィールドから値を取得
                                                            // if ($job_icon && is_array($job_icon)) : // 配列形式か確認
                                                            //     echo '<img src="' . esc_url($job_icon['url']) . '" alt="' . esc_attr($job_icon['alt']) . '">';
                                                            // endif;
                                                            ?>
                                                            <?php if ($job_icon && is_array($job_icon)): ?>
                                                                <img src="<?php echo esc_url($job_icon['url']); ?>" alt="<?php echo esc_attr($job_icon['alt']); ?>">
                                                            <?php endif; ?>
                                                        </div>
                                                        <div class="c-card__texts c-card__texts--modal">
                                                            <div class="c-card__title c-card__title--modal">
                                                                <h3>
                                                                    <?php
                                                                    // the_field('job_title'); 
                                                                    echo esc_html($job_title);
                                                                    ?>
                                                                </h3>
                                                                <p>
                                                                    <?php
                                                                    // the_field('job_english_title');
                                                                    echo esc_html($job_english_title);
                                                                    ?>
                                                                </p>
                                                            </div>
                                                            <span class="c-card__circle c-card__circle--modal">
                                                            </span>
                                                            <div class="c-card__text c-card__text--modal">
                                                                <p>
                                                                    <?php
                                                                    // the_field('job_description');
                                                                    echo esc_html($job_description);
                                                                    ?>
                                                                </p>
                                                            </div>
                                                        </div>
                                                    </a>
                                                </li>
                                                <?php
                                                // endif; 
                                                ?>
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
        <div class="p-top-message__title c-title js-fadein js-fadein-0s">
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
            </div>
        </div>
        <div class="p-top-message__container u-tb-sp-only">
            <div class="p-top-message__containerInner">
                <div class="p-top-message__text">
                    <img src="<?php echo theme_url('images/top/top-message-text-sp.svg'); ?>" alt="「見たことのないあなたに逢える」自信を持って言えるほどの成長できる環境があります。">
                </div>
                <div class="p-top-message__button c-button">
                    <a href="<?php echo home_url('#'); ?>">
                        <span>Read More</span>
                        <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.7832 2.50013L-0.00265767 4.92663L-0.00265743 0.0736237L4.7832 2.50013Z" fill="#3F6EB4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </section>
    <!-- /.p-top-message -->

    <section class="l-other-contents">
        <div class="l-other-contents__title c-title js-fadein js-fadein-0s">
            <div class="c-title__bar js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
            <h2>Other Contents</h2>
            <div class="c-title__bar js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
        </div>
        <div class="l-other-contents__inner c-inner">
            <ul class="l-other-contents__list">
                <li class="l-other-contents__item">
                    <a href="<?php echo home_url('data'); ?>">
                        <h3 class="l-other-contents__itemTitle">
                            TOA DATA
                            <span>数字で見るTOA</span>
                        </h3>
                        <div class="l-other-contents__circle">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                        <div class="l-other-contents__button c-button c-button--other">
                            <span>Read More</span>
                            <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.70508 4.02507L0.840324 7.41109L0.840324 0.639053L6.70508 4.02507Z" fill="#3F6EB4" />
                            </svg>
                        </div>
                    </a>
                </li>
                <li class="l-other-contents__item">
                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--faq">
                            FAQ
                            <span>よくある質問</span>
                        </h3>
                        <div class="l-other-contents__circle">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                        <div class="l-other-contents__button c-button c-button--other">
                            <span>Read More</span>
                            <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.70508 4.02507L0.840324 7.41109L0.840324 0.639053L6.70508 4.02507Z" fill="#3F6EB4" />
                            </svg>
                        </div>
                    </a>
                </li>
                <li class="l-other-contents__item">
                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle">
                            GUIDELINES
                            <span>募集要項</span>
                        </h3>
                        <div class="l-other-contents__circle">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                        <div class="l-other-contents__button c-button c-button--other">
                            <span>Read More</span>
                            <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.70508 4.02507L0.840324 7.41109L0.840324 0.639053L6.70508 4.02507Z" fill="#3F6EB4" />
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
