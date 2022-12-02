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
                $sql = "SELECT * FROM `adTable`;";
                $result = mysqli_query($con,$sql);
                if(mysqli_num_rows($result) > 0 ){
                  while($row = mysqli_fetch_assoc($result)){
                    echo '
                    
                <!--        2_a showcase-->
                        <div class="manyShowCase one" >
                            <br>
                            <h1 style="font-size:3em;"><b>Iron Rod</b></h1>
                            <p>Strong. Steel.</p>
                            <div class="lmLinks">
                                <div class="link one">
                                <a href="deletePost.php?id='.$row["adID"].'">Delete </a> <emp style="color:#258eff">> </emp>
                                </div>
                               
                                
                            </div>
                            <br> <br>
                            <img src="Images/ironRod1.jpeg" width="300px" height="200px">
                            <br>
                        </div>
                <!--        2_b Showcase-->
                        <div class="manyShowCase two"  align="center">
                            <br>
                            <h1 style="font-size:3em;"><b>Cement</b></h1>
                            <p>Engineer&#39;s Choice.</p>
                            <div class="lmLinks">
                                <div class="link one">
                                <a href="deletePost.php?id='.$row["adID"].'">Delete </a><emp style="color:#258eff">> </emp>
                                </div>
                                
                            </div>
                            <br> <br>
                            <img src="Images/cement2.jpeg" width="300px" height="200px">
                            <br>
                        </div>
                    ';
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
$sql = "SELECT * FROM `adTable`;";
$result = mysqli_query($con,$sql);
if(mysqli_num_rows($result) > 0 ){
    while($row = mysqli_fetch_assoc($result)){
    echo '
                    
                <!--        2_a showcase-->
                        <div class="manyShowCase one" >
                            <br>
                            <h1 style="font-size:3em;"><b>Iron Rod</b></h1>
                            <p>Strong. Steel.</p>
                            <div class="lmLinks">
                                <div class="link one">
                                <a href="deletePost.php?id='.$row["adID"].'">Delete </a> <emp style="color:#258eff">> </emp>
                                </div>
                                
                            </div>
                            <br> <br>
                            <img src="Images/ironRod1.jpeg" width="300px" height="200px">
                            <br>
                        </div>
                <!--        2_b Showcase-->
                        <div class="manyShowCase two"  align="center">
                            <br>
                            <h1 style="font-size:3em;"><b>Cement</b></h1>
                            <p>Engineer&#39;s Choice.</p>
                            <div class="lmLinks">
                                <div class="link one">
                                <a href="deletePost.php?id='.$row["adID"].'">Delete </a> <emp style="color:#258eff">> </emp>
                                </div>
                                
                            </div>
                            <br> <br>
                            <img src="Images/cement2.jpeg" width="300px" height="200px">
                            <br>
                        </div>
                    ';
            }
          }


?>

</div>