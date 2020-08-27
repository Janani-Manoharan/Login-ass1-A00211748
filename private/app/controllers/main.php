<?php

class Main extends Controller {

    function __construct() {
        parent::__construct();
    }
    /*
     * http://localhost/
     */
    function Index () {
        if ($_SERVER["REQUEST_METHOD"] == "POST" && (empty($_SESSION["isValid"]) || !$_SESSION["isValid"])){
        //if(isset($_POST["submit"])) {
        $login = htmlentities($_POST["login_id"]);
            $password = htmlentities($_POST["password"]);
            $this->model('blogmodel');
        $hash = $this->blogmodel->getHash($login);
        $_SESSION["isValid"] = password_verify($password,$hash);
        $_SESSION["login"] = $login;
        if($_SESSION["isValid"]){
            header("Location: /main/mainPage");
        }else{
            header("Location: /main/Index");
        }

        }
        
        $this->view("template/home-part1");
        $this->view("template/part2-same");
        $this->view("template/signin");
        $this->view("template/footer");
    }

    function mainPage(){
        $this->view("template/home-part1");
        $this->view("template/part2-same");
        $this->view("template/home-part3");
        $this->view("template/home-part4");
        $this->view("template/footer");
    }
    function tabOne () {

        $this->model('blogmodel');
        $lists = $this->blogmodel->getBlogLists();
            
        $this->view("template/left-part1");
        $this->view("template/part2-same");
        $this->view("template/left-part3a");
        foreach($lists as $item){
                           
              $this->view("template/left-part3",$item);

            }
            $this->view("template/left-part3b");
        $this->view("template/footer");
        
    }


    function tabTwo ($id=1) {
        $this->model('blogmodel');
            $One_blog = $this->blogmodel->getOneBlogPost($id);
            
        $this->view("template/right-part1");
        $this->view("template/part2-same");
        $this->view("template/right-part3",$One_blog);
       $this->view("template/right-part4");
        $this->view("template/footer");
        
    }

    function tabThree($id=null){
         $this->model('blogmodel');
         if(isset($_POST['submit'])){
                                                $blogname = $_POST['blogname'];
                                                $blogtheme = $_POST['blogtheme'];
                                                $email = $_POST['email'];
                                                $date = $_POST['date'];
                                                $id = $_POST['id'];
                                                $hash = password_hash("jack",PASSWORD_DEFAULT);
                                                echo $hash;
                                                  
                                                   
                                                $val = $this->blogmodel->updateOneBlogPost($blogname,$blogtheme,$email,$id);
                                                
                                               
                                            }
        $val = $this->blogmodel->getOneBlogPost($id);
        $this->view("template/update-part1");
        $this->view("template/part2-same");
        if(strcmp($blogname,$_SESSION["isValid"])== 0){ 
        $this->view("template/update",$val);
        }
        else {
        $this->view("template/Noupdate");
        }

    }

    function logOut(){
        session_start();

// Unset all of the session variables.
$_SESSION = array();

// If it's desired to kill the session, also delete the session cookie.
// Note: This will destroy the session, and not just the session data!
if (ini_get("session.use_cookies")) {
    $params = session_get_cookie_params();
    setcookie(session_name(), '', time() - 42000,
        $params["path"], $params["domain"],
        $params["secure"], $params["httponly"]
    );
}

// Finally, destroy the session.
session_destroy();
header("Location: /main/Index");
    }

}

?>