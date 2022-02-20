<?php

require_once "../vendor/autoload.php";

use Mvc\Blog\Controllers\Controller;
use Mvc\Blog\Router;
use Mvc\Blog\Model\Database;

$router = new Router();
$db = new Database();

session_start();

$router->getRoute("/", [Controller::class, "index"]);
$router->getRoute("/about", [Controller::class, "about"]);
$router->getRoute("/contact", [Controller::class, "contact"]);
$router->getRoute("/post", [controller::class, "post"], "id");
$router->getRoute("/admin", [controller::class, "admin"]);
$router->postRoute("/admin", [controller::class, "admin"]);
$router->getRoute("/admin/newArticle", [Controller::class, "newArticle"]);
$router->postRoute("/admin/newArticle", [Controller::class, "newArticle"]);
$router->getRoute("/404CustomPage", [controller::class, "render404"]);

$router->resolve();