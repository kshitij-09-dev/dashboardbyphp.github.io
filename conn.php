<?php


$con= mysqli_connect('localhost','root');

									if($con)
									{
										echo "connection successful";
									}
									else
									{
										echo "No connection";
									}

	mysqli_select_db($con, 'adminlogin');
?>