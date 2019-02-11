<?php 

	include("menu.php");

	$id = $_GET['id'];

	$produtodao = new produtodao($conexao);
	$produto = $produtodao->buscarproduto($id);

?>

<h1>Alterar Produto</h1>
<form action="altera-produto.php" method="get">
    <table class="table">
        <input type="hidden" name="id" value="<?= $produto->getid()?>" />
                <?php include ("produto-formulario-base.php"); ?>
    </table>
</form>

<?php include("rodape.php"); ?>