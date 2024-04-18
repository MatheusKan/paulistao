<link rel="stylesheet" href="assets/style.css">

<meta charset="utf-8">
<?php
    $host = "localhost:3306";
    $user = "root";
    $pass = "";
    $base = "paulistao";
    $con = mysqli_connect($host, $user, $pass, $base);

echo "<br>";
echo "<h1>Conexão Ok</h1>";

mysqli_close($con);
?>

