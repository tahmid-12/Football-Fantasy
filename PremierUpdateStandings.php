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
    <!--Google fots-->
    <link href="https://fonts.googleapis.com/css?family=Righteous" rel="stylesheet">
    <!-- External CSS -->
    <link rel="stylesheet" href="style7.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Notable" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <title>Premier League Update Stats</title>
    <link rel="icon" href="image/Sm_logos/premier.jpg">
</head>
<body style="background-image: url(image/grass.jpg);">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box2">
                     <form action="PremierUpdateConnect.php" method="post">
                    <br>
                    <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">Club <span style="margin-left:70px;">:</span></label>
                    <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_club">
                    <br>
                    <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">MP <span style="margin-left:80px;">:</span></label>
                    <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_mp">
                    <br>
                    <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">W <span style="margin-left:90px;">:</span></label>
                    <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_w">
                    <br>
                    <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">D <span style="margin-left:90px;">:</span></label>
                    <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_d">
                    <br>
                    <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">L <span style="margin-left:90px;">:</span></label>
                    <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_l">
                    <br>
                    <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">GF <span style="margin-left:90px;">:</span></label>
                    <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_gf">
                    <br>
                    <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">GA <span style="margin-left:90px;">:</span></label>
                    <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_ga">
                    <br>
                    <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">GD <span style="margin-left:90px;">:</span></label>
                    <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_gd">
                    <br>
                    <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">Pts <span style="margin-left:90px;">:</span></label>
                    <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_pts">
                    <br>
                    <input class="btn btn-primary" type="submit" value="Submit" style="margin-left:450px;margin-top:30px;">
                    </form>
                </div>
            </div>
        </div>
    </div>

<script src="premiertest.js"></script>
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