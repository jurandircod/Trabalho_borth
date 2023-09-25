<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./icons/css/all.min.css">
</head>

<body>

    <nav class="navbar navbar-expand-lg bg-body-tertiary" data-bs-theme="dark">
        <div class="container-fluid">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavDropdown">
                <ul class="navbar-nav">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="index.php">Inicio</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=gpclienteslistar">Grupo de clientes</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=gpusuariolistar">Grupo de usuarios</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="?page=clienteslistar">Clientes</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Cadastrar
                        </a>
                        <ul class="dropdown-menu">
                            <li><a class="dropdown-item" href="?page=gpusuario">Cadastrar grupo de usuarios</a></li>
                            <li><a class="dropdown-item" href="?page=gpcliente">Cadastrar grupo de clientes</a></li>
                            <li><a class="dropdown-item" href="?page=produto">Cadastrar produtos</a></li>
                            <li><a class="dropdown-item" href="?page=cliente">Cadastrar Clientes</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <header>
        <?php
        ini_set('display_errors', 1);

        switch (@$_REQUEST["page"]) {
            case "cliente";
                include("../Trabalho_borth/cliente/cadastrarCliente.php");
                break;
            case "gpcliente";
                include("../Trabalho_borth/grupocliente/cadastrarGpCliente.php");
                break;
            case "gpusuario";
                include("../Trabalho_borth/grupodeusuario/cadastrarGpUsuario.php");
                break;
            case "produto";
                include("../Trabalho_borth/produto/cadastrarProduto.php");
                break;
            case "gpclienteslistar";
                include("../Trabalho_borth/grupocliente/listarGpCliente.php");
                break;
            case "gpusuariolistar";
                include("../Trabalho_borth/grupodeusuario/listarGpUsuario.php");
                break;
            case "clienteslistar";
                include("../Trabalho_borth/cliente/listarCliente.php");
                break;
            default;
        ?>
                <h1 class="text-center">bem vindo</h1>
    </header>

<?php } ?>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

</body>

</html>