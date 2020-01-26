<?php


namespace App\Model;
use  Core\Model\Model;

class ArticleModel extends Model{

    private $id;
    private $title;
    private $text;
    private $category;
    private $date;


    
    
    
    public function queryArticles(){
        return $this->db->query("SELECT * FROM articles ORDER BY date DESC", false);
    }

    public function newArticle(){
        return $this->db->save('INSERT INTO articles SET title = ?, text= ?, date= ?, categorie_id = ?', ["Article depuis ArticleModel", "nouvel article", "2020/01/21", 4]);
    }

    public function getById($id){
        return $this->db->query("SELECT * FROM articles WHERE id='$id' ", false);
    }

    public function create(){

        $this->db->save("INSERT INTO articles SET title = ?, text= ?, category= ?, date= ? ", [$_POST["title"], $_POST["text"], $_POST["category"], $_POST["date"]]);
        header("Location: /mvc2/");
        exit();
    }

    public function update($id){
    
        $this->db->save("UPDATE articles SET title = ?, text= ?, category= ?, date= ? WHERE id = '$id'", [$_POST["title"], $_POST["text"], $_POST["category"], $_POST["date"]]);
        header("Location: /mvc2/");
        exit();
    }


    public function delete($id){
        $this->db->delete("DELETE FROM articles WHERE id='$id' ");
        header("Location: /mvc2/");
        exit();
    }

     /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id)
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * @param mixed $title
     */
    public function setTitle($title)
    {
        $this->title = $title;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

       
    public function setText($text)
    {
        $this->text = $text;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;
        return $category;
    }

    public function getDate(){
        return $this->date;
    }

    public function setDate($date){
        $this->date = $date;
    }
    


}