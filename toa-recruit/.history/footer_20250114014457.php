<footer id="js-footer" class="l-footer">
    <div class="l-footer__inner">
        <picture class="l-footer__slogan">
            <source
                srcset="<?php echo theme_url('images/common/footer-slogan-sp.svg'); ?>"
                media="(max-width: 768px)" />
            <img src="<?php echo theme_url('images/common/footer-slogan-pc.svg'); ?>" alt="あなたはそんなもんじゃない">
        </picture>
        <div class="l-footer__logo">
            <a href="<?php echo home_url(); ?>">
                <img
                    src="<?php echo theme_url('images/common/logo-pc.svg'); ?>"
                    alt="TOA" />
            </a>
        </div>
        <nav class="l-footer__nav u-pc-tb-only">
            <ul class="l-footer__list">
                <li class="l-footer__item">
                    <a href="<?php echo home_url('interview'); ?>"> そんなもんじゃなかった社員たち </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#features'); ?>"> TOAの特徴 10のNOT </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('job_list'); ?>"> 職種一覧 </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('message'); ?>"> トップメッセージ </a>
                </li>
            </ul>
            <ul class="l-footer__list">
                <li class="l-footer__item">
                    <a href="<?php echo home_url('data'); ?>"> 数字で見るTOA </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('faq'); ?>"> よくある質問 </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('guideline'); ?>"> 募集要項 </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('news'); ?>"> お知らせ </a>
                </li>
                <li class="l-footer__item">
                    <a href="https://www.toaweb.co.jp/" target="_blank"> コーポーレートサイト </a>
                    <img src="<?php echo theme_url('images/common/link-icon.svg'); ?>" alt="">
                </li>
            </ul>
        </nav>

        <div class="l-footer__copyright">
            Copyright© TOA INDUSTRIES CO.,LTD. All Rights Reserved.
        </div>
    </div>
</footer>
<!-- /.l-footer -->
</div>
<?php wp_footer(); ?>
</body>

</html>
