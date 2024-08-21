<?php
    include('include/conexao.php');
    $id = $_POST['id'];
        // UPLOAD FOTO
        $nome_foto = "";
        if(file_exists($_FILES['foto']['tmp_name'])){
            $pasta_destino = 'fotos/';
            $extensao = strtolower(substr($_FILES['foto']['name'], -4));
            $nome_foto = $pasta_destino . date('Ymd-His').$extensao;
            move_uploaded_file($_FILES['foto']['tmp_name'], $nome_foto);
        }
        // FIM UPLOAD
    $nome = $_POST['nome'];
    $capital = $_POST['capital'];
    $continente = $_POST['continente'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alterar Cidade</title>
</head>
<body>
    <h1>Alterando Cidade</h1>
    <?php
        echo "<p>Id: $id</p>";
        echo "<p>Nome: $nome</p>";
        echo "<p>Capital: $capital</p>";
        echo "<p>Continente: $continente</p>";
        $sql = "UPDATE pais SET
                    nome = '$nome',
                    capital = '$capital'
                    continente = '$continente'
                WHERE id = $id";
        $result = mysqli_query($con, $sql);
        if($result){
            echo "Dados atualizados";
        }
        else{
            echo "Erro ao atualizar dados!\n".mysqli_error($con);
        }
    ?>
</body>
</html>