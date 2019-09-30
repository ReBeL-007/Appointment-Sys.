<?php
	/**
	 * 
	 */
	require_once 'common.class.php';
	class Specialist extends Common
	{
		public $specialist,$created_date,$updated_date,$created_by,$updated_by;

		function create()
		{
			//print_r($this);
			$sql= "insert into tbl_specialist (specialist,created_by,created_date) values ('$this->specialist','$this->created_by','$this->created_date')";
			return $this->insert($sql);
			//echo $sql;

		}

		function list(){
			$sql= "select * from tbl_specialist";
			return $this->select($sql);
		}

		function remove(){
			echo $sql= "delete from tbl_specialist where id='$this->id'";
			return $this->delete($sql);
		}

		

		function edit()
		{
			//print_r($this);
			$sql= "update tbl_specialist set specialist='$this->specialist',updated_date='$this->updated_date',updated_by='$this->updated_by' where id='$this->id'";
			return $this->update($sql);
			

		}

		function getspecialistByID(){
			$sql= "select * from tbl_specialist where id='$this->id'";
			return $this->select($sql);
		}

	}
?>