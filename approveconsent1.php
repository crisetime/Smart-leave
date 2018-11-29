<?php
session_start();
if(empty($_SESSION['emp_id']) || empty($_SESSION['name'])){
    header('location:index.php');
}
?>
<html>
<head><title>Home</title>
	<link rel="stylesheet" href="assets/css/main.css" /></head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<body>
<div id="wrapper">

        <header id="header">
        <h1>Consent Requests</h1>
		<p><?php echo 'Dear '.$_SESSION['name'];?></p>
		 <br><p>The Following members have sent you the request to take their responsibilities during the leave duration.</p>
        </header>
        <div id="main">

          <nav id="nav">
          <ul>
            <li><a href="userpage.php">Home</a></li>
            <li><a href="profile.php"  class="active" >Profile</a></li>
            <li><a href="logout.php" >Sign out</a></li>

          </ul>
        </nav>

          <!-- Content -->
            <!-- <section id="content" class="main"> -->
            <!-- </section> -->
        </div>

<br><br><br>
				<form action="#" method="post" >
				<table border='1'>
				<thead>
				<tr>
				<th>Name</th>
				<th>Consent</th>
				<th>From</th>
				<th>To</th>
				</tr>
				</thead>
				<tbody>
				<?php
				$conn = mysqli_connect('localhost','root','','e-leavesystem');
				//$sql = "SELECT * FROM (select emp_id,fname,lname from faculty) minus (select emp_id,fname,lname from apply_for_leave) ";
				//$res=mysqli_query($conn,'SELECT * FROM (select emp_id,fname,lname from faculty) minus (select emp_id,fname,lname from apply_for_leave)');
				$eid=$_SESSION['emp_id'];
				$res=mysqli_query($conn,"SELECT DISTINCT req_id from request_for_consent where emp_id='$eid' AND status='no'");
				$rows=mysqli_num_rows($res);
				if($rows > 0) {	
				while($row = mysqli_fetch_assoc($res))
				{
						$rid=$row['req_id'];
						$res1=mysqli_query($conn,"select fname,lname,leave_from,leave_to from apply_for_leave NATURAL JOIN faculty where emp_id='$rid' and consent='false' ");
						$row1=mysqli_num_rows($res1);
						
						if( $row1 == '0')
						{
							header("refresh:1,url=userpage.php");
							echo '<script> alert("No one has asked for the consent.") </script>';
						}
						else {
						$row1=mysqli_fetch_array($res1);
						$fname=$row1['fname'];
						$lname=$row1['lname'];	
						$from=$row1['leave_from'];
						$to=$row1['leave_to'];
						
						}
				?>
				<tr>
					<td><?php echo $fname; ?></td>
					<td>
						<input type="checkbox" id="req" name="req[]" value="<?=$rid ?>" checked="">
						<label for="demo-human">Ask for Consent</label>
					<td><?php echo $from; ?></td>
					<td><?php echo $to; ?></td>
					<td>
				</tr>
				<?php
				}
				}
				else {
					header("refresh:1,url=userpage.php");
					echo '<script> alert("No faculty member is available here") </script>';
				}
				?>
			</tbody>
				</table>
				<input type="submit" name="submit" value="Agreed">
				</form>

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
<?php
		$conn = mysqli_connect('localhost','root','','e-leavesystem');
			if(isset($_POST['req']))
			{   //echo "posted";
				 $name = $_POST['req'];
				 foreach ($name as $req){ 
				   //echo $req;
			$sql='SELECT status,emp_id,req_id where emp_id="$_SESSION["emp_id"]" AND req_id="$req" AND status="no" ';
			//$sql= ' UPDATE request_for_consent SET status="yes" WHERE emp_id="$_SESSION["emp_id"]" AND req_id="$req" AND status="no" ' ;
			$sql1= ' UPDATE apply_for_leave SET consent="$_SESSION["emp_id"]" WHERE emp_id="$req" ' ;
			$res = mysqli_query($conn,$sql);
			$res1=mysqli_query($conn,$sql1);
			$row=mysqli_fetch_array($res);
			echo $row['status'];
			//echo '<script> alert("Great!confirmed to takes responsibility"); </script>';
			//header("refresh:1,url=approveconsent.php");	
			//echo '<script> alert("Great!confirmed to takes responsibility"); </script>';
			}
			}

?>
