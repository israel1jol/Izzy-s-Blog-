<?php

namespace Mvc\Blog;
use Mvc\Blog\Model\Database;

class Router{
    public Array $getRoutes = [];
    public Array $postRoutes = [];
    public Array $allRoutes = [];
    public Database $db;

    public function __construct()
    {
        $this->db = new Database();
    }


    public function getRoute(String $url, $fn){
        $this->getRoutes[$url] = $fn;
        $this->allRoutes[] = $url;
    }

    public function postRoute(String $url, $fn){
        $this->postRoutes[$url] = $fn;
        $this->allRoutes[] = $url;
    }

    public function resolve(){
        $renderer = false;
        $current_url = $_SERVER["PATH_INFO"] ?? "/";
        $req_method = $_SERVER["REQUEST_METHOD"];
        $query_string = $_SERVER["QUERY_STRING"] ?? "";

        foreach ($this->allRoutes as $url){
            if($url === $current_url){
                $renderer = true;
                break;
            }
        }

        if(!$renderer){
            call_user_func($this->getRoutes["/404CustomPage"]);
            return;
        }

        if($req_method == "GET"){
            call_user_func($this->getRoutes[$current_url], $query_string);
        }
        else if($req_method == "POST"){
            call_user_func($this->postRoutes[$current_url], $query_string, true);
        }
    }
}