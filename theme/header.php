<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link rel="stylesheet" href="https://unpkg.com/font-awesome@4.7.0/css/font-awesome.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header class="page-header">
      <h1>
        <a href="/"><?php bloginfo('name'); ?></a>
      </h1>
    </header>
    <nav class="page-nav">
      <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
    </nav>
    <div class="main-section">
