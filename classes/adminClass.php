<?php 
	/**
	* 
	*/
	include_once"connectionClass.php";
	class AdminPanel extends connection
	{
		var $result;
		var $data;
		var $user_id;

		function viewServices() {

			$rows = mysqli_query($this->con,"select login.name as user_name, services.name, sub_categories.sub_category_name, sub_child_categories.sub_child_category_name, user_services.service_address, user_services.status from login, services, sub_categories, sub_child_categories, user_services where login.id = user_services.user_id and sub_categories.service_id = services.id and sub_child_categories.sub_category_id = sub_categories.id and sub_child_categories.id= user_services.service_id and login.id = '$this->user_id'");
			return $rows;
		}

		function getServices(){
			$rows = mysqli_query($this->con,"select login.name as user_name, services.name, sub_categories.sub_category_name, sub_child_categories.sub_child_category_name, user_services.service_address, user_services.status from login, services, sub_categories, sub_child_categories, user_services where login.id = user_services.user_id and sub_categories.service_id = '$this->services.id' and sub_child_categories.sub_category_id ='$this->sub_categories.id' and sub_child_categories.id='$this-> user_services.service_id' and login.id = '$this->user_id'");
			return $rows;

		}

		function userServices(){
			$query = mysqli_query($this->con,"SELECT user_id from user_services");
			return $query;
		}
	}
 ?>