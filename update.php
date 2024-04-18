<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastrar</title>
</head>
<body>
    <h1>Escolha o dado a ser alterado</h1>
    <h2><a href="upnome.php">Nome do Time</a></h2>
	<h2><a href="upjogos.php">Quantidade de jogos</a></h2>
	<h2><a href="upvitorias.php">Quantidade de vitórias</a></h2>
	<h2><a href="upempates.php">Quantidade de empates</a></h2>
	<h2><a href="upderrotas.php">Quantidade de Derrotas</a></h2>
	<h2><a href="upclass.php">Classificação</a></h2>
    <?php
	$host = "localhost";
    $port = "3306";
    $user = "root";
    $pass = "";
    $base = "paulistao";
    $con = mysqli_connect("$host:$port", $user, $pass, $base);
	$res = mysqli_query($con,"select * from paulista");
	echo "<table border=3px><tr><td>Id do time</td><td>Nome do time</td><td>Quantidade de jogos</td><td>Quantidade de vitórias</td><td>Quantidade de empates</td><td>Quantidade de derrotas</td><td>Classificação</td></tr>";
	while($escrever=mysqli_fetch_array($res)){
		echo "</td><td>".$escrever['idtime']."</td><td>".$escrever['nometime']."</td><td>".$escrever['qtdeJogos']."</td><td>".$escrever['qtdeVitorias']."</td><td>".$escrever['qtdeEmpates']."</td><td>".$escrever['qtdeDerrotas']."</td><td>".$escrever['classificacao']."</td></tr>";
		
	}
	echo "</table>";
	
	echo "</br></br>";
	
	mysqli_close($con);

    ?>
</body>
</html>