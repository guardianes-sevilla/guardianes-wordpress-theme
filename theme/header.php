<!DOCTYPE html>
<html lang="<?php bloginfo('language'); ?>">
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url') ?>">
    <link defer rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.0/animate.min.css">
    <link defer rel="stylesheet" href="https://unpkg.com/font-awesome@4.7.0/css/font-awesome.css">
    <?php wp_head(); ?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <h1><?php bloginfo('name'); ?></h1>
    </header>
    <nav>
      <ul class="main-nav">
        <?php wp_nav_menu( array( 'theme_location' => 'navegation' ) ); ?>
      </ul>
    </nav>