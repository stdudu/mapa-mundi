<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        include("include/conexao.php");
        //UPLOAD FOTO
        $nome_foto = "";
        if(file_exists($_FILES['foto']['tmp_name'])){
            $pasta_destino = "fotos/";
            $extensao = strtolower(substr($_FILES['foto']['nome'], -4));
            $nome_foto = $pasta_destino . date('Ymd-His').$extensao;
            move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
        }
        //FIM UPLOAD
        $nome = $_POST['nome'];
        $capital = $_POST['capital'];
        $continente = $_POST['continente'];

        echo "<h1>Dados do País</h1>";
        echo "Nome: $nome<br>";
        echo "Capital: $capital<br>";
        echo "Continente: $continente<br>";


        $sql = "INSERT INTO pais (id, continente, nome, capital, foto)";
        $sql .= "VALUES ('".$nome."','".$capital."','".$continente."','".$nome_foto."')";
        echo $sql;

        $result = mysqli_query($con, $sql);
        if($result){
            echo "<h2>Dados cadastrados com sucesso</h2>";
        }
        else{
            echo "<h2>Erro ao cadastrar</h2>";
            echo mysqli_error($con);
        }
    ?>
</body>
</html>