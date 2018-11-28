 <?php

    /* Attempt MySQL server connection. Assuming you are running MySQL

    server with default setting (user 'root' with no password)*/
	session_start();
	function display()
	{
    $link = mysqli_connect("localhost", "root", "", "e-leavesystem");
    // Check connection
    if($link === false)
	{
	die("ERROR: Could not connect. " . mysqli_connect_error());
	header("Location: userpage.php");
    } 
	else
	{
		$empid=$_SESSION['emp_id'];
		$result = mysqli_query($link, "SELECT * from remaining_leave WHERE emp_id='$empid' ");
		while($row = mysqli_fetch_assoc($result))
		{
	?>
			<tr>
			<td>Casual Leave</td>
			<td><?php echo $row['commuted']; ?></td>
			</tr>
			<tr>
			<td>Earned Leave</td>
			<td><?php echo $row['earn']; ?></td>
			</tr>
			<tr>
			<td>Special CL</td>
			<td><?php echo $row['special_cl']; ?></td>
			</tr>
			<tr>
			<td>Half Pay Leave</td>
			<td><?php echo $row['half_pay']; ?></td>
			</tr>
			<tr>
			<td>Medical Leave</td>
			<td><?php echo $row['medical']; ?></td>
			</tr>
			<tr>
			<td>Restricted Leave</td>
			<td><?php echo $row['restricted']; ?></td>
			</tr>
			<!--tr>
			<td>Vacational</td>
			<td><?php echo $row['vacation']; ?></td>
			</tr-->
	<?php 
		}
	}
	mysqli_close($link);	
	}	
?>
<html>
			
	<head>
		<title>remaining leave</title>
		<link rel="stylesheet" href="assets/css/main.css" /></head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
	</head>
		<body>
			<div id="wrapper">
				<header id="header">
				<h1>Hi <?php echo $_SESSION['name'];?></h1>
				<p>You are left with following leaves ...</p>
				</header>
			<nav id="nav">
				<ul>
				<?php
				if($_SESSION['designation'] == 'hod')
				{
				?>
					<li><a href="interface.php">Home</a></li>
					<li><a href="#"  class="active" >Get Remaining Leave</a></li>
					<li><a href="logout.php" >Sign out</a></li>
				<?php
				}
				else
				{
				?>
					<li><a href="userpage.php">Home</a></li>
					<li><a href="#"  class="active" >Status</a></li>
					<li><a href="logout.php" >Sign out</a></li>
				<?php
				}
				?>
				</ul>
			</nav>
			<br>
			<table border='1'>
			<tr>
			<th>Leave Type</th>
			<th>Days left</th>
			<?php display(); ?>
			</table>
			</div>
		</body>
</html>
		
		
			