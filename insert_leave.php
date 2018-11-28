<?php
	session_start();

	$link=mysqli_connect("localhost","root","","e-leavesystem")or die("Couldn't connect with the databse");
	if($link === false)
	{
		die("Database in not connected...kindly refresh the page");
	}
	else if(isset($_POST['submit']))
	{
	$emp_id=$_SESSION['emp_id'] ;
	$from = $_POST['from'];
	$to=$_POST['to'];
	$leave_type=$_POST['type'];
	$reason=$_POST['reason'];
	$address=$_POST['address'];
	$contact=$_POST['contact'];
	$datetime1 = date_create($from);
    $datetime2 = date_create($to);
	$designation=$_SESSION['designation'] ;
	$department=$_SESSION['department'] ;
	$d_o_apply=date("Y/m/d");
	$no_of_days = $datetime1->diff($datetime2);
	$no_of_days=$no_of_days->days;

	//if(isset['submit']){
	//$sql = "SELECT * FROM apply_for_leave where emp_id='$emp_id' and leave_type='$leave_type' and from='$from' and to='$to')" ;

	$result = mysqli_query($link,"SELECT * FROM apply_for_leave where emp_id='$emp_id' and leave_type='$leave_type' and leave_from='$from' and leave_to='$to' ");
	$rows = mysqli_num_rows($result);
	if($rows==0)
	{
		$sql="(select * from remaining_leave where emp_id='$emp_id' )" ;
		$res=mysqli_query($link,$sql);
		$numrows=mysqli_num_rows($res);

		if($numrows==1)
		{
		    $row=mysqli_fetch_assoc($res);
			$db_leavetype=$row[$leave_type];

			if( $db_leavetype >= $no_of_days)
			{

				$res = mysqli_query($link," INSERT INTO apply_for_leave(emp_id,department,leave_from,leave_to,reason,address_when_out_of_station,contact_no,date_of_apply,leave_type,status)
				values('$emp_id','$department','$from','$to','$reason','$address','$contact','$d_o_apply','$leave_type','pending')");
				if($res)
				{

				$sec='2';
			if($_SESSION['designation'] == 'hod')
					header("Refresh: $sec, url=interface.php");
				else
					header("Refresh: $sec, url=userpage.php");
				echo "&nbsp&nbsp&nbsp&nbsp&nbsp You have sucessfully applied for " .$_POST['type']." leave" ;
				}
				else echo " Error while applying for leave.Kindly fill the correct details ";
			}
			else
			{

				$mssg="You dont have sufficient leaves to apply,check in remaining leaves " ;
				echo "<script type='text/javascript'>
				alert('$mssg');
				location.href='".'leave_apply'.".php' ;
				</script>";
				//header("location:leave_apply.php");
			}
		}
		else
		{    $msg="No entry in leave table";
	          echo "<script type='text/javascript'> alert('$msg');
					location.href='".userpage.".php';
					</script>";

		}
	}
	else
	{
		echo " You have already applied for same leave for same days";
		header("location: userpage.php");
	}
	}

?>
