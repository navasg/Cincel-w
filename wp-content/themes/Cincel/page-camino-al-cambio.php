<?php get_header(); ?>
<section class="main-banner general-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__text wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
          <div class="container">
            <div class="main-banner__title main-banner__title--center">
              <p>
Camino al cambio
              </p>
            </div>
            <div class="main-banner__title main-banner__title--center">
              <p>
               Intervención         
              </p>
            </div> 
          
            
          </div>
        </div>
        <div class="main-banner__img">
          <img alt="Imagen Banner" src="<?php echo get_template_directory_uri(); ?>/assets/img/caminoalcambio.jpg">
        </div>
      </div>
    </div>
    <img class="general-banner__icon"  src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png" >
    <img class="main-banner__oval"  src="<?php echo get_template_directory_uri(); ?>/assets/img/22.png" >

  </section>
<section class="main-services road-about">
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
          Intervención
          </h2>
          <p class="main-general__description">
          Las personas y las organizaciones tiene el potencial para crear entornos saludables.
          </p>
          <p class="main-general__description">
          Diseñamos experiencias con sentido, basadas en evidencias y principios del aprendizaje en adultos, que permiten a los participantes desarrollar capacidades organizacionales y humanas necesarias para hacer frente a las exigencias del día a día.
          </p>
        </div>
      </div>
      <div class="d-flex justify-content-center"> 
        <div class="main-services__width main-services__width--100"> 
          <div class="main-service__items">
            <div class="main-service__card" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/image1.png)">
              <div class="service-card__mask">
              <p class="main-general__description main-general__description--center main-general__description--white" >¿Cómo ser un líder consciente?</p>
              <p class="main-general__title main-general__title--white main-general__title--center" >LIDER PHD</p>
              </div>
            </div>
            <div class="main-service__card" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/image2.png)">      
                <div class="service-card__mask">
                <p class="main-general__description main-general__description--center main-general__description--white" >¿Cómo lograr equipos de alto desempeño?</p>
              <p class="main-general__title main-general__title--white main-general__title--center" >RUTA 5E</p>
                </div>
            </div>
            <div class="main-service__card" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/image3.png)">
              <div class="service-card__mask">
              <p class="main-general__description main-general__description--center main-general__description--white" >¿Cómo desarrollar el potencial?</p>
              <p class="main-general__title main-general__title--white main-general__title--center" >FORMACIÓN CON SENTIDO</p>
              </div>
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