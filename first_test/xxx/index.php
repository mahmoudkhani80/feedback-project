<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<link rel="stylesheet" href="login.css">
	<title>Login Page</title>
</head>

<body>
	<nav class="navbar navbar-expand-sm navbar-light bg-light mb-4">
		<div class="container">
			<a class="navbar-brand" href="#">feedback project</a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse" id="navbarNav">
				<ul class="navbar-nav ms-auto">
					<li class="nav-item">
						<a class="nav-link" href="../index.php">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../feedback.php">Feedback</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="../about.php">About</a>
					</li>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signin.php">sign in</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="signout.php">sign out</a>
					</li>
				</ul>
			</div>
		</div>
	</nav>
	<?php session_start();
	if(!isset($_SESSION['username'])){
		echo "you need to signu up first";
	}

	?>
	<form action="signin.php" method="post">
		<div class="login-box">
			<h1>Login</h1>

			<div class="textbox">
				<i class="fa fa-user" aria-hidden="true"></i>
				<label for="username" class="form-label"></label>
				<input type="text" placeholder=" enter Username" name="username" id="username" value="">
			</div>

			<div class="textbox">
				<i class="fa fa-lock" aria-hidden="true"></i>
				<label for="password" class="form-label"></label>
				<input type="password" placeholder=" enter Password" name="password" id="password" value="">
			</div>

			<input class="button" type="submit" name="login" value="Sign In">
		</div>
	</form>
	<a href="signout.php">sign out</a>
</body>

</html>