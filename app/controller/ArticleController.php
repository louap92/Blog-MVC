<?php

namespace App\Controller;

class ArticleController extends AppController{


    public function __construct(){
        $this->loadModel('Article');
    }

    public function home(){
        $articles = $this->modelName->queryArticles();
        return $this->render('home', [
            "articles" => $articles
        ]);
    }

    public function show($id){
        $article = $this->modelName->getById($id);
        return $this->render('show', [
            "article" => $article
        ]);
    }

    public function create(){
        return $this->render("create", []);
    }

    public function createArticle(){
        return $this->modelName->create();
    }

    public function edit($id){
        $article = $this->modelName->getById($id);
        return $this->render('edit',[
            "article"=>$article
        ]);
    }

    public function updateArticle($id){
        return $this->modelName->update($id);
    }

    public function delete($id){
        return $this->modelName->delete($id);
    }
}