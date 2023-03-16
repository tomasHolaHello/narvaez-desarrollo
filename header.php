<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="<?php echo @$description; ?>">
    <meta name="keywords" content="<?php echo @$keywords; ?>">
    <meta name="author" content="narvaez.com.ar">
    <meta property="og:url" content="dominio.com" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Narvaez Desarrollos"/>
    <meta property="og:description" content="Líderes en maximización de activos inmobiliarios" />

    <link href="assets/fonts/font-awesome.css" rel="stylesheet" type="text/css">
    <link href="assets/fonts/elegant-fonts.css" rel="stylesheet" type="text/css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="assets/css/owl.carousel.css" type="text/css">
    <link rel="stylesheet" href="assets/css/magnific-popup.css?v1.1" type="text/css">
    <link rel="stylesheet" href="assets/css/style.css?v1.5" type="text/css">
    <title><?php echo @$title; ?></title>
</head>
<body class="has-loading-screen links-hover-effect" data-spy="scroll" data-target=".navigation">
<div class="page-wrapper" id="page-top">

  <nav class="navigation nav-btn-only background-is-dark">
      <div class="container">
          <div class="wrapper">
            <div class="text-center">
              <a title="Narvaez Desarrollos" href="./" class="<?php echo ($selected=='contacto')?'change-lg':''; ?> brand no-hover-effect mt-2"></a>
            </div>
              <div class="right">
                  <ul class="nav navigation-links animate">
                      <li><a title="Narvaez Desarrollos | Inicio" href="./"><span class="small">01.</span> Inicio</a></li>
                      <li><a title="Narvaez Desarrollos | Compañía" href="compania"><span class="small">02.</span> Compañía</a></li>
                      <li><a title="Narvaez Desarrollos | Nuestros desarrollos" href="desarrollos"><span class="small">03.</span> Desarrollos</a></li>
                      <li><a title="Narvaez Desarrollos | Avance de obras" href="avance-de-obras"><span class="small">04.</span> Avance de obras</a></li>
                      <li><a title="Narvaez Desarrollos | Contacto" href="contacto"><span class="small">05.</span> Contacto</a></li>
                  </ul>
                  <div class="nav-btn <?php echo ($selected=='contacto')?'change-nav-btn':''; ?>">
                      <figure></figure>
                      <figure></figure>
                      <figure></figure>
                  </div>
                  <a class="call-cta <?php echo ($selected=='contacto')?'change-call-cta-black':''; ?>" href="#" data-toggle="modal" data-target="#help">
                  </a>
              </div>
          </div>
      </div>
  </nav>
