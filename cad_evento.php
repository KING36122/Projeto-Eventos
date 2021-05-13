<?php
	define("TITULO", "CADASTRO DE EVENTOS");
	include "nav.php";
	include "cabecalho.php";
	include_once "conn/conexao.php";
	include "organizador.php";
	if(!isset($_GET['cad'])){
		echo '<div class="jumbotron jumbotron-fluid">';
		echo '<center><h3 class="Sword">CADASTRO DE EVENTOS</h3></center>';
		echo '</div>';
		echo '<div class="container">';
			echo '<div class="row">';
				echo '<div class="col-sm-8">';
					echo '<form action="" method="get" enctype="multipart/form-data">';
					echo '<div class="form-group">';
					echo '<label for="nome">';
					echo 'Nome:';
					echo '</label>';
					echo '<input id="nome" class="form-control" type="text" name="nome" required autocomplete="off">';
					echo '</div>';
					$categorias = listarCategoria($conexao);
					echo '<div class="form-group">';
					echo '<label>';
					echo 'Categoria: <br>';
					echo '<select class="form-control" name="categoria">';
					foreach ($categorias as $cat):
					echo '<option value="'.$cat['idcategoria'].'">'.$cat['categoria'].'</option>';
					endforeach;
					echo '</select>';
					echo '</label>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label for="local">';
					echo 'Local:';
					echo '</label>';
					echo '<input id="local" class="form-control" type="text" name="local" required autocomplete="off">';
					echo '</label>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label for="data">';
					echo 'Data:';
					echo '</label>';
					echo '<input id="data" class="form-control" type="date" name="data" required autocomplete="off">';
					echo '</label>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label for="hora">';
					echo 'Hora:';
					echo '</label>';
					echo '<input id="hora" class="form-control" type="time" name="hora" required autocomplete="off">';
					echo '</label>';
					echo '</div>';
				echo '</div>';
				echo '<div class="col-sm-4">';
					echo '<div class="form-group">';
					echo '<label>';
					echo '<h4>Digite a descrição:<br>';
					echo '<textarea class="form-control" name="desc" required autocomplete="off"></textarea>';
					echo '</label>';
					echo '</div>';
					$cidades = listarCidades($conexao);
					echo '<div class="form-group">';
					echo '<label>';
					echo 'Cidades: <br>';
					echo '<select class="form-control" name="cidade">';
					foreach ($cidades as $cid):
					echo '<option value="'.$cid['idcidade'].'">'.$cid['nome'].'</option>';
					endforeach;
					echo '</select>';
					echo '</label>';
					echo '</div>';
					$estados = listarEstados($conexao);
					echo '<div class="form-group">';
					echo '<label>';
					echo 'Estados: <br>';
					echo '<select class="form-control" name="estado">';
					foreach ($estados as $est):
					echo '<option value="'.$est['idestado'].'">'.$est['nome'].'</option>';
					endforeach;
					echo '</select>';
					echo '</label>';
					echo '</div>';
					echo '<div class="form-group">';
					echo '<label>';
					echo '<input class="form-control" type="file" name="img" required>';
					echo '</label>';
					echo '</div>';
					echo '<input type="submit" class="btn btn-primary col-sm-12" value="Cadastrar" name="cad">';
				echo '</div>';
			echo '</div>';
		echo '</div>';
		echo '</form>';
	}else{
		$nome = $_GET['nome'];
		$idcategoria = $_GET['categoria'];
		$local = $_GET['local'];
		$data = $_GET['data'];
		$hora = $_GET['hora'];
		$desc = $_GET['desc'];
		$cidade = $_GET['cidade'];
		$estado = $_GET['estado'];
		$img = $_GET['img'];

		$cadastro = cadastrarEventos($conexao, $nome, $idcategoria, $local, $data, $hora, $desc, $cidade, $estado, $img);

	}
	include "rodape.php";
?>