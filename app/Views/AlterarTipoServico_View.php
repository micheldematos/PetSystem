<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Alterar Tipo de Serviço</title>
</head>
<link rel="stylesheet" href="<?php echo base_url("/CSS/Style.css") ?>">

<body>
    <header class="topo">
        <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;
    </header>

    <div class="container-fluid"><br>
        <?php  
            use App\Models\SelectOptions;
            foreach($ConTipoServico->getResult() as $valor){
                echo "
                    <form action='' method='post'>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Código Serviço</span>
                            <input type='text' class='form-control' name='CodTipoServ' value='$valor->CodTipoServ' aria-label='Sizing example input'
                                aria-describedby='inputGroup-sizing-default'>
                        </div>
                        Serviços Cadastrados:
                        <div class='input-group mb-3'>
                            <select class='form-select' id='inputGroupSelect01' name='Situacao'>";
                            $so = new SelectOptions();     
                            $so->SelectTipoServicoOptions(); echo "
                            </select>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Nome Serviço</span>
                            <input type='text' class='form-control' name='NomeServico' value='$valor->NomeServico' aria-label='Sizing example input'
                                aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Preço</span>
                            <input type='number' class='form-control' name='Preco' value='$valor->Preco' aria-label='Sizing example input'
                                aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Descrição</span>
                            <input type='text' class='form-control' name='Descricao' value='$valor->Descricao' aria-label='Sizing example input'
                                aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <a href='/ProjetoWeb/public/removeTipoServico/$valor->CodTipoServ'>Deletar Serviço</a>
                        <input class='form-control' type='submit' value='Confirmar' class='btn btn-primary'>
                    </form>
                ";
            }
        ?>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz"
        crossorigin="anonymous"></script>
</body>

</html>