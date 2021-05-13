<?php
	define("TITULO", "EDITAR EVENTOS");
	// include "nav.php";
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";

	if(isset($_GET['evento'])){
		if(!isset($_GET['edita'])){
			$idevento = $_GET["evento"];
			$eventos = selecionaEventos($conexao, $idevento);
			$categorias = listarcategoria($conexao);
			$cidades = listarCidades($conexao);
			$estados = listarEstados($conexao);
			echo "<p>Edição do cadastro do Evento <strong>$eventos[nome]</strong></p>";
			echo '<form action="" method="get">';
				echo 'Nome: <input type="text" name="nome" value="'.$eventos["nome"].'" required class="form-control"><br>';
				// echo 'Categoria: <br>';
				// 	echo '<select class="form-control" name="categoria">';
				// 	foreach ($categorias as $cat):
				// 	echo '<option value="'.$cat['idcategoria'].'">'.$cat['categoria'].'</option>';
				// 	endforeach;
				echo 'Local: <input type="text" name="local" value="'.$eventos["local"].'" required class="form-control"><br>';
				echo 'Data: <input type="text" name="data" value="'.$eventos["data"].'" required class="form-control"><br>';
				echo 'Hora: <input type="text" name="hora" value="'.$eventos["hora"].'" required class="form-control"><br>';
				// echo '<h4>Digite a descrição:<br>';
				// 	echo '<textarea class="form-control" name="descricao" required autocomplete="off" value="'.$eventos["descricao"].'"></textarea>';
				// echo 'Cidades: <br>';
				// echo '<select class="form-control" name="cidade">';
				// foreach ($cidades as $cid):
				// echo '<option value="'.$cid['idcidade'].'">'.$cid['nome'].'</option>';
				// endforeach;
				// echo 'Estados';
				// echo 'Estados: <br>';
				// 	echo '<select class="form-control" name="estado">';
				// 	foreach ($estados as $est):
				// 	echo '<option value="'.$est['idestado'].'">'.$est['nome'].'</option>';
				// 	endforeach;
				// echo '<input class="form-control" type="file" name="img" required value="'.$eventos['imagem'].'">';
				echo '<input type="hidden" name="edita"><input type="hidden" name="evento" value="'.$idevento.'">';
				echo '<input type="submit" name="edita" class="btn btn-primary" value="Alterar" class="btn btn-primary">';	
			echo '</form>';
		}else{
			$nome 		= $_GET['nome'];
			//$idcategoria 	= $_GET['categoria'];
			$local 	= $_GET['local'];
			$data 	= $_GET['data'];
			$hora 		= $_GET['hora'];
			// $descricao = $_GET['descricao'];
			// $cidade = $_GET['cidade'];
			// $estado = $_GET['estado'];
			// $img = $_GET['img'];
			$evento = $_GET['evento'];
			
			$edicao = alterarEventos($conexao, $nome, $local, $data, $hora, $evento);
			header("Location:eventos-listar.php?");
			die();
	}
}else{
	echo "Error 404";
}
	include "rodape.php";
?>
