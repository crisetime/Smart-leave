<?php
session_start();
if(!empty($_SESSION['emp_id']) || !empty($_SESSION['name'])){
    header('location:userpage.php');
	echo $_SESSION['head_id'];
}
?>
<html>
<head><title>Home | Leave hive</title>
	<link rel="stylesheet" href="assets/css/main.css" />
</head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<body>

<div id="wrapper">

        <header id="header">
          <h1> <?php echo " Hi ".$_SESSION['name']; ?></h1>
          <p>Welcome to leave hive </p>

        </header>

        <div id="main">

        <nav id="nav">
          <ul>
            <li><a href="interface.php" class="active" >Home</a></li>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="logout.php" >Sign out</a></li>
			<!-- <li><a href="get_remaining_leave.php" >Get Remaining Leave</a></li> -->
          </ul>
        </nav>

          <!-- Content -->
            <section id="content" class="main">
				<div class="box alt">
					<div class="row uniform">

						<div class="2u"></div>
						<div class="2u" style="color:orange">
						<a href="profile.php">Profile<span class="image fit"><img src="images/profile.svg" alt="View profile" title="View profile" /></span></a>
						</div>

						<div class="4u"></div>
						<div class="2u$" style="color:#91DC5A">
						<a href="grant.php">Grant leave<span class="image fit"><img src="images/grant.svg" alt="Apply for leave" title="Apply for leave" /></span></a>
						</div>
						<div class="2u"></div>
						<div class="2u" style="color:#F7143E">
						<a href="deleteleave.php">Delete Leaves<span class="image fit"><img src="images/delete.svg" alt="Delete leave" title="Delete leave" /></span></a>
						</div>

						<div class="4u"></div>
						<div class="2u$" style="color:#b645ef">
						<a href="hodhistory.php">History<span class="image fit"><img src="images/history.svg" alt="view leave history" title="View Leave History" /></span></a>
						</div>

					</div>
				</div>
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
