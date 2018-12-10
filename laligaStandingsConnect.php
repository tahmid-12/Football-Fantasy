<?php
    
     $servername = 'localhost';
     $username = 'root';
     $password = '';
     $database = 'football_fantasy'; 
     
     $conn = mysqli_connect($servername,$username,$password,$database);
     $club = $_POST['_club'];
     $mp = $_POST['_mp'];
     $d = $_POST['_d'];
     $w = $_POST['_w'];
     $l = $_POST['_l'];
     $gf = $_POST['_gf'];
     $ga = $_POST['_ga'];
     $gd = $_POST['_gd'];
     $pts = $_POST['_pts'];
      
     $sql = "INSERT INTO laligastandings(Club,MP,W,D,L,GF,GA,GD,Pts) VALUES ('$club','$mp','$d','$w','$l','$gf','$ga','$gd','$pts')";
      if(mysqli_query($conn,$sql)){
         echo "Successful";
     }else{
         echo "Fail";
     }
?>