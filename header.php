<!DOCTYPE html>
<html>
<head>
	<title>Brunsker Tecnologia</title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/bootstrap.min.css">
	<link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">
	<link rel="stylesheet" href="css/teste.css">

	<script src="js/bootstrap.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js">
	</script>
	
</head>
<body>
	<header>
			<div class="container">
				<a href="?pagina=home"><img src="img/logo.png" title="Logo" alt="logo"></a>
					<div id="menu">
						<a href="?pagina=listagem">Listagem</a>
						<a href="?pagina=cadastro">Cadastro</a>
						<?php if(isset($_SESSION['login'])){ ?>
							<a href="sair.php"><?php echo $_SESSION['usuario']; ?>(sair)</a>
							<div class="vcard">
				                <div class="wrap">
				                  <img src="img/person_1.jpg" alt="Image" class="img">
				                </div>
				            <div>
						<?php } ?>
					</div>

			</div>
	</header>
	
	<div id="conteudo" class="container">
	

