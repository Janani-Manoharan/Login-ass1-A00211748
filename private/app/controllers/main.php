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

        $this->view("template/home-part1");
        $this->view("template/part2-same");
        $this->view("template/home-part3");
        $this->view("template/home-part4");
        $this->view("template/footer");
        
    }
    function tabTwo () {

        $this->view("template/home-part1");
        $this->view("template/part2-same");
        $this->view("template/home-part3");
        $this->view("template/home-part4");
        $this->view("template/footer");
        
    }

}

?>