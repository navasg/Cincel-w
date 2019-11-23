<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Cincel</title>
  <link crossorigin="anonymous" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
    integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/font-awesome.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick-theme.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/slick.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/main.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/css/general-services.css" rel="stylesheet">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.7.2/animate.min.css" rel="stylesheet">
  <link href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.png" rel="shortcut icon">
  <link
    href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900|Open+Sans:300,400,600,700,800|Poppins:100,200,300,400,500,600,700,800,900&amp;display=swap"
    rel="stylesheet">
      <?php wp_head(); ?>
</head>

<body>
  <header class="fixed-top navbar-fixed-js">
    <div class="main-prenavbar">
      <div class="container">
        <div class="prenavbar-container">
          <p>
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
          </p>
          <ul class="main-prenavbar__rrss d-flex align-items-center">
            <li>
              <a class="main-prenavbar__button" href="">PRÓXIMOS EVENTOS</a>
            </li>
            <li>
              <a href="" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/facebook@3x.png">
              </a>
            </li>
            <li>
              <a href="" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/linkedin@3x.png">
              </a>
            </li>
            <li>
              <a href="" target="_blank">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/img/youtube@3x.png">
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <nav class="navbar navbar-expand-lg">
      <div class="container">
        <div class="main-brand__top">
          <div class="main-brand">
            <a class="navbar-brand" href="index.html">
              <img alt="Logo Cincel" id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo@3x.png">
            </a>
          </div>
        </div>
        <div class="main-brand__fixed">
          <div class="main-brand">
            <a class="navbar-brand" href="index.html">
              <img alt="Logo Cincel" id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo@3x.png">
            </a>
          </div>
        </div>
        <div class="main-brand brand-responsive">
          <a class="navbar-brand" href="index.html">
            <img alt="Logo Cincel" id="iso" src="<?php echo get_template_directory_uri(); ?>/assets/img/logo@3x.png">
          </a>
          <button class="navbar-toggler p-2 border-0 hamburger hamburger--elastic ml-autos" data-toggle="offcanvas"
            type="button">
            <span class="hamburger-box"></span>
            <span class="hamburger-inner"></span>
          </button>
        </div>
        <div class="navbar-collapse offcanvas-collapse">
          <ul class="navbar-nav mr-autos">
            <li class="dropdown nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link" data-toggle="dropdown" href="#"
                role="button">
                Soluciones
              </a>
            </li>
            <li class="dropdown nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link" data-toggle="dropdown" href="#"
                role="button">
                Nuestro Valor
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data="offcanvas"
                href="https://www.elempleo.com/sitios-empresariales/colombia/consultores-organizacionales" role="button"
                target="_blank">
                Nosotros
              </a>
            </li>
            <li class="dropdown nav-item">
              <a aria-expanded="false" aria-haspopup="true" class="nav-link" data-toggle="dropdown" href="#"
                role="button">
                Blog
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link" data="offcanvas" href="about.html">Zona de Clientes</a>
            </li>
            <li class="nav-item">
              <a class="nav-link main-general__button" data="offcanvas" href="about.html">Contáctanos</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
  </header>
