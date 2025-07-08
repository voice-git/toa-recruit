<?php get_header(); ?>
<main>
    <section class="p-interview">
        <?php
        $max_sections = 9;
        for ($i = 1; $i <= $max_sections; $i++):
            $bg = get_field("interview_bg0{$i}");
            $bg_sp = get_field("interview_bg-sp0{$i}");
            $copy = get_field("interview_copy0{$i}");
            $copy_old = get_field("interview_copy-old0{$i}");
            $info = get_field("interview_info0{$i}");
            $title_first = get_field("interview_title01-staff0{$i}");
            $text_first = get_field("interview_text01-staff0{$i}");
            $image_first = get_field("interview_image01-staff0{$i}");
            $title_second = get_field("interview_title02-staff0{$i}");
            $text_second = get_field("interview_text02-staff0{$i}");
            $image_second = get_field("interview_image02-staff0{$i}");
            $comment = get_field("interview_comment0{$i}");

            if (
                empty($bg) && empty($bg_sp) && empty($copy) && empty($copy_old) && empty($info) &&
                empty($title_first) && empty($text_first) && empty($image_first) &&
                empty($title_second) && empty($text_second) && empty($image_second)
            ) {
                continue; // 値がすべて空ならスキップ
            }
        ?>
            <div class="p-interview__wrapper">
                <div class="p-interview__scrollWrapper">
                    <?php if ($copy_old): ?>
                        <div class="c-label js-label is-area p-interview__area">
                            <div class="c-label__container js-container">
                                <p class="js-slideIn">
                                    <?php echo esc_html($copy_old); ?>
                                </p>
                                <picture>
                                    <source
                                        srcset="<?php echo theme_url('images/interview/not-bar-label-sp.svg'); ?>"
                                        media="(max-width: 768px)" />
                                    <img class="c-not js-not" src="<?php echo theme_url('images/interview/not-bar-label.svg'); ?>" alt="not">
                                </picture>
                            </div>
                        </div>
                    <?php endif; ?>

                    <div class="p-interview__itemOuter p-interview__area p-interview__area--item">
                        <div class="p-interview__item js-interview js-interviewSlideIn"
                            style="background-image: url(<?php esc_html($bg); ?>)"
                            data-desktop-bg="<?php echo esc_url($bg); ?>"
                            data-mobile-bg="<?php echo esc_url($bg_sp); ?>">
                            <div class="p-interview__itemInner <?php echo ($i % 2 === 0) ? ' p-interview__itemInner--second' : ''; ?>">
                                <div class="p-interview__itemWrapper">
                                    <div class="p-interview__itemLabel <?php echo ($i % 2 === 0) ? ' p-interview__itemLabel--second' : ''; ?>">
                                        <p class="js-interviewSlideIn">
                                            <?php echo esc_html($copy_old); ?>
                                        </p>
                                        <picture>
                                            <source
                                                srcset="<?php echo theme_url('images/interview/not-bar-interview-sp.svg'); ?>"
                                                media="(max-width: 768px)" />
                                            <img class="js-interviewSlideIn" src="<?php echo theme_url('images/interview/not-bar-interview-pc.svg'); ?>" alt="not">
                                        </picture>
                                    </div>
                                </div>

                                <div class="p-interview__itemWrapper">
                                    <div class="p-interview__itemContainer <?php echo ($i % 2 === 0) ? ' p-interview__itemContainer--second' : ''; ?>">
                                        <div class="p-interview__itemBox js-interviewSlideIn">
                                            <h2 class="p-interview__itemTitle">
                                                <span>
                                                    <img src="<?php echo theme_url('images/interview/interview-headline-white.svg'); ?>" alt="そんなもんじゃなかった">
                                                    <?php echo sprintf('%02d', $i); // ゼロ埋めで01, 02, 03と表示 
                                                    ?>
                                                </span>
                                                <?php echo wp_kses_post($copy); ?>
                                            </h2>
                                            <div class="p-interview__itemInfo">
                                                <p>
                                                    <?php echo esc_html($info); ?>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="p-interview__content">
                    <div class="p-interview__contentInner">
                        <?php if ($title_first || $text_first || $image_first): ?>
                            <div class="p-interview__container">
                                <div class="p-interview__texts">
                                    <h3 class="p-interview__contentTitle js-slideIn">
                                        <span>
                                            <span>
                                                <picture>
                                                    <source
                                                        srcset="<?php echo theme_url('images/interview/interview-headline-gray.svg'); ?>"
                                                        media="(max-width: 768px)" />
                                                    <img src="<?php echo theme_url('images/interview/interview-headline-white.svg'); ?>" alt="そんなもんじゃなかった">
                                                </picture>
                                                <span>理由</span>
                                            </span>
                                        </span>
                                        <span class="u-tb-sp-only">
                                            <?php echo nl2br(esc_html($title_first)); ?>
                                        </span>
                                        <span class="u-pc-tb-only">
                                            <?php echo esc_html(str_replace(["\r", "\n"], '', $title_first)); ?>
                                        </span>
                                    </h3>
                                    <div class="p-interview__text js-slideIn">
                                        <p>
                                            <?php echo nl2br(esc_html($text_first)); ?>
                                        </p>
                                    </div>
                                </div>
                                <picture class="p-interview__image js-slideIn">
                                    <img src="<?php echo esc_html($image_first['url']); ?>" alt="<?php echo esc_html($image_first['alt']); ?>">
                                </picture>
                            </div>
                        <?php endif; ?>

                        <?php if ($title_second || $text_second || $image_second): ?>
                            <div class="p-interview__container">
                                <div class="p-interview__texts">
                                    <h3 class="p-interview__contentTitle js-slideIn">
                                        <span>
                                            <span>
                                                <picture>
                                                    <source
                                                        srcset="<?php echo theme_url('images/interview/interview-headline-gray.svg'); ?>"
                                                        media="(max-width: 768px)" />
                                                    <img src="<?php echo theme_url('images/interview/interview-headline-white.svg'); ?>" alt="そんなもんじゃなかった">
                                                </picture>
                                                <span>理由</span>
                                            </span>
                                        </span>
                                        <!-- 自働化で実績を上げ、<br class="u-tb-sp-only">海外勤務へ -->
                                        <span class="u-tb-sp-only">
                                            <?php echo nl2br(esc_html($title_second)); ?>
                                        </span>
                                        <span class="u-pc-tb-only">
                                            <?php echo esc_html(str_replace(["\r", "\n"], '', $title_second)); ?>
                                        </span>
                                    </h3>
                                    <div class="p-interview__text js-slideIn">
                                        <p>
                                            <!-- 文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、魅力的な人になろう」という言葉に魅力を感じ東亜工業を選びました。 -->
                                            <?php echo nl2br(esc_html($text_second)); ?>
                                        </p>
                                    </div>
                                </div>
                                <picture class="p-interview__image js-slideIn">
                                    <!-- <source
                                srcset="<?php echo theme_url('images/interview/interview01.5-sp@2x.webp'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/interview/interview01.5-pc@2x.webp'); ?>" alt="仲間と笑顔で語り合っている様子"> -->

                                    <img src="<?php echo esc_html($image_second['url']); ?>" alt="<?php echo esc_html($image_first['alt']); ?>">
                                </picture>
                            </div>
                        <?php endif; ?>

                        <div class="p-interview__box">
                            <div class="p-interview__boxInner">
                                <div class="p-interview__boxTop js-slideIn">
                                    <picture>
                                        <source
                                            srcset="<?php echo theme_url('images/interview/box-top.svg'); ?>"
                                            media="(max-width: 768px)" />
                                        <img src="<?php echo theme_url('images/interview/box-top.svg'); ?>" alt="そんなもんじゃなかった">
                                    </picture>
                                </div>
                                <div class="p-interview__boxText js-slideIn">
                                    <p>
                                        <?php echo nl2br(esc_html($comment)); ?>
                                        <!-- 車の部品ができるまでの流れや、普段見ることのない部品の細かい部分を観察できるのが面白いです。また、安全面にも細かく配慮されているため、注意すべき作業や行動が理解でき、安心して作業を進めることができます。従業員一人一人の個性は強いですが、親しみやすく、チームワークも良好で、長く働きたいと思える職場です。 -->
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endfor; ?>



        <!-- <div class="p-interview__wrapper">
            <div class="p-interview__header">
                <ul>
                    <li>
                        <p>
                            車体骨格開発のエース
                        </p>
                    </li>
                    <li>
                        <p>
                            技術開発部　川上 真由子
                        </p>
                    </li>
                </ul>
            </div>

            <div class="c-label js-label">
                <div class="c-label__container js-container">
                    <p>組織の歯車</p>
                    <svg class="js-not-label u-pc-only" width="891" height="19" viewBox="0 0 891 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="js-n-part-label" d="M42.5944 0.531549H50.0587V18.2875H43.5134L7.60397 8.02976V18.2875H0.139648V0.531549H6.68494L42.5944 10.7893V0.531549Z" fill="white" />
                        <path class="js-o-part-label" d="M835.707 6.70655V12.1351V18.2988H62.5553L55.3936 18.2875V0.531549H62.8579L828.254 0.542861L835.718 0.531549V0.542861V6.70655H835.707ZM828.243 6.70655H62.8467V12.1351H828.243V6.70655Z" fill="white" />
                        <path class="js-t-part-label" d="M890.669 0.475002H840.347V6.69524H861.742V18.3667H869.263V6.69524H890.658V0.475002H890.669Z" fill="white" />
                    </svg>

                    <svg class="js-not-label u-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="js-n-part-label" d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z" fill="white" />
                        <path class="js-o-part-label" d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z" fill="white" />
                        <path class="js-t-part-label" d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z" fill="white" />
                    </svg>
                </div>
            </div>

            <div class="p-interview__item p-interview__item--second js-interview">
                <div class="p-interview__itemInner p-interview__itemInner--second">

                    <div class="p-interview__itemWrapper">
                        <div class="p-interview__itemLabel p-interview__itemLabel--second">
                            <p>組織の歯車</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/interview/not-bar-interview-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img src="<?php echo theme_url('images/interview/not-bar-interview-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>

                    <div class="p-interview__itemWrapper">
                        <div class="p-interview__itemContainer p-interview__itemContainer--second">
                            <div class="p-interview__itemBox">
                                <h2 class="p-interview__itemTitle">
                                    <span>
                                        <img src="<?php echo theme_url('images/interview/interview-headline-white.svg'); ?>" alt="そんなもんじゃなかった">
                                        01
                                    </span>
                                    車体骨格開発の<br>エース
                                </h2>
                                <div class="p-interview__itemInfo">
                                    <p>技術開発部　川上 真由子</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-interview__content">
                <div class="p-interview__contentInner">
                    <div class="p-interview__container">
                        <picture class="p-interview__image">
                            <source
                                srcset="<?php echo theme_url('images/interview/interview02-sp@2x.webp'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/interview/interview02-pc@2x.webp'); ?>" alt="景色の良い窓際でPC作業している様子">
                        </picture>
                        <div class="p-interview__texts">
                            <h3 class="p-interview__contentTitle">
                                <span>
                                    <picture>
                                        <source
                                            srcset="<?php echo theme_url('images/interview/interview-headline-gray.svg'); ?>"
                                            media="(max-width: 768px)" />
                                        <img src="<?php echo theme_url('images/interview/interview-headline-white.svg'); ?>" alt="そんなもんじゃなかった">
                                    </picture>
                                    理由
                                </span>
                                事務職から<br class="u-tb-sp-only">スタートした経歴
                            </h3>
                            <div class="p-interview__text">
                                <p>
                                    文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、魅力的な人になろう」という言葉に魅力を感じ東亜工業を選びました。
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="p-interview__container">
                        <picture class="p-interview__image">
                            <source
                                srcset="<?php echo theme_url('images/interview/interview02-sp@2x.webp'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/interview/interview02-pc@2x.webp'); ?>" alt="景色の良い窓際でPC作業している様子">
                        </picture>
                        <div class="p-interview__texts">
                            <h3 class="p-interview__contentTitle">
                                <span>
                                    <picture>
                                        <source
                                            srcset="<?php echo theme_url('images/interview/interview-headline-gray.svg'); ?>"
                                            media="(max-width: 768px)" />
                                        <img src="<?php echo theme_url('images/interview/interview-headline-white.svg'); ?>" alt="そんなもんじゃなかった">
                                    </picture>
                                    理由
                                </span>
                                事務職から<br class="u-tb-sp-only">スタートした経歴
                            </h3>
                            <div class="p-interview__text">
                                <p>
                                    文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、魅力的な人になろう」という言葉に魅力を感じ東亜工業を選びました。
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->

        <!-- <div class="p-interview__wrapper">
            <div class="p-interview__header">
                <ul>
                    <li>
                        <p>
                            アメリカ勤務2年目
                        </p>
                    </li>
                    <li>
                        <p>
                            第3生産技術部　田島 遼
                        </p>
                    </li>
                </ul>
            </div>

            <div class="c-label js-label">
                <div class="c-label__container js-container">
                    <p>高卒の工場勤務</p>
                    <svg class="c-not js-not-label u-pc-only" width="891" height="19" viewBox="0 0 891 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="js-n-part-label" d="M42.5944 0.531549H50.0587V18.2875H43.5134L7.60397 8.02976V18.2875H0.139648V0.531549H6.68494L42.5944 10.7893V0.531549Z" fill="white" />
                        <path class="js-o-part-label" d="M835.707 6.70655V12.1351V18.2988H62.5553L55.3936 18.2875V0.531549H62.8579L828.254 0.542861L835.718 0.531549V0.542861V6.70655H835.707ZM828.243 6.70655H62.8467V12.1351H828.243V6.70655Z" fill="white" />
                        <path class="js-t-part-label" d="M890.669 0.475002H840.347V6.69524H861.742V18.3667H869.263V6.69524H890.658V0.475002H890.669Z" fill="white" />
                    </svg>

                    <svg class="c-not js-not-label u-sp-only" width="339" height="6" viewBox="0 0 339 6" fill="none" xmlns="http://www.w3.org/2000/svg">
                        <path class="js-n-part-label" d="M16.1613 0.0189631H19.0028V5.97345H16.5112L2.84146 2.5335V5.97345H0V0.0189631H2.49161L16.1613 3.45891V0.0189631Z" fill="white" />
                        <path class="js-o-part-label" d="M318.077 2.08976V3.91024V5.97724H23.7599L21.0336 5.97345V0.0189631H23.8751L315.24 0.0227565L318.082 0.0189631V0.0227565V2.08976H318.077ZM315.236 2.08976H23.8708V3.91024H315.236V2.08976Z" fill="white" />
                        <path class="js-t-part-label" d="M339 0H319.844V2.08597H327.988V6H330.851V2.08597H338.996V0H339Z" fill="white" />
                    </svg>
                </div>
            </div>

            <div class="p-interview__item js-interview">
                <div class="p-interview__itemInner">
                    <div class="p-interview__itemWrapper">
                        <div class="p-interview__itemLabel">
                            <p>高卒の工場勤務</p>
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/interview/not-bar-interview-sp.svg'); ?>"
                                    media="(max-width: 768px)" />
                                <img src="<?php echo theme_url('images/interview/not-bar-interview-pc.svg'); ?>" alt="not">
                            </picture>
                        </div>
                    </div>

                    <div class="p-interview__itemWrapper">

                        <div class="p-interview__itemContainer">
                            <div class="p-interview__itemBox">
                                <h2 class="p-interview__itemTitle">
                                    <span>
                                        <img src="<?php echo theme_url('images/interview/interview-headline-white.svg'); ?>" alt="そんなもんじゃなかった">
                                        01
                                    </span>
                                    アメリカ勤務<br>2年目
                                </h2>
                                <div class="p-interview__itemInfo">
                                    <p>第3生産技術部　田島 遼</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="p-interview__content">
                <div class="p-interview__contentInner">
                    <div class="p-interview__container">
                        <div class="p-interview__texts">
                            <h3 class="p-interview__contentTitle">
                                <span>
                                    <picture>
                                        <source
                                            srcset="<?php echo theme_url('images/interview/interview-headline-gray.svg'); ?>"
                                            media="(max-width: 768px)" />
                                        <img src="<?php echo theme_url('images/interview/interview-headline-white.svg'); ?>" alt="そんなもんじゃなかった">
                                    </picture>
                                    理由
                                </span>
                                TOAスクールで<br class="u-tb-sp-only">立ち上げの力を養う
                            </h3>
                            <div class="p-interview__text">
                                <p>
                                    文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、魅力的な人になろう」という言葉に魅力を感じ東亜工業を選びました。
                                </p>
                            </div>
                        </div>
                        <picture class="p-interview__image">
                            <source
                                srcset="<?php echo theme_url('images/interview/interview01-sp@2x.webp'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/interview/interview01-pc@2x.webp'); ?>" alt="真剣な眼差しでPC作業している様子">
                        </picture>
                    </div>

                    <div class="p-interview__container">
                        <div class="p-interview__texts">
                            <h3 class="p-interview__contentTitle">
                                <span>
                                    <picture>
                                        <source
                                            srcset="<?php echo theme_url('images/interview/interview-headline-gray.svg'); ?>"
                                            media="(max-width: 768px)" />
                                        <img src="<?php echo theme_url('images/interview/interview-headline-white.svg'); ?>" alt="そんなもんじゃなかった">
                                    </picture>
                                    理由
                                </span>
                                自働化で実績を上げ、<br class="u-tb-sp-only">海外勤務へ
                            </h3>
                            <div class="p-interview__text">
                                <p>
                                    文章はダミーです。大学時代は機械工学を専攻し、卒業研究では切削加工における刃物の耐久性をテーマにしました。でも、就職活動では新しいことにチャレンジしたいと考え、モノづくりの会社を広く研究。自動車業界で卓越した技術開発力を持つこと、そして「共に学び、共に育ち、常に自己を革新し、魅力的な人になろう」という言葉に魅力を感じ東亜工業を選びました。
                                </p>
                            </div>
                        </div>
                        <picture class="p-interview__image">
                            <source
                                srcset="<?php echo theme_url('images/interview/interview02-sp@2x.webp'); ?>"
                                media="(max-width: 768px)" />
                            <img src="<?php echo theme_url('images/interview/interview01-pc@2x.webp'); ?>" alt="仲間と笑顔で語り合っている様子">
                        </picture>
                    </div>
                </div>
            </div>
        </div> -->
    </section>
    <!-- /.p-interview -->

    <?php get_template_part('parts/section-entry'); ?>
</main>
<?php get_footer(); ?>
