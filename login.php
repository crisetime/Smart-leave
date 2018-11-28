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
						<h1>Log in </h1>
						<p>Log in to leave hive</p>
					</header>

				<!-- nav -->
					<nav id="nav">
						<ul>
							<li><a href="index.php" >Home</a></li>
							<li><a href="#" class="active">Log in</a></li>
							<li><a href="reg.php" >Sign up</a></li>

						</ul>
					</nav>
					<!-- maini section -->
					<div id="main">

						<!-- Content -->
							<section id="content" class="main">

								<form class="form-control" name="formname" action="logintemp.php" method="post">

									<select name="designation" class="demo-categoery" required="">
										<option value="">Choose designation</option>
										<option value="Professor">Professor</option>
										<option value="Assistant professor">Assitant Professor</option>
										<option value="Associate professor">Associate Professor</option>
										<option value="Lecturer">Lecturer</option>
										<option value="guest faculty">Guest faculty</option>
										<option value="other">Other</option>

									</select><br>
									<input type="text" name="empid" placeholder="Employee Id" required=""></br>
									<input type="password" name="password" placeholder="Password" required=""></br>

									<ul class="actions">
													<li><input type="submit" class="button special" name="submit" value="Submit"></li>
														<li><input type="reset" value="Reset"></li>
									</ul>



								<p>New user? Sign up <a href="reg.php" class="submit">Here</a></p>

								</form>
							</section>

					</div>

				<footer id="footer">
							<section>
								<h2>About Leave hive</h2>
								<p>Leave hive is a genral web application for Approving leave online.</p>
								<ul class="actions">
									<li><a href="about.html" class="button">Learn More</a></li>
								</ul>
							</section>
							<section>
								<h2>Contact Us</h2>
								<dl class="alt">

									<dt>Phone</dt>
									<dd>(+91)8090 410 264</dd>
									<dt>Email</dt>
									<dd><a href="mail.google.com/">Vikrant.mnnit00@gmail.com</a></dd>
								</dl>
								<ul class="icons">
									<li><a href="https://twitter.com/svicky516" target="_blank" class="icon fa-twitter alt"><span class="label">Twitter</span></a></li>
									<li><a href="https://www.facebook.com/profile.php?id=100003661545540&ref=bookmarks" target="_blank" class="icon fa-facebook alt"><span class="label">Facebook</span></a></li>
									<li><a href="https://www.instagram.com/crise_time/" target="_blank" class="icon fa-instagram alt"><span class="label">Instagram</span></a></li>
									<li><a href="https://github.com/crisetime"  target="_blank" class="icon fa-github alt"><span class="label">GitHub</span></a></li>

								</ul>
							</section>
							<p class="copyright">&copy; Leave hive team. Designd by Team hive</p>
						</footer>

		</div>



</body>
</html>
