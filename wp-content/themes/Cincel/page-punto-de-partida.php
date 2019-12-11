<?php get_header(); ?>
<section class="main-banner general-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__text wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
          <div class="container">
            <div class="main-banner__title main-banner__title--center">
              <p>
                Punto de Partida
              </p>
            </div>
            <div class="main-banner__title main-banner__title--center">
              <p>
                Diagnóstico              
              </p>
            </div> 
          </div>
        </div>
        <div class="main-banner__img">
          <img alt="Imagen Banner" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-image-2.png">
        </div>
      </div>
    </div>
    <img class="general-banner__icon"  src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png" >
    <img class="main-banner__oval"  src="<?php echo get_template_directory_uri(); ?>/assets/img/22.png" >

  </section>

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
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/im1.png)">
            <div class="service-card__mask">
            <div class="service-card__title">
              <p>
                <span>
                  Clima
                </span> organizacional
              </p>
              <p class="service-card__rectangle">
                Eco V
              </p>
            </div>
            <p class="service-card__description">
              Lorem Ipsum es simplemente el texto de relleno de las 
            </p>
          

            </div>
          </div>
          <div class="main-service__card"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/im2.png)">
            <div class="service-card__mask">

            <div class="service-card__title">
              <p>
                <span>
                  Compromiso
                </span> <br> laboral
              </p>
              <p class="service-card__rectangle">
                Nexos
              </p>
            </div>
            <p class="service-card__description">
              Lorem Ipsum es simplemente el texto de relleno de las 
            </p>
           </div>
          </div>
          <div class="main-service__card"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/im3.png)">
            <div class="service-card__mask">

            <div class="service-card__title">
              <p>
                <span>Felicidad</span> <br>
                laboral
              </p>
              <p class="service-card__rectangle">
                F - Siete
              </p>
            </div>
            <p class="service-card__description">
              Lorem Ipsum es simplemente el texto de relleno de las  
            </p>
            </div>
          </div>
          <div class="main-service__card"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/im4.png)">
            <div class="service-card__mask">

            <div class="service-card__title">
              <p>
                <span>Factores de riesgo</span> psicosocial
              </p>
              <p class="service-card__rectangle">
                Enfasis
              </p>
            </div>
            <p class="service-card__description">
              Lorem Ipsum es simplemente el texto de relleno de las  
            </p>
          </div>
          </div>
          
          <div class="main-service__card"
          
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/im5.png)">
            <div class="service-card__mask">

            <div class="service-card__title">
              <p>
                <span>Cuestionario de</span> motivación
              </p>
              <p class="service-card__rectangle">
                CMT
              </p>
            </div>
            <p class="service-card__description">
              Lorem Ipsum es simplemente el texto de relleno de las  
            </p>
          </div>
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
      <img class="" src="<?php echo get_template_directory_uri(); ?>/assets/img/pc.png" alt="imagen platform">
      </div>
      <div class="general-service__text">
        <div class="main-team__icon main-team__icon--initial">
          <img alt="Icon Team" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-idea@3x.png">
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