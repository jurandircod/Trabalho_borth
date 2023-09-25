<!DOCTYPE html>
<html lang="pt-br">

<body>
    <h1 class="text-center mt-3">Cadastrar produtos</h1>
    <form action="" method="post" class="container mt-3">
        <div class="row">
            <div class="col">
                <label for="">Nome do produto</label>
                <input type="text" name="nome" class="form-control">
            </div>
            <div class="col">
                <label for="">Qual a unidade de medida do produto ?</label>
                <input type="text" class="form-control" name="unidade">
            </div>
        </div>
        <button class="text-center btn btn-primary mt-3 col-12" name="enviar" >Enviar</button>
    </form>

<?php
if(isset($_POST["enviar"])){
    include ("../Trabalho_borth/produto/config.php");
}

?>

</body>

</html>