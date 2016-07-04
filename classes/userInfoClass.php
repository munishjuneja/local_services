<?php 
	
	include_once 'connectionClass.php';
	class UserInfoClass extends connection{

			var $contact;
			var $name;
			var $email;
			var $password;
			var $address;
			var $id;
			var $username;
			var $oldpassword;
			var $newpassword;

			public function getAllUsers(){
				
				$query = mysqli_query($this->con,"SELECT * from login");
				return $query;

			}

			public function getUser(){

				$query = mysqli_query($this->con, "SELECT * from login where email='$this->email' and password='$this->password'");
				return $query;
			}

			public function addUser(){
				
				$query = mysqli_query($this->con,"INSERT INTO login(`contact`,`name`,`email`,`password`,`address`) values('$this->contact','$this->name','$this->email','$this->password','$this->address')");

			}
			public function editUser(){
				$query = mysqli_query($this->con,"SELECT * FROM login where id='$this->id' and password='$this->oldpassword'");
				
				$result = 0;
				if (mysqli_num_rows($query)>0) {
					$editquery = mysqli_query($this->con,"UPDATE login set password='$this->newpassword',contact='$this->contact',name ='$this->username' where id='$this->id'");
					$result=1;
					return $result;
				}
				else{
					return $result; 
				}

			}
	}

 ?>