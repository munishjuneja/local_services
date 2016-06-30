<?php 

	include_once 'connectionClass.php';
	class Service extends connection {
		var $id;
		var $name;
		var $description;
		var $subcatid;
		var $service_id;
		var $sub_category_name;
		var $subchildcatid;
		var $sub_category_id;
		var $sub_child_category_name;
		var $rate;

		public function addService(){
			$query = mysqli_query($this->con,"INSERT INTO services (`name`,`description`) values('$this->name','$this->description') ");
		}
		
		public function allServices(){
			$query = mysqli_query($this->con,"SELECT * from services");
			return $query;
		}

		public function addSubCategory(){
			$query = mysqli_query($this->con,"INSERT INTO sub_categories (`service_id`,`sub_category_name`) values('$this->service_id','$this->sub_category_name') ");
		}
		
		public function allSubCategories(){
			$query = mysqli_query($this->con,"SELECT * from sub_categories");
			return $query;
		}

		public function addSubChildCategory(){
			$query = mysqli_query($this->con,"INSERT INTO sub_child_categories (`sub_category_id`,`sub_child_category_name`,`rate`) values('$this->sub_category_id','$this->sub_child_category_name','$this->rate') ");
		}

		public function allSubChildCategories(){
			$query = mysqli_query($this->con,"SELECT * from sub_child_categories");
			return $query;

		}
		
	}
 ?>