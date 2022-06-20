<?php
require_once("./base/controller.php");
require_once('./model/dataprotudo.php');

class produtos extends controller
{
    function __construct()
    {
        if (!isset($_SESSION['usuario']))
            redirect("/login");
        parent::__construct();
    }
    public function index()
    {
        $this->addJS("produtos.js");
        $this->viewlogado("./pages/produtos/index.php");
    }

    public function getProdutos()
    {
        $produto =  new dataProduto();
        $data = $produto->getAllProdutos();
        echo json_encode(['data' => $data]);
    }

    public function inserirProduto()
    {
        if ($_POST) {
            $produto =  new dataProduto();
            $arrProduto = [
                'id' => null,
                'nome' => $_POST['nome'],
                'preco' => $_POST['preco'],
                'id_usuario' => $_POST['id_usuario']

            ];

            $produto->insertProduto($arrProduto);
        }
    }

    public function editarProduto()
    {

        if ($_POST) {
            $produto =  new dataProduto();
            $arrProduto = [
                'id' => $_POST['id'],
                'nome' => $_POST['nome'],
                'preco' => $_POST['preco'],
                'id_usuario' => $_POST['id_usuario']

            ];

            $produto->editarProduto($arrProduto);
        }
    }

    public function deletarProduto()
    {
        if ($_POST) {
            $produto =  new dataProduto();
            $arrProduto = [
                'id' => $_POST['id'],


            ];

            $produto->deletarProduto($arrProduto);
        }
    }
}
