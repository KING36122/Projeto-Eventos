<?php
	define("TITULO", "PERFIL DE EVENTOS");
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	if(isset($_GET['evento'])){
		$eventos = $_GET["evento"];
		$eventos = selecionaEventos($conexao, $eventos);
		echo '<table class="table table-bordered">';
		echo "<tr><td>Nome: </td><td>".$eventos["nome"]."</td></tr>";
		echo "<tr><td>IdCategoria: </td><td>".$eventos["idcategoria"]."</td></tr>";
		echo "<tr><td>Local: </td><td>".$eventos["local"]."</td></tr>";
		echo "<tr><td>Data: </td><td>".$eventos["data"]."</td></tr>";
		echo "<tr><td>Hora: </td><td>".$eventos["hora"]."</td></tr>";
		echo "<tr><td>Descrição: </td><td>".$eventos["descricao"]."</td></tr>";
		echo "<tr><td>Organizador: </td><td>".$eventos["organizador"]."</td></tr>";
		echo "<tr><td>Cidade: </td><td>".$eventos["cidade"]."</td></tr>";
		echo "<tr><td>Estado: </td><td>".$eventos["estado"]."</td></tr>";
		echo "<tr><td>Imagem: </td><td>".$eventos["imagem"]."</td></tr>";
		echo "<tr><td>Data de Cadastro: </td><td>".$eventos["datacad"]."</td></tr>";
		echo "<tr><td>Visualização: </td><td>".$eventos["visualizacao"]."</td></tr>";
		echo "<tr><td>Status: </td><td>".$eventos["status"]."</td></tr>";
		echo '</table>';
		echo '<a href="eventos-listar.php"><input type="button" value="voltar" class="btn btn-danger"></a>';
	}else{
		echo "erro";
	}
	include "rodape.php";
?>