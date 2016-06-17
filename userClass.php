<?php 
	class user{
		var $username;
		var $password;

		public function getUsers(){
			$query = mysqli_query($con,"SELECT * from employee where username = '$this->$username' and password='$this->password'");

		}

	}
 ?>