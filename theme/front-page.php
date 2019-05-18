<!-- Archivo de cabecera global de Wordpress -->
<?php get_header(); ?>
<main>
  <section class="landing">
    <img class="landing-logo animated bounceInRight slow" 
      src="<?php header_image(); ?>" />
    <nav class="landing-menus animated bounceInLeft slow">
      <h1>Asociación Guardianes</h1>
      <div class="animated bounceInLeft delay-1s">
        <?php wp_nav_menu( array( 'theme_location' => 'navegation', 'menu_class' => 'menu primary' ) ); ?>
        <?php wp_nav_menu( array( 'theme_location' => 'social', 'menu_class' => 'menu social' ) ); ?>
        <a class="join-aso" href="https://forms.gle/SAqZFJQsPdsYeYXA6">
          <button>Únete a Guardianes</button>
        </a>
      </div>
    </nav>
    <button class="landing-scroll-btn" onclick="window.scrollTo({behavior: 'smooth', left: 0, top: window.innerHeight})">
      <i class="fa fa-chevron-down"></i>
    </button>
  </section>
  <?php if ( have_posts() ) : the_post(); ?>
    <section class="landing-content">
      <h1><?php the_title(); ?></h1>
      <?php the_content(); ?>
    </section>
  <?php endif; ?> 
</main>
<!-- Archivo de pié global de Wordpress -->
<?php get_footer(); ?>
