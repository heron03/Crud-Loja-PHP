<?php include("menu.php");
    
require_once("logica-usuario.php");
verificaUsuario();
 ?>

<h1>Formulário de cadastro</h1>
<form action="adiciona-produto.php">
    <table class="table">
        <tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" /></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" /></td>
        </tr>
        <tr>
            <td>Quantidade</td>
            <td><input class="form-control" type="number" name="quantidade" /></td>
        </tr>
        <tr>
            <td>Marca</td>
            <td><input class="form-control" type="text" name="marca" /></td>
        </tr>
        <tr>
            <td>Plataforma</td>
            <td><input class="form-control" type="text" name="plataforma" /></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>
    </table>
</form>

<?php include("rodape.php"); ?>
