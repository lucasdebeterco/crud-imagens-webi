<?php

  include("conexao.php");

  if(isset($_FILES['arquivo'])) {
    $extensao = strtolower(substr($_FILES['arquivo']['name'], -4));
    $nome = md5(time()) . $extensao;
    $diretorio = "imagens/";
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $nome);

    $sql = "INSERT INTO arquivo (codigo, arquivo) VALUES (null, '$nome')";
    mysqli_query($conexao, $sql);
    header('Location: index.php');
  }
