<?php
	require_once('db_connect.php');
	class User{
		
		public function __construct(){
			$db_obj = new Db_Connect();
		}
		
		public function save_user($data){
			//echo '<pre>';
			//print_r($data);
			$sql = "insert into tbl_user (first_name,last_name,email_address,password,address,mobile_no,city,country,zip_code) values ('$data[first_name]','$data[last_name]','$data[email_address]','$data[password]','$data[address]','$data[mobile_no]','$data[city]','$data[county]','$data[zip_code]')";
			
			if(!mysql_query($sql)){
				die('SQL Error: ' .mysql_error());
			}else{
				return 'User Information Successfully Uploaded!';
			}
			
		}
		
		public function select_all_user(){
			$sql = "select * from tbl_user";
			$query_result = mysql_query($sql);
			return $query_result;
		}
	}
?>