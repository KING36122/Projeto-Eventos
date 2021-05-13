<?php
	define("TITULO", "CADASTRO DE ORGANIZADORES");
	include "nav.php";
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	if(!isset($_GET['cad'])){
	echo '<center><div class="jumbotron jumbotron-fluid">';
		echo '<center><h3 class="Sword">CADASTRO DE ORGANIZADORES</h3></center>';
		echo '</div>';
	echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="col-sm-12">';
				echo '<form action="" method="get">'; #enctype="multipart/form-data"
				echo '<div class="form-group">';
				echo '<label>';
				echo 'Nome: <input type="text" class="form-control" name="nome" autocomplete="off" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group">';
				echo '<label>';
				echo 'Endereço: <input type="text" class="form-control" name="endereco" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group">';
				echo '<label>';
				echo 'Telefone: <input type="text" class="form-control" name="telefone" required>';
				echo '</label>';
				echo '</div>';
				echo '<div class="form-group">';
				echo '<label>';
				echo 'E-mail: <input type="text" class="form-control" name="email" required>';
				echo '</label>';
				echo '</div>';
				echo '<input type="submit" class="btn btn-primary col-sm-4" value="Cadastrar" name="cad">';
				echo '</div>';
			echo '</div>';
		echo '</form></center>';
	}else{
		$nome 		= $_GET['nome'];
		$endereco 	= $_GET['endereco'];
		$telefone 	= $_GET['telefone'];
		$email 		= $_GET['email'];
		
		$cadastro = cadastrarOrganizador($conexao, $nome, $endereco, $telefone, $email);
		header("Location:organizador-listar.php?organizador");
}
	
  $local = $_SERVER['PHP_SELF'];
  $env = visu($conexao, $local);
  include "rodape.php";
  ?>
