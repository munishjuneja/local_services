
<?php  

	include_once"connectionClass.php";
	session_start();
	class user extends connection
	{
		var $id;
		var $email;
		var $contact;
		var $name;
		var $password;
		var $status;
		var $msg;
		var $msg_success;
		public function login()
		{
			 
			$query="select * from login where email = '$this->email' and password = '$this->password'";
			$data = mysqli_query( $this->con,$query );
			if(mysqli_num_rows($data)>0)
			{
				
				$rec    = mysqli_fetch_array($data);
				$this->status = $rec['type'];
				$this->name   = $rec['name'];
				$this->id     = $rec['id'];
				if($this->status == 1)
				{
					$_SESSION['admin'] = $this->name;
					$_SESSION['admin_id'] = $this->id;
					$_SESSION['user_id'] = $this->id;
					$_SESSION['email'] = $this->email;
					$_SESSION['user'] = $this->email;
					$_SESSION['user_name'] = $this->name;
					header("location:admin.php");
				}
				else
				{
					$_SESSION['user'] = $this->email;
					$_SESSION['user_id'] = $this->id;
					$_SESSION['user_name'] = $this->name;
					$_SESSION['email'] = $this->email;
					return($_SESSION['user']);
				}
			} 
			else
			{
				$this->msg='* Please enter valid username and password.';
				return $this->msg;
			}
		}
		public function register()
		{
			$query="select email from login where email='$this->email'";
			$data=mysqli_query($this->con,$query);
			$rec=mysqli_fetch_array($data);
			if($rec)
			{

				$this->msg="*Email already exist.";
				return $this->msg;
				 
			}
			else
			{
				$query="insert into login(`contact`,`name`,`email`,`password`,`address`) values('$this->contact','$this->name','$this->email','$this->password1','$this->address')";
					if(mysqli_query($this->con,$query)) {
						$this->msg_success='Account registered successfully.';
						return $this->msg_success;
					}
			}
		}

		public function checkemail(){
			$query = mysqli_query($this->con,"SELECT * from login where email='$this->email'");

			return mysqli_num_rows($query);
		}	 
	}

 ?>