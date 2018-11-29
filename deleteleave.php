
<?php
session_start();
if(empty($_SESSION['emp_id']))
	header('location:admin.php');

if((!empty($_SESSION['emp_id']) || !empty($_SESSION['name']))&& $_SESSION['designation']!='admin')
	header('location:userpage.php');
?>
<html>
<head><title>Leave | Leave hive</title>
	<link rel="stylesheet" href="assets/css/main.css" /></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>



<body>

<div id="wrapper">

        <header id="header">
          <h1>Leaves</h1>
          <!-- <p>Welcome to leave hive</p> -->
        </header>

        <div id="main">

          <nav id="nav">
          <ul>
            <li><a href="interface.php">Home</a></li>
            <li><a href="deleteleave.php"  class="active" >Leave</a></li>
            <li><a href="logout.php" >Sign out</a></li>

          </ul>
        </nav>

          <!-- Content -->
            <section id="content" class="main">
								<h4>Add leave </h4>
							<form class="form-control" name="formname" action="#" method="post">

								<input type="text" name="empid" placeholder="Leave Name" required=""></br>
								<input type="text" name="number" placeholder="Number of leave" required=""></br>

								<ul class="actions">
												<li><input type="submit" class="button special" name="submit" style="background-color:blue; opacity:.8" value="Submit"></li>
													<li><input type="reset" value="Reset" ></li>
								</ul>

							</form>
							<hr>
							<h4>Check Employee </h4>
								<form class="form-control" action ="insert_leave.php" method="post">
							<input type="text" name="Employee_Id" placeholder="Employee Id" /> <br>

							<input type="submit" name="submit2" class="button special" style="background-color:blue;opacity:.8" value="Search ">
							</form>

							<hr>
							<h4>Employee details </h4>
								<form class="form-control" action ="insert_leave.php" method="post">
							<input type="text" name="Employee_Id" placeholder="Employee Id" /> <br>

						<input type="submit" name="submit1" class="button special" style="background-color:red;opacity:.9" value="Delete">
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
            <p class="copyright">&copy; Leave hive team. Designd by Vikrant</p>
          </footer>

  </div>


</body>




</html>
