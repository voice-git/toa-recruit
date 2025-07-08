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
	        <p class="comp_text">ご応募ありがとうございました。<br>スタッフが確認の上、<br class="u-tb-sp-only">ご連絡させていただきます。</p>

			<div class="p-news__button c-button comp_btn">
                <a href="<?php echo home_url(); ?>">
                    <span>TOPに戻る</span>
                    <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="#15327e"></path>
                    </svg>
                </a>
            </div>
        </div>
    </section>
    <!-- /.p-guideline -->

    <?php get_template_part('parts/section-other-contents'); ?>
</main>
<?php get_footer(); ?>