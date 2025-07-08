<?php get_header(); ?>
<main>
    <section class="p-news-detail">
        <div class="p-news-detail__inner c-inner">
            <div class="p-news-detail__content">
                <div>
                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                    <!-- <div>
                        <?php
                        // $category = get_the_category();
                        // if (!empty($category)) {
                        //     echo '<a href="' . esc_url(get_category_link($category[0]->term_id)) . '">' . esc_html($category[0]->name) . '</a>';
                        // }
                        ?>
                    </div> -->
                </div>
                <h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
                <!-- <svg width="876" height="50" viewBox="0 0 876 50" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <g filter="url(#filter0_d_2239_552)">
                        <path d="M853 23H23V27H853V23Z" fill="white" />
                    </g>
                    <defs>
                        <filter id="filter0_d_2239_552" x="0.32" y="0.32" width="875.36" height="49.36" filterUnits="userSpaceOnUse" color-interpolation-filters="sRGB">
                            <feFlood flood-opacity="0" result="BackgroundImageFix" />
                            <feColorMatrix in="SourceAlpha" type="matrix" values="0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 0 127 0" result="hardAlpha" />
                            <feOffset />
                            <feGaussianBlur stdDeviation="11.34" />
                            <feColorMatrix type="matrix" values="0 0 0 0 1 0 0 0 0 1 0 0 0 0 1 0 0 0 1 0" />
                            <feBlend mode="normal" in2="BackgroundImageFix" result="effect1_dropShadow_2239_552" />
                            <feBlend mode="normal" in="SourceGraphic" in2="effect1_dropShadow_2239_552" result="shape" />
                        </filter>
                    </defs>
                </svg> -->
                <picture>
                    <?php the_post_thumbnail(); ?>
                </picture>
                <article>
                    <?php the_content(); ?>
                </article>

                <?php get_template_part('parts/pagination'); ?>
            </div>
        </div>
    </section>


</main>
<?php get_footer(); ?>
