<?php
require_once("./base/controller.php");


class main  extends controller{

     function __construct(){

     }
     public function index(){
        $this->view("./pages/main/index.php");
     }
 }
 