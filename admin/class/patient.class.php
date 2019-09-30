

<?php
	/**
	 * 
	 */
	require_once 'common.class.php';
	class Patient extends Common
	{
		public $id,$name,$last_login,$username,$password,$email,$created_date,$updated_date,$created_by,$updated_by;

		function login(){
						
				 $sql= "select * from tbl_patient where email='$this->email' and password='$this->password'";
				return $this->check($sql);	
			}

		function create()
		{
			//print_r($this);
			 $sql= "insert into tbl_patient (name,email,username,password,created_date) values ('$this->name','$this->email','$this->username','$this->password','$this->created_date')";
			if( $patient_id = $this->insert($sql)){
			 	session_start();
				$_SESSION['patient_name']= $this->name;
				$_SESSION['patient_username']= $this->username;
				$_SESSION['patient_id']= $patient_id;
				$_SESSION['patient_email']= $this->email;

				//return "login successfully";
				header('location:patient.php');
			}else{
				return false;
			}
			//echo $sql;

		}

		function list(){
			$sql= "select * from tbl_patient";
			return $this->select($sql);
		}

		function remove(){
			$sql= "delete from tbl_patient where id='$this->id'";
			return $this->delete($sql);
		}

		function getpatientByID(){
			$sql= "select * from tbl_patient where id='$this->id'";
			return $this->select($sql);
		}

		function edit()
		{
			//print_r($this);
			echo $sql= "update tbl_patient set name='$this->name', username='$this->username', email='$this->email', updated_date='$this->updated_date' where id='$this->id'";
			return $this->update($sql);
			

		}

		function change_psw()
		{
			//print_r($this);
			$sql="select password from tbl_patient where id='$this->id'";
			$r=$this->select($sql);
			 $res= $r[0]->password;
			 // $oldpass= $this->oldpass;
			if ($res== $this->oldpass) {
				$sql= "update tbl_patient set password='$this->newpass' where id='$this->id'";
			return $this->update($sql);
			}
			else{
				// echo $this->oldpass.'=='.$res;
				return false;
			}
			
			

		}

	}
?>