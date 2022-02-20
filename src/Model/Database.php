<?php

namespace Mvc\Blog\Model;

use Exception;
use PDO;

class Database{
    public PDO $db;

    public function __construct()
    {
        $this->db = new PDO("mysql:host=localhost;port=3306;dbname=blog", "root", "");
        $this->db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
        $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public function create($query){
        try{
            $res = $this->db->prepare($query);
            $res->execute();
            return ["success" => "Successfully created entry"];
        }
        catch( Exception $e){
            return [
                "error" => $e
            ];
        }
    }

    public function find($query){
        try{
            $res = $this->db->prepare($query);
            $res->execute();
            return $res->fetchAll();
        }
        catch( Exception $e){
            return [
                "error" => $e
            ];
        }
    }

    public function findQuery($query, $arr){
        try{
            $res = $this->db->prepare($query);
            foreach( $arr as $key => $value ){
                $res->bindValue($key, $value);
            }
            $res->execute();
            return $res->fetchAll();
        }
        catch( Exception ){
            return [
                "error" => "Call to find row in database failed"
            ];
        }
    }
}