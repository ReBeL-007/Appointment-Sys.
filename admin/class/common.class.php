<?php
	/**
	 * 
	 */
	abstract class Common {
		var $conn;
		function set($var, $value) {
		$this->$var= $value;
		}

		function get($var) {
		return $this->$var;
		}

		function connect(){
			$this->conn= new mysqli('localhost','root','','db_clinic');
			if($this->conn->connect_errno != 0)
			{
				die('Database Connection Error');
			}
		}

		function insert($sql){		
				//print_r($sql) ;
			$this->connect();
			$this->conn->query($sql);
			
			if($this->conn->affected_rows > 0 && $this->conn->insert_id > 0){
				return $this->conn->insert_id;
				}

			else{
				return false;
			}

		}

		function select($sql){
			$this->connect();
			$res= $this->conn->query($sql);
			$data=[];
			while ($obj=$res->fetch_object()) {
				array_push($data,$obj);
			}
			return $data;

		}

		function check($sql){
			$this->connect();
			$result= $this->conn->query($sql);
			if ($result->num_rows ==1){
				$data= $result->fetch_object();
			//print_r($data);

			session_start();
			$_SESSION['patient_name']= $data->name;
			$_SESSION['patient_username']= $data->username;
			$_SESSION['patient_id']= $data->id;
			$_SESSION['patient_email']= $data->email;

					//return "login successfully";
					header('location:patient.php');
				}
					else{
					return "username and password not matched";
					}
		}

		function delete($sql){		
			
			$this->connect();
			$this->conn->query($sql);
			if($this->conn->affected_rows > 0){
				return true;
			}
			else{
				return false;
			}

		}

		function update($sql){		
			//echo $sql;
			$this->connect();
			$this->conn->query($sql);
			if($this->conn->affected_rows > 0 ){
				return true;
			}
			else{
				return false;
			}

		}
	}	
?>