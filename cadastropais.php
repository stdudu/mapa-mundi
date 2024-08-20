<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("/include/conexao.php");

        $nome = $_POST['nome'];
        $capital = $_POST['capital'];
        $continente = $_POST['continente'];

        echo "<h1>Dados do País</h1>";
        echo "Nome: $nome<br>";
        echo "Capital: $capital<br>";
        echo "Continente: $continente<br>";


        $sql = "INSERT INTO pais (id, continente, nome, capital, foto)";
        $sql .= "VALUES ('".$nome."','".$capital."','".$continente."')";
        echo $sql;

        $result = mysqli_query($con, $sql);
        if($result){
            echo <
        }
    ?>
</body>
</html>