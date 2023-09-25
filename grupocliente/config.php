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
define("PASSWORD", "jurandir1965");
define("DATABASE_NAME", "borth");

ini_set('display_errors', 1);

$conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE_NAME);

if (isset($_POST["enviar"])) {
    $name = $_POST["name"];

    $smt = mysqli_prepare($conn, "INSERT INTO grupocliente (nome) VALUE (?)");

    mysqli_stmt_bind_param($smt, "s", $name);

    mysqli_stmt_execute($smt);

    echo "<div class='alert alert-success text-center' role='alert'>
    Cadastro realizado com sucesso
  </div>";

  mysqli_close($conn);
}
