<?php
require_once("./base/conectDB.php");
require_once("./base/utils.php");

class dataUsuario extends conectBD{
    
    function __construct()
    {
        parent::__construct();
    }

    public function fazerLogin()
    {
    
    if($_POST){
        if(!isset($_POST['email'])){
            setflashdata(indicador('Campo e-mail não informado', "warning"));
   
        }else if(!isset($_POST['senha'])){
            setflashdata(indicador('Campo senha não informado', "warning"));

        }else{
            $data = $this->select('SELECT *FROM usuario WHERE email = :email',['email' =>$_POST['email']]);
            if(count($data)>0){

               if($data[0]->ativo == 'Sim'){
                   if($data[0]->senha == md5($_POST['senha'])){
                    setflashdata(indicador('Login realizado com sucesso', "success"));

                    $_SESSION['usuario'] = $data[0];
                    redirect("/dashboard");
                    

                   }else{
                    
                    setflashdata(indicador('Email ou senha invalido.', "warning"));
                   }

               }else{
                
                setflashdata(indicador('Se cadastro esta desativado. Entre em contato com o administrador', "warning"));

               }

            }else{

                
                setflashdata(indicador('E-mail não cadastrado', "warning"));

            }
        }

    
    }
    
    }
    public function fazerCadastroUsuario(){
        
        if($_POST){
         
            if(!isset($_POST['email'])){
                setflashdata(indicador('Campo e-mail não informado', "warning"));

    
            }else if(!isset($_POST['senha'])){
                setflashdata(indicador('Campo senha não informado', "warning"));

            }else if(!isset($_POST['nome'])){
           
                setflashdata(indicador("Campo nome nao informado", "warning"));
            }else{
                $arrDados = $_POST;
                $arrDados['senha']= md5($arrDados['senha']);
                $arrDados['ativo']= 'Sim';
                $arrDados['id'] = null;
             
                $this-> insert('INSERT INTO usuario(id, nome, email, senha, ativo) VALUE (:id, :nome, :email, :senha, :ativo)',
                $arrDados);

                $data = $this->select('SELECT *FROM usuario WHERE email = :email',['email' =>$_POST['email']]);
                setflashdata(indicador('Cadastro realizado com sucesso', "success"));
                $_SESSION['usuario'] = $data[0];
                
               redirect("/dashboard");
                
            }
        }

    }

}