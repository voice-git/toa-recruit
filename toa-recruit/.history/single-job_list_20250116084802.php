<?php get_header(); ?>
<main>
    <section class="p-job-detail">
        <div class="p-job-detail__titleWrapper">
            <div class="p-job-detail__icon">
                <?php
                $job_icon = get_field('job_icon'); // ACF のフィールドから値を取得
                if ($job_icon && is_array($job_icon)) : // 配列形式か確認
                    echo '<img src="' . esc_url($job_icon['url']) . '" alt="' . esc_attr($job_icon['alt']) . '">';
                endif;
                ?>
            </div>
            <div class="p-job-detail__title c-title c-title--job">
                <div class="c-title__bar c-title__bar--news js-bar-first">
                    <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
                </div>
                <h2>
                    <?php the_field('job_title'); ?>
                </h2>
                <div class="c-title__bar c-title__bar--news js-bar-last">
                    <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
                </div>
            </div>
            <p>
                <?php the_field('job_english_title'); ?>
            </p>
        </div>

        <div class="p-job-detail__inner c-inner">
            <p class="u-pc-tb-only">
                <?php echo nl2br(get_field('job_description')); ?>
            </p>
            <p class="u-tb-only">
                <?php echo get_field('job_description'); ?>
            </p>

            <!-- <span class="u-tb-sp-only">
                <?php echo nl2br(esc_html($title_second)); ?>
            </span>
            <span class="u-pc-tb-only">
                <?php echo esc_html(str_replace(["\r", "\n"], '', $title_second)); ?>
            </span> -->

            <div class="p-job-detail__list">
                <ul>
                    <li>
                        生産ライン・ロボットの<br class="u-tb-sp-only">開発・設計
                    </li>
                    <li>
                        生産ライン・ロボットの<br class="u-tb-sp-only">開発・設計
                    </li>
                    <li>
                        生産ライン・ロボットの<br class="u-tb-sp-only">開発・設計
                    </li>
                    <li>
                        生産ライン・ロボットの<br class="u-tb-sp-only">開発・設計
                    </li>
                </ul>
            </div>

            <div class="p-job-detail__content">
                <ul>
                    <?php
                    $job_image01 = get_field('job_detail_image01');
                    $job_headline01 = get_field('job_detail_headline01');
                    $job_text01 = get_field('job_detail_text01');

                    // 条件分岐: いずれかの値が存在する場合のみ出力
                    if ($job_image01 || $job_headline01 || $job_text01): ?>
                        <li>
                            <div>
                                <?php if ($job_image01 && is_array($job_image01)): // 画像がある場合 
                                ?>
                                    <img src="<?php echo esc_url($job_image01['url']); ?>" alt="<?php echo esc_attr($job_image01['alt']); ?>">
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if ($job_headline01): // 見出しがある場合 
                                ?>
                                    <h3>
                                        <?php echo nl2br($job_headline01); ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if ($job_text01): // テキストがある場合 
                                ?>
                                    <p>
                                        <?php echo nl2br($job_text01); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php
                    $job_image02 = get_field('job_detail_image02');
                    $job_headline02 = get_field('job_detail_headline02');
                    $job_text02 = get_field('job_detail_text02');

                    // 条件分岐: いずれかの値が存在する場合のみ出力
                    if ($job_image02 || $job_headline02 || $job_text02): ?>
                        <li>
                            <div>
                                <?php if ($job_headline02): // 見出しがある場合 
                                ?>
                                    <h3>
                                        <?php echo nl2br($job_headline02); ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if ($job_text02): // テキストがある場合 
                                ?>
                                    <p>
                                        <?php echo nl2br($job_text02); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if ($job_image02 && is_array($job_image02)): // 画像がある場合 
                                ?>
                                    <img src="<?php echo esc_url($job_image02['url']); ?>" alt="<?php echo esc_attr($job_image02['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php
                    $job_image03 = get_field('job_detail_image03');
                    $job_headline03 = get_field('job_detail_headline03');
                    $job_text03 = get_field('job_detail_text03');

                    // 条件分岐: いずれかの値が存在する場合のみ出力
                    if ($job_image03 || $job_headline03 || $job_text03): ?>
                        <li>
                            <div>
                                <?php if ($job_image03 && is_array($job_image03)): // 画像がある場合 
                                ?>
                                    <img src="<?php echo esc_url($job_image03['url']); ?>" alt="<?php echo esc_attr($job_image03['alt']); ?>">
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if ($job_headline03): // 見出しがある場合 
                                ?>
                                    <h3>
                                        <?php echo nl2br($job_headline03); ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if ($job_text03): // テキストがある場合 
                                ?>
                                    <p>
                                        <?php echo nl2br($job_text03); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php
                    $job_image04 = get_field('job_detail_image04');
                    $job_headline04 = get_field('job_detail_headline04');
                    $job_text04 = get_field('job_detail_text04');

                    // 条件分岐: いずれかの値が存在する場合のみ出力
                    if ($job_image04 || $job_headline04 || $job_text04): ?>
                        <li>
                            <div>
                                <?php if ($job_headline04): // 見出しがある場合 
                                ?>
                                    <h3>
                                        <?php echo nl2br($job_headline04); ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if ($job_text04): // テキストがある場合 
                                ?>
                                    <p>
                                        <?php echo nl2br($job_text04); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if ($job_image04 && is_array($job_image04)): // 画像がある場合 
                                ?>
                                    <img src="<?php echo esc_url($job_image04['url']); ?>" alt="<?php echo esc_attr($job_image04['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php
                    $job_image05 = get_field('job_detail_image05');
                    $job_headline05 = get_field('job_detail_headline05');
                    $job_text05 = get_field('job_detail_text05');

                    // 条件分岐: いずれかの値が存在する場合のみ出力
                    if ($job_image05 || $job_headline05 || $job_text05): ?>
                        <li>
                            <div>
                                <?php if ($job_image05 && is_array($job_image05)): // 画像がある場合 
                                ?>
                                    <img src="<?php echo esc_url($job_image05['url']); ?>" alt="<?php echo esc_attr($job_image05['alt']); ?>">
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if ($job_headline05): // 見出しがある場合 
                                ?>
                                    <h3>
                                        <?php echo nl2br($job_headline05); ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if ($job_text05): // テキストがある場合 
                                ?>
                                    <p>
                                        <?php echo nl2br($job_text05); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endif; ?>

                    <?php
                    $job_image06 = get_field('job_detail_image06');
                    $job_headline06 = get_field('job_detail_headline06');
                    $job_text06 = get_field('job_detail_text06');

                    // 条件分岐: いずれかの値が存在する場合のみ出力
                    if ($job_image06 || $job_headline06 || $job_text06): ?>
                        <li>
                            <div>
                                <?php if ($job_headline06): // 見出しがある場合 
                                ?>
                                    <h3>
                                        <?php echo nl2br($job_headline06); ?>
                                    </h3>
                                <?php endif; ?>
                                <?php if ($job_text06): // テキストがある場合 
                                ?>
                                    <p>
                                        <?php echo nl2br($job_text06); ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                            <div>
                                <?php if ($job_image06 && is_array($job_image06)): // 画像がある場合 
                                ?>
                                    <img src="<?php echo esc_url($job_image06['url']); ?>" alt="<?php echo esc_attr($job_image06['alt']); ?>">
                                <?php endif; ?>
                            </div>
                        </li>
                    <?php endif; ?>
                </ul>
            </div>
        </div>
    </section>
    <!-- /.p-job-detail -->

    <section class="p-other-jobs">
        <div class="p-other-jobs__title c-title c-title--otherJobs">
            <div class="c-title__bar js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
            <h2>Other Contents</h2>
            <div class="c-title__bar js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
        </div>
        <div class="p-other-jobs__content">
            <div class="p-other-jobs__inner">
                <?php
                $job_query = new WP_Query(array(
                    'post_type' => 'job_list',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                ));

                if ($job_query->have_posts()) :
                ?>
                    <ul class="p-other-jobs__list">
                        <?php while ($job_query->have_posts()) : $job_query->the_post(); ?>
                            <li class="c-card">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="c-card__inner">
                                        <div class="c-card__topWrapper">
                                            <div class="c-card__image">
                                                <?php
                                                $job_icon = get_field('job_icon'); // ACF のフィールドから値を取得
                                                if ($job_icon && is_array($job_icon)) : // 配列形式か確認
                                                    echo '<img src="' . esc_url($job_icon['url']) . '" alt="' . esc_attr($job_icon['alt']) . '">';
                                                endif;
                                                ?>
                                            </div>
                                            <div class="c-card__title u-tb-sp-only">
                                                <h3>
                                                    <!-- 商品企画 -->
                                                    <?php the_field('job_title'); ?>
                                                </h3>
                                                <p>
                                                    <!-- Product planning -->
                                                    <?php the_field('job_english_title'); ?>
                                                </p>
                                            </div>
                                        </div>
                                        <div class="c-card__texts">
                                            <div class="c-card__title u-pc-tb-only">
                                                <h3>
                                                    <!-- 商品企画 -->
                                                    <?php the_field('job_title'); ?>
                                                </h3>
                                                <p>
                                                    <!-- Product planning -->
                                                    <?php the_field('job_english_title'); ?>
                                                </p>
                                            </div>
                                            <span class="c-card__circle">
                                            </span>
                                            <div class="c-card__text">
                                                <p>
                                                    <?php the_field('job_description'); ?>
                                                    <!-- 文章はダミーです。製造は他社には真似のできない、革新的で競争力のあるモノづくりを実現する部署です。 -->
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        <?php endwhile;
                        wp_reset_postdata(); ?>
                    </ul>
                <?php else : ?>
                    <p class="c-no-content">職種が見つかりません。</p>
                <?php endif; ?>
            </div>
        </div>
    </section>
    <!-- /.p-other-jobs -->

    <?php get_template_part('parts/section-other-contents'); ?>
    <?php get_template_part('parts/section-entry'); ?>
</main>
<?php get_footer(); ?>
