<?php
                if(isset($_POST["submitBtn"])){
                  $productName = $_POST["txtProductName"];
                  $description = $_POST["txtDescription"];
                  $imagePath = "upload/".basename($_FILES["txtImagePath"]["name"]);
                  move_uploaded_file($_FILES["fileImage"]["tmp_name"],$Images);
                  $bgcolor = $_POST["txtBgcolor"];
                  $size = $_POST["txtSize"];
                  $category = $_POST["txtCategory"];
                  $quantity = $_POST["txtQuantity"];

                  if(isset($_POST["chkformal"])){
                    $category ="Formal";}
                  if(isset($_POST["chkcasual"])){
                    $category ="Casual";}
                  if(isset($_POST["chksport"])){
                    $category ="Sport";}
                    if(isset($_POST["chkPublish"])){
                      $status = 1 ;
                    } else {
                      $status = 0 ;
                    }
                    include 'Config.php';
                    $sql = "INSERT INTO `item` (`title`, `category`, `description`, `path`, `published`, `email`) VALUES 
                    ('".$title."', '".$category."', '".$Description."', '".$Images."', '".$status."', '".$_SESSION["userName"]."');";
                    if(mysqli_query($con,$sql)){
                        echo "File Upload Successfully ";
                    } else {
                      echo "Something went wrong , Please check your file again !!!",$con -> error;
                    }
                }
            ?>