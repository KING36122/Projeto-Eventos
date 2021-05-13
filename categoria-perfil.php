<?php
	define("TITULO", "PERFIL DAS CATEGORIAS");
	include "nav.php";
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	if(isset($_GET['categoria'])){
		$idcategoria = $_GET["categoria"];
		$categoria = selecionaCategoria($conexao, $idcategoria);
		echo '<table class="table table-bordered">';
		echo "<tr><td>Categoria: </td><td>".$categoria["categoria"]."</td></tr>";
		
	}else{
		echo "erro";
	}
	// echo '<a href="categoria-listar.php"><input type="button" value="voltar" class="btn btn-danger"></a>';
	include "rodape.php";
?>