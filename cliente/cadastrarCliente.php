<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>

    <h1 class="text-center mt-4">Cadastro de clientes</h1>


    <form method="post" class="container">
        <div class="row mt-3">
            <div class="col">
                <label for="">Digite seu nome</label>
                <input type="text" name="nome" class="form-control" placeholder="Digite seu nome*">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="">Digite seu CPF ou CNPJ</label>
                <input type="text" name="cpf" class="form-control" placeholder="Digite seu CPF*">
            </div>
            <div class="col">
                <label for="">Digite seu telefone</label>
                <input type="text" name="tel" class="form-control" placeholder="Digite seu telefone*">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="">Digite seu email</label>
                <input type="email" name="email" class="form-control" placeholder="Digite seu email*">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="">Digite seu cep</label>
                <input type="text" name="cep" class="form-control" placeholder="Digite seu cep*">
            </div>
            <div class="col">
                <label for="">Digite seu endereço</label>
                <input type="text" name="endereco" class="form-control" placeholder="Digite seu endereco*">
            </div>
            <div class="col">
                <label for="">Digite o numero da casa</label>
                <input type="text" name="num" class="form-control" placeholder="Digite o numero da sua cada">
            </div>
        </div>
        <div class="row mt-3">
            <div class="col">
                <label for="">Digite sua cidade</label>
                <input type="text" name="city" class="form-control" placeholder="Digite sua cidade*">
            </div>
            <div class="col">
                <label for="">Digite seu estado</label>
                <input type="text" name="estado" class="form-control" placeholder="Digite seu estado*">
            </div>
        </div>

        <div class="row mt-3">
            <div class="col">
                <button name="enviar" type="submit" class="btn btn-primary">Enviar</button>
            </div>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="stat" id="flexRadioDefault1" value="true">
            <label class="form-check-label" for="flexRadioDefault1">
                cliente ativo
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="stat" id="flexRadioDefault2" value="false" checked>
            <label class="form-check-label" for="flexRadioDefault2">
                cliente não ativo
            </label>
        </div>
    </form>

    <?php if (isset($_POST["enviar"])) {
        include("../Trabalho_borth/cliente/config.php");
    }
    ?>


</body>

</html>