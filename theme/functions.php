<?php

/**
 * Activa características del tema usando la API de add_theme_support
 */
function guardianes_config() {
  /**
   * Activa la característica de poner el título del post actual en el título de la página
   */
  add_theme_support( 'title-tag' );
  add_theme_support( 'custom-header' );
}
add_action('after_setup_theme', 'guardianes_config');

/**
 * Crea nuestros menús gestionables desde el
 * administrador de Wordpress.
 */
function guardianes_menus() {
  register_nav_menus(
    array(
      'navegation' => __('Menú de navegación'),
      'social'     => __('Menu de redes sociales')
    )
  );
}
add_action( 'init', 'guardianes_menus' );

/**
 * Crea una zona de widgets que podremos gestionar
 * fácilmente desde administrador de Wordpress.
 */
function guardianes_widgets(){
 register_sidebar(
    array(
      'name'          => __( 'Sidebar' ),
      'id'            => 'sidebar',
      'before_widget' => '<div class="widget">',
      'after_widget'  => '</div>',
      'before_title'  => '<h3>',
      'after_title'   => '</h3>',
    )
  );
}
add_action('init','guardianes_widgets');