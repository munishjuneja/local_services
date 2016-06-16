<?php 
	class register extends connection {
		var $phone;
		var $name;
		var $email;
		var $regpass1;
		var $regpass2;
		var $address;
		var $message;
		function registerNow() {
			if($this->con) {
				$query = "INSERT INTO login VALUES('$this->phone',
													\"$this->name\",
													'$this->email',
													\"$this->regpass1\",
													\"$this->address\",0)";
				mysqli_query($this->con,$query);
				$this->message = "registration complete";
			} else {
				$this->message = "registration failed";
			}
		}
	}
 ?>