<?php
	define("TITULO", "CATEGORIAS");
  include "nav.php";
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	// echo '<a href="inicial.php"><input type="button" value="HOME" class="btn btn-danger"></a><br>';
	echo '<table class="table table-striped table-bordered">';
		echo '<tr> <th>No</th><th>Categoria</th><th>Status</th><th>Cadastro</th><th>Editar</th><th>Excluir</th></tr>';
		
		$categoria = listarCategoria($conexao);
		$n = 1;
		// echo "Total: ".count($organizadores);
		foreach($categoria as $linha){
			echo '<tr>';
			echo '<td>'.$n.'</td>';
			echo '<td>'.$linha["categoria"].'</td>';
			echo '<td>'.$linha["status"].'</td>';
			echo '<td><a href="categoria-perfil.php?categoria='.$linha["idcategoria"].'">Ver</a></td>';
			echo '<td><a href="categoria-editar.php?categoria='.$linha["idcategoria"].'">Editar</a></td>';
			echo '<td><a href="categoria-excluir.php?categoria='.$linha["idcategoria"].'">Excluir</td></tr>';
			echo '</tr>';
			$n += 1;
		}
	echo "</table>";
	include "rodape.php";
?>