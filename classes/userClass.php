
<?php  

	include_once"connectionClass.php";
	session_start();
	class user extends connection
	{
		var $email;
		var $contact;
		var $name;
		var $password;
		var $status;
		public function login()
		{
			 
			$query="select * from login where email = '$this->email' and password = '$this->password'";
			$data = mysqli_query( $this->con,$query );
			if(mysqli_num_rows($data)>0)
			{
				
				$rec    = mysqli_fetch_array($data);
				$this->status = $rec['type'];
				$this->name   = $rec['name'];

				if($this->status == 1)
				{
					$_SESSION['admin'] = $this->name;
					$_SESSION['email'] = $this->email;
					$_SESSION['user'] = $this->email;
					$_SESSION['user_name'] = $this->name;
					header("location:services.php");
				}
				else
				{
					$_SESSION['user'] = $this->email;
					$_SESSION['user_name'] = $this->name;
					$_SESSION['email'] = $this->email;
					return($_SESSION['user']);
				}
			} 
			else
			{
				$msg='User is not exist';
				return $msg;
			}
		}
		public function register()
		{
			$query="select email from login where email='$this->email'";
			$data=mysqli_query($this->con,$query);
			$rec=mysqli_fetch_array($data);
			if($rec)
			{

				$msg="Email already exist";
				echo "<div class='alert alert-warning'>
  			<strong>{$msg}</strong> 
			</div>";
				return $msg;
				 
			}
			else
			{
				$query="insert into login(`contact`,`name`,`email`,`password`,`address`) values('$this->contact','$this->name','$this->email','$this->password1','$this->address')";
				mysqli_query($this->con,$query);

				echo "<div class='alert alert-success>
  						<strong>{$this->email}  !!</strong>  registered Successfully.
					</div>"; 
			}
		}	 
	}

 ?>