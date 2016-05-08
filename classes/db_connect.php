<?php
	class Db_Connect{
		public function __construct(){
			$host_name = 'localhost';
			$user_name = 'root';
			$password = '';
			$db_name = 'db_oop_practicc';
			
			$con = mysql_connect($host_name,$user_name,$password);
			if(!$con){
				die('Connection Problem!');
			}else{
				$db=mysql_select_db($db_name);
				if(!$db){
					die('Database not connected');
				}else{
					//echo 'db connected.';
				}
			}
		}
	}
?>