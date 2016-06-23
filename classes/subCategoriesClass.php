<?php 

	class subCategory extends connection {
		var $id;
		var $service_id;
		var $sub_category_name;

		public function addSubCategory(){
			$query = mysqli_query($this->con,"INSERT INTO sub_categories (`sub_category_name`) values('$this->sub_category_name') ");
		}
		
		public function allSubCategories(){
			$query = mysqli_query($this->con,"SELECT `name`, `description` from sub_categories");
			return $query;
		}

	}
 ?>