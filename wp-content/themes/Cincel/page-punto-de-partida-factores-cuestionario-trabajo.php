<?php get_header(); ?>
<section class="main-banner general-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__text wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
          <div class="container">
            <div class="main-banner__title main-banner__title--center">
              <p>
Cuestionario de
              </p>
            </div>
            <div class="main-banner__title main-banner__title--center">
              <p>
               Motivación para el           
              </p>
            </div> 
            <div class="main-banner__title main-banner__title--center">
              <p>
               Trabajo          
              </p>
            </div> 
            <div class="main-banner__subtitle main-banner__title--center">
              <p>
               CMT       
              </p>
            </div> 
            
          </div>
        </div>
        <div class="main-banner__img">
          <img alt="Imagen Banner" src="<?php echo get_template_directory_uri(); ?>/assets/img/motivacion.jpg">
        </div>
      </div>
    </div>
    <img class="general-banner__icon"  src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png" >
    <img class="main-banner__oval"  src="<?php echo get_template_directory_uri(); ?>/assets/img/22.png" >

  </section>
  <section class="general-about" ><section class="questionnaire-about" >
  <div class="container" > 
  <div class="container-grid" >
    <div class="questionnaire-about__text" >
      <div class="main-team__icon main-team__icon--initial">
        <img alt="Icon Team" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon-idea@3x.png">
      </div>
      <p class="main-general__title main-general__title--orange">
        ctm
      </p>
      <p class="main-general__subtitle main-general__subtitle--gray">
        Cuestionario de <br> Motivación para el trabajo.      
      </p>
      <p class="main-general__description">
      La motivación es un excelente predictor del desempeño en el trabajo. A través de esta plataforma pueden identificarse 15  factores motivacionales. 
    </p>
    <p class="main-general__description">
        <b>Incluye:</b> <br>
        Módulo de Administración de Procesos (Plataforma Revisión de Perfiles Individuales y Comparaciones)
        Módulo de Configuración de Perfiles, Información del Estado de Cuenta.      
    </p>
    <div class="questionnaire-about__logo" >
    <img alt="logo questionnaire" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/logo-cmt@3x.png">
    </div>
    <div class="mt-btn">
            <a class="main-general__button" href="">Ver más</a>
          </div>


    </div>
    <div class="questionnaire-about__img" >
    <img alt="Image questionnaire" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/mockup-app@3x.png">
    </div>

    </div>
   </div> 
</section>


<section class="general-form ">
  <img class="general-form__bg general-form__bg--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/c-bg.png">
  <?php get_template_part('partials/general-form');?>
</section>
<?php get_footer(); ?>