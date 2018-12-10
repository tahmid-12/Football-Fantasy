<?php

     $servername = 'localhost';
     $username = 'root';
     $password = '';
     $database = 'football_fantasy'; 
     
     $conn = mysqli_connect($servername,$username,$password,$database);
     $name = $_POST['_name'];
     $position = $_POST['_position'];
     $team = $_POST['_team'];
     
     $sql = "INSERT INTO serieaplayers(Name,Position,Team) VALUES ('$name','$position','$team')";
     if(mysqli_query($conn,$sql)){
         echo "Successful";
     }else{
         echo "Fail";
     }

?>