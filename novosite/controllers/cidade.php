<?php

class Cidade extends Controller{
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->view->render("cidade/index");
	}
}

?>