<?php
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	
	
		$idorganizador = $_GET["organizador"];
		$organizador = excluirOrganizador($conexao, $idorganizador);
		
		header("Location:organizador-listar.php?removido=1&organizador={$organizador}");
		die();
	include "rodape.php";
?> 
