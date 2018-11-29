<?php
session_start();
if(!empty($_SESSION['emp_id']) || !empty($_SESSION['name'])){
    { 
	if($_SESSION['designamtion']=='admin')
		header('location:interface.php');
	else
	header('location:userpage.php');
	}
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

								<form class="form-control" name="formname" action="" method="post">
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
<?php
$link = mysqli_connect("localhost", "root", "", "e-leavesystem");
    // Check connection
    if($link === false)
	{
	die("ERROR: Could not connect. " . mysqli_connect_error());
	header("Location: admin.php");
    }
	else if(isset($_POST['submit']))
{
	$headid=$_POST['empid'];
	$passwrd=$_POST['password'];
	$sql = "SELECT * FROM leave_providers WHERE head_id='$headid' AND password='$passwrd' ";
	$res=mysqli_query($link,$sql);
	$numrow=mysqli_num_rows($res);
	if($numrow > 0)
	{
		$row=mysqli_fetch_assoc($res);
		session_start();
		@$_SESSION['emp_id']=$row['head_id'];
		@$_SESSION['name']=$row['fname'];
		@$_SESSION['lname']=$row['lname'];
		@$_SESSION['email_id']=$row['emailid'];
		@$_SESSION['department']=$row['department'];
		@$_SESSION['designation']=$row['designation'];
		@$_SESSION['gender']=$row['gender'];
		$mssg='Login successful';
		echo '<script> alert("mssg"); </script>';
		header('Location:interface.php');
	}
	else
	{
		//header("refresh:1,url=admin.php");
		echo "Invalid Credentials!!!";
	}
	
}

?>
