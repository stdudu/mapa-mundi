<?php
    include('include/conexao.php');

    $sql = "SELECT * FROM pais";
    $result = mysqli_query($con, $sql);
?>
    <h1 style="text-align: center;">Consulta de animais</h1>
    <table align="center" border="1" width="700" style="background-color: whitesmoke;">

        <tr>
            <th>Código</th>
            <th>Foto</th>
            <th>Nome</th>
            <th>Capital</th>
            <th>Continente</th>
            <th>Alterar</th>
            <th>Deletar</th>
        </tr>

<?php //mysqli_fetch_array le uma linha por vez
    while($row = mysqli_fetch_array($result)) {
        echo "<tr>";
        echo "<td>".$row['id']."</td>";
        echo "<td>".$row['nome']."</td>";
        echo "<td>".$row['capital']."</td>";
        echo "<td>".$row['continente']."</td>";
        echo "<td><a href = 'alterarpais.php?id=".$row['id']."'>Alterar<a/></td>
        </td>";
        echo "<td><a href = 'deletapais.php?id=".$row['id']."'>Deletar<a/></td>
        </td>";
        echo "</tr>";
    }
?>
     </table>
    <br>
    <div>
        <a href="../index.html">Voltar a tela inicial</a>
    </div>
