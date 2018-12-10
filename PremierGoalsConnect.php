<?php
     $servername = 'localhost';
     $username = 'root';
     $password = '';
     $database = 'football_fantasy'; 
     
     $conn = mysqli_connect($servername,$username,$password,$database);
     $name = $_POST['_name'];
     $goals = $_POST['_goals'];
     
     $sql = "INSERT INTO premiergoals(Name,Goals) VALUES ('$name','$goals')";
     if(mysqli_query($conn,$sql)){
         echo "Successful";
     }else{
         echo "Fail";
     }

?>