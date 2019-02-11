<?php
    

    function carregarclasse($classe){

        require_once("class/".$classe.".php");

    }

    spl_autoload_register("carregarclasse");

    require ("conecta.php");
?>
<html>
<head>
    <title>Loja</title>
    <meta charset="utf-8">
    <link href="css/bootstrap.css" rel="stylesheet" />
    <link href="css/estilo.css" rel="stylesheet" />
    <link href="css/menu-usuario.css" rel="stylesheet" />
</head>
<body>
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="container">
            <div class="navbar-header">
                <a href="index.php" class="navbar-brand"><img src="img/logo.jpg"></a>
            </div>
            <div>
                <ul class="nav navbar-nav mr-sm-2">
                    <li><a href="login.php">Login</a></li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container">
    <div class="principal">
