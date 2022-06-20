<?php
require_once("./base/controller.php");


class usuario extends controller{
    function __construct(){
        

    }
    public function index(){
        $this->view("./pages/usuario/index.php");
     
    }

    public function tales($valor = ''){
        $this->view("./pages/usuario/tales.php");
    }
    public function logout(){
        session_destroy();
        redirect('/login');
    }
}
