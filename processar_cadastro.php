<?php

session_start();

include 'db.php';

$nome_cliente = $_GET['nome_cliente'];
$apelido = $_GET['apelido'];
$email = $_GET['email']; 
$cpf = $_GET['cpf'];
$sexo = $_GET['sexo'];
$data_nascimento = $_GET['data_nascimento'];
$estado = $_GET['estado'];
$cidade = $_GET['cidade'];
$cep = $_GET['cep'];
$telefone = $_GET['telefone'];
$celular = $_GET['celular'];
$usuario = $_GET['usuario'];
$senha = $_GET['senha'];


$query = "INSERT INTO cadastro (nome,apelido,email,cpf,sexo,data_nacimento,estado,cidade,cep,telefone,celular,usuario,senha) 
		VALUES
		 ('$nome_cliente','$apelido','$email','$cpf','$sexo','$data_nacimento','$estado','$cidade','$cep','$telefone','$celular','$usuario','$senha')";
mysqli_query($conexao, $query);
$_SESSION['cadsucess'] = "Salvo com Sucesso";
header('location:index.php?pagina=cadastrar_cliente');

