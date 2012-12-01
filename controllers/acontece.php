<?php

class Acontece extends Controller {

   function __construct() {
      parent::__construct();
   }

   public function index() {
      $this->view->render("acontece/index");
   }

   public function fotos() {
      $this->view->render("acontece/fotos");
   }

   public function videos() {
      $this->view->render("acontece/videos");
   }

   public function espaco() {
      $this->view->render("acontece/espaco");
   }

   public function simbolos() {
      $this->view->render("acontece/simbolos");
   }

}

?>