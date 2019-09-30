<?php
	/**
	 * 
	 */
	require_once 'common.class.php';
	class Doctor extends Common
	{
		public $name,$address,$dob,$username,$password,$email,$contact,$status,$gender,$qualification,$specialist_id,$specialist_details,$created_date,$updated_date,$created_by,$updated_by;

		function login(){
							$conn= new mysqli('localhost','root','','db_clinic');
					if($conn->connect_errno != 0)
					{
						die('Database Connection Error');
					}
					$sql= "select * from tbl_doctor where email='$this->email' and password='$this->password' and status = 1";
					//echo $sql;

					$result= $conn->query($sql);
					//print_r($result);

					if ($result->num_rows ==1) {
						$data= $result->fetch_object();
						//print_r($data);

						session_start();
						$_SESSION['doctor_name']= $data->name;
						$_SESSION['doctor_username']= $data->username;
						$_SESSION['doctor_id']= $data->id;
						$_SESSION['doctor_email']= $data->email;
						
						header('location:doctor.php');
					}
					else{
						return "username and password not matched";
					}
				
				}
			

		function create()
		{
			
			 $sql= "insert into tbl_doctor (name,address,dob,email,username,password,contact,status,gender,qualification,specialist_id,specialist_details,created_date,created_by) values ('$this->name','$this->address','$this->dob','$this->email','$this->username','$this->password','$this->contact','$this->status','$this->gender','$this->qualification','$this->specialist_id','$this->specialist_details','$this->created_date','$this->created_by')";
			return $this->insert($sql);
			//echo $sql;

		}

		function list(){
			$sql= "select * from tbl_doctor";
			return $this->select($sql);
		}

		function remove(){
			$sql= "delete from tbl_doctor where id='$this->id'";
			return $this->delete($sql);
		}

		function getdoctorByID(){
			$sql= "select * from tbl_doctor where id='$this->id'";
			return $this->select($sql);
		}

		function edit()
		{
			//print_r($this);
			$sql= "update tbl_doctor set name='$this->name',address='$this->address',email='$this->email',username='$this->username',contact='$this->contact',dob='$this->dob',gender='$this->gender',status='$this->status',qualification='$this->qualification',password='$this->password', specialist_id='$this->specialist_id',specialist_details='$this->specialist_details',updated_date='$this->updated_date',updated_by='$this->updated_by' where id='$this->id'";
			return $this->update($sql);
			

		}

		function edit2()
		{
			//print_r($this);
			$sql= "update tbl_doctor set name='$this->name',address='$this->address',email='$this->email',username='$this->username',contact='$this->contact',dob='$this->dob',gender='$this->gender',status='$this->status',qualification='$this->qualification',specialist_id='$this->specialist_id',specialist_details='$this->specialist_details',updated_date='$this->updated_date',updated_by='$this->updated_by' where id='$this->id'";
			return $this->update($sql);
			

		}

		function change_psw()
		{
			//print_r($this);
			$sql="select password from tbl_doctor where id='$this->id'";
			$r=$this->select($sql);
			$res= $r[0]->password;
			 // $oldpass= $this->oldpass;
			if ($res== $this->oldpass) {
				$sql= "update tbl_doctor set password='$this->newpass' where id='$this->id'";
			return $this->update($sql);
			}
			else{
				// echo $this->oldpass.'=='.$res;
				return false;
			}
			
			

		}

		
	}
?>