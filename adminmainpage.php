<?php


session_start();

if (!isset($_SESSION['email'])) {
	
	header('location:adminlogin.php');
}

?>

<!DOCTYPE html>
<html>
<head>
	<title>js</title>
	<?php include 'links.php'?>
	<style type="text/css">
		.ab
		{
			height: 100vh;
		}
	</style>
</head>
<body>


		<section class="ab">
		<div class="container shadow p-3 mt-3">
			<div class="text-center text-white p-3" style="background-color: DodgerBlue;">
				<i><h1>DASHBOARD</h1></i>
			</div>
			<div class="row">
				<div class="col-lg-12 col-md-12 col-12 p-3">
						
						<ul class="nav nav-tabs" id="myTab" role="tablist">
						  <li class="nav-item">
						    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#new" role="tab" aria-controls="home" aria-selected="true">NEW</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#delete" role="tab" aria-controls="profile" aria-selected="false">DELETE</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#update" role="tab" aria-controls="contact" aria-selected="false">UPDATE</a>
						  </li>
						<li class="nav-item">
						    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#browse" role="tab" aria-controls="contact" aria-selected="false">BROWSE</a>
						  </li>
						  <li class="nav-item">
						    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#search" role="tab" aria-controls="contact" aria-selected="false">SEARCH</a>
						  </li>


						</ul>

						<div class="tab-content" id="myTabContent">
						  <div class="tab-pane fade show active" id="new" role="tabpanel" aria-labelledby="home-tab">
						  	<div class="container">
						  		<div class="row">
						  		<div class="col-lg-12 col-md-12 col-12">
						  	<form action="submitdata.php" method="POST" style="width: 100%;">
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
							<input type="submit" class="btn btn-primary" name="submit">
							</form>
						</div>
						</div>
						</div>

							
									

						</div>
						  <div class="tab-pane fade" id="delete" role="tabpanel" aria-labelledby="profile-tab">
						  	<div class="container">
						  		<div class="row">
						  			<div class="col-lg-12 col-md-12 col-12">
						  				<table class="table table-striped table-hover table-bordered">
						  				<tr class="text-center">
							  				<th>ID</th>
							  				<th>NAME</th>
							  				<th>ADDRESS</th>
							  				<th>EMAIL</th>
							  				<th>PHONE</th>
							  				<th>DELETE</th>
							  			</tr>
						  				<?php
						  				include 'conn.php';
						  				/*
						  				$name = $_POST['name'];
										$address = $_POST['address'];
										$email = $_POST['email'];
										$phone = $_POST['phone'];*/
										$q="select * from userinfo";
										$query=mysqli_query($con,$q);
										while ($result=mysqli_fetch_array($query)) {
										
						  				?>
						  				<tr class="text-center">
						  					<td><?php echo $result['id'];?></td>
							  				<td><?php echo $result['name'];?></td>
							  				<td><?php echo $result['address'];?></td>
							  				<td><?php echo $result['email'];?></td>
							  				<td><?php echo $result['phone'];?></td>
							  				<td><a href="delete.php? id=<?php echo $result['id'];?>"><button class="btn btn-danger">DELETE</button></a></td>



							  			</tr>
							  			<?php
							  				}
							  				?>
						  				</table>
						  			</div>
						  		</div>
						  	</div>




						  </div>
						  <div class="tab-pane fade" id="update" role="tabpanel" aria-labelledby="contact-tab">
						  	<div class="container">
						  		<div class="row">
						  			<div class="col-lg-12 col-md-12 col-12">
						  				<table class="table table-striped table-hover table-bordered">
						  				<tr class="text-center">
							  				<th>ID</th>
							  				<th>NAME</th>
							  				<th>ADDRESS</th>
							  				<th>EMAIL</th>
							  				<th>PHONE</th>
							  				<th>UPDATE</th>
							  			</tr>
						  				<?php
						  				include 'conn.php';
						  				/*
						  				$name = $_POST['name'];
										$address = $_POST['address'];
										$email = $_POST['email'];
										$phone = $_POST['phone'];*/
										$q="select * from userinfo";
										$query=mysqli_query($con,$q);
										while ($result=mysqli_fetch_array($query)) {
										
						  				?>
						  				<tr class="text-center">
						  					<td><?php echo $result['id'];?></td>
							  				<td><?php echo $result['name'];?></td>
							  				<td><?php echo $result['address'];?></td>
							  				<td><?php echo $result['email'];?></td>
							  				<td><?php echo $result['phone'];?></td>
							  				<td><a href="update.php? id=<?php echo $result['id'];?>"><button class="btn btn-danger">UPDATE</button></a></td>
							  			</tr>
							  			<?php
							  				}
							  				?>
						  				</table>
						  			</div>
						  		</div>
						  	</div>


						  </div>
						  <div class="tab-pane fade" id="browse" role="tabpanel" aria-labelledby="profile-tab">welcom4
						  	<div class="container">
						  		<div class="row">
						  			<div class="col-lg-12 col-md-12 col-12">
						  				<table class="table table-striped table-hover table-bordered">
						  				<tr>
							  				<th>ID</th>
							  				<th>NAME</th>
							  				<th>ADDRESS</th>
							  				<th>EMAIL</th>
							  				<th>PHONE</th>
							  			
							  			</tr>
						  				<?php
						  				include 'conn.php';
						  				/*
						  				$name = $_POST['name'];
										$address = $_POST['address'];
										$email = $_POST['email'];
										$phone = $_POST['phone'];*/
										$q="select * from userinfo";
										$query=mysqli_query($con,$q);
										while ($result=mysqli_fetch_array($query)) {
										
						  				?>
						  				<tr>
						  					<td><?php echo $result['id'];?></td>
							  				<td><?php echo $result['name'];?></td>
							  				<td><?php echo $result['address'];?></td>
							  				<td><?php echo $result['email'];?></td>
							  				<td><?php echo $result['phone'];?></td>
							  			</tr>
							  			<?php
							  				}
							  				?>
						  				</table>
						  			</div>
						  		</div>
						  	</div>

						  </div>
						  <div class="tab-pane fade" id="search" role="tabpanel" aria-labelledby="profile-tab">
						  	<center>
						  	<form action="adminmainpage.php" method="post" class="p-5">
						  	<input type="search" name="search" class="form-control shadow" placeholder="search">
						  	<br>
						  	<input type="submit" class="btn btn-primary" name="submit" value="search">
						  	</form>

						  	<?php
							include 'conn.php';
						  	if (isset($_POST['submit'])) {
						  		$search=$_POST['search'];

						  		$q="select * from userinfo where  id='$search' ";
						  		$query=mysqli_query($con,$q);

						  		while ($result=mysqli_fetch_array($query)) {

						  			$id=$result['id'];
						  			$name=$result['name'];
						  			$address=$result['address'];
						  			$email=$result['email'];
						  			$phone=$result['phone'];
								?>

								<table class="table table-striped">
									<tr>
										<th>ID</th>
							  				<th>NAME</th>
							  				<th>ADDRESS</th>
							  				<th>EMAIL</th>
							  				<th>PHONE</th>
							  			
							  			</tr>

							  			<tr>
							  				<td><?php echo $id; ?></td>
											<td><?php echo $name; ?></td>
											<td><?php echo $address; ?></td>
											<td><?php echo $email; ?></td>
											<td><?php echo $phone; ?></td>
									
								</table>
										
						  	<?php
							  }
							  	}
							  	?>


						  </center>

						  </div>
						</div>
				</div>
			</div>
			<hr>
			<p class="p-2 text-center"><a href="logout.php" class="btn btn-danger p-2">logout</a></p>

		
</body>
</html>