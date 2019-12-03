<?php get_header(); ?>
<?php get_template_part('partials/general-banner');?>

<section class="main-services">
  <img class="main-service__icon-small" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png">
  <div class="container padding-top-bottom">
    <div class="container-grid">
      <div class="item-grid">
        <div class="main-service__icon">
          <img alt="Icono de servicio" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_5@3x.png">
        </div>
      </div>
      <div class="item-grid">

        <h2 class="main-general__subtitle">
          Diagnóstico.
        </h2>
        <p class="main-general__description main-general__description--semibold">
          Las desiciones acertadas solo se toman con datos confiables.
        </p>
        <p class="main-general__description">
          Nuestros instrumentos le brindarán datos válidos y confiables sobre el estado actual de realidades laborales
          claves para la gestión positiva de las personas y la organización.
        </p>
        <p class="general-services__category">
          Elige subcategorías
        </p>
      </div>
    </div>
    <div class="d-flex justify-content-center">
      <div class="main-services__width">

        <div class="main-service__items general-services__items">
          <div class="main-service__card"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/bg_4@3x.png)">
            <div class="service-card__title">
              <p>
                <span>
                  Punto
                </span> de partida
              </p>
              <p class="service-card__rectangle">
                Diagnostico
              </p>
            </div>
            <p class="service-card__description">
              Hay varios temas para redireccionar a otra aplicación.
            </p>
            <div class="service-card__mask"></div>
          </div>
          <div class="main-service__card"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/image_4@3x.png)">
            <div class="service-card__title">
              <p>
                <span>
                  Camino
                </span> al cambio
              </p>
              <p class="service-card__rectangle">
                Intervención
              </p>
            </div>
            <p class="service-card__description">
              intervención, desarrollo de liderazgo, interacción con grupos y personas
            </p>
            <div class="service-card__mask"></div>
          </div>
          <div class="main-service__card"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/image_5@3x.png)">
            <div class="service-card__title">
              <p>
                <span>A la medida</span>
              </p>
              <p class="service-card__rectangle">
                Investigación & diseño
              </p>
            </div>
            <p class="service-card__description">
              Investigación y diseño, cosas más especializadas, servicio exclusivo.
            </p>
            <div class="service-card__mask"></div>
          </div>
          <div class="main-service__card"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/image_6@3x.png)">
            <div class="service-card__title">
              <p>
                <span>Espacios</span> con-ciencia
              </p>
              <p class="service-card__rectangle">
                Divulgación del conocimineto
              </p>
            </div>
            <p class="service-card__description">
              Espacios conciencia, revistas, portafolio de conferencias (conferencias, simposios).
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="general-service__platform">
  <img class="main-blog__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_2@3x.png">
  <div class="container padding-top-bottom">
    <div class="container-grid">
      <div class="general-service__img" >
      <img class="" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.png" alt="imagen platform">
      </div>
      <div class="general-service__text">
        <div class="main-team__icon main-team__icon--initial">
          <img alt="Icon Team" data-src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-idea@3x.png">
        </div>
        <p class="main-general__title ">
          Conoce
        </p>
        <p class="main-general__subtitle ">
          NUESTRA <br> PLATAFORMA
        </p>
        <div class="mt-btn">
          <a class="main-general__button" href="">Ver Más</a>
        </div>
      </div>  
    </div>
  </div>
</section>
<section class="general-form">
  <?php get_template_part('partials/general-form');?>
</section>
<?php get_footer(); ?>