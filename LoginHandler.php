<?php 
            if(isset($_POST["submitBtn"])){
                // Read values from the text feild 
                $Username = $_POST["UsernameText"];
                $Password = $_POST["PasswordText"];
                $valid = false;

                include 'config.php';
                $sql = " SELECT * FROM `userTable` WHERE  `email` = '".$Username."' and  `password` = '".$Password."'";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0){
                    $valid = true;
                } else {
                    $valid = false;
                }
                if($valid) {
                $_SESSION["userName"] = $Username;
                if($Username == 'admin@gmail.com'){
                    header("Location:admin.php");
                  }else{
                    header("Location:HomePage.php");
                  }
                } else {
                    echo '<script> alert ("Please check your Username and password") </script>';
                    header("Location:loginPage.php");
                }
            } 
          ?>