<?php
	define("TITULO", "EDITAR ORGANIZADORES");
	// include "nav.php";
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	if(isset($_GET['organizador'])){
		if(!isset($_GET['edita'])){
			$idorganizador = $_GET["organizador"];
			$organizador = selecionaOrganizador($conexao, $idorganizador);
			echo "<p>Edição do cadastro do Organizador <strong>$organizador[nome]</strong></p>";
			echo '<form action="" method="get">';
				echo 'Nome: <input type="text" name="nome" value="'.$organizador["nome"].'" required class="form-control"><br>';
				echo 'Endereço: <input type="text" name="endereco"  value="'.$organizador["endereco"].'" required class="form-control"><br>';
				echo 'Telefone: <input type="text" name="telefone" value="'.$organizador["telefone"].'" required class="form-control"><br>';
				echo 'E-mail: <input type="text" name="email" value="'.$organizador["email"].'" required class="form-control"><br>';
				echo '<input type="hidden" name="edita"><input type="hidden" name="organizador" value="'.$idorganizador.'">';
				echo '<input type="submit" class="btn btn-primary" value="Alterar" class="btn btn-primary">';	
			echo '</form>';
		}else{
			$nome 		= $_GET['nome'];
			$endereco 	= $_GET['endereco'];
			$telefone 	= $_GET['telefone'];
			$email 		= $_GET['email'];
			$organizador= $_GET['organizador'];
			
			$edicao = alterarOrganizador($conexao, $nome, $endereco, $telefone, $email, $organizador);
			header("Location:organizador-listar.php?organizador");
			die();
			
	}
}else{
	echo "Error 404";
}
	include "rodape.php";
?>
