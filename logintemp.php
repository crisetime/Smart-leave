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

				/*if( ($designation) == 'admin' )
				{
					$query1=mysqli_query($connect,"SELECT * FROM leave_providers WHERE head_id='$empid' ");
					$numrows1=mysqli_num_rows($query1);
					if($numrows1>0)
					{
					while($row1=mysqli_fetch_assoc($query1))
					{

						$dbheadid=$row1['head_id'];
						$dbpassword1=$row1['password'];
						$dbdesignation1=$row1['designation'];
						$db_firstname1=$row1['fname'];
						$db_lastname1=$row1['lname'];
						$dbdepartment1=$row1['department'];
						$dbemailid=$row1['emailid'];
						$dbgender=$row1['gender'];

					}
					if( ($empid)==$dbheadid && ($password)==($dbpassword1)&& ($designation)==$dbdesignation1)
					{    echo 'ald'.$_SESSION['head_id'];
						session_start();
						@$_SESSION['head_id']=$dbheadid;
						@$_SESSION['name']=$db_firstname1;
						@$_SESSION['lname']=$db_lastname1;
						@$_SESSION['designation']=$dbdesignation1;
						@$_SESSION['department']=$dbdepartment1;
						@$_SESSION['email_id']=$dbemailid;
						@$_SESSION['gender']=$dbgender;
						//echo '<script> alert($_SESSION['head_id']); </script>';
						echo("{$_SESSION['head_id']}"."<br />");
						header("Location:interface.php?user=".$dbheadid);
					}
					else echo   '<script type="text/javascript">
							    alert ( "Password not matched as HOD or admin");
								window.location.href="login.php";
								</script>' ;
					}
					else  {
							$msg= "Incorrect details. Fill correct details";
							echo "<script> alert('$msg'); location.href='".'login'.".php'; </script>" ;
					}
				}
				else */if( $designation == 'guest faculty'|| ($designation) == 'Associate professor' ||($designation) == 'Assistant professor' || ($designation) == 'Professor'  || $designation == 'Lecturer' || $designation == 'other' )
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
