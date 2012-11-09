<?php

class View{
	function __construct(){
		
	}
	
	public function render($name,$header=false,$footer=false){
		if($header){
			require "views/$header.php";
         require "views/$name.php";
         require "views/$footer.php";
		}else{
			require "views/header.php";
			require "views/{$name}.php";
			require "views/footer.php";
		}
	}
}

?>