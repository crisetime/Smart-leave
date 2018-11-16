<?php
  session_start();

	$con = mysqli_connect('localhost','root','','e-leavesystem');
	if($con === false)
	{
		echo "Unable to connect to database,Try after some time ";
		header("location:#");
	}
	if(isset($_POST['submit']))
	{
		$fname=$_POST['fname'];
		$lname=$_POST['lname'];
		$email=$_POST['email'];
		$password=$_POST['password'];
		$desig=$_POST['designation'];
		$empid=$_SESSION['emp_id'];
		$db_desig=$_SESSION['designation'];
		$db_dept=$_SESSION['department'];

		if( ($db_desig == 'hod'))
		{

			mysqli_query($con,"UPDATE leave_providers SET fname='$fname',lname='$lname',designation='$desig' WHERE head_id='$empid'");
			if($password != '')
			mysqli_query($con,"UPDATE leave_providers SET password='$password' where head_id='$empid'");
		}
		else if( ( $desig=='hod'))
		{
			$sq="INSERT INTO leave_providers(head_id,fname,lname,department,designation) VALUES ('$empid','$fname','$lname','$db_dept','$desig')";

			$qr=mysqli_query($con,$sq);
			if($password != '')
			mysqli_query($con,"UPDATE leave_providers SET password='$t.password' FROM (SELECT password FROM faculty where emp_id='$empid')t where leave_providers.head_id=t.emp_id ");

		}

			$sql = mysqli_query($con,"UPDATE faculty SET fname='$fname',lname='$lname',email_id='$email',designation='$desig' WHERE emp_id='$empid'");
			if($password != '')
			$sqll = mysqli_query($con,"UPDATE faculty SET password='$password' where emp_id='$empid'");
			$sqlll=" DELETE FROM leave_providers WHERE head_id='$empid' ";
			mysqli_query($con,$sqlll);
			if($sql)
			{
				$mssg ="you profile has been sucessfully updated";
				@$_SESSION['name']=$fname;
				@$_SESSION['lname']=$lname;
				@$_SESSION['email_id']=$email;
				@$_SESSION['designation']=$desig;
				echo "<script type='text/javascript'>alert('$mssg');
				location.href='".profile.".php';
				</script>";
			}


	}

?>
<html>
<head><title>Update | Leave hive</title>
	<link rel="stylesheet" href="assets/css/main.css" /></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<body>

<div id="wrapper">

        <header id="header">
          <h1>User</h1>
          <p>Welcome to leave hive</p>
        </header>

        <div id="main">

          <nav id="nav">
          <ul>
            <li><a href="profile.php">Profile</a></li>
            <li><a href="profile_update.php"  class="active" >Update</a></li>
            <li><a href="logout.php" >Sign out</a></li>

          </ul>
        </nav>

          <!-- Content -->
            <section id="content" class="main">




                                  <h2>Update Your profile</h2>
                                   <form class="form-control" name="formname" action="#" method="post">

                  <select name="designation" class="demo-categoery" value="H.O.D.">
                    <option value="<?php echo $_SESSION['designation']; ?>"><?php echo $_SESSION['designation']; ?></option>

              

                    <option value="assistant_professor">Assitant Professor</option>
                    <option value="associate_professor">associate Professor</option>
                    <option value="lecturar">lecturar</option>
                    <option value="g_faculty">Guset faculty</option>
                    <option value="other">Other</option>

                  </select><br>

                  <input type="text" name="fname" placeholder="First Name" value="<?php echo $_SESSION["name"]; ?>"></br>
                  <input type="text" name="lname" placeholder="Last Name" value="<?php echo $_SESSION["lname"]; ?>"></br>
                  <input type="email" name="email" placeholder="E-mail" value="<?php echo $_SESSION["email_id"]; ?>"></br>
                  <input type="password" name="password" placeholder="Password" ></br>


                  <ul class="actions">
                          <li><input type="submit" class="button special" name="submit" value="Submit"></li>
                            <li><input type="reset" value="Reset"></li>
                      </ul>


<blockquote>*Change only those element which you want to change leave other attribute as it is.</blockquote>

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
            <p class="copyright">&copy; Leave hive team. Designd by Team Hive</p>
          </footer>

  </div>
</body>
</html>
