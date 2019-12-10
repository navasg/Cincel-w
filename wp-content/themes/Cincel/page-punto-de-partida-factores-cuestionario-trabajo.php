<?php get_header(); ?>
<?php get_template_part('partials/general-banner');?>
<section class="questionnaire-about" >
  <div class="container" > 
  <div class="container-grid" >
    <div class="questionnaire-about__text" >
      <div class="main-team__icon main-team__icon--initial">
        <img alt="Icon Team" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon-idea@3x.png">
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
    <img alt="logo questionnaire" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/logo-cmt@3x.png">
    </div>
    <div class="mt-btn">
            <a class="main-general__button" href="">Ver más</a>
          </div>


    </div>
    <div class="questionnaire-about__img" >
    <img alt="Image questionnaire" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/mockup-app@3x.png">
    </div>

    </div>
   </div> 
</section>


<section class="general-form ">
  <img class="general-form__bg general-form__bg--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/c-bg.png">
  <?php get_template_part('partials/general-form');?>
</section>
<?php get_footer(); ?>