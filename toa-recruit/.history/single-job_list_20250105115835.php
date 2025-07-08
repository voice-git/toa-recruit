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
            <p>
                <?php echo nl2br(get_field('job_description')); ?>
            </p>

            <div class="p-job-detail__list">
                <ul>
                    <li>
                        生産ライン・ロボットの開発・設計
                    </li>
                    <li>
                        生産ライン・ロボットの開発・設計
                    </li>
                    <li>
                        生産ライン・ロボットの開発・設計
                    </li>
                    <li>
                        生産ライン・ロボットの開発・設計
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
                            <?php if ($job_image01 && is_array($job_image01)): // 画像がある場合 ?>
                                <img src="<?php echo esc_url($job_image01['url']); ?>" alt="<?php echo esc_attr($job_image01['alt']); ?>">
                            <?php endif; ?>
                        </div>
                        <div>
                            <?php if ($job_headline01): // 見出しがある場合 ?>
                                <h3>
                                    <?php echo nl2br($job_headline01); ?>
                                </h3>
                            <?php endif; ?>
                            <?php if ($job_text01): // テキストがある場合 ?>
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
                            <?php if ($job_headline02): // 見出しがある場合 ?>
                                <h3>
                                    <?php echo nl2br($job_headline02); ?>
                                </h3>
                            <?php endif; ?>
                            <?php if ($job_text02): // テキストがある場合 ?>
                                <p>
                                    <?php echo nl2br($job_text02); ?>
                                </p>
                            <?php endif; ?>        
                        </div>
                        <div>
                            <?php if ($job_image02 && is_array($job_image02)): // 画像がある場合 ?>
                                <img src="<?php echo esc_url($job_image02['url']); ?>" alt="<?php echo esc_attr($job_image01['alt']); ?>">
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endif; ?>

                    <li>
                        <div>
                            <?php
                            $job_image = get_field('job_detail_image03'); // フィールドの値を取得

                            if ($job_image && is_array($job_image)): // 値が配列の場合
                            ?>
                                <img src="<?php echo esc_url($job_image['url']); ?>" alt="<?php echo esc_attr($job_image['alt']); ?>">
                            <?php endif; ?>
                        </div>
                        <div>
                            <h3>
                                <?php echo nl2br(get_field('job_detail_headline03')); ?>
                            </h3>
                            <p>
                                <?php the_field('job_detail_text03'); ?>
                            </p>
                        </div>
                    </li>

                    <?php
                    $job_image0 = get_field('job_detail_image0');
                    $job_headline0 = get_field('job_detail_headline0');
                    $job_text0 = get_field('job_detail_text0');

                    // 条件分岐: いずれかの値が存在する場合のみ出力
                    if ($job_image0 || $job_headline0 || $job_text0): ?>
                    <li>
                        <div>
                            <?php if ($job_headline0): // 見出しがある場合 ?>
                                <h3>
                                    <?php echo nl2br($job_headline0); ?>
                                </h3>
                            <?php endif; ?>
                            <?php if ($job_text0): // テキストがある場合 ?>
                                <p>
                                    <?php echo nl2br($job_text0); ?>
                                </p>
                            <?php endif; ?>        
                        </div>
                        <div>
                            <?php if ($job_image0 && is_array($job_image0)): // 画像がある場合 ?>
                                <img src="<?php echo esc_url($job_image0['url']); ?>" alt="<?php echo esc_attr($job_image01['alt']); ?>">
                            <?php endif; ?>
                        </div>
                    </li>
                    <?php endif; ?>

                    <li>
                        <div>
                            <?php
                            $job_image = get_field('job_detail_image05'); // フィールドの値を取得

                            if ($job_image && is_array($job_image)): // 値が配列の場合
                            ?>
                                <img src="<?php echo esc_url($job_image['url']); ?>" alt="<?php echo esc_attr($job_image['alt']); ?>">
                            <?php endif; ?>
                        </div>
                        <div>
                            <h3>
                                <?php echo nl2br(get_field('job_detail_headline05')); ?>
                            </h3>
                            <p>
                                <?php the_field('job_detail_text05'); ?>
                            </p>
                        </div>
                    </li>

                    <?php
                    $job_image06 = get_field('job_detail_image06');
                    $job_headline06 = get_field('job_detail_headline06');
                    $job_text06 = get_field('job_detail_text06');

                    // 条件分岐: いずれかの値が存在する場合のみ出力
                    if ($job_image06 || $job_headline06 || $job_text06): ?>
                    <li>
                        <div>
                            <?php if ($job_headline06): // 見出しがある場合 ?>
                                <h3>
                                    <?php echo nl2br($job_headline06); ?>
                                </h3>
                            <?php endif; ?>
                            <?php if ($job_text06): // テキストがある場合 ?>
                                <p>
                                    <?php echo nl2br($job_text06); ?>
                                </p>
                            <?php endif; ?>        
                        </div>
                        <div>
                            <?php if ($job_image06 && is_array($job_image06)): // 画像がある場合 ?>
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
                                    <div class="c-card__image">
                                        <?php
                                        $job_icon = get_field('job_icon'); // ACF のフィールドから値を取得
                                        if ($job_icon && is_array($job_icon)) : // 配列形式か確認
                                            echo '<img src="' . esc_url($job_icon['url']) . '" alt="' . esc_attr($job_icon['alt']) . '">';
                                        endif;
                                        ?>
                                    </div>
                                    <div class="c-card__texts">
                                        <div class="c-card__title">
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
                                            <!-- <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 4.5L8.34347e-08 9L4.76837e-07 -3.49691e-07L8 4.5Z" fill="white" />
                                        </svg> -->

                                        </span>
                                        <div class="c-card__text">
                                            <p>
                                                <?php the_field('job_description'); ?>
                                                <!-- 文章はダミーです。製造は他社には真似のできない、革新的で競争力のあるモノづくりを実現する部署です。 -->
                                            </p>
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
