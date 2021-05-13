<?php
	define("TITULO", "EDITAR CATEGORIAS");
	// include "nav.php";
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	if(isset($_GET['categoria'])){
		if(!isset($_GET['edita'])){
			$idcategoria = $_GET["categoria"];
			$categoria = selecionaCategoria($conexao, $idcategoria);
			echo "<p>Edição do cadastro da Categoria <strong>$categoria[categoria]</strong></p>";
			echo '<form action="" method="get">';
				echo 'Categoria: <input type="text" name="cat" value="'.$categoria["categoria"].'" required class="form-control"><br>';
				echo '<input type="hidden" name="edita"><input type="hidden" name="categoria" value="'.$idcategoria.'">';
				echo '<input type="submit" class="btn btn-primary" value="Alterar" class="btn btn-primary">';	
			echo '</form>';
		}else{
			$nome 	= $_GET['cat'];
			$categoria = $_GET['categoria'];
			
			$edicao = alterarCategoria($conexao, $nome, $categoria);
			header("Location:categoria-listar.php?categoria");
			die();
			
	}
}else{
	echo "Error 404";
}
	include "rodape.php";
?>
