<h1>Upload de imagens</h1>
<form action="cadastro.php" method="POST" enctype="multipart/form-data">
  Selecione a imagem: <input type="file" required name="arquivo"><br><br>
  <input type="submit" value="Salvar">
</form>


  <br><br>imagens cadastradas:
  <?php
    include("conexao.php");
    $query = "select * from arquivo";
    $result = mysqli_query($conexao, $query);

    foreach($result as $row) {
      echo '<img src="imagens/' .$row['arquivo'] .'"> ';
    }
  ?>


<br><br><br><br><br><br>
Remoção de imagens <br><br>
<form action="remover.php"  method="post">
    <input type="integer" name="codigo" placeholder="codigo a remover">
    <input type="text" name="arquivo" placeholder="arquivo a remover">
    <input type="submit" name="remover" value="remover">
</form>