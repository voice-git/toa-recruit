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
function custom_post() {
  register_post_type(
    'job',
    array(
      'public' => true,
      'labels' => array(
				'name' => '職種',
        'all_items' => '職種一覧',
        'add_new' => '新規職種追加',
        'exclude_from_search' => false,
      ),
      'show_in_rest' => true, // RESTAPIに含めるかどうか
      'supports' => array('title', 'editor', 'thumbnail', 'revisions', 'excerpt', 'custom-fields', 'page-attributes'),
      'has_archive' => true,
      'menu_position' => 5,
      'menu_icon' => 'dashicons-admin-customizer', 
      'hierarchical' => true,
    )
  );

  register_taxonomy(
    'job-category', // タクソノミーの名前
    array('job'), // 使用するカスタム投稿タイプ名
    array(
      'hierarchical' => true,
      'label' => 'カテゴリー',
      'show_ui' => true,
      'public' => true,
      'show_in_rest' => true // ブロックエディタの有効化。
  ));
}
add_action('init', 'custom_post');
