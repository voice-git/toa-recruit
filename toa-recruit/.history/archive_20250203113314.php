<?php get_header(); ?>
<main>
    <section class="p-news-list">
        <div class="p-news-list__title c-title c-title--news js-slideIn">
            <div class="c-title__bar c-title__bar--news js-bar-first">
                <picture>
                    <source
                        srcset="<?php echo theme_url('images/top/not-bar-fv-sp.svg'); ?>"
                        media="(max-width: 768px)" />
                    <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
                </picture>
            </div>
            <h2>News</h2>
            <div class="c-title__bar c-title__bar--news js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
        </div>
        <p class="p-news-list__titleJp js-slideIn">お知らせ</p>

        <div class="p-news-list__inner">
            <div class="p-news-list__wrapper">
                <ul class="p-news-list__list">
                    <?php
                    $paged = get_query_var('paged') ? get_query_var('paged') : 1;

                    $posts = new WP_Query(array(
                        'posts_per_page' => -1,
                        'paged' => $paged,
                        'post_type' => array('post'),
                    ));

                    if ($posts->have_posts()):
                        $post_count = 0;
                        while ($posts->have_posts()):
                            $posts->the_post();
                            $post_count++;
                    ?>
                            <li class="p-news-list__item js-slideIn <?php if ($post_count > 6) echo 'is-hidden'; ?>">
                                <div class="p-news-list__content">
                                    <time class="p-news-list__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                        <?php echo get_the_date('Y.m.d'); ?>
                                    </time>
                                    <h3 class="p-news-list__itemTitle">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                </div>
                                <picture class="p-news-list__image">
                                    <a href="<?php the_permalink(); ?>">
                                        <?php the_post_thumbnail(); ?>
                                    </a>
                                </picture>
                            </li>
                        <?php endwhile;
                    else : ?>
                        <p>お知らせはありません。</p>
                    <?php endif;
                    wp_reset_postdata();
                    ?>
                </ul>
                <div id="js-news-btn" class="p-news-list__button c-button c-button--more">
                    <span>read more</span>
                    <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="#15327e" />
                    </svg>
                </div>
            </div>
        </div>
    </section>
    <!-- /.p-news-list -->
</main>
<?php get_footer(); ?>
