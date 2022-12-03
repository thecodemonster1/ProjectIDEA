<?php session_start();
$adID = $_GET["adID"];

$con = mysqli_connect("localhost","root","","projectmchDB");
    if(!$con){ // Error Handling part 
        die("Could not connect to DB server. Please try again");
    }
    
  $sql = "DELETE FROM `adTable` WHERE `adID` = '".$adID."'";
  if(mysqli_query($con,$sql)){

      echo "File Deleted Successfully ";

      header("Location:HomePage.php");

  } else {

    echo "Something went wrong , Please check your file again !!!",$con -> error;

  }
?>