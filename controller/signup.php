<?php
require_once("./base/controller.php");
require_once("./model/dataUsuario.php");


class signup  extends controller{

     function __construct(){

     }
     public function index(){
       $usuario = new dataUsuario();
       $usuario -> fazerCadastroUsuario();
         $this->view("./pages/signup/index.php");
     }
 }
 