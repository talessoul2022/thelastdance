<?php
require_once("./base/model.php");

class dataProduto extends model{
    function __construct()
    {
        parent:: __construct();

    }

    public function getAllProdutos(){
       return $this->select('SELECT * FROM produtos WHERE id_usuario = :id_usuario', ['id_usuario'=>$_SESSION['usuario']->id]);
    }

    public function insertProduto($arrProduto){

        return $this-> insert('INSERT INTO produtos(id, nome, preco,id_usuario) VALUES(:id, :nome,:preco,:id_usuario)',$arrProduto);
    }

    public function editarProduto($arrProduto){
        return $this->update('UPDATE produtos SET nome = :nome, preco = :preco WHERE id = :id and id_usuario = :id_usuario ', $arrProduto);
        
    }
    public function deletarProduto($arrProduto){
      return $this->delete('DELETE FROM produtos WHERE id = :id',$arrProduto);  
    }

}