<?php 
#iniciar sessão
session_start();
#importando Base de Dados 
include 'db.php';
#importando Cabeçalho 
include 'header.php';
#conteudo


if (isset($_SESSION['login'])) {
	if(isset($_GET['pagina'])){
		$pagina = $_GET['pagina'];
	}
	else{
		$pagina = 'listagem';
	}
}
else {
	$pagina = 'home';
}


switch ($pagina) {
	case 'listagem':include 'views/listagem.php';break;
	case 'cadastrar_cliente':include 'views/cadastrar_cliente.php';break;
	case 'cadastro':include 'views/cadastro.php';break;
	case 'login':include 'views/login.php';break;
	default:include 'views/home.php';break;
}
#rodapé
include 'footer.php';

