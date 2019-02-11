<tr>
            <td>Nome</td>
            <td><input class="form-control" type="text" name="nome" value="<?= $produto->getnome() ?>" /></td>
        </tr>
        <tr>
            <td>Preço</td>
            <td><input class="form-control" type="number" name="preco" value="<?= $produto->getpreco() ?>" /></td>
        </tr>
        <tr>
            <td>Quantidade</td>
            <td><input class="form-control" type="number" name="quantidade" value="<?= $produto->getquantidade() ?>"/></td>
        </tr>
        <tr>
            <td>Marca</td>
            <td><input class="form-control" type="text" name="marca" value="<?= $produto->getmarca() ?>"/></td>
        </tr>
        <tr>
            <td>Plataforma</td>
            <td><input class="form-control" type="text" name="plataforma" value="<?= $produto->getplataforma() ?>"/></td>
        </tr>
        <tr>
            <td><button class="btn btn-primary" type="submit">Cadastrar</button></td>
        </tr>