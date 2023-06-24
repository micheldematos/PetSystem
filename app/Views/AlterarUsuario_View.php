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
              <button type="button" class="botaoLogin btn btn-outline-light" style="font-weight: bolder; margin-right: 10px;">LOGIN</button>
              <button type="button" class="botaoAgendar btn btn-dark" style="background-color: #DF322E; font-weight: bolder;">AGENDAR</button>
          </form>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button>
        </div>
      </div>
    </nav>
    
    <!-- Conteúdo da página -->
    <div class="container" style="padding-top: 150px; min-height: 100vh;">
      
      <div class="d-flex justify-content-between">

        <div class="container d-flex justify-content-between">
          <div class="row d-flex justify-content-between campos_cad_cli">
          <?php use App\Models\SelectOptions; foreach($ConUsuario->getResult() as $valor){$so = new SelectOptions(); ?>
            <h2 class="fonte-titulo text-break" style="font-size: 32px; font-weight: bold; margin: 0; padding: 0;"><?php echo $valor->Nome?></h2><br>
            
            <div class="col-md-6">                        
                <label for="formGroupExampleInput" class="form-label"><strong class="fonte-titulo">Nome Completo</strong></label>
                <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput" name='Nome' value='<?php echo $valor->Nome ?>'>
            </div>

            <div class="col-md-6">
              <div class="row d-flex align-items-center">
                  <div class="col-md-12">
                      <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Atribuição</strong></label>
                  </div>
                  <div class="col" style="margin: 0;">
                      <input type="text" class="form-control fonte-titulo" style="min-width: 210px; margin: 0;" id="formGroupExampleInput2" placeholder="Usuários">
                  </div>
                  <div class="col" style="margin: 0;">
                    <a href=""><img src="../IMAGENS/adicionar.svg" alt=""></a>
                    <a href=""><img src="../IMAGENS/lixeira.svg" alt=""></a>
                  </div>
                </div> 
            </div>

            <!-- Aquiii -->
            
            <div class="col-md-6">
                <label for="formGroupExampleInput2" class="form-label">
                    <strong class="fonte-titulo">Função atual: <?php $so->selectFuncaoUsuario($valor->Funcao);?></strong>
                </label>
                <select class="form-select" id="inputGroupSelect01" name="Funcao">
                    <option value="1">Doutor</option>
                    <option value="2">Tosador</option>
                    <option value="3">Groomer</option>
                    <option value="4">Atendente</option>
                    <option value="5">Gestor</option>
                </select>
            </div>

            <div class="col-md-6">
              <div class="row d-flex align-items-center">
                  <div class="col-md-12">
                      <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Ocupação</strong></label>
                  </div>
                  <div class="col" style="margin: 0;">
                      <input type="text" class="form-control fonte-titulo" style="min-width: 210px; margin: 0;" id="formGroupExampleInput2" placeholder="Animais">
                  </div>
                  <div class="col" style="margin: 0;">
                    <a href=""><img src="../IMAGENS/adicionar.svg" alt=""></a>
                    <a href=""><img src="../IMAGENS/lixeira.svg" alt=""></a>
                  </div>
                </div> 
            </div>



            <!-- <div class="col-md-6">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Tipo</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" placeholder="Administrador">
            </div> -->

            

            

            <div class="col-md-3">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">CPF</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" placeholder="xxx.xxx.xxx-xx">
            </div>
            
            <div class="col-md-3">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Celular</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" placeholder="(xx)xxxxx-xxxx">
            </div>

            <div class="col-md-6">
                <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Data de admissão</strong></label>
                <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" placeholder="xx/xx/xxxx">
            </div>

            <div class="col-md-3">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Telefone</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" placeholder="(xx)xxxxx-xxxx">
            </div>

            <div class="col-md-3">
              <label for="formGroupExampleInput2" class="form-label"><strong class="fonte-titulo">Contato</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput2" placeholder="(xx)xxxxx-xxxx">
            </div>

            <div class="col-md-6">                        
              <label for="formGroupExampleInput" class="form-label"><strong class="fonte-titulo">E-mail</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput" placeholder="E-mail">
            </div>

            <div class="col-md-6">                        
              <label for="formGroupExampleInput" class="form-label"><strong class="fonte-titulo">Senha</strong></label>
              <input type="text" class="form-control fonte-titulo" id="formGroupExampleInput" placeholder="Senha">
            </div>
            
            <div class="col-md-12 d-flex justify-content-start align-items-center" style="margin-top: 36px; margin-bottom: 36px; padding: 0;">
              <button type="button" class="botaoAgendar btn btn-dark" style="background-color: #DF322E; font-weight: bolder; border: #DF322E;">ATUALIZAR</button> 
              <button type="button" class="botaoLogin btn btn-outline-light" style="font-weight: bolder; margin-right: 10px; margin-left: 10PX; border-color: #DF322E; color: #DF322E;">INATIVAR</button>
            </div>

            <?php } ?>

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
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Cadastrar Usuário</title>
</head>
<link rel="stylesheet" href="<?php echo base_url("/CSS/Style.css") ?>">

<?php
use App\Models\SelectOptionss;
 ?>


<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
    </header>
    <main id="background">
        <div id="sec2" class="container" style="padding-top: 2vh;">
            <?php 
                foreach($ConUsuario->getResult() as $valor){
                    echo "
                        <form action='' method='post'>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>Código do Usuário</span>
                                <input type='text' class='form-control' name='CodUsuario' value='$valor->CodUsuario' aria-describedby='inputGroup-sizing-default'>
                            </div>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>Nome do Cliente</span>
                                <input type='text' class='form-control' name='Nome' value='$valor->Nome' aria-describedby='inputGroup-sizing-default'>
                            </div>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>E-mail</span>
                                <input type='text' class='form-control' name='E_mail' value='$valor->E_mail' aria-describedby='inputGroup-sizing-default'>
                            </div>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>CPF</span>
                                <input type='text' class='form-control' name='CPF' value='$valor->CPF' aria-describedby='inputGroup-sizing-default'>
                            </div>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>Fone Residencial</span>
                                <input type='text' class='form-control' name='FoneRes' value='$valor->FoneRes' aria-describedby='inputGroup-sizing-default'>
                            </div>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>Fone Comercial</span>
                                <input type='text' class='form-control' name='FoneCom' value='$valor->FoneCom' aria-describedby='inputGroup-sizing-default'>
                            </div>
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>Celular</span>
                                <input type='text' class='form-control' name='Celular' value='$valor->Celular' aria-describedby='inputGroup-sizing-default'>
                            </div>

                            <a href='/ProjetoWeb/public/cadOcupacao'>Cadastrar Ocupação</a>

                            <div class='input-group mb-3'>

                                <label class='input-group-text' for='inputGroupSelect01'>Ocupação Usuário</label>

                                <select class='form-select' id='inputGroupSelect01' name='Situacao'>";

                                    $so = new SelectOptions();

                                    $so->selectOcupacaoUsuario($valor->CodUsuario); echo"

                                </select>

                            </div>




                           

                            <a href='/ProjetoWeb/public/cadServico'>Cadastrar Serviço</a>

                            <div class='input-group mb-3'>

                                <label class='input-group-text' for='inputGroupSelect01'>Serviço Atribuído</label>

                                <select class='form-select' id='inputGroupSelect01' name='Situacao'>";

                                    $so->selectNomeTipoServicoUsuario($valor->CodUsuario); echo"

                                </select>

                            </div>
                            

                            Função Cadastrada: 
                            ";
                            $so = new SelectOptions();
                            $so->selectFuncaoUsuario($valor->Funcao);
                            echo "
                            <div class='input-group mb-3'>
                                <label class='input-group-text' for='inputGroupSelect01'>Função</label>
                                <select class='form-select' id='inputGroupSelect01' name='Funcao'>
                                    <option value='1'>Doutor</option>
                                    <option value='2'>Tosador</option>
                                    <option value='3'>Groomer</option>
                                    <option value='4'>Atendente</option>
                                    <option value='5'>Gestor</option>
                                </select>
                            </div>
                            Situação cadastrada: 
                            ";
                            $so->selectSituacao($valor->Situacao);
                            echo "
                            <div class='input-group mb-3'>
                                <label class='input-group-text' for='inputGroupSelect01'>Situação</label>
                                <select class='form-select' id='inputGroupSelect01' name='Situacao'>
                                    <option value='0'>Inativo</option>
                                    <option value='1'>Ativo</option>
                                </select>
                            </div>

                            Data Admissão cadastrada: $valor->Data_Admissao;
                            <div class='input-group mb-3'>
                                <span class='input-group-text' id='inputGroup-sizing-default'>Data Admissão</span>
                                <input type='date' class='form-control' name='Data_Admissao' aria-label='Sizing example input'
                                    aria-describedby='inputGroup-sizing-default'>
                            </div>

                            <input class='form-control' type='submit' value='Confirmar' class='btn btn-primary'>
                        </form> ";
                }
            ?>
            
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html> -->