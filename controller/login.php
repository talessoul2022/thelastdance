<?php
require_once("./base/controller.php");
require_once("./model/dataUsuario.php");


class login  extends controller{

     function __construct(){
         
        parent:: __construct();

     }
     public function index(){
       $usuario = new dataUsuario();
       $usuario -> fazerLogin();
        
         $this->addJS("login.js");
        $this->view("./pages/login/index.php");
     }
 }
 