<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<main>
  <section class="landing">
    <img class="logo animated bounceInRight slow" src="/wp-content/uploads/2019/03/Escudo-Flat-blanco-01-1.png" />
    <nav class="menus animated bounceInLeft slow">
      <h1>Asociación Guardianes</h1>
      <div class="animated bounceInLeft delay-1s">
        <?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_class' => 'menu social' ) ); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'navegation', 'menu_class' => 'menu primary' ) ); ?>
        <p class="join-aso">
          ¿Quieres unirte a Guardianes?
          <a href="https://forms.gle/SAqZFJQsPdsYeYXA6">Pulsa aquí</a>
        </p>
      </div>
    </nav>
    <button onclick="window.scrollTo({behavior: 'smooth', left: 0, top: window.innerHeight})" class="scroll-btn">
      <i class="fa fa-chevron-down"></i>
    </button>
  </section>
  <?php if ( have_posts() ) : the_post(); ?>
    <section class="content">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </section>
  <?php endif; ?> 
</main>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
