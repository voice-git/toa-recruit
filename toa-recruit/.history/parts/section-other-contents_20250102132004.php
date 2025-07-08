<section class="l-other-contents l-other-contents--second <">
    <div class="l-other-contents__title l-other-contents__title--second c-title js-fadein js-fadein-0s">
        <div class="c-title__bar js-bar-first">
            <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
        </div>
        <h2>Other Contents</h2>
        <div class="c-title__bar js-bar-last">
            <img src="<?php echo theme_url('images/common/bar-white.svg'); ?>" alt="">
        </div>
    </div>
    <div class="l-other-contents__inner c-inner l-other-contents__inner--second">
        <ul class="l-other-contents__list l-other-contents__list--second">
            <!-- <li class="l-other-contents__item l-other-contents__item--second"> -->
            <?php if (is_page('message') || is_page('date') || is_page('faq') || is_page('guideline')) : ?>
                <li class="l-other-contents__item l-other-contents__item--second is-job">
                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--message l-other-contents__itemTitle--second">
                            JOB CATEGORY
                            <span>職種一覧</span>
                        </h3>
                        <div class="l-other-contents__circle l-other-contents__circle--second">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                    </a>
                </li>
            <?php else: ?>
                <li class="l-other-contents__item l-other-contents__item--second is-message">
                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--message l-other-contents__itemTitle--second">
                            TOP MESSAGE
                            <span>代表メッセージ</span>
                        </h3>
                        <div class="l-other-contents__circle l-other-contents__circle--second">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (!is_page('faq')) : ?>
                <li class="l-other-contents__item l-other-contents__item--second is-faq">

                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--faq l-other-contents__itemTitle--second">
                            FAQ
                            <span>よくある質問</span>
                        </h3>
                        <div class="l-other-contents__circle l-other-contents__circle--second">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                        <div class="l-other-contents__button c-button c-button--other l-other-contents__button--second">
                            <span>Read More</span>
                            <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.70508 4.02507L0.840324 7.41109L0.840324 0.639053L6.70508 4.02507Z" fill="#3F6EB4" />
                            </svg>
                        </div>
                    </a>
                </li>
            <?php elseif (is_page('data') || is_page('faq') || is_page('guideline')) : ?>
                <li class="l-other-contents__item l-other-contents__item--second is-message">
                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--message l-other-contents__itemTitle--second">
                            TOP MESSAGE
                            <span>代表メッセージ</span>
                        </h3>
                        <div class="l-other-contents__circle l-other-contents__circle--second">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                    </a>
                </li>
            <?php else : ?>
                <li class="l-other-contents__item l-other-contents__item--second is-data">

                    <a href="<?php echo home_url('data'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--second">
                            TOA DATA
                            <span>数字で見るTOA</span>
                        </h3>
                        <div class="l-other-contents__circle l-other-contents__circle--second">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                    </a>
                </li>
            <?php endif; ?>

            <?php if (!is_page('guideline')) : ?>
                <li class="l-other-contents__item l-other-contents__item--second is-guidelines">
                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--second">
                            GUIDELINES
                            <span>募集要項</span>
                        </h3>
                        <div class="l-other-contents__circle l-other-contents__circle--second">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                        <div class="l-other-contents__button c-button c-button--other l-other-contents__button--second">
                            <span>Read More</span>
                            <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.70508 4.02507L0.840324 7.41109L0.840324 0.639053L6.70508 4.02507Z" fill="#3F6EB4" />
                            </svg>
                        </div>
                    </a>
                </li>
            <?php else : ?>
                <li class="l-other-contents__item l-other-contents__item--second is-data">
                    <a href="<?php echo home_url('data'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--second">
                            TOA DATA
                            <span>数字で見るTOA</span>
                        </h3>
                        <div class="l-other-contents__circle l-other-contents__circle--second">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                    </a>
                </li>
            <?php endif; ?>
            <?php if (!is_page('faq')) : ?>
                <li class="l-other-contents__item l-other-contents__item--second is-faq">

                    <a href="<?php echo home_url('#'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--faq l-other-contents__itemTitle--second">
                            FAQ
                            <span>よくある質問</span>
                        </h3>
                        <div class="l-other-contents__circle l-other-contents__circle--second">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                        <div class="l-other-contents__button c-button c-button--other l-other-contents__button--second">
                            <span>Read More</span>
                            <svg width="7" height="8" viewBox="0 0 7 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M6.70508 4.02507L0.840324 7.41109L0.840324 0.639053L6.70508 4.02507Z" fill="#3F6EB4" />
                            </svg>
                        </div>
                    </a>
                </li>
            <?php else : ?>
                <li class="l-other-contents__item l-other-contents__item--second is-data">
                    <a href="<?php echo home_url('data'); ?>">
                        <h3 class="l-other-contents__itemTitle l-other-contents__itemTitle--second">
                            TOA DATA
                            <span>数字で見るTOA</span>
                        </h3>
                        <div class="l-other-contents__circle l-other-contents__circle--second">
                            <svg width="10" height="11" viewBox="0 0 10 11" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M9.27344 5.3782L0.78859 10.1509L0.78859 0.605468L9.27344 5.3782Z" fill="white" />
                            </svg>
                        </div>
                    </a>
                </li>
            <?php endif; ?>
        </ul>
    </div>
</section>
<!-- /.l-other-contents -->
