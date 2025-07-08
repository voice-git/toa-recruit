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
                ));

                if ($job_query->have_posts()) :
                ?>
                    <ul class="p-job__list">
                        <?php while ($job_query->have_posts()) : $job_query->the_post(); ?>
                            <li class="p-job__item">
                                a
                                <div class="p-job__itemImage">
                                    <?php
                                    $job_image = get_field('job_image'); // ACF のフィールドから値を取得
                                    if ($job_image && is_array($job_image)) : // 配列形式か確認
                                        echo '<img src="' . esc_url($job_image['url']) . '" alt="' . esc_attr($job_image['alt']) . '">';
                                    endif;
                                    ?>
                                </div>
                                <div class="p-job__itemTexts">
                                    <div class="p-job__itemTitle">
                                        <h3>
                                            <!-- 商品企画 -->
                                            <?php the_field('job_title'); ?>
                                            <span>
                                                <!-- Product planning -->
                                                <?php the_field('job_english_title'); ?>
                                            </span>
                                        </h3>
                                    </div>
                                    <span class="p-job__itemCircle">
                                        <!-- <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M8 4.5L8.34347e-08 9L4.76837e-07 -3.49691e-07L8 4.5Z" fill="white" />
                                        </svg> -->
                                        
                                    </span>
                                    <div class="p-job__text">
                                        <p>
                                            <?php the_field('job_description'); ?>
                                            <!-- 文章はダミーです。製造は他社には真似のできない、革新的で競争力のあるモノづくりを実現する部署です。 -->
                                        </p>
                                    </div>
                                </div>
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
