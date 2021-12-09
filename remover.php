<?php

  include("conexao.php");

    $sql = "DELETE FROM arquivo where codigo=" . $_POST['codigo'];
    echo $sql;
    
    mysqli_query($conexao, $sql);

    $diretorio = "imagens/".$_POST['arquivo'];
    move_uploaded_file($_FILES['arquivo']['tmp_name'], $diretorio . $nome);
    unlink($diretorio);

    header('Location: index.php');
