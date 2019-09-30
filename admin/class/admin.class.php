<?php 

class Admin{
	public $id, $name, $username, $password, $role, $last_login, $status, $email;

	function set($var, $value)
	{
		$this->$var= $value;
	}

	function get($var)
	{
	return $this->$var;
	}

	function login(){
		//print_r($this);
		
		$conn= new mysqli('localhost','root','','db_clinic');
		if($conn->connect_errno != 0)
		{
			die('Database Connection Error');
		}
		$sql= "select * from tbl_admin where email='$this->email' and password='$this->password' and status = 1";
		//echo $sql;

		$result= $conn->query($sql);
		//print_r($result);

		if ($result->num_rows ==1) {
			$data= $result->fetch_object();
			//print_r($data);

			session_start();
			$_SESSION['admin_name']= $data->name;
			$_SESSION['admin_username']= $data->username;
			$_SESSION['admin_role']= $data->role;
			$_SESSION['admin_email']= $data->email;
			
			header('location:dashboard.php');
		}
		else{
			return "username and password not matched";
		}
	
	}
}


?>