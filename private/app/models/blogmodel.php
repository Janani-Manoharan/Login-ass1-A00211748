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
    function createOneBlogPost($blogname,$blogtheme,$email){
        $sql = 'INSERT INTO blog_lists (blog_name, blog_theme, author_email, publish_date) values (?,?,?,now())';
       // $sql = "INSERT INTO blog_lists {author_id, blog_name, blog_theme, author_email, publish_date} values (4,'blogname','blogtheme','email@email.com',sysdate)";
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array($blogname,$blogtheme,$email));
        $res = $stmt->fetch();
        return $res;
        
    }

    function updateOneBlogPost($blogname,$blogtheme,$email,$id){
        $sql = 'UPDATE blog_lists SET blog_name = ?, blog_theme = ?, author_email = ? where author_id = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array($blogname,$blogtheme,$email,$id));
        $res = $stmt->fetch();
        return $res;
    }

    function getHash($login){
         $sql = 'SELECT hash_val FROM blog_author where author_name = ?';
        $stmt = $this->db->prepare($sql);
        $stmt->execute(array($login));
        $res = $stmt->fetch();
        return $res[0];
    }
}
?>