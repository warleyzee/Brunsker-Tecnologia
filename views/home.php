<h1 style="text-align: center;">Bem vindo a Brunsker Tecnologia!</h1>

<form method="post" action="login.php">
	<label class="badge badge-secondary">Usuário:</label>
	<input class="form-control" type="text" name="usuario" placeholder="Digite o usuario"><br>
	<label class="badge badge-secondary">Senha:</label>
	<input class="form-control" type="password" name="senha" placeholder="Digite a Senha"><br>
	<input class="btn btn-success" type="submit" value="Entrar"><br><br>
</form>

<?php if(isset($_GET['erro'])) { ?>
	<div class="alert alert-danger" role="alert">
		Usuário ou senha inválidos.
	</div>

<?php } ?>	