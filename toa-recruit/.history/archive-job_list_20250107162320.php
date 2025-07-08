<?php get_header(); ?>
<main>
    <section class="p-job">
        <div class="p-job__container">
            <h2 class="p-job__title c-title c-title--main">
                JOB CATEGORY
                <span>職種一覧</span>
            </h2>
        </div>
        <div class="p-job__content">
            <div class="p-job__inner">
                <?php
                $job_query = new WP_Query(array(
                    'post_type' => 'job_list',
                    'posts_per_page' => -1,
                    'order' => 'ASC',
                ));

                if ($job_query->have_posts()) :
                ?>
                    <ul class="p-job__list">
                        <?php while ($job_query->have_posts()) : $job_query->the_post(); ?>
                            <li class="c-card">
                                <a href="<?php the_permalink(); ?>">
                                    <div class="c-card__inner">
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
    <!-- /.p-job -->
    <?php get_template_part('parts/section-other-contents'); ?>
</main>
<?php get_footer(); ?>
