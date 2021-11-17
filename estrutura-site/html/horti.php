<?php

session_start();

if (!isset($_SESSION['login'])) {
  header("Location: ../html/index.php");
  }
?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt-BR">
  <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Hortifruti</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/horti.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link id="u-page-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald:200,300,400,500,600,700">
    <link rel="shortcut icon" href="../images/favico.png" type="image/x-icon">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "P2_LPIV",
		"logo": "images/white-logo3.png"}
    </script>

    <meta name="theme-color" content="#456ee8">
    <meta property="og:title" content="Horti">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-custom-color-4 u-header u-header" id="sec-4472"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="../html/horti.html" data-page-id="51013756" class="u-image u-logo u-image-1" data-image-width="137" data-image-height="150" title="Horti">
          <img src="../images/white-logo3.png" class="u-logo-image u-logo-image-1">
        </a>
        <nav class="u-menu u-menu-dropdown u-offcanvas u-menu-1">
          <div class="menu-collapse" style="font-size: 1rem; letter-spacing: 0px; font-weight: 700; text-transform: uppercase;">
            <a class="u-button-style u-custom-left-right-menu-spacing u-custom-padding-bottom u-custom-top-bottom-menu-spacing u-nav-link u-text-active-palette-1-base u-text-hover-palette-2-base" href="#">
              <svg><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="#menu-hamburger"></use></svg>
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><defs><symbol id="menu-hamburger" viewBox="0 0 16 16" style="width: 16px; height: 16px;"><rect y="1" width="16" height="2"></rect><rect y="7" width="16" height="2"></rect><rect y="13" width="16" height="2"></rect></symbol></defs></svg>
            </a>
          </div>
          <div class="u-custom-menu u-nav-container">
            <ul class="u-nav u-spacing-30 u-unstyled u-nav-1"><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-6 u-border-hover-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-6 u-text-body-alt-color u-text-hover-custom-color-5" href="horti.html" style="padding: 10px 0px;">Catalogo</a>
            </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-6 u-border-hover-custom-color-5 u-border-no-left u-border-no-right    u-border-no-top u-button-style u-nav-link u-text-active-custom-color-6 u-text-body-alt-color u-text-hover-custom-color-5" href="carrinho.html"    style="padding: 10px 0px;">Carrinho</a>
            </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-6 u-border-hover-custom-color-5 u-border-no-left u-border-no-right    u-border-no-top u-button-style u-nav-link u-text-active-custom-color-6 u-text-body-alt-color u-text-hover-custom-color-5" href="perfil.php" style="padding: 10px 0px;   ">Perfil</a>
            </li></ul>
          </div>
          <div class="u-custom-menu u-nav-container-collapse">
            <div class="u-black u-container-style u-inner-container-layout u-opacity u-opacity-95 u-sidenav">
              <div class="u-inner-container-layout u-sidenav-overflow">
                <div class="u-menu-close"></div>
                <ul class="u-align-center u-nav u-popupmenu-items u-unstyled u-nav-2"><li class="u-nav-item"><a class="u-button-style u-nav-link" href="horti.html" style="padding: 10px 0px;">Catalogo</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" href="carrinho.html" style="padding: 10px 0px;">Carrinho</a>
                  </li><li class="u-nav-item"><a class="u-button-style u-nav-link" style="padding: 10px 0px;">Perfil</a>
                  </li></ul>
              </div>
            </div>
            <div class="u-black u-menu-overlay u-opacity u-opacity-70"></div>
          </div>
        </nav>
      </div></header>
    <section class="u-clearfix u-section-1" id="sec-2f8d">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-align-center u-container-style u-expanded-width u-group u-group-1">
          <div class="u-container-layout u-container-layout-1">
            <h3 class="u-align-center u-custom-font u-text u-text-default u-text-font u-text-grey-90 u-text-1">Outras categorias</h3>
            <div class="u-container-style u-group u-group-2">
              <div class="u-container-layout">
                <a href="empty" class="u-active-none u-border-3 u-border-active-custom-color-5 u-border-custom-color-4 u-border-hover-custom-color-6 u-btn u-button-style u-hover-none u-none u-text-active-custom-color-5 u-text-custom-color-4 u-text-hover-custom-color-6 u-btn-1"><span class="u-file-icon u-icon u-icon-1"><img src="../images/mercearia1.png" alt=""></span>&nbsp;Padaria
                </a>
                <a href="empty" class="u-active-none u-border-3 u-border-active-custom-color-5 u-border-custom-color-4 u-border-hover-custom-color-6 u-btn u-button-style u-hover-none u-none u-text-active-custom-color-5 u-text-custom-color-4 u-text-hover-custom-color-6 u-btn-2"><span class="u-file-icon u-icon u-icon-2"><img src="../images/adega1.png" alt=""></span>&nbsp;Adega&nbsp;
                </a>
                <a href="frios.html" class="u-active-none u-border-3 u-border-active-custom-color-5 u-border-custom-color-4 u-border-hover-custom-color-6 u-btn u-button-style u-hover-none u-none u-text-active-custom-color-5 u-text-custom-color-4 u-text-hover-custom-color-6 u-btn-3"><span class="u-file-icon u-icon u-icon-3"><img src="../images/frios1.png" alt=""></span>&nbsp;Frios e embutidos
                </a>
                <a href="horti.html" data-page-id="51013756" class="u-active-none u-border-3 u-border-active-custom-color-5 u-border-custom-color-4 u-border-hover-custom-color-6 u-btn u-button-style u-hover-none u-none u-text-active-custom-color-5 u-text-custom-color-4 u-text-hover-custom-color-6 u-btn-4"><span class="u-file-icon u-icon u-icon-4"><img src="../images/horti1.png" alt=""></span>&nbsp;Hortifrúti
                </a>
              </div>
            </div>
            <div class="u-container-style u-group u-group-3">
              <div class="u-container-layout">
                <a href="empty" class="u-active-none u-border-3 u-border-active-custom-color-5 u-border-custom-color-4 u-border-hover-custom-color-6 u-btn u-button-style u-hover-none u-none u-text-active-custom-color-5 u-text-custom-color-4 u-text-hover-custom-color-6 u-btn-5"><span class="u-file-icon u-icon u-icon-5"><img src="../images/higiene11.png" alt=""></span>&nbsp;Higiene Pessoal
                </a>
                <a href="empty" class="u-active-none u-border-3 u-border-active-custom-color-5 u-border-custom-color-4 u-border-hover-custom-color-6 u-btn u-button-style u-hover-none u-none u-text-active-custom-color-5 u-text-custom-color-4 u-text-hover-custom-color-6 u-btn-6"><span class="u-file-icon u-icon u-icon-6"><img src="../images/limpeza1.png" alt=""></span>&nbsp;Limpeza
                </a>
                <a href="empty" class="u-active-none u-border-3 u-border-active-custom-color-5 u-border-custom-color-4 u-border-hover-custom-color-6 u-btn u-button-style u-hover-none u-none u-text-active-custom-color-5 u-text-custom-color-4 u-text-hover-custom-color-6 u-btn-7"><span class="u-file-icon u-icon u-icon-7"><img src="../images/bazar1.png" alt=""></span>&nbsp;Bazar
                </a>
                <a href="empty" class="u-active-none u-border-3 u-border-active-custom-color-5 u-border-custom-color-4 u-border-hover-custom-color-6 u-btn u-button-style u-hover-none u-none u-text-active-custom-color-5 u-text-custom-color-4 u-text-hover-custom-color-6 u-btn-8"><span class="u-file-icon u-icon u-icon-8"><img src="../images/pets1.png" alt=""></span>&nbsp;Pets
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-grey-10 u-section-2" id="carousel_c1b0">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h1 class="u-custom-font u-font-oswald u-text u-text-custom-color-4 u-text-default u-text-1">Hortifrúti</h1>
        <p class="u-text u-text-2"> Leve para sua casa produtos tão fresquinhos e com a mesma qualidade das feiras, tudo isso com a praticidade que só a <span style="font-style: normal;" class="u-text-custom-color-4">Lotus™</span> oferece. Confira nossas principais ofertas! 
        </p>
        <div class="u-expanded-width u-list u-list-1">
          <div class="u-repeater u-repeater-1">
            <div class="u-container-style u-list-item u-repeater-item u-white u-list-item-1">
              <div class="u-container-layout u-similar-container u-container-layout-1">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-1" src="../images/pessegof.jpg" data-image-width="249" data-image-height="255">
                <div class="u-container-style u-expanded-width-xs u-group u-video-cover u-group-1">
                  <div class="u-container-layout u-container-layout-2">
                    <h3 class="u-custom-font u-font-oswald u-text u-text-3">Pêssego</h3>
                    <p class="u-align-left u-text u-text-4">Preço por quilo</p>
                    <h6 class="u-text u-text-custom-color-6 u-text-5">R$ 3,98</h6>
                    <a href="https://nicepage.me" class="u-active-custom-color-6 u-border-2 u-border-custom-color-4 u-btn u-button-style u-hover-custom-color-4 u-none u-text-active-custom-color-2 u-text-custom-color-4 u-text-hover-custom-color-2 u-btn-1">ADICIONAR AO CARRINHO<br>
                    </a>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-2">
              <div class="u-container-layout u-similar-container u-container-layout-3">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-2" src="../images/abacatef.jpg" data-image-width="249" data-image-height="255">
                <div class="u-container-style u-expanded-width-xs u-group u-video-cover u-group-2">
                  <div class="u-container-layout u-valign-middle-xs u-container-layout-4">
                    <h3 class="u-custom-font u-font-oswald u-text u-text-6">Abacate</h3>
                    <p class="u-align-left u-text u-text-7">Preço por quilo</p>
                    <h6 class="u-text u-text-custom-color-6 u-text-8">R$ 6,50</h6>
                    <a href="https://nicepage.best" class="u-active-custom-color-6 u-border-2 u-border-custom-color-4 u-btn u-button-style u-hover-custom-color-4 u-none u-text-active-custom-color-2 u-text-custom-color-4 u-text-hover-custom-color-2 u-btn-2">ADICIONAR AO CARRINHO</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-3">
              <div class="u-container-layout u-similar-container u-container-layout-5">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-3" src="../images/bananaf.jpg" data-image-width="249" data-image-height="255">
                <div class="u-container-style u-expanded-width-xs u-group u-video-cover u-group-3">
                  <div class="u-container-layout u-valign-middle-xs u-container-layout-6">
                    <h3 class="u-custom-font u-font-oswald u-text u-text-9">Banana Nanica</h3>
                    <p class="u-align-left u-text u-text-10">Preço por quilo</p>
                    <h6 class="u-text u-text-custom-color-6 u-text-11">R$ 3,95</h6>
                    <a href="https://nicepage.com/k/hacker-website-templates" class="u-active-custom-color-6 u-border-2 u-border-custom-color-4 u-btn u-button-style u-hover-custom-color-4 u-none u-text-active-custom-color-2 u-text-custom-color-4 u-text-hover-custom-color-2 u-btn-3">ADICIONAR AO CARRINHO</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-4">
              <div class="u-container-layout u-similar-container u-container-layout-7">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-4" src="../images/laranjaf2.jpg" data-image-width="249" data-image-height="255">
                <div class="u-container-style u-expanded-width-xs u-group u-video-cover u-group-4">
                  <div class="u-container-layout u-valign-middle-xs u-container-layout-8">
                    <h3 class="u-custom-font u-font-oswald u-text u-text-12">Laranja Pera</h3>
                    <p class="u-align-left u-text u-text-13">Preço por quilo</p>
                    <h6 class="u-text u-text-custom-color-6 u-text-14">R$ 2,74</h6>
                    <a href="https://nicepage.com/k/hacker-website-templates" class="u-active-custom-color-6 u-border-2 u-border-custom-color-4 u-btn u-button-style u-hover-custom-color-4 u-none u-text-active-custom-color-2 u-text-custom-color-4 u-text-hover-custom-color-2 u-btn-4">ADICIONAR AO CARRINHO</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-5">
              <div class="u-container-layout u-similar-container u-container-layout-9">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-5" src="../images/tomatef.jpg" data-image-width="249" data-image-height="255">
                <div class="u-container-style u-expanded-width-xs u-group u-video-cover u-group-5">
                  <div class="u-container-layout u-valign-middle-xs u-container-layout-10">
                    <h3 class="u-custom-font u-font-oswald u-text u-text-15">Tomate Carmem</h3>
                    <p class="u-align-left u-text u-text-16">Preço por quilo</p>
                    <h6 class="u-text u-text-custom-color-6 u-text-17">R$ 5,56</h6>
                    <a href="https://nicepage.com/k/hacker-website-templates" class="u-active-custom-color-6 u-border-2 u-border-custom-color-4 u-btn u-button-style u-hover-custom-color-4 u-none u-text-active-custom-color-2 u-text-custom-color-4 u-text-hover-custom-color-2 u-btn-5">ADICIONAR AO CARRINHO</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-6">
              <div class="u-container-layout u-similar-container u-container-layout-11">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-6" src="../images/cenouraf.jpg" data-image-width="249" data-image-height="255">
                <div class="u-container-style u-expanded-width-xs u-group u-video-cover u-group-6">
                  <div class="u-container-layout u-valign-middle-xs u-container-layout-12">
                    <h3 class="u-custom-font u-font-oswald u-text u-text-18">Cenoura</h3>
                    <p class="u-align-left u-text u-text-19">Preço por quilo</p>
                    <h6 class="u-text u-text-custom-color-6 u-text-20">R$ 1,88</h6>
                    <a href="https://nicepage.com/k/hacker-website-templates" class="u-active-custom-color-6 u-border-2 u-border-custom-color-4 u-btn u-button-style u-hover-custom-color-4 u-none u-text-active-custom-color-2 u-text-custom-color-4 u-text-hover-custom-color-2 u-btn-6">ADICIONAR AO CARRINHO</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-7">
              <div class="u-container-layout u-similar-container u-container-layout-13">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-7" src="../images/cebolaf.jpg" data-image-width="249" data-image-height="255">
                <div class="u-container-style u-expanded-width-xs u-group u-video-cover u-group-7">
                  <div class="u-container-layout u-valign-middle-xs u-container-layout-14">
                    <h3 class="u-custom-font u-font-oswald u-text u-text-21">Cebola</h3>
                    <p class="u-align-left u-text u-text-22">Preço por quilo</p>
                    <h6 class="u-text u-text-custom-color-6 u-text-23">R$ 1,38</h6>
                    <a href="https://nicepage.com/k/hacker-website-templates" class="u-active-custom-color-6 u-border-2 u-border-custom-color-4 u-btn u-button-style u-hover-custom-color-4 u-none u-text-active-custom-color-2 u-text-custom-color-4 u-text-hover-custom-color-2 u-btn-7">ADICIONAR AO CARRINHO</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-8">
              <div class="u-container-layout u-similar-container u-container-layout-15">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-8" src="../images/alfacef.jpg" data-image-width="249" data-image-height="255">
                <div class="u-container-style u-expanded-width-xs u-group u-video-cover u-group-8">
                  <div class="u-container-layout u-valign-middle-xs u-container-layout-16">
                    <h3 class="u-custom-font u-font-oswald u-text u-text-24">Alface-crespa</h3>
                    <p class="u-align-left u-text u-text-25">Preço por unidade</p>
                    <h6 class="u-text u-text-custom-color-6 u-text-26">R$ 1,99</h6>
                    <a href="https://nicepage.com/k/hacker-website-templates" class="u-active-custom-color-6 u-border-2 u-border-custom-color-4 u-btn u-button-style u-hover-custom-color-4 u-none u-text-active-custom-color-2 u-text-custom-color-4 u-text-hover-custom-color-2 u-btn-8">ADICIONAR AO CARRINHO</a>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-container-style u-list-item u-repeater-item u-video-cover u-white u-list-item-9">
              <div class="u-container-layout u-similar-container u-container-layout-17">
                <img alt="" class="u-expanded-width-xs u-image u-image-default u-image-9" src="../images/alhof.jpg" data-image-width="249" data-image-height="255">
                <div class="u-container-style u-expanded-width-xs u-group u-video-cover u-group-9">
                  <div class="u-container-layout u-valign-middle-xs u-container-layout-18">
                    <h3 class="u-custom-font u-font-oswald u-text u-text-27">Alho</h3>
                    <p class="u-align-left u-text u-text-28">Preço por quilo</p>
                    <h6 class="u-text u-text-custom-color-6 u-text-29">R$ 16,70</h6>
                    <a href="https://nicepage.com/k/hacker-website-templates" class="u-active-custom-color-6 u-border-2 u-border-custom-color-4 u-btn u-button-style u-hover-custom-color-4 u-none u-text-active-custom-color-2 u-text-custom-color-4 u-text-hover-custom-color-2 u-btn-9">ADICIONAR AO CARRINHO</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    
    <footer class="u-align-center u-clearfix u-custom-color-4 u-footer u-footer" id="sec-5317">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <img class="u-image u-image-default u-preserve-proportions u-image-1" src="../images/white-logo2.png" alt="" data-image-width="65" data-image-height="71">
        <p class="u-small-text u-text u-text-variant u-text-1">© Eduardo Guilherme | Fabio Nalini | Icaro Onofre | Saul Gabriel</p>
      </div>
    </footer>
  </body>
</html>