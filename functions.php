<?php

//CSSとJSの読み込み

function register_stylesheet() {
  wp_register_style('reset', get_template_directory_uri().'/css/reset.css');

  wp_register_style('style', get_template_directory_uri().'/style.css');
}

function add_stylesheet() {
  register_stylesheet();
  wp_enqueue_style('reset', '', array(), '1.0', false);
  wp_enqueue_style('style', '', array(), '1.0', false);
}

add_action('wp_enqueue_scripts', 'add_stylesheet');

//サイドバー

if ( function_exists('register_sidebar') ) {

    register_sidebar(array(
        'name'          => 'サイドバー1',
        'id'            => 'sidebar-1',
        'class'         => 's1',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

    register_sidebar(array(
        'name'          => 'サイドバー2',
        'id'            => 'sidebar-2',
        'class'         => 's2',
        'before_widget' => '<div class="widget">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>',
    ));

}

//カスタムメニュー
register_nav_menu( 'navigation', 'ナビゲーション' );

//// カスタム投稿タイプの追加
add_action( 'init', 'create_post_type' );
function create_post_type() {
register_post_type( 'works', // 投稿タイプ名の定義
array(
'labels' => array(
'name' => __( '作品' ), // 表示する投稿タイプ名
'singular_name' => __( 'works' )
),
'public' => true,
'menu_position' =>5,
'show_in_rest'  => true,  // 5系から出てきた新エディタ「Gutenberg」を有効にする
)
);
}

//概要（抜粋）の文字数
function my_length($length) {
  return 70;
}
add_filter('excerpt_mblength','my_length');


//概要（抜粋）の省略記号
function my_more($more) {
  return '…';
}
add_filter('excerpt_more', 'my_more');


//アイキャッチ画像
add_theme_support( 'post-thumbnails' );
