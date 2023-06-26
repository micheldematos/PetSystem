<?php $session = session() ?>
<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projeto aula Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

  <link rel="stylesheet" href="../CSS/estilo.css">

</head>

<body>

  <main class="container-fluid" style="background-color: #F5F9FF;">
    <!-- Barra de menu -->

    <!-- ********* Login de usuário *********         -->
    <?php if ($session->get('Tipo') == "0") { ?>
                  <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0D5CB4;">
                  <div class="container d-flex justify-content-center">
                    <a class="navbar-brand" href="/ProjetoWeb/public/">
                      <img id="logo-cabecalho" src="<?php echo base_url("/IMAGENS/logo.png") ?>">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 16px;">
                      <div>

                        <ul class="navbar-nav fonte-titulo">
                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastro
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadTipoServ'>Cadastrar cliente</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadServico'>Cadastrar Serviço</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadOcupacao'>Cadastrar animal</a></li>
                        </ul>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Consulta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadTipoServ'>Consultar cliente</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadServico'>Consultar serviço</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadOcupacao'>Consultar animal</a></li>
                        </ul>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pendentes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadTipoServ'>Agendamento</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadServico'>Horários disponíveis</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadOcupacao'>Atendimento</a></li> 
                        </ul>
                        </li>
                        </ul>

                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center teste">
                      <a class="" href="/ProjetoWeb/public/" style="padding: 0;">
                        <img id="logo-cabecalho-mobile" src="<?php echo base_url("/IMAGENS/logo.png") ?>">
                      </a>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img id="logo-cabecalho" src="<?php echo base_url("/IMAGENS/logo.png") ?>">
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href='/ProjetoWeb/public/AltCliente/<?php echo $session->get('Id_Cliente')?>'>Meu cadastro</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href='/ProjetoWeb/public/logout'>Logout</a>
                          </li>
                        </ul>
                      </li>
                      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                      </button>
                    </div>
                  </div>
                </nav>

                        <a class='link' href='/ProjetoWeb/public/logout'>Logout</a>";

                        
                        
                <?php } ?>

                </ul>
            </div>
        </div>

        

      </div>
    </nav>

    
    
<!-- 
        <div class="d-flex justify-content-between align-items-center teste">
          <a class="" href="#" style="padding: 0;"><img id="logo-cabecalho-mobile" src="../IMAGENS/logo.png"></a>
          <form class="d-flex justify-content-center" role="search">
              <button type="button" class="botaoLogin btn btn-outline-light" style="font-weight: bolder; margin-right: 10px;">LOGIN</button>
              <button type="button" class="botaoAgendar btn btn-dark" style="background-color: #DF322E; font-weight: bolder;">AGENDAR</button>
          </form>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </nav> -->
    
    <!-- Conteúdo da página -->
    <div class="container" style="padding-top: 90px; min-height: 100vh;">
      
      <div class="d-flex justify-content-between">

        <div class="container d-flex justify-content-between">
          <div class="row d-flex justify-content-between campos_cad_cli">
            <h2 class="fonte-titulo" style="font-size: 32px; font-weight: bold; margin: 0; padding: 0;">Cadastro de cliente</h2><br>




            
            <div class="col-md-6">           
                <label for="formGroupExampleInput" class="form-label"><strong class="fonte-titulo">Nome Completo</strong></label>
                <form action="CadastrarC2" method="post">
                <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput" name="Nome" placeholder="Nome Completo">
            </div>

            <div class="col-md-6">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">CPF</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" name="CPF" placeholder="xxx.xxx.xxx-xx">
            </div>

            <div class="col-md-3">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">CEP</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" name="CEP" placeholder="xxxxx-xx">
            </div>

            <div class="col-md-6">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Cidade</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" name="Cidade" placeholder="Cidade">
            </div>
            
            <div class="col-md-3">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Celular</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" name="Celular" placeholder="(xx) xxxxx-xxxx">
            </div>

            <div class="col-md-3">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Estado</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" name="Estado" placeholder="Estado">
            </div>

            <div class="col-md-6">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Logradouro</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" name="Logradouro" placeholder="Rua, Avenida, Bloco, Etc.">
            </div>
            
            <div class="col-md-3">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Telefone Residencial</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" name="FoneRes" placeholder="(xx) xxxxx-xxxx">
            </div>

            
            <div class="col-md-3">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Número</strong></label>
              <input type="text" name="Numero" class="form-control fonte-titulo" id="formGroupExampleInput2" placeholder="Número">
            </div>

            
            <div class="col-md-6">
              <label for="formGroupExampleInput2"  class="form-label"><strong class="fonte-titulo">Complemento</strong></label>
              <input type="text" name="Complemento" class="form-control fonte-titulo" id="formGroupExampleInput2" placeholder="Complemento">
            </div>
            
            
            <div class="col-md-3">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Telefone comercial</strong></label>
              <input type="text" name="FoneCom" class="form-control fonte-titulo" id="formGroupExampleInput2" placeholder="(xx) xxxxx-xxxx">
            </div>

            
            <div class="col-md-6">                        
              <label for="formGroupExampleInput" class="form-label"><strong class="fonte-titulo">E-mail</strong></label>
              <input type="text" name="E_mail" class="form-control fonte-titulo" id="formGroupExampleInput" placeholder="E-mail">
          </div>

          <div class="col-md-6">                        
            <label for="formGroupExampleInput" class="form-label"><strong class="fonte-titulo">Senha</strong></label>
            <input type="text" name="Senha" class="form-control fonte-titulo" id="formGroupExampleInput" placeholder="Senha">
            <i style="font-size: 13px; color: #DF322E;">As senhas devem ter pelo menos 6 caracteres</i>
          </div>
          
          <div class="col-md-12 d-flex justify-content-end align-items-center" style="margin-top: 36px; margin-bottom: 36px;">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
              <label class="form-check-label" for="flexCheckDefault" style="font-size: 13px; color: #DF322E; margin-right: 10px;">Aceite a Política de Privacidade do Pet System</label>
            </div>
            <button type="submit" class="btn btn-danger fonte-titulo-claro" style="width: 168px; font-weight: bold; height: 56px;background-color: #DF322E;">CADASTRE-SE</button> 
          </div>
          </form>

          </div>
        </div>

      </div>
    </div>
    
    <!-- Rodapé da página -->
    <div class="row">
    
      <div class="container" style="background-color: #0D5CB4;">
        <div class="row">

          <div class="col d-flex align-items-center justify-content-center" style="margin-top: 32px;">
            <img src="../IMAGENS/logo.png" class="d-block" style="width: 200px;">
          </div>

          <div class="col col_rodape1">
            <h5 class="fonte-titulo" style="font-weight: bolder; color: white;">Contatos</h5>
            <p class="fonte-titulo"><img src="../IMAGENS/telefone.svg"> (19) 9999-9999</p>
            <p class="fonte-titulo"><img src="../IMAGENS/whatsapp.svg"> (19) 9999-9999</p>
            <p class="fonte-titulo"><img src="../IMAGENS/email.svg"> contato@bobbarbershop.com.br</p>
          </div>

          <div class="col col_rodape1">
            <h5 class="fonte-titulo" style="font-weight: bolder; color: white;">Localização</h5>
            <p><img src="../IMAGENS/endereco.svg">  Rua 10, Av. 12, Centro - Rio Claro - SP</p>
            <h5 class="fonte-titulo" style="font-weight: bolder; color: white;">Redes Sociais</h5>
            <p><img src="../IMAGENS/facebook.svg"> <img src="../IMAGENS/instagram.svg"></p>
          </div>

          <div class="col col_rodape1">
            <div class="row">
              <div class="col">
                <ul style="list-style: none;">
                  <li><a href="" style="text-decoration: none; font-weight: bolder; color: white;" class="fonte-titulo">Cliente</a></li>
                  <li><a href="" style="text-decoration: none; font-weight: bolder; color: white;" class="fonte-titulo" >Animal</a></li>
                  <li><a href="" style="text-decoration: none; font-weight: bolder; color: white;" class="fonte-titulo" >Usuário</a></li>
                  <li><a href="" style="text-decoration: none; font-weight: bolder; color: white;" class="fonte-titulo" >Serviços</a></li>
                </ul>
              </div>
    
              <div class="col ">
              <ul style="list-style: none;">
                <li><a href="" style="text-decoration: none; font-weight: bolder; color: white;" class="fonte-titulo">Horários disponíveis</a></li>
                <li><a href="" style="text-decoration: none; font-weight: bolder; color: white;" class="fonte-titulo" >Atendimento</a></li>
                <li><a href="" style="text-decoration: none; font-weight: bolder; color: white;" class="fonte-titulo" >Agendamento</a></li>
                <li><a href="" style="text-decoration: none; font-weight: bolder; color: white;" class="fonte-titulo" >Sobre nós</a></li>
              </ul>
              </div>
            </div>
          </div>
          
        
          <div class="row">
          <p class="text-center" style="color: white; font-weight: 100;">© PET SYSTEM 2023. TODOS OS DIREITOS RESERVADOS</p>
          </div>
          
        </div>
      </div>
    </div>
    
  </main>
  
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
    crossorigin="anonymous"></script>
</body>

</html>
<!-- <html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastrar Cliente</title>
</head>
<link rel="stylesheet" href="../CSS/Style.css">

<body>
    <main id="background">
        <header class="topo">
            <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
            <a class='link' href='/ProjetoWeb/public/LoginFC'>Login </a>
        </header>
        <div id="sec1" class="container">
            
            <form action="CadastrarC2" method="post">
                <h1>Cadastrar Cliente</h1>
                <label class="form-label">Situação:</label>
                <select id="Situacao" class="form-control">
                    <option value="0">Inativo</option>
                    <option value="1">Ativo</option>
                </select><br>

                <input class="form-control" type="text" name="Nome" placeholder="Nome">
                <input class="form-control" type="text" name="Senha" placeholder="Senha">
                <input class="form-control" type="text" name="E_mail" placeholder="E-mail"><br>
                <input class="form-control" type="text" name="CPF" placeholder="CPF">
                <input class="form-control" type="text" name="FoneRes" placeholder="Fone Residencial">
                <input class="form-control" type="text" name="FoneCom" placeholder="Fone Comercial"><br>
                <input class="form-control" type="text" name="Celular" placeholder="Celular">
                <input class="form-control" type="text" name="Cidade" placeholder="Cidade">
                <input class="form-control" type="number" name="Numero" placeholder="Número"><br>
                <input class="form-control" type="text" name="Estado" placeholder="Estado">
                <input class="form-control" type="text" name="Complemento" placeholder="Complemento">
                <input class="form-control" type="text" name="CEP" placeholder="CEP"><br>
                <input class="form-control" type="text" name="Logradouro" placeholder="Logradouro">
                <input class="form-control" type="submit" value="Confirmar" class="btn btn-primary"><br>
                Se não é cliente mas um usário do sistema clique <a href="/ProjetoWeb/public/cadU">Aqui</a> para
                cadastrar
            </form>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html> -->