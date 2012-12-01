<?php

class Ouvidoria extends Controller{
	function __construct(){
		parent::__construct();
	}
	
	public function index(){
		$this->view->render("ouvidoria/index");
	}
}

?>
