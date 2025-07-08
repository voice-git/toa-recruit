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
                    <li>
                        <div>
                            <?php
                            $job_image = get_field('job_detail_image01'); // フィールドの値を取得

                            if ($job_image && is_array($job_image)): // 値が配列の場合
                            ?>
                                <img src="<?php echo esc_url($job_image['url']); ?>" alt="<?php echo esc_attr($job_image['alt']); ?>">
                            <?php endif; ?>
                        </div>
                        <div>
                            <h3>
                                <?php echo nl2br(get_field('job_detail_headline01')); ?>
                            </h3>
                            <p>
                                <?php the_field('job_detail_text01'); ?>
                            </p>
                        </div>
                    </li>
                    <li>
                        <div>
                            <h3>
                                <?php echo nl2br(get_field('job_detail_headline02')); ?>
                            </h3>
                            <p>
                                <?php the_field('job_detail_text01'); ?>
                            </p>
                        </div>
                        <div>
                            <?php
                            $job_image = get_field('job_detail_image02'); // フィールドの値を取得

                            if ($job_image && is_array($job_image)): // 値が配列の場合
                            ?>
                                <img src="<?php echo esc_url($job_image['url']); ?>" alt="<?php echo esc_attr($job_image['alt']); ?>">
                            <?php endif; ?>
                        </div>

                    </li>
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
                    <li>
                        <div>
                            <h3>
                                <?php echo nl2br(get_field('job_detail_headline04')); ?>
                            </h3>
                            <p>
                                <?php the_field('job_detail_text04'); ?>
                            </p>
                        </div>
                        <div>
                            <?php
                            $job_image = get_field('job_detail_image04'); // フィールドの値を取得

                            if ($job_image && is_array($job_image)): // 値が配列の場合
                            ?>
                                <img src="<?php echo esc_url($job_image['url']); ?>" alt="<?php echo esc_attr($job_image['alt']); ?>">
                            <?php endif; ?>
                        </div>
                    </li>
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
                    <li>
                        <div>
                            <h3>
                                <?php echo nl2br(get_field('job_detail_headline06')); ?>
                            </h3>
                            <p>
                                <?php the_field('job_detail_text06'); ?>
                            </p>
                        </div>
                        <div>
                            <?php
                            $job_image = get_field('job_detail_image06'); // フィールドの値を取得

                            if ($job_image && is_array($job_image)): // 値が配列の場合
                            ?>
                                <img src="<?php echo esc_url($job_image['url']); ?>" alt="<?php echo esc_attr($job_image['alt']); ?>">
                            <?php endif; ?>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /.p-job-detail -->

    section.p-other-job
</main>
<?php get_footer(); ?>
