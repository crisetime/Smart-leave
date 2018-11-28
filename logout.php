
<?php
	session_start();
	unset($_SESSION['emp_id']);
	unset($_SESSION['name']);
	//if(!empty($_SESSION_['head_id']))
	//{ echo "jndjfzj" ;unset($_SESSION['head_id']); }
	if(session_destroy())
	echo $_SESSION['emp_id'] ;
	header("Location: index.php"); // Redirecting To Home Page
?>
