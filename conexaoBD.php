<?php 

$servername = "localhost";
$username = "root";
$password = "senha";
$dbname = "bd_doacao_sangue";

$conexao = new mysqli ($servername, $username, $password, $dbname);

if ($conexao->connect_error) {
  die("Connection failed: ". $conexao->connect_error);
}

?>