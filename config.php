<?php
    $con = mysqli_connect("localhost","root","","projectmchDB");
    if(!$con){ // Error Handling part 
        die("Could not connect to DB server. Please try again");
    }
?>