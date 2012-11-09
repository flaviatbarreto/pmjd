<?php

class Administracao extends Controller {

   function __construct() {
      parent::__construct();
   }

   public function index() {
      $this->view->render("administracao/gabinete");
   }

   public function gabinete() {
      $this->view->render("administracao/gabinete");
   }

   public function equipe() {
      $this->view->render("administracao/equipe");
   }

   public function secretarias() {
      $this->view->render("administracao/secretarias");
   }

   public function parcerias() {
      $this->view->render("administracao/parcerias");
   }

}

?>