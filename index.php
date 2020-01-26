<?php

require 'app/App.php';
use App\App;
use App\Controller\ArticleController;

define ('ROOT', __DIR__);
App::load();

$page = filter_input(INPUT_GET, 'page', FILTER_SANITIZE_SPECIAL_CHARS);


if ($page == '') {
    $result = new ArticleController();
    $result->home();
} elseif ($page == 'show') {
    $result = new ArticleController();
    $result->show($_GET["id"]);
} elseif($page == "create") {
    if(isset($_POST["create_article"])){
        $a = new ArticleController();
        $a->modelName->setTitle($_POST["title"]);
        $a->modelName->setText($_POST["text"]);
        $a->modelName->setCategory($_POST["category"]);
        $a->modelName->setDate(strval($_POST["date"]));
        $a->createArticle();
    }
    $res = new ArticleController();
    $res->create();
} elseif($page === "edit") {
    if(isset($_POST["update_article"])){
        $a = new ArticleController();
        $a->modelName->setTitle($_POST["title"]);
        $a->modelName->setText($_POST["text"]);
        $a->modelName->setCategory($_POST["category"]);
        $a->modelName->setDate(strval($_POST["date"]));
        $a->updateArticle($_POST["id"]);
    }
    $result = new ArticleController();
    $result->edit($_GET["id"]);
} elseif($page === "delete") {
    $result = new ArticleController();
    $result->delete($_GET["id"]);
}