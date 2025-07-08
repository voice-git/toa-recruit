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
            <div class="p-guideline__inner c-inner">
                <div class="p-guideline__itemTitle c-title c-title--item">
                    <div class="c-title__bar js-bar-first">
                        <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
                    </div>
                    <h3>採用フロー</h3>
                    <div class="c-title__bar js-bar-last">
                        <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
                    </div>
                </div>

                <div class="p-guideline__flowOuter is-hidden">
                    <div class="p-guideline__flowWrapper">
                        <div class="p-guideline__flow js-slideIn">
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/guideline/flow-sp@2x.webp'); ?>"
                                    media="(max-width: 768px)" />
                                <img src="<?php echo theme_url('images/guideline/flow@2x.webp'); ?>" alt="">
                            </picture>
                            <ul>
                                <li>
                                    <p>
                                        SPI<br>
                                        試験
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        一次<br>
                                        面接
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        役員<br>
                                        面接
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="p-guideline__flowOuter" id="form">
                    <div class="p-guideline__flowWrapper">
                        <div class="p-guideline__flow js-slideIn">
                            <picture>
                                <source
                                    srcset="<?php echo theme_url('images/guideline/flow-sp@2x.webp'); ?>"
                                    media="(max-width: 768px)" />
                                <img src="<?php echo theme_url('images/guideline/flow@2x.webp'); ?>" alt="">
                            </picture>
                            <ul>
                                <li>
                                    <p>
                                        書類<br>
                                        選考
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        SPI<br>
                                        試験
                                    </p>
                                </li>
                                <li>
                                    <p>
                                        面接
                                    </p>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <p class="p-guideline__flowNote js-slideIn">
                    ※SPIは性格診断重視・個性を見るのが目的
                </p>

                <div id="tab-area" class="p-guideline__tabWrapper wow animated fadeInUp">
                    <ul class="p-guideline__tabs">
                        <li class="p-guideline__tab js-tab is-active">
                            <div class="p-guideline__tabInner">
                                新卒採用
                            </div>

                        </li>
                        <li class="p-guideline__tab js-tab">
                            <div class="p-guideline__tabInner">
                                中途採用
                            </div>

                        </li>
                    </ul>
                </div>
                <!-- 新卒 -->
                <div class="p-guideline__content">
                    <dl class="p-guideline__items js-tab-content wow animated fadeInUp is-show">
                    <?php
                                // ng_type リピーターフィールドが存在するか確認
                                if (have_rows('ng_type')):
                                ?>
                                    <?php
                                    // リピーターの各行をループ処理
                                    while (have_rows('ng_type')): the_row();
                                        // 各項目のサブフィールドの値を取得
                                        $ng_type_hedding = get_sub_field('ng_type_hedding'); // 見出しのテキスト
                                        $ng_type_txt     = get_sub_field('ng_type_txt');     // 本文のテキスト

                                        // ID付与に関するカスタムフィールドの値を取得
                                        $add_id_to_item   = get_sub_field('add_id_to_item');   // IDを追加するかどうかの真偽（True/False）
                                        $item_custom_id   = get_sub_field('item_custom_id');   // ユーザーが入力したカスタムIDのテキスト

                                        $final_item_id = ''; // HTMLのID属性に最終的に適用されるID
                                        ?>
                                        <?php // 「IDを追加」がチェックされている場合のみIDを生成
                                        if ($add_id_to_item) {
                                            // カスタムIDが入力されていれば、その値を優先して使用
                                            if (!empty($item_custom_id)) {
                                                // HTMLのIDとして安全な文字列に変換 (例: スペースをハイフンに、大文字を小文字に)
                                                $final_item_id = sanitize_title($item_custom_id);
                                            } else {
                                                // カスタムIDが入力されていない場合のフォールバック（自動生成）
                                                // ここでは、見出しをサニタイズしたものに行番号を付けて、重複しにくいIDを生成します。
                                                // 例: "募集職種-1", "勤務地-2"
                                                $final_item_id = sanitize_title($ng_type_hedding) . '-' . get_row_index();

                                                // もし、見出しが空の項目がある場合や、よりシンプルな自動生成が良い場合は、以下を使用できます:
                                                // $final_item_id = 'item-' . get_row_index(); // 例: "item-1", "item-2"
                                            }
                                        }
                                    ?>

                                    <div class="p-guideline__item" <?php if(get_sub_field('item_custom_id')): ?> id="<?php the_sub_field('item_custom_id') ?>"<?php endif; ?>>
                                            <?php echo wp_kses_post($ng_type_hedding); ?>

                                            <?php echo wp_kses_post($ng_type_txt); ?>
                                    </div>

                                <?php endwhile; ?>
                            <?php endif; ?>
                    </dl>

                    <!-- 中途 -->
                    <dl class="p-guideline__items js-tab-content wow animated fadeInUp" id="career-job">
                            <?php
                            // ng_type リピーターフィールドが存在するか確認
                            if (have_rows('mc_type')):
                            ?>
                                <?php
                                // リピーターの各行をループ処理
                                while (have_rows('mc_type')): the_row();
                                    // 各項目のサブフィールドの値を取得
                                    $mc_type_hedding = get_sub_field('mc_type_hedding'); // 見出しのテキスト
                                    $mc_type_txt     = get_sub_field('mc_type_txt');     // 本文のテキスト

                                    // ID付与に関するカスタムフィールドの値を取得
                                    $mc_add_id_to_item   = get_sub_field('mc_add_id_to_item');   // IDを追加するかどうかの真偽（True/False）
                                    $mc_item_custom_id   = get_sub_field('mc_item_custom_id');   // ユーザーが入力したカスタムIDのテキスト

                                    $final_item_id = ''; // HTMLのID属性に最終的に適用されるID
                                    ?>
                                    <?php // 「IDを追加」がチェックされている場合のみIDを生成
                                    if ($add_id_to_item) {
                                        // カスタムIDが入力されていれば、その値を優先して使用
                                        if (!empty($item_custom_id)) {
                                            // HTMLのIDとして安全な文字列に変換 (例: スペースをハイフンに、大文字を小文字に)
                                            $final_item_id = sanitize_title($item_custom_id);
                                        } else {
                                            // カスタムIDが入力されていない場合のフォールバック（自動生成）
                                            // ここでは、見出しをサニタイズしたものに行番号を付けて、重複しにくいIDを生成します。
                                            // 例: "募集職種-1", "勤務地-2"
                                            $final_item_id = sanitize_title($ng_type_hedding) . '-' . get_row_index();

                                            // もし、見出しが空の項目がある場合や、よりシンプルな自動生成が良い場合は、以下を使用できます:
                                            // $final_item_id = 'item-' . get_row_index(); // 例: "item-1", "item-2"
                                        }
                                    }
                                ?>

                                <div class="p-guideline__item" <?php if(get_sub_field('mc_item_custom_id')): ?> id="<?php the_sub_field('mc_item_custom_id') ?>"<?php endif; ?>>
                                        <?php echo wp_kses_post($mc_type_hedding); ?>
                                        <?php echo wp_kses_post($mc_type_txt); ?>
                                </div>

                            <?php endwhile; ?>
                            <?php endif; ?>
                    </dl>
                </div>
            </div>
            <!-- 応募フォーム -->
            <div class="contact" id="form">
                <div class="contact_box_wrap">
                    <div class="contact_box">
                        <div class="contact_ttl_box">
                            <h2>
                                応募フォーム
                            </h2>
                            <p>
                            * が付いているものは必須項目になります。
                            </p>
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="d407b28" title="応募フォーム"]'); ?>
                        <!-- <form action="post">
                            <dl class="contact-contents__items">
                                <div class="contact-contents__item--required flex_start">
                                    <dt class="contact-contents__item-title required">
                                    <label for="your-name">希望職種</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text">
                                    <p>
                                        <span
                                        class="wpcf7-form-control-wrap"
                                        data-name="radio-376"
                                        >
                                        <span class="wpcf7-form-control wpcf7-radio">
                                            <span class="wpcf7-list-item first">
                                            <label>
                                                <input
                                                type="radio"
                                                name="radio-376"
                                                value="自動車部品の設計"
                                                checked="checked"
                                                />
                                                <span class="wpcf7-list-item-label"
                                                >自動車部品の設計</span
                                                >
                                            </label>
                                            </span>
                                            <span class="wpcf7-list-item">
                                            <label>
                                                <input
                                                type="radio"
                                                name="radio-376"
                                                value="自動車部品の製造"
                                                />
                                                <span class="wpcf7-list-item-label"
                                                >自動車部品の製造</span
                                                >
                                            </label>
                                            </span>
                                            <span class="wpcf7-list-item first">
                                            <label>
                                                <input
                                                type="radio"
                                                name="radio-376"
                                                value="自動車部品の生産技術"
                                                />
                                                <span class="wpcf7-list-item-label"
                                                >自動車部品の生産技術</span
                                                >
                                            </label>
                                            </span>
                                            <span class="wpcf7-list-item">
                                            <label>
                                                <input
                                                type="radio"
                                                name="radio-376"
                                                value="工業化住宅部材の設計"
                                                />
                                                <span class="wpcf7-list-item-label"
                                                >工業化住宅部材の設計</span
                                                >
                                            </label>
                                            </span>
                                            <span class="wpcf7-list-item first">
                                            <label>
                                                <input
                                                type="radio"
                                                name="radio-376"
                                                value="自動車部品の品質管理"
                                                />
                                                <span class="wpcf7-list-item-label"
                                                >自動車部品の品質管理</span
                                                >
                                            </label>
                                            </span>
                                            <span class="wpcf7-list-item">
                                            <label>
                                                <input
                                                type="radio"
                                                name="radio-376"
                                                value="工業化住宅部材の生産技術"
                                                />
                                                <span class="wpcf7-list-item-label"
                                                >工業化住宅部材の生産技術</span
                                                >
                                            </label>
                                            </span>
                                            <span class="wpcf7-list-item first">
                                            <label>
                                                <input
                                                type="radio"
                                                name="radio-376"
                                                value="自動車部品の設備保全"
                                                />
                                                <span class="wpcf7-list-item-label"
                                                >自動車部品の設備保全</span
                                                >
                                            </label>
                                            </span>
                                            <span class="wpcf7-list-item">
                                            <label>
                                                <input
                                                type="radio"
                                                name="radio-376"
                                                value="工業化住宅部材の品質管理"
                                                />
                                                <span class="wpcf7-list-item-label"
                                                >工業化住宅部材の品質管理</span
                                                >
                                            </label>
                                            </span>
                                        </span>
                                        </span>
                                    </p>
                                    </dd>
                                </div>
                                <div class="contact-contents__item--required">
                                    <dt class="contact-contents__item-title required">
                                    <label for="your-name">氏名</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text">
                                    <input type="text" name="your-name" id="your-name" />
                                    </dd>
                                </div>
                                <div class="contact-contents__item--required">
                                    <dt class="contact-contents__item-title required">
                                    <label for="your-furigana">ふりがな</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text">
                                    <input type="text" name="your-furigana" id="your-furigana" placeholder="全角ひらがなでご入力ください" />
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required">
                                    <dt class="contact-contents__item-title required">
                                    <label for="your-gender">性別</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text">
                                    <p>
                                        <span
                                        class="wpcf7-form-control-wrap"
                                        data-name="radio-377"
                                        >
                                        <span class="wpcf7-form-control gender_sp_flex wpcf7-radio">
                                            <span class="wpcf7-list-item first w-75 fz-17">
                                            <label>
                                                <input
                                                type="radio"
                                                name="radio-377"
                                                value="男性"
                                                checked="checked"
                                                />
                                                <span class="wpcf7-list-item-label"
                                                >男性</span
                                                >
                                            </label>
                                            </span>
                                            <span class="wpcf7-list-item  fz-17">
                                            <label>
                                                <input
                                                type="radio"
                                                name="radio-377"
                                                value="女性"
                                                />
                                                <span class="wpcf7-list-item-label"
                                                >女性</span
                                                >
                                            </label>
                                            </span>
                                        </span>
                                        </span>
                                    </p>
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required">
                                    <dt
                                    class="contact-contents__item-title required required_gray"
                                    >
                                    <label for="your-code">郵便番号</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text w-adress">
                                    <input
                                        type="text"
                                        name="your-code"
                                        id="your-code" placeholder="〒"
                                    />
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required">
                                    <dt
                                    class="contact-contents__item-title required required_gray"
                                    >
                                    <label for="your-adress">住所</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text adress_input">
                                    <input
                                        type="text"
                                        name="your-adress"
                                        id="your-adress"
                                    />
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required">
                                    <dt class="contact-contents__item-title required">
                                    <label for="tel">電話番号</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text w-tel">
                                    <input type="tel" name="tel" id="tel" required />
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required">
                                    <dt
                                    class="contact-contents__item-title required required_gray"
                                    >
                                    <label for="your-academic">最終学歴（学校名）</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text">
                                    <input
                                        type="text"
                                        name="your-academic"
                                        id="your-academic"
                                    />
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required">
                                    <dt
                                    class="contact-contents__item-title required required_gray"
                                    >
                                    <label for="your-work">現在または直前の勤務先</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text">
                                    <input
                                        type="text"
                                        name="your-work"
                                        id="your-work"
                                    />
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required">
                                    <dt
                                    class="contact-contents__item-title required required_gray"
                                    >
                                    <label for="your-year">勤続年数</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text w-year">
                                    <input
                                        type="text"
                                        name="your-year"
                                        id="your-year"
                                    />
                                    <p>年</p>
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required">
                                    <dt
                                    class="contact-contents__item-title required required_gray"
                                    >
                                    <label for="your-details">勤務内容</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text">
                                    <input
                                        type="text"
                                        name="your-details"
                                        id="your-details"
                                    />
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required flex_start">
                                    <dt
                                    class="contact-contents__item-title required"
                                    >
                                    <label for="your-history">職歴</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text history-height">
                                    <input
                                        type="text"
                                        name="your-history"
                                        id="your-history"
                                    />
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required">
                                    <dt class="contact-contents__item-title required">
                                    <label for="email">メールアドレス</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text">
                                    <input
                                        type="email"
                                        name="email"
                                        id="email"
                                        required
                                    />
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required">
                                    <dt
                                    class="contact-contents__item-title required required_gray"
                                    >
                                    <label for="your-hope1">面接時期　第１希望</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text dete_flex">
                                    <input
                                        type="date"
                                        name="your-hope1"
                                        id="your-hope1"
                                    />
                                    <p>頃</p>
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required">
                                    <dt
                                    class="contact-contents__item-title required required_gray"
                                    >
                                    <label for="your-hope2">面接時期　第２希望</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text dete_flex">
                                    <input
                                        type="date"
                                        name="your-hope2"
                                        id="your-hope2"
                                    />
                                    <p>頃</p>
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required">
                                    <dt
                                    class="contact-contents__item-title required required_gray"
                                    >
                                    <label for="your-hope3">面接時期　第３希望</label>
                                    </dt>
                                    <dd class="contact-contents__item-input--text dete_flex">
                                    <input
                                        type="date"
                                        name="your-hope3"
                                        id="your-hope3"
                                    />
                                    <p>頃</p>
                                    </dd>
                                </div>
                                
                                <div class="contact-contents__item--required flex_start">
                                    <dt class="contact-contents__item-title required">
                                    <label for="content">自由記入欄</label>
                                    </dt>
                                    <dd class="contact-contents__item-textarea">
                                    <textarea
                                        name="content"
                                        id="content"
                                        required
                                    ></textarea>
                                    </dd>
                                </div>
                            </dl>
                            <div class="policy_box">
                                <div class="policy_ttl">
                                    個人情報保護方針
                                </div>
                                <p class="contact_txt_polisy">
                                当社では、プライバシー保護の重要性を認識し、『個人情報』（個人に関する情報のうち、特定の個人を識別できるもの）の取り扱いについて可能な限りの注意を払うとともに、皆様に登録していただいた情報を以下のようにお取り扱いします。
                                このフォームで得た問い合わせ者の『個人情報』および『お問い合わせ』は、採用に関する事案ために利用いたします。それ以外の目的で利用することは一切ありません。
                                </p>
                            </div>
                            <div class="contact-contents__item--checkbox">
                            <label for="agree-policy" class="contact-checkbox">
                                <input
                                type="checkbox"
                                id="agree-policy"
                                name="agree-policy"
                                required
                                />
                                個人情報保護方針について同意する
                            </label>
                            </div>
                            <div class="contact_btn_wrap">
                                <div class="contact-contents__submit">
                                    <button
                                        type="submit"
                                        value="confirm"
                                        class="contact-contents__btn"
                                    >
                                        確認画面に進む
                                    </button>
                                </div>
                            </div>
                        </form> -->
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- /.p-guideline -->

    <?php get_template_part('parts/section-other-contents'); ?>
</main>
<?php get_footer(); ?>
