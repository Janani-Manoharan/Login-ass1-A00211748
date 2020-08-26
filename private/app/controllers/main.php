<?php

class Main extends Controller {

    function __construct() {
        parent::__construct();
    }
    /*
     * http://localhost/
     */
    function Index () {

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
        if(strcmp($blogname,$_SESSION["login_id"])== 0){ 
        $this->view("template/update",$val);
        }
        else {
        $this->view("template/Noupdate");
        }

    }

}

?>