<?php
     $servername = 'localhost';
     $username = 'root';
     $password = '';
     $database = 'football_fantasy'; 

     $conn = mysqli_connect($servername,$username,$password,$database);
     $home_team = $_POST['home_team'];
     $away_team = $_POST['away_team'];
     $stadium = $_POST['_stadium'];
     $time = $_POST['_time'];
     
     $sql = "INSERT INTO premiertable(HomeTeam,Awayteam,Stadium,Time) VALUES ('$home_team','$away_team','$stadium','$time')";
     if(mysqli_query($conn,$sql)){
         echo "Successful";
     }else{
         echo "Fail";
     }

?>