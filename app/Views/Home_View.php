<?php $session = session(); ?>

<!doctype html>
<html lang="pt-br">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Projeto aula Bootstrap</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <link rel="stylesheet" href="<?php echo base_url("/CSS/estilo.css") ?>">

</head>

<body>

  <main class="container-fluid" style="background-color: #F5F9FF;">
    <!-- Barra de menu -->
    <!-- <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0D5CB4;">
      <div class="container d-flex justify-content-center">
          <a class="navbar-brand" href="/ProjetoWeb/public/"><img id="logo-cabecalho" src="<?php echo base_url("/IMAGENS/logo.png") ?>"></a>
          <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 16px;">
            <div>
                <ul class="navbar-nav fonte-titulo"> -->
                    

                <!-- ********* Sem login ********* -->
                <?php if (!$session->get('Id_Cliente') and !$session->get('Id_Usuario')) { ?>
                        <a class='link' href='/ProjetoWeb/public/cadC'>Cadastrar</a> &nbsp;
                        <a class='link' href='/ProjetoWeb/public/LoginFC'>Login </a> &nbsp;";
                <?php } ?>

                
                <!-- ********* Login de cliente ********* -->
                <?php if ($session->get('Id_Cliente')) { ?>
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
                              Animais
                            </a>
                            <ul class="dropdown-menu">
                              <li>
                                <a class="dropdown-item" href='/ProjetoWeb/public/cadA'>Cadastrar animal</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href='/ProjetoWeb/public/ConAnimalCli'>Consultar animais</a>
                              </li>
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
                            <a class="dropdown-item" href='/ProjetoWeb/public/'>Meu cadastro</a>
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
                <?php } ?>

                
                    
    <!-- ********* Login de administrador *********         -->
                
                <?php if ($session->get('Tipo') == "1") { ?>

                        <a class='link' href='/ProjetoWeb/public/logout'>Logout</a>";

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastro
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadTipoServ'>Tipo de Serviço</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadServico'>Serviço</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadOcupacao'> Ocupação</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadAtendimento'> Atendimento</a></li>
                        </ul>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Consulta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/ConCli'> Cliente</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/ConAnimal'> Animal</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/ConUsuario'> Usuário</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/ConOcupacao'> Ocupação</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/ConTipoServico'> Serviço</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/ConServico'> Atribuição</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/ConAdm'> Horários disponíveis</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/ConAdm'> Agendamento</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/ConAtendimento'> Atendimento</a></li>
                        </ul>
                        </li>



        <!-- ********* Login de usuário *********         -->
                <?php } if ($session->get('Tipo') == "0") { ?>
                        <a class='link' href='/ProjetoWeb/public/logout'>Logout</a>";

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastro
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadTipoServ'>Tipo de Serviço</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadServico'>Serviço</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadOcupacao'> Ocupação</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadAtendimento'> Atendimento</a></li>
                        </ul>
                        </li>
                        
                <?php } ?>

                </ul>
            </div>
        </div>

        

      </div>
    </nav>
    
    <!-- Conteúdo da página -->
    <div class="container" style="padding-top: 200px; min-height: 100vh;">
      
      <div class="d-flex justify-content-between">

        <div class="container d-flex justify-content-center">
        </div>

      </div>
    </div>
    
    <!-- Rodapé da página -->
    <div class="row">
    
      <div class="container" style="background-color: #0D5CB4;">
        <div class="row">

          <div class="col d-flex align-items-center justify-content-center" style="margin-top: 32px;">
            <img src="<?php echo base_url("/IMAGENS/logo.png") ?>" class="d-block" style="width: 200px;">
          </div>

          <div class="col col_rodape1">
            <h5 class="fonte-titulo" style="font-weight: bolder; color: white;">Contatos</h5>
            <p class="fonte-titulo"><img src="<?php echo base_url("/IMAGENS/telefone.svg") ?>"> (19) 9999-9999</p>
            <p class="fonte-titulo"><img src="<?php echo base_url("/IMAGENS/whatsapp.svg") ?>"> (19) 9999-9999</p>
            <p class="fonte-titulo"><img src="<?php echo base_url("/IMAGENS/email.svg") ?>"> contato@bobbarbershop.com.br</p>
          </div>

          <div class="col col_rodape1">
            <h5 class="fonte-titulo" style="font-weight: bolder; color: white;">Localização</h5>
            <p><img src="<?php echo base_url("/IMAGENS/endereco.svg") ?>">  Rua 10, Av. 12, Centro - Rio Claro - SP</p>
            <h5 class="fonte-titulo" style="font-weight: bolder; color: white;">Redes Sociais</h5>
            <p><img src="<?php echo base_url("/IMAGENS/facebook.svg") ?>"> <img src="<?php echo base_url("/IMAGENS/instagram.svg") ?>"></p>
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

<!-- <style>
    * {
        margin: 0px;
        background-color: rgb(230, 223, 223);
    }

    .topo {
        text-align: center;
        background-color: black;
        height: 7vh;
    }

    .link {
        color: rgb(177, 190, 202);
        font-family: 'Segoe UI';
        font-size: 18px;
        text-decoration: none;
        background-color: black;
    }
</style> -->

<!-- <a href='/app/Controllers/Dados.php'></a> -->

<!-- <div class="container" style="padding-top: 200px; min-height: 100vh;">
        
        <?php if (!$session->get('Id_Cliente') and !$session->get('Id_Usuario')) { ?>
                    <a class='link' href='/ProjetoWeb/public/cadC'>Cadastrar</a> &nbsp;
                  <a class='link' href='/ProjetoWeb/public/LoginFC'>Login </a> &nbsp;";
        <?php } ?>
        <?php if ($session->get('Id_Cliente')) { ?>
            <a class='link' href='/ProjetoWeb/public/cadA'> Animal</a> &nbsp;
                  <a class='link' href='/ProjetoWeb/public/logout'>Logout</a>";
        <?php } ?>
        <?php if ($session->get('Tipo') == "1") { ?>
                    <a class='link' href='/ProjetoWeb/public/cadTipoServ'>Tipo de Serviço</a> &nbsp;
                  <a class='link' href='/ProjetoWeb/public/cadServico'>Serviço</a> &nbsp;
                  <a class='link' href='/ProjetoWeb/public/cadOcupacao'> Ocupação</a> &nbsp;
                  <a class='link' href='/ProjetoWeb/public/cadAtendimento'> Atendimento</a> &nbsp;
                  <a class='link' href='/ProjetoWeb/public/ConAdm'> Consultas</a> &nbsp;
                  <a class='link' href='/ProjetoWeb/public/logout'>Logout</a>";
        <?php } if ($session->get('Tipo') == "0") { ?>
                <a class='link' href='/ProjetoWeb/public/cadTipoServ'>Tipo de Serviço</a> &nbsp;
                  <a class='link' href='/ProjetoWeb/public/cadServico'>Serviço</a> &nbsp;
                  <a class='link' href='/ProjetoWeb/public/cadOcupacao'> Ocupação</a> &nbsp;
                  <a class='link' href='/ProjetoWeb/public/cadAtendimento'> Atendimento</a> &nbsp;
                  <a class='link' href='/ProjetoWeb/public/logout'>Logout</a>";
        <?php } ?> -->