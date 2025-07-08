<?php

// init
function theme_setup()
{
  // サポートする機能を追加
  add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'theme_setup');


function enqueue_custom_scripts()
{
  wp_enqueue_script('jquery-script', get_template_directory_uri() . '/js/jquery-3.7.1.min.js', array(), null, true);
  wp_enqueue_script('swiper', get_template_directory_uri() . '/js/swiper-bundle.min.js', array(), null, true);
  wp_enqueue_script('micromodal', 'https://unpkg.com/micromodal/dist/micromodal.min.js', array(), null, true);
  wp_enqueue_script('gsap-core', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/gsap.min.js', array(), null, true);
  wp_enqueue_script('gsap-scrolltrigger', 'https://cdn.jsdelivr.net/npm/gsap@3.12.5/dist/ScrollTrigger.min.js', array('gsap-core'), null, true);
  wp_enqueue_script('main-script', get_template_directory_uri() . '/js/script.js?' . time(), array(), null, true);
  wp_enqueue_style('main-style', get_template_directory_uri() . '/styles/style.css?' . time(), array(), null);
  wp_enqueue_style('custom-style', get_template_directory_uri() . '/style.css?' . time(), array(), null);
}

add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
function theme_url($path = '')
{
  if (!is_string($path)) {
    return get_template_directory_uri();
  }
  return get_template_directory_uri() . '/' . $path;
}
add_shortcode('theme_url', 'theme_url');


// 投稿メニューのラベルを変更
function change_post_menu_label()
{
  global $menu;
  global $submenu;
  $menu[5][0] = 'お知らせ';
  $submenu['edit.php'][5][0] = 'お知らせ一覧';
  $submenu['edit.php'][10][0] = '新しいお知らせ';
}
add_action('admin_menu', 'change_post_menu_label');

// 管理画面からコメントメニューを非表示
function remove_comments_menu()
{
  remove_menu_page('edit-comments.php');
}
add_action('admin_menu', 'remove_comments_menu');

// スラッグ名が日本語だったら自動的にnum＋id付与へ変更（スラッグを設定した場合は適用しない）
function auto_post_slug($slug, $post_ID, $post_status)
{
  if (preg_match('/(%[0-9a-f]{2})+/', $slug)) {
    $slug = $post_ID;
  }
  return $slug;
}
add_filter('wp_unique_post_slug', 'auto_post_slug', 10, 4);


/*------------------------------------------
 *  アーカイブページを有効にする
 *----------------------------------------*/
function post_has_archive($args, $post_type)
{
  if ('post' == $post_type) {
    $args['rewrite'] = true;
    $args['has_archive'] = 'news';
    $args['label'] = 'お知らせ';
  }
  return $args;
}
add_filter('register_post_type_args', 'post_has_archive', 10, 2);


/* ---------- カスタム投稿の追加 ---------- */
// add_action('init', 'register_job_post_type_and_taxonomy');
// function register_job_post_type_and_taxonomy()
// {
//   register_post_type( // カスタム投稿タイプの追加関数
//     'job_post', //カスタム投稿タイプ名（半角英数字の小文字）
//     array( //オプション（以下）
//       'labels' => array(
//         'name' => '職種',
//         'singular_name' => '職種',
//         'add_new' => '新しい職種を追加',
//         'add_new_item' => '新しい職種を追加',
//         'edit_item' => '職種を編集',
//         'new_item' => '新しい職種',
//         'view_item' => '職種を表示',
//         'search_items' => '職種を検索',
//         'not_found' => '職種が見つかりません',
//         'not_found_in_trash' => 'ゴミ箱に職種が見つかりません',
//         'all_items' => 'すべての職種',
//       ),
//       'public' => true, // 管理画面に表示するかどうかの指定
//       'has_archive' => true, // 投稿した記事の一覧ページを作成する
//       'rewrite' => array('slug' => 'jobs'), // アーカイブURLを設定
//       'menu_position' => 5, // 管理画面メニューの表示位置（投稿の下に追加）
//       'show_in_rest' => true, // Gutenbergの有効化
//       'supports' => array( // サポートする機能（以下）
//         'title',  // タイトル
//         'editor', // エディター
//         'thumbnail', // アイキャッチ画像
//         'revisions' // リビジョンの保存
//       ),
//     )
//   );

//   // 職種タクソノミーの登録
//   register_taxonomy('job_categories', 'job_post', array(
//     'labels' => array(
//       'name' => '職種カテゴリ',
//       'singular_name' => '職種カテゴリ',
//       'search_items' => 'カテゴリを検索',
//       'all_items' => 'すべてのカテゴリ',
//       'edit_item' => 'カテゴリを編集',
//       'update_item' => 'カテゴリを更新',
//       'add_new_item' => '新しいカテゴリを追加',
//       'new_item_name' => '新しいカテゴリ名',
//       'menu_name' => 'カテゴリ',
//     ),
//     'hierarchical' => true, // 階層型（カテゴリーのような構造）
//     'public' => true,
//     'show_ui' => true,
//     'show_in_rest' => true,
//     'rewrite' => array('slug' => 'job-categories'), // タクソノミーのURL構造
//   ));
// }



// カスタム投稿タイプ「jobs」の登録
function create_custom_post_type_jobs() {
  register_post_type( 'jobs', array(
      'labels' => array(
          'name' => '職種一覧',
          'singular_name' => '職種',
      ),
      'public' => true,
      'has_archive' => true,
      'show_in_rest' => true,
      'supports' => array( 'title', 'editor', 'thumbnail' ),
      'menu_position' => 5,
      'rewrite' => array( 'slug' => 'jobs' ),
  ));
}
add_action( 'init', 'create_custom_post_type_jobs' );


// カスタムタクソノミー「職種カテゴリ」の登録
function create_taxonomy_for_jobs() {
  register_taxonomy( 'job_list', 'jobs', array(
      'labels' => array(
          'name' => '職種カテゴリー',
          'singular_name' => '職種カテゴリー',
      ),
      'hierarchical' => true,
      'show_in_rest' => true,
      'rewrite' => array( 'slug' => 'job-categories' ),
  ));
}
add_action( 'init', 'create_taxonomy_for_jobs' );


// 職種が追加されたときに同名のタームを作成
function sync_job_with_taxonomy_terms( $post_id, $post, $update ) {
  if ( 'jobs' !== get_post_type( $post_id ) ) {
      return;
  }

  $post_title = $post->post_title; // 職種タイトルを取得
  $taxonomy = 'job_list'; // タクソノミー名

  // 既にタームが存在するか確認
  $term = term_exists( $post_title, $taxonomy );
  if ( !$term ) {
      // タームが存在しなければ作成
      wp_insert_term( $post_title, $taxonomy );
  }

  // タームを投稿に紐付け
  wp_set_object_terms( $post_id, $post_title, $taxonomy );
}
add_action( 'save_post', 'sync_job_with_taxonomy_terms', 10, 3 );
