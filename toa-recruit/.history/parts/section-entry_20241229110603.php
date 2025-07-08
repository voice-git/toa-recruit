<section class="l-entry <?php if (!is_home() || !is_front_page()) echo 'l-entry--second'; ?>">
    <div class="l-entry__box <?php if (!is_home() || !is_front_page()) echo 'l-entry__box--second'; ?>">
        <!-- <picture class="l-entry__image">
            <source
                srcset="<?php echo theme_url('images/common/entry-bg-sp@2x.jpg'); ?>"
                media="(max-width: 768px)" />
                <img src="<?php echo theme_url('images/common/entry-bg-pc@2x.jpg'); ?>" alt="">
        </picture> -->
        <div class="l-entry__inner">
            <picture class="l-entry__title">
                img
                <!-- ENTRY
                <span>見たことのないあなたに逢おう。</span> -->
            </picture>
            <div class="l-entry__buttons">
                <div class="l-entry__button c-button c-button--entry js-fadein js-fadein-0s">
                    <a href="<?php echo home_url(''); ?>">
                        <span>新卒採用</span>
                        <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="#3F6EB4" />
                        </svg>
                    </a>
                </div>
                <div class="l-entry__button c-button c-button--entry js-fadein js-fadein-0s">
                    <a href="<?php echo home_url(''); ?>">
                        <span>キャリア採用</span>
                        <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="#3F6EB4" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.l-entry -->
