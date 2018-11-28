<?php
		session_start();
		$designation=$_POST['designation'];
		$empid=$_POST['empid'];
		$headid=$_POST['empid'];
		$password=$_POST['password'];
		if(isset($_POST['submit'])) {
		if( $empid && $password && $designation)
		{
				$connect=mysqli_connect("localhost", "root","") or die("Couldn't connect to the database");
				mysqli_select_db($connect,"e-leavesystem") or die("Couldn't find the database");

				if( ($designation) == 'hod' )
				{

					$query1=mysqli_query($connect,"SELECT * FROM leave_providers WHERE head_id='$empid' ");
					$query=mysqli_query($connect,"SELECT * FROM faculty WHERE emp_id='$empid' ");
					$numrows1=mysqli_num_rows($query1);
					$numrows=mysqli_num_rows($query);


					if($numrows>0 && $numrows1>0  )
					{
					while($row=mysqli_fetch_assoc($query))
					{

						$dbempid=$row['emp_id'];
						$dbpassword=$row['password'];
						$dbdesignation=$row['designation'];
						$dbdepartment=$row['department'];
						$db_firstname=$row['fname'];
						$db_lastname=$row['lname'];
						$db_emailid=$row['email_id'];
						$dbgender=$row['gender'];

					}
					while($row1=mysqli_fetch_assoc($query1))
					{

						$dbheadid=$row1['head_id'];
						$dbpassword1=$row1['password'];
						$dbdesignation1=$row1['designation'];

					}
					if( ($headid)==$dbheadid && ($password)==($dbpassword1)&& ($designation)==$dbdesignation1 && ($empid)==$dbempid && ($password)==$dbpassword )
					{
						session_start();
						@$_SESSION['emp_id']=$dbempid;
						@$_SESSION['name']=$db_firstname;
						@$_SESSION['lname']=$db_lastname;
						@$_SESSION['designation']=$dbdesignation;
						@$_SESSION['department']=$dbdepartment;
						@$_SESSION['email_id']=$db_emailid;
						@$_SESSION['gender']=$dbgender;
						header("Location:interface.php?user=".$dbempid);
					}
					else echo   '<script type="text/javascript">
							    alert ( "Password not matched as HOD or registrar ");
								window.location.href="login.php";
								</script>' ;
					}
					else  {
							$msg= "Incorrect details. Fill correct details";
							echo "<script> alert('$msg'); location.href='".login.".php'; </script>" ;
					}
				}
				else if( $designation == 'guest faculty'|| ($designation) == 'Associate professor' ||($designation) == 'Assistant professor' || ($designation) == 'Professor'  || $designation == 'Lecturer' || $designation == 'other' )
					{
						$query=mysqli_query($connect,"SELECT * FROM faculty WHERE emp_id='$empid' ");
						if(mysqli_num_rows($query))
						{
						//while($row=mysqli_fetch_assoc($query))
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
						if( ($headid)==$dbempid )
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
