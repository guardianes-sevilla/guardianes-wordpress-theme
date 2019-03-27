<?php

/**
 * Crea nuestros menús gestionables desde el
 * administrador de Wordpress.
 */
function guardianes_menus() {
  register_nav_menus(
    array(
      'navegation' => __( 'Menú de navegación' ),
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