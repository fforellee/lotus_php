<?php
include("../php/conexao.php");

session_start();

$sql = "SELECT * FROM cliente WHERE CPF ='".$_SESSION['CPF']."'"; //Falta where com id do cliente
$result = mysqli_query($conn, $sql); 
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
    <title>Perfil</title>
    <link rel="stylesheet" href="../css/profile.css" media="screen">
    <link rel="stylesheet" href="../css/Perfil.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery2.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/profile.js" defer=""></script>
    <meta name="generator" content="Nicepage 3.28.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="shortcut icon" href="../images/favico.png" type="image/x-icon">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "P2_LPIV",
		"logo": "images/white-logo3.png"}
    </script>

    <meta name="theme-color" content="#456ee8">
    <meta property="og:title" content="Perfil">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Perfil.html" data-home-page-title="Perfil" class="u-body"><header class="u-clearfix u-custom-color-4 u-header u-header" id="sec-4472"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="51013756" class="u-image u-logo u-image-1" data-image-width="137" data-image-height="150" title="Horti">
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
            </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-6 u-border-hover-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-6 u-text-body-alt-color u-text-hover-custom-color-5" href="carrinho.html" style="padding: 10px 0px;">Carrinho</a>
            </li><li class="u-nav-item"><a class="u-border-2 u-border-active-custom-color-6 u-border-hover-custom-color-5 u-border-no-left u-border-no-right u-border-no-top u-button-style u-nav-link u-text-active-custom-color-6 u-text-body-alt-color u-text-hover-custom-color-5" href="perfil.html" style="padding: 10px 0px;">Perfil</a>
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
    <section class="u-clearfix u-section-1" id="sec-4c8c">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-custom-color-4 u-layout-cell u-size-15 u-layout-cell-1">
                <div class="u-container-layout u-valign-bottom u-container-layout-1">
                  <a href="inserir_dados.php" data-page-id="149127078" class="u-active-custom-color-6 u-border-3 u-border-hover-white u-border-white u-btn u-button-style u-hover-white u-none u-text-active-white u-text-body-alt-color u-text-hover-custom-color-4 u-btn-1">INSERIR DADOS</a>
                  <a href="alterar_dados.php" data-page-id="1736617625" class="u-active-custom-color-6 u-border-3 u-border-hover-white u-border-white u-btn u-button-style u-hover-white u-none u-text-active-white u-text-body-alt-color u-text-hover-custom-color-4 u-btn-2">ATUALIZAR DADOS</a>
                  <a href="remover_dados.php" data-page-id="857521981" class="u-active-custom-color-6 u-border-3 u-border-hover-white u-border-white u-btn u-button-style u-hover-white u-none u-text-active-white u-text-body-alt-color u-text-hover-custom-color-4 u-btn-3">REMOVER DADOS</a>
                  <a href="../php/kill_session.php" type="submit" name="logout" class="u-active-custom-color-6 u-border-3 u-border-hover-white u-border-white u-btn u-button-style u-hover-white u-none u-text-active-white u-text-body-alt-color u-text-hover-custom-color-4 u-btn-4">SAIR</a>
                </div>
              </div>
              <div class="u-container-style u-custom-color-2 u-layout-cell u-size-45 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h4 class="u-text u-text-default u-text-1"><span class="u-file-icon u-icon u-text-custom-color-4 u-icon-1"><img src="../images/icon.png" alt=""></span>
                    <span class="u-text-custom-color-4">&nbsp;Informações Pessoais</span>
                  </h4>
                  <div class="u-border-3 u-border-custom-color-4 u-expanded-width u-line u-line-horizontal u-line-1"></div>
                <?php while ($dados = mysqli_fetch_object($result))  {?>
                  <h5 class="u-text u-text-4">Nome Completo</h5>
                  <p class="u-text u-text-1"><?php echo $dados->Nome_completo;?></h5>
                  <h5 class="u-text u-text-4">Data de nascimento</h5>
                  <p class="u-text u-text-1"><?php echo $dados->Data_nascimento;?></h5>
                  <h5 class="u-text u-text-6">CPF</h5>
                  <p class="u-text u-text-1"><?php echo $dados->CPF;?></h5>
                  <h5 class="u-text u-text-8">Email</h5>
                  <p class="u-text u-text-1"><?php echo $dados->Email;?></h5>
                  <h5 class="u-text u-text-10">CEP</h5>
                  <p class="u-text u-text-1"><?php echo $dados->Endereço_CEP;?></h5>
                  <h5 class="u-text u-text-12">Logradouro</h5>
                  <p class="u-text u-text-1"><?php echo $dados->Endereço_Logradouro;?></h5>
                  <br>
                  <br>
                  <!-- <p class="u-text u-text-1"><?php echo $dados->Endereço_Num_residencia;?></h5> <h5 class="u-text u-text-2"><?php echo $dados->Nome_completo;?></h5> <h4 class="u-text u-text-default u-text-15"><span class="u-file-icon u-icon u-text-custom-color-4 u-icon-2"><img src="../images/cartao.png" alt=""></span> -->
                <?php } ?>
                    <span class="u-text-custom-color-4">&nbsp;Informações do Cartão</span>
                  </h4>
                  <div class="u-border-3 u-border-custom-color-4 u-line u-line-horizontal u-line-2"></div>
                  <h5 class="u-text u-text-16">Número do Cartão</h5>
                  <h5 class="u-text u-text-17">Data de Vencimento</h5>
                  <h5 class="u-text u-text-default u-text-18">Código de Segurança</h5>
                  <p class="u-text u-text-default u-text-19">1234.1234.1234.1234</p>
                  <p class="u-text u-text-default u-text-20">00/21</p>
                  <p class="u-text u-text-default u-text-21">123</p>
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