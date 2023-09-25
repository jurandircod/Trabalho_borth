<html>
<h6 class="text-center">Redirecionando em <span id="contador">5</span> segundos...</h6>

<script>
    function atualizarContador() {
        var contadorElemento = document.getElementById("contador");
        var contador = parseInt(contadorElemento.innerText);

        if (contador === 0) {

            window.location.href = "http://localhost/Trabalho_borth/";
        } else {
            contadorElemento.innerText = contador - 1;
            setTimeout(atualizarContador, 1000); // Chamar a função novamente após 1 segundo
        }
    }

    window.onload = function() {
        setTimeout(atualizarContador, 1000);
    };
</script>

</html>
<?php
define("HOST", "localhost");
define("USER", "root");
define("PASSWD", "");
define("DATABASE", "borth");

ini_set('display_errors', 1);

$conn = mysqli_connect(HOST, USER, PASSWD, DATABASE);

    $unidade = $_POST["unidade"];
    $name = $_POST["nome"];

    $smt = mysqli_prepare($conn, "INSERT INTO produtos (nome, unidadeDeMedida) VALUE (?,?)");
    mysqli_stmt_bind_param($smt, "ss", $name, $unidade);
    mysqli_stmt_execute($smt);

    
    echo "<div class='alert alert-success text-center' role='alert'>
    Cadastro realizado com sucesso
  </div>";


?>