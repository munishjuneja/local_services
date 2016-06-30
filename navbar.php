<?php $url =  $_SERVER['HTTP_REFERER']; ?><!-- gives url of previous page -->


<nav class="navbar navbar-default">
  <div class="container-fluid">
    
    <div class="brand_logo">
     		 	<a class="navbar-brand" href="index.php" style="width:90px; display:block; margin-top:0; padding-top:0;">
		        	<img alt="Brand" src="img/icons/new_logo.png" style="width:100%; object-fit:cover;">
		     	</a>
	</div>
	
    <ul class="nav navbar-nav navbar-right">
      <li><a href="index.php"><span class="glyphicon glyphicon-home"></span> Home</a></li>
      <li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a></li>
    </ul>
  </div>
</nav>