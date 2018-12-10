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
     
     $sql = "UPDATE premierstandings SET Club = '$club', MP = '$mp', D = '$d', W = '$w',L = '$l', GF = '$gf', GA = '$ga', GD = '$gd' , Pts = '$pts' WHERE Club = '$club'";

     if(mysqli_query($conn,$sql)){
         echo "Successful";
     }else{
         echo "<script>
                   alert('Not Found');
              </script>";
     }
?>