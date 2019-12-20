<?php get_header(); ?>
<section class="main-banner general-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__text wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
          <div class="container">
            <div class="main-banner__title main-banner__title--center">
              <p>
felicidad laboral
              </p>
            </div>
 
            
          </div>
        </div>
        <div class="main-banner__img">
          <img alt="Imagen Banner" src="<?php echo get_template_directory_uri(); ?>/assets/img/felicidad.jpg">
        </div>
      </div>
    </div>
    <img class="general-banner__icon"  src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png" >
    <img class="main-banner__oval"  src="<?php echo get_template_directory_uri(); ?>/assets/img/22.png" >

  </section>
<section class="happiness-about" >
  <div class="container" >
    <div class="container-grid" >
      <div class="happiness-about__gallery" >
      <div class="happiness-about__img" >
        <img alt="Icon Team" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/images-12@3x.png">
      </div>
      <div class="happiness-about__img" >
        <img alt="Icon Team" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/images-4@3x.png">
      </div>
      <div class="happiness-about__img" >
        <img alt="Icon Team" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/images-4@3x.png">
      </div>
      <div class="happiness-about__img" >
        <img alt="Icon Team" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/images-12@3x.png">
      </div>
    </div>
      <div class="happiness-about__text">
      <div class="main-team__icon main-team__icon--initial">
      <img alt="Icon Team" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon-idea@3x.png">
    </div>
    <p class="main-general__title">
    F-SIETE
    </p>
    <p class="main-general__subtitle">
    FELICIDAD LABORAL
    </p>
    <p class="main-general__description">
    Se experimenta cuando se puede disfrutar el trabajo, aplicar en él las fortalezas y encontrarle sentido a lo que se hace.  Tiene efectos positivos en la salud, en el compromiso, en la productividad individual y laboral.  
    </p>
    </div>
    </div>
  </div>
</section>
<section class="clima-variables">
  <div class="container padding-top-bottom">
    <p class="main-general__title main-general__title--center main-general__title--no-transform  ">
    Variables que se analizan en el estudio
    </p>
    <div class="clima-variables__logo" >
      <img alt="Icon Team" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/logo-orange@3x.png">
    </div>
    <div class="clima-variables__center">
      <div class="clima-variables__flex">
        <div class="clima-variables__item">
          <img alt="Icon variables" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/business.png">
          <p class="clima-variables__title" >
        Gratificación
          </p>
        </div>
        <div class="clima-variables__item">
          <img alt="Icon variables" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/dance.png">
          <p class="clima-variables__title" >
          Disfrute
          </p>
        </div>
        <div class="clima-variables__item">
          <img alt="Icon variables" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/puzzle.png">
          <p class="clima-variables__title" >
          Sentido
          </p>
        </div>

      </div>
    </div>
  </div>
</section>


<section class="general-form ">
  <img class="general-form__bg general-form__bg--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/c-bg.png">
  <?php get_template_part('partials/general-form');?>
</section>
<?php get_footer(); ?>