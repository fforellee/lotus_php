<?php

include("../php/conexao.php");

session_start();

$sql = "SELECT * FROM cliente WHERE CPF ='".$_SESSION['CPF']."'";
$result = mysqli_query($conn, $sql); 
if (!isset($_SESSION['login'])) {
  header("Location: ../html/index.php");
  }
$dados = mysqli_fetch_object($result);

?>
<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt-BR">
  <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content=""> 
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Alterar Dados</title>
    <link rel="stylesheet" href="../css/profile.css" media="screen">
    <link rel="stylesheet" href="../css/alterar_dados.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery2.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/profile.js" defer=""></script>
    <script src="../js/js.js"></script>
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
    <meta property="og:title" content="alterar_dados">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-custom-color-4 u-header u-header" id="sec-4472"><div class="u-clearfix u-sheet u-sheet-1">
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
      <h3 class="u-text u-text-default u-text-1">Alterar dados da conta</h3>
    <section class="u-clearfix u-section-1" id="sec-15fb">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-0 u-layout-wrap u-layout-wrap-1">
          <div class="u-gutter-0 u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-custom-color-4 u-layout-cell u-size-15 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <a href="perfil.php" data-page-id="267483829" class="u-active-custom-color-6 u-border-3 u-border-hover-white u-border-white u-btn u-button-style u-hover-white u-none u-text-active-white u-text-body-alt-color u-text-hover-custom-color-4 u-btn-1">CANCELAR</a>
                </div>
              </div>
              <div class="u-container-style u-custom-color-2 u-layout-cell u-size-45 u-layout-cell-2">
                <div class="u-container-layout u-container-layout-2">
                  <h4 class="u-text u-text-default u-text-1"><span class="u-file-icon u-icon u-text-custom-color-4 u-icon-1"><img src="../images/icon.png" alt=""></span>
                    <span class="u-text-custom-color-4">&nbsp;Informações Pessoais</span>
                  </h4>
                  <div class="u-border-3 u-border-custom-color-4 u-expanded-width u-line u-line-horizontal u-line-1"></div>
                  <div class="u-form u-form-1">
                    <form action="../php/update.php" method="POST" class="u-clearfix u-form-spacing-15 u-form-vertical u-inner-form" style="padding: 0;" source="custom" name="form">
                      <div class="u-form-group u-form-group-1">
                        <label for="text-c16a" class="u-label u-label-1"></label>
                        <label for="text-2a8c" class="u-label u-label-2">Nome Completo</label>
                        <input name="Nome_Completo" type="text" placeholder="<?php echo $dados->Nome_completo;?>" id="text-c16a" name="alterar_nome" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white">
                      </div>
                      <div class="u-form-group u-form-group-2">
                        <label for="text-2a8c" class="u-label u-label-2">Data de Nascimento</label>
                        <input name="Data_nascimento" type="text" placeholder="<?php echo $dados->Data_nascimento;?>" id="text-2a8c" name="alterar_data" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" maxlength="10" onkeyup="mascara(this, mdata);">
                      </div>
                      <div class="u-form-group u-form-group-3">
                        <label for="text-da6f" class="u-label u-label-3">CPF</label>
                        <input name="CPF" type="text" placeholder="<?php echo $dados->CPF;?>" id="text-da6f" name="alterar_cpf" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" maxlength="14" onkeyup="mascara(this, mcpf);">
                      </div>
                      <div class="u-form-group u-form-group-4">
                        <label for="text-7700" class="u-label u-label-4">Email</label>
                        <input name="Email" type="email" placeholder="<?php echo $dados->Email;?>" id="text-7700" name="alterar_email" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white">
                      </div>
                      <div class="u-form-group u-form-group-5">
                        <label for="text-3a02" class="u-label u-label-5">Senha</label>
                        <input name="Senha" type="password" placeholder="********" id="text-3a02" name="alterar_senha" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white">
                      </div>
                      <div class="u-form-group u-form-group-6">
                        <label for="text-10ca" class="u-label u-label-6">CEP</label>
                        <input name="Endereço_CEP" type="text" id="text-10ca" name="alterar_cep" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" placeholder="cep atual" maxlength="9" onkeyup="mascara(this, mcep);">
                      </div> 
                      <div class="u-form-group u-form-group-7">
                        <label for="text-c63f" class="u-label u-label-7">Logradouro</label>
                        <input type="text" placeholder="<?php echo $dados->Endereço_Logradouro?>" id="text-c63f" name="alterar_logradouro" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white">
                      </div>
                      <div class="u-form-group u-form-group-8">
                        <label for="text-2358" class="u-form-control-hidden u-label u-label-8"></label>
                        <input name="Endereço_Num_residencia" type="text" placeholder="<?php echo $dados->Endereço_Num_residencia;?>" id="text-2358" name="alterar_logradouro2" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white">
                      </div>
                      <div class="u-form-group u-form-group-9">
                        <label for="text-db53" class="u-label u-label-9">Número da Residência</label>
                        <input type="text" placeholder="<?php echo $dados->Endereço_Num_residencia;?>" id="text-db53" name="alterar_numero" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white">
                      </div>
                      <div class="u-form-group u-form-group-10">
                        <label for="text-9ad7" class="u-label u-label-10">Complemento</label>
                        <input type="text" placeholder="<?php echo $dados->Endereço_Complemento;?>" id="text-9ad7" name="alterar_complemento" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white">
                      </div>
                      <div class="u-align-center u-form-group u-form-submit">
                        <a class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-4 u-hover-custom-color-5 u-radius-12 u-btn-2">ALTERAR DADOS<br>
                        </a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success"> Thank you! Your message has been sent. </div>
                      <div class="u-form-send-error u-form-send-message"> Unable to send your message. Please fix errors then try again. </div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                  <div class="u-container-style u-expanded-width u-group u-group-1">
                    <div class="u-container-layout">
                      <h4 class="u-text u-text-default u-text-2"><span class="u-file-icon u-icon u-text-custom-color-4 u-icon-2"><img src="../images/home.png" alt=""></span>
                        <span class="u-text-custom-color-4">&nbsp;Residência</span>
                      </h4>
                      <div class="u-border-3 u-border-custom-color-4 u-expanded-width u-line u-line-horizontal u-line-2"></div>
                    </div>
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