<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>Login</title>

	<?php include 'links.php'?>

</head>
<body>

	<header>
		<div class="container center-div shadow">
			<div class="heading text-center text-uppercase text-white mb-5">
			ADMIN LOGIN PAGE
			</div>
			<div class="container row d-flex flex-row justify-content-center mb-5">
				<div class="admin-form shadow p-2">
					<form action="logincheck.php" method="POST">
						<div class="form-group">
							<label>Email Id</label>
							<input type="email" name="email" class="form-control">
						</div>
						<div class="form-group">
							<label>Password</label>
							<input type="password" name="password" class="form-control">
						</div>
						<input type="submit" class="btn btn-primary" name="submit">
					</form>
					
				</div>
			</div>

			
		</div>
	</header>


</body>
</html>