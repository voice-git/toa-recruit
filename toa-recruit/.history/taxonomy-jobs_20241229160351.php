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
                <?php if (have_posts()) : ?>
                <ul class="p-job__list">
                    <?php while ( have_posts()) : the_post(); ?>
                    <li class="p-job__item">
                        <div class="p-job__itemImage">
                            <?php if (has_post_thumbnail()) : ?>
                                <?php the_post
                            <img src="" alt="">
                        </div>
                        <div class="p-job__itemTexts">
                            <div class="p-job__itemTitle">
                                <h3>
                                    商品企画
                                    <span>Product planning</span>
                                </h3>
                            </div>
                            <span>
                                <svg width="8" height="9" viewBox="0 0 8 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M8 4.5L8.34347e-08 9L4.76837e-07 -3.49691e-07L8 4.5Z" fill="white" />
                                </svg>
                            </span>
                            <div class="p-job__text">
                                <p>
                                    文章はダミーです。製造は他社には真似のできない、革新的で競争力のあるモノづくりを実現する部署です。
                                </p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- /.p-job -->
    <?php get_template_part('parts/section-other-contents'); ?>
</main>
<?php get_footer(); ?>
