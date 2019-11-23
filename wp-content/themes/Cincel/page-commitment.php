<?php get_header(); ?>
<?php get_template_part('partials/general-banner');?>
<section class="commitment-about" >
  <div class="container" > 
    <div class="main-team__icon main-team__icon--initial">
      <img alt="Icon Team" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon-idea@3x.png">
    </div>
    <p class="main-general__title">
      NEXOS
    </p>
    <p class="main-general__subtitle">
      Compromiso Laboral
    </p>
    <p class="main-general__description">
    Un vínculo fuerte y afectivo con el trabajo y la organización se asocia con mayor <br> bienestar, menor rotación y mejor desempeño.   
    </p>
    <p class="main-general__subtitle main-general__subtitle--uppercase">
      Engagement
    </p>
    <div class="container-grid" >
      <div class="commitment-about__item">
        <p class="general-form__title general-form__title--bold">
        CON EFECTOS POSITIVOS
        </p>
        <ul class="commitment-about__list" >
          <li class="main-general__description main-general__description--semibold" >
          Altamente comprometido
          </li>
          <li class="main-general__description main-general__description--semibold">
          Efectivo/Dominante
          </li>
          <li class="main-general__description main-general__description--semibold">
          Efectivo/Normativo/Dominante
          </li>
          <li class="main-general__description main-general__description--semibold">
          Efectivo/Continuamente/Dominante
          </li> 
        </ul>
      </div>
      <div class="commitment-about__item">
        <p class="general-form__title general-form__title--bold">
        SIN EFECTOS ESPECIFICOS
        </p>
        <ul class="commitment-about__list" >
          <li class="main-general__description main-general__description--semibold" >
          Compromiso neutro
          </li>
          <li class="main-general__description main-general__description--semibold">
          Normativo dominante          
          </li>
        </ul>
      </div>
      <div class="commitment-about__item">
        <p class="general-form__title general-form__title--bold">
        CON EFECTOS NEGATIVOS
        </p>
        <ul class="commitment-about__list" >
          <li class="main-general__description main-general__description--semibold" >
          Continuidad dominante          
          </li>
          <li class="main-general__description main-general__description--semibold">
          Continuidad normativo dominante
          </li>
          <li class="main-general__description main-general__description--semibold">
          Continuidad normativo dominante
          </li>
        </ul>
      </div>
    </div>
   </div> 
</section>


<section class="general-form ">
  <img class="general-form__bg general-form__bg--img" src="<?php echo get_template_directory_uri(); ?>/assets/img/c-bg.png">
  <?php get_template_part('partials/general-form');?>
</section>
<?php get_footer(); ?>