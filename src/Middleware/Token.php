<?php 

namespace Mvc\Blog\Middleware;

use PDO;

class Token{

    public static function encrypt(String $word, $key){
        
    }

    public static function decrypt(){

    }
    
    public static function sign(Array $payload, String $key, Array $options=[]){
        $buffer = "";
        foreach($payload as $attr => $value){
            $buffer += 
        }
    }

    public static function verify(String $token, String $key){

    }
}