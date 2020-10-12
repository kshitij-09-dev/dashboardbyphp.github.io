<?php

include 'conn.php';


if (isset($_POST['done'])) {

	$id = $_GET['id'];

									$name = $_POST['name'];
									$address = $_POST['address'];
									$email = $_POST['email'];
									$phone = $_POST['phone'];

	$q="update userinfo set id=$id, name='$name', address='$address', email='$email', phone=$phone where id=$id   ";

	$query=mysqli_query($con,$q);

	header('location:adminmainpage.php');

}


?>

<!DOCTYPE html>
<html>
<head>
	<title>js</title>
	<?php include 'links.php'?>

</head>
<body>


<div class="container">
						  		<div class="row">
						  		<div class="col-lg-12 col-md-12 col-12">
						  	<form method="post">
						  	<div class="form-group">
							<label>Name</label>
							<input type="text" name="name" class="form-control">
							</div>
							<div class="form-group">
							<label>Address</label>
							<input type="text" name="address" class="form-control">
							</div>
							<div class="form-group">
							<label>Email Id</label>
							<input type="email" name="email" class="form-control">
							</div>
							<div class="form-group">
							<label>phone</label>
							<input type="text" name="phone" class="form-control">
							</div>
							<input type="submit" class="btn btn-primary" name="done">
							</form>
						</div>
						</div>
						</div>
</body>
</html>