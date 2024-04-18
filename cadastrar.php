<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
<form method="post" action="valida_form.php">
        <label for="idtime">ID do Time:</label><br>
        <input type="text" id="idtime" name="idtime"><br><br>
        
        <label for="nometime">Nome do Time:</label><br>
        <input type="text" id="nometime" name="nometime"><br><br>

        <label for="qtdeJogos">Quantidade de Jogos:</label><br>
        <input type="text" id="qtdeJogos" name="qtdeJogos"><br><br>

        <label for="qtdeVitorias">Quantidade de Vitórias:</label><br>
        <input type="text"id="qtdeVitorias" name="qtdeVitorias"><br><br>

        <label for="qtdeEmpates">Quantidade de Empates:</label><br>
        <input type="text" id="qtdeEmpates" name="qtdeEmpates"><br><br>

        <label for="qtdeDerrotas">Quantidade de Derrotas:</label><br>
        <input type="text" id="qtdeDerrotas" name="qtdeDerrotas"><br><br>

        <label for="classificacao">Classificação:</label><br>
        <input type="text"id="classificacao" name="classificacao"><br><br>

        <input type="submit" value="Enviar">
    </form>
</body>
</html>