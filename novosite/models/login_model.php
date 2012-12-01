<?php

class Login_Model extends Model{
	
    public function __construct(){
        parent::__construct();
    }

    public function run(){
        $sth = $this->db->prepare("SELECT id, role FROM ".USER_TABLE." WHERE 
                username = :user AND password = :pass LIMIT 1");

        $sth->execute(array(
            ':user' => $_POST['user'],
            ':pass' => Hash::create('md5',$_POST['pass'])
        ));
        $sth->setFetchMode(PDO::FETCH_ASSOC);
        $data = $sth->fetch();

        if($sth->rowCount() > 0){
            Session::init();
            Session::set("role",$data['role']);
            Session::set('loggedIn',true);
            header('Location: ../dashboard');
        }else{
            header('Location: ../login');
        }
    }
}

?>