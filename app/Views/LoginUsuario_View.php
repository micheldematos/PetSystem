<!doctype html>
<html lang="pt-br">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Bob Barber Shop | Login</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
  <link rel="stylesheet" href="../CSS/estilo.css">
</head>
<body>
  <main class="container-fluid">
    <section class="row">
      
        <div class="col-md-5 img_home" style="overflow: hidden; padding: 0;">
            <img src="<?php echo base_url("/IMAGENS/cachorro_01.jpg") ?>" style="height: 100vh;">
        </div>
        
        <div class="col d-flex justify-content-center" style="height: 100vh;">
          

            <div class="width444" style="margin-top: auto; margin-bottom: auto;">

            <?php if (isset($error)): ?>
                <div class="alert alert-danger">
                    <?= $error ?>
                </div>
            <?php endif; ?>

            <?php if (isset($validation)): ?>
                <div class="alert alert-danger">
                    <?= $validation->listErrors() ?>
                </div>
            <?php endif; ?>

                

                  <div class="col d-flex justify-content-center" style="padding: 0;">
                    <img src="<?php echo base_url("/IMAGENS/logo.png") ?>" style="height: 100px;" class="logo_home">
                  </div>
                
                  <h2 class="fonte-titulo text-center" style="font-size: 32px; font-weight: bold; padding-top: 30px;padding-bottom:30px">Fazer Login (Usuário)</h2>
                
                <div class="row mb-3">
                    <form action="" method="post">
                    <div style="width: 100%">                        
                        <label for="formGroupExampleInput" class="form-label fonte-titulo"><strong>Usuário ou E-mail</strong></label>
                        <input type="text" name="Usuario" class="form-control" id="formGroupExampleInput" placeholder="Usuário ou E-mail" required>
                    </div>
                </div>

                  <div class="row mb-3">
                    <div style="width: 100%">
                        <div class="d-flex justify-content-between"><label for="formGroupExampleInput2" class="form-label fonte-titulo"><strong>Senha</strong></label><a class="fonte-titulo" href="">Esqueceu a senha?</a></div>
                        <input type="password" name="Senha" class="form-control" id="formGroupExampleInput2" placeholder="Senha" required>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <div>
                        <button type="submit" class="btn btn-primary fonte-titulo-claro" style="width: 100%; font-weight: bold;">ENTRAR</button>                       
                    </div>
                    </form>
                  </div>

                  <!-- <div class="row mb-3">
                    <p>Não tem cadastro?</p>
                    <div>
                        <button type="button" class="btn btn-danger" style="width: 100%; font-weight: bold;"><a class="fonte-titulo-claro" href="/ProjetoWeb/public/cadC" style="text-decoration: none;">CADASTRE-SE</a></button>  
                        </form>                                            
                    </div>
                  </div>       -->

                  <div class="row mb-3">
                    <p>Se você é cliente, <a href="/ProjetoWeb/public/LoginFC">clique aqui</a></p>
                  </div>       
            </div>
        </div>
    </section>
  </main>




  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>


</html>



<!-- <!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
</head>
<style>
    * {
        margin: 0px;
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

    #log {
        margin-left: 10vw;
        margin-right: 10vw;
    }
</style>

<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
        <a class='link' href='/ProjetoWeb/public/cadC'>Cadastrar</a>
    </header><br>

    <div id="log" class="container ">
        <p>
        <h2>Login para Usuario</h2>
        </p>

        <?php if (isset($error)): ?>
            <div class="alert alert-danger">
                <?= $error ?>
            </div>
        <?php endif; ?>

        <?php if (isset($validation)): ?>
            <div class="alert alert-danger">
                <?= $validation->listErrors() ?>
            </div>
        <?php endif; ?>

        <form action="" method="post">
            <p>
                <label class="form-label">Login/Email</label>
                <input type="text" class="form-control" name="Usuario">
            </p>
            <p>
                <label class="form-label">Senha</label>
                <input type="password" class="form-control" name="Senha">
                <button type="submit" class="btn btn-primary">Entrar</button>
            </p>
        </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html> -->