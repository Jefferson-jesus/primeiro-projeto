<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>Aula Contatos - Projeto Integrado</title>
  <!-- Bootstrap core CSS -->
  <link href="./css/bootstrap.min.css" rel="stylesheet">
  <!-- Custom styles for this template -->
  <script src="./js/jquery-2.2.2.min.js"></script>
  <script src="./js/bootstrap.min.js"></script>
</head>
<body>

  <?php
    $titulo = "Cadastrar";
    $nome = "";
    $email = "";
    $telefone = "";
    $foto = "";
    $cod = 0;
    $linkSubmit = "contatosInsere.php";
    if(isset($_GET["cod"])) {
      $titulo = "Editar";
      $linkSubmit = "contatosAltera.php";
      $cod = $_GET["cod"];
      include "DataBase.php";
      $banco = new DataBase();
      $result = $banco->query("select * from contatos WHERE id=".$_GET["cod"]);
      if($rec = $result->fetch()) {
        $nome = $rec["nome"];
        $email = $rec["email"];
        $telefone = $rec["telefone"];
        $foto = $rec["foto"];
      }
    }
    if (!empty($foto["name"])) {
      // Largura mínima em pixels
      $largura_min = 200;
      // Altura mínima em pixels
      $altura_min = 200;

      // Largura máxima em pixels
      $largura_max = 1500;
      // Altura máxima em pixels
      $altura_max = 1500;

      // Tamanho máximo do arquivo em bytes
      $tamanho = 2097152;

      // Verifica se o arquivo é uma imagem
      if(!preg_match("~^image/p?(jpeg|jpeg|png|gif|bmp)$~i", $foto["type"])){
        $errors[] = "Envie uma imagem válida.";
      }

      // Pega as dimensões da imagem
      $dimensoes = getimagesize($foto["tmp_name"]);

      // Verifica se a largura x altura da imagem é menor que o permitida
      if($dimensoes[0] < $largura_min OR $dimensoes[1] < $altura_min) {
        $errors[] = "As dimensões da imagem não podem ser menores que ".$largura."x".$altura." pixels";
      }

      // Verifica se a largura x altura da imagem é maior que o permitida
      if($dimensoes[0] > $largura_max OR $dimensoes[1] > $altura_max) {
        $errors[] = "As dimensões da imagem não podem ser maiores que ".$largura."x".$altura." pixels";
      }

      // Verifica se o tamanho da imagem é maior que o tamanho permitido
      if($foto["size"] > $tamanho) {
        $errors[] = "A imagem deve ter no máximo ".(int)($tamanho/1048576)." mb.";
      }
    }

    // Se não houver nenhum erro
    if (count($errors) == 0) {
      $nome_miniatura = "default.png";

      if (!empty($foto["name"])) {
        // Pega extensão da imagem
        preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

        $time = md5(uniqid(time()));

        // Gera um nome único para a imagem
        $nome_imagem = $time . "." . $ext[1];

        $caminho = "fotos/";

        // Caminho de onde ficará a imagem
        $caminho_imagem = $caminho . "real/" . $nome_imagem;

        // Faz o upload da imagem para seu respectivo caminho
        move_uploaded_file($foto["tmp_name"], $caminho_imagem);

        // pegando as dimensoes reais da imagem, largura e altura
        list($width, $height) = getimagesize($caminho_imagem);

        // setando a largura da miniatura
        $new_width = 200;
        // setando a altura da miniatura
        $new_height = 200;

        $image_p = imagecreatetruecolor($new_width, $new_height);
        $image = imagecreatefromjpeg($caminho_imagem);
        imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

        // Cria um nome para a miniatura
        $nome_miniatura = $time . ".jpg";

        // o 3º argumento é a qualidade da miniatura de 0 a 100
        imagejpeg($image_p, $caminho . $nome_miniatura, 100);
        imagedestroy($caminho . $image_p);
      }

      // Insere os dados no banco
      $sql = $mysqli->query("INSERT INTO pessoas (nome, email, foto, perfil) VALUES ('".$nome."', '".$email."', '".$nome_miniatura."', '".$perfil."')");

      // Se os dados forem inseridos com sucesso
      if ($sql){
        echo '<div class="alert alert-success" role="alert">Pessoa cadastrada com sucesso!</div>';
      }
    } else {
      $e = '<div class="alert alert-danger" role="alert"><strong>Opssss!</strong> Foram encontrados os seguintes erros:<br />';
      foreach ($errors as $erro) {
        $e .= "<li>" . $erro . "</li>";
      }
      $e .= '</div>';
      echo $e;
    }
  }
  ?>
  <div class="container">
    <hr>
    <div class="row">
      <div class="alert alert-danger">
        <h2>
          <?php echo $titulo; ?> contatos
        </h2>
      </div>
    </div>

    <div class="row">

      <form action="<?php echo $linkSubmit; ?>" method="GET">
        <div class="form-group">
          <label for="exampleInputEmail1">Nome</label>
          <input value="<?php echo $nome; ?>" name="txtNome" type="text" class="form-control" placeholder="Digite o nome">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Telefone</label>
          <input value="<?php echo $telefone; ?>"name="txtTel" type="text" class="form-control" placeholder="digite telefone">
        </div>
        <div class="form-group">
          <label for="exampleInputEmail1">Email</label>
          <input value="<?php echo $email; ?>"name="txtEmail" type="email" class="form-control" placeholder="Digite Email">
        </div>
        <div class="form-group">
          <label for="exampleInputPassword1">Foto</label>
          <input value="<?php echo $foto; ?>"name="txtFoto" type="text" class="form-control"placeholder="Digite nome do arquivo foto">
        </div>
        <input type="hidden" name="cod" value="<?php echo $cod; ?>">
        <button type="submit" class="btn btn-danger">
          <?php echo $titulo; ?>
        </button>
      </form>

      <?
      include("../banco/DataBase.php");

      $banco = new DataBase();
      $result = $banco->query("select * from usuarios");
      while($rec = $result->fetch())
      // Se o usuário clicou no botão cadastrar efetua as ações
      if ($_POST['cadastrar']) {

      	// Recupera os dados dos campos
      	$nome = $_POST['nome'];
      	$email = $_POST['email'];
      	$foto = $_FILES["foto"];
      	$perfil = $_POST['perfil'];

      	$errors = array();

      	if (empty($nome)) {
      		$errors[] = "Entre com o nome da pessoa.";
      	}

      	if (empty($email)) {
      		$errors[] = "Entre com o e-mail da pessoa.";
      	}

      	if ($result = $mysqli->query("SELECT * FROM `pessoas` WHERE `email` = '" . $email . "';")) {
      		/* determine number of rows result set */
      		$row_cnt = $result->num_rows;

      		if ($row_cnt > 0)
      			$errors[] = "Este e-mail já está cadastrado.";

      		/* close result set */
      		$result->close();
      	}

      	/*if (empty($foto["name"])) {
      		$errors[] = "É necessário enviar a imagem de perfil da pessoa.";
      	}*/

      	if (!empty($foto["name"])) {
      		// Largura mínima em pixels
      		$largura_min = 200;
      		// Altura mínima em pixels
      		$altura_min = 200;

      		// Largura máxima em pixels
      		$largura_max = 1500;
      		// Altura máxima em pixels
      		$altura_max = 1500;

      		// Tamanho máximo do arquivo em bytes
      		$tamanho = 2097152;

      		// Verifica se o arquivo é uma imagem
      		if(!preg_match("~^image/p?(jpeg|jpeg|png|gif|bmp)$~i", $foto["type"])){
      			$errors[] = "Envie uma imagem válida.";
      		}

      		// Pega as dimensões da imagem
      		$dimensoes = getimagesize($foto["tmp_name"]);

      		// Verifica se a largura x altura da imagem é menor que o permitida
      		if($dimensoes[0] < $largura_min OR $dimensoes[1] < $altura_min) {
      			$errors[] = "As dimensões da imagem não podem ser menores que ".$largura."x".$altura." pixels";
      		}

      		// Verifica se a largura x altura da imagem é maior que o permitida
      		if($dimensoes[0] > $largura_max OR $dimensoes[1] > $altura_max) {
      			$errors[] = "As dimensões da imagem não podem ser maiores que ".$largura."x".$altura." pixels";
      		}

      		// Verifica se o tamanho da imagem é maior que o tamanho permitido
      		if($foto["size"] > $tamanho) {
      			$errors[] = "A imagem deve ter no máximo ".(int)($tamanho/1048576)." mb.";
      		}
      	}

      	// Se não houver nenhum erro
      	if (count($errors) == 0) {
      		$nome_miniatura = "default.png";

      		if (!empty($foto["name"])) {
      			// Pega extensão da imagem
      			preg_match("/.(gif|bmp|png|jpg|jpeg){1}$/i", $foto["name"], $ext);

      			$time = md5(uniqid(time()));

      			// Gera um nome único para a imagem
      			$nome_imagem = $time . "." . $ext[1];

      			$caminho = "fotos/";

      			// Caminho de onde ficará a imagem
      			$caminho_imagem = $caminho . "real/" . $nome_imagem;

      			// Faz o upload da imagem para seu respectivo caminho
      			move_uploaded_file($foto["tmp_name"], $caminho_imagem);

      			// pegando as dimensoes reais da imagem, largura e altura
      			list($width, $height) = getimagesize($caminho_imagem);

      			// setando a largura da miniatura
      			$new_width = 200;
      			// setando a altura da miniatura
      			$new_height = 200;

      			$image_p = imagecreatetruecolor($new_width, $new_height);
      			$image = imagecreatefromjpeg($caminho_imagem);
      			imagecopyresampled($image_p, $image, 0, 0, 0, 0, $new_width, $new_height, $width, $height);

      			// Cria um nome para a miniatura
      			$nome_miniatura = $time . ".jpg";

      			// o 3º argumento é a qualidade da miniatura de 0 a 100
      			imagejpeg($image_p, $caminho . $nome_miniatura, 100);
      			imagedestroy($caminho . $image_p);
      		}

      		// Insere os dados no banco
      		$sql = $mysqli->query("INSERT INTO pessoas (nome, email, foto, perfil) VALUES ('".$nome."', '".$email."', '".$nome_miniatura."', '".$perfil."')");

      		// Se os dados forem inseridos com sucesso
      		if ($sql){
      			echo '<div class="alert alert-success" role="alert">Pessoa cadastrada com sucesso!</div>';
      		}
      	} else {
      		$e = '<div class="alert alert-danger" role="alert"><strong>Opssss!</strong> Foram encontrados os seguintes erros:<br />';
      		foreach ($errors as $erro) {
      			$e .= "<li>" . $erro . "</li>";
      		}
      		$e .= '</div>';
      		echo $e;
      	}
      }
      ?>

      <div class="page-header"><h1>Cadastro de Pessoa</h1></div>
      <form action="" method="post" enctype="multipart/form-data" name="cadastro" >
      	<div class="col-md-4">
      		<div class="form-group">
      			<label for="nome">Nome</label>
      			<input type="text" class="form-control" id="nome" name="nome" placeholder="Nome" required>
      		</div>
      		<div class="form-group">
      			<label for="email">Endereço de e-mail</label>
      			<input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
      		</div>
      		<div class="form-group">
      			<label for="foto">Foto de Perfil</label>
      			<input type="file" id="foto" name="foto">
      			<p class="help-block">A imagem deve ter no máximo 1500x1500px.</p>
      		</div>
      		<div class="form-group">
      			<label for="perfil">Perfil (opcional)</label>
      			<textarea class="form-control" id="perfil" name="perfil" rows="5"></textarea>
      		</div>
      		<input type="submit" class="btn btn-default" name="cadastrar" value="Cadastrar" />
      		<div style="margin-top: 30px;"></div>
      	</div>
      </form>



    </div>

  </div> <!-- /container -->

</body>
</html>
