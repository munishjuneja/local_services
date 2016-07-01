<?php 
	/**
	* 
	*/
	include_once"connectionClass.php";
	class AdminPanel extends connection
	{
		var $id;
		var $result;
		var $data;
		var $user_id;

		function viewServices() {
			$rows = mysqli_query($this->con,"select login.name as user_name
				,services.name as main_service
				,sub_categories.sub_category_name
				,sub_child_categories.sub_child_category_name
				,user_services.service_address
				,professionals.name as pro_name
                ,professionals.contact as pro_contact
                ,user_services.status
                ,user_services.id
				from login,services
				,professionals,sub_categories
				,sub_child_categories
				,user_services where user_services.user_id = login.id
				  and
				   user_services.sub_id = sub_categories.id 
				 and
				  user_services.main_id = services.id
				 and
				  user_services.sub_child_id = sub_child_categories.id
				 and
				 professionals.service_id = user_services.sub_child_id");
			return $rows;
		}

		function getNewServices(){
			$rows = mysqli_query($this->con,"

				select login.name as user_name
				,services.name as main_service
				,sub_categories.sub_category_name
				,sub_child_categories.sub_child_category_name
				,user_services.service_address
				,professionals.name as pro_name
                ,professionals.contact as pro_contact
                ,user_services.status

				from login,services
				,professionals,sub_categories
				,sub_child_categories
				,user_services where user_services.user_id = login.id
				  and
				   user_services.sub_id = sub_categories.id 
				 and
				  user_services.main_id = services.id
				 and
				  user_services.sub_child_id = sub_child_categories.id
				 and
				 professionals.service_id = user_services.sub_child_id
				 and
				 	login.id='$this->user_id'");
			return $rows;
		}

		function getServices(){
			$rows = mysqli_query($this->con,"

						select login.name as username
						,services.name as service_name
						,sub_categories.sub_category_name
						,sub_child_categories.sub_child_category_name
						,user_services.service_address
						,user_services.status
						,user_services.id as service_id
		 				from login,services,sub_categories,sub_child_categories,
		 				user_services where user_services.user_id = login.id
		  				and 
		  				user_services.sub_id = sub_categories.id 
		 				and 
		 				user_services.main_id = services.id
		 				and
		 				user_services.sub_child_id = sub_child_categories.id
		 				and login.id='$this->id'");
			
			return $rows;

		}

		function userServices(){
			$query = mysqli_query($this->con,"SELECT user_id from user_services");
			echo mysqli_num_rows($query);
			return $query;

		}

		function changeStatus(){
			$query = mysqli_query($this->con,"UPDATE user_services set status=1 where id='$this->id'");

			return $query;
		}
	}
 ?>