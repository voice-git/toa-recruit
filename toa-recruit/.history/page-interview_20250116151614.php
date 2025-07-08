<?php get_header(); ?>
<main>
    <section class="p-interview">
        <?php
        $max_sections = 9;
        for ($i = 1; $i <= $max_sections; $i++):
            $bg = get_field("interview_bg0{$i}");
            $bg_sp = get_field("interview_bg-sp0{$i}");
            $copy = get_field("interview_copy0{$i}");
            $copy_old = get_field("interview_copy-old0{$i}");
            $info = get_field("interview_info0{$i}");
            $title_first = get_field("interview_title01-staff0{$i}");
            $text_first = get_field("interview_text01-staff0{$i}");
            $image_first = get_field("interview_image01-staff0{$i}");
            $title_second = get_field("interview_title02-staff0{$i}");
            $text_second = get_field("interview_text02-staff0{$i}");
            $image_second = get_field("interview_image02-staff0{$i}");
            $comment = get_field("interview_comment0{$i}");

            if (
                empty($bg) && empty($bg_sp) && empty($copy) && empty($copy_old) && empty($info) &&
                empty($title_first) && empty($text_first) && empty($image_first) &&
                empty($title_second) && empty($text_second) && empty($image_second)
            ) {
                continue; // 値がすべて空ならスキップ
            }
        ?>
            -<div class="p-interview__wrapper">
                <div class="p-interview__scrollWrapper">
                    <?php if ($copy_old): ?>
                        <div class="c-label js-label is-area p-interview__area">
                            <div class="c-label__container js-container">
                                <p class="js-slideIn">
                                    <?php echo esc_html($copy_old); ?>
                                </p>
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/interview/not-bar-label-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img class="c-not js-not" src="<?php echo theme_url('images/interview/not-bar-label.svg'); ?>" alt="not">
                                </picture>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="p-interview__itemOuter p-interview__area p-interview__area-item">
                        <div class="p-interview__item js-interview js-interviewSlideIn"
                            style="background-image: url(<?php esc_html($bg); ?>)"
                            data-desktop-bg="<?php echo esc_url($bg); ?>"
                            data-mobile-bg="<?php echo esc_url($bg_sp); ?>">
                            <div class="p-interview__itemInner <?php echo ($i % 2 === 0) ? ' p-interview__itemInner--second' : ''; ?>">
                                <div class="p-interview__itemWrapper">
                                    <div class="p-interview__itemLabel <?php echo ($i % 2 === 0) ? ' p-interview__itemLabel--second' : ''; ?>">
                                        <p class="js-interviewSlideIn">
                                            <?php echo esc_html($copy_old); ?>
                                        </p>
                                        <picture>
                                            <source
                                                srcset="<?php echo theme_url('images/interview/not-bar-interview-sp.svg'); ?>"
                                                media="(max-width: 768px)" />
                                            <img class="js-interviewSlideIn" src="<?php echo theme_url('images/interview/not-bar-interview-pc.svg'); ?>" alt="not">
                                        </picture>
                                    </div>
                                </div>

                                <div class="p-interview__itemWrapper">
                                    <div class="p-interview__itemContainer <?php echo ($i % 2 === 0) ? ' p-interview__itemContainer--second' : ''; ?>">
                                        <div class="p-interview__itemBox js-interviewSlideIn">
                                            <h2 class="p-interview__itemTitle">
                                                <span>
                                                    <img src="<?php echo theme_url('images/interview/interview-headline-white.svg'); ?>" alt="そんなもんじゃなかった">
                                                    <?php echo sprintf('%02d', $i); // ゼロ埋めで01, 02, 03と表示 
                                                    ?>
                                                </span>
                                                <?php echo wp_kses_post($copy); ?>
                                            </h2>
                                            <div class="p-interview__itemInfo">
                                                <p>
                                                    <?php echo esc_html($info); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-interview__content">
                    <div class="p-interview__contentInner">
                        <?php if ($title_first || $text_first || $image_first): ?>
                            <div class="p-interview__container">
                                <div class="p-interview__texts">
                                    <h3 class="p-interview__contentTitle js-slideIn">
                                        <span>
                                            <span>
                                                <picture>
                                                    <source
                                                        srcset="<?php echo theme_url('images/interview/interview-headline-gray.svg'); ?>"
                                                        media="(max-width: 768px)" />
                                                    <img src="<?php echo theme_url('images/interview/interview-headline-white.svg'); ?>" alt="そんなもんじゃなかった">
                                                </picture>
                                                <span>理由</span>
                                            </span>
                                        </span>
                                        <span class="u-tb-sp-only">
                                            <?php echo nl2br(esc_html($title_first)); ?>
                                        </span>
                                        <span class="u-pc-tb-only">
                                            <?php echo esc_html(str_replace(["\r", "\n"], '', $title_first)); ?>
                                        </span>
                                    </h3>
                                    <div class="p-interview__text js-slideIn">
                                        <p>
                                            <?php echo nl2br(esc_html($text_first)); ?>
                                        </p>
                                    </div>
                                </div>
                                <picture class="p-interview__image js-slideIn">
                                    <img src="<?php echo esc_html($image_first['url']); ?>" alt="<?php echo esc_html($image_first['alt']); ?>">
                                </picture>
                            </div>
                        <?php endif; ?>

                        <?php if ($title_second || $text_second || $image_second): ?>
                            <div class="p-interview__container">
                                <div class="p-interview__texts">
                                    <h3 class="p-interview__contentTitle js-slideIn">
                                        <span>
                                            <span>
                                                <picture>
                                                    <source
                                                        srcset="<?php echo theme_url('images/interview/interview-headline-gray.svg'); ?>"
                                                        media="(max-width: 768px)" />
                                                    <img src="<?php echo theme_url('images/interview/interview-headline-white.svg'); ?>" alt="そんなもんじゃなかった">
                                                </picture>
                                                <span>理由</span>
                                            </span>
                                        </span>
                                        <span class="u-tb-sp-only">
                                            <?php echo nl2br(esc_html($title_second)); ?>
                                        </span>
                                        <span class="u-pc-tb-only">
                                            <?php echo esc_html(str_replace(["\r", "\n"], '', $title_second)); ?>
                                        </span>
                                    </h3>
                                    <div class="p-interview__text js-slideIn">
                                        <p>
                                            <?php echo nl2br(esc_html($text_second)); ?>
                                        </p>
                                    </div>
                                </div>
                                <picture class="p-interview__image js-slideIn">
                                    <img src="<?php echo esc_html($image_second['url']); ?>" alt="<?php echo esc_html($image_first['alt']); ?>">
                                </picture>
                            </div>
                        <?php endif; ?>

                        <div class="p-interview__box">
                            <div class="p-interview__boxInner">
                                <div class="p-interview__boxTop js-slideIn">
                                    <picture>
                                        <source
                                            srcset="<?php echo theme_url('images/interview/box-top.svg'); ?>"
                                            media="(max-width: 768px)" />
                                        <img src="<?php echo theme_url('images/interview/box-top.svg'); ?>" alt="そんなもんじゃなかった">
                                    </picture>
                                </div>
                                <div class="p-interview__boxText js-slideIn">
                                    <p>
                                        <?php echo nl2br(esc_html($comment)); ?>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </section>
    <!-- /.p-interview -->

    <?php get_template_part('parts/section-entry'); ?>
</main>
<?php get_footer(); ?>
