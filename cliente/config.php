<html>

<body>
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
</body>

</html>

<?php
define("HOST", "localhost");
define("USER", "root");
define("PASSWORD", "");
define("DATABASE_NAME", "borth");

ini_set('display_errors', 1);

$conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE_NAME);

if (mysqli_connect_errno()) {
  echo "Falha ao conectar ao MySQL: " . mysqli_connect_error();
  exit;
}
// preparar sql
ini_set('display_errors', 1);




if (isset($_POST["enviar"])) {


  $nome = $_POST["nome"];
  $cpf = $_POST["cpf"];
  $tel = $_POST["tel"];
  $email = $_POST["email"];
  $cep = $_POST["cep"];
  $endereco = $_POST["endereco"];
  $num =  $_POST["num"];
  $city = $_POST["city"];
  $estado =  $_POST["estado"];
  $status = $_POST["stat"];


  $sec = mysqli_prepare($conn, "INSERT INTO cliente (nome,cpfcnpj, email, telefone, 
    cep, endereco, numero, cidade, estado, status) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");


  mysqli_stmt_bind_param(
    $sec,
    "ssssssisss",
    $nome,
    $cpf,
    $email,
    $tel,
    $cep,
    $endereco,
    $num,
    $city,
    $estado,
    $status
  );

  mysqli_stmt_execute($sec);

  echo "<div class='alert alert-success text-center' role='alert'>
    Cadastro realizado com sucesso
  </div>";
}
mysqli_close($conn);
?>