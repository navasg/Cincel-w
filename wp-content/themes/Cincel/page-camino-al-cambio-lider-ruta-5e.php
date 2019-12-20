<?php get_header(); ?>
<section class="main-banner general-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__text wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
          <div class="container">
            <div class="main-banner__title main-banner__title--center">
              <p>
Ruta 5E              </p>
            </div>
            
          </div>
        </div>
        <div class="main-banner__img">
          <img alt="Imagen Banner" src="<?php echo get_template_directory_uri(); ?>/assets/img/banner-phd.png">
        </div>
      </div>
    </div>
    <img class="general-banner__icon"  src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png" >
    <img class="main-banner__oval"  src="<?php echo get_template_directory_uri(); ?>/assets/img/22.png" >

  </section>
  
  <section class="general-about conference" >
  <div class="container " > 
    <div class="container-grid" >
      <div class="general-about__img" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/5e.png">
      </div>
      <div class="general-about__text justify-content-center" >
        <div class="main-team__icon main-team__icon--initial">
          <img alt="Icon Team" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-idea@3x.png">
        </div>
        <p class="main-general__subtitle  ">
          Ruta 5E
        </p>
    
        <p class="main-general__title main-general__title main-general__title--orange main-general__title--no-transform">
        ¿Cómo lograr equipos de alto desempeño?
        </p>

        <p class="main-general__description">
        Acompañamos el desarrollo de equipos de trabajo a partir de intervenciones ajustadas a sus necesidades y potencialidades, logrando un estado más positivo y soportado en la autogestión y la corresponsabilidad. 

      </div>
    </div>
   </div> 
</section>
<section class="list-5e" >
  <div class="container padding-top-bottom" >
    <ol>
      <li>
      <img class="icon-phd" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_3@3x.png">
        <p class="clima-variables__title clima-variables__title--initial">
        EXPLORAR 
      </p>
      <p class="main-general__description" >
        Indagamos por la historia del equipo con el objetivo de elegir la metodología más adecuada. 
      </p>
      <span class="list-5e__line" ></span>

      </li>
      <li>
      <img class="icon-phd" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_3@3x.png">
        <p class="clima-variables__title clima-variables__title--initial">
        EXPLICAR 
      </p>
      <p class="main-general__description" >
      Analizamos con el equipo las realidades de trabajo positivas e inconvenientes susceptibles de ser foco de intervención.
      </p>
      <span class="list-5e__line" ></span>
      </li>
      <li>
      <img class="icon-phd" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_3@3x.png">
        <p class="clima-variables__title clima-variables__title--initial">
        ELABORAR

      </p>
      <p class="main-general__description" >
      El equipo elabora un plan de auto gestión con el que sus integrantes se comprometen.       
    </p>
    <span class="list-5e__line" ></span>

      </li>
      <li>
      <img class="icon-phd" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_3@3x.png">
        <p class="clima-variables__title clima-variables__title--initial">
        EJECUTAR

      </p>
      <p class="main-general__description" >
      Se desarrollan las capacidades necesarias para fortalecer la dinámica grupal. 
    </p>
    <span class="list-5e__line" ></span>

      </li>
      <li>
      <img class="icon-phd" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_3@3x.png">
        <p class="clima-variables__title clima-variables__title--initial">
        EVALUAR

      </p>
      <p class="main-general__description" >
      Valoramos los efectos de la intervención. 
    </p>
      </li>


    </ol>
  </div>
      <img class="general-form__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-2.png"> 
      
          <img class="icon" alt="Icono de servicio" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_5@3x.png">
        
</section>
<section class="general-form ">
  <!-- <img class="general-form__bg general-form__bg--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/c-bg.png"> -->
  <?php get_template_part('partials/general-form');?>
</section>
<?php get_footer(); ?>