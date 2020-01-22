<?php

$servidor = "localhost";
$user = "root";
$senha = "";
$db = "brunsker";

$conexao = mysqli_connect($servidor, $user, $senha, $db);

$query = "SELECT * FROM cadastro";
$consulta = mysqli_query($conexao, $query);

