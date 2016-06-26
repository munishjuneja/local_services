<?php 
	include_once 'connectionClass.php';
	class subSubCategory extends connection {
		var $id;
		var $self_id;
		var $sub_child_category_name;
		var $rate;

		public function addSubChildCategory(){
			$query = mysqli_query($this->con,"INSERT INTO sub_child_categories(`sub_category_name`,`sub_child_category_name`,`rate`) values('$this->sub_category_name','$this->sub_child_category_name','$this->rate')");
		}
		public function allSubChildCategories(){
			$query = mysqli_query($this->con, "SELECT * from sub_child_categories where `sub_category_id`='$this->id'");
			return $query;
		}
		public function geteverything(){
			$query = mysqli_query($this->con,"select services.name,sub_categories.sub_category_name,sub_child_categories.sub_child_category_name from services,sub_categories,sub_child_categories where sub_categories.service_id = services.id and sub_child_categories.sub_category_id = sub_categories.id and sub_child_categories.id='$this->self_id'");
			return $query;
		}

	}
 ?>