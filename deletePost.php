<?php session_start();
$adID = $_GET["adID"];
include 'config.php';
  $sql = "DELETE FROM `adTable` WHERE `adID` = '".$adID."'";
  if(mysqli_query($con,$sql)){

      echo "File Deleted Successfully ";

      header("Location:HomePage.php");

  } else {

    echo "Something went wrong , Please check your file again !!!",$con -> error;

  }
?>