<div class="c-pagination js-slideIn">
  <button class="c-pagination__button c-pagination__button--prev">
    <?php
    $previous_post = get_previous_post(); // 前の投稿を取得

    if ($previous_post) {
      $previous_post_link = get_previous_post_link(
        '%link',
        '<svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="21.9389" cy="21.9391" r="21.4391" transform="rotate(-180 21.9389 21.9391)" stroke="white"/>
        <path d="M15.9551 21.939L26.5922 15.9556L26.5922 27.9224L15.9551 21.939Z" fill="white"/>
        </svg>
        <span class="c-pagination__text">Prev</span>'
      );
      echo $previous_post_link; // 前の投稿へのリンクを表示
    }
    ?>
  </button>

  <div class="c-pagination__list c-button c-button--pagination js-fadein js-fadein-0ms">
    <a href="<?php echo home_url('news'); ?>">
      <span>一覧へ戻る</span>
      <svg width="7" height="9" viewBox="0 0 7 9" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M7 4.5L0.25 8.39711L0.25 0.602885L7 4.5Z" fill="#15327e" />
      </svg>
    </a>
  </div>

  <button class="c-pagination__button c-pagination__button--next">
    <?php
    $next_post = get_next_post(); // 次の投稿を取得

    if ($next_post) {
      // 次の投稿へのリンクを作成
      $next_post_link = get_next_post_link(
        '%link',
        '<span class="c-pagination__text">Next</span>
        <svg width="44" height="44" viewBox="0 0 44 44" fill="none" xmlns="http://www.w3.org/2000/svg">
        <circle cx="21.9391" cy="21.9391" r="21.4391" stroke="white"/>
        <path d="M27.9229 21.9391L17.2857 27.9225L17.2857 15.9557L27.9229 21.9391Z" fill="white"/>
        </svg>'
      );
      echo $next_post_link;
    }
    ?>
  </button>
</div>
