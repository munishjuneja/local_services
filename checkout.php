<?php 
	include_once 'classes/connectionClass.php';
	include_once 'classes/subSubCategoryClass.php';
	$finObj = new subSubCategory;
	$finObj->self_id = $_GET['id'];
	$res=$finObj->geteverything();
	while($result = mysqli_fetch_array($res)){
		echo $result['name'].">";
		echo $result['sub_category_name'].">";
		echo $result['sub_child_category_name'];
	}
 ?>
 <?php


 ?>

 <form action="index.php" name="form" method="post">
 	<label>Address</label>
 	<input type="text" name="address"><br>
 	<input type="submit" name="finalsubmit">

 </form>