<?php

class Noticias extends Controller{
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->view->render("noticias/index");
	}
}

?>