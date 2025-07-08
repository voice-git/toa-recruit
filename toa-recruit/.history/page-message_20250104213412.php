<?php get_header(); ?>
<main>
    <section class="p-message">
        <div class="p-message__container">
            <div class="p-message__inner c-inner u-pc-tb-only">
                <h2 class="p-message__title">
                    Top Message
                </h2>
                <div class="p-message__top">
                    <img src="<?php echo theme_url('images/message/top-message.svg'); ?>" alt="見たことのないあなたに逢える」自信を持って言えるほどの成長できる環境があります。">
                </div>
            </div>
        </div>
        <div class="p-message__content">
            <h2 class="p-message__title u-tb-pc-only">
                
            </h2>
            <div class="p-message__top u-tb-sp-only">
                <p>
                    「見たことのないあなたに逢える」<br>
                    自信を持って言えるほどの<br>
                    成長できる環境があります。
                </p>
            </div>
            <div class="p-message__inner c-inner">
                <p class="p-message__text">
                    文章はダミーです。人々の豊かな暮らしに欠かせない重要な産業として<br class="u-pc-tb-only">位置づけられている自動車産業と住宅産業。<br class="u-pc-tb-only">私たちTOAは、絶え間ない技術革新が繰り広げられる<br class="u-pc-tb-only">この2大基幹産業において、<br class="u-pc-tb-only">常に変化し続けるお客さまニーズに対応し、<br class="u-pc-tb-only">日々新たな課題を解決すべく取り組んでおります。<br><br>例えば、あらゆる産業で地球環境に<br class="u-pc-tb-only">やさしい事業活動が不可欠になっているのは、そのひとつです。<br class="u-pc-tb-only">当然、クルマの開発や住宅づくりにおいても、安全性、快適性はもちろん、<br class="u-pc-tb-only">燃費向上につながる軽量化や循環型社会を実現する<br class="u-pc-tb-only">リサイクル性といった技術革新が求められています。<br class="u-pc-tb-only">特に、自動車産業ではクリーンな電気自動車の普及が<br class="u-pc-tb-only">ますます進んでいくものと考えております。<br><br>TOAでは、こうした社会トレンドに的確に対応するため、<br class="u-pc-tb-only">これまで培ってきた企業理念や技術を次世代にしっかり継承しながら、<br class="u-pc-tb-only">共に学び、共に育ち、<br class="u-pc-tb-only">常に自己を革新していける“人財”の育成に注力いたします。<br class="u-pc-tb-only">これからも絶えず付加価値の高い技術を追求し、<br class="u-pc-tb-only">お客さまの期待に全力で応えてまいります。
                </p>
                <div class="p-message__info">
                    <p>代表取締役社長</p>
                    <picture>
                        <source
                            srcset="<?php echo theme_url('images/message/president-name-sp.svg'); ?>"
                            media="(max-width: 768px)" />
                        <img src="<?php echo theme_url('images/message/president-name-pc.svg'); ?>" alt="飯塚慎一">
                    </picture>
                </div>
            </div>
        </div>
    </section>
    <!-- /.p-message -->


    <?php get_template_part('parts/section-other-contents'); ?>
</main>
<?php get_footer(); ?>
