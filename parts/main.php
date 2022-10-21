<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin="">
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo (get_stylesheet_directory_uri()) ?>/res/css/style.css">
  <title>DOK Hospital Veterinário</title>
</head>

<body>
  <header class="header">
  <div class="header__container">
    <div class="header__icon">
      <button class="header__icon--btn"><svg xmlns="http://www.w3.org/2000/svg" width="16.629" height="13.866" viewBox="0 0 16.629 13.866">
          <g id="Grupo_41" data-name="Grupo 41" transform="translate(1 1)">
            <g id="Grupo_1" data-name="Grupo 1">
              <line id="Linha_1" data-name="Linha 1" x1="14.629" fill="none" stroke="#3f3c3c" stroke-linecap="round" stroke-width="2"></line>
              <line id="Linha_2" data-name="Linha 2" x1="14.629" transform="translate(0 5.795)" fill="none" stroke="#3f3c3c" stroke-linecap="round" stroke-width="2"></line>
              <line id="Linha_3" data-name="Linha 3" x1="14.629" transform="translate(0 11.866)" fill="none" stroke="#3f3c3c" stroke-linecap="round" stroke-width="2"></line>
            </g>
          </g>
        </svg>
      </button>
      <a href="<?php echo (get_stylesheet_directory_uri()) ?>/index.html">
        <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/icon-header.png" alt="Ícone da marca DOK">
      </a>
    </div>
    <div class="header__options">
      <ul class="header__options--ul">
        <li class="header__options--li">
          <a class="header__options--a" href="#agendamento">
            <div class="header__options--img header__options--img-first">
              <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/calendar-check.svg" alt="Telefone para contato">
              <p class="header__options--text">Agendamento</p>
            </div>
          </a>
        </li>
        <li class="header__options--li">
          <a class="header__options--a" href="#agendamento">
            <div class="header__options--img header__options--img-second">
              <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/whatsapp.svg" alt="Telefone para contato">
              <p class="header__options--text">Whatsapp</p>
            </div>
          </a>
        </li>
        <li class="header__options--li">
          <a class="header__options--a" href="#agendamento">
            <div class="header__options--img telefone">
              <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/phone.svg" alt="Telefone para contato">
              <p class="header__options--text ">Telefone</p>
            </div>
          </a>
        </li>
      </ul>
    </div>
  </div>
  <nav class="header__nav">
    <ul class="header__nav--ul">
      <li><a class="header__nav--hover" href="javascript:void(0)">ESPECIALIDADES</a></li>
      <li><a href="<?php echo (get_stylesheet_directory_uri()) ?>/internacoes.html">INTERNAÇÕES</a></li>
      <li><a href="<?php echo (get_stylesheet_directory_uri()) ?>/especialidades.html">CDMV CURSOS</a></li>
      <li><a href="<?php echo (get_stylesheet_directory_uri()) ?>/vetpoints.html">Vetpoints</a></li>
      <li><a href="<?php echo (get_stylesheet_directory_uri()) ?>/clinica-geral.html">CLÍNICA GERAL</a></li>
      <li><a href="<?php echo (get_stylesheet_directory_uri()) ?>/exame.html">EXAMES</a></li>
    </ul>
    <div class="header__nav--submenus">
      <ul data-menu="1" class="header__nav--hover-ul slide-down">
        <div class="header__nav--hover-ul-container">
          <div class="header__nav--hover-container">
            <li>
              <a class="header__nav--links" href="">ACUPUNTURA VETERINÁRIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">ANESTESIA VETERINÁRIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">ANIMAIS SILVESTRES</a>
            </li>
            <li>
              <a class="header__nav--links" href="">CARDIOLOGIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">ENDOSCOPIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">GASTROENTEROLOGIA</a>
            </li>
          </div>
          <div class="header__nav--hover-container">
            <li>
              <a class="header__nav--links" href="">ACUPUNTURA VETERINÁRIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">ANESTESIA VETERINÁRIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">ANIMAIS SILVESTRES</a>
            </li>
            <li>
              <a class="header__nav--links" href="">CARDIOLOGIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">ENDOSCOPIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">GASTROENTEROLOGIA</a>
            </li>
          </div>
          <div class="header__nav--hover-container">
            <li>
              <a class="header__nav--links" href="">ACUPUNTURA VETERINÁRIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">ANESTESIA VETERINÁRIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">ANIMAIS SILVESTRES</a>
            </li>
            <li>
              <a class="header__nav--links" href="">CARDIOLOGIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">ENDOSCOPIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">GASTROENTEROLOGIA</a>
            </li>
          </div>
          <div class="header__nav--hover-container">
            <li>
              <a class="header__nav--links" href="">ACUPUNTURA VETERINÁRIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">ANESTESIA VETERINÁRIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">ANIMAIS SILVESTRES</a>
            </li>
            <li>
              <a class="header__nav--links" href="">CARDIOLOGIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">ENDOSCOPIA</a>
            </li>
            <li>
              <a class="header__nav--links" href="">GASTROENTEROLOGIA</a>
            </li>
          </div>
        </div>
      </ul>
    </div>
  </nav>
  <div class="header__nav-mobile ">
    <div class="header__nav-mobile--container">
      <ul class="header__nav-mobile--ul">
        <li class="header__nav-mobile--li">
          <a class="header__nav-mobile--cascata" href="javascript:void(0)">ESPECIALIDADES </a>
          <div class="header__nav-mobile--cascata-children">
            <a class="header__nav-mobile--links" href="javascript:void(0)">CARDIOLOGIA</a>
            <a class="header__nav-mobile--links" href="javascript:void(0)">CARDIOLOGIA</a>
            <a class="header__nav-mobile--links" href="javascript:void(0)">CARDIOLOGIA</a>
            <a class="header__nav-mobile--links" href="javascript:void(0)">CARDIOLOGIA</a>
            <a class="header__nav-mobile--links" href="javascript:void(0)">CARDIOLOGIA</a>
            <a class="header__nav-mobile--links" href="javascript:void(0)">CARDIOLOGIA</a>
          </div>
        </li>
        <li class="header__nav-mobile--li"><a href="<?php echo (get_stylesheet_directory_uri()) ?>/internacoes.html">INTERNAÇÕES</a></li>
        <li class="header__nav-mobile--li"><a href="<?php echo (get_stylesheet_directory_uri()) ?>/especialidades.html">CDMV CURSOS</a></li>
        <li class="header__nav-mobile--li"><a href="<?php echo (get_stylesheet_directory_uri()) ?>/sobre-dok.html">SOBRE O HOSPITAL</a></li>
        <li class="header__nav-mobile--li"><a href="<?php echo (get_stylesheet_directory_uri()) ?>/clinica-geral.html">CLÍNICA GERAL</a></li>
        <li class="header__nav-mobile--li"><a href="<?php echo (get_stylesheet_directory_uri()) ?>/exame.html">EXAMES</a></li>
      </ul>
      <div class="header__nav-mobile--options">
        <ul class="header__nav-mobile--options-ul">
          <li class="header__options--li">
            <a class="header__options--a" href="#agendamento">
              <div class="header__options--img header__options--img-first header__nav-mobile--buttons">
                <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/calendar-check.svg" alt="Telefone para contato">
                <p class="header__options--text header__nav-mobile--text">Agendamento</p>
              </div>
            </a>
          </li>
          <li class="header__options--li">
            <a class="header__options--a" href="#agendamento">
              <div class="header__options--img header__options--img-second header__nav-mobile--buttons">
                <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/whatsapp.svg" alt="Telefone para contato">
                <p class="header__options--text header__nav-mobile--text ">Whatsapp</p>
              </div>
            </a>
          </li>
          <li class="header__options--li">
            <a class="header__options--a" href="#agendamento">
              <div class="header__options--img header__nav-mobile--buttons">
                <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/phone.svg" alt="Telefone para contato">
                <p class="header__options--text header__nav-mobile--text">Telefone</p>
              </div>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <div class="footer__socials">
      <a href="#telefone">
        <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/telefone-preto.svg" alt="">
      </a>
      <a href="#whatsapp">
        <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/whatsapp-preto.svg" alt="">
      </a>
      <a href="#instagram">
        <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/instagram-preto.svg" alt="">
      </a>
      <a href="#facebook">
        <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/facebook-preto.svg" alt="">
      </a>
    </div>
  </div>
</header>
  <div class="swiper swiper-capao">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="slide__container">
          <p class="slide__desc">
            Hospital Veterinário 24h <br> <span>com tudo que seu Pet precisa.</span> 
          </p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide__container">
          <p class="slide__desc">
            Hospital Veterinário 24h <br> <span>com tudo que seu Pet precisa.</span> 
          </p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide__container">
          <p class="slide__desc">
            Hospital Veterinário 24h <br> <span>com tudo que seu Pet precisa.</span> 
          </p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="slide__container">
          <p class="slide__desc">
            Hospital Veterinário 24h <br> <span>com tudo que seu Pet precisa.</span> 
          </p>
        </div>
      </div>
      
    </div>
    <div class="swiper-pagination"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
</div>

  <div class="dog-claw">
    <main class="main">

      <!-- Seção de Exames -->
      <section class="exames">
  <div class="exames__container">
    <div class="exames__content">
      <h3 class="exames__title">EXAMES</h3>
      <p class="exames__desc">Lorem ipsum dolor sit amet consectetur adipisicing elit. Quaerat tenetur ex reprehenderit magnam explicabo ut, ratione distinctio saepe ipsa quibusdam!</p>

    </div>
    <div class="exames__resultados">
      <div class="exames__resultados--resultado"><a href="#resultados">Resultados de exames</a></div>
      <div class="exames__resultados--preparacao"><a href="?post_type=especialidades&p=74">Preparação de exames</a></div>
    </div>
  </div>
</section>


      <!-- Seção de Especialidades -->
      <section class="especialidades">
  <h2 class="especialidades__title">ESPECIALIDADES</h2>
  <div class="especialidades__container">
    <div class="especialidades__card">
      <svg xmlns="http://www.w3.org/2000/svg" width="58" height="49.716" viewBox="0 0 58 49.716">
<path id="__TEMP__SVG__" d="M41.428,29H51.3a3.094,3.094,0,0,1-.324.34q-.163.145-.292.243l-.1.129L30.423,49.132a2.031,2.031,0,0,1-2.848,0L7.379,29.648A3.071,3.071,0,0,1,6.7,29H18.642a2.043,2.043,0,0,0,1.279-.437,1.938,1.938,0,0,0,.728-1.117l2.265-9.095,6.15,21.589a2.067,2.067,0,0,0,.744,1.068,2.019,2.019,0,0,0,1.261.421,1.973,1.973,0,0,0,1.229-.421,2.067,2.067,0,0,0,.744-1.068l4.725-15.7,1.813,3.625A1.94,1.94,0,0,0,41.427,29ZM58,15.148a17.6,17.6,0,0,1-3.333,9.71H42.723L39.131,17.7a2.047,2.047,0,0,0-2.006-1.133,1.919,1.919,0,0,0-1.812,1.489L31.136,31.977l-6.345-22.2a2.036,2.036,0,0,0-.76-1.068,2.087,2.087,0,0,0-1.278-.42A2.023,2.023,0,0,0,20.78,9.839L17.025,24.858H3.333A17.6,17.6,0,0,1,0,15.148Q0,8.027,4.11,4.013T15.472,0a12.89,12.89,0,0,1,4.094.7A16.625,16.625,0,0,1,23.45,2.573q1.8,1.181,3.09,2.217A30.5,30.5,0,0,1,29,6.991a29.782,29.782,0,0,1,2.46-2.2q1.3-1.036,3.092-2.217A16.584,16.584,0,0,1,38.436.7,12.9,12.9,0,0,1,42.528,0q7.25,0,11.36,4.013T58,15.148Z" fill="#47cc8a"></path>
</svg>

      <p class="especialidades__card--desc">CARDIOLOGIA</p>
    </div>
    <div class="especialidades__card">
      <svg xmlns="http://www.w3.org/2000/svg" width="58" height="49.716" viewBox="0 0 58 49.716">
<path id="__TEMP__SVG__" d="M41.428,29H51.3a3.094,3.094,0,0,1-.324.34q-.163.145-.292.243l-.1.129L30.423,49.132a2.031,2.031,0,0,1-2.848,0L7.379,29.648A3.071,3.071,0,0,1,6.7,29H18.642a2.043,2.043,0,0,0,1.279-.437,1.938,1.938,0,0,0,.728-1.117l2.265-9.095,6.15,21.589a2.067,2.067,0,0,0,.744,1.068,2.019,2.019,0,0,0,1.261.421,1.973,1.973,0,0,0,1.229-.421,2.067,2.067,0,0,0,.744-1.068l4.725-15.7,1.813,3.625A1.94,1.94,0,0,0,41.427,29ZM58,15.148a17.6,17.6,0,0,1-3.333,9.71H42.723L39.131,17.7a2.047,2.047,0,0,0-2.006-1.133,1.919,1.919,0,0,0-1.812,1.489L31.136,31.977l-6.345-22.2a2.036,2.036,0,0,0-.76-1.068,2.087,2.087,0,0,0-1.278-.42A2.023,2.023,0,0,0,20.78,9.839L17.025,24.858H3.333A17.6,17.6,0,0,1,0,15.148Q0,8.027,4.11,4.013T15.472,0a12.89,12.89,0,0,1,4.094.7A16.625,16.625,0,0,1,23.45,2.573q1.8,1.181,3.09,2.217A30.5,30.5,0,0,1,29,6.991a29.782,29.782,0,0,1,2.46-2.2q1.3-1.036,3.092-2.217A16.584,16.584,0,0,1,38.436.7,12.9,12.9,0,0,1,42.528,0q7.25,0,11.36,4.013T58,15.148Z" fill="#47cc8a"></path>
</svg>

      <p class="especialidades__card--desc">CARDIOLOGIA</p>
    </div>
    <div class="especialidades__card">
      <svg xmlns="http://www.w3.org/2000/svg" width="58" height="49.716" viewBox="0 0 58 49.716">
<path id="__TEMP__SVG__" d="M41.428,29H51.3a3.094,3.094,0,0,1-.324.34q-.163.145-.292.243l-.1.129L30.423,49.132a2.031,2.031,0,0,1-2.848,0L7.379,29.648A3.071,3.071,0,0,1,6.7,29H18.642a2.043,2.043,0,0,0,1.279-.437,1.938,1.938,0,0,0,.728-1.117l2.265-9.095,6.15,21.589a2.067,2.067,0,0,0,.744,1.068,2.019,2.019,0,0,0,1.261.421,1.973,1.973,0,0,0,1.229-.421,2.067,2.067,0,0,0,.744-1.068l4.725-15.7,1.813,3.625A1.94,1.94,0,0,0,41.427,29ZM58,15.148a17.6,17.6,0,0,1-3.333,9.71H42.723L39.131,17.7a2.047,2.047,0,0,0-2.006-1.133,1.919,1.919,0,0,0-1.812,1.489L31.136,31.977l-6.345-22.2a2.036,2.036,0,0,0-.76-1.068,2.087,2.087,0,0,0-1.278-.42A2.023,2.023,0,0,0,20.78,9.839L17.025,24.858H3.333A17.6,17.6,0,0,1,0,15.148Q0,8.027,4.11,4.013T15.472,0a12.89,12.89,0,0,1,4.094.7A16.625,16.625,0,0,1,23.45,2.573q1.8,1.181,3.09,2.217A30.5,30.5,0,0,1,29,6.991a29.782,29.782,0,0,1,2.46-2.2q1.3-1.036,3.092-2.217A16.584,16.584,0,0,1,38.436.7,12.9,12.9,0,0,1,42.528,0q7.25,0,11.36,4.013T58,15.148Z" fill="#47cc8a"></path>
</svg>

      <p class="especialidades__card--desc">CARDIOLOGIA</p>
    </div>
    <div class="especialidades__card">
      <svg xmlns="http://www.w3.org/2000/svg" width="58" height="49.716" viewBox="0 0 58 49.716">
<path id="__TEMP__SVG__" d="M41.428,29H51.3a3.094,3.094,0,0,1-.324.34q-.163.145-.292.243l-.1.129L30.423,49.132a2.031,2.031,0,0,1-2.848,0L7.379,29.648A3.071,3.071,0,0,1,6.7,29H18.642a2.043,2.043,0,0,0,1.279-.437,1.938,1.938,0,0,0,.728-1.117l2.265-9.095,6.15,21.589a2.067,2.067,0,0,0,.744,1.068,2.019,2.019,0,0,0,1.261.421,1.973,1.973,0,0,0,1.229-.421,2.067,2.067,0,0,0,.744-1.068l4.725-15.7,1.813,3.625A1.94,1.94,0,0,0,41.427,29ZM58,15.148a17.6,17.6,0,0,1-3.333,9.71H42.723L39.131,17.7a2.047,2.047,0,0,0-2.006-1.133,1.919,1.919,0,0,0-1.812,1.489L31.136,31.977l-6.345-22.2a2.036,2.036,0,0,0-.76-1.068,2.087,2.087,0,0,0-1.278-.42A2.023,2.023,0,0,0,20.78,9.839L17.025,24.858H3.333A17.6,17.6,0,0,1,0,15.148Q0,8.027,4.11,4.013T15.472,0a12.89,12.89,0,0,1,4.094.7A16.625,16.625,0,0,1,23.45,2.573q1.8,1.181,3.09,2.217A30.5,30.5,0,0,1,29,6.991a29.782,29.782,0,0,1,2.46-2.2q1.3-1.036,3.092-2.217A16.584,16.584,0,0,1,38.436.7,12.9,12.9,0,0,1,42.528,0q7.25,0,11.36,4.013T58,15.148Z" fill="#47cc8a"></path>
</svg>

      <p class="especialidades__card--desc">CARDIOLOGIA</p>
    </div>
    <div class="especialidades__card">
      <svg xmlns="http://www.w3.org/2000/svg" width="58" height="49.716" viewBox="0 0 58 49.716">
<path id="__TEMP__SVG__" d="M41.428,29H51.3a3.094,3.094,0,0,1-.324.34q-.163.145-.292.243l-.1.129L30.423,49.132a2.031,2.031,0,0,1-2.848,0L7.379,29.648A3.071,3.071,0,0,1,6.7,29H18.642a2.043,2.043,0,0,0,1.279-.437,1.938,1.938,0,0,0,.728-1.117l2.265-9.095,6.15,21.589a2.067,2.067,0,0,0,.744,1.068,2.019,2.019,0,0,0,1.261.421,1.973,1.973,0,0,0,1.229-.421,2.067,2.067,0,0,0,.744-1.068l4.725-15.7,1.813,3.625A1.94,1.94,0,0,0,41.427,29ZM58,15.148a17.6,17.6,0,0,1-3.333,9.71H42.723L39.131,17.7a2.047,2.047,0,0,0-2.006-1.133,1.919,1.919,0,0,0-1.812,1.489L31.136,31.977l-6.345-22.2a2.036,2.036,0,0,0-.76-1.068,2.087,2.087,0,0,0-1.278-.42A2.023,2.023,0,0,0,20.78,9.839L17.025,24.858H3.333A17.6,17.6,0,0,1,0,15.148Q0,8.027,4.11,4.013T15.472,0a12.89,12.89,0,0,1,4.094.7A16.625,16.625,0,0,1,23.45,2.573q1.8,1.181,3.09,2.217A30.5,30.5,0,0,1,29,6.991a29.782,29.782,0,0,1,2.46-2.2q1.3-1.036,3.092-2.217A16.584,16.584,0,0,1,38.436.7,12.9,12.9,0,0,1,42.528,0q7.25,0,11.36,4.013T58,15.148Z" fill="#47cc8a"></path>
</svg>

      <p class="especialidades__card--desc">CARDIOLOGIA</p>
    </div>
    <div class="especialidades__card">
      <svg xmlns="http://www.w3.org/2000/svg" width="58" height="49.716" viewBox="0 0 58 49.716">
<path id="__TEMP__SVG__" d="M41.428,29H51.3a3.094,3.094,0,0,1-.324.34q-.163.145-.292.243l-.1.129L30.423,49.132a2.031,2.031,0,0,1-2.848,0L7.379,29.648A3.071,3.071,0,0,1,6.7,29H18.642a2.043,2.043,0,0,0,1.279-.437,1.938,1.938,0,0,0,.728-1.117l2.265-9.095,6.15,21.589a2.067,2.067,0,0,0,.744,1.068,2.019,2.019,0,0,0,1.261.421,1.973,1.973,0,0,0,1.229-.421,2.067,2.067,0,0,0,.744-1.068l4.725-15.7,1.813,3.625A1.94,1.94,0,0,0,41.427,29ZM58,15.148a17.6,17.6,0,0,1-3.333,9.71H42.723L39.131,17.7a2.047,2.047,0,0,0-2.006-1.133,1.919,1.919,0,0,0-1.812,1.489L31.136,31.977l-6.345-22.2a2.036,2.036,0,0,0-.76-1.068,2.087,2.087,0,0,0-1.278-.42A2.023,2.023,0,0,0,20.78,9.839L17.025,24.858H3.333A17.6,17.6,0,0,1,0,15.148Q0,8.027,4.11,4.013T15.472,0a12.89,12.89,0,0,1,4.094.7A16.625,16.625,0,0,1,23.45,2.573q1.8,1.181,3.09,2.217A30.5,30.5,0,0,1,29,6.991a29.782,29.782,0,0,1,2.46-2.2q1.3-1.036,3.092-2.217A16.584,16.584,0,0,1,38.436.7,12.9,12.9,0,0,1,42.528,0q7.25,0,11.36,4.013T58,15.148Z" fill="#47cc8a"></path>
</svg>

      <p class="especialidades__card--desc">CARDIOLOGIA</p>
    </div>
    <div class="especialidades__card">
      <svg xmlns="http://www.w3.org/2000/svg" width="58" height="49.716" viewBox="0 0 58 49.716">
<path id="__TEMP__SVG__" d="M41.428,29H51.3a3.094,3.094,0,0,1-.324.34q-.163.145-.292.243l-.1.129L30.423,49.132a2.031,2.031,0,0,1-2.848,0L7.379,29.648A3.071,3.071,0,0,1,6.7,29H18.642a2.043,2.043,0,0,0,1.279-.437,1.938,1.938,0,0,0,.728-1.117l2.265-9.095,6.15,21.589a2.067,2.067,0,0,0,.744,1.068,2.019,2.019,0,0,0,1.261.421,1.973,1.973,0,0,0,1.229-.421,2.067,2.067,0,0,0,.744-1.068l4.725-15.7,1.813,3.625A1.94,1.94,0,0,0,41.427,29ZM58,15.148a17.6,17.6,0,0,1-3.333,9.71H42.723L39.131,17.7a2.047,2.047,0,0,0-2.006-1.133,1.919,1.919,0,0,0-1.812,1.489L31.136,31.977l-6.345-22.2a2.036,2.036,0,0,0-.76-1.068,2.087,2.087,0,0,0-1.278-.42A2.023,2.023,0,0,0,20.78,9.839L17.025,24.858H3.333A17.6,17.6,0,0,1,0,15.148Q0,8.027,4.11,4.013T15.472,0a12.89,12.89,0,0,1,4.094.7A16.625,16.625,0,0,1,23.45,2.573q1.8,1.181,3.09,2.217A30.5,30.5,0,0,1,29,6.991a29.782,29.782,0,0,1,2.46-2.2q1.3-1.036,3.092-2.217A16.584,16.584,0,0,1,38.436.7,12.9,12.9,0,0,1,42.528,0q7.25,0,11.36,4.013T58,15.148Z" fill="#47cc8a"></path>
</svg>

      <p class="especialidades__card--desc">CARDIOLOGIA</p>
    </div>
    <div class="especialidades__card">
      <svg xmlns="http://www.w3.org/2000/svg" width="58" height="49.716" viewBox="0 0 58 49.716">
<path id="__TEMP__SVG__" d="M41.428,29H51.3a3.094,3.094,0,0,1-.324.34q-.163.145-.292.243l-.1.129L30.423,49.132a2.031,2.031,0,0,1-2.848,0L7.379,29.648A3.071,3.071,0,0,1,6.7,29H18.642a2.043,2.043,0,0,0,1.279-.437,1.938,1.938,0,0,0,.728-1.117l2.265-9.095,6.15,21.589a2.067,2.067,0,0,0,.744,1.068,2.019,2.019,0,0,0,1.261.421,1.973,1.973,0,0,0,1.229-.421,2.067,2.067,0,0,0,.744-1.068l4.725-15.7,1.813,3.625A1.94,1.94,0,0,0,41.427,29ZM58,15.148a17.6,17.6,0,0,1-3.333,9.71H42.723L39.131,17.7a2.047,2.047,0,0,0-2.006-1.133,1.919,1.919,0,0,0-1.812,1.489L31.136,31.977l-6.345-22.2a2.036,2.036,0,0,0-.76-1.068,2.087,2.087,0,0,0-1.278-.42A2.023,2.023,0,0,0,20.78,9.839L17.025,24.858H3.333A17.6,17.6,0,0,1,0,15.148Q0,8.027,4.11,4.013T15.472,0a12.89,12.89,0,0,1,4.094.7A16.625,16.625,0,0,1,23.45,2.573q1.8,1.181,3.09,2.217A30.5,30.5,0,0,1,29,6.991a29.782,29.782,0,0,1,2.46-2.2q1.3-1.036,3.092-2.217A16.584,16.584,0,0,1,38.436.7,12.9,12.9,0,0,1,42.528,0q7.25,0,11.36,4.013T58,15.148Z" fill="#47cc8a"></path>
</svg>

      <p class="especialidades__card--desc">CARDIOLOGIA</p>
    </div>
  </div>
  <div class="especialidades__btn-container"><a class="button button__verde" href="#">Ver todas as especialidades</a></div>
</section>


      <!-- Seção sobre Quem Somos -->
      <section class="quem-somos">
  <div class="swiper swiper-quemsomos">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="quem-somos__container">
          <h3 class="quem-somos__title">QUEM SOMOS</h3>
          <p class="quem-somos__desc">Atendendo exclusivamente os pequenos animais, o DOK Hospital Veterinário se destaca pela visão empreendedora, oferecendo a mais completa estrutura de atendimento clínico, cirúrgico e diagnóstico, liderada por uma equipe de formação técnica de excelência e movida pela paixão aos animais de estimação.</p>
          <a href="#" class="quem-somos__btn">Leia Mais</a>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="quem-somos__container">
          <h3 class="quem-somos__title">QUEM SOMOS</h3>
          <p class="quem-somos__desc">Atendendo exclusivamente os pequenos animais, o DOK Hospital Veterinário se destaca pela visão empreendedora, oferecendo a mais completa estrutura de atendimento clínico, cirúrgico e diagnóstico, liderada por uma equipe de formação técnica de excelência e movida pela paixão aos animais de estimação.</p>
          <a href="#" class="quem-somos__btn">Leia Mais</a>
        </div>
      </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</div></section> 


      <!-- Seção dos Nossos Serviços -->
      <section class="nossos-servicos">
  <h3 class="nossos-servicos__title">NOSSOS SERVIÇOS</h3>
  <div class="nossos-servicos__container">
    <div class="nossos-servicos__container-card">
      <div class="nossos-servicos__card">
        <img src="https://picsum.photos/357/265" alt="">
        <div class="nossos-servicos__content">
          <h4 class="nossos-servicos__content--title">CUIDADOS COM O PET</h4>
          <a href="javascript:void(0)" class="button button--ler"> Leia mais</a>
          <p class="nossos-servicos__desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod, pariatur voluptatem! Laboriosam alias odit quaerat ut quas quasi at ipsa!</p>
        </div>
      </div>
      <div class="nossos-servicos__card">
        <img src="https://picsum.photos/357/265" alt="">
        <div class="nossos-servicos__content">
          <h4 class="nossos-servicos__content--title">CUIDADOS COM O PET</h4>
          <a href="javascript:void(0)" class="button button--ler"> Leia mais</a>
          <p class="nossos-servicos__desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod, pariatur voluptatem! Laboriosam alias odit quaerat ut quas quasi at ipsa!</p>
        </div>
      </div>
    </div>
    <div class="nossos-servicos__container-card">
      <div class="nossos-servicos__card">
        <img src="https://picsum.photos/357/265" alt="">
        <div class="nossos-servicos__content">
          <h4 class="nossos-servicos__content--title">CUIDADOS COM O PET</h4>
          <a href="javascript:void(0)" class="button button--ler"> Leia mais</a>
          <p class="nossos-servicos__desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod, pariatur voluptatem! Laboriosam alias odit quaerat ut quas quasi at ipsa!</p>
        </div>
      </div>
      <div class="nossos-servicos__card">
        <img src="https://picsum.photos/357/265" alt="">
        <div class="nossos-servicos__content">
          <h4 class="nossos-servicos__content--title">CUIDADOS COM O PET</h4>
          <a href="javascript:void(0)" class="button button--ler"> Leia mais</a>
          <p class="nossos-servicos__desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod, pariatur voluptatem! Laboriosam alias odit quaerat ut quas quasi at ipsa!</p>
        </div>
      </div>
    </div>
    <div class="nossos-servicos__container-card">
      <div class="nossos-servicos__card">
        <img src="https://picsum.photos/357/265" alt="">
        <div class="nossos-servicos__content">
          <h4 class="nossos-servicos__content--title">CUIDADOS COM O PET</h4>
          <a href="javascript:void(0)" class="button button--ler"> Leia mais</a>
          <p class="nossos-servicos__desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod, pariatur voluptatem! Laboriosam alias odit quaerat ut quas quasi at ipsa!</p>
        </div>
      </div>
      <div class="nossos-servicos__card">
        <img src="https://picsum.photos/357/265" alt="">
        <div class="nossos-servicos__content">
          <h4 class="nossos-servicos__content--title">CUIDADOS COM O PET</h4>
          <a href="javascript:void(0)" class="button button--ler"> Leia mais</a>
          <p class="nossos-servicos__desc">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Quod, pariatur voluptatem! Laboriosam alias odit quaerat ut quas quasi at ipsa!</p>
        </div>
      </div>
    </div>
    


  </div>
  <div class="nossos-servicos__button">
    <a href="" class="button button--servicos button__verde">Agende seu procedimento</a>
  </div>
</section>


      <!-- Seção dos Números do DOK -->
      <section class="numeros">
  <img class="numeros__cachorro-1" src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/cachorro-numeros.svg" alt="">
  <img class="numeros__cachorro-2" src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/cachorro-numeros-1.svg" alt="">

  <div class="numeros__container">
    <div class="numeros__content">
      <p class="numeros__texto numeros__divider">
        +2000 <br> <span>PACIENTES  ATENDIDOS</span>
      </p>
      <p class="numeros__texto numeros__divider">
        100 <br> <span>PROFISSIONAIS ATIVOS</span>
      </p>
    </div>
    <div class="numeros__content">
      <p class="numeros__texto ">
        +2000 <br> <span>PACIENTES  ATENDIDOS</span>
      </p>
      <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/icon-dok-preto.svg" alt="">
    </div>
  </div>
</section>


      <!-- Seção de Comentários sobre o DOK -->
      <section class="comentarios">
  <h2 class="comentarios__title">COMENTÁRIOS DE QUEM USA</h2>
  <div class="swiper swiper-comentarios">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div class="comentarios__container">
          <div class="comentarios__content">
            <img src="https://picsum.photos/357/265" alt="foto de perfil do comentário">
            <div class="comentarios__content--info">
              <p class="comentarios__content--nome">Dr. Matheus Bahia</p>
              <p class="comentarios__content--profissao">Médico Veterinário</p>
            </div>
          </div>
          <p class="comentarios__comentario">“O CDMV contribuiu muito para a minha formação de Médico Veterinário. Fui aluno do curso de Técnicas Cirúrgicas em 2014. Após 1 ano tendo aulas, realizando estágios e estudando com materiais específicos, fui aprovado no programa de Residência em Cirurgia de Animais de Companhia da UFRRJ. O CDMV conta com excelentes professores e conteúdo atualizado. Recomendo a todos os alunos e profissionais que buscam uma formação diferenciada.”</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="comentarios__container">
          <div class="comentarios__content">
            <img src="https://picsum.photos/357/265" alt="foto de perfil do comentário">
            <div class="comentarios__content--info">
              <p class="comentarios__content--nome">Dr. Matheus Bahia</p>
              <p class="comentarios__content--profissao">Médico Veterinário</p>
            </div>
          </div>
          <p class="comentarios__comentario">“O CDMV contribuiu muito para a minha formação de Médico Veterinário. Fui aluno do curso de Técnicas Cirúrgicas em 2014. Após 1 ano tendo aulas, realizando estágios e estudando com materiais específicos, fui aprovado no programa de Residência em Cirurgia de Animais de Companhia da UFRRJ. O CDMV conta com excelentes professores e conteúdo atualizado. Recomendo a todos os alunos e profissionais que buscam uma formação diferenciada.”</p>
        </div>
      </div>
      <div class="swiper-slide">
        <div class="comentarios__container">
          <div class="comentarios__content">
            <img src="https://picsum.photos/357/265" alt="foto de perfil do comentário">
            <div class="comentarios__content--info">
              <p class="comentarios__content--nome">Dr. Matheus Bahia</p>
              <p class="comentarios__content--profissao">Médico Veterinário</p>
            </div>
          </div>
          <p class="comentarios__comentario">“O CDMV contribuiu muito para a minha formação de Médico Veterinário. Fui aluno do curso de Técnicas Cirúrgicas em 2014. Após 1 ano tendo aulas, realizando estágios e estudando com materiais específicos, fui aprovado no programa de Residência em Cirurgia de Animais de Companhia da UFRRJ. O CDMV conta com excelentes professores e conteúdo atualizado. Recomendo a todos os alunos e profissionais que buscam uma formação diferenciada.”</p>
        </div>
      </div>
    </div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-button-next"></div>
  </div>
</section>

    </main>
  </div>
  <footer class="footer">
  <div class="footer__container">
    <div class="footer__container-first">
      <div class="footer__content">
        <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/logo-mobile.svg" alt="logo DOK branco">
      </div>
      <p class="footer__title"><a href="#">CDMV CURSOS</a></p>
      <div class="footer__content">
        <p class="footer__title">CLÍNICA GERAL</p>
        <a href="#">Atendimento 24h</a>
      </div>
      <div class="footer__content">
        <p class="footer__title">EXAMES</p>
        <a href="#">Consulta de resultados</a>
      </div>
      <p class="footer__title"><a href="#">ESPECIALIDADES</a></p>
      <p class="footer__title"><a href="#">INTERNAÇÕES</a></p>
    </div>
    <div class="footer__container-mid">
      <div class="footer__content">
        <p class="footer__title footer__title-mid">ENDEREÇO</p>
        <span>Avenida das Américas, 12600 BL3 Loja 101 - Barra da Tijuca, Rio de Janeiro - RJ</span>
      </div>
      <div class="footer__content">
        <p class="footer__title footer__title-mid">TELEFONE</p>
        <a href="#">(21) 3088-7000</a>
      </div>
      <div class="footer__content">
        <p class="footer__title footer__title-mid">SOBRE O HOSPITAL</p>
        <div class="footer__content-mid">
          <a href="#">Quem somos</a>
          <a href="#">Infraestrutura</a>
          <a href="#">Localização</a>
          <a href="#">Formulário</a>
          <a href="#">Formulário</a>
          <a href="#" class="chat">Chat</a>
          <a href="#">Callback</a>
        </div>
      </div>
      <div class="footer__socials">
        <a href="#telefone">
          <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/telefone-preto.svg" alt="">
        </a>
        <a href="#whatsapp">
          <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/whatsapp-preto.svg" alt="">
        </a>
        <a href="#instagram">
          <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/instagram-preto.svg" alt="">
        </a>
        <a href="#facebook">
          <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/facebook-preto.svg" alt="">
        </a>
      </div>
    </div>
    <div class="footer__mapa"><a href="#mapa">
        <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/mapa.png" alt="mapa para chegar a clinica">
      </a>
    </div>
  </div>
  <div class="footer__mobile">
    <div class="footer__mobile--img">
      <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/logo-mobile.svg" alt="logo DOK branco">
    </div>
    <div class="footer__content">
      <p class="footer__title footer__title-mid">TELEFONE</p>
      <a href="#">(21) 3088-7000</a>
    </div>
    <div class="footer__content">
      <p class="footer__title footer__title-mid">ENDEREÇO</p>
      <span>Avenida das Américas, 12600 BL3 Loja 101 - Barra da Tijuca, Rio de Janeiro - RJ</span>
    </div>
    <div class="footer__mobile--mapa"><a href="#mapa">
        <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/mapa.png" alt="mapa para chegar a clinica">
      </a>
    </div>
    <div class="footer__socials">
      <a href="#telefone">
        <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/telefone-preto.svg" alt="">
      </a>
      <a href="#whatsapp">
        <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/whatsapp-preto.svg" alt="">
      </a>
      <a href="#instagram">
        <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/instagram-preto.svg" alt="">
      </a>
      <a href="#facebook">
        <img src="<?php echo (get_stylesheet_directory_uri()) ?>/res/img/facebook-preto.svg" alt="">
      </a>
    </div>
    <div class="footer__mobile--container-end">
      <p class="footer__title footer__mobile--title"><a href="#">CDMV CURSOS</a></p>
      <div class="footer__content">
        <p class="footer__title">CLÍNICA GERAL</p>
        <a href="#">Atendimento 24h</a>
      </div>
      <div class="footer__content">
        <p class="footer__title">EXAMES</p>
        <a href="#">Consulta de resultados</a>
      </div>
      <p class="footer__title footer__mobile--title"><a href="#">ESPECIALIDADES</a></p>
      <p class="footer__title footer__mobile--title"><a href="#">INTERNAÇÕES</a></p>
      <div class="footer__content">
        <p class="footer__title footer__title-mid">SOBRE O HOSPITAL</p>
        <div class="footer__content-mid">
          <a href="#">Quem somos</a>
          <a href="#">Infraestrutura</a>
          <a href="#">Localização</a>
          <a href="#">Formulário</a>
          <a href="#">Formulário</a>
          <a href="#">Chat</a>
          <a href="#">Callback</a>
        </div>
      </div>
    </div>


  </div>


</footer>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script>$(".button--ler").click(function(e) {
    $(this).parent().find(".nossos-servicos__desc").slideToggle();
});

</script>

<script>$(".header__nav--hover, .header__nav--hover-ul").hover(function() {
    $(".header__nav--hover-ul").addClass("aberto");
}, function() {
    $(".header__nav--hover-ul").removeClass("aberto");
});

</script>

<script>$(".clinica-geral-main__link").click(function(e) {
    $(this).parent().find(".clinica-geral-main__unidade").slideToggle();
    console.log("click");
});

</script>
<script>$(".header__icon--btn").click(function(e) {
    $(".header__nav-mobile").toggleClass("nav-mobile-ativo");
});

</script>
<script>$(".card-default").click(function(e) {
    $(this).toggleClass("card-inativo");
    $(this).toggleClass("card-ativo");
    console.log(this);
});

</script>
<script>$(".vetpoints__faq--container__button").click(function(e) {
    $(this).toggleClass("btn-ativo");
    $(this).parent().find(".vetpoints__faq--container__question").slideToggle();
});

</script>
<script>$(".header__nav-mobile--cascata").click(function(e) {
    $(this).parent().find(".header__nav-mobile--cascata-children").slideToggle();
});

</script>

<script>$(".internacoes__flex-btn").click(function(e) {
    let id = $(this).attr("data-id");
    $(`.internacoes__card:not([data-id='${id}'])`).fadeOut(200, function() {
        $(`.internacoes__card[data-id='${id}']`).fadeIn(200);
    });
    $(".internacoes__flex-btn").removeClass("internacoes-ativa");
    $(this).addClass("internacoes-ativa");
});

</script>

<script>$(".vetpoints__celular--checkbox").click(function(e) {
    let id = $(this).attr("data-celular");
    $(`.vetpoints__celular--checkbox:not([data-celular='${id}'])`).removeClass("checkbox-ativo");
    $(`.vetpoints__celular--checkbox[data-celular='${id}']`).addClass("checkbox-ativo");
    $(`.vetpoints__celular--celular-int__checkbox:not([data-celular='${id}'])`).removeClass("square-ativo");
    $(`.vetpoints__celular--celular-int__checkbox[data-celular='${id}']`).addClass("square-ativo");
});

</script>



<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<script>// modules are defined as an array
// [ module function, map of requires ]
//
// map of requires is short require name -> numeric require
//
// anything defined in a previous bundle is accessed via the
// orig method which is the require for previous bundles

(function (modules, entry, mainEntry, parcelRequireName, globalName) {
  /* eslint-disable no-undef */
  var globalObject =
    typeof globalThis !== 'undefined'
      ? globalThis
      : typeof self !== 'undefined'
      ? self
      : typeof window !== 'undefined'
      ? window
      : typeof global !== 'undefined'
      ? global
      : {};
  /* eslint-enable no-undef */

  // Save the require from previous bundle to this closure if any
  var previousRequire =
    typeof globalObject[parcelRequireName] === 'function' &&
    globalObject[parcelRequireName];

  var cache = previousRequire.cache || {};
  // Do not use `require` to prevent Webpack from trying to bundle this call
  var nodeRequire =
    typeof module !== 'undefined' &&
    typeof module.require === 'function' &&
    module.require.bind(module);

  function newRequire(name, jumped) {
    if (!cache[name]) {
      if (!modules[name]) {
        // if we cannot find the module within our internal map or
        // cache jump to the current global require ie. the last bundle
        // that was added to the page.
        var currentRequire =
          typeof globalObject[parcelRequireName] === 'function' &&
          globalObject[parcelRequireName];
        if (!jumped && currentRequire) {
          return currentRequire(name, true);
        }

        // If there are other bundles on this page the require from the
        // previous one is saved to 'previousRequire'. Repeat this as
        // many times as there are bundles until the module is found or
        // we exhaust the require chain.
        if (previousRequire) {
          return previousRequire(name, true);
        }

        // Try the node require function if it exists.
        if (nodeRequire && typeof name === 'string') {
          return nodeRequire(name);
        }

        var err = new Error("Cannot find module '" + name + "'");
        err.code = 'MODULE_NOT_FOUND';
        throw err;
      }

      localRequire.resolve = resolve;
      localRequire.cache = {};

      var module = (cache[name] = new newRequire.Module(name));

      modules[name][0].call(
        module.exports,
        localRequire,
        module,
        module.exports,
        this
      );
    }

    return cache[name].exports;

    function localRequire(x) {
      var res = localRequire.resolve(x);
      return res === false ? {} : newRequire(res);
    }

    function resolve(x) {
      var id = modules[name][1][x];
      return id != null ? id : x;
    }
  }

  function Module(moduleName) {
    this.id = moduleName;
    this.bundle = newRequire;
    this.exports = {};
  }

  newRequire.isParcelRequire = true;
  newRequire.Module = Module;
  newRequire.modules = modules;
  newRequire.cache = cache;
  newRequire.parent = previousRequire;
  newRequire.register = function (id, exports) {
    modules[id] = [
      function (require, module) {
        module.exports = exports;
      },
      {},
    ];
  };

  Object.defineProperty(newRequire, 'root', {
    get: function () {
      return globalObject[parcelRequireName];
    },
  });

  globalObject[parcelRequireName] = newRequire;

  for (var i = 0; i < entry.length; i++) {
    newRequire(entry[i]);
  }

  if (mainEntry) {
    // Expose entry point to Node, AMD or browser globals
    // Based on https://github.com/ForbesLindesay/umd/blob/master/template.js
    var mainExports = newRequire(mainEntry);

    // CommonJS
    if (typeof exports === 'object' && typeof module !== 'undefined') {
      module.exports = mainExports;

      // RequireJS
    } else if (typeof define === 'function' && define.amd) {
      define(function () {
        return mainExports;
      });

      // <script>
    } else if (globalName) {
      this[globalName] = mainExports;
    }
  }
})({"hp90B":[function(require,module,exports) {
"use strict";
var global = arguments[3];
var HMR_HOST = null;
var HMR_PORT = 1234;
var HMR_SECURE = false;
var HMR_ENV_HASH = "d6ea1d42532a7575";
module.bundle.HMR_BUNDLE_ID = "8b69348d31af6998";
/* global HMR_HOST, HMR_PORT, HMR_ENV_HASH, HMR_SECURE, chrome, browser, globalThis, __parcel__import__, __parcel__importScripts__, ServiceWorkerGlobalScope */ /*::
import type {
  HMRAsset,
  HMRMessage,
} from '@parcel/reporter-dev-server/src/HMRServer.js';
interface ParcelRequire {
  (string): mixed;
  cache: {|[string]: ParcelModule|};
  hotData: mixed;
  Module: any;
  parent: ?ParcelRequire;
  isParcelRequire: true;
  modules: {|[string]: [Function, {|[string]: string|}]|};
  HMR_BUNDLE_ID: string;
  root: ParcelRequire;
}
interface ParcelModule {
  hot: {|
    data: mixed,
    accept(cb: (Function) => void): void,
    dispose(cb: (mixed) => void): void,
    // accept(deps: Array<string> | string, cb: (Function) => void): void,
    // decline(): void,
    _acceptCallbacks: Array<(Function) => void>,
    _disposeCallbacks: Array<(mixed) => void>,
  |};
}
interface ExtensionContext {
  runtime: {|
    reload(): void,
    getURL(url: string): string;
    getManifest(): {manifest_version: number, ...};
  |};
}
declare var module: {bundle: ParcelRequire, ...};
declare var HMR_HOST: string;
declare var HMR_PORT: string;
declare var HMR_ENV_HASH: string;
declare var HMR_SECURE: boolean;
declare var chrome: ExtensionContext;
declare var browser: ExtensionContext;
declare var __parcel__import__: (string) => Promise<void>;
declare var __parcel__importScripts__: (string) => Promise<void>;
declare var globalThis: typeof self;
declare var ServiceWorkerGlobalScope: Object;
*/ var OVERLAY_ID = "__parcel__error__overlay__";
var OldModule = module.bundle.Module;
function Module(moduleName) {
    OldModule.call(this, moduleName);
    this.hot = {
        data: module.bundle.hotData,
        _acceptCallbacks: [],
        _disposeCallbacks: [],
        accept: function(fn) {
            this._acceptCallbacks.push(fn || function() {});
        },
        dispose: function(fn) {
            this._disposeCallbacks.push(fn);
        }
    };
    module.bundle.hotData = undefined;
}
module.bundle.Module = Module;
var checkedAssets, acceptedAssets, assetsToAccept /*: Array<[ParcelRequire, string]> */ ;
function getHostname() {
    return HMR_HOST || (location.protocol.indexOf("http") === 0 ? location.hostname : "localhost");
}
function getPort() {
    return HMR_PORT || location.port;
} // eslint-disable-next-line no-redeclare
var parent = module.bundle.parent;
if ((!parent || !parent.isParcelRequire) && typeof WebSocket !== "undefined") {
    var hostname = getHostname();
    var port = getPort();
    var protocol = HMR_SECURE || location.protocol == "https:" && !/localhost|127.0.0.1|0.0.0.0/.test(hostname) ? "wss" : "ws";
    var ws = new WebSocket(protocol + "://" + hostname + (port ? ":" + port : "") + "/"); // Web extension context
    var extCtx = typeof chrome === "undefined" ? typeof browser === "undefined" ? null : browser : chrome; // Safari doesn't support sourceURL in error stacks.
    // eval may also be disabled via CSP, so do a quick check.
    var supportsSourceURL = false;
    try {
        (0, eval)('throw new Error("test"); //# sourceURL=test.js');
    } catch (err) {
        supportsSourceURL = err.stack.includes("test.js");
    } // $FlowFixMe
    ws.onmessage = async function(event) {
        checkedAssets = {} /*: {|[string]: boolean|} */ ;
        acceptedAssets = {} /*: {|[string]: boolean|} */ ;
        assetsToAccept = [];
        var data = JSON.parse(event.data);
        if (data.type === "update") {
            // Remove error overlay if there is one
            if (typeof document !== "undefined") removeErrorOverlay();
            let assets = data.assets.filter((asset)=>asset.envHash === HMR_ENV_HASH); // Handle HMR Update
            let handled = assets.every((asset)=>{
                return asset.type === "css" || asset.type === "js" && hmrAcceptCheck(module.bundle.root, asset.id, asset.depsByBundle);
            });
            if (handled) {
                console.clear(); // Dispatch custom event so other runtimes (e.g React Refresh) are aware.
                if (typeof window !== "undefined" && typeof CustomEvent !== "undefined") window.dispatchEvent(new CustomEvent("parcelhmraccept"));
                await hmrApplyUpdates(assets);
                for(var i = 0; i < assetsToAccept.length; i++){
                    var id = assetsToAccept[i][1];
                    if (!acceptedAssets[id]) hmrAcceptRun(assetsToAccept[i][0], id);
                }
            } else fullReload();
        }
        if (data.type === "error") {
            // Log parcel errors to console
            for (let ansiDiagnostic of data.diagnostics.ansi){
                let stack = ansiDiagnostic.codeframe ? ansiDiagnostic.codeframe : ansiDiagnostic.stack;
                console.error("\uD83D\uDEA8 [parcel]: " + ansiDiagnostic.message + "\n" + stack + "\n\n" + ansiDiagnostic.hints.join("\n"));
            }
            if (typeof document !== "undefined") {
                // Render the fancy html overlay
                removeErrorOverlay();
                var overlay = createErrorOverlay(data.diagnostics.html); // $FlowFixMe
                document.body.appendChild(overlay);
            }
        }
    };
    ws.onerror = function(e) {
        console.error(e.message);
    };
    ws.onclose = function() {
        console.warn("[parcel] \uD83D\uDEA8 Connection to the HMR server was lost");
    };
}
function removeErrorOverlay() {
    var overlay = document.getElementById(OVERLAY_ID);
    if (overlay) {
        overlay.remove();
        console.log("[parcel] ✨ Error resolved");
    }
}
function createErrorOverlay(diagnostics) {
    var overlay = document.createElement("div");
    overlay.id = OVERLAY_ID;
    let errorHTML = '<div style="background: black; opacity: 0.85; font-size: 16px; color: white; position: fixed; height: 100%; width: 100%; top: 0px; left: 0px; padding: 30px; font-family: Menlo, Consolas, monospace; z-index: 9999;">';
    for (let diagnostic of diagnostics){
        let stack = diagnostic.frames.length ? diagnostic.frames.reduce((p, frame)=>{
            return `${p}
<a href="/__parcel_launch_editor?file=${encodeURIComponent(frame.location)}" style="text-decoration: underline; color: #888" onclick="fetch(this.href); return false">${frame.location}</a>
${frame.code}`;
        }, "") : diagnostic.stack;
        errorHTML += `
      <div>
        <div style="font-size: 18px; font-weight: bold; margin-top: 20px;">
          🚨 ${diagnostic.message}
        </div>
        <pre>${stack}</pre>
        <div>
          ${diagnostic.hints.map((hint)=>"<div>\uD83D\uDCA1 " + hint + "</div>").join("")}
        </div>
        ${diagnostic.documentation ? `<div>📝 <a style="color: violet" href="${diagnostic.documentation}" target="_blank">Learn more</a></div>` : ""}
      </div>
    `;
    }
    errorHTML += "</div>";
    overlay.innerHTML = errorHTML;
    return overlay;
}
function fullReload() {
    if ("reload" in location) location.reload();
    else if (extCtx && extCtx.runtime && extCtx.runtime.reload) extCtx.runtime.reload();
}
function getParents(bundle, id) /*: Array<[ParcelRequire, string]> */ {
    var modules = bundle.modules;
    if (!modules) return [];
    var parents = [];
    var k, d, dep;
    for(k in modules)for(d in modules[k][1]){
        dep = modules[k][1][d];
        if (dep === id || Array.isArray(dep) && dep[dep.length - 1] === id) parents.push([
            bundle,
            k
        ]);
    }
    if (bundle.parent) parents = parents.concat(getParents(bundle.parent, id));
    return parents;
}
function updateLink(link) {
    var newLink = link.cloneNode();
    newLink.onload = function() {
        if (link.parentNode !== null) // $FlowFixMe
        link.parentNode.removeChild(link);
    };
    newLink.setAttribute("href", link.getAttribute("href").split("?")[0] + "?" + Date.now()); // $FlowFixMe
    link.parentNode.insertBefore(newLink, link.nextSibling);
}
var cssTimeout = null;
function reloadCSS() {
    if (cssTimeout) return;
    cssTimeout = setTimeout(function() {
        var links = document.querySelectorAll('link[rel="stylesheet"]');
        for(var i = 0; i < links.length; i++){
            // $FlowFixMe[incompatible-type]
            var href = links[i].getAttribute("href");
            var hostname = getHostname();
            var servedFromHMRServer = hostname === "localhost" ? new RegExp("^(https?:\\/\\/(0.0.0.0|127.0.0.1)|localhost):" + getPort()).test(href) : href.indexOf(hostname + ":" + getPort());
            var absolute = /^https?:\/\//i.test(href) && href.indexOf(location.origin) !== 0 && !servedFromHMRServer;
            if (!absolute) updateLink(links[i]);
        }
        cssTimeout = null;
    }, 50);
}
function hmrDownload(asset) {
    if (asset.type === "js") {
        if (typeof document !== "undefined") {
            let script = document.createElement("script");
            script.src = asset.url + "?t=" + Date.now();
            if (asset.outputFormat === "esmodule") script.type = "module";
            return new Promise((resolve, reject)=>{
                var _document$head;
                script.onload = ()=>resolve(script);
                script.onerror = reject;
                (_document$head = document.head) === null || _document$head === void 0 || _document$head.appendChild(script);
            });
        } else if (typeof importScripts === "function") {
            // Worker scripts
            if (asset.outputFormat === "esmodule") return import(asset.url + "?t=" + Date.now());
            else return new Promise((resolve, reject)=>{
                try {
                    importScripts(asset.url + "?t=" + Date.now());
                    resolve();
                } catch (err) {
                    reject(err);
                }
            });
        }
    }
}
async function hmrApplyUpdates(assets) {
    global.parcelHotUpdate = Object.create(null);
    let scriptsToRemove;
    try {
        // If sourceURL comments aren't supported in eval, we need to load
        // the update from the dev server over HTTP so that stack traces
        // are correct in errors/logs. This is much slower than eval, so
        // we only do it if needed (currently just Safari).
        // https://bugs.webkit.org/show_bug.cgi?id=137297
        // This path is also taken if a CSP disallows eval.
        if (!supportsSourceURL) {
            let promises = assets.map((asset)=>{
                var _hmrDownload;
                return (_hmrDownload = hmrDownload(asset)) === null || _hmrDownload === void 0 ? void 0 : _hmrDownload.catch((err)=>{
                    // Web extension bugfix for Chromium
                    // https://bugs.chromium.org/p/chromium/issues/detail?id=1255412#c12
                    if (extCtx && extCtx.runtime && extCtx.runtime.getManifest().manifest_version == 3) {
                        if (typeof ServiceWorkerGlobalScope != "undefined" && global instanceof ServiceWorkerGlobalScope) {
                            extCtx.runtime.reload();
                            return;
                        }
                        asset.url = extCtx.runtime.getURL("/__parcel_hmr_proxy__?url=" + encodeURIComponent(asset.url + "?t=" + Date.now()));
                        return hmrDownload(asset);
                    }
                    throw err;
                });
            });
            scriptsToRemove = await Promise.all(promises);
        }
        assets.forEach(function(asset) {
            hmrApply(module.bundle.root, asset);
        });
    } finally{
        delete global.parcelHotUpdate;
        if (scriptsToRemove) scriptsToRemove.forEach((script)=>{
            if (script) {
                var _document$head2;
                (_document$head2 = document.head) === null || _document$head2 === void 0 || _document$head2.removeChild(script);
            }
        });
    }
}
function hmrApply(bundle, asset) {
    var modules = bundle.modules;
    if (!modules) return;
    if (asset.type === "css") reloadCSS();
    else if (asset.type === "js") {
        let deps = asset.depsByBundle[bundle.HMR_BUNDLE_ID];
        if (deps) {
            if (modules[asset.id]) {
                // Remove dependencies that are removed and will become orphaned.
                // This is necessary so that if the asset is added back again, the cache is gone, and we prevent a full page reload.
                let oldDeps = modules[asset.id][1];
                for(let dep in oldDeps)if (!deps[dep] || deps[dep] !== oldDeps[dep]) {
                    let id = oldDeps[dep];
                    let parents = getParents(module.bundle.root, id);
                    if (parents.length === 1) hmrDelete(module.bundle.root, id);
                }
            }
            if (supportsSourceURL) // Global eval. We would use `new Function` here but browser
            // support for source maps is better with eval.
            (0, eval)(asset.output);
             // $FlowFixMe
            let fn = global.parcelHotUpdate[asset.id];
            modules[asset.id] = [
                fn,
                deps
            ];
        } else if (bundle.parent) hmrApply(bundle.parent, asset);
    }
}
function hmrDelete(bundle, id) {
    let modules = bundle.modules;
    if (!modules) return;
    if (modules[id]) {
        // Collect dependencies that will become orphaned when this module is deleted.
        let deps = modules[id][1];
        let orphans = [];
        for(let dep in deps){
            let parents = getParents(module.bundle.root, deps[dep]);
            if (parents.length === 1) orphans.push(deps[dep]);
        } // Delete the module. This must be done before deleting dependencies in case of circular dependencies.
        delete modules[id];
        delete bundle.cache[id]; // Now delete the orphans.
        orphans.forEach((id)=>{
            hmrDelete(module.bundle.root, id);
        });
    } else if (bundle.parent) hmrDelete(bundle.parent, id);
}
function hmrAcceptCheck(bundle, id, depsByBundle) {
    if (hmrAcceptCheckOne(bundle, id, depsByBundle)) return true;
     // Traverse parents breadth first. All possible ancestries must accept the HMR update, or we'll reload.
    let parents = getParents(module.bundle.root, id);
    let accepted = false;
    while(parents.length > 0){
        let v = parents.shift();
        let a = hmrAcceptCheckOne(v[0], v[1], null);
        if (a) // If this parent accepts, stop traversing upward, but still consider siblings.
        accepted = true;
        else {
            // Otherwise, queue the parents in the next level upward.
            let p = getParents(module.bundle.root, v[1]);
            if (p.length === 0) {
                // If there are no parents, then we've reached an entry without accepting. Reload.
                accepted = false;
                break;
            }
            parents.push(...p);
        }
    }
    return accepted;
}
function hmrAcceptCheckOne(bundle, id, depsByBundle) {
    var modules = bundle.modules;
    if (!modules) return;
    if (depsByBundle && !depsByBundle[bundle.HMR_BUNDLE_ID]) {
        // If we reached the root bundle without finding where the asset should go,
        // there's nothing to do. Mark as "accepted" so we don't reload the page.
        if (!bundle.parent) return true;
        return hmrAcceptCheck(bundle.parent, id, depsByBundle);
    }
    if (checkedAssets[id]) return true;
    checkedAssets[id] = true;
    var cached = bundle.cache[id];
    assetsToAccept.push([
        bundle,
        id
    ]);
    if (!cached || cached.hot && cached.hot._acceptCallbacks.length) return true;
}
function hmrAcceptRun(bundle, id) {
    var cached = bundle.cache[id];
    bundle.hotData = {};
    if (cached && cached.hot) cached.hot.data = bundle.hotData;
    if (cached && cached.hot && cached.hot._disposeCallbacks.length) cached.hot._disposeCallbacks.forEach(function(cb) {
        cb(bundle.hotData);
    });
    delete bundle.cache[id];
    bundle(id);
    cached = bundle.cache[id];
    if (cached && cached.hot && cached.hot._acceptCallbacks.length) cached.hot._acceptCallbacks.forEach(function(cb) {
        var assetsToAlsoAccept = cb(function() {
            return getParents(module.bundle.root, id);
        });
        if (assetsToAlsoAccept && assetsToAccept.length) // $FlowFixMe[method-unbinding]
        assetsToAccept.push.apply(assetsToAccept, assetsToAlsoAccept);
    });
    acceptedAssets[id] = true;
}

},{}],"2v4kU":[function(require,module,exports) {
const swiperHome = new Swiper(".swiper-capao", {
    pagination: {
        el: ".swiper-pagination",
        dynamicBullets: false,
        clickable: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});
const swiperQuemSomos = new Swiper(".swiper-quemsomos", {
    pagination: {
        el: ".swiper-pagination1",
        dynamicBullets: false,
        clickable: true
    },
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});
const swiperComentarios = new Swiper(".swiper-comentarios", {
    effect: "cards",
    grabCursor: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});
const swiperVetpoints = new Swiper(".vetpoints__comentarios--comments", {
    slidesPerView: "auto",
    grabCursor: true,
    centeredSlides: true,
    navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
    }
});

},{}]},["hp90B","2v4kU"], "2v4kU", "parcelRequirec5d7")

</script>
</body>

</html>