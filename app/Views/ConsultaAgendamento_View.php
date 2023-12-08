<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consulta Agendamento</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
</head>
<link rel="stylesheet" href="<?php echo base_url("/CSS/Style.css") ?>">

<body>
    <header class="topo">
        <a class='link' href="/PetSystem/public/">Home</a>
    </header>
    <main id="background">
        <div class="container sec2" style="padding-top: 2vh;">
            <form action="" method="post">
                <div class="input-group mb-3">
                    <input type="text" class="form-control" name="NomeAnimal" placeholder="Nome do Animal"
                        aria-label="Recipient's username" aria-describedby="button-addon2">
                    <input class="btn btn-outline-secondary" type="submit" id="button-addon2"></input>
                </div>
            </form>    

            <?php
            use App\Models\SelectOptions;
            $so = new SelectOptions();
            foreach ($ConAgendamento->getResult() as $valor) {
                echo "Animal: " , $so->selectNomeAnimal($valor->CodAnimal);
                echo "<br>";
                echo "Data: " , $so->selectData($valor->CodOcupacao);
                echo "<br>";
                echo "Hora: " , $so->selectHora($valor->CodOcupacao);
                echo "<br>";
                echo "Preço: " , $valor->Preco;
                echo "<br>";
                echo "Usuário Responsável: " , $so->selectNomeUsuarioAtendimento($valor->CodServico);
                echo "<br>";
                echo "<a href='/PetSystem/public/AltAnimal/$valor->CodAnimal'>Alterar</a>";
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

</html>