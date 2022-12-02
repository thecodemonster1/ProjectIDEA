<?php
                if(isset($_POST["submitBtn"])){
                  $productName = $_POST["txtProductName"];
                  $description = $_POST["txtDescription"];

                  $imagePath = "upload/".basename($_FILES["txtImagePath"]["name"]);
                  move_uploaded_file($_FILES["txtImagePath"]["tmp_name"],$imagePath);
            
                // $target_file = "uploads/". basename($_FILES["txtImagePath"]["name"]);
                // $uploadOk = 1;
                // $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
                // // Check if image file is a actual image or fake image
                // if(isset($_POST["submitBtn"])) {
                //   $check = getimagesize($_FILES["txtImagePath"]["tmp_name"]);
                //   if($check !== false) {
                //     echo "File is an image - " . $check["mime"] . ".";
                //     $uploadOk = 1;
                //   } else {
                //     echo "File is not an image.";
                //     $uploadOk = 0;
                //   }
                // }

                  $bgcolor = $_POST["txtBgcolor"];
                  $size = $_POST["txtSize"];
                  $category = $_POST["txtCategory"];
                  $quantity = $_POST["txtQuantity"];

                   $img = "/Applications/XAMPP/xamppfiles/htdocs/www/Project_MCH/Images/tap1.jpeg";
                include 'config.php';

                $sql = "INSERT INTO `adTable`(`productName`, `description`, `imagePath`, `backgroundColor`, `size`, `category`, `quantity`) 
                VALUES ('".$productName."','".$description."','".$imagePath."','".$bgcolor."','".$size."','".$category."','".$quantity."');";
                if(mysqli_query($con,$sql)){
                    echo "<script>alert('File Upload Successfully ');</script>";
                    
                } else {
                    echo "Something went wrong , Please check your file again !!!";
                }
                }
            ?>


<?php
// $target_dir = "uploads/";
// $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
// $uploadOk = 1;
// $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
// // Check if image file is a actual image or fake image
// if(isset($_POST["submit"])) {
//   $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
//   if($check !== false) {
//     echo "File is an image - " . $check["mime"] . ".";
//     $uploadOk = 1;
//   } else {
//     echo "File is not an image.";
//     $uploadOk = 0;
//   }
// }
?>