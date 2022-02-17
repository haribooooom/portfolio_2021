<!doctype html>
<html lang="ja">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <title>noma log</title>

  <meta name="description" content="this is noma's portfolio site" />
  <meta name="robots" content="noindex,nofollow" />
  <meta property="og:url" content="http://haribooooom.wp.xdomain.jp/" />
  <meta property="og:title" content="hoge" />
  <meta property="og:type" content="website">
  <meta property="og:description" content="記事の抜粋" />
  <meta property="og:image" content="画像のURL" />
  <meta name="twitter:card" content="カード種類" />
  <meta name="twitter:site" content="@haribooooom" />
  <meta property="og:site_name" content="hoge" />
  <meta property="og:locale" content="ja_JP" />

  <!--font-->
  <link rel="preconnect" href="https://fonts.gstatic.com">

  <link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/site-logo.png">
  <link rel="apple-touch-icon-precomposed" href="<?php echo get_template_directory_uri(); ?>/img/site-logo.png" />

<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); echo '?' . filemtime( get_stylesheet_directory() . '/style.css'); ?>">

  <link rel="stylesheet" href="<?php echo get_stylesheet_uri(); ?>">

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <style>
    body{
      background:url(/img/bg.png) no-repeat center;
    }
  </style>
  <?php wp_head(); ?>
</head>

<body>
  <div class="wrapper">

  <header>
    <div class="logo"><a href="<?php echo esc_url( home_url( '/' ) ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/site-logo.png" alt="logo"></a></div>
    <nav class="menu">
      <ul>
        <li><a href="<?php echo get_permalink( get_page_by_title( 'works' )->ID ); ?>">WORKS</a></li>
        <li><a href="<?php echo get_permalink( get_page_by_title( 'about' )->ID ); ?>">ABOUT</a></li>
      </ul>
    </nav>
  </header>