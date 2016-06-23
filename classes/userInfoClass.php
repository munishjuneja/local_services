<?php 
	
	include 'connectionClass.php';
	class UserInfoClass extends connection{

			public function getAllUsers(){
				
				$query = mysqli_query($this->con,"SELECT * from login");
				return $query;

			}

			public function addUser(){
				
				$query = mysqli_query($this->con,"INSERT INTO login(`contact`,`name`,`email`,`password`,`address`) values('$this->contact','$this->name','$this->email','$this->password','$this->address')");

			}
	}

 ?>