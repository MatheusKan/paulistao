<meta charset="utf-8">
<?php
    $idtime = $_POST['idtime'];
    $qtdeVitorias = $_POST['qtdeVitorias'];
	$host = "localhost";
    $port = "3306";
    $user = "root";
    $pass = "";
    $base = "paulistao";
    $con = mysqli_connect("$host:$port", $user, $pass, $base);
	$res = mysqli_query($con,"update paulista set qtdeVitorias = '$qtdeVitorias' where idtime = $idtime");
    $res2 = mysqli_query($con,"select * from paulista order by classificacao");
    echo "Dados Alterados com sucesso";
	echo "<table border=3px><tr><td>Id do time</td><td>Nome do time</td><td>Quantidade de jogos</td><td>Quantidade de vitórias</td><td>Quantidade de empates</td><td>Quantidade de derrotas</td><td>Classificação</td></tr>";
	while($escrever=mysqli_fetch_array($res2)){
		echo "</td><td>".$escrever['idtime']."</td><td>".$escrever['nometime']."</td><td>".$escrever['qtdeJogos']."</td><td>".$escrever['qtdeVitorias']."</td><td>".$escrever['qtdeEmpates']."</td><td>".$escrever['qtdeDerrotas']."</td><td>".$escrever['classificacao']."</td></tr>";
		
	}
	echo "</table>";
	
	echo "</br></br>";
	
	mysqli_close($con);
?>