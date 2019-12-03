<?php get_header(); ?>
<?php get_template_part('partials/general-banner');?>
<section class="general-about" >
  <div class="container padding-top-bottom" > 
    <div class="container-grid" >
      <div class="general-about__img" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/escribimos.png">
      </div>
      <div class="general-about__text justify-content-center" >


        <p class="main-general__subtitle mb-0">
        Revistas interamericana de 

        </p>
        <p class="main-general__title main-general__title main-general__title--no-transform">
        psicología ocupacional. 
        </p>
        <p class="main-general__description">
        Mantente actualizado. La Revista Interamericana de Psicología Ocupacional (RIPO), es una publicación científica semestral, dirigida a directivos de las áreas de gestión humana, psicólogos organizacionales, psicólogos de salud ocupacional y profesionales. Es un espacio para el debate y difusión del conocimiento científico desarrollado en los campos de la psicología de la ocupación, del trabajo y de las organizaciones en América Latina. Los artículos publicados representan avances en la comprensión del comportamiento humano en su contexto de trabajo.</p>    
        <div class="questionnaire-about__logo">
          <img src="<?php echo get_template_directory_uri(); ?>/assets/img/ripo.png" >
        </div>
        <div class="mt-btn" >
          <a  href="" class="main-general__button" > Ver revista </a>
        </div>
        </div>
    </div>
   </div> 
</section>

<section class="general-about books" >
<img class="general-form__bg" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg_2@3x.png">

  <div class="container padding-top-bottom" > 
    <div class="container-grid" >
     
      <div class="general-about__text justify-content-center" >


        <p class="main-general__subtitle ">
        Libros

        </p>
        <ul class="commitment-about__list" >
          <li class="main-general__description main-general__description--semibold" >
          Dirección de reuniones efectivas (Fernando Toro Álvarez)
          </li>
          <li class="main-general__description main-general__description--semibold">
          Motivos, intereses y preferencias de empleados y gerentes. Diferencias individuales. (Fernando Toro Álvarez)
          </li>
          <li class="main-general__description main-general__description--semibold">
          Manual para el diseño de pruebas objetivas de saber – evaluación de estructuras cognitivas, segunda edición (Fernando Toro Álvarez)
          </li>
          <li class="main-general__description main-general__description--semibold">
          Gestión del clima organizacional, intervención basada en evidencia (Fernando Toro Álvarez y Alejandro Sanín Posada)
          </li> 
          <li class="main-general__description main-general__description--semibold">
          Mi primer modelamiento de ecuación estructural (Herman Littlewood)
          </li> 
          <li class="main-general__description main-general__description--semibold">
          Clima organizacional. Una aproximación a su dinámica en la empresa latinoamericana. Segunda Edición. (Fernando Toro Álvarez).
          </li> 
        </ul>        
          <a  href="" class="main-general__button" > Ver Más </a>
        </div>
        <div class="general-about__img" >
        <img src="<?php echo get_template_directory_uri(); ?>/assets/img/decimos.png">
      </div>
    </div>
   </div> 
</section>

<section class="general-form ">
  <?php get_template_part('partials/general-form');?>
</section>
<?php get_footer(); ?>