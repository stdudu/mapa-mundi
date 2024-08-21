<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="alterapaisexe.php" method="post" enctype="multipart/form-data">
        <fieldset>
            <legend>Altera Pais</legend>
            <div>
            <?php
                if($row['foto'] != ""){
                    echo "<td><img src='".$row['foto']."' width='80' heigth='100'></td>";
                }
                ?>
                <label for="foto">Foto</label>
                <input type="file" name="foto" id="foto" accept="image/*" value="<?php echo $row['foto'] ?>" >
            </div>
            <br>
            <div>
                <span>Nome</span>
                <input type="text" name="nome" id="nome" value="<?php echo $row['nome'] ?>">
            </div>
            <br>
            <div>
                <span>Capital</span>
                <input type="text" name="capital" id="capital" value="<?php echo $row['capital'] ?>">
            </div>
            <br>
            <div>
                <span>Continente</span>
                <select name="continente" id="continente">
                    <option value="AME"
                    <?php echo $row['continente'] == "AME" ? "selected" : "" ?>>América</option>
                    <option value="EUR"
                    <?php echo $row['continente'] == "EUR" ? "selected" : "" ?>>Europa</option>
                    <option value="ASI"
                    <?php echo $row['continente'] == "ASI" ? "selected" : "" ?>>Ásia</option>
                    <option value="OCE"
                    <?php echo $row['continente'] == "OCE" ? "selected" : "" ?>>Oceania</option>
                </select>
            </div>
            <br>
            <div>
                <button type="submit">Cadastrar</button>
            </div>
        </fieldset>
    </form>
</body>
</html>