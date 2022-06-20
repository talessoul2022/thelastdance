<?php
require_once ("conectDB.php");
require_once('utils.php');

class controller extends conectBD
{
    public $data = [];
    public $arrJS = [];



    function __construct()
    {
        parent::__construct();
    }

    public function addJS($js){
        $this->arrJS[]=$js;

    }
    protected function view($view)
    {
        extract($this->data);
        include("./pages/layout/header.php");
        include($view);
        include("./pages/layout/footer.php");

    }
    protected function viewlogado($views)
    {
        extract($this->data);
        extract($_SESSION);
        include("./pages/layout/header_logado.php");
        if(is_array($views)){
            foreach($views as $key => $value){
                include($value);
            }
        
        }else{
            include($views);
        }
        include("./pages/layout/footer_logado.php");
    }

    public function getIndicadorMessage(){
        if(isset($_SESSION['flash_message']))
            echo $_SESSION['flash_message'];
        unset($_SESSION['flash_message']);


    }
}
