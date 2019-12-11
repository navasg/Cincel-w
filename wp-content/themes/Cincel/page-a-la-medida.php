<?php get_header(); ?>
<section class="main-banner general-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__text wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
          <div class="container">
            <div class="main-banner__title main-banner__title--center">
              <p>
A la medida
              </p>
            </div>
            <div class="main-banner__title main-banner__title--center">
              <p>
               Investigación y        
              </p>
            </div> 
            <div class="main-banner__title main-banner__title--center">
              <p>
               Diseño          
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
          Investigación y diseño
          </h2>
          <p class="main-general__description">
          Comprender lo que hace única a una organización, es el comienzo para generar trasformaciones positivas. 


          </p>
          <p class="main-general__description">
          El sentido común puede llevar a asumir riesgos innecesarios y costosos. Para evitarlo lo acompañamos, aplicando el método científico, a responder confiablemente los interrogantes particulares de su organización.
          </p>
        </div>
      </div>
      <div class="d-flex justify-content-center"> 
        <div class="main-services__width main-services__width--100"> 
          <div class="main-service__items">
            <div class="main-service__card" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/image@2.png)">
              <div class="service-card__mask">
              <p class="main-general__title main-general__title--white main-general__title--center" >Investigación</p>
              </div>
            </div>
            <div class="main-service__card" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/imag3x.png)">      
                <div class="service-card__mask">
              <p class="main-general__title main-general__title--white main-general__title--center" >Diseño</p>
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