<?php

class Index extends Controller {

   function __construct() {
      parent::__construct();
      $this->view->js = array("index/js/s3Slider.js", "index/js/custom.js");
      $this->view->css = array("index/css/s3Slider.css");
   }

   public function index() {
      $this->view->render("index/index");
   }

}
?>