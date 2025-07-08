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
                    「わたしはこんなもんだ」と<br>
                    思っていたとしても、わたしたちは信じない。<br>
                    あなたはすごい。<br>
                    あなたは想像以上の何かを持っている。<br>
                    自分の可能性にふたをしないで、<br>
                    「共に育つ」をコンセプトにした教育制度、<br>
                    立場を超えて意見を言い合える社風。<br>
                    TOAなら、<br>
                    あなたの力を引き出せる。<br>
                    TOAなら、<br>
                    あなたの知らないあなたに逢える。
                </p>
            </div>
            <div class="p-about__gif">
                <img src="<?php echo theme_url('images/top/gif@2x.png'); ?>" width="210.27" height="195.36" alt="">
            </div>
            <div class="p-about__bottomText">
                <img class="u-pc-only" src="<?php echo theme_url('images/top/message-end-pc.svg'); ?>" alt="TOAと、まだ見たことのないあなたへ。">
                <p class="u-sp-only">
                    TOAと、<br>
                    まだ見たことないあなたへ。
                </p>
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


    <section class="p-content-01">
        <div class="p-content-01__title c-title js-fadein js-fadein-0s">
            <div class="c-title__bar js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
            <h2>Content O1</h2>
            <div class="c-title__bar js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
        </div>
        <div class="p-content-01__inner c-inner">
            <div class="p-content-01__slogan">
                <p>予想していた自分を大きく超えてしまった</p>
                <img class="u-pc-only" src="<?php echo theme_url('images/top/content-01-slogan-pc.svg'); ?>" alt="そんなもんじゃなかった社員たち">
                <p class="u-sp-only">
                    そんなもん<br>じゃなかった<br>社員たち
                </p>
            </div>
        </div>
        <div class="p-content-01__employees js-wrapper">
            <div class="p-content-01__employeesImages js-images">
                <div class="p-content-01__employeesImage p-content-01__employeesImage--first js-image js-not-sp">
                    <div class="p-content-01__employeesSlogan p-content-01__employeesSlogan--old">
                        <p>定時上がりの事務職</p>

                        <svg class="c-not not-svg-content-01 u-pc-only" width="605" height="13" viewBox="0 0 605 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path
                                class="n-part-content-01"
                                d="M29.5908 0.363885H34.6468V12.5127H30.2133L5.88996 5.49424V12.5127H0.833984V0.363885H5.26746L29.5908 7.38234V0.363885"
                                fill="white" />
                            <path
                                class="o-part-content-01"
                                d="M566.808 4.58888V8.30317V12.5204H43.1114L38.2604 12.5127V0.363885H43.3164L561.759 0.371625L566.815 0.363885V0.371625V4.58888H566.808M561.752 4.58888H43.3088V8.30317H561.752V4.58888"
                                fill="white" />
                            <path
                                class="t-part-content-01"
                                d="M604.037 0.325195H569.951V4.58115H584.443V12.5669H589.537V4.58115H604.029V0.325195H604.037"
                                fill="white" />
                        </svg>
                        <svg class="c-not not-svg-content-01-sp u-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Nの部分 -->
                            <path class="n-part-content-01-sp"
                                d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                fill="white" />
                            <!-- Oの部分 -->
                            <path class="o-part-content-01-sp"
                                d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                fill="white" />
                            <!-- Tの部分 -->
                            <path class="t-part-content-01-sp"
                                d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="p-content-01__employeesImage p-content-01__employeesImage--second js-image js-not-sp">
                    <div class="p-content-01__employeesSlogan p-content-01__employeesSlogan--old">
                        <p>高卒の工場勤務</p>
                        <svg class="c-not not-svg-content-01 u-pc-only" width="605" height="13" viewBox="0 0 605 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Nの部分 -->
                            <path
                                class="n-part-content-01"
                                d="M29.5908 0.363885H34.6468V12.5127H30.2133L5.88996 5.49424V12.5127H0.833984V0.363885H5.26746L29.5908 7.38234V0.363885"
                                fill="white" />

                            <!-- Oの部分 -->
                            <path
                                class="o-part-content-01"
                                d="M566.808 4.58888V8.30317V12.5204H43.1114L38.2604 12.5127V0.363885H43.3164L561.759 0.371625L566.815 0.363885V0.371625V4.58888H566.808M561.752 4.58888H43.3088V8.30317H561.752V4.58888"
                                fill="white" />

                            <!-- Tの部分 -->
                            <path
                                class="t-part-content-01"
                                d="M604.037 0.325195H569.951V4.58115H584.443V12.5669H589.537V4.58115H604.029V0.325195H604.037"
                                fill="white" />
                        </svg>
                        <svg class="c-not not-svg-content-01-sp u-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Nの部分 -->
                            <path class="n-part-content-01-sp"
                                d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                fill="white" />
                            <!-- Oの部分 -->
                            <path class="o-part-content-01-sp"
                                d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                fill="white" />
                            <!-- Tの部分 -->
                            <path class="t-part-content-01-sp"
                                d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="p-content-01__employeesImage p-content-01__employeesImage--third js-image js-not-sp">
                    <div class="p-content-01__employeesSlogan p-content-01__employeesSlogan--old">
                        <p>熱血体育会系営業</p>
                        <svg class="c-not not-svg-content-01 u-pc-only" width="605" height="13" viewBox="0 0 605 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Nの部分 -->
                            <path
                                class="n-part-content-01"
                                d="M29.5908 0.363885H34.6468V12.5127H30.2133L5.88996 5.49424V12.5127H0.833984V0.363885H5.26746L29.5908 7.38234V0.363885"
                                fill="white" />

                            <!-- Oの部分 -->
                            <path
                                class="o-part-content-01"
                                d="M566.808 4.58888V8.30317V12.5204H43.1114L38.2604 12.5127V0.363885H43.3164L561.759 0.371625L566.815 0.363885V0.371625V4.58888H566.808M561.752 4.58888H43.3088V8.30317H561.752V4.58888"
                                fill="white" />

                            <!-- Tの部分 -->
                            <path
                                class="t-part-content-01"
                                d="M604.037 0.325195H569.951V4.58115H584.443V12.5669H589.537V4.58115H604.029V0.325195H604.037"
                                fill="white" />
                        </svg>
                        <svg class="c-not not-svg-content-01-sp u-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Nの部分 -->
                            <path class="n-part-content-01-sp"
                                d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                fill="white" />
                            <!-- Oの部分 -->
                            <path class="o-part-content-01-sp"
                                d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                fill="white" />
                            <!-- Tの部分 -->
                            <path class="t-part-content-01-sp"
                                d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="p-content-01__employeesImage p-content-01__employeesImage--fourth js-image js-not-sp">
                    <div class="p-content-01__employeesSlogan p-content-01__employeesSlogan--old">
                        <p>大工場の一つの駒</p>
                        <svg class="c-not not-svg-content-01 u-pc-only" width="605" height="13" viewBox="0 0 605 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Nの部分 -->
                            <path
                                class="n-part-content-01"
                                d="M29.5908 0.363885H34.6468V12.5127H30.2133L5.88996 5.49424V12.5127H0.833984V0.363885H5.26746L29.5908 7.38234V0.363885"
                                fill="white" />

                            <!-- Oの部分 -->
                            <path
                                class="o-part-content-01"
                                d="M566.808 4.58888V8.30317V12.5204H43.1114L38.2604 12.5127V0.363885H43.3164L561.759 0.371625L566.815 0.363885V0.371625V4.58888H566.808M561.752 4.58888H43.3088V8.30317H561.752V4.58888"
                                fill="white" />

                            <!-- Tの部分 -->
                            <path
                                class="t-part-content-01"
                                d="M604.037 0.325195H569.951V4.58115H584.443V12.5669H589.537V4.58115H604.029V0.325195H604.037"
                                fill="white" />
                        </svg>
                        <svg class="c-not not-svg-content-01-sp u-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Nの部分 -->
                            <path class="n-part-content-01-sp"
                                d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                fill="white" />
                            <!-- Oの部分 -->
                            <path class="o-part-content-01-sp"
                                d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                fill="white" />
                            <!-- Tの部分 -->
                            <path class="t-part-content-01-sp"
                                d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="p-content-01__employeesImage p-content-01__employeesImage--fifth js-image js-not-sp">
                    <div class="p-content-01__employeesSlogan p-content-01__employeesSlogan--old">
                        <p>知識ゼロの文系出身</p>
                        <svg class="c-not not-svg-content-01 u-pc-only" width="605" height="13" viewBox="0 0 605 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Nの部分 -->
                            <path
                                class="n-part-content-01"
                                d="M29.5908 0.363885H34.6468V12.5127H30.2133L5.88996 5.49424V12.5127H0.833984V0.363885H5.26746L29.5908 7.38234V0.363885"
                                fill="white" />

                            <!-- Oの部分 -->
                            <path
                                class="o-part-content-01"
                                d="M566.808 4.58888V8.30317V12.5204H43.1114L38.2604 12.5127V0.363885H43.3164L561.759 0.371625L566.815 0.363885V0.371625V4.58888H566.808M561.752 4.58888H43.3088V8.30317H561.752V4.58888"
                                fill="white" />

                            <!-- Tの部分 -->
                            <path
                                class="t-part-content-01"
                                d="M604.037 0.325195H569.951V4.58115H584.443V12.5669H589.537V4.58115H604.029V0.325195H604.037"
                                fill="white" />
                        </svg>
                        <svg class="c-not not-svg-content-01-sp u-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Nの部分 -->
                            <path class="n-part-content-01-sp"
                                d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                fill="white" />
                            <!-- Oの部分 -->
                            <path class="o-part-content-01-sp"
                                d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                fill="white" />
                            <!-- Tの部分 -->
                            <path class="t-part-content-01-sp"
                                d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
                <div class="p-content-01__employeesImage p-content-01__employeesImage--sixth js-image js-not-sp">
                    <div class="p-content-01__employeesSlogan p-content-01__employeesSlogan--old">
                        <p>高卒の工場勤務</p>
                        <svg class="c-not not-svg-content-01 u-pc-only" width="605" height="13" viewBox="0 0 605 13" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Nの部分 -->
                            <path
                                class="n-part-content-01"
                                d="M29.5908 0.363885H34.6468V12.5127H30.2133L5.88996 5.49424V12.5127H0.833984V0.363885H5.26746L29.5908 7.38234V0.363885"
                                fill="white" />

                            <!-- Oの部分 -->
                            <path
                                class="o-part-content-01"
                                d="M566.808 4.58888V8.30317V12.5204H43.1114L38.2604 12.5127V0.363885H43.3164L561.759 0.371625L566.815 0.363885V0.371625V4.58888H566.808M561.752 4.58888H43.3088V8.30317H561.752V4.58888"
                                fill="white" />

                            <!-- Tの部分 -->
                            <path
                                class="t-part-content-01"
                                d="M604.037 0.325195H569.951V4.58115H584.443V12.5669H589.537V4.58115H604.029V0.325195H604.037"
                                fill="white" />
                        </svg>
                        <svg class="c-not not-svg-content-01-sp u-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <!-- Nの部分 -->
                            <path class="n-part-content-01-sp"
                                d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z"
                                fill="white" />
                            <!-- Oの部分 -->
                            <path class="o-part-content-01-sp"
                                d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z"
                                fill="white" />
                            <!-- Tの部分 -->
                            <path class="t-part-content-01-sp"
                                d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z"
                                fill="white" />
                        </svg>
                    </div>
                </div>
            </div>
            <div class="p-content-01__employeesContents js-contents">
                <div class="p-content-01__employeesContent p-content-01__employeesContent--first js-content js-not">
                    <div class="p-content-01__employeesInner">
                        <div class="p-content-01__employeesHeadline">
                            <img class="u-pc-only" src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <p class="u-sp-only">そんなもんじゃなかった</p>
                            <span>01</span>
                        </div>
                        <div class="p-content-01__employeesSlogan p-content-01__employeesSlogan--new">
                            <p>車体骨格開発の<br>エース</p>
                        </div>
                        <div class="p-content-01__employeesInfo">
                            <p>技術開発部　川上 真由子</p>
                        </div>
                        <div class="p-content-01__button c-button c-button--blue">
                            <a href="<?php echo home_url('#'); ?>">
                                <img src="<?php echo theme_url('images/top/button-text.svg'); ?>" alt="どんなもん？">
                                <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-content-01__employeesContent p-content-01__employeesContent--second js-content js-not">
                    <div class="p-content-01__employeesInner">
                        <div class="p-content-01__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>02</span>
                        </div>
                        <div class="p-content-01__employeesSlogan p-content-01__employeesSlogan--new">
                            <p>アメリカ勤務<br>2年目</p>
                        </div>
                        <div class="p-content-01__employeesInfo">
                            <p>第3生産技術部　田島 遼</p>
                        </div>
                        <div class="p-content-01__button c-button c-button--blue">
                            <a href="<?php echo home_url('#'); ?>">
                                <img src="<?php echo theme_url('images/top/button-text.svg'); ?>" alt="どんなもん？">
                                <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-content-01__employeesContent p-content-01__employeesContent--third js-content js-not">
                    <div class="p-content-01__employeesInner">
                        <div class="p-content-01__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>03</span>
                        </div>
                        <div class="p-content-01__employeesSlogan p-content-01__employeesSlogan--new">
                            <p>設計もできる<br>営業マン</p>
                        </div>
                        <div class="p-content-01__employeesInfo">
                            <p>営業部　山岡 智樹</p>
                        </div>
                        <div class="p-content-01__button c-button c-button--blue">
                            <a href="<?php echo home_url('#'); ?>">
                                <img src="<?php echo theme_url('images/top/button-text.svg'); ?>" alt="どんなもん？">
                                <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-content-01__employeesContent p-content-01__employeesContent--fourth js-content js-not">
                    <div class="p-content-01__employeesInner">
                        <div class="p-content-01__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>04</span>
                        </div>
                        <div class="p-content-01__employeesSlogan p-content-01__employeesSlogan--new">
                            <p>あの鉄骨部材の<br>設計者</p>
                        </div>
                        <div class="p-content-01__employeesInfo">
                            <p>第2生産技術部　吉田 咲希</p>
                        </div>
                        <div class="p-content-01__button c-button c-button--blue">
                            <a href="<?php echo home_url('#'); ?>">
                                <img src="<?php echo theme_url('images/top/button-text.svg'); ?>" alt="どんなもん？">
                                <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-content-01__employeesContent p-content-01__employeesContent--fifth js-content js-not">
                    <div class="p-content-01__employeesInner">
                        <div class="p-content-01__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>05</span>
                        </div>
                        <div class="p-content-01__employeesSlogan p-content-01__employeesSlogan--new">
                            <p>車体骨格開発の<br>エース</p>
                        </div>
                        <div class="p-content-01__employeesInfo">
                            <p>技術開発部　川上 真由子</p>
                        </div>
                        <div class="p-content-01__button c-button c-button--blue">
                            <a href="<?php echo home_url('#'); ?>">
                                <img src="<?php echo theme_url('images/top/button-text.svg'); ?>" alt="どんなもん？">
                                <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="p-content-01__employeesContent p-content-01__employeesContent--sixth js-content js-not">
                    <div class="p-content-01__employeesInner">
                        <div class="p-content-01__employeesHeadline">
                            <img src="<?php echo theme_url('images/top/employee-headline.svg'); ?>" alt="そんなもんじゃなかった">
                            <span>06</span>
                        </div>
                        <div class="p-content-01__employeesSlogan p-content-01__employeesSlogan--new">
                            <p>自動化設備の<br>導入を一任</p>
                        </div>
                        <div class="p-content-01__employeesInfo">
                            <p>システム開発部　田島 遼</p>
                        </div>
                        <div class="p-content-01__button c-button c-button--blue">
                            <a href="<?php echo home_url('#'); ?>">
                                <img src="<?php echo theme_url('images/top/button-text.svg'); ?>" alt="どんなもん？">
                                <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="white" />
                                </svg>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.p-content-01 -->

    <section class="p-content-02">
        <div class="p-content-02__title c-title c-title--blue js-fadein js-fadein-0s">
            <div class="c-title__bar js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-blue.svg'); ?>" alt="">
            </div>
            <h2>Content O2</h2>
            <div class="c-title__bar js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-blue.svg'); ?>" alt="">
            </div>
        </div>
        <div class="p-content-02__inner c-inner c-inner--narrow">
            <div class="p-content-02__slogan">
                <p>可能性を引き出すために、そんなもんはやらない。</p>
                <picture>
                    <source
                        srcset="<?php echo theme_url('images/top/10-not-sp.svg'); ?>"
                        media="(max-width: 576px)" />
                    <img src="<?php echo theme_url('images/top/10-not.svg'); ?>" alt="10のNOT">
                </picture>
            </div>

            <ol class="p-content-02__list p-content-02__list--first">
                <li class="p-content-02__item p-content-02__item--first js-not-content-02-normal">
                    <button class="p-content-02__itemTrigger" data-micromodal-trigger="modal-01">
                        <div class="p-content-02__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>01</span>
                        </div>
                        <h3 class="p-content-02__itemTitle p-content-02__itemTitle--first">
                            放ったらかし
                            <svg
                                class="c-not js-not-svg is-content u-pc-only"
                                width="547"
                                height="8"
                                viewBox="0 0 547 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part is-content-02"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part is-content-02"
                                    d="M521.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L518.029 0.030342L521.477 0.0252841V0.030342V2.78635H521.472ZM518.024 2.78635L28.9695 2.78646V5.21377L518.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part is-content-02"
                                    d="M546.864 0H523.616V2.78129H533.5V8H536.974V2.78129H546.859V0H546.864Z"
                                    fill="white" />
                            </svg>

                            <svg class="c-not js-not-svg is-content-02-sp u-sp-only" width="330" height="6" viewBox="0 0 330 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path class="n-part is-content-02-sp" d="M14.1119 0.02H16.575V5.95H14.4236L2.59096 2.52V5.95H0.12793V0.02H2.27931L14.1019 3.45V0.02H14.1119Z" fill="white" />
                                <!-- Oの部分 -->
                                <path class="o-part is-content-02-sp" d="M311.526 2.08V5.96H18.3242V0.02H311.536V2.09H309.073H20.7772V3.9H309.062H311.526Z" fill="white" />
                                <!-- Tの部分 -->
                                <path class="t-part is-content-02-sp" d="M329.631 0H313.064V2.08H320.111V5.98H322.584V2.08H329.631V0Z" fill="white" />
                            </svg>
                        </h3>
                        <div class="p-content-02__itemMore">
                            <p>MORE</p>
                        </div>
                    </button>
                </li>
                <li class="p-content-02__item p-content-02__item--second js-not-content-02-normal">
                    <button class="p-content-02__itemTrigger" data-micromodal-trigger="modal-02">
                        <div class="p-content-02__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>02</span>
                        </div>
                        <h3 class="p-content-02__itemTitle p-content-02__itemTitle--second">
                            文系理系指定
                            <svg
                                class="c-not js-not-svg is-content u-pc-only"
                                width="547"
                                height="8"
                                viewBox="0 0 547 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part is-content-02"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part is-content-02"
                                    d="M521.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L518.029 0.030342L521.477 0.0252841V0.030342V2.78635H521.472ZM518.024 2.78635L28.9695 2.78646V5.21377L518.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part is-content-02"
                                    d="M546.864 0H523.616V2.78129H533.5V8H536.974V2.78129H546.859V0H546.864Z"
                                    fill="white" />
                            </svg>
                            <svg class="c-not js-not-svg is-content-02-sp u-sp-only" width="330" height="6" viewBox="0 0 330 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path class="n-part is-content-02-sp" d="M14.1119 0.02H16.575V5.95H14.4236L2.59096 2.52V5.95H0.12793V0.02H2.27931L14.1019 3.45V0.02H14.1119Z" fill="white" />
                                <!-- Oの部分 -->
                                <path class="o-part is-content-02-sp" d="M311.526 2.08V5.96H18.3242V0.02H311.536V2.09H309.073H20.7772V3.9H309.062H311.526Z" fill="white" />
                                <!-- Tの部分 -->
                                <path class="t-part is-content-02-sp" d="M329.631 0H313.064V2.08H320.111V5.98H322.584V2.08H329.631V0Z" fill="white" />
                            </svg>
                        </h3>
                        <div class="p-content-02__itemMore">
                            <p>MORE</p>
                        </div>
                    </button>
                </li>
            </ol>
            <ol class="p-content-02__list p-content-02__list--second">
                <li class="p-content-02__item p-content-02__item--large js-not-content-02-large">
                    <button class="p-content-02__itemTrigger" data-micromodal-trigger="modal-03">
                        <div class="p-content-02__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>03</span>
                        </div>
                        <h3 class="p-content-02__itemTitle p-content-02__itemTitle--large">
                            賞与カット
                            <svg
                                class="c-not js-not-svg is-content u-pc-only"
                                width="717"
                                height="8"
                                viewBox="0 0 717 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part is-content-large"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part is-content-large"
                                    d="M691.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L688.029 0.030342L691.477 0.0252841V0.030342V2.78635H691.472ZM688.024 2.78635L28.9695 2.78646V5.21377L688.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part is-content-large"
                                    d="M716.864 0H693.616V2.78129H703.5V8H706.974V2.78129H716.859V0H716.864Z"
                                    fill="white" />
                            </svg>
                            <svg class="c-not js-not-svg is-content-large-sp u-sp-only" width="330" height="6" viewBox="0 0 330 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path class="n-part is-content-large-sp" d="M14.1119 0.02H16.575V5.95H14.4236L2.59096 2.52V5.95H0.12793V0.02H2.27931L14.1019 3.45V0.02H14.1119Z" fill="white" />
                                <!-- Oの部分 -->
                                <path class="o-part is-content-large-sp" d="M311.526 2.08V5.96H18.3242V0.02H311.536V2.09H309.073H20.7772V3.9H309.062H311.526Z" fill="white" />
                                <!-- Tの部分 -->
                                <path class="t-part is-content-large-sp" d="M329.631 0H313.064V2.08H320.111V5.98H322.584V2.08H329.631V0Z" fill="white" />
                            </svg>
                        </h3>
                        <div class="p-content-02__itemMore">
                            <p>MORE</p>
                        </div>
                    </button>
                </li>
                <li class="p-content-02__item p-content-02__item--small js-not-content-02-small">
                    <button class="p-content-02__itemTrigger" data-micromodal-trigger="modal-04">
                        <div class="p-content-02__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>04</span>
                        </div>
                        <h3 class="p-content-02__itemTitle p-content-02__itemTitle--small">
                            年功序列
                            <svg
                                class="c-not js-not-svg is-content u-pc-only"
                                width="275"
                                height="8"
                                viewBox="0 0 275 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part is-content-small"
                                    d="M19.6133 0.0252841H23.0617V7.9646H20.0379L3.44838 3.378V7.9646H0V0.0252841H3.0238L19.6133 4.61188V0.0252841Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part is-content-small"
                                    d="M249.608 2.78635V5.21365V7.96966H28.8348L25.5263 7.9646V0.0252841H28.9746L246.165 0.030342L249.614 0.0252841V0.030342V2.78635H249.608ZM246.16 2.78635H28.9695V5.21365H246.16V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part is-content-small"
                                    d="M275 0H251.752V2.78129H261.636V8H265.111V2.78129H274.995V0H275Z"
                                    fill="white" />
                            </svg>
                            <svg class="c-not js-not-svg is-content-sp u-sp-only" width="330" height="6" viewBox="0 0 330 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path class="n-part is-content-small-sp" d="M14.1119 0.02H16.575V5.95H14.4236L2.59096 2.52V5.95H0.12793V0.02H2.27931L14.1019 3.45V0.02H14.1119Z" fill="white" />
                                <!-- Oの部分 -->
                                <path class="o-part is-content-small-sp" d="M311.526 2.08V5.96H18.3242V0.02H311.536V2.09H309.073H20.7772V3.9H309.062H311.526Z" fill="white" />
                                <!-- Tの部分 -->
                                <path class="t-part is-content-small-sp" d="M329.631 0H313.064V2.08H320.111V5.98H322.584V2.08H329.631V0Z" fill="white" />
                            </svg>
                        </h3>
                        <div class="p-content-02__itemMore">
                            <p>MORE</p>
                        </div>
                    </button>
                </li>
                <li class="p-content-02__item p-content-02__item--middle js-not-content-02-small">
                    <button class="p-content-02__itemTrigger" data-micromodal-trigger="modal-05">
                        <div class="p-content-02__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>05</span>
                        </div>
                        <h3 class="p-content-02__itemTitle p-content-02__itemTitle--middle">
                            単純労働
                            <svg
                                class="c-not js-not-svg is-content u-pc-only"
                                width="275"
                                height="8"
                                viewBox="0 0 275 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part is-content-small"
                                    d="M19.6133 0.0252841H23.0617V7.9646H20.0379L3.44838 3.378V7.9646H0V0.0252841H3.0238L19.6133 4.61188V0.0252841Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part is-content-small"
                                    d="M249.608 2.78635V5.21365V7.96966H28.8348L25.5263 7.9646V0.0252841H28.9746L246.165 0.030342L249.614 0.0252841V0.030342V2.78635H249.608ZM246.16 2.78635H28.9695V5.21365H246.16V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part is-content-small"
                                    d="M275 0H251.752V2.78129H261.636V8H265.111V2.78129H274.995V0H275Z"
                                    fill="white" />
                            </svg>
                            <svg class="c-not js-not-svg is-content-sp u-sp-only" width="330" height="6" viewBox="0 0 330 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path class="n-part is-content-small-sp" d="M14.1119 0.02H16.575V5.95H14.4236L2.59096 2.52V5.95H0.12793V0.02H2.27931L14.1019 3.45V0.02H14.1119Z" fill="white" />
                                <!-- Oの部分 -->
                                <path class="o-part is-content-small-sp" d="M311.526 2.08V5.96H18.3242V0.02H311.536V2.09H309.073H20.7772V3.9H309.062H311.526Z" fill="white" />
                                <!-- Tの部分 -->
                                <path class="t-part is-content-small-sp" d="M329.631 0H313.064V2.08H320.111V5.98H322.584V2.08H329.631V0Z" fill="white" />
                            </svg>
                        </h3>
                        <div class="p-content-02__itemMore">
                            <p>MORE</p>
                        </div>
                    </button>
                </li>
            </ol>

            <picture class="p-content-02__image">
                <source
                    srcset="<?php echo theme_url('images/top/content-02-image-01-sp@2x.jpg'); ?>"
                    media="(max-width: 768px)" />
                <img src="<?php echo theme_url('images/top/content-02-image-01-pc@2x.jpg'); ?>" width="1338" height="616" alt="">
            </picture>

            <ol class="p-content-02__list p-content-02__list--first">
                <li class="p-content-02__item p-content-02__item--first js-not-content-02-normal">
                    <button class="p-content-02__itemTrigger" data-micromodal-trigger="modal-06">
                        <div class="p-content-02__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>06</span>
                        </div>
                        <h3 class="p-content-02__itemTitle p-content-02__itemTitle--first">
                            キャリアの不安
                            <svg
                                class="c-not js-not-svg is-content u-pc-only"
                                width="547"
                                height="8"
                                viewBox="0 0 547 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part is-content-02"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part is-content-02"
                                    d="M521.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L518.029 0.030342L521.477 0.0252841V0.030342V2.78635H521.472ZM518.024 2.78635L28.9695 2.78646V5.21377L518.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part is-content-02"
                                    d="M546.864 0H523.616V2.78129H533.5V8H536.974V2.78129H546.859V0H546.864Z"
                                    fill="white" />
                            </svg>
                            <svg class="c-not js-not-svg is-content-02-sp u-sp-only" width="330" height="6" viewBox="0 0 330 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path class="n-part is-content-02-sp" d="M14.1119 0.02H16.575V5.95H14.4236L2.59096 2.52V5.95H0.12793V0.02H2.27931L14.1019 3.45V0.02H14.1119Z" fill="white" />
                                <!-- Oの部分 -->
                                <path class="o-part is-content-02-sp" d="M311.526 2.08V5.96H18.3242V0.02H311.536V2.09H309.073H20.7772V3.9H309.062H311.526Z" fill="white" />
                                <!-- Tの部分 -->
                                <path class="t-part is-content-02-sp" d="M329.631 0H313.064V2.08H320.111V5.98H322.584V2.08H329.631V0Z" fill="white" />
                            </svg>
                        </h3>
                        <div class="p-content-02__itemMore">
                            <p>MORE</p>
                        </div>
                    </button>
                </li>
                <li class="p-content-02__item p-content-02__item--second js-not-content-02-normal">
                    <button class="p-content-02__itemTrigger" data-micromodal-trigger="modal-07">
                        <div class="p-content-02__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>07</span>
                        </div>
                        <h3 class="p-content-02__itemTitle p-content-02__itemTitle--second">
                            薄い福利厚生
                            <svg
                                class="c-not js-not-svg is-content u-pc-only"
                                width="547"
                                height="8"
                                viewBox="0 0 547 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part is-content-02"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part is-content-02"
                                    d="M521.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L518.029 0.030342L521.477 0.0252841V0.030342V2.78635H521.472ZM518.024 2.78635L28.9695 2.78646V5.21377L518.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part is-content-02"
                                    d="M546.864 0H523.616V2.78129H533.5V8H536.974V2.78129H546.859V0H546.864Z"
                                    fill="white" />
                            </svg>
                            <svg class="c-not js-not-svg is-content-02-sp u-sp-only" width="330" height="6" viewBox="0 0 330 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path class="n-part is-content-02-sp" d="M14.1119 0.02H16.575V5.95H14.4236L2.59096 2.52V5.95H0.12793V0.02H2.27931L14.1019 3.45V0.02H14.1119Z" fill="white" />
                                <!-- Oの部分 -->
                                <path class="o-part is-content-02-sp" d="M311.526 2.08V5.96H18.3242V0.02H311.536V2.09H309.073H20.7772V3.9H309.062H311.526Z" fill="white" />
                                <!-- Tの部分 -->
                                <path class="t-part is-content-02-sp" d="M329.631 0H313.064V2.08H320.111V5.98H322.584V2.08H329.631V0Z" fill="white" />
                            </svg>
                        </h3>
                        <div class="p-content-02__itemMore">
                            <p>MORE</p>
                            <img src="" alt="">
                        </div>
                    </button>
                </li>
            </ol>
            <ol class="p-content-02__list p-content-02__list--second">
                <li class="p-content-02__item p-content-02__item--small js-not-content-02-small">
                    <button class="p-content-02__itemTrigger" data-micromodal-trigger="modal-08">
                        <div class="p-content-02__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>08</span>
                        </div>
                        <h3 class="p-content-02__itemTitle p-content-02__itemTitle--small">
                            やる気ゼロ
                            <svg
                                class="c-not js-not-svg is-content u-pc-only"
                                width="275"
                                height="8"
                                viewBox="0 0 275 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part is-content-small"
                                    d="M19.6133 0.0252841H23.0617V7.9646H20.0379L3.44838 3.378V7.9646H0V0.0252841H3.0238L19.6133 4.61188V0.0252841Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part is-content-small"
                                    d="M249.608 2.78635V5.21365V7.96966H28.8348L25.5263 7.9646V0.0252841H28.9746L246.165 0.030342L249.614 0.0252841V0.030342V2.78635H249.608ZM246.16 2.78635H28.9695V5.21365H246.16V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part is-content-small"
                                    d="M275 0H251.752V2.78129H261.636V8H265.111V2.78129H274.995V0H275Z"
                                    fill="white" />
                            </svg>
                            <svg class="c-not js-not-svg is-content-small-sp u-sp-only" width="330" height="6" viewBox="0 0 330 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path class="n-part is-content-small-sp" d="M14.1119 0.02H16.575V5.95H14.4236L2.59096 2.52V5.95H0.12793V0.02H2.27931L14.1019 3.45V0.02H14.1119Z" fill="white" />
                                <!-- Oの部分 -->
                                <path class="o-part is-content-small-sp" d="M311.526 2.08V5.96H18.3242V0.02H311.536V2.09H309.073H20.7772V3.9H309.062H311.526Z" fill="white" />
                                <!-- Tの部分 -->
                                <path class="t-part is-content-small-sp" d="M329.631 0H313.064V2.08H320.111V5.98H322.584V2.08H329.631V0Z" fill="white" />
                            </svg>
                        </h3>
                        <div class="p-content-02__itemMore">
                            <p>MORE</p>
                            <img src="" alt="">
                        </div>
                    </button>
                </li>
                <li class="p-content-02__item p-content-02__item--middle js-not-content-02-small">
                    <button class="p-content-02__itemTrigger" data-micromodal-trigger="modal-09">
                        <div class="p-content-02__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>09</span>
                        </div>
                        <h3 class="p-content-02__itemTitle p-content-02__itemTitle--middle">
                            休めない
                            <svg
                                class="c-not js-not-svg is-content u-pc-only"
                                width="275"
                                height="8"
                                viewBox="0 0 275 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part is-content-small"
                                    d="M19.6133 0.0252841H23.0617V7.9646H20.0379L3.44838 3.378V7.9646H0V0.0252841H3.0238L19.6133 4.61188V0.0252841Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part is-content-small"
                                    d="M249.608 2.78635V5.21365V7.96966H28.8348L25.5263 7.9646V0.0252841H28.9746L246.165 0.030342L249.614 0.0252841V0.030342V2.78635H249.608ZM246.16 2.78635H28.9695V5.21365H246.16V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part is-content-small"
                                    d="M275 0H251.752V2.78129H261.636V8H265.111V2.78129H274.995V0H275Z"
                                    fill="white" />
                            </svg>
                            <svg class="c-not js-not-svg is-content-small-sp u-sp-only" width="330" height="6" viewBox="0 0 330 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path class="n-part is-content-small-sp" d="M14.1119 0.02H16.575V5.95H14.4236L2.59096 2.52V5.95H0.12793V0.02H2.27931L14.1019 3.45V0.02H14.1119Z" fill="white" />
                                <!-- Oの部分 -->
                                <path class="o-part is-content-small-sp" d="M311.526 2.08V5.96H18.3242V0.02H311.536V2.09H309.073H20.7772V3.9H309.062H311.526Z" fill="white" />
                                <!-- Tの部分 -->
                                <path class="t-part is-content-small-sp" d="M329.631 0H313.064V2.08H320.111V5.98H322.584V2.08H329.631V0Z" fill="white" />
                            </svg>
                        </h3>
                        <div class="p-content-02__itemMore">
                            <p>MORE</p>
                            <img src="" alt="">
                        </div>
                    </button>
                </li>
                <li class="p-content-02__item p-content-02__item--large js-not-content-02-large">
                    <button class="p-content-02__itemTrigger" data-micromodal-trigger="modal-10">
                        <div class="p-content-02__itemNumber">
                            <img src="<?php echo theme_url('images/top/item-not.svg'); ?>" alt="not">
                            <span>10</span>
                        </div>
                        <h3 class="p-content-02__itemTitle p-content-02__itemTitle--large">
                            突然のリストラ
                            <svg
                                class="c-not js-not-svg is-content u-pc-only"
                                width="717"
                                height="8"
                                viewBox="0 0 717 8"
                                fill="none"
                                xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path
                                    class="n-part is-content-large"
                                    d="M19.6133 0.0253996H23.0617V7.96472H20.0379L3.44838 3.37812V7.96472H0V0.0253996H3.0238L19.6133 4.612V0.0253996Z"
                                    fill="white" />
                                <!-- Oの部分 -->
                                <path
                                    class="o-part is-content-large"
                                    d="M691.472 2.78635V5.21365V7.96966L28.8348 7.96978L25.5263 7.96472V0.0253996H28.9746L688.029 0.030342L691.477 0.0252841V0.030342V2.78635H691.472ZM688.024 2.78635L28.9695 2.78646V5.21377L688.024 5.21365V2.78635Z"
                                    fill="white" />
                                <!-- Tの部分 -->
                                <path
                                    class="t-part is-content-large"
                                    d="M716.864 0H693.616V2.78129H703.5V8H706.974V2.78129H716.859V0H716.864Z"
                                    fill="white" />
                            </svg>
                            <svg class="c-not js-not-svg is-content-large-sp u-sp-only" width="330" height="6" viewBox="0 0 330 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <!-- Nの部分 -->
                                <path class="n-part is-content-large-sp" d="M14.1119 0.02H16.575V5.95H14.4236L2.59096 2.52V5.95H0.12793V0.02H2.27931L14.1019 3.45V0.02H14.1119Z" fill="white" />
                                <!-- Oの部分 -->
                                <path class="o-part is-content-large-sp" d="M311.526 2.08V5.96H18.3242V0.02H311.536V2.09H309.073H20.7772V3.9H309.062H311.526Z" fill="white" />
                                <!-- Tの部分 -->
                                <path class="t-part is-content-large-sp" d="M329.631 0H313.064V2.08H320.111V5.98H322.584V2.08H329.631V0Z" fill="white" />
                            </svg>
                        </h3>
                        <div class="p-content-02__itemMore">
                            <p>MORE</p>
                            <img src="" alt="">
                        </div>
                    </button>
                </li>
            </ol>

            <picture class="p-content-02__image">
                <source
                    srcset="<?php echo theme_url('images/top/content-02-image-02-sp@2x.jpg'); ?>"
                    media="(max-width: 768px)" />
                <img src="<?php echo theme_url('images/top/content-02-image-02-pc@2x.jpg'); ?>" width="1339" height="617" alt="">
                </pi>
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
                                文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、言葉に魅力を感じ東亜工業を選びました。
                            </p>
                        </div>
                        <div class="p-modal__image">
                            <img src="<?php echo theme_url('images/top/modal-01-pc@2x.jpg'); ?>" width="281" height="281" alt="">
                        </div>
                    </div>
                    <footer class="p-modal__footer u-tb-sp-only">
                        <div class="p-modal__pagination">
                            <!-- <button class="p-modal__prev" data-micromodal-trigger="modal-07">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="11.1819" r="10.0455" stroke="white" />
                                    <path d="M11.8637 9.20463L7.90918 11.5114L11.8637 13.8183" stroke="white" stroke-linecap="round" />
                                </svg>
                                <span>Prev</span>
                            </button> -->
                            <button class="p-modal__list" data-micromodal-close>
                                <span>一覧へ戻る</span>
                            </button>
                            <button class="p-modal__next" data-micromodal-trigger="modal-02">
                                <span>Next</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="10.5455" r="10.0455" transform="matrix(-1 0 0 1 21.9546 0.636353)" stroke="white" />
                                    <path d="M10.0909 9.20457L14.0454 11.5114L10.0909 13.8182" stroke="white" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </footer>
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
                                文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、言葉に魅力を感じ東亜工業を選びました。
                            </p>
                        </div>
                        <div class="p-modal__image">
                            <img src="<?php echo theme_url('images/top/modal-01-pc@2x.jpg'); ?>" width="281" height="281" alt="">
                        </div>
                    </div>
                    <footer class="p-modal__footer u-tb-sp-only">
                        <div class="p-modal__pagination">
                            <button class="p-modal__prev" data-micromodal-trigger="modal-01">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="11.1819" r="10.0455" stroke="white" />
                                    <path d="M11.8637 9.20463L7.90918 11.5114L11.8637 13.8183" stroke="white" stroke-linecap="round" />
                                </svg>
                                <span>Prev</span>
                            </button>
                            <button class="p-modal__list" data-micromodal-close>
                                <span>一覧へ戻る</span>
                            </button>
                            <button class="p-modal__next" data-micromodal-trigger="modal-03">
                                <span>Next</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="10.5455" r="10.0455" transform="matrix(-1 0 0 1 21.9546 0.636353)" stroke="white" />
                                    <path d="M10.0909 9.20457L14.0454 11.5114L10.0909 13.8182" stroke="white" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </footer>
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
                                文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、言葉に魅力を感じ東亜工業を選びました。
                            </p>
                        </div>
                        <div class="p-modal__image">
                            <img src="<?php echo theme_url('images/top/modal-01-pc@2x.jpg'); ?>" width="281" height="281" alt="">
                        </div>
                    </div>
                    <footer class="p-modal__footer u-tb-sp-only">
                        <div class="p-modal__pagination">
                            <button class="p-modal__prev" data-micromodal-trigger="modal-02">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="11.1819" r="10.0455" stroke="white" />
                                    <path d="M11.8637 9.20463L7.90918 11.5114L11.8637 13.8183" stroke="white" stroke-linecap="round" />
                                </svg>
                                <span>Prev</span>
                            </button>
                            <button class="p-modal__list" data-micromodal-close>
                                <span>一覧へ戻る</span>
                            </button>
                            <button class="p-modal__next" data-micromodal-trigger="modal-04">
                                <span>Next</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="10.5455" r="10.0455" transform="matrix(-1 0 0 1 21.9546 0.636353)" stroke="white" />
                                    <path d="M10.0909 9.20457L14.0454 11.5114L10.0909 13.8182" stroke="white" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </footer>
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
                                文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、言葉に魅力を感じ東亜工業を選びました。
                            </p>
                        </div>
                        <div class="p-modal__image">
                            <img src="<?php echo theme_url('images/top/modal-01-pc@2x.jpg'); ?>" width="281" height="281" alt="">
                        </div>
                    </div>
                    <footer class="p-modal__footer u-tb-sp-only">
                        <div class="p-modal__pagination">
                            <button class="p-modal__prev" data-micromodal-trigger="modal-03">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="11.1819" r="10.0455" stroke="white" />
                                    <path d="M11.8637 9.20463L7.90918 11.5114L11.8637 13.8183" stroke="white" stroke-linecap="round" />
                                </svg>
                                <span>Prev</span>
                            </button>
                            <button class="p-modal__list" data-micromodal-close>
                                <span>一覧へ戻る</span>
                            </button>
                            <button class="p-modal__next" data-micromodal-trigger="modal-05">
                                <span>Next</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="10.5455" r="10.0455" transform="matrix(-1 0 0 1 21.9546 0.636353)" stroke="white" />
                                    <path d="M10.0909 9.20457L14.0454 11.5114L10.0909 13.8182" stroke="white" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </footer>
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
                                文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、言葉に魅力を感じ東亜工業を選びました。
                            </p>
                        </div>
                        <div class="p-modal__image">
                            <img src="<?php echo theme_url('images/top/modal-01-pc@2x.jpg'); ?>" width="281" height="281" alt="">
                        </div>
                    </div>
                    <footer class="p-modal__footer u-tb-sp-only">
                        <div class="p-modal__pagination">
                            <button class="p-modal__prev" data-micromodal-trigger="modal-04">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="11.1819" r="10.0455" stroke="white" />
                                    <path d="M11.8637 9.20463L7.90918 11.5114L11.8637 13.8183" stroke="white" stroke-linecap="round" />
                                </svg>
                                <span>Prev</span>
                            </button>
                            <button class="p-modal__list" data-micromodal-close>
                                <span>一覧へ戻る</span>
                            </button>
                            <button class="p-modal__next" data-micromodal-trigger="modal-06">
                                <span>Next</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="10.5455" r="10.0455" transform="matrix(-1 0 0 1 21.9546 0.636353)" stroke="white" />
                                    <path d="M10.0909 9.20457L14.0454 11.5114L10.0909 13.8182" stroke="white" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </footer>
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
                                文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、言葉に魅力を感じ東亜工業を選びました。
                            </p>
                        </div>
                        <div class="p-modal__image">
                            <img src="<?php echo theme_url('images/top/modal-01-pc@2x.jpg'); ?>" width="281" height="281" alt="">
                        </div>
                    </div>
                    <footer class="p-modal__footer u-tb-sp-only">
                        <div class="p-modal__pagination">
                            <button class="p-modal__prev" data-micromodal-trigger="modal-05">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="11.1819" r="10.0455" stroke="white" />
                                    <path d="M11.8637 9.20463L7.90918 11.5114L11.8637 13.8183" stroke="white" stroke-linecap="round" />
                                </svg>
                                <span>Prev</span>
                            </button>
                            <button class="p-modal__list" data-micromodal-close>
                                <span>一覧へ戻る</span>
                            </button>
                            <button class="p-modal__next" data-micromodal-trigger="modal-07">
                                <span>Next</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="10.5455" r="10.0455" transform="matrix(-1 0 0 1 21.9546 0.636353)" stroke="white" />
                                    <path d="M10.0909 9.20457L14.0454 11.5114L10.0909 13.8182" stroke="white" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </footer>
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
                                文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、言葉に魅力を感じ東亜工業を選びました。
                            </p>
                        </div>
                        <div class="p-modal__image">
                            <img src="<?php echo theme_url('images/top/modal-01-pc@2x.jpg'); ?>" width="281" height="281" alt="">
                        </div>
                    </div>
                    <footer class="p-modal__footer u-tb-sp-only">
                        <div class="p-modal__pagination">
                            <button class="p-modal__prev" data-micromodal-trigger="modal-06">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="11.1819" r="10.0455" stroke="white" />
                                    <path d="M11.8637 9.20463L7.90918 11.5114L11.8637 13.8183" stroke="white" stroke-linecap="round" />
                                </svg>
                                <span>Prev</span>
                            </button>
                            <button class="p-modal__list" data-micromodal-close>
                                <span>一覧へ戻る</span>
                            </button>
                            <button class="p-modal__next" data-micromodal-trigger="modal-08">
                                <span>Next</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="10.5455" r="10.0455" transform="matrix(-1 0 0 1 21.9546 0.636353)" stroke="white" />
                                    <path d="M10.0909 9.20457L14.0454 11.5114L10.0909 13.8182" stroke="white" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </footer>
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
                                文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、言葉に魅力を感じ東亜工業を選びました。
                            </p>
                        </div>
                        <div class="p-modal__image">
                            <img src="<?php echo theme_url('images/top/modal-01-pc@2x.jpg'); ?>" width="281" height="281" alt="">
                        </div>
                    </div>
                    <footer class="p-modal__footer u-tb-sp-only">
                        <div class="p-modal__pagination">
                            <button class="p-modal__prev" data-micromodal-trigger="modal-07">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="11.1819" r="10.0455" stroke="white" />
                                    <path d="M11.8637 9.20463L7.90918 11.5114L11.8637 13.8183" stroke="white" stroke-linecap="round" />
                                </svg>
                                <span>Prev</span>
                            </button>
                            <button class="p-modal__list" data-micromodal-close>
                                <span>一覧へ戻る</span>
                            </button>
                            <button class="p-modal__next" data-micromodal-trigger="modal-09">
                                <span>Next</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="10.5455" r="10.0455" transform="matrix(-1 0 0 1 21.9546 0.636353)" stroke="white" />
                                    <path d="M10.0909 9.20457L14.0454 11.5114L10.0909 13.8182" stroke="white" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </footer>
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
                                文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、言葉に魅力を感じ東亜工業を選びました。
                            </p>
                        </div>
                        <div class="p-modal__image">
                            <img src="<?php echo theme_url('images/top/modal-01-pc@2x.jpg'); ?>" width="281" height="281" alt="">
                        </div>
                    </div>
                    <footer class="p-modal__footer u-tb-sp-only">
                        <div class="p-modal__pagination">
                            <button class="p-modal__prev" data-micromodal-trigger="modal-08">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="11.1819" r="10.0455" stroke="white" />
                                    <path d="M11.8637 9.20463L7.90918 11.5114L11.8637 13.8183" stroke="white" stroke-linecap="round" />
                                </svg>
                                <span>Prev</span>
                            </button>
                            <button class="p-modal__list" data-micromodal-close>
                                <span>一覧へ戻る</span>
                            </button>
                            <button class="p-modal__next" data-micromodal-trigger="modal-10">
                                <span>Next</span>
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="10.5455" r="10.0455" transform="matrix(-1 0 0 1 21.9546 0.636353)" stroke="white" />
                                    <path d="M10.0909 9.20457L14.0454 11.5114L10.0909 13.8182" stroke="white" stroke-linecap="round" />
                                </svg>
                            </button>
                        </div>
                    </footer>
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
                                文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、言葉に魅力を感じ東亜工業を選びました。
                            </p>
                        </div>
                        <div class="p-modal__image">
                            <img src="<?php echo theme_url('images/top/modal-01-pc@2x.jpg'); ?>" width="281" height="281" alt="">
                        </div>
                    </div>
                    <footer class="p-modal__footer u-tb-sp-only">
                        <div class="p-modal__pagination">
                            <button class="p-modal__prev" data-micromodal-trigger="modal-09">
                                <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <circle cx="10.5455" cy="11.1819" r="10.0455" stroke="white" />
                                    <path d="M11.8637 9.20463L7.90918 11.5114L11.8637 13.8183" stroke="white" stroke-linecap="round" />
                                </svg>
                                <span>Prev</span>
                            </button>
                            <button class="p-modal__list" data-micromodal-close>
                                <span>一覧へ戻る</span>
                            </button>
                            <!-- <button class="p-modal__next" data-micromodal-trigger="modal-09">
                                    <span>Next</span>
                                    <svg width="22" height="22" viewBox="0 0 22 22" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <circle cx="10.5455" cy="10.5455" r="10.0455" transform="matrix(-1 0 0 1 21.9546 0.636353)" stroke="white" />
                                        <path d="M10.0909 9.20457L14.0454 11.5114L10.0909 13.8182" stroke="white" stroke-linecap="round" />
                                    </svg>
                                </button> -->
                        </div>
                    </footer>
                </div>
            </div>
        </div>
    </section>
    <!-- /.content-02 -->

    <section class="p-fields">
        <div class="p-fields__title c-title c-title--blue js-fadein js-fadein-0s">
            <div class="c-title__bar js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-blue.svg'); ?>" alt="">
            </div>
            <h2>Career Fields</h2>
            <div class="c-title__bar js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-blue.svg'); ?>" alt="">
            </div>
        </div>
        <div class="p-fields__fv"></div>
    </section>
    <!-- /.p-fields -->

    <section class="p-content-03">
        <div class="p-content-03__title c-title c-title--blue js-fadein js-fadein-0s">
            <div class="c-title__bar js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-blue.svg'); ?>" alt="">
            </div>
            <h2>Content O3</h2>
            <div class="c-title__bar js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-blue.svg'); ?>" alt="">
            </div>
        </div>
        <div class="p-content-03__wrapper">
            <div class="p-content-03__inner c-inner">
                <h3 class="p-content-03__contentTitle">
                    TOP MESSAGE
                </h3>
                <div class="p-content-03__text u-pc-tb-only">
                    <img src="<?php echo theme_url('images/top/content-03-text-pc.svg'); ?>" alt="「見たことのないあなたに逢える」自信を持って言えるほどの成長できる環境があります。">
                </div>
                <div class="p-content-03__info">
                    <p>
                        代表取締役社長<br class="u-tb-sp-only"> 飯塚 慎一
                    </p>
                </div>
            </div>
        </div>
    </section>
    <!-- /.p-content-03 -->

    <?php get_template_part('parts/section-other-contents'); ?>
    <?php get_template_part('parts/section-entry'); ?>
</main>

<?php get_footer(); ?>
