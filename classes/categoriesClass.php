<?php 
	include 'connectionClass.php';
	class CategoriesClass extends connection {
		var $categoryName;
		var $categoryDesc;

		public function addCategory(){
			$query = mysqli_query($this->con,"INSERT INTO mainCategory (`category_name`,`category_description`) values ('$this->categoryName','$this->categoryDesc') ");
			return $query;
		}

	}
 ?>