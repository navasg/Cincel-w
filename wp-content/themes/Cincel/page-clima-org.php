<?php get_header(); ?>
<?php get_template_part('partials/general-banner');?>
<section class="clima-about" >
  <div class="container padding-top-bottom" > 
    <div class="container-grid" >
      <div class="clima-about__img" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/imagen@3x.png">
      </div>
      <div class="clima-about__text" >
        <div class="main-team__icon main-team__icon--initial">
          <img alt="Icon Team" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon-idea@3x.png">
        </div>
        <p class="main-general__title">
          Eco v
        </p>
        <p class="main-general__subtitle">
          Clima <br> Organizacional
        </p>
        <p class="main-general__description">
        Lo que las personas piensan acerca del lugar donde trabajan y su labor determina en gran medida cómo se sienten y cómo se comportan. Cuando el clima es positivo se fortalece el vínculo con la organización, se disfruta más lo que se hace y se logran mejores resultados.
        </p>
      </div>
    </div>
   </div> 
</section>
<section class="clima-variables">
  <div class="container padding-top-bottom">
    <p class="main-general__title main-general__title--center main-general__title--no-transform  ">
    Variables que se analizan en el estudio
    </p>
    <div class="clima-variables__logo" >
      <img alt="Icon Team" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/logo-orange@3x.png">
    </div>
    <div class="clima-variables__center">
      <div class="container-grid">
        <div class="clima-variables__item">
          <img alt="Icon variables" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon_62@3x.png">
          <p class="clima-variables__title" >
          Apoyo 
Organizacional
          </p>
        </div>
        <div class="clima-variables__item">
          <img alt="Icon variables" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon_72@3x.png">
          <p class="clima-variables__title" >
          Apoyo 
del jefe
          </p>
        </div>
        <div class="clima-variables__item">
          <img alt="Icon variables" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon_8@3x.png">
          <p class="clima-variables__title" >
          Disponibilidad
de recursos
          </p>
        </div>
        <div class="clima-variables__item">
          <img alt="Icon variables" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon_9@3x.png">
          <p class="clima-variables__title" >
          Claridad organizacional
          </p>
        </div>
        <div class="clima-variables__item">
          <img alt="Icon variables" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon_10@3x.png">
          <p class="clima-variables__title" >
          Trato interpesonal
          </p>
        </div>
        <div class="clima-variables__item">
          <img alt="Icon variables" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon_52@3x.png">
          <p class="clima-variables__title" >Trabajo enequipo</p>
        </div>
        <div class="clima-variables__item">
          <img alt="Icon variables" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/iconn@3x.png">
          <p class="clima-variables__title" >Sentido de pertenencia</p>
        </div>
        <div class="clima-variables__item">
          <img alt="Icon variables" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon_22@3x.png">
          <p class="clima-variables__title" >Estabilidad</p>
        </div>
        <div class="clima-variables__item">
          <img alt="Icon variables" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon_32@3x.png">
          <p class="clima-variables__title" >Retribución</p>
        </div>
        <div class="clima-variables__item">
        <img alt="Icon variables" data-src="http://localhost/Cincel-w/wp-content/themes/Cincel/assets/img/icon_42@3x.png">
        <p class="clima-variables__title" >Coherencia</p>  
      </div>
      </div>
    </div>
  </div>
</section>
<section class="general-form ">
  <img class="general-form__bg general-form__bg--top" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-copy-top.png">
  <img class="general-form__bg general-form__bg--bottom" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-copy-bottom.png">
  <?php get_template_part('partials/general-form');?>
</section>
<?php get_footer(); ?>
