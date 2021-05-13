<?php
	define("TITULO", "EVENTOS");
	include "nav.php";
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	// echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a><br>';
	echo '<table class="table table-striped table-bordered">';
		echo '<tr><th>No</th><th>Nome</th><th>Local</th><th>Cadastro</th><th>Editar</th><th>Excluir</th></tr>';
		$eventos = listarEventos($conexao);
		$n = 1;
		// echo "Total: ".count($eventos);
		foreach($eventos as $linha){
			echo '<tr>';
			echo '<td>'.$n.'</td>';
			echo '<td>'.$linha["nome"].'</td>';
			echo '<td>'.$linha["local"].'</td>';
			echo '<td><a href="eventos-perfil.php?evento='.$linha["id"].'">Ver</a></td>';
			echo '<td><a href="eventos-editar.php?evento='.$linha["id"].'">Editar</a></td>';
			echo '<td><a href="eventos-excluir.php?evento='.$linha["id"].'">Excluir</td></tr>';
			echo '</tr>';
			$n += 1;
		}
	echo "</table>";
	include "rodape.php";
?>