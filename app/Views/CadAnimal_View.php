<?php $session = session(); ?>
<?php use App\Models\SelectOptions; $so = new SelectOptions(); ?>


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
                
    <?php if ($session->get('Id_Cliente')) { ?>
                <nav class="navbar fixed-top navbar-expand-lg navbar-dark" style="background-color: #0D5CB4;">
                  <div class="container d-flex justify-content-center">
                    <a class="navbar-brand" href="/ProjetoWeb/public/">
                      <img id="logo-cabecalho" src="<?php echo base_url("/IMAGENS/logo.png") ?>">
                    </a>
                    <div class="collapse navbar-collapse" id="navbarNav" style="font-size: 16px;">
                      <div>
                        <ul class="navbar-nav fonte-titulo">
                          <style>
                            .my-dropdown-toggle::after {
                                content: none;
                            }
                          </style>
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
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/#'>Cadastrar animal</a></li>
                        </ul>
                        </li>

                        <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Consulta
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/#'>Consultar cliente</a></li>
                            <li><a class="dropdown-item" href='/ProjetoWeb/public/#'>Consultar serviço</a></li>
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

                        <a class='link' href='/ProjetoWeb/public/logout'>Logout</a>";

                        
                        
                <?php } ?>

                </ul>
            </div>
        </div>

        

      </div>
    </nav>
    
    <!-- Conteúdo da página -->
    <div class="container" style="padding-top: 200px; min-height: 100vh;">

    <?php if ($session->get('Id_Cliente')) { ?>
     
    <div class="d-flex justify-content-between">

<div class="container d-flex justify-content-center">
  <div class="row col-md-6 d-flex justify-content-between align-items-center campos_cad_cli">
    <h2 class="fonte-titulo text-break" style="font-size: 32px; font-weight: bold; margin: 0; padding: 0;">Cadastrar animal</h2><br>

    <div class="col-md-12">
      <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Nome do animal</strong></label>
      <form action="CadA2" method="post">
        
      <input type="text" class="form-control fonte-titulo" name="Nome" id="formGroupExampleInput2" placeholder="Animal">
    </div>

    <div class="col-md-6">
      <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Data da adoção</strong></label>
      <input type="date" class="form-control" name="Data_Adocao" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
    </div>
    
    <div class="col-md-6">
      <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Raça</strong></label>
      
      <input type="text" class="form-control fonte-titulo" name="Raca" id="formGroupExampleInput2" placeholder="Raça">
    </div>

    <div class="col-md-6">
        <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Idade</strong></label>
        <input type="text" class="form-control fonte-titulo" name="Idade" id="formGroupExampleInput2" placeholder="Idade">
    </div>

    <div class="col-md-6">
      <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Tipo</strong></label>
      
      <input type="text" class="form-control fonte-titulo" name="Tipo" id="formGroupExampleInput2" placeholder="Tipo">
    </div>
  
  <div class="col-md-12 d-flex justify-content-start align-items-center" style="margin-top: 36px; margin-bottom: 36px; padding: 0;">
    <button type="submit" value="Confirmar" class="botaoAgendar btn btn-dark" style="background-color: #DF322E; font-weight: bolder; border: #DF322E;">CADASTRAR</button> 
    </form>
  </div>

  </div>
</div>

</div>
<?php } ?>

<?php if ($session->get('Id_Usuario')) { ?>
     
     <div class="d-flex justify-content-between">
 
 <div class="container d-flex justify-content-center">
   <div class="row col-md-6 d-flex justify-content-between align-items-center campos_cad_cli">
     <h2 class="fonte-titulo text-break" style="font-size: 32px; font-weight: bold; margin: 0; padding: 0;">Cadastrar animal</h2><br>

     <div class="col-md-12">
       <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Nome do cliente</strong></label>
       <form action="CadA2" method="post">
         
       <select class='form-select fonte-titulo' name="Usuario" id='inputGroupSelect01' style="min-width: 210px; margin: 0;" >
                      
                      <?php $so->selectTodosClientes(); ?>
                      </select>
                  
     </div>
 
     <div class="col-md-12">
       <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Nome do animal</strong></label>
       
         
       <input type="text" class="form-control fonte-titulo" name="Nome" id="formGroupExampleInput2" placeholder="Animal">
     </div>
 
     <div class="col-md-6">
       <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Data da adoção</strong></label>
       <input type="date" class="form-control" name="Data_Adocao" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
     </div>
     
     <div class="col-md-6">
       <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Raça</strong></label>
       
       <input type="text" class="form-control fonte-titulo" name="Raca" id="formGroupExampleInput2" placeholder="Raça">
     </div>
 
     <div class="col-md-6">
         <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Idade</strong></label>
         <input type="text" class="form-control fonte-titulo" name="Idade" id="formGroupExampleInput2" placeholder="Idade">
     </div>
 
     <div class="col-md-6">
       <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Tipo</strong></label>
       
       <input type="text" class="form-control fonte-titulo" name="Tipo" id="formGroupExampleInput2" placeholder="Tipo">
     </div>
   
   <div class="col-md-12 d-flex justify-content-start align-items-center" style="margin-top: 36px; margin-bottom: 36px; padding: 0;">
     <button type="submit" value="Confirmar" class="botaoAgendar btn btn-dark" style="background-color: #DF322E; font-weight: bolder; border: #DF322E;">CADASTRAR</button> 
     </form>
   </div>
 
   </div>
 </div>
 
 </div>
 <?php } ?>
      
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
    <title>Cadastrar Animal</title>
</head>
<link rel="stylesheet" href="<?php echo base_url("/CSS/Style.css") ?>">

<body>

    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
    </header>
    <main id="background">
        <div id="sec2" class="container"><br>

            <form action="CadA2" method="post">
                Situação:
                <select class="form-control" name="Situacao">
                    <option value="0">Inativo</option>
                    <option value="1">Ativo</option>
                </select> <br>
                <input class="form-control" type="text" name="Nome" placeholder="Nome">
                <input class="form-control" type="text" name="Tipo" placeholder="Tipo">
                <input class="form-control" type="text" name="Raca" placeholder="Raça"> 
                <input class="form-control" type="text" name="Idade" placeholder="Idade"><br>
                <div class="input-group mb-3">
                    <span class="input-group-text" id="inputGroup-sizing-default">Data Adoção</span>
                    <input type="date" class="form-control" name="Data_Adocao" aria-label="Sizing example input"
                        aria-describedby="inputGroup-sizing-default">
                </div>
                <input class="form-control" type="submit" value="Confirmar" class="btn btn-primary">
            </form>
            
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>  -->