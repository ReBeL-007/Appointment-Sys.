<?php
	/**
	 * 
	 */
	require_once 'common.class.php';
	class Appointment extends Common
	{
		public $doctor_id,$patient_id,$date,$time,$status,$patient_name,$age,$gender,$address,$contact,$description,$confirmed_date,$confirmed_by;

		function create()
		{
			
			 $sql= "insert into tbl_appointment (doctor_id,patient_id,date,time,status,patient_name,address,age,gender,contact,description) values ('$this->doctor_id','$this->patient_id','$this->date','$this->time','$this->status','$this->patient_name','$this->address','$this->age','$this->gender','$this->contact','$this->description')";
			return $this->insert($sql);

		}

		function change()
		{
			print_r($this);
			$sql= "update tbl_appointment set status='$this->status', doctor_id='$this->doctor_id',patient_id='$this->patient_id',patient_name='$this->patient_name',date='$this->date',time='$this->time',address='$this->address', age='$this->age', gender='$this->gender', contact='$this->contact',description='$this->description' where id='$this->id'";

			return print_r($this->update($sql));
			

		}

		function list(){
			$sql= "select * from tbl_appointment";
			return $this->select($sql);
		}

		function remove(){
			$sql= "delete from tbl_appointment where id='$this->id'";
			return $this->delete($sql);
		}

		function getappointmentByID(){
			$sql= "select * from tbl_appointment where id='$this->id'";
			return $this->select($sql);
		}

		function edit()
		{
			//print_r($this);
			$sql= "update tbl_appointment set status='$this->status', doctor_id='$this->doctor_id',patient_id='$this->patient_id',patient_name='$this->patient_name',date='$this->date',time='$this->time',status='$this->status',address='$this->address', age='$this->age', gender='$this->gender', contact='$this->contact',description='$this->description',confirmed_date='$this->confirmed_date',confirmed_by='$this->confirmed_by' where id='$this->id'";

			return $this->update($sql);
			

		}

		function getBookedTime(){
			$doctor= $_POST['doctor'];
			$date= $_POST['date'];
			$sql= "select * from tbl_appointment where doctor_id= '$doctor' and date= '$date'";
			return $this->select($sql);
		}

		

		
	}
?>