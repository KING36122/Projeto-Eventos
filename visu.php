<!DOCTYPE html>
<html>
<head>
	<title>INICIAL</title>
	<meta charset="utf-8"> 
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
    <link rel="stylesheet" href="css/img.css"/>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-blue bg-dark">
  <a class="navbar-brand" href="#"><img src="ifam-sem-fundo.png" width="100px"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="inicial.php">HOME<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          ORGANIZADOR
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="organizador-cadastro.php">Cadastro Organizador</a>
          <a class="dropdown-item" href="organizador-listar.php">Visualizar Organizadores</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          EVENTOS
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="cad_evento.php">Cadastro de Eventos</a>
          <a class="dropdown-item" href="eventos-listar.php">Visualisar Eventos</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          CATEGORIA
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          <a class="dropdown-item" href="categoria.php">Cadastro de Categoria</a>
          <a class="dropdown-item" href="categoria-listar.php">Visualizar Categorias</a>
          <!-- <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#">Something else here</a>
        </div> -->
      </li>
      <li class="nav-item">
        <button type="button" class="btn btn-link" data-toggle="modal" data-target="#exampleModal">FAÇA SEU LOGIN</button>
      <!--Modal-->
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledly="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">FAÇA SEU LOGIN</h5>
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-label="Close">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          <aside class="login">
        <!-- <h2 class="H2">Login</h2> -->
          <!-- <center><text class="cont">Use sua conta do <text class="g">G</text><text class="o1">o</text><text class="o2">o</text><text class="g1">g</text><text class="l">l</text><text class="e">e</text></text></center> -->
          <input type="text" name="nome" placeholder="Digite seu email" class="nome"></input>
          <input type="password" name="senha" placeholder="Digite sua senha" class="senha"></input>
          
          <!-- <center><input type="submit" name="enviar" value="Enviar" title="Enviar" class="env"></input></center> -->
      </aside>
        </div>
        <button type="button" class="btn btn-primary" data-dismiss="modal">Login</button>
        <!-- <div class="modal-footer">
          <button type="button" class="btn btn-dark" data-dismiss="modal">Login</button>
          <!-<button type="button" class="btn btn-danger">Save</button> -->
        </div>
      </div>
    </div>
  </div>
      <!-- <li class="nav-item">
        <a class="nav-link disabled" href="#">Disabled</a>
      </li> -->
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
    </form>
  </div>
</nav>
<!-- <div class="col-sm-12">	
<div id="carouselExampleSlidesOnly" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <center><img class="d-block img" src="img/90f1b0d3f5a85b5525fb4b7b3a5ec162.jpg" alt="IMG"></center>
    </div>
    <div class="carousel-item">
       <center><img class="d-block img1" src="img/images(48).jpg" alt="IMG"></center>
    </div>
    <div class="carousel-item">
       <center><img class="d-block img2" src="img/PicsArt_11-14-08.08.18.jpg" alt="IMG"></center>
    </div>
    </li>
  </div> -->
</div>
</div>
  <script src="js/jquery-3.2.1.slim.min.js"></script>
	<script src="js/popper.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
<?php
include_once "conn/conexao.php";
  include "organizador.php";
  echo '<table class="table table-striped table-bordered">';
  echo '<tr><th>Local</th><th>Quantidade de visu</th></tr>';
  $local = $_SERVER['PHP_SELF'];
  $env = visu($conexao, $local);
  $count = contar($conexao);
  foreach($count as $linha){
    echo '<tr>';
    echo '<td>'.$linha["local"].'</td>';
    echo '<td>'.$linha["contador"].'</td>';
    echo '</tr>';
    }
?>
</body>
</html>
