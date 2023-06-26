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
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadC'>Cadastrar cliente</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadTipoServ'>Cadastrar Serviço</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/cadA'>Cadastrar animal</a></li>
                        </ul>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Consulta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/ConCli'>Consultar cliente</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/ConTipoServico'>Consultar serviço</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/#'>Consultar animal</a></li>
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
                <?php } ?>

                </ul>
            </div>
        </div>

        

      </div>
    </nav>
    
    <!-- Conteúdo da página -->
    <div class="container" style="padding-top: 100px; min-height: 100vh;">  
        <div class="d-flexx justify-content-between">
            <div class="container d-flexx justify-content-between">
                <div class="col-md-12 d-flex justify-content-between align-items-center">
                    
                    
                </div>
                <div class="row d-flex justify-content-between align-items-center">

                    <div class="col-md-12 d-flexx justify-content-between align-items-center" >
                        <div class="row d-flex align-items-center">

                            <div class="col">
                                <form action="" method="post">
                                <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput" placeholder="Pesquisar" style="margin-right: 16px; min-width: 256px;" name="Nome">
                            </div>
                            <div class="col" style="padding: 0;">
                            <button type="submit" class="iconePesquisar"><img src="<?php echo base_url("/IMAGENS/pesquisar.svg") ?>"></button>
                                </form>
                            </div> 

                            <div class="col" style="padding: 0;">
                                <button type="button" class="btn btn-danger d-flex align-items-center btConCad" style="width: 168px; font-weight: bold; height: 40px;background-color: #DF322E; font-size: 12px; width: 112px; margin-left: 12px;"><a href="/ProjetoWeb/public/cadTipoServ" class="fonte-titulo-claro" style="text-decoration: none;" >CADASTRAR SERVIÇO</a> </button>
                            </div>

                        </div>

                        <?php use App\Models\SelectOptions; $so = new SelectOptions(); foreach ($ConTipoServico->getResult() as $valor) {?>

                        <div class="col" style="margin-top: 16px;">
                            <a href="/ProjetoWeb/public/AltTipoServico/<?php echo $valor->CodTipoServ?>" class="fonte-titulo" style="text-decoration: none;"><h2 class="text-break" style="text-decoration: none; font-weight: bolder; margin: 0;">Nome: <?php echo $valor->NomeServico?></h2></a>
                            <p class="" style="color: #E34C48;">Código: <?php echo $valor->CodTipoServ?></p>
                        </div>

                        <?php }?>

                        
                        
                    </div>                        
                    
                    
                    
                </div>
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




<!-- <!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Consulta Tipo Serviço</title>
</head>
<link rel="stylesheet" href="<?php echo base_url("/CSS/Style.css") ?>">

<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
        <a class="link" href="/ProjetoWeb/public/ConAdm">Consultas</a>
    </header>
    <main id="background">
        <h2 style="padding-top: 2vh; margin-left: 80vh;"><strong>Consulta Tipo Serviço</strong></h2>
        <div class="container" style="padding-top: 2vh; margin-left: 3vh;">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="Nome" placeholder="Nome Do Serviço"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <input class="btn btn-outline-secondary" type="submit" id="button-addon2"></input>
                </div>
            </form>

            <?php
            use App\Models\SelectOptionsS;
            $so = new SelectOptions();
             foreach ($ConTipoServico->getResult() as $valor) {
                 echo $valor->NomeServico;
                 echo "<br>";
                 echo "Descrição: ", $valor->Descricao;
                 echo "<br>";
                 echo "Preço: ", $valor->Preco;
                 echo "<br>";
                 echo "<a href='/ProjetoWeb/public/AltTipoServico/$valor->CodTipoServ'>Alterar</a>";
                 echo "<br>";
                 echo "<br>";
             }
            ?>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html> -->