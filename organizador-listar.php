<?php
	define("TITULO", "ORGANIZADORES");
	include "nav.php";
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	// echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a><br>';
	echo '<table class="table table-striped table-bordered">';
		echo '<tr> <th>No</th><th>Nome</th><th>Telefone</th><th>E-mail</th><th>Cadastro</th><th>Editar</th><th>Excluir</th></tr>';
		
		$organizadores = listarOrganizador($conexao);
		$n = 1;
		// echo "Total: ".count($organizadores);
		foreach($organizadores as $linha){
			echo '<tr>';
			echo '<td>'.$n.'</td>';
			echo '<td>'.$linha["nome"].'</td>';
			echo '<td>'.$linha["telefone"].'</td>';
			echo '<td>'.$linha["email"].'</td>';
			echo '<td><a href="organizador-perfil.php?organizador='.$linha["idorganizador"].'">Ver</a></td>';
			echo '<td><a href="organizador-edita.php?organizador='.$linha["idorganizador"].'">Editar</a></td>';
			echo '<td><a href="organizador-excluir.php?organizador='.$linha["idorganizador"].'">Excluir</td></tr>';
			echo '</tr>';
			$n += 1;
		}
	echo "</table>";
	include "rodape.php";
?>