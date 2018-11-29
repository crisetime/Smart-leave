<?php
	session_start();
	$con = mysqli_connect('localhost','root','','e-leavesystem');
	if($con === false)
	{
		echo "Unable to connect to database,Try after some time ";
		header("location:#");
	}	
?>
<html>
	<head>
		<title>applied leaves</title>
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<body>

<div id="wrapper">

        <header id="header">
          <h1>History of leaves cancelled/approved</h1>
          <p></p>
        </header>
          <nav id="nav">
          <ul>
            <li><a href="interface.php">Home</a></li>
            <li><a href="#"  class="active" >History</a></li>
            <li><a href="logout.php" >Sign out</a></li>
          </ul>
        </nav>
		<div id="main" style="padding-left: 4%;padding-top:10%">

						<section>
								<div class="table-wrapper">
									<table class="alt">
										<thead>
											<tr>
														<th>EmployeeID</th>
														<th>type</th>
														<th>From</th>
														<th>To</th>
														<th>status<th>
											</tr>
										</thead>
											<tbody style="color:gray">
								<!--tr>
										<form  method="get">					
											<input type="hidden" name="empid" value="<?php echo $row['emp_id']; ?>" />
											<input type="hidden" name="type" value="<?php echo $row['leave_type']; ?>" />
											<input type="hidden" name="from" value="<?php echo $l_from; ?>" />
											<input type="submit" name="to" value="<?php echo $l_to;?>" /> 
											<input type="hidden" name="status" value="<?php echo $status; ?>" />
										</form>
									</tr-->
							<tr>
								<?php
								$conn = mysqli_connect('localhost','root','','e-leavesystem');
								$dept=$_SESSION['department'];
								$sql = "SELECT * FROM apply_for_leave WHERE (status='cancel' OR status='sanctioned') AND department='$dept'";
								$res=mysqli_query($conn,$sql);
								while( $row = mysqli_fetch_array($res))
								{
								$eid=$row['emp_id'];
								$type=$row['leave_type'];
								$l_from=$row['leave_from'];
								$l_to=$row['leave_to'];
								$status=$row['status'];
								}
								?>
								<td><?php echo $eid; ?></td>
								<td><?php echo $type; ?></td>
								<td><?php echo $l_from; ?></td>
								<td><?php echo $l_to; ?></td>
								<td><?php echo $status; ?></td>
							</tr>
											</tbody>
												<tfoot>
													<tr>
														<td colspan="2"></td>
														<td>100.00</td>
													</tr>
												</tfoot>
											</table>
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
