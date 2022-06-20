<?php

class conectBD{
    public $db;
    function __construct()
    {
        $dsn = "mysql:host=localhost;port=3306;dbname=crud";
        $username = "root";
        $password = "";
        $options = array(
            PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
        );

        try {
            $this->db = new PDO($dsn,$username,$password,$options);

        } catch (PDOException $e) {

            die("DB erro conction. Error: ".$e->getMessage());
           
        }

    
    }

    public function select($sql, $param = []){
        $sth= $this->db->prepare($sql);

        if(count($param)<= 0){
            $param = null;
        }
        if($sth->execute($param)){
            return $sth->fetchAll(PDO::FETCH_CLASS);

        }
        return null;
    }
    public function insert($sql, $param = []){
        $dbh = $this -> db->prepare($sql);
        $dbh->execute($param);
        return $this->db-> lastInsertId();
    }

    public function update($sql, $param = []){
        return $this->db->prepare($sql)->execute($param);
    }

    public function delete($sql, $param = []){
        return $this->db->prepare($sql)->execute($param); 
    }

    public function query($sql){
        return $this->select ($sql);
    }
}