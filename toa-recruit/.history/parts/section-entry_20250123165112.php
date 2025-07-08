<section class="l-entry is-unfixedClass <?php if (!is_front_page()) echo 'l-entry--second'; ?> <?php if (is_page('guideline')) echo 'l-entry--guideline'; ?> <?php if (is_page('interview')) echo 'l-entry--interview'; ?> <?php if (is_page('data')) echo 'l-entry--data'; ?> <?php if (is_page('faq')) echo 'l-entry--faq'; ?> <?php if (is_post_type_archive('job_list')) echo 'l-entry--job'; ?> <?php if (is_singular('job_list')) echo 'l-entry--job_detail'; ?>">
    <div class="l-entry__box">
        <div class="l-entry__inner">
            <picture class="l-entry__title">
                <source
                    srcset="<?php echo theme_url('images/common/entry-title-sp.svg'); ?>"
                    media="(max-width: 768px)" />
                <img src="<?php echo theme_url('images/common/entry-title-pc.svg'); ?>" alt="Entry">
            </picture>
            <picture class="l-entry__titleBottom">
                <source
                    srcset="<?php echo theme_url('images/common/entry-text-sp.svg'); ?>"
                    media="(max-width: 768px)" />
                <img src="<?php echo theme_url('images/common/entry-text-pc.svg'); ?>" alt="見たことのないあなたに逢おう">
            </picture>
            <div class="l-entry__buttons">
                <div class="l-entry__button c-button js-fadein js-fadein-0s">
                    <a href="https://job.rikunabi.com/2025/company/r379400032/" target="_blank">
                        <span class="is-ja">新卒採用</span>
                        <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.7832 2.50013L-0.00265767 4.92663L-0.00265743 0.0736237L4.7832 2.50013Z" fill="#15327e" />
                        </svg>
                    </a>
                </div>
                <div class="l-entry__button c-button js-fadein js-fadein-0s">
                    <a href="<?php echo home_url('#'); ?>">
                        <span class="is-ja">キャリア採用</span>
                        <svg width="5" height="5" viewBox="0 0 5 5" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M4.7832 2.50013L-0.00265767 4.92663L-0.00265743 0.0736237L4.7832 2.50013Z" fill="#15327e" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.l-entry -->
