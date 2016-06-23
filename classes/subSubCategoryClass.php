<?php 
	include 'connectionClass.php';
	class subSubCategory extends connection {
		var $parentCatId;
		var $categoryName;
		var $categoryDesc;

		public function addCategory(){
			$query = mysqli_query($this->con,"INSERT INTO subSubCategory (`parent_cat_id`,`sub_sub_category_name`,`sub_sub_category_description`) values('$this->parentCatId,'$this->categoryName','$this->categoryDesc') ");
		}
		public function allCategories(){
			$query = mysqli_query($this->con,"SELECT `sub_sub_category_name`, `sub_sub_category_description` from mainCategory");
			return $query;
		}

	}
 ?>