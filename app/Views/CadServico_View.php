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
    
    <!-- ********* Sem login ********* -->
    <?php if (!$session->get('Id_Cliente') and !$session->get('Id_Usuario')) { ?>
                  <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0D5CB4;">
      <div class="container d-flex justify-content-center">
          <a class="navbar-brand" href="#"><img id="logo-cabecalho" src="../IMAGENS/logo.png"></a>
          <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 16px;">
            
        </div>

        <div class="d-flex justify-content-between align-items-center teste">
          <a class="" href="#" style="padding: 0;"><img id="logo-cabecalho-mobile" src="../IMAGENS/logo.png"></a>
          <form class="d-flex justify-content-center" role="search">
              <button type="button" class="botaoLogin btn btn-outline-light" style="font-weight: bolder; margin-right: 10px;"><a class='link' href='/PetSystem/public/LoginFC' style="text-decoration: none; color: #F5F9FF;">LOGIN</a></button>
              <button type="button" class="botaoAgendar btn btn-dark" style="background-color: #DF322E; font-weight: bolder;"><a class='link' href='/PetSystem/public/cadC' style="text-decoration: none; color: #F5F9FF;">CADASTRAR</a></button>
          </form>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </nav>
                <?php } ?>

                
                <!-- ********* Login de cliente ********* -->
                <?php if ($session->get('Id_Cliente')) { ?>
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0D5CB4;">
                  <div class="container d-flex justify-content-center">
                    <a class="navbar-brand" href="/PetSystem/public/">
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
                                <a class="dropdown-item" href='/PetSystem/public/cadA'>Cadastrar animal</a>
                              </li>
                              <li>
                                <a class="dropdown-item" href='/PetSystem/public/ConAnimalCli'>Consultar animais</a>
                              </li>
                            </ul>
                          </li>
                        </ul>
                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center teste">
                      <a class="" href="/PetSystem/public/" style="padding: 0;">
                        <img id="logo-cabecalho-mobile" src="<?php echo base_url("/IMAGENS/logo.png") ?>">
                      </a>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                          <img id="" style="height: 35px" src="<?php echo base_url("/IMAGENS/usuario.svg") ?>">
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href='/PetSystem/public/AltCliente/<?php echo $session->get('Id_Cliente')?>'>Meu cadastro</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href='/PetSystem/public/logout'>Logout</a>
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

                  <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0D5CB4;">
                  <div class="container d-flex justify-content-center">
                    <a class="navbar-brand" href="/PetSystem/public/">
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
                            <li><a class="dropdown-item" href='/PetSystem/public/cadC'>Cadastrar cliente</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/cadTipoServ'>Cadastrar Serviço</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/cadA'>Cadastrar animal</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/cadU'>Cadastrar Usuário</a></li> 
                        </ul>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Consulta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='/PetSystem/public/ConCli'>Consultar cliente</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/ConTipoServico'>Consultar serviço</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/ConAnimal'>Consultar animal</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/ConUsuario'>Consultar usuário</a></li>
                        </ul>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pendentes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='/PetSystem/public/cadTipoServ'>Agendamento</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/cadServico'>Horários disponíveis</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/cadOcupacao'>Atendimento</a></li> 
                        </ul>
                        </li>
                        </ul>

                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center teste">
                      <a class="" href="/PetSystem/public/" style="padding: 0;">
                        <img id="logo-cabecalho-mobile" src="<?php echo base_url("/IMAGENS/logo.png") ?>">
                      </a>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img id="" style="height: 35px" src="<?php echo base_url("/IMAGENS/usuario.svg") ?>">
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href='/PetSystem/public/AltCliente/<?php echo $session->get('Id_Cliente')?>'>Meu cadastro</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href='/PetSystem/public/logout'>Logout</a>
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

                <!-- ********* Login de usuário *********         -->
                <?php if ($session->get('Tipo') == "0") { ?>
                  <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0D5CB4;">
                  <div class="container d-flex justify-content-center">
                    <a class="navbar-brand" href="/PetSystem/public/">
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
                            <li><a class="dropdown-item" href='/PetSystem/public/cadC'>Cadastrar cliente</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/cadTipoServ'>Cadastrar Serviço</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/cadA'>Cadastrar animal</a></li>
                        </ul>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Consulta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='/PetSystem/public/ConCli'>Consultar cliente</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/ConTipoServico'>Consultar serviço</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/ConAnimal'>Consultar animal</a></li>
                        </ul>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Pendentes
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='/PetSystem/public/cadTipoServ'>Agendamento</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/cadServico'>Horários disponíveis</a></li>
                            <li><a class="dropdown-item" href='/PetSystem/public/cadOcupacao'>Atendimento</a></li> 
                        </ul>
                        </li>
                        </ul>

                      </div>
                    </div>
                    <div class="d-flex justify-content-between align-items-center teste">
                      <a class="" href="/PetSystem/public/" style="padding: 0;">
                        <img id="logo-cabecalho-mobile" src="<?php echo base_url("/IMAGENS/logo.png") ?>">
                      </a>
                      <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img id="" style="height: 35px" src="<?php echo base_url("/IMAGENS/usuario.svg") ?>">
                        </a>
                        <ul class="dropdown-menu">
                          <li>
                            <a class="dropdown-item" href='/PetSystem/public/AltCliente/<?php echo $session->get('Id_Cliente')?>'>Meu cadastro</a>
                          </li>
                          <li>
                            <a class="dropdown-item" href='/PetSystem/public/logout'>Logout</a>
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
    


    <!-- Conteúdo da página -->
    <div class="container" style="padding-top: 200px; min-height: 100vh;">
      
    <div class="d-flex justify-content-between">
 
 <div class="container d-flex justify-content-center">
   <div class="row col-md-6 d-flex justify-content-between align-items-center campos_cad_cli">
     <h2 class="fonte-titulo text-break" style="font-size: 32px; font-weight: bold; margin: 0; padding: 0;">Cadastrar atribuição</h2><br>

     <div class="col-md-12">

        <?php use App\Models\SelectOptions;foreach($ConUsuario->getResult() as $valor){?>
       <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Nome do usuário</strong></label>
       <form action='/PetSystem/public/cadServico' method='post'>
       <select class="form-select" id="inputGroupSelect01" name="CodUsuario">
                    <option value="<?php echo $valor->CodUsuario ?>"><?php echo $valor->Nome ?></option>
                </select>

       
         
       
                  
     </div>
 
     <div class="col-md-12">
        
       <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Serviço</strong></label>
       
         
       <select class='form-select' name='CodTipoServ' id='inputGroupSelect01'>;";
            <?php $so = new SelectOptions(); $so->SelectTipoServ() ?>
                        </select>
     </div>
 
     <div class="col-md-12">
       <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Descrição</strong></label>
       <input type="text" class="form-control fonte-titulo" name='Descricao' id="formGroupExampleInput2" placeholder="Descrição">
       
     </div>
     
     
   
   <div class="col-md-12 d-flex justify-content-start align-items-center" style="margin-top: 36px; margin-bottom: 36px; padding: 0;">
     <button type="submit" value="Confirmar" class="botaoAgendar btn btn-dark" style="background-color: #DF322E; font-weight: bolder; border: #DF322E;">CADASTRAR</button> 
     </form>

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

<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastrar Serviço</title>
</head>
<link rel="stylesheet" href="<?php echo base_url("/CSS/estilo.css") ?>">

<body>
    <header class="topo">
        <a class="link" href="/PetSystem/public">Home</a> &nbsp;
        <a class='link' href='/PetSystem/public/cadTipoServ'>Cadastrar Tipo de Serviço</a> &nbsp;
        <a class='link' href='/PetSystem/public/cadOcupacao'>Ocupação Usuário</a> &nbsp;
        <a class='link' href='/PetSystem/public/cadAtendimento'> Atendimento</a> &nbsp;
        <a class="link" href="/PetSystem/public/logout">Logout</a> 
    </header>

    <div class="container-fluid"><br>
        <?php
        use App\Models\SelectOptionss;

        $session = session();
        if ($session->get("Tipo") == "1") {
            echo "
                <form action='' method='post'>
                    <div class='input-group mb-3'>
                            <label class='input-group-text' for='inputGroupSelect01'>Tipo de Serviço</label>
                            <select class='form-select' name='CodTipoServ' id='inputGroupSelect01'>;";
                                // $so = new SelectOptions();
                                // $so->SelectTipoServ();
            echo "
                            </select>


                        <div class='input-group mb-3'>
                            <label class='input-group-text' for='inputGroupSelect01'> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Usuário&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
                            <select class='form-select' name='CodUsuario' id='inputGroupSelect01'>;";
                                // $so = new SelectOptions();
                                // $so->SelectUsuário();

            echo "
                            </select>
                        </div>


                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descrição&nbsp;&nbsp;&nbsp;</span>
                            <input type='text' class='form-control' name='Descricao' aria-label='Sizing example input'
                                aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <input class='form-control' type='submit' value='Confirmar' class='btn btn-primary'>
                </form>";
        } else {
            echo "
            <form action='' method='post'>
                <div class='input-group mb-3'>
                        <label class='input-group-text' for='inputGroupSelect01'>Tipo de Serviço</label>
                        <select class='form-select' name='CodTipoServ' id='inputGroupSelect01'>;";
            // $so = new SelectOptions();
            // $so->SelectTipoServ();

            echo "
                        </select>

                    <div class='input-group mb-3'>
                        <span class='input-group-text' id='inputGroup-sizing-default'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Descrição&nbsp;&nbsp;&nbsp;</span>
                        <input type='text' class='form-control' name='Descricao' aria-label='Sizing example input'
                            aria-describedby='inputGroup-sizing-default'>
                    </div>
                    <input class='form-control' type='submit' value='Confirmar' class='btn btn-primary'>
                </form>";
        }
        ?>

    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html> -->