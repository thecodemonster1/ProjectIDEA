<?php 
            if(isset($_POST["submitBtn"])){
                // Read values from the text feild 
                $Username = $_POST["UsernameText"];
                $Password = $_POST["PasswordText"];
                $valid = false;
                $con = mysqli_connect("localhost","root","","projectmchDB");
                if(!$con){ // Error Handling part 
                    alert("Could not connect to DB server. Please try again");
                }
                $sql = " SELECT * FROM `userTable` WHERE  `email` = '".$Username."' and  `password` = '".$Password."'";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0){
                    $valid = true;
                } else {
                    $valid = false;
                }
                if($valid) {
                $_SESSION["userName"] = $Username;
                header("Location:HomePage.php");
                } else {
                echo "Please check your Username and password";
                }
            } 
          ?>