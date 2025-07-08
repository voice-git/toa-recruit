<?php get_header(); ?>
<main>
    <section class="p-news-detail">
        <div class="p-news-detail__inner c-inner">
            <div class="p-news-detail__content">
                <div>
                    <time datetime="<?php echo get_the_date('Y-m-d'); ?>">
                        <?php echo get_the_date('Y.m.d'); ?>
                    </time>
                </div>
                <h3 class="">
                    <a href="<?php the_permalink(); ?>">
                        <?php the_title(); ?>
                    </a>
                </h3>
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
