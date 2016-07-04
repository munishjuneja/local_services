<?php  
	include_once"connectionClass.php";
	class CheckoutClass extends connection
	{
		var $user_id;
		var $service_address;
		var $sub_child_id;
		var $main_id;
		var $sub_id; 
		var $service_status;

		public function add_user_service() {
			$query = "INSERT INTO user_services (`user_id`,`main_id`,`sub_id`,`sub_child_id`,`service_address`,`status`) VALUES('$this->user_id','$this->main_id','$this->sub_id','$this->sub_child_id','$this->service_address','$this->service_status')";
			if(mysqli_query($this->con,$query)) {
				$msg = "services booked";
			}
			return $msg;
		}
	}
?>