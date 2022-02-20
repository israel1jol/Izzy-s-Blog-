<?php

namespace Mvc\Blog\Model;

use Mvc\Blog\Model\Database;

class Blog{
    public Database $db;

    public function __construct(){
        $this->db = new Database();
    }

    public function findById($id){
        return $this->db->findQuery("SELECT * FROM post WHERE id = :id", [":id" => $id]);
    }

    public function findAll(){
        return $this->db->find("SELECT * FROM post");
    }

    public function findByUser($id){
        return  $this->db->findQuery("SELECT * FROM post WHERE userId = :id", [":id" => $id]);
    }

    public function create(String $uuid, String $title, String $headers, String $body){
        $res = $this->db->create("INSERT INTO post (title, headers, body, userId) VALUE ('$title', '$headers', '$body', '$uuid')");
        return $res;
    }
}