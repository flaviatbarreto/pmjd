<?php

class Dashboard_Model extends Model{
	
	function __construct(){
		parent::__construct();
	}
	
	public function xhrInsert(){
		$text = $_POST['text'];
		
		$sth = $this->db->prepare("INSERT INTO ".DATA_TABLE." (text) VALUES (:text)");
		$sth->execute(array(":text" => $text));
		
		$data = array('text' => $text, 'id' => $this->db->lastInsertId());
		echo json_encode($data);
	}
	
	public function xhrGetListings(){
		$sth = $this->db->prepare("SELECT * FROM ".DATA_TABLE);
		$sth->setFetchMode(PDO::FETCH_ASSOC);
		$sth->execute();
		$data = $sth->fetchAll();
		echo json_encode($data);
	}
	
	public function xhrDeleteListing(){
		$id = $_POST['id'];
                $sql = "DELETE FROM ".DATA_TABLE." WHERE id = '{$id}'";
		$sth = $this->db->prepare($sql);
                $sth->execute();
	}
}

?>