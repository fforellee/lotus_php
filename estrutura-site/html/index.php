<?php
include '../php/login.php';
include '../php/conexao.php';

$sql = 'SELECT * FROM cliente';
$result = mysqli_query($conn, $sql); 
$dados = mysqli_fetch_object($result);

if (isset($_SESSION['login'])) {
  header("Location: ../html/horti.php");
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
    <title>Login</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/Login.css" media="screen">
    <meta name="generator" content="Nicepage 3.28.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="shortcut icon" href="../images/favico.png" type="image/x-icon">
    
    <script type="application/ld+json">{
		"@context": "http://schema.org",
		"@type": "Organization",
		"name": "P2_LPIV"}
    </script>

    <meta name="theme-color" content="#456ee8">
    <meta property="og:title" content="Login"> 
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body data-home-page="Login.html" data-home-page-title="Login" class="u-body">
    <section class="u-align-center u-clearfix u-custom-color-2 u-section-1" id="carousel_69ce">
      <div class="u-clearfix u-sheet u-valign-middle u-sheet-1">
        <div class="u-clearfix u-expanded-width u-gutter-40 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-align-center u-container-style u-layout-cell u-right-cell u-size-30 u-layout-cell-1">
                <div class="u-container-layout u-valign-middle u-container-layout-1">
                  <h3 class="u-text u-text-default u-text-1">Entre em sua conta</h3>
                  <div class="u-form u-form-1">
                    <!---Começo--><form method="POST" class="u-clearfix u-form-spacing-25 u-form-vertical u-inner-form" style="padding: 0;" source="custom" name="form_login">
                      <div class="u-form-email u-form-group u-form-group-1">
                        <label for="email-daf4" class="u-label u-label-1">* Email</label>
                        <input type="email" placeholder="Informe seu Email" id="email-daf4" name="emailLogin" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-custom-color-2 u-input u-input-rectangle" required="">
                      </div>
                      <div class="u-form-group u-form-name u-form-group-2">
                        <label for="name-daf4" class="u-label u-label-2">* Senha</label>
                        <input type="password" placeholder="********" id="name-daf4" name="senhaLogin" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-custom-color-2 u-input u-input-rectangle" required="">
                      </div>
                      <div class="u-align-right u-form-group u-form-submit">
                        <a href="#" class="u-active-custom-color-6 u-border-3 u-border-custom-color-4 u-btn u-btn-submit u-button-style u-hover-custom-color-4 u-none u-text-active-custom-color-2 u-text-custom-color-4 u-text-hover-custom-color-2 u-btn-1">Entrar</a>
                        <input type="submit" value="enviar" class="u-form-control-hidden" name="acao">        
                      </div>
                    </form>
                  </div>
                  <p class="u-small-text u-text u-text-default u-text-variant u-text-2">Ainda não possui conta? <a href="../html/cadastro.html" data-page-id="834983" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-custom-color-5 u-text-custom-color-4 u-text-hover-custom-color-6 u-btn-2">Clique aqui</a> e cadastre-se.
                  </p>
                </div>
              </div>
              <div class="u-align-left u-container-style u-custom-color-4 u-layout-cell u-size-30 u-layout-cell-2">
                <div class="u-container-layout u-valign-middle u-container-layout-2">
                  <img class="u-image u-image-default u-preserve-proportions u-image-1" src="../images/white-logo-lg.png" alt="" data-image-width="200" data-image-height="216">
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