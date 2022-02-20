<?php

namespace Mvc\Blog\Controllers;
use Mvc\Blog\Model\Blog;
use Mvc\Blog\Model\User;

class Controller{

    public static function index($req_query, $post_route=false){
        $blog = new Blog();
        $res = $blog->findAll();
        self::render("index", $res);
    }

    public static function about($req_query, $post_route=false){
        self::render("about");
    }

    public static function contact($req_query, $post_route=false){
        self::render("contact");
    }

    public static function post($req_query, $post_route=false){
        $blog = new Blog();
        $id = substr($req_query, 3);
        $res = $blog->findById($id);
        self::render("post", $res[0]);
    }

    public static function admin($req_query, $post_route=false){
        $blog = new Blog();
        if(!$post_route){
            if(isset($_SESSION["token"])){
                $id = substr($_SESSION["token"], 0, 14);
                $res = $blog->findByUser($id);
                self::render("adminDashboard", $res);
            }
            else{
                self::render("admin");
            }
        }
        else{
            if(isset($_POST["username"]) && isset($_POST["password"])){
                $user = new User();
                $username = html_entity_decode($_POST["username"]);
                $password = html_entity_decode($_POST["password"]);
                $res = $user->find($username);
                if(!empty($res)){
                    if(password_verify($password, $res[0]->password)){
                        $_SESSION["token"] = $res[0]->id . time();

                        $user_posts = $blog->findByUser($res[0]->id);
                        self::render("adminDashboard", $user_posts);
                    }
                    else{
                        //Password is incorrect
                    }
                }
                else{
                    //User does not exist
                }
            }
        }
    }

    public static function newArticle($req_query, $post_route=false){
        if($post_route){
            if(isset($_POST["title"]) && isset($_POST["headers"]) && isset($_POST["body"])){
                if(isset($_SESSION["token"])){
                    $blog = new Blog();
                    $title = html_entity_decode($_POST["title"]);
                    $headers = html_entity_decode($_POST["headers"]);
                    $body = html_entity_decode($_POST["body"]);
                    $id = substr($_SESSION["token"], 0, 14);
                    $res = $blog->create($id, $title, $headers, $body);
                    if(isset($res["error"])){
                        self::render("newArticle", $res);
                    }
                    else{
                        self::render("newArticle", $res);
                    }

                }
            }
        }
        else{
            self::render("newArticle");
        }
    }


    public static function render($view, $context=[]){
        ob_start();
        include_once __DIR__."/../Views/pages/".$view.".php";
        $content = ob_get_clean();
        if(isset($_SESSION["token"])) $logout = true;
        $title = "Izzy's Blog";
        $b = $view === "index" ? " " : " | ".$view;
        $title = $title .  $b;
        include_once __DIR__."/../Views/layout.php";
        
    }

    public static function render404(){
        include_once __DIR__."/../Views/404.php";
    }

}