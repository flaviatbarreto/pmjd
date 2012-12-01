<?php

class Cidade extends Controller{
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->view->render("cidade/index");
	}

	public function historia() {
      $this->view->render("cidade/historia");
   }

   public function localizacao() {
      $this->view->render("cidade/localizacao");
   }

   public function economia() {
      $this->view->render("cidade/economia");
   }
}

?>