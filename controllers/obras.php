<?php

class Obras extends Controller{
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->view->render("obras/index");
	}
}

?>