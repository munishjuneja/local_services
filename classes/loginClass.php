<?php 
	include"connectionClass.php";
	class login extends connection {
		var $email;
		var $password;
		var $username = "Account";
		var $type;
		public function loginNow() {
 			$result = mysqli_query($this->con,"SELECT * FROM login WHERE email = '$this->email' and password = '$this->password'");
 			if(mysqli_num_rows($result)>0) {
 				$out = mysqli_fetch_array($result);
 				$this->type =  $out['type'];
 				if($this->type == 1) {
 					$this->username =  "Admin";
 				} else {
 					$this->username = $out['name'];
 				}
 			} else {
 				$this->username = 'Account';
 			}
 			return($result);
 		}
 		
	}
 ?>