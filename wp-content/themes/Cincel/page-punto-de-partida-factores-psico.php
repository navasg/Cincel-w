<?php get_header(); ?>
<section class="main-banner general-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__text wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
          <div class="container">
            <div class="main-banner__title main-banner__title--center">
              <p>
factores de riesgo
              </p>
            </div>
            <div class="main-banner__title main-banner__title--center">
              <p>
               Psicosocial        
              </p>
            </div> 
            <div class="main-banner__subtitle main-banner__title--center">
              <p>
               Énfasis           
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
  </section><section class="general-about" >
<section class="general-about psychosocial-factors" >
  <div class="container " > 
    <div class="container-grid" >
      <div class="general-about__img" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/fact.png">
      </div>
      <div class="general-about__text justify-content-center" >
        <div class="main-team__icon main-team__icon--initial">
          <img alt="Icon Team" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-idea@3x.png">
        </div>
        <p class="main-general__title main-general__title--orange">
        Enfasis
        </p>
        <p class="main-general__subtitle main-general__subtitle--gray">
        Factores de riesgo <br> psicosocial
        </p>
        <p class="main-general__description">
        Son características sociales y del entorno  que tienen la capacidad de influir en la salud, bienestar, desempeño o desarrollo de las personas. Con este diagnóstico se podrán conocer los factores intralaborales, extralaborales e individuales, y sus efectos en la satisfacción laboral, el estrés y el Burnout.  </p>
      </div>
    </div>
   </div> 
</section>

<section class="hierarchy-of-effects" >
  <img class="general-form__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-2.png">
  <div class="container padding-top-bottom" >
  <p class="main-general__title main-general__title--orange main-general__title--center">
  Jerarquía 
        </p>
        <p class="main-general__subtitle main-general__subtitle--center main-general__subtitle--gray">
        De efectos
        </p>
    <div class="hierarchy-of-effects__img" >
      <img class="" alt="Icon Team" src="<?php echo get_template_directory_uri(); ?>/assets/img/1.png">
    </div>
</div>
</section>


<section class="general-form ">
  <?php get_template_part('partials/general-form');?>
</section>
<?php get_footer(); ?>