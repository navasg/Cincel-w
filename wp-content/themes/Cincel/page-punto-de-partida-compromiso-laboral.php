<?php get_header(); ?>
<section class="main-banner general-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__text wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
          <div class="container">
            <div class="main-banner__title main-banner__title--center">
              <p>
Compromiso laboral
              </p>
            </div>

            <div class="main-banner__subtitle main-banner__title--center">
              <p>
               Nexos         
              </p>
            </div> 
            
          </div>
        </div>
        <div class="main-banner__img">
          <img alt="Imagen Banner" src="<?php echo get_template_directory_uri(); ?>/assets/img/Compromiso.jpg">
        </div>
      </div>
    </div>
    <img class="general-banner__icon"  src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png" >
    <img class="main-banner__oval"  src="<?php echo get_template_directory_uri(); ?>/assets/img/22.png" >

  </section>
  
  
  <section class="commitment-about" >
  <div class="container padding-top-bottom" > 
    <div class="main-team__icon main-team__icon--initial">
      <img alt="Icon Team" src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon-idea@3x.png">
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