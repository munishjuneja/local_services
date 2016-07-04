<?php
      
    if(!empty($_GET['q']))
    { 
    	$q = $_GET['q'];
         
    	$query = "select * from services where name like '%$q%'";
        $con = mysqli_connect('localhost','root','strongpassword','local_services');

    	$result=mysqli_query($con,$query);
       	if(mysqli_num_rows($result)>0)
       	{
	    	while ($output = mysqli_fetch_array($result)) 
	    	{
	    		echo "<a href='subCategoriesView.php?id={$output['id']}'>".$output['name']."<a><hr>";
	            
	    	}
	    }
	    else
	    {
	    	$query1 = "select * from sub_categories where sub_category_name
	    	 like '%$q%'";
	    	 $result1=mysqli_query($con,$query1);
	       	if(mysqli_num_rows($result1)>0)
	       	{
		    	while ($output1 = mysqli_fetch_array($result1)) 
		    	{
		    		echo "<a href='subChildCategoriesView.php?id={$output1['id']}' >".$output1['sub_category_name']."</a>";
		           
		    	}
		    }
	    }

    }
     
?>