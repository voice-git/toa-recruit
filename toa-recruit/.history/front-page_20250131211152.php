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

    <!-- <div class="js-pinWrapper"> -->

    <section class="p-staff">
        <div class="js-pinWrapper">

        
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
            
        </div>
        </div>
    </section>
    <!-- /.p-staff -->

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
