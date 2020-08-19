<?php
class BlogModel extends Model{
    function __construct()
    {
        parent::__construct();
        $this->db = new PDO("mysql:host=db;dbname=database", "root","root");
    }

    function DbVersion(){
        $sql = 'SELECT VERSION()';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetch();
        return $res[0];

    }

    function getBlogLists(){
        $sql = 'SELECT * FROM blog_lists';
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $res = $stmt->fetchAll();
        return $res;
    }

    function getOneBlogPost($id=1){
        $sql = 'SELECT * FROM blog_lists where author_id = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array($id));
        $res = $stmt->fetch();
        return $res;
        
    }
    function createOneBlogPost($){
        $sql = 'INSERT INTO blog_lists where author_id = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array($id));
        $res = $stmt->fetch();
        return $res;
        
    }
}
?>