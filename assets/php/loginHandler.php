<?php session_start();
 if(isset($_POST["btnSubmit"]))
 {
	 $userName = $_POST["txtEmail"];
	 $password = $_POST["txtPassword"];
	 
	 $con = mysqli_connect("localhost","root","","advertisementdb","3308");
	 
	 if(!$con) 
	 {
		die("Sorry !!! we are facing technical issue"); 
	 }
	 
	 $sql = "SELECT * FROM `tbluser` WHERE `email` = '".$userName."' and `password` = '".$password."'";
	 
	 $result = mysqli_query($con,$sql);	 
	 
	 if(mysqli_num_rows($result)>0)
	 {
		 //Create session 
		 $_SESSION["userName"] = $userName;
		 header('Location:myAccount.php');
	 }
	 else
	 {
		  header('Location:login.php');
	 } 
 }
?>
