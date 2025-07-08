<?php get_header(); ?>
<main>
    <section class="p-guideline">
        <div class="p-guideline__container">
            <h2 class="p-guideline__title c-title c-title--main">
                Guidelines
                <span>募集要項</span>
            </h2>
        </div>
        <div class="p-guideline__outer">
            <div class="contact" id="" style="display: block!important;">
                <div class="js-slideIn contact_box_wrap">
                    <div class="contact_box">
                        <div class="contact_ttl_box">
                            <h2>内容のご確認</h2>
                            <p>
                            以下の内容で間違いがなければ、「送信する」ボタンを押してください。
                            </p>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="c299b54" title="応募フォーム 確認"]'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.p-guideline -->

    <?php get_template_part('parts/section-other-contents'); ?>
</main>
<?php get_footer(); ?>