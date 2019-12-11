<?php get_header(); ?>
<?php get_header(); ?>
<section class="main-banner general-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__text wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
          <div class="container">

            <div class="main-banner__title main-banner__title--center">
              <p>
              Investigación 
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
  </section>
<section class="general-about" >
  <div class="container " > 
    <div class="container-grid" >
      <div class="general-about__img" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imag-investigacion.png">
      </div>
      <div class="general-about__text justify-content-center" >
        <div class="main-team__icon main-team__icon--initial">
          <img alt="Icon Team" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-idea@3x.png">
        </div>
        <p class="main-general__subtitle">
        INVESTIGACIÓN
        </p>
        <p class="main-general__description">
        Identificamos cuestiones o problemas relevantes de la organización y metódicamente llegamos a una respuesta.         </p>
      </div>
    </div>
   </div> 
</section>

<section class="investigation" >
<img class="general-form__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-22@3x.png" >
  <div class="container padding-top-bottom"> 
    <div class="container-grid" >
      <div class="investigation-card">
        <div class="investigation-card__icon">
          <img alt="icono investigación" src="<?php echo get_template_directory_uri(); ?>/assets/img/leadership@3x.png">
        </div>
        <p class="main-general__description main-general__title--center main-general__description--semibold">
          Obtenemos resultados
        </p>
        <p class="main-general__description main-general__description--center main-general__description--light">
          Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
        </p>
      </div>
      <div class="investigation-card">
        <div class="investigation-card__icon">
          <img alt="icono investigación" src="<?php echo get_template_directory_uri(); ?>/assets/img/meeting@3x.png">
        </div>
        <p class="main-general__description main-general__title--center main-general__description--semibold">
          Obtenemos resultados
        </p>
        <p class="main-general__description main-general__description--center main-general__description--light">
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
        </p>
        </div>
      <div class="investigation-card">
        <div class="investigation-card__icon">
          <img alt="icono investigación" src="<?php echo get_template_directory_uri(); ?>/assets/img/idea-1@3x.png">
        </div>
        <p class="main-general__description main-general__title--center main-general__description--semibold">
          Obtenemos resultados
        </p>
        <p class="main-general__description main-general__description--center main-general__description--light">
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
        </p>
      </div>
      <div class="investigation-card">
        <div class="investigation-card__icon">
          <img alt="icono investigación" src="<?php echo get_template_directory_uri(); ?>/assets/img/idea@3x.png">
        </div>
        <p class="main-general__description main-general__title--center main-general__description--semibold">
          Obtenemos resultados
        </p>
        <p class="main-general__description main-general__description--center main-general__description--light">
        Lorem Ipsum es simplemente el texto de relleno de las imprentas y archivos de texto.
        </p>
      </div>
    </div>
  </div> 
</section>
<section class="general-form ">
  <?php get_template_part('partials/general-form');?>
</section>

<?php get_footer(); ?>