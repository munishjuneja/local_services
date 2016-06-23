<?php
define('server_name','localhost');
define('user_name' ,'root');
define('password' , 'strongpassword');
define('database', 'localservices');
 
$con=mysqli_connect(server_name,user_name,password,database);
?>