<?php

include("../php/conexao.php");

session_start();

$sql = 'SELECT * FROM produto';
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
    <title>Carrinho</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/carrinho.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
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
    <meta property="og:title" content="carrinho">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body"><header class="u-clearfix u-custom-color-4 u-header u-header" id="sec-4472"><div class="u-clearfix u-sheet u-sheet-1">
        <a href="horti.html" data-page-id="51013756" class="u-image u-logo u-image-1" data-image-width="137" data-image-height="150" title="Horti">
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
    <section class="u-clearfix u-section-1" id="sec-cd01">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-cart u-cart-1">
          <div class="u-cart-products-table u-table u-table-responsive">
            <table class="u-table-entity">
              <colgroup>
                <col width="65%">
                <col width="15%">
                <col width="15%">
                <col width="15%">
              </colgroup>
              <thead class="u-table-header">
                <tr style="height: 46px;">
                  <th class=""><h4><b>Produto</b></h4></th>
                  <th class=""><h4><b>Preço </b></h4></th>
                  <th class=""><h4><b>Quantidade</b></h4></th>
                  <th class=""><h4><b>Subtotal</b> </h4></th>
                </tr>
              </thead>
              <tbody class="u-table-body">


              <?php while ($dados = mysqli_fetch_object($result))  {?>
                    <tr>
                      <td><?php echo $dados->Nome_produto; ?></td>
                      <td><?php echo $dados->Preço; ?></td>
                      <td><?php echo $dados->quantidade; ?></td>
                    </tr>
              <?php } ?>

              </tbody>
            </table>
          </div>
          <div class="u-cart-button-container">
            <a href="javascript:history.back()" class="u-active-none u-btn u-button-style u-cart-continue-shopping u-hover-none u-none u-text-body-color u-btn-1"><span class="u-icon"><svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" xml:space="preserve" class="u-svg-content" viewBox="0 0 443.52 443.52" x="0px" y="0px" style="width: 1em; height: 1em;"><g><g><path d="M143.492,221.863L336.226,29.129c6.663-6.664,6.663-17.468,0-24.132c-6.665-6.662-17.468-6.662-24.132,0l-204.8,204.8    c-6.662,6.664-6.662,17.468,0,24.132l204.8,204.8c6.78,6.548,17.584,6.36,24.132-0.42c6.387-6.614,6.387-17.099,0-23.712    L143.492,221.863z"></path></g></g></svg><img>
            </span>&nbsp;Continuar Comprando
            </a>
            <a href="#" class="u-btn u-button-style u-cart-update u-grey-5">Atualizar Carrinho</a>
          </div>
          <div class="u-cart-blocks-container">
            <div class="u-cart-block u-indent-30">
              <div class="u-cart-block-container u-clearfix">
                <h5 class="u-cart-block-header u-text">Código Promocional</h5>
                <div class="u-cart-block-content u-text">
                  <div class="u-cart-form u-form u-form-1">
                    <form action="#" method="POST" class="u-clearfix u-form-horizontal u-form-spacing-10 u-inner-form" source="custom" name="form">
                      <div class="u-form-group">
                        <label for="name-5861" class="u-form-control-hidden u-label">Código Promocional</label>
                        <input type="text" placeholder="código do cupom" id="name-5861" name="coupon" class="u-border-1 u-border-grey-30 u-input u-input-rectangle" required="">
                      </div>
                      <div class="u-align-left u-form-group u-form-submit">
                        <a href="#" class="u-border-none u-btn u-btn-submit u-button-style u-custom-color-4 u-btn-3">Aplicar Cupom</a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                      <div class="u-form-send-message u-form-send-success">Thank you! Your message has been sent.</div>
                      <div class="u-form-send-error u-form-send-message">Unable to send your message. Please fix errors then try again.</div>
                      <input type="hidden" value="" name="recaptchaResponse">
                    </form>
                  </div>
                </div>
              </div>
            </div>
            <div class="u-cart-block u-cart-totals-block u-indent-30">
              <div class="u-cart-block-container u-clearfix">
                <h5 class="u-cart-block-header u-text">Total do Carrinho</h5>
                <div class="u-align-right u-cart-block-content u-text">
                  <div class="u-cart-totals-table u-table u-table-responsive">
                    <table class="u-table-entity">
                      <colgroup>
                        <col width="50%">
                        <col width="50%">
                      </colgroup>
                      <tbody class="u-align-right u-table-body">
                        <tr style="height: 46px;">
                          <td class="u-align-left u-border-1 u-border-grey-dark-1 u-first-column u-table-cell u-table-cell-17">Subtotal</td>
                          <td class="u-border-1 u-border-grey-dark-1 u-table-cell">$281.00</td>
                        </tr>
                        <tr style="height: 46px;">
                          <td class="u-align-left u-border-1 u-border-grey-dark-1 u-first-column u-table-cell u-table-cell-19">Total</td>
                          <td class="u-border-1 u-border-grey-dark-1 u-table-cell u-table-cell-20">$281.00</td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  <a href="#" class="u-active-custom-color-6 u-border-none u-btn u-button-style u-cart-checkout-btn u-custom-color-4 u-hover-white u-btn-4">Finalizar Compra</a>
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