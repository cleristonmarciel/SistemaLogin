<?php 

$usuario = 'root';
$senha = '';
$database = 'login';
$host = 'localhost';

$mysqli = new mysqli($host, $usuario, $senha,  $database);

if ($mysqli ->error) {
    die("Falha ao conectar ao banco de dados:". $mysql -> error);
}

//if ($mysqli->connect_error) {
  // echo "Erro";

//}
//else {
 //  echo"Conexao efetuada com sucesso";
//}