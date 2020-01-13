<?php get_header(); ?>
<section class="main-banner general-banner">
    <div class="main-banner__content">
      <div class="main-banner__item">
        <div class="main-banner__text wow animated fadeInRight" style="visibility: visible; animation-delay: .3s  ;">
          <div class="container">
            <div class="main-banner__title main-banner__title--center">
              <p>
Contáctanos           </p>
            </div>
            
          </div>
        </div>
        <div class="main-banner__img">
          <img alt="Imagen Banner" src="<?php echo get_template_directory_uri(); ?>/assets/img/bg-contact.png">
        </div>
      </div>
    </div>
    <img class="general-banner__icon"  src="<?php echo get_template_directory_uri(); ?>/assets/img/icon_7@3x.png" >
    <img class="main-banner__oval"  src="<?php echo get_template_directory_uri(); ?>/assets/img/22.png" >

  </section>

  <section class="contact-us">
    <div class="container padding-top-bottom" >
    <div class="main-team__icon">
        <img alt="Icon Team" src="<?php echo get_template_directory_uri(); ?>/assets/img/icon-idea@3x.png">
      </div>
      <p class="main-general__title main-general__title--center">
        Queremos
      </p>
      <p class="main-general__subtitle main-general__subtitle--center">
        Ayudarte
      </p>
      <div class="d-flex justify-content-center" >

        <p class="main-general__description text-center blog-all__description  " >
        Puedes compartir con nosotros tus comentarios, opiniones y necesidades o puedes contactarnos para recibir una asesoría completa sobre los servicios de tu interés  
        </p>
   
      </div>
      <div class="container-grid" >
        <div class="form-contact" >
          <input placeholder="Nombre" >
          <input placeholder="Email" >
          <input placeholder="Teléfono" >
          <input placeholder="Cargo" >
          <input placeholder="Empresa" >
          <input placeholder="Ciudad">
          <input placeholder="Asunto">
          <textarea placeholder="Mensaje" ></textarea>

          <div class="mt-btn">
              <a  href="<?php echo get_bloginfo('url'); ?>/index.php/blog-interna" class="main-general__button" >Enviar</a>
            </div>
        </div>
        <div>
        <p class="contact-us__title" > Contáctanos
        </p>

        <div class="contact-us__card" >
          <p class="contact-us__subtitle" >Medellín</p>               
          <ul class="contact-us__list" >
            <li>
              <a class="main-general__description main-general__description--semibold" href="">
              <img alt="Icon Team" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-symbol-of-an-auricular-inside-a-circle@3x.png">
              Teléfono: (+574) 444 1546
              </a>
            </li>
            <li>
              <a class="main-general__description main-general__description--semibold" href="">
              <img alt="Icon Team" src="<?php echo get_template_directory_uri(); ?>/assets/img/phone-symbol-of-an-auricular-inside-a-circle@3x.png">
Móvil: (+57) 3006401700


              </a>
            </li>
            <li>
              <a class="main-general__description main-general__description--semibold" href="">
              <img alt="Icon Team" src="<?php echo get_template_directory_uri(); ?>/assets/img/shape@3x.png"> 
              Dirección: Carrera 25A #1-31, Edificio Parque Empresarial, Oficina 1102, Medellín, Colombia


              </a>
            </li>
            <li>
              <a class="main-general__description main-general__description--semibold" href="">
              <img alt="Icon Team" src="<?php echo get_template_directory_uri(); ?>/assets/img/close-envelope2@3x.png">
              Correo Electrónico: clientecincel@cincel.com.co
              </a>
            </li>
          </ul>
        <div>
        </div>
      </div>
    </div>
</section>


<section class="google-maps">
  <img class="google-maps__icon" alt="" src="<?php echo get_template_directory_uri(); ?>/assets/img/placeholder.png">
  <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15865.994499795515!2d-75.5573035!3d6.197753!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xcf4ec49f3216dd4d!2sCincel%20S.A.S!5e0!3m2!1ses-419!2sve!4v1578929123719!5m2!1ses-419!2sve" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
</section>


<?php get_template_part('partials/main-subscribe');?>
<?php get_footer(); ?>