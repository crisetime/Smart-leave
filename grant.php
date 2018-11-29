<?php
session_start();
if(!empty($_SESSION['emp_id']) || !empty($_SESSION['name']))
{
	if($_SESSION['designation']=='admin')
	header('interface.php');
	else header('userpage.php');
}
function confirm($eid,$type)
{

	//header("location:#");
}
function cancel($eid,$type)
{
	$conn = mysqli_connect('localhost','root','','e-leavesystem');
	$sql="UPDATE apply_for_leave SET status='cancel' WHERE emp_id='$eid' and leave_type='$type' ";
	mysqli_query($conn,$sql);
}
//g
?>
<html>
<head><title>Grant Leave | leave hive</title>
	<link rel="stylesheet" href="assets/css/main.css" /></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script type="text/javascript">
function confSubmit1() {
if (confirm("Are you sure you want to approve the leave?")) {
disabled = true;
}
else {
alert("You decided to not approve the leave!");
}

}
function confSubmit2() {
if (confirm("Are you sure you want to cancel the leave?")) {
form.submit();
}
else {
alert("You decided to not cancel the form!");
}

}
</script>

<body>

<div id="wrapper">

        <header id="header">
          <h1>Grant leave</h1>
          <p></p>
        </header>



          <nav id="nav">
          <ul>
            <li><a href="interface.php">Home</a></li>
            <li><a href="#"  class="active" >Status</a></li>
            <li><a href="logout.php" >Sign out</a></li>

          </ul>
        </nav>

          <!-- Content -->
          <div id="main" style="padding-left: 4%;padding-top:10%">

						<section>

										<div class="table-wrapper">
											<table class="alt">
												<thead>
													<tr>
														<th>Name</th>
														<th>ID</th>
														<th>From</th>
														<th>To</th>
														<th>type</th>
														<th>approve</th>
														<th>Not Approve<th>
													</tr>
												</thead>
												<tbody style="color:gray">

					<?php
					$conn = mysqli_connect('localhost','root','','e-leavesystem');
					$dept=$_SESSION['department'];
					$sql = "SELECT * FROM apply_for_leave WHERE status='pending' AND consent!='false' AND department='$dept' AND emp_id NOT IN (SELECT DISTINCT head_id FROM leave_providers WHERE designation='admin') ";
					$res=mysqli_query($conn,$sql);

					while( $row = mysqli_fetch_array($res))
					{
					$eid=$row['emp_id'];
					$type=$row['leave_type'];
					$l_from=$row['leave_from'];
					$l_from=date_create($l_from);
					$l_to=$row['leave_to'];
					$l_to=date_create($l_to);
					$num=$l_from->diff($l_to);
					$sqll = "SELECT fname,lname FROM faculty WHERE emp_id='$eid' ";
					$ress = mysqli_query($conn,$sqll);
					$row_sqll = mysqli_fetch_array($ress);
					?>
					<tr>
					<!-- demo datt -->
					<!-- passing the selected employee's details -->
						<td>
							<form action="user_leave.php" method="get">
						        <input type="hidden" name="empid" value="<?php echo $row['emp_id']; ?>" />
								<input type="hidden" name="type" value="<?php echo $row['leave_type']; ?>" />
								<input type="hidden" name="days" value="<?php echo $num->days; ?>" />
								<input type="submit" name="emp" value="<?php echo $row_sqll['fname']." ".$row_sqll['lname'];?>" />
							</form>
						</td>
						<td><?php echo $row['emp_id']; ?></td>
						<td><?php echo $row['leave_from']; ?></td>
						<td><?php echo $row['leave_to']; ?></td>
						<td><?php echo $row['leave_type']; ?></td>

						<form method="get">
						<td>
						<input type="hidden" name="l_from" value="<?php echo $row['leave_from']; ?>" />
						<input type="hidden" name="l_to" value="<?php echo $row['leave_to']; ?>" />
						<input type="hidden" name="eid" value="<?php echo $row['emp_id']; ?>" />
						<button type="submit" class="button special fit" style="background-color:green; hover background-color:gray"
						onclick="confSubmit1()" name="approve" value="<?php echo $row['leave_type']; ?>" >Approve</button>
						</td>
						<td>
						<button type="submit" class="button special fit" style="background-color:red; hover background-color:gray"
						onclick="confSubmit2()" name="cancel" value="<?php echo $row['leave_type']; ?>" >Not Approve</button>
						</td>
						</form>

						</tr>
						<?php
						}

						if(isset($_GET['approve']))
						{

						$conn = mysqli_connect('localhost','root','','e-leavesystem');
						$eid=$_GET['eid'];
						$type=$_GET['approve'];
						$l_from=$_GET['l_from'];
						$l_to=$_GET['l_to'];
						$sql= " UPDATE apply_for_leave SET status='sanctioned' WHERE emp_id='$eid' and leave_type='$type'
						and leave_from='$l_from' and leave_to='$l_to' ";
						mysqli_query($conn,$sql);

						$d1=date_create($l_from);
						$d2=date_create($l_to);
						$num=$d1->diff($d2);
						mysqli_query($conn,"UPDATE remaining_leave set $type = $type-($num->days) WHERE emp_id='$eid' ") ;
					//	header("refresh:1,url=grant.php");
						}
						if(isset($_GET['cancel']))
						{
						$eid=$_GET['eid'];
						$type=$_GET['cancel'];
						$l_from=$_GET['l_from'];
						$l_to=$_GET['l_to'];
						$conn = mysqli_connect('localhost','root','','e-leavesystem');
						$sql= " UPDATE apply_for_leave SET status='cancel' WHERE emp_id='$eid' and leave_type='$type'
							and leave_from='$l_from' and leave_to='$l_to' ";
						mysqli_query($conn,$sql);
						header("refresh:1,url=grant.php");
						}
												?>
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
