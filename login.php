<?php

include "db.php";

$usuario = $_POST['usuario'];
$senha = $_POST['senha'];

$query = "SELECT * FROM usuario WHERE usuario = '$usuario' AND senha = '$senha'";

$consulta = mysqli_query($conexao, $query); 

if(mysqli_num_rows($consulta) == 1){

	session_start();
	$_SESSION['login'] = true;
	$_SESSION['usuario'] = $usuario;
	header('location:index.php');
	echo "Login feito com sucesso";
}	
else{
	echo 'falhar';
	header('location:index.php?erro');
}