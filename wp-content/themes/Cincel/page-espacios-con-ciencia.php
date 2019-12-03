<?php get_header(); ?>
<?php get_template_part('partials/general-banner');?>
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
          Divulgación
          </h2>
          <p class="main-general__description">
          El conocimiento científico debe estar al alcance de todos y es un motor de transformación. Ideas que aportan a la construcción de ambientes de trabajo saludables y productivos.
          </p>
        </div>
      </div>
      <div class="d-flex justify-content-center"> 
        <div class="main-services__width main-services__width--100"> 
          <div class="main-service__items">
            <div class="main-service__card" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/image@333x.png)">
              <div class="service-card__mask">
              <p class="main-general__title main-general__title--white main-general__title--center" >Lo decimos</p>
              </div>
            </div>
            <div class="main-service__card" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/image@3xx.png)">      
                <div class="service-card__mask">
              <p class="main-general__title main-general__title--white main-general__title--center" >Lo escribimos</p>
                </div>
            </div>
          </div>
        </div>
    </div>
  </section>

<section class="general-form ">
  <img class="general-form__bg general-form__bg--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-22@3x.png">
  <?php get_template_part('partials/general-form');?>
</section>
<?php get_footer(); ?>