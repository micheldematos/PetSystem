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
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0D5CB4;">
      <div class="container d-flex justify-content-center">
          <a class="navbar-brand" href="#"><img id="logo-cabecalho" src="<?php echo base_url("/IMAGENS/logo.png") ?>"></a>
          <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 16px;">
            <div>
                <ul class="navbar-nav fonte-titulo">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Serviços
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Consulta de serviços</a></li>
                            <li><a class="dropdown-item" href="#">Consulta de atendimentos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cliente
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Consulta</a></li>
                            <li><a class="dropdown-item" href="#">Animais</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Usuários
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Consultar usuários</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Horários
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Horários disponíveis</a></li>
                            <li><a class="dropdown-item" href="#">Agendamentos</a></li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Conheça-nos
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="#">Sobre nós</a></li>
                            <li><a class="dropdown-item" href="#">Contato</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>

        <div class="d-flex justify-content-between align-items-center teste">
          <a class="" href="#" style="padding: 0;"><img id="logo-cabecalho-mobile" src="<?php echo base_url("/IMAGENS/logo.png") ?>"></a>
          <form class="d-flex justify-content-center" role="search">
              <button type="button" class="btn btn-outline-light" style="font-weight: bolder; margin-right: 10px; height: 40px;">LOGIN</button>
              <button type="button" class="btn btn-dark" style="background-color: #DF322E; font-weight: bolder; height: 40px;">AGENDAR</button>
          </form>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
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
                                <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput" placeholder="Pesquisar" style="margin-right: 16px; min-width: 256px;" name="NomeCli">
                            </div>
                            <div class="col" style="padding: 0;">
                            <button type="submit" class="iconePesquisar"><img src="<?php echo base_url("/IMAGENS/pesquisar.svg") ?>"></button>
                                </form>
                            </div> 

                            <div class="col" style="padding: 0;">
                                <button type="button" class="btn btn-danger d-flex align-items-center btConCad" style="width: 168px; font-weight: bold; height: 40px;background-color: #DF322E; font-size: 12px; width: 112px; margin-left: 12px;"><a href="/ProjetoWeb/public/cadC" class="fonte-titulo-claro" style="text-decoration: none;" >CADASTRAR CLIENTE</a> </button>
                            </div>

                        </div>

                        <?php use App\Models\SelectOptions; $so = new SelectOptions(); foreach ($ConCli->getResult() as $valor) {?>

                        <div class="col" style="margin-top: 16px;">
                            <a href="" class="fonte-titulo" style="text-decoration: none;"><h2 class="text-break" style="text-decoration: none; font-weight: bolder; margin: 0;">Nome: <?php echo $valor->Nome?></h2></a>
                            <p class="" style="color: #E34C48;">Código: <?php echo $valor->CodCli?></p>
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

