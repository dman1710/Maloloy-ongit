<?php

	class Database{
	
		private $con;
		private $servername = "localhost";
		private $username = "root";
		private $password = "";
		private $dbname = "maloloyon_db";
		
		public function __construct(){
				$this->con = mysqli_connect($this->servername, $this->username, $this->password, $this->dbname);
		}
		
		//for activity 1
		/*public function execute($sql){
		
				if(mysqli_query($this->con, $sql)){
						return 1;
						
				}else{
					return 0;
				}
		}*/
		
				public function execute($sql){
		
				return mysqli_query($this->con, $sql);

		}
		
		public function __destruct(){
				mysqli_close($this->con);
		}
		
		
	
	}


?>