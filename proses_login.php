<?php
	require('dbcontroller.php');
	session_start();
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
		
		$username = stripslashes($_REQUEST['username']); // removes backslashes
		$username = mysqli_real_escape_string($connect,$username); //escapes special characters in a string
		$password = stripslashes($_REQUEST['password']);
		$password = mysqli_real_escape_string($connect,$password);
		
	//Checking is user existing in the database or not
        $query = "SELECT * FROM `tbl_akun_mitra` WHERE username='$username' and password='$password'";
		$result = mysqli_query($connect,$query) or die(mysql_error());
		$rows = mysqli_num_rows($result);
        if($rows==1){
			$_SESSION['username'] = $username;
		$queryCheck = "SELECT `role` FROM `tbl_akun_mitra` WHERE username='$username' and role='Admin' || 'Admin'  ";
		$resultCheck = mysqli_query($connect,$queryCheck) or die(mysql_error());
		$rowsCheck = mysqli_num_rows($resultCheck);
        	
			if($rowsCheck == 1){
				echo "<script type='text/javascript'>windows.alert('submitted successfully!')</script>";
				header("Location: admin/dashboard_Admin.php");
			}
			else{
				echo "<script type='text/javascript'>windows.alert('submitted successfully!')</script>";
				header("Location: penyedia/dashboard_penyedia.php"); // Redirect user to index.php
				}
             	}else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='login.php'>Login</a></div>";
				}
    }else{
?>

<?php } ?>


