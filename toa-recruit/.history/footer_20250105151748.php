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
                    <a href="<?php echo home_url('#'); ?>"> TOAの特徴 10のNOT </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>">  職種一覧 </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>"> トップメッセージ </a>
                </li>
            </ul>
            <ul class="l-footer__list">
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>"> 数字で見るTOA </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>"> よくある質問 </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>"> 募集要項 </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>"> お知らせ </a>
                </li>
                <li class="l-footer__item">
                    <a href="<?php echo home_url('#'); ?>"> コーポーレートサイト </a>
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
