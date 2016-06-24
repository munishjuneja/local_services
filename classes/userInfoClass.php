<?php 
	
	include_once 'connectionClass.php';
	class UserInfoClass extends connection{

			var $contact;
			var $name;
			var $email;
			var $password;
			var $address;

			public function getAllUsers(){
				
				$query = mysqli_query($this->con,"SELECT * from login");
				return $query;

			}

			public function addUser(){
				
				$query = mysqli_query($this->con,"INSERT INTO login(`contact`,`name`,`email`,`password`,`address`) values('$this->contact','$this->name','$this->email','$this->password','$this->address')");

			}
	}

 ?>