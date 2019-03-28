<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<main>
  <img class="logo animated bounceInRight slow" src="/wp-content/uploads/2019/03/Escudo-Flat-blanco-01-1.png" />
  <section class="menus animated bounceInLeft slow">
    <h1>Asociación Guardianes</h1>
    <?php wp_nav_menu( array( 'theme_location' => 'navegation', 'menu_class' => 'menu animated bounceInLeft delay-1s' ) ); ?>
    <?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_class' => 'menu animated bounceInLeft delay-1s' ) ); ?>
  </section>
</main>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
