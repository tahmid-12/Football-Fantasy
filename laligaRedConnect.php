<?php
     $servername = 'localhost';
     $username = 'root';
     $password = '';
     $database = 'football_fantasy'; 
     
     $conn = mysqli_connect($servername,$username,$password,$database);
     $name = $_POST['_name'];
     $cards = $_POST['_cards'];
     
     $sql = "INSERT INTO laligared(Name,Cards) VALUES ('$name','$cards')";
     if(mysqli_query($conn,$sql)){
         echo "Successful";
     }else{
         echo "Fail";
     }

?>