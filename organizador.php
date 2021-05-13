<?php
function cadastrarOrganizador($conexao, $nome, $endereco, $telefone, $email){
	$query = mysqli_query($conexao, "INSERT INTO organizador (nome, endereco, telefone, email) VALUES 
				('$nome', '$endereco', '$telefone', '$email')");
	return $query;
}

function alterarOrganizador($conexao, $nome, $endereco, $telefone, $email, $organizador){
	$query = mysqli_query($conexao, "UPDATE organizador SET nome='{$nome}', endereco='{$endereco}', telefone='{$telefone}', email='{$email}' WHERE idorganizador = '{$organizador}'");
	return $query;
}

function excluirOrganizador($conexao, $organizador){
	$query = mysqli_query($conexao, "DELETE FROM organizador WHERE idorganizador = '{$organizador}'");
	return $query;
}


function listarOrganizador($conexao){
	$query = mysqli_query($conexao, "SELECT * FROM organizador");
	while($linha = mysqli_fetch_assoc($query)){
		$organizadores[] = $linha;
	}
	return $organizadores;
}

function selecionaOrganizador($conexao, $organizador){
	$query = mysqli_query($conexao, "SELECT * FROM organizador WHERE idorganizador = ".$organizador);
	$organizador = mysqli_fetch_assoc($query);
	return $organizador;
}

function cadastrarCategoria($conexao, $categoria){
	$query = mysqli_query($conexao, "INSERT INTO categoria (categoria) VALUES ('$categoria')");
	return $query;
}

function listarCategoria($conexao){
	$query = mysqli_query($conexao, "SELECT * FROM categoria");
	while($linha = mysqli_fetch_assoc($query)){
		$categoria[] = $linha;
	}
	return $categoria;
}

function alterarCategoria($conexao, $nome, $categoria){
	$query = mysqli_query($conexao, "UPDATE categoria SET categoria='{$nome}' WHERE idcategoria = '{$categoria}'");
	return $query;
}

function selecionaCategoria($conexao, $idcategoria){
	$query = mysqli_query($conexao, "SELECT * FROM categoria WHERE idcategoria = ".$idcategoria);
	$categoria = mysqli_fetch_assoc($query);
	return $categoria;
}

function listarEstados($conexao){
	$query = mysqli_query($conexao, "SELECT * FROM estados");
	while($linha = mysqli_fetch_assoc($query)){
		$estados[] = $linha;
	}
	return $estados;
}

function listarCidades($conexao){
	$query = mysqli_query($conexao, "SELECT * FROM cidades");
	while($linha = mysqli_fetch_assoc($query)){
		$cidades[] = $linha;
	}
	return $cidades;
}

function cadastrarEventos($conexao, $nome, $idcategoria, $local, $data, $hora, $desc, $cidade, $estado, $img){
	$query = mysqli_query($conexao, "INSERT INTO eventos (nome, idcategoria, local, data, hora, descricao, cidade, estado, imagem) VALUES ('$nome', '$idcategoria', '$local', '$data', '$hora', '$desc', '$cidade', '$estado', '$img')");
	return $query;
}

function alterarEventos($conexao, $nome, $local, $data, $hora, $evento){
	$query = mysqli_query($conexao, "UPDATE eventos SET nome='{$nome}', local='{$local}', data='{$data}', hora = '{$hora}'  WHERE id = '{$evento}'");
	return $query;
}

function excluirEventos($conexao, $evento){
	$query = mysqli_query($conexao, "DELETE FROM eventos WHERE id = '{$evento}'");
	return $query;
}


function listarEventos($conexao){
	$query = mysqli_query($conexao, "SELECT * FROM eventos");
	while($linha = mysqli_fetch_assoc($query)){
		$eventos[] = $linha;
	}
	return $eventos;
}

function selecionaEventos($conexao, $evento){
	$query = mysqli_query($conexao, "SELECT * FROM eventos WHERE id = ".$evento);
	$eventos = mysqli_fetch_assoc($query);
	return $eventos;
}

function visu($conexao, $local){
	$query = mysqli_query($conexao, "INSERT INTO visualizacao VALUES (null, '$local')");
	return $query;
}

function contar($conexao){
	$query = mysqli_query($conexao, "SELECT count(*) 'contador', local FROM visualizacao group by local;");
	return $query;
}