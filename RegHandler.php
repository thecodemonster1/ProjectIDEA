<?php
        if(isset($_POST["submitBtn"])){
          // Read values from the text feild 
          $firstName = $_POST["fnameBox"];
          $lastName = $_POST["lnameBox"];
          $email = $_POST["emailBox"];
          $role = $_POST["roleDropdown"];
          $contact = $_POST["contactNumberBox"];
          $password = $_POST["passwordBox"];
          $password2 = $_POST["passwordBox2"];
          

          $valid = false;
          $con = mysqli_connect("localhost","root","","projectmchDB");
          if(!$con){ // Error Handling part 
            echo '<script> alert ("Could not connect to DB server. Please try again") </script>';
          }
          

          if ($password == $password2){
            $sql = "INSERT INTO `userTable` (`firstName`, `lastName`, `email`, `role`, `contachNumber`, `password`, `userID`) VALUES ('".$firstName."', '".$lastName."', '".$email."', '".$role."', '".$contact."', '".$password."', NULL);";
            $result = mysqli_query($con,$sql);
            header("Location:loginPage.php");
          }else{
            echo '<script> alert ("Please confirm the password") </script>';
          }
      } 
      ?>