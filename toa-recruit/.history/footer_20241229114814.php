<footer id="js-footer" class="l-footer">
    <div class="l-footer__inner">
        <picture class="l-footer__slogan">
        <source
                    srcset="<?php echo theme_url('images/top/mv-slogan-sp.svg'); ?>"
                    media="(max-width: 576px)" />
            <img src="<?php echo theme_url('images/common/footer-slogan-pc.svg'); ?>" alt="あなたはそんなもんじゃない">
        </picture>
        <div class="l-footer__logo">
            <a href="<?php echo home_url(); ?>">
                <img
                    src="<?php echo theme_url('images/common/logo-pc.svg'); ?>"
                    alt="TOA" />
            </a>
        </div>
        <nav class="l-footer__nav u-pc-sp-only">
            <ul class="l-footer__list">
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>"> そんなもんじゃなかった社員インタビュー </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>"> 10のNOT </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>"> よくある質問 </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>"> 数字で見るTOA </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>"> 募集要項 </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>"> コーポレートサイト </a>
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
