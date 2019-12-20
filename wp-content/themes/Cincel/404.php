<?php get_header(); ?>
<section class="main-banner general-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__text wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
          <div class="container">
            <div class="main-banner__title main-banner__title--center">
              <p>
Página no encontrada
              </p>
            </div>
          </div>
        </div>
        <div class="main-banner__img">
          <img alt="Imagen Banner" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-404.png">
        </div>
      </div>
    </div>
    <img class="general-banner__icon"  src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png" >
    <img class="main-banner__oval"  src="<?php echo get_template_directory_uri(); ?>/assets/img/22.png" >

  </section>

  <section class="error404" >
    <div class="container padding-top-bottom">
      <div class="d-flex justify-content-center" >
      <img class="img-404" src="<?php echo get_template_directory_uri(); ?>/assets/img/text.png">
      </div>
      <h2 class="main-general__title main-general__title--center">Página no encontrada</h2>
      <p class="main-general__description main-general__description--semibold main-general__description--center " >
      Parece que puedes tener un giro equivocado. No te preocupes ... nos pasa a los mejores. 
      </p>
      <div class="mt-btn d-flex justify-content-center">
      <a  href="<?php echo bloginfo('url'); ?>/index.php" class="main-general__button" >Volver al inicio</a>
      </div>
    </div>
  
  </section>

  <?php get_template_part('partials/main-subscribe');?>

  <?php get_footer(); ?>
