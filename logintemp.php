<?php
		session_start();
		$designation=$_POST['designation'];
		$empid=$_POST['empid'];
		$password=$_POST['password'];
		if(isset($_POST['submit'])) {
		if( $empid && $password && $designation)
		{
				$connect=mysqli_connect("localhost", "root","") or die("Couldn't connect to the database");
				mysqli_select_db($connect,"e-leavesystem") or die("Couldn't find the database");

				if( $designation == 'guest faculty'|| ($designation) == 'Associate professor' ||($designation) == 'Assistant professor' || ($designation) == 'Professor'  || $designation == 'Lecturer' || $designation == 'other' )
					{
						$query=mysqli_query($connect,"SELECT * FROM faculty WHERE emp_id='$empid' ");
						if(mysqli_num_rows($query))
						{
						$row=mysqli_fetch_assoc($query);
						{
						$dbempid=$row['emp_id'];
						$dbpassword=$row['password'];
						$dbdesignation=$row['designation'];
						$db_firstname=$row['fname'];
						$db_lastname=$row['lname'];
						$dbgender=$row['gender'];
						$dbdepartment=$row['department'];
						$emailid=$row['email_id'];
						}
						if( ($empid)==$dbempid )
						{
							if(($password)==$dbpassword)
							{
								if( ($designation) == $dbdesignation)
								{
									session_start();
									@$_SESSION['emp_id']=$empid;
									@$_SESSION['name']=$db_firstname;
									@$_SESSION['lname']=$db_lastname;
									@$_SESSION['department']=$dbdepartment;
									@$_SESSION['designation']=$row['designation'];
									@$_SESSION['email_id']=$emailid;
									@$_SESSION['gender']=$dbgender;
									header("Location:userpage.php?user=".$dbempid);
								}
								else

								{	echo '<script type="text/javascript">';
									echo ' alert("designation not matched");';
									echo 'window.location.href="login.php";';
									echo '</script>' ;
								}
							}
							else
							{	echo '<script type="text/javascript">';
								echo ' alert("Password not matched");';
								echo 'window.location.href="login.php";';
								echo '</script>' ;
							}
						}
						else
						{	echo '<script type="text/javascript">';
							echo ' alert("Employee Id does not exist");';
							echo 'window.location.href="reg.php";';
							echo '</script>' ;
						}
						}
						else
						{
					    echo '<script type="text/javascript">';
						echo ' alert("User does not exist");';
						echo 'window.location.href="reg.php";';
						echo '</script>' ;
						}
					}
					else
					{	echo '<script type="text/javascript">';
						echo ' alert("designation not valid");';
						echo 'window.location.href="login.php";';
						echo '</script>' ;
					}
			}
			else
			{
				header("location : login.php");
				echo '<script type="text/javascript">;
				alert("Please Enter Employee Id and Password");
				</script>';
			//echo '</script>' ;
			}
		}

?>
