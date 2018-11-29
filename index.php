<?php
session_start();
if(!empty($_SESSION['emp_id']) || !empty($_SESSION['name'])){
    header('location:userpage.php');
}
?>
<!DOCTYPE html>
<html>
<head><title>Home</title>
	<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
</head>

<body>


<div id="wrapper">

				<!-- Header -->
					<header id="header" class="alt">
						<span class="logo"><img src="images/logo.png" height="100px" alt=""/></span>
						<!-- <h1>Leave Hive</h1> -->
						<p>To make life easier
						  built by Team Hive </p>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li><a href="#intro" class="active">Introduction</a></li>
							<li><a href="#first">Got through the Leave details</a></li>
							<li><a href="#second">we are here to listen you</a></li>
							<li><a href="#cta">Get Started</a></li>
						</ul>
					</nav>
				<!-- Main -->
					<div id="main">

						<!-- Introduction -->
							<section id="intro" class="main">
								<div class="spotlight">
									<div class="content">
										<header class="major">
															<h2>Leave Hive</h2>
										</header>
										<p>This web application is made with the objective of developing a process that permits to apply leave become easily without any personal meeting and hardcopy application.
										</p>
										<ul class="actions">
											<li><a href="about.html" class="button">Learn More</a></li>
										</ul>
									</div>
									<span class="image"><img src="images/emplogo.jpg" alt="" /></span>
								</div>
							</section>


							<!-- First Section -->
							<section id="first" class="main special">

								<header class="major">
									<h2>leave details</h2>
								</header>

								<ul class="features">
									<li>
										<span class="icon major style1 fa-diamond"></span>
										<h3><b> Casual Leaves</b></h3>
									</li>
									<li>
										<span class="icon major style3 fa-diamond"></span>
										<h3><b>Earn Leaves</b></h3>
									</li>
									<li>
										<span class="icon major style5 fa-diamond"></span>
										<h3><b>Special CL</b></h3>

									</li>
									<li>
										<span class="icon major style4 fa-diamond"></span>
										<h3><b>Medical Leaves</b></h3>
									</li>
									<li>
										<span class="icon major style2 fa-diamond"></span>
										<h3><b>Commuted Leaves</b></h3>
									</li>
									<li>
										<span class="icon major style6 fa-diamond"></span>
										<h3><b>Restricted holidays</b></h3>
									</li>
								</ul>
								<footer class="major">
									<ul class="actions">
										<li><a href="details.html" class="button">Leave Details</a></li>
									</ul>
								</footer>
							</section>

						<!-- Second Section -->
							<section id="second" class="main special">
								<header class="major">
									<h2>Contact us and give us feedback</h2>
									<p>we care for you and always ready to enhance this application.Kindly give your feedbacks and put your querries.
									  <br />
									We are 24/7 available to serve you and will try to resolve your querry within 24 hours.</p>
								</header>
								<ul class="statistics">
									<li class="style1">
										<!-- <span class="icon fa-code-fork"></span> -->
										<strong>Vikrant Singh</strong>7905918368
									</li>
									<li class="style2">
										<!-- <span class="icon fa-folder-open-o"></span> -->
										<strong>Vinay singh</strong>8273460709
									</li>
									<li class="style3">
										<!-- <span class="icon fa-signal"></span> -->
										<strong>Tripti Verma</strong>8081857340
									</li>
									<li class="style4">
										<!-- <span class="icon fa-laptop"></span> -->
										<strong>Vaishali Vinay</strong>9598703253
									</li>
									<li class="style5">
										<!-- <span class="icon fa-diamond"></span> -->
										<strong>Admin</strong> 8563077431
									</li>
								</ul>
								<p class="content">Through this application,you will be familiar with all the types of leaves being provided to the faculty and staff memebers.this website has been designed considering only SMS and CSED department of MNNIT Alld.Later on it can be explored to other departments of the college also.first of all,all the employees are required to register for leave.they should fill their correct information and update their profile picture time to time.in the beginning of the year,they will be provided all the leaves with specified number of days.when they will apply for any partiular type of leave and it gets confirmed by authorised officials ,then they will left with having lesser no.of leave days. you are also allowed to cancel your leave here.in that case ,no days would be deducted.Heads of the department and registrar will get a list of applying employees in their department.they have option to either confirm or cancel the leave.</p>
								<footer class="major">
									<ul class="actions">
										<li><a href="feedback.php" class="button">Feedback</a></li>
									</ul>
								</footer>
							</section>

						<!-- Get Started -->
							<section id="cta" class="main special">
								<header class="major">
									<h2>Computer Science Department,MNNIT Allahabad</h2>
									<p>Made in the guidance of our project mentor Dr. Navjot Singh<br />
									 thanks to him for giving us this opputunity and supporting us.</p>
								</header>
								<footer class="major">
									<ul class="actions">
										<li><a href="reg.php" class="button special">SignUp</a></li>
										<li><a href="login.php" class="button">Login</a></li>
									</ul>
								</footer>
							</section>

					</div>

				<footer id="footer">
							<section>
								<h2>About Leave hive</h2>
								<p>Leave hive is a genral web application for applying and Approving leave online.</p>
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
							<p class="copyright">&copy; Leave hive team. Designd by Team leave hive</p>
						</footer>


			</div>



<!-- <center><a href="login.html" class="button special"  >Get started</a></center> -->






			<script src="assets/js/jquery.min.js"></script>
			<script src="assets/js/jquery.scrollex.min.js"></script>
			<script src="assets/js/jquery.scrolly.min.js"></script>
			<script src="assets/js/skel.min.js"></script>
			<script src="assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="assets/js/main.js"></script>

</body>
