<?php

class Database extends PDO{
	
    public function __construct(){
        parent::__construct(DB_TYPE.':host='.DB_HOST.';dbname='.DB_NAME,DB_USER,DB_PASS);
    }
    
    public function insert($table,$data){
        
        $fieldNames = '`'.implode('` , `',array_keys($data)).'`';
        $fieldValues = ':'.implode(', :',array_keys($data));
        
        $sql = "INSERT INTO $table ($fieldNames) VALUES ($fieldValues)";
        $sth = $this->prepare($sql);
        
        foreach($data as $key => $value){
            $sth->bindValue(":$key", $value);
        }
        
        $sth->execute();
    }
    
    public function update($table,$data,$where){
        $fieldDetails = null;
        foreach($data as $key => $value){
            $fieldDetails .= "`$key`=:$key ,";
        }
        $fieldDetails = rtrim($fieldDetails,',');
        
        $sql = "UPDATE $table SET $fieldDetails WHERE $where";
        $sth = $this->prepare($sql);
        
        foreach($data as $key => $value){
            $sth->bindValue(":$key", $value);
        }
        
        $sth->execute();
    }
    
    public function select($sql,$data = array(),$fetchMode = PDO::FETCH_ASSOC){
        $sth = $this->prepare($sql);
        
        foreach($data as $key => $value){
            $sth->bindValue(":$key", $value);
        }
        
        $sth->execute();
        return $sth->fetchAll($fetchMode);
    }
    
    public function delete($table,$where,$limit=1){
        $sql = "DELETE FROM $table WHERE $where LIMIT $limit";
        return $this->exec($sql);
    }
}

?>