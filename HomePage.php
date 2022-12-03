<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link rel="shourtcut icon" href="Images/MCH_logo.ico">
        <link rel="stylesheet" type="text/css" href="style1.css">
        <script src="js1.js"></script>
        <script src="https://code.jquery.com/jquery-1.10.2.js"></script>
        <title>MCHHome</title>
    </head>
        <body>

            <nav>
                <div class="navbar" id="navbar" align="center" style="font-size:0.7em;padding-top: -5px;">
                    <a href="HomePage.php" class="homeBtn active" >
                        <img src="Images/logo.png" width="16px" id="logo"/>
                        Home
                    </a>
                    <a href="RegPage.php">Register</a>
                    <a href="loginPage.php">LogIn</a>
                    <a href="aboutUs.php" >About</a>
                
                </div>
            </nav>
            

        <br>

        



<!--    2nd Showcase-->
 <!-- <a href="deleteContent.php?id='.$row["itemid"].'">Delete </a> -->

 <div>
    <br>
    <h1 style="font-size:3em;" id="farmingItems"><b>Farming Items</b></h1>
    <p>Farmer. Tools.</p>
    <p style="font-size:0.8em;color:rgb(190, 201, 126)">Scroll horizontally ---></p>
    <br>
</div>

<div class="manyShowCaseType" >
<?php 
                include 'config.php';
                $sql = "SELECT * FROM `adTable` WHERE `category` = 'farming', adID % 2 <> 0;";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0 ){
                  while($row = mysqli_fetch_assoc($result)){
                    echo '<!--        2_a showcase-->
                    <div class="manyShowCase one" >
                        <br>
                        <h1 style="font-size:3em;"><b>Iron Rod</b></h1>
                        <p>Strong. Steel. <br><br>
                        Price: ###### <br><br>
                        Available Stock: #### <br>
                        </p>
                        
                        <br> <br>
                        <img src="Images/ironRod1.jpeg" width="300px" height="200px">
                        <br>
                    </div>';
              ;
            }
          }
              ?>

<?php 
                include 'config.php';
                $sql = "SELECT * FROM `adTable` WHERE `category` = 'farming', adID % 2 = 0;";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0 ){
                  while($row = mysqli_fetch_assoc($result)){
                    echo '<!--        2_b Showcase-->
                    <div class="manyShowCase two"  align="center">
                                <br>
                                <h1 style="font-size:3em;"><b>Cement</b></h1>
                                <p>Engineer&#39;s Choice. <br><br>
                                Price: ###### <br><br>
                                Available Stock: #### <br></p>
                                
                                <br> <br>
                                <img src="Images/cement2.jpeg" width="300px" height="200px">
                                <br>
                            </div>';
              ;
            }
          }
              ?>

</div>
                

            
                
                
                    
                
                    
<!--    4th Showcase div-->
    <div>
        <br>
            <h1 style="font-size:3em;" id="buildingItems"><b>Building construction</b></h1>
            <p>Tools. Construction.</p>
            <p style="font-size:0.8em;color:rgb(190, 201, 126)">Scroll horizontally ---></p>
            <br>
    </div>
    <div class="manyShowCaseType" >

    <?php 
                include 'config.php';
                $sql = "SELECT * FROM `adTable` WHERE `category` = 'construction', adID % 2 <> 0;";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0 ){
                  while($row = mysqli_fetch_assoc($result)){
                    echo '<!--        2_a showcase-->
                    <div class="manyShowCase one" >
                        <br>
                        <h1 style="font-size:3em;"><b>Iron Rod</b></h1>
                        <p>Strong. Steel. <br><br>
                        Price: ###### <br><br>
                        Available Stock: #### <br>
                        </p>
                        
                        <br> <br>
                        <img src="Images/ironRod1.jpeg" width="300px" height="200px">
                        <br>
                    </div>';
              ;
            }
          }
              ?>

<?php 
                include 'config.php';
                $sql = "SELECT * FROM `adTable` WHERE `category` = 'construction', adID % 2 = 0;";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0 ){
                  while($row = mysqli_fetch_assoc($result)){
                    echo '<!--        2_b Showcase-->
                    <div class="manyShowCase two"  align="center">
                        <br>
                        <h1 style="font-size:3em;"><b>Cement</b></h1>
                        <p>Engineer&#39;s Choice. <br><br>
                        Price: ###### <br><br>
                        Available Stock: #### <br></p>
                        
                        <br> <br>
                        <img src="Images/cement2.jpeg" width="300px" height="200px">
                        <br>
                    </div>';
              ;
            }
          }
              ?>

</div>

 
    


    
        

        <div class="footer" style="background: rgba(0, 0, 0, 1); padding-top: 40px;">
            <img src="Images/logo.png" width="10%" alt="Logo"/>
            <p>MC Hardware</p>
        <!--        <h1>MC Hardware</h1>-->
            <p>Make your dream house with low cost</p>
        </div>
        


    </body>
</html>
<script>
    window.onscroll = function() {myFunction()};

    var navbar = document.getElementById("navbar");
    var sticky = navbar.offsetTop;

    function myFunction() {
      if (window.pageYOffset >= sticky) {
        navbar.classList.add("sticky")
      } else {
        navbar.classList.remove("sticky");
      }
    }
</script>