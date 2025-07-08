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
                <img src="<?php echo theme_url('images/common/entry-title-sp.svg'); ?>" alt="Entry">
                <!-- ENTRY
                <span>見たことのないあなたに逢おう。</span> -->
            </picture>
            <picture class="l-entry__titleBottom">
                <img src="<?php echo theme_url('images/common/entry-text-sp.svg'); ?>" alt="見たことのないあなたに逢おう">
            </picture>
            <div class="l-entry__buttons">
                <div class="l-entry__button c-button js-fadein js-fadein-0s">
                    <a href="<?php echo home_url(''); ?>">
                        <span class="is-ja">新卒採用</span>
                        
                        <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.7832 2.50013L-0.00265767 4.92663L-0.00265743 0.0736237L4.7832 2.50013Z" fill="#3F6EB4"/>
</svg>

                    </a>
                </div>
                <div class="l-entry__button c-button js-fadein js-fadein-0s">
                    <a href="<?php echo home_url(''); ?>">
                        <span class="is-ja">キャリア採用</span>
                        >
                        <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
<path d="M4.7832 2.50013L-0.00265767 4.92663L-0.00265743 0.0736237L4.7832 2.50013Z" fill="#3F6EB4"/>
</svg>

                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.l-entry -->
