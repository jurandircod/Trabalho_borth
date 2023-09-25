<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>

    <h1 class="text-center mt-3">Cadastra um grupo de clientes</h1>
    <form action="" class="container text-center" method="post">
        <div class="mt-3">
            <label for="">Nome do grupo</label>
            <input type="text" name="name" class="form-control">
        </div>
        <button class="btn btn-primary mt-3" name="enviar">Enviar</button>
    </form>

    <header>
        <?php
        if (isset($_POST["enviar"])) {
            include("../Trabalho_borth/grupocliente/config.php");
        }
        ?>
    </header>

</body>

</html>