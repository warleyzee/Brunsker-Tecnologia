
<table class="table table-hover table-striped" id="listagem">
	<thead>
		<tr>
			<th>Nome</th>
			<th>Apelido</th>
			<th>E-mail</th>
			<th>CPF</th>
			<th>Sexo</th>
			<th>Data de NAcimento</th>
			<th>Estado</th>
			<th>Cidade</th>
			<th>CEP</th>
			<th>Telefone</th>
			<th>Celular</th>
			<th>Usuário</th>
		</tr>
	</thead>

	<tbody>
		<?php 
			while ($linha = mysqli_fetch_array($consulta)){
				echo '<tr><td>'.$linha['nome'].'</td>';
				echo '<td>'.$linha['apelido'].'</td>';
				echo '<td>'.$linha['email'].'</td>';
				echo '<td>'.$linha['cpf'].'</td>';
				echo '<td>'.$linha['sexo'].'</td>';
				echo '<td>'.$linha['data_nacimento'].'</td>';
				echo '<td>'.$linha['estado'].'</td>';
				echo '<td>'.$linha['cidade'].'</td>';
				echo '<td>'.$linha['cep'].'</td>';
				echo '<td>'.$linha['telefone'].'</td>';
				echo '<td>'.$linha['celular'].'</td>';
				echo '<td>'.$linha['usuario'].'</td>';
			}
		?>
	</tbody>
</table>