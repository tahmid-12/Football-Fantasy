<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- External CSS -->
    <link rel="stylesheet" href="style6.css">
    <title>Admin LogIn</title>
</head>
<body>
    
<div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box">
                    <h1 class="text-center">Admin LogIn</h1>
                    <form action="logIn.php" method="post">
                  <div class="form-group">
                    <label for="user" style="padding-left:280px; padding-top:25px;">Username:</label>
                    <input type="text" class="form-control inputbox" id="user" name="user">
                  </div>
                  <div class="form-group">
                    <label for="pass" style="padding-left:280px;">Password:</label>
                    <input type="password" class="form-control inputbox" id="pass" name="password">
                  </div>
                  <button type="submit" class="btn btn-primary" name="submit" style="margin-left:390px;">
                  Submit
                  </button>
                </form>
                </div>
            </div>
        </div>
    </div>
    
    
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script>
        $(document).ready(function(){
            $('[data-toggle="tooltip"]').tooltip();   
        });
    </script>
</body>
</html>