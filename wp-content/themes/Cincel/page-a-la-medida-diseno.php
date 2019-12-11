<?php get_header(); ?>
<?php get_template_part('partials/general-banner');?>
<section class="general-about" >
  <div class="container " > 
    <div class="container-grid" >
      <div class="general-about__img" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/designs.png">
      </div>
      <div class="general-about__text justify-content-center" >
        <div class="main-team__icon main-team__icon--initial">
          <img alt="Icon Team" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-idea@3x.png">
        </div>
        <p class="main-general__subtitle">
        DISEÑO
        </p>
        <p class="main-general__description">
        Comprender lo que hace única a una organización, es el comienzo para generar trasformaciones positivas.         
      </p>
      <p class="main-general__description">
      El sentido común puede llevar a asumir riesgos innecesarios y costosos. Para evitarlo lo acompañamos, aplicando el método científico, a responder confiablemente los interrogantes particulares de su organización. 
      </p>
      <p class="main-general__description">
      Construimos modelos de gestión e instrumentos de medición adaptados a las características de la organización.       </p>
      </div>
    </div>
   </div> 
</section>
<section class="main-services design-services">
<img class="general-form__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_2@3x.png">

  <img class="main-service__icon-small" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png">
  <div class="container padding-top-bottom">
    <div class="d-flex justify-content-center">
      <div class="main-services__width">

        <div class="main-service__items general-services__items">
          <div class="main-service__card"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/serv1.png)">
            <div class="service-card__title service-card__title--center service-card__title--lower ">
              <p>
                <span>Módelos de gestión </span> de desempeño
              </p>
            </div>
            <p class="service-card__description">
            Lorem Ipsum es simplemente el texto de relleno de las             </p>
            <div class="service-card__mask"></div>
          </div>
          <div class="main-service__card"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/serv2.png)">
            <div class="service-card__title service-card__title--center service-card__title--lower ">
              <p>
                <span>
                  Cultura
                </span>
              </p>
          
            </div>
            <p class="service-card__description">
            Lorem Ipsum es simplemente el texto de relleno de las             </p>
            <div class="service-card__mask"></div>
          </div>
          <div class="main-service__card"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/serv3.png)">
            <div class="service-card__title service-card__title--center service-card__title--lower ">
              <p>
                <span>Gestión por </span>competencias
              </p>
           
            </div>
            <p class="service-card__description">
            Lorem Ipsum es simplemente el texto de relleno de las 
            </p>
            <div class="service-card__mask"></div>
          </div>
          <div class="main-service__card"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/serv4.png)">
            <div class="service-card__title service-card__title--center service-card__title--lower ">
              <p>
                <span>Pruebas a medida </span> para las organizaciones
              </p>
       
            </div>
            <p class="service-card__description">
Lorem Ipsum es simplemente el texto de relleno de las             </p>
          </div>
          <div class="main-service__card"
            style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/img/serv5.png)">
            <div class="service-card__title service-card__title--center service-card__title--lower ">
              <p>
                <span>Verificación y ajustes de las pruebas  </span>
              </p>
       
            </div>
            <p class="service-card__description">
Lorem Ipsum es simplemente el texto de relleno de las             </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>



<section class="general-form ">
  <?php get_template_part('partials/general-form');?>
</section>

<?php get_footer(); ?>