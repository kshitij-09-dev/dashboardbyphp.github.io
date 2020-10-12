
									<?php
								
									include 'conn.php';
									
									$name = $_POST['name'];
									$address = $_POST['address'];
									$email = $_POST['email'];
									$phone = $_POST['phone'];


								$query = "insert into userinfo(name,address,email,phone)
								values ('$name','$address','$email','$phone')" ;



								mysqli_query($con, $query);

								header('location:adminmainpage.php');

								?>
