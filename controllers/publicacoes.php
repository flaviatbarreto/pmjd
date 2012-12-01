<?php

class Publicacoes extends Controller {

   function __construct() {
      parent::__construct();
   }

   public function index() {
      $this->view->render("publicacoes/index");
   }

   public function concursos() {
      $this->view->render("publicacoes/concursos");
   }

   public function documentacao() {
      $this->view->render("publicacoes/documentacao");
   }

   public function transparencia() {
      $this->view->render("publicacoes/transparencia");
   }
}

?>