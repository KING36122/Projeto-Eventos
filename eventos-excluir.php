<?php
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	
	
		$idevento = $_GET["evento"];
		$evento = excluirEventos($conexao, $idevento);
		
		header("Location:eventos-listar.php?removido=1&evento={$evento}");
		die();
	include "rodape.php";
?>