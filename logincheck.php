<?php

session_start();

include 'conn.php';
									



if (isset($_POST['submit'])) {
		$email=$_POST['email'];
		$password=$_POST['password'];


		$sql = "select * from admin where email='$email' and password='$password'"; /*checking*/

		$query = mysqli_query($con,$sql); /*query fire for checking*/

		$row = mysqli_num_rows($query);
		
			if($row==1)

			{
				echo "login successful";
				$_SESSION['email']=$email;
				header('location:adminmainpage.php');
			}
			else
			{
				echo "login failed";
				header('location:adminlogin.php');
			}
		
}


?>