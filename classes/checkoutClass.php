<?php  
	include_once"connectionClass.php";
	class CheckoutClass extends connection
	{
		var $user_id;
		var $service_id;
		var $service_status;
		var $service_address;
		public function add_user_service() {
			$query = "INSERT INTO user_services (`user_id`,`service_id`,`service_address`,`status`) VALUES('$this->user_id','$this->service_id','$this->service_address','$this->service_status')";
			if(mysqli_query($this->con,$query)) {
				$msg = "services booked";
			}
			return $msg;
		}
	}
?>