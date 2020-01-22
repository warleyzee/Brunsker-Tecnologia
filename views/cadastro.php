<?php
	session_start();
?>
<h1>Cadastrar novo Cliente</h1>

<p class="text-center text-success" id="mensagem">
			<?php
			if(isset($_SESSION['cadsucess'])){
				echo $_SESSION['cadsucess'];
				unset($_SESSION['cadsucess']);
			}
			 ?>
		</p>
<br>

	<form id="formulario" method="get" action="processar_cadastro.php">
		<label class="badge badge-secondary">Nome:</label><br>
		<input  class="form-control" type="text" name="nome_cliente" placeholder="Nome Completo">
		<br><br>
		<label class="badge badge-secondary">Apelido:</label><br>
		<input class="form-control" type="text" name="apelido" placeholder="Nome Completo">
		<br><br>
		<label class="badge badge-secondary">E-mail:</label><br>
		<input class="form-control" type="email" name="email" placeholder="Nome Completo">
		<br><br>
		<label class="badge badge-secondary">CPF:</label><br>
		<input class="form-control" type="text" name="cpf" placeholder="CPF">
		<br><br>
			<div class="form-group"> <label class="badge badge-secondary">Sexo</label>
	    	<select class="form-control" id="sexo" name="sexo">
	      	<option>-Selecionar-</option>
	      	<option>Masculino</option>
	     	<option>Feminino</option>
	   		 </select>
	 		 </div>
		<br><br>
		<label class="badge badge-secondary">Data de Nascimento:</label><br>
		<input class="form-control" type="text" name="data_nascimento" id="data_nascimento" placeholder="00/00/0000">
		<br><br>
		<label class="badge badge-secondary">Estado:</label><br>
		<input class="form-control" type="text" name="estado" placeholder="Estado">
		<br><br>
		<label class="badge badge-secondary">Cidade:</label><br>
		<input class="form-control" type="text" name="cidade" placeholder="Cidade">
		<br><br>
		<label class="badge badge-secondary">CEP:</label><br>
		<input class="form-control" type="text" name="cep" placeholder="CEP">
		<br><br>
		<label class="badge badge-secondary">Telefone:</label><br>
		<input class="form-control" type="text" name="telefone" placeholder="Telefone">
		<br><br>
		<label class="badge badge-secondary">Celular:</label><br>
		<input class="form-control" type="text" name="celular" placeholder="Celular">
		<br><br>
		<label class="badge badge-secondary">Usuario:</label><br>
		<input class="form-control" type="text" name="usuario" placeholder="Usuario">
		<br><br>
		<label class="badge badge-secondary">Senha:</label><br>
		<input class="form-control" type="password" name="senha" placeholder="Senha">
		<br><br>
		<input class="btn btn-success" type="submit" value="Cadastrar">
		<br>
		<br>
	</form>
