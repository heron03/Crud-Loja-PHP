<?php include("menu.php");

    $id = $_GET["id"];
    removeproduto($conexao, $id);

    header("Location: produto-lista.php?removido=true");