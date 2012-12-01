<?php

class Dashboard extends Controller{
	function __construct(){
		parent::__construct();
		
		Session::init();
		$loggedIn = Session::get('loggedIn');
		
		if($loggedIn == false){
			Session::destroy();
			header('Location: login');
			exit();
		}
                
		$this->view->js = array("dashboard/js/default.js");
		
	}
	
	public function index(){
		$this->view->render("dashboard/index");
	}
	
	public function logout(){
		Session::destroy();
		header('Location: '.URL.'login');
		exit();
	}
	
	public function xhrInsert(){
		$this->model->xhrInsert();
	}
	
	public function xhrGetListings(){
		$this->model->xhrGetListings();
	}
	
	public function xhrDeleteListing(){
		$this->model->xhrDeleteListing();
	}
}

?>