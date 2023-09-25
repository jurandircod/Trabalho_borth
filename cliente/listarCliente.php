<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <table class="table caption-top">

        <caption class="text-center mt-3">Lista de clientes</caption>
        <thead class="table-dark">
            <tr>
                <th scope="col">ID</th>
                <th scope="col">Nome</th>
                <th scope="col">Email</th>
                <th scope="col">Cpf</th>
                <th scope="col">Telefone</th>
                <th scope="col">Cep</th>
                <th scope="col">Endereco</th>
                <th scope="col">Numero</th>
                <th scope="col">Cidade</th>
                <th scope="col">Estado</th>
                <th scope="col">Status</th>
                <th scope="">Funções</th>
            </tr>
        </thead>
        <?php
        define("HOST", "localhost");
        define("USER", "root");
        define("PASSWORD", "");
        define("DATABASE_NAME", "borth");

        ini_set('display_errors', 1);

        $conn = mysqli_connect(HOST, USER, PASSWORD, DATABASE_NAME);
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);

        $query = "SELECT * FROM cliente";
        $result = mysqli_query($conn, $query);

        
        if (isset($_GET["excluir"])) {
            $client_id = $_GET["excluir"];

            $sql = "DELETE FROM cliente WHERE id = $client_id";
            $result = mysqli_query($conn, $sql);

            if ($result) {
                echo "<div class='alert alert-success text-center' role='alert'>
        Cliente excluido com sucesso
      </div>";
            }
            mysqli_close($conn);
        } else {
            echo "<div class='alert alert-danger text-center' role='alert'>
            Erro ao excluir o cliente: " . mysqli_error($conn) . "
            </div>";
        }
        
        
        
        if ($result === false) {
            echo "Erro na consulta: " . mysqli_error($conn);
        } else {

            while ($row = mysqli_fetch_array($result)) : ?>
                <tbody>
                    <tr>
                        <th><?php echo $row['id'] ?></th>
                        <td><?php echo $row['nome'] ?></td>
                        <td><?php echo $row['email'] ?></td>
                        <td><?php echo $row['cpfcnpj'] ?></td>
                        <td><?php echo $row['telefone'] ?></td>
                        <td><?php echo $row['cep'] ?></td>
                        <td><?php echo $row['endereco'] ?></td>
                        <td><?php echo $row['numero'] ?></td>
                        <td><?php echo $row['cidade'] ?></td>
                        <td><?php echo $row['estado'] ?></td>
                        <td><?php echo $row['status'] ?></td>
                        <td class="row">

                            <a class="btn btn-danger col" href="?excluir=<?php echo $row['id']; ?>">
                                <i class="fa-solid fa-trash"></i>
                            </a>

                            <a class="btn btn-warning col" href="?alterar=<?php echo $row['id']; ?>">
                                <i class="fa-solid fa-user"></i>
                            </a>

                        </td>
                    </tr>
                </tbody>
        <?php endwhile;
        } ?>

        


</body>

</html>