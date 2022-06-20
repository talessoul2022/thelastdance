<?php

function redirect($page){
    header("Location: " . BASE_URL . $page);
    exit;
}

function getPost($name){
    if(isset($_POST[$name]))
        return $_POST[$name];
    return"";
}

function setflashdata($msg){
    $_SESSION['flash_message'] = $msg;
}

function indicador($msg,$alert){
    return"<div class='alert alert-{$alert} alert-dismissible fade show' role='alert'>
   {$msg}
    <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close'></button>
</div>";

}
function getFlashdata(){
    echo isset($_SESSION['flash_message'] )?$_SESSION['flash_message']:"";
    unset($_SESSION['flash_message']);
}