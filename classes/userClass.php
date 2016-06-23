<?php  
	
	include"connectionClass.php";
	class user extends connection
	{
		session_start();
		if(isset($_SESSION['user'])){
			header("Location:index.php");
		}
		// var $email;
		// var $password1;
		// var $contact;
		// var $name;
		// var $password;

		public function register()
		{
			$query="select email from login where email='$this->email'";
			echo $this->email;
			$data=mysqli_query($this->con,$query);
			$rec=mysqli_fetch_array($data);
			if($rec)
			{

				$msg="Email already exist";
				echo $msg;
				return $msg;
				 
			}
			else
			{
				$query="insert into login(`contact`,`name`,`email`,`password`,`address`) values('$this->contact','$this->name','$this->email','$this->password1','$this->address')";
				mysqli_query($this->con,$query);
				echo "registerd Succesfully";
				 
			}
		}	
		public function login()
		{
			 
			$query="select * from login where email = '$this->myemail' and password = '$this->mypassword'";
			$data=mysqli_query($this->con,$query);
			if(mysqli_num_rows($result)>0)
			{
				$rec    = mysqli_fetch_array($data);
				$status = $rec['type'];

				if($status == 1)
				{
					header("location:admin.php");
				}
				else
				{
					$_SESSION['user'] = $this->myemail;
				}
			} 
			else
			{
				$msg='User is not exist';
				return $msg;
			}
		}	
		 
	}

 ?>