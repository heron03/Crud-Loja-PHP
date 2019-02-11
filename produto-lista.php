<?php 

    require_once("logica-usuario.php");

    if(usuarioEstaLogado()) {
        include("menu.php");
    } else {
        header("Location: index.php");
    }


    if (array_key_exists("removido", $_POST) && $_POST["removido"]=="true") {

      echo "<p class='alert-success'>Produto removido</p>";

    }
?>

<div>
    
</div>

<a class="btn btn-success" href="produto-formulario.php" role="button">Adicionar Produto</a>

<table class="table table-striped table-bordered">

    <thead>
        <tr>
             <th scope="col">Nome</th>
             <th scope="col">Preço</th>
             <th scope="col">Quantidade</th>
             <th scope="col">Marca</th>
             <th scope="col">Plataforma</th>
             <th scope="col"></th>
             <th scope="col"></th>

        </tr>
    </thead>

    <?php

        $produtodao = new produtodao($conexao);
        $produtos = $produtodao->listaProdutos();
        foreach($produtos as $produto) :
    ?>

    <tr>
        <td><?= $produto->getnome() ?></td>
        <td><?= $produto->getpreco() ?></td>
        <td><?= $produto->getquantidade() ?></td>
        <td><?= $produto->getmarca() ?></td>
        <td><?= $produto->getplataforma() ?></td>

        <td>
            <form action="alterar-produto.php" method="get">
                <input type="hidden" name="id" value="<?= $produto->getid() ?>">
                <button class="btn btn-primary">Alterar</button>
            </form>
        </td>
        <td>
            <form action="remove-produto.php" method="get">
                <input type="hidden" name="id" value="<?= $produto->getid() ?>">
                <button class="btn btn-danger">Remover</button>
            </form>
        </td>
    </tr>
    <?php
        endforeach
    ?>
</table>

<?php include("rodape.php"); ?>