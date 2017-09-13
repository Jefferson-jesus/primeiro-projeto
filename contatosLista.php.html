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

  <div class="container">
    <hr>
    <div class="row">
      <div class="alert alert-success">
        <h2>Lista de contatos</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-3">
        <a href="contatosForm.php" class="btn btn-success">novo contato</a>
      </div>
      <div class="col-md-9 text-right">
        <form action="contatosLista.php" method="GET">
          <input type="text" name="texto">
          <button type="submit" class="btn btn-success">
            <i class="glyphicon glyphicon-search"></i>
            buscar
          </button>
        </form>
      </div>

      <br><br>
      <table class="table">
        <tr>
          <td>ID</td>
          <td>NOME</td>
          <td>TELEFONE</td>
          <td>ENDEREÇO</td>
          <td>FOTO</td>
          <td>DESCRIÇÃO</td>
          <td> </td>
        </tr>
        <?php
        include "DataBase.php";
        $banco = new DataBase();
        $texto = "";
        if(isset($_GET["texto"])) {
          $texto = "WHERE nome LIKE '%".$_GET["texto"]."%'";
        }
        $result = $banco->query("select * from restaurantes ".$texto." ORDER BY nome ASC");
        while($rec = $result->fetch())
        {
            echo '<tr>';
            echo '<td>'.$rec["id"].'</td>';
            echo '<td>'.$rec["nome"].'</td>';
            echo '<td>'.$rec["telefone"].'</td>';
            echo '<td>'.$rec["endereco"].'</td>';
            echo '<td>'.$rec["foto"].'</td>';
            echo '<td>'.$rec["descricao"].'</td>';
            echo '<td><a href="contatosRemove.php?cod='.$rec["id"];
            echo '" class="btn btn-danger">';
            echo '<i class="glyphicon glyphicon-remove-circle"></i>';
            echo ' excluir</a></td>';
            echo '<td><a href="contatosForm.php?cod='.$rec["id"];
            echo '" class="btn btn-info">';
            echo '<i class="glyphicon glyphicon-edit"></i>';
            echo' editar</a></td>';
            echo '</tr>';
        }
        ?>
      </table>

    </div>

  </div> <!-- /container -->

</body>
</html>
