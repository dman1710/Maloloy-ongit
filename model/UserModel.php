<?php

	require("../database/Database.php");

	class UserModel{
	
	private $dbObj;
	private $tablename = "tableuser";
	public $id;
	public $name;
	public $lastname;
	public $age;
	public $username;
	public $password;
	
	
	public function __construct(){
        $this->dbObj = new Database();
    }
	
	public function insert(){
        $sql = "INSERT INTO $this->tablename (name, lastname,age,username,password) VALUES('$this->name','$this->lastname','$this->age','$this->username', '$this->password')";
        if($this->dbObj->execute($sql)){
			return true;
		}else {
			return false;
		}
		
		
		
    }
	
	public function update($id){
			$sql = "UPDATE  tableuser SET name = 'joseph arnie' WHERE id = $id";
			if($this->dbObj->execute($sql)){
				return true;
				
			}else{
				return false;
			}
		}
	
	
	
	public function delete($id){
			$sql = "DELETE FROM tableuser WHERE id = $id";
			if($this->dbObj->execute($sql)){
				return true;
				
			}else{
				return false;
			}
		}
	
	public function readAll(){
        $sql = "SELECT * FROM $this->tablename";
        return $this->dbObj->execute($sql);
    }
	
	
	public function __destruct(){
        unset($this->dbObj);
    }
	
}
?>