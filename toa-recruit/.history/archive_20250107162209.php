<?php get_header(); ?>
<main>
    <section class="p-news-list">
        <div class="p-news-list__title c-title c-title--news">
            <div class="c-title__bar c-title__bar--news js-bar-first">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
            <h2>News</h2>
            <div class="c-title__bar c-title__bar--news js-bar-last">
                <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
            </div>
        </div>
        <p class="p-news-list__titleJp">お知らせ</p>

        <div class="p-news-list__inner">
            <!-- <div class="c-category">
                <ul class="c-category__list">
                    <li class="c-category__item">
                        <?php if (is_home() || (!is_category() && !is_single())) : ?>
                            <span class="is-current">すべて</span>
                        <?php else : ?>
                            <a href="<?php echo home_url('news'); ?>">すべて</a>
                        <?php endif; ?>
                    </li>
                    <?php
                    $categories = get_categories();
                    foreach ($categories as $category) {
                        $is_current_cat = !is_single() && is_category($category->term_id);

                        echo '<li class="c-category__item">';
                        if ($is_current_cat) {
                            echo '<span class="is-current">' . $category->name . '</span>';
                        } else {
                            echo '<s href="' . get_category_link($category->term_id) . '">' . $category->name . '</a>';
                        }
                        echo '</li>';
                    }
                    ?>
                </ul>
            </div> -->

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
                            <li class="p-news-list__item js-fadein js-fadein-0s <?php if ($post_count > 6) echo 'is-hidden'; ?>">
                                <div class="p-news-list__content">
                                    <!-- <div class="p-news-list__info"> -->
                                        <time class="p-news-list__date" datetime="<?php echo get_the_date('Y-m-d'); ?>">
                                            <?php echo get_the_date('Y.m.d'); ?>
                                        </time>
                                        <!-- <div class="p-news-list__category">
                                            <?php
                                            $category = get_the_category();
                                            if (!empty($category)) {
                                                echo '<a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . esc_html($category[0]->name) . '</a>';
                                            }
                                            ?>
                                        </div> -->
                                    <!-- </div> -->
                                    <h3 class="p-news-list__itemTitle">
                                        <a href="<?php the_permalink(); ?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h3>
                                </div>
                                <picture class="p-news-list__image js-fadein js-fadein-0s">
                                    <?php the_post_thumbnail(); ?>
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
                    <!-- <a href="#"> -->
                        <span>read more</span>
                        <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="#3F6EB4" />
                        </svg>
                    <!-- </a> -->
                </div>
            </div>
        </div>
    </section>
    <!-- /.p-news-list -->
</main>
<?php get_footer(); ?>
