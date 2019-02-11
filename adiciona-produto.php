<?php 

	include("menu.php");

$nome = $_GET["nome"];
$preco = $_GET["preco"];
$quantidade = $_GET["quantidade"];
$marca = $_GET["marca"];
$plataforma = $_GET["plataforma"];

$produto = new Produto ($nome, $preco, $quantidade, $marca, $plataforma);
$produtodao = new produtodao ($conexao);

	if($produtodao->insereproduto($produto)) { ?>
    	<p class="text-success">O produto <?= $produto->getnome(); ?>, <?= $produto->getpreco(); ?>, <?= $produto->getquantidade(); ?>, <?= $produto->getmarca(); ?>, <?= $produto->getplataforma(); ?> adicionado com sucesso!</p>
	<?php } else {
   			 $msg = mysqli_error($conexao);
	?>
    <p class="text-danger">O produto <?= $produto->getnome(); ?> não foi adicionado: <?= $msg ?></p>
	
	<?php
	}

	include("rodape.php");
?>