<?php

class User_Model extends Model{
	
    public function __construct(){
        parent::__construct();
    }
    
    public function userList(){    
        return $this->db->select("SELECT id,username,role FROM ".USER_TABLE);
    }
    
    public function userSingleList($id){
        return $this->db->select("SELECT id,username,role FROM ".USER_TABLE." WHERE id = :id",array('id'=>$id));
    }
    
    public function create($data){
        $this->db->insert(USER_TABLE,array(
            'username' => $data['user'],
            'password' => Hash::create('md5', $data['pass']),
            'role' => $data['role']
        ));
    }
    
    public function edit($data){
        $this->db->update(USER_TABLE,array(
            'username' => $data['user'],
            'password' => Hash::create('md5', $data['pass']),
            'role' => $data['role']
        ),"id = {$data['id']}");
    }
    
    public function delete($id){
        $role = $this->db->select("SELECT id,username,role FROM ".USER_TABLE." WHERE id = :id",array('id'=>$id));
      
        if($role[0]['role'] == 'woner') return false;
        
        $this->db->delete(USER_TABLE,"id = $id");
    }
    
}

?>