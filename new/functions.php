<?php
	function login(){
		include "conf.php";
		$test = $_SESSION['uid'];
		if (empty($test)) {
			return false;
		}
		$q = "SELECT * FROM Client_Users WHERE email='$test'";
		$q=mysqli_query($dataBase['connection'], $q);
		$row = mysqli_num_rows($q);
		if ($row==1) {
			$q=mysqli_fetch_array($q);
			foreach ($q as $key => $value) {
				$_SESSION[$key]=$value;
			}
			//echo "<pre>";
			//var_dump($_SESSION);die();
			return true;
		}
		else{
			return false;
		}
	}
?>