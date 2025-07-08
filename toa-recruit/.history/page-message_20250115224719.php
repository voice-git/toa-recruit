<?php get_header(); ?>
<main>
    <section class="p-message">
        <div class="p-message__container">
            <div class="p-message__inner c-inner u-pc-tb-only">
                <h2 class="p-message__title">
                    Top Message
                </h2>
                <div class="p-message__top">
                    <p>
                        あなたは潜在能力を眠らせている。<br>
                        その秘めた力を引き出すことが<br>
                        私の重要な仕事です。
                    </p>
                    <!-- <img src="<?php echo theme_url('images/message/top-message.svg'); ?>" alt="見たことのないあなたに逢える」自信を持って言えるほどの成長できる環境があります。"> -->
                </div>
            </div>
        </div>
        <div class="p-message__content">
            <h2 class="p-message__title u-tb-sp-only">
                Top Message
            </h2>
            <div class="p-message__top u-tb-sp-only">
                <p>
                    あなたは潜在能力を眠らせている。<br>
                    その秘めた力を引き出すことが<br>
                    私の重要な仕事です。
                </p>
            </div>
            <div class="p-message__inner c-inner">
                <p class="p-message__text">
                    私は社員のみなさんを尊敬しています。<br class="u-pc-tb-only">
                    一人ひとりが私にはないものを持っているからです。<br class="u-pc-tb-only">
                    人には大きな可能性があります。<br class="u-pc-tb-only">
                    一人ひとりが潜在能力を秘めていると言ってもいいでしょう。<br class="u-pc-tb-only">
                    私の役目は、その秘めた力を引き出すことです。<br class="u-pc-tb-only">
                    引き出すための施策のひとつは権限委譲です。<br class="u-pc-tb-only">
                    彼ならできる、彼女ならできる、と任せていく。<br class="u-pc-tb-only">
                    人は役割や立場を任せることで、<br class="u-pc-tb-only">
                    これまで眠らせていた能力を顕在化させます。<br class="u-pc-tb-only">
                    あなたもきっとそうです。<br>
                    <br>
                    そしてもうひとつ、一人ひとりの力を引き出すために、<br class="u-pc-tb-only">
                    長く働ける環境づくりが重要だと考えています。<br class="u-pc-tb-only">
                    誰もが安心して長期的に仕事ができる環境は、<br class="u-pc-tb-only">
                    一人ひとりの人生の基盤です。<br class="u-pc-tb-only">
                    人は未来に不安を抱えていると本領を発揮できません。<br class="u-pc-tb-only">
                    人生の基盤がしっかりしているからこそ、<br class="u-pc-tb-only">
                    仕事に熱中できるし、自身の成長にフォーカスできる。<br class="u-pc-tb-only">
                    そして一人ひとりの可能性を探求できると思うのです。<br>
                    <br>
                    製造業は地味かもしれません。<br>
                    TOAもまた派手な企業ではないかもしれません。<br>
                    でも、私たちは世界で戦える力をもった企業です。<br>
                    これから入社する方も、経験と努力をコツコツと積み重ねていけば、<br>
                    気がつくと世界基準の何かを手にすることができるはずです。<br>
                    年齢を重ねるたびに能力を身につけ、<br>
                    正しく評価され、期待されるキャリア形成を共に築いていきましょう。<br>
                    私たちはあなたの人生にコミットし、<br>
                    あなたの成長を最大限にバックアップする企業でありたいと思います。
                </p>
                <!-- <p class="p-message__text">
                    例えば、あらゆる産業で地球環境に<br class="u-pc-tb-only">やさしい事業活動が不可欠になっているのは、そのひとつです。<br class="u-pc-tb-only">当然、クルマの開発や住宅づくりにおいても、安全性、快適性はもちろん、<br class="u-pc-tb-only">燃費向上につながる軽量化や循環型社会を実現する<br class="u-pc-tb-only">リサイクル性といった技術革新が求められています。<br class="u-pc-tb-only">特に、自動車産業ではクリーンな電気自動車の普及が<br class="u-pc-tb-only">ますます進んでいくものと考えております。
                </p>
                <p class="p-message__text">
                    TOAでは、こうした社会トレンドに的確に対応するため、<br class="u-pc-tb-only">これまで培ってきた企業理念や技術を次世代にしっかり継承しながら、<br class="u-pc-tb-only">共に学び、共に育ち、<br class="u-pc-tb-only">常に自己を革新していける“人財”の育成に注力いたします。<br class="u-pc-tb-only">これからも絶えず付加価値の高い技術を追求し、<br class="u-pc-tb-only">お客さまの期待に全力で応えてまいります。
                </p> -->
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

    <?php get_template_part('parts/section-entry'); ?>
</main>
<?php get_footer(); ?>
