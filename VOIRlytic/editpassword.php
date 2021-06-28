<?php
	session_start();
	
	if(isset($_SESSION['email']))
	{
		include ("dbconnect.php");
	mysqli_select_db($conn,'voirlytic');
		
		$pass = $_POST['oldpw'];
		$newpw = $_POST['newpw'];
		$newpw2 = $_POST['newpw2'];
		$email = $_SESSION['email'];
		$query = "SELECT pass FROM account WHERE email = '$email' AND pass = '$pass'";
		$result = mysqli_query($conn,$query);
		$check = mysqli_num_rows($result);
		if($check == 0)
		{
			echo '<script type="text/javascript">window.alert("Wrong Password. Please re-enter your password") </script>';
    		echo "<script language='JavaScript'>window.location ='edit.php'</script>";
		}
		else if($check != 0 && ($newpw == $newpw2))
		{
			$query2 = "UPDATE account SET pass = '$newpw' WHERE email = '$email'";
			mysqli_query($conn,$query2);
			echo '<script type="text/javascript">window.alert("Password changed successfully. Please login again using the new password") </script>';
    		echo "<script language='JavaScript'>window.location ='resetsession.php'</script>";
		}
		else
		{
			echo '<script type="text/javascript">window.alert("The confirm new password is not the same as the new password. Please enter it again") </script>';
    		echo "<script language='JavaScript'>window.location ='edit.php'</script>";			
		}
	}
	else
	{
		header("Location: login.php");
	}
?>