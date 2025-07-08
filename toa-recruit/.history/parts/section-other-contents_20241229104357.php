<section class="l-other-contents <?php if (!is_home() || !is_front_page()) echo 'l-other-contents--second'; ?>">
    <div class="l-other-contents__title c-title js-fadein js-fadein-0s">
        <div class="c-title__bar js-bar-first">
            <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
        </div>
        <h2>Other Contents</h2>
        <div class="c-title__bar js-bar-last">
            <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
        </div>
    </div>
    <div class="l-other-contents__inner c-inner <?php if (!is_home() || !is_front_page()) echo 'l-other-contents__inner--second'; ?>">
        <ul class="l-other-contents__list <?php if (!is_home() || !is_front_page()) echo 'l-other-contents__list--second'; ?>">
            <li class="l-other-contents__item <?php if (!is_home() || !is_front_page()) echo 'l-other-contents__item--second'; ?>">
                <?php if (is_home() || is_front_page() || is_page('message')) : ?>
                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--faq <?php if (!is_home() || !is_front_page()) echo 'l-other-contents__itemTitle--second'; ?>">
                            FAQ
                            <span>よくある質問</span>
                        </h3>
                        <span>
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </span>
                    </a>
                <?php else : ?>
                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--message <?php if (!is_home() || !is_front_page()) echo 'l-other-contents__itemTitle--second'; ?>">
                            TOP MESSAGE
                            <span>代表メッセージ</span>
                        </h3>
                        <span>
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </span>
                    </a>
                <?php endif; ?>
            </li>
            <li class="l-other-contents__item <?php if (!is_home() || !is_front_page()) echo 'l-other-contents__item--second'; ?>">
                <?php if (!is_page('data')) : ?>
                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle <?php if (!is_home() || !is_front_page()) echo 'l-other-contents__itemTitle--second'; ?>">
                            TOA DATA
                            <span>数字で見るTOA</span>
                        </h3>
                        <span class="l-other">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </span>
                    </a>
                <?php else : ?>
                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--faq <?php if (!is_home() || !is_front_page()) echo 'l-other-contents__itemTitle--second'; ?>">
                            FAQ
                            <span>よくある質問</span>
                        </h3>
                        <span>
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </span>
                    </a>
                <?php endif; ?>
            </li>
            <li class="l-other-contents__item <?php if (!is_home() || !is_front_page()) echo 'l-other-contents__item--second'; ?>">
                <?php if (!is_page('guideline')) : ?>
                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle <?php if (!is_home() || !is_front_page()) echo 'l-other-contents__itemTitle--second'; ?>">
                            GUIDELINES
                            <span>募集要項</span>
                        </h3>
                        <span>
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </span>
                    </a>
                <?php else : ?>
                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--faq <?php if (!is_home() || !is_front_page()) echo 'l-other-contents__itemTitle--second'; ?>">
                            FAQ
                            <span>よくある質問</span>
                        </h3>
                        <span>
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </span>
                    </a>
                <?php endif; ?>
            </li>
        </ul>
    </div>
</section>
<!-- /.l-other-contents -->
