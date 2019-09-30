

<?php
	/**
	 * 
	 */
	require_once 'common.class.php';
	class Schedule extends Common
	{
		public $doctor_id,$start_time,$end_time,$day,$max_Patient,$created_date,$updated_date,$created_by,$updated_by;


		function create()
		{
			//print_r($this);
			  $sql= "insert into tbl_schedule (doctor_id,start_time,end_time,day,max_Patient,created_by,created_date) values ('$this->doctor_id','$this->start_time','$this->end_time','$this->day','$this->max_Patient','$this->created_by','$this->created_date')";
			return $this->insert($sql);
			

		}

		function list(){
			$sql= "select * from tbl_schedule";
			return $this->select($sql);
		}

		function remove(){
			$sql= "delete from tbl_schedule where id='$this->id'";
			return $this->delete($sql);
		}

		function getscheduleByID(){
			$sql= "select * from tbl_schedule where id='$this->id'";
			return $this->select($sql);
		}

		function edit()
		{
			//print_r($this);
			$sql= "update tbl_schedule set doctor_id='$this->doctor_id', day='$this->day', start_time='$this->start_time', end_time='$this->end_time', max_Patient='$this->max_Patient', updated_date='$this->updated_date', updated_by='$this->updated_by' where id='$this->id'";
			return $this->update($sql);
			

		}

		function timeslot(){
			$sql="select start_time, end_time from tbl_schedule where doctor.email='$doc_email'";
		}

		function getdoctorForAppt(){
			$date=$_POST['date'];
			$sql= "select * from tbl_schedule where day= '$date'";
			return $this->select($sql);
		}

		function getTimeForAppt(){
			$doctor= $_POST['doctor'];
			$date= $_POST['date'];
			$sql= "select * from tbl_schedule where doctor_id= '$doctor' and day= '$date'";
			return $this->select($sql);

		}

	}
?>