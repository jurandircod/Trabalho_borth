<!DOCTYPE html>
<html lang="en">

<head>
</head>

<body>
    <h1 class="text-center mt-3">Cadastrar grupo de usuarios</h1>

    <form action="" class="container text-center" method="post">
        <div class="mt-3">
            <label for="">Insira o nome do seu grupo de usuario</label>
            <input type="text" name="nome" class="form-control">
        </div>
        <div>
            <button class="btn btn-primary mt-3" name="enviar">Enviar</button>
        </div>
    </form>

    <?php
    if (isset($_POST["enviar"])) {
        include("../Trabalho_borth/grupodeusuario/config.php");
    }
    ?>
</body>

</html>