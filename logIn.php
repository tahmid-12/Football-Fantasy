<?php
     $servername = 'localhost';
     $username = 'root';
     $password = '';
     $database = 'football_fantasy'; 

     $conn = mysqli_connect($servername,$username,$password,$database);

    $username = $_POST['user'];
    $password = $_POST['password'];
    $sql = "Select * from admin WHERE UserName='$username' AND Password='$password' LIMIT 1";
    $result = $conn->query($sql);
    if($result->num_rows > 0){
        header('Location: AdminMainPage.php');
    }
   else if($username == "" || $password == ""){
        echo "<script>
                   alert('No field can remain empty!');
              </script>";
       header('Location: Adminlogin.php');
    }
    else{
        echo "<script>
                   alert('Password does not match');
              </script>";
    }
?>