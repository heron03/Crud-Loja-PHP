<?php
    
    class produtodao{

        private $conexao;

        function __construct($conexao){

        $this->conexao = $conexao; 
            
        }

        function listaProdutos() {
            $produtos = array();
            $resultado = mysqli_query($this->conexao, "select * from produtos");

            while($produto_array = mysqli_fetch_assoc($resultado)) {

                $nome = $produto_array['nome'];
                $preco = $produto_array['preco'];
                $quantidade = $produto_array['quantidade'];
                $marca = $produto_array['marca'];
                $plataforma = $produto_array['plataforma'];




                $produto = new Produto($nome, $preco, $quantidade, $marca, $plataforma);
                $produto->setId($produto_array['id']);

                array_push($produtos, $produto);
            }

            return $produtos;
        }

        function insereproduto(Produto $produto) {
            $query = "insert into produtos (nome, preco, quantidade, marca, plataforma) values ('{$produto->getnome()}', {$produto->getpreco()}, {$produto->getquantidade()}, '{$produto->getmarca()}', '{$produto->getplataforma()}')";
            return mysqli_query($this->conexao, $query);
        }

        function buscarproduto($id) {

            $query = "select * from produtos where id = {$id}";
            $resultado = mysqli_query($this->conexao, $query);
            $produto_buscado = mysqli_fetch_assoc($resultado);

            $nome = $produto_buscado['nome'];
            $preco = $produto_buscado['preco'];
            $quantidade = $produto_buscado['quantidade'];
            $marca = $produto_buscado['marca'];
            $plataforma = $produto_buscado['plataforma'];

            $produto = new Produto($nome, $preco, $quantidade, $marca, $plataforma);
            $produto->setid($produto_buscado['id']);

            return $produto;
        }

        function alteraproduto(Produto $produto) {
            $query = "update produtos set nome = '{$produto->getnome()}',
             marca = '{$produto->getmarca()}',
                plataforma = '{$produto->getplataforma()}',
                    preco = {$produto->getpreco()},
                        quantidade = {$produto->getquantidade()}
                            where id = '{$produto->getid()}'";
                echo $query."<br>";
            return mysqli_query($this->conexao, $query);
        }

        function removeproduto($id) {
            $query = "delete from produtos where id={$id}";
            return mysqli_query ($this->conexao,$query);
        }
    }