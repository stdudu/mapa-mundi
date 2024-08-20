<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <fieldset>
            <legend>Cadastro de Pais</legend>
            <div>
                <span>Nome</span>
                <input type="text" name="nome" id="nome">
            </div>
            <br>
            <div>
                <span>Capital</span>
                <input type="text" name="capital" id="capital">
            </div>
            <br>
            <div>
                <span>Continente</span>
                <select name="continente" id="continente">
                    <option value="AME">América</option>
                    <option value="EUR">Europa</option>
                    <option value="ASI">Ásia</option>
                    <option value="OCE">Oceania</option>
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