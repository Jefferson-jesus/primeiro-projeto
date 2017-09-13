<?php
    include "DataBase.php";
    $banco = new DataBase();

    $errors = array();
    $nome_imagem = "";
    $foto = $_FILES["foto"];

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
        //imagedestroy($caminho . $image_p);
      }

    }

    $query = "INSERT INTO diversao
              (nome,endereco,telefone,foto,descricao)
              VALUES (
                '".$_POST["nome"]."',
                '".$_POST["endereco"]."',
                '".$_POST["telefone"]."',
                '".$nome_imagem."',
                '".$_POST["descricao"]."'
              )";
    $result = $banco->queryExec($query);
    header("location: Diversao.php?msg=1");
?>
