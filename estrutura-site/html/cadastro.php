<!DOCTYPE html>
<html style="font-size: 16px;" lang="pt-BR">
  <head> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <meta name="keywords" content="INTUITIVE">
    <meta name="description" content="">
    <meta name="page_type" content="np-template-header-footer-from-plugin">
    <title>Cadastro</title>
    <link rel="stylesheet" href="../css/nicepage.css" media="screen">
    <link rel="stylesheet" href="../css/cadastro.css" media="screen">
    <script class="u-script" type="text/javascript" src="../js/jquery.js" defer=""></script>
    <script class="u-script" type="text/javascript" src="../js/nicepage.js" defer=""></script>
    <script src="../js/js.js"></script>
    <meta name="generator" content="Nicepage 3.28.3, nicepage.com">
    <link id="u-theme-google-font" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i|Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i">
    <link rel="shortcut icon" href="../images/favico.png" type="image/x-icon">
    
    <meta name="theme-color" content="#456ee8">
    <meta property="og:title" content="Cadastro">
    <meta property="og:description" content="">
    <meta property="og:type" content="website">
  </head>
  <body class="u-body">
    <section class="u-clearfix u-palette-1-base u-valign-middle u-section-1" id="sec-aea9">
      <div class="u-clearfix u-expanded-width u-layout-wrap u-layout-wrap-1">
        <div class="u-layout">
          <div class="u-layout-row">
            <div class="u-align-left u-container-style u-custom-color-4 u-layout-cell u-size-30 u-layout-cell-1">
              <div class="u-container-layout u-container-layout-1">
                <div class="u-border-3 u-border-custom-color-2 u-line u-line-vertical u-line-1"></div>
                <img class="u-image u-image-default u-preserve-proportions u-image-1" src="../images/white-logo-lg.png" alt="" data-image-width="200" data-image-height="216">
              </div>
            </div>
            <div class="u-container-style u-custom-color-4 u-layout-cell u-size-30 u-layout-cell-2">
              <div class="u-container-layout u-container-layout-2">
                <h2 class="u-align-center u-text u-text-default u-text-1">Quem Somos?</h2>
                <p class="u-align-center u-text u-text-2">A Lotus é uma plataforma de Supermercado totalmente online, onde o usuário consegue comprar tudo que precisa sem precisar sair de sua casa, tudo pela palma da mão, evitando filas e burocracias.</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-2 u-section-2" id="sec-7111">
      <div class="u-clearfix u-sheet u-sheet-1">
        <h2 class="u-text u-text-1">Já possui uma conta? <a href="index.html" class="u-active-none u-border-none u-btn u-button-link u-button-style u-hover-none u-none u-text-active-custom-color-5 u-text-custom-color-4 u-text-hover-custom-color-6 u-btn-1">Clique aqui</a>&nbsp;para entrar
        </h2>
        <h2 class="u-text u-text-2">Caso não tenha crie a sua agora mesmo!</h2>
      </div>
    </section>
    <section class="u-align-center u-clearfix u-custom-color-2 u-section-3" id="carousel_69ce">
      <div class="u-clearfix u-sheet u-sheet-1">
        <div class="u-clearfix u-gutter-40 u-layout-wrap u-layout-wrap-1">
          <div class="u-layout">
            <div class="u-layout-row">
              <div class="u-container-style u-layout-cell u-right-cell u-size-60 u-layout-cell-1">
                <div class="u-container-layout u-container-layout-1">
                  <img class="u-image u-image-default u-preserve-proportions u-image-1" src="../images/green-logo.png" alt="" data-image-width="76" data-image-height="51">
                  <div class="u-expanded-width u-form u-form-1">
      <!--Começa---><form action="../php/cadastra_Usu.php" method="POST" style="padding: 0;" source="custom" name="form_cadastro">
                      <div class="u-form-group u-form-name">
                        <label for="name-daf4" class="u-label u-label-1">* Nome Completo</label>
                        <input type="text" placeholder="Digite seu nome" id="name-daf4" name="nome" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required>
                      </div>
                      <div class="u-form-date u-form-group u-form-group-2">
                        <label for="date-9799" class="u-label u-label-2">* Data de Nascimento</label>
                        <label for="" class="info_inp"> (apenas números) </label>
                        <input type="date" placeholder="MM/DD/YYYY" id="date-9799" name="data" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required>
                      </div>
                      <div class="u-form-group u-form-name u-form-group-3">
                        <label for="name-2f40" class="u-label u-label-3">* CPF</label>
                        <label for="" class="info_inp"> (apenas números) </label>
                        <input type="text" placeholder="123.456.789.-01" id="name-2f40" name="cpf" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" maxlength="14" onkeyup="mascara(this, mcpf);" required>
                      </div>
                      <div class="u-form-group u-form-select u-form-group-4">
                        <label for="select-b405" class="u-label u-label-4">* Sexo</label>
                        <div class="u-form-select-wrapper">
                          <select id="select-b405" name="sexo" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required>
                            <option disable selected value> -- </option>
                            <option value="Masculino">Masculino</option>
                            <option value="Feminino">Feminino</option>
                          </select>
                          <svg xmlns="http://www.w3.org/2000/svg" width="14" height="12" version="1" class="u-caret"><path fill="currentColor" d="M4 8L0 4h8z"></path></svg>
                        </div>
                      </div>
                      <div class="u-form-group u-form-phone u-form-group-5">
                        <label for="phone-90c2" class="u-label u-label-5">* Telefone</label> 
                        <label for="" class="info_inp"> (apenas números) </label>
                        <input type="tel" placeholder="Informe seu telefone" id="phone-90c2" name="telefone" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" maxlength="15" onkeyup="mascara(this, mtel);" required>
                      </div>
                      <div class="u-form-group u-form-group-6">
                        <label for="text-37f4" class="u-label u-label-6">* E-mail</label>
                        <input type="email" placeholder="Digite seu e-mail" id="text-37f4" name="email" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required>
                      </div>
                      <div class="u-form-group u-form-group-7">
                        <label for="text-c117" class="u-label u-label-7">* Senha</label> 
                        <label for="" class="info_inp"> (a senha deve conter no mínimo 8 caracteres) </label>
                        <input type="password" placeholder="********" id="text-c117" name="senha" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required>
                      </div>
                      <div class="u-form-group u-form-group-8">
                        <label for="text-bf69" class="u-label u-label-8">* Confirme sua senha</label>
                        <input type="password" placeholder="********" id="text-bf69" name="confirmaSenha" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required>
                      </div>
                      <div class="u-form-group u-form-group-9">
                        <label for="text-3a1f" class="u-label u-label-9">* CEP</label>
                        <label for="" class="info_inp"> (apenas números) </label>
                        <input type="text" placeholder="Digite seu CEP" id="text-3a1f" name="cep" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" maxlength="9" onkeyup="mascara(this, mcep);" required>
                      </div>
                      <div class="u-form-address u-form-group u-form-group-10">
                        <label for="address-259a" class="u-label u-label-10">* Logradouro</label>
                        <input type="text" placeholder="Digite seu endereço" id="address-259a" name="endereco" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="">
                      </div>
                      <div class="u-form-group u-form-group-11">
                        <label for="text-80d6" class="u-label u-label-11">* Número da residência</label>
                        <input type="text" placeholder="Digite o número da residência" id="text-80d6" name="numeroCasa" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="required">
                        <label for="" class="info_inp"> Ex: 123, 1A </label>
                      </div>
                      <div class="u-form-group u-form-group-12">
                        <label for="text-20a8" class="u-label u-label-12">Complemento</label>
                        <input type="text" placeholder="Informe o complemento" id="text-20a8" name="complemento" class="u-border-2 u-border-black u-border-no-left u-border-no-right u-border-no-top u-input u-input-rectangle u-white" required="required">
                        <label for="" class="info_inp"> Ex: Casa dos fundos, apartamento </label>
                      </div>
                      <div class="u-form-agree u-form-group u-form-group-13">
                        <input type="checkbox" id="agree-f183" name="politicasUso" class="u-agree-checkbox" required="">
                        <label for="agree-f183" class="u-label u-label-13">* Declaro que Li e aceito as politicas de privacidade e termos de uso</label>
                      </div>
                      <div class="u-form-checkbox u-form-group u-form-group-14">
                        <input type="checkbox" id="checkbox-f833" name="promoEmail" value="On">
                        <label for="checkbox-f833" class="u-label u-label-14">Desejo receber ofertas e promoções no meu e-mail</label>
                      </div>
                      <div class="u-align-center u-form-group u-form-submit">
                        <a href="3" class="u-border-none u-btn u-btn-round u-btn-submit u-button-style u-custom-color-4 u-hover-custom-color-5 u-radius-12 u-btn-1">CADASTRAR<br>
                        </a>
                        <input type="submit" value="submit" class="u-form-control-hidden">
                      </div>
                    </form>
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