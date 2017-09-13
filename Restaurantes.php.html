<!DOCTYPE html>

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Restaurantes</title>

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="css/bootstrap.min.css" rel="stylesheet">

<link rel="stylesheet" href="styleRest.css" type="text/css">

<link rel="stylesheet" href="css/font-awesome.min.css" type="text/css">

<link href='http://fonts.googleapis.com/css?family=Oxygen:400,300,700' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,900,700,700italic,900italic' rel='stylesheet' type='text/css'>

<link href='http://fonts.googleapis.com/css?family=Niconne' rel='stylesheet' type='text/css'>

</head>



<body>

<header class="headbar">

  <div class="fullbg">

    <div class="row">

      <div class="col-md-2 col-md-offset-5 col-sm-6 col-sm-offset-3 col-xs-8">

        <h1 class="logo">Onde comer</h1>

      </div>

      <div class="col-md-10 col-md-offset-1 col-sm-10 col-sm-offset-1 col-xs-12">

        <nav class="navi navbar navbar-default" role="navigation">

          <!-- Brand and toggle get grouped for better mobile display -->

          <div class="navbar-header">

            <button type="button" class="navbar-toggle collapsed navb" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false"> <span class="sr-only">Toggle navigation</span> <span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>

          </div>



          <!-- Collect the nav links, forms, and other content for toggling -->

          <div class="menubox collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav menu">

              <li><a href="#">Home</a></li>

              <li><a href="#">Restaurantes</a></li>

              <li><a href="#">Pizzarias</a></li>

              <li><a href="#">Hamburguerias</a></li>

              <li><a href="#">Lanchonetes</a></li>

            </ul>

          </div>

        </nav>

      </div>

      <div class="col-md-8 col-md-offset-2 col-xs-12 text-center text-banner">

        <h2>Os melhores lugares para comer na</h2>

        <p>Rua Augusta desde 1875</p>

      </div>

    </div>

  </div>

</header>

<?php

  include "DataBase.php";

  $banco = new DataBase();
  $result = $banco->query("select * from restaurantes");
  while($rec = $result->fetch())
  {
    echo '<div class="col-md-6">';
    echo '<div class="alert alert-success text-center" style="height: 200px; max-height: 200px;">';
    echo '<img align="left" border-right-width:3px class="img-thumbnail" src="./fotos/';
    echo $rec["foto"];
    echo '" style="width: 170px; height: 170px;margin-right: 20px;">';
    echo '<font color="black">';
    echo '<span class="header-text">';
    echo '<h3 align="left">'.$rec["nome"].'</h3>';
    echo '</span>';
    echo '</font>';
    //echo '<font color="black">';
    echo '<p align="left">';
    echo $rec["endereco"];
    echo '</p>';
    echo '<p align="left">';
    echo $rec["telefone"];
    echo '</p>';
    echo '<p align="left">';
    echo $rec["descricao"];
    echo '</p>';
    //echo '</font>';
    echo '</div>';
    echo '</div>';
  }
?>

<div class="container-fluid footer section-container">

  <div class="row">
    <div class="col-md-12">
      <form action="cadastroRest.php" method="POST" enctype="multipart/form-data" name="cadastro" >
        <div class="col-md-3"></div>
        <div class="col-md-6">
          <?php
            if(isset($_GET["msg"])) {
                echo '<div class="alert alert-success">
                            Cadastro enviado com sucesso!
                      </div>';
            }
          ?>
          <span class="header-text">Cadastro de restaurantes</span>
          <br>
          <div class="form-group">
            <label style="color: white;"for="nome">Nome</label>
            <input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
          </div>
          <div class="form-group">
            <label style="color: white;"for="email">Endereço</label>
            <input type="text" class="form-control" id="email" name="endereco" placeholder="Endereço" required>
          </div>
          <div class="form-group">
            <label for="email" style="color: white;">Telefone</label>
            <input type="text" class="form-control" id="email" name="telefone" placeholder="Telefone" required>
          </div>
          <div class="form-group">
            <label style="color: white;"for="foto">Foto de Estabelecimento</label>
            <input type="file" id="foto" name="foto">
            <p class="help-block">A imagem deve ter no máximo 1500x1500px.</p>
          </div>
          <div class="form-group">
            <label style="color: white;"for="perfil">Descrição (opcional)</label>
            <textarea class="form-control" id="descricao" name="descricao" rows="5"></textarea>
          </div>
          <input type="submit" class="btn btn-default" name="cadastrar" value="Cadastrar" />
          <div style="margin-top: 30px;"></div>
        </div>
      </form>

    </div>
  </div>

</body>

</html>
