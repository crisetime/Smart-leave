<html>
<head>
	<title>Sign up</title>
	<link rel="stylesheet" href="assets/css/main.css" /></head>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

	<script LANGUAGE="JavaScript">
	function validate() {
    isValid = (document.formname.password.value == document.formname.cpassword.value)
    && document.formname.password.value.length > 8; // Adding additional validation here
    document.formname.submitbtn.disabled = !isValid;
	}

</script>

<body>

	<div id="wrapper">

					<header id="header">
						<h1>Sign up </h1>
						<p>Sign up to leave hive</p>
					</header>

					<div id="main">

						<nav id="nav">
						<ul>
							<li><a href="index.php" >Home</a></li>
							<li><a href="login.php">Log in</a></li>
							<li><a href="#" class="active">Sign up</a></li>

						</ul>
					</nav>

						<!-- Content -->
							<section id="content" class="main">

									<form name="formname" action="insertreg.php" method="post">
										<div class="row uniform">
										</br>
										<div class="6u 12u$(xsmall)">
										<input type="text" name="fname" placeholder="First name" required>
										</div>
										<div class="6u 12u$(xsmall)">
										<input type="text" name="lname" placeholder="Last name" required>
										</div>
										<div class="12u$">
										<input type="text" name="empid"  placeholder="Employee Id" required>
										</div>
										<div class="12u$">
										<input type="email" name="email" placeholder="E-mail" required>
										</div>


										<div class="4u 12u$(small)">
													<input type="radio" id="demo-priority-low" name="gender" value="male" checked>
													<label for="demo-priority-low">Male</label>
												</div>
												<div class="4u 12u$(small)">
													<input type="radio" id="demo-priority-normal" name="gender" value="female">
													<label for="demo-priority-normal">Female</label>
												</div>
												<br>
										<div class="12u$">
										<select class="demo-categoery" name="designation" required="">
										<option value="">Choose designation</option>
										<option value="Professor">Professor</option>
										<option value="Assistant professor">Assistant Professor</option>
										<option value="Associate professor">Associate Professor</option>
										<option value="Lecturer">Lecturer</option>
										<option value="guest faculty">Guest faculty</option>
										<option value="other">Other</option>
										</select>
										</div>
											<div class="12u$">
										<select class="demo-categoery" name="department" required="">
										<option value="">Choose Department</option>
										<option value="csed">C.S.E.D.</option>
										<option value="sms">S.M.S.</option>
										</select>
										</div>


										<div class="12u$" >
										<input type="password" name="password" id="password" onKeyUp="validate()" placeholder="Password (min. 8 char)" required></div>
										<div class="12u">
										<input type="password" name="cpassword" id="cpassword" onKeyUp="validate()" placeholder="Confirm Password" required>
										</div>

										<div class="12u$">
										<input type="submit" class="button special" name="submit"  value="Submit" id="submitbtn" disabled>
										<input type="reset">
										<br>
										<p>Already member? Login <a href="login.php">here</a></p>
										</div>
									</div>
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
