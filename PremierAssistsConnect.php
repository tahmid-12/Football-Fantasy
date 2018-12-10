<?php
     $servername = 'localhost';
     $username = 'root';
     $password = '';
     $database = 'football_fantasy'; 
     
     $conn = mysqli_connect($servername,$username,$password,$database);
     $name = $_POST['_name'];
     $assists = $_POST['_assists'];
     
     $sql = "INSERT INTO premierassists(Name,Assists) VALUES ('$name','$assists')";
     if(mysqli_query($conn,$sql)){
         echo "Successful";
     }else{
         echo "Fail";
     }

?>