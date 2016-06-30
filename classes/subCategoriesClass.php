<?php 

	include_once 'connectionClass.php';
	class subCategory extends connection {
		var $id;
		var $service_id;
		var $faltu_id;
		var $sub_category_name;
		var $sub_category_description;

		public function addSubCategory(){
			$query = mysqli_query($this->con,"INSERT INTO sub_categories (`sub_category_name`) values('$this->sub_category_name') ");
		}
		
		public function allSubCategories(){
			$query = mysqli_query($this->con,"SELECT * from sub_categories where `service_id`='$this->id'");
			return $query;
		}
		
		public function getSubCategoriesById(){
			$query = mysqli_query($this->con,"SELECT * from sub_categories where `id`='$this->faltu_id'");
			return $query;
		}

		public function editSubCategory(){
			$query = mysqli_query($this->con,"UPDATE sub_categories set sub_category_name='$this->sub_category_name',sub_category_description='$this->sub_category_description' where id='$this->id'");
			return $query;
		}


	}
 ?>