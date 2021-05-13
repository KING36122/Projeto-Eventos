<?php
	define("TITULO", "PERFIL DOS ORGANIZADORES");
	include "nav.php";
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	if(isset($_GET['organizador'])){
		$organizador = $_GET["organizador"];
		$organizador = selecionaOrganizador($conexao, $organizador);
		echo '<table class="table table-bordered">';
		echo "<tr><td>Nome: </td><td>".$organizador["nome"]."</td></tr>";
		echo "<tr><td>Endereço: </td><td>".$organizador["endereco"]."</td></tr>";
		echo "<tr><td>Telefone: </td><td>".$organizador["telefone"]."</td></tr>";
		echo "<tr><td>E-mail: </td><td>".$organizador["email"]."</td></tr>";
		echo '</table>';
		// echo '<a href="organizador-listar.php"><input type="button" value="voltar" class="btn btn-danger"></a>';
	}else{
		echo "erro";
	}
	include "rodape.php";
?>