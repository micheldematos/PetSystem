<!DOCTYPE html>
<html lang="pt-br">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
              integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>Alterar Atendimento</title>
    </head>
    <link rel="stylesheet" href="<?php echo base_url("/CSS/Style.css") ?>">

    <body>
        <header class="topo">
            <a class="link" href="/ProjetoWeb/public">Home</a> &nbsp;

         </header>

        <main id="bcknd">  
            <div class="container">
                <?php  
                    use App\Models\SelectOptions;
                    foreach($ConAtendimento->getResult() as $valor){
                        echo "
                        <form action='' method='post' style='padding-top:2vh'>

                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Código Atendimento</span>
                            <input type='text' class='form-control' name='CodAtendimento' value='$valor->CodAtendimento' aria-label='Sizing example input'
                                aria-describedby='inputGroup-sizing-default'>
                        </div>
                        
                        <div class='input-group mb-3'>
                            <label class='input-group-text' for='inputGroupSelect01'>Animal</label>
                            <select class='form-select' name='CodAnimal' id='inputGroupSelect01'>";
                                $so = new SelectOptions();
                                $so->selectAnimal(); echo " 
                            </select>
                        </div>
                        <div class='input-group mb-3'>
                            <label class='input-group-text' for='inputGroupSelect01'>Serviço</label>
                            <select class='form-select' name='CodServico' id='inputGroupSelect01'>";
                                   $so->selectServico(); echo "
                            </select>
                        </div>
                        <div class='input-group mb-3'>
                            <label class='input-group-text' for='inputGroupSelect01'>Ocupação</label>
                            <select class='form-select' name='CodOcupacao' id='inputGroupSelect01'>";
                                    $so->selectOcupacao(); echo "
                            </select>
                        </div>
                        <div class='input-group mb-3'>
                            <label class='input-group-text' for='inputGroupSelect01'>Status</label>
                            <select class='form-select' name='ServicoRealizado' id='inputGroupSelect01'>
                                <option value='1'>Realizado</option>
                                <option value='0'>Não Realizado</option>
                            </select>
                        </div>
                        <div class='input-group mb-3'>
                            <span class='input-group-text' id='inputGroup-sizing-default'>Preço</span>
                            <input type='text' class='form-control' name='Preco' aria-label='Sizing example input' 
                                       aria-describedby='inputGroup-sizing-default'>
                        </div>
                        <div class='input-group'>
                            <span class='input-group-text'>Observação</span>
                            <textarea class='form-control' name='Observacoes' aria-label='With textarea'></textarea>
                        </div>
                        <input class='form-control' type='submit' value='Confirmar' class='btn btn-primary'>
                    </form>    
                        ";
                    }
                ?>
                
            </div>
            
                      
        </main>

                    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"
                            integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous">
    </body>
</html>