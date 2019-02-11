<?php 

include("menu.php");

$id = $_GET['id'];
$nome = $_GET['nome'];
$preco = $_GET['preco'];
$quantidade = $_GET['quantidade'];
$marca = $_GET['marca'];
$plataforma = $_GET['plataforma'];

$produto = new Produto($nome, $preco, $quantidade, $marca, $plataforma);
$produtodao = new produtodao($conexao);
$produto->setid($_GET['id']);

if($produtodao->alteraproduto($produto)) { 
    echo '<p class="text-success">O produto <?= $produto->getnome() ?>, <?= $produto->getpreco() ?> foi alterado.</p>';
 } else {
    $msg = mysqli_error($conexao);
   
?>
    <p class="text-danger">O produto <?= $produto->getnome() ?> não foi alterado: <?= $msg?></p>




<?php } include("rodape.php"); ?>