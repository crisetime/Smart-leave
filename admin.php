<?php
session_start();
if(!empty($_SESSION['emp_id']) || !empty($_SESSION['name'])){
    header('location:userpage.php');
}
?>

<html>
<head><title>Log in|Leave hive</title>
<link rel="stylesheet" href="assets/css/main.css" />
</head>
<body>
	<div id="wrapper">

					<header id="header">
						<h1>Admin Login  </h1>
						<p>Welcome to Admin Panel</p>
					</header>


					<!-- maini section -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">

								<form class="form-control" name="formname" action="logintemp.php" method="post">


									<input type="text" name="empid" placeholder="Admin Name" required=""></br>
									<input type="password" name="password" placeholder="Admin Password" required=""></br>

									<ul class="actions">
													<li><input type="submit" class="button special" name="submit" value="Login"></li>

									</ul>





								</form>
							</section>

					</div>

		</div>



</body>
</html>
