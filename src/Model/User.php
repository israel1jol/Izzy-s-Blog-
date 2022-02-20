<?php

namespace Mvc\Blog\Model;

use Mvc\Blog\Model\Database;

class User{

    public Database $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function find($param){
        return $this->db->findQuery("SELECT * FROM user WHERE username = :username", [":username" => $param]);
    }
}