<?php get_header(); ?>
<main>
    <section class="p-job-detail">
        <div class="p-job-detail__title c-title c-title--news">
            <div class="p-job-detail__image">
                <?php
                $job_image = get_field('job_image'); // ACF のフィールドから値を取得
                if ($job_image && is_array($job_image)) : // 配列形式か確認
                    echo '<img src="' . esc_url($job_image['url']) . '" alt="' . esc_attr($job_image['alt']) . '">';
                endif;
                ?>
            </div>
            <div class="c-title__bar c-title__bar--news js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
            <h2>
                <?php the_field('job_title'); ?>
                <span>
                    <?php the_field('job_english_title'); ?>
                </span>
            </h2>
            <div class="c-title__bar c-title__bar--news js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
        </div>
        <div class="p-job-detail__inner c-inner">
            <p>
                <?php the_field('job_description'); ?>
            </p>

            <ul>
                <li></li>
            </ul>

            <ul>
                <li>
                    <div>
                        <img src="" alt="">
                    </div>
                    <div>
                        <h4></h4>
                        
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <!-- /.p-job-detail -->


</main>
<?php get_footer(); ?>
