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
    <title>Premier League Stats</title>
    <link rel="icon" href="image/Sm_logos/premier.jpg">
</head>
<body style="background-image: url(image/grass.jpg);">

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box2">
                    <!--Goals-->
                     <div class="goals">
                         <h1 class="fonts text-center">Goals</h1>
                         <form action="PremierGoalsConnect.php" method="post">
                         <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">Player Name <span style="margin-left:80px;">:</span></label>
                         <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_name">
                         <br>
                         <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">Goals <span style="margin-left:130px;">:</span></label>
                         <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_goals">
                         <br>
                        <input class="btn btn-primary" type="submit" value="Submit" style="margin-left:450px;margin-top:30px;">
                        </form>
                     </div>
                     <!--Assists-->
                     <div class="assists">
                         <h1 class="fonts text-center">Assists</h1>
                         <form action="PremierAssistsConnect.php" method="post">
                         <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">Player Name <span style="margin-left:80px;">:</span></label>
                         <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_name">
                         <br>
                         <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">Assists <span style="margin-left:130px;">:</span></label>
                         <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_assists">
                         <br>
                        <input class="btn btn-primary" type="submit" value="Submit" style="margin-left:450px;margin-top:30px;">
                        </form>
                     </div>
                     <!--Yellow Card-->
                     <div class="yellowcard">
                         <h1 class="fonts text-center">Yellow Cards</h1>
                         <form action="PremierYellowConnect.php" method="post">
                         <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">Player Name <span style="margin-left:80px;">:</span></label>
                         <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_name">
                         <br>
                         <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">Yellow Cards <span style="margin-left:80px;">:</span></label>
                         <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_cards">
                         <br>
                        <input class="btn btn-primary" type="submit" value="Submit" style="margin-left:450px;margin-top:30px;">
                        </form>
                     </div>
                     <!--Red Card-->
                     <div class="redcard">
                         <h1 class="fonts text-center">Red Cards</h1>
                         <form action="PremierRedConnect.php" method="post">
                         <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">Player Name <span style="margin-left:80px;">:</span></label>
                         <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_name">
                         <br>
                         <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">Red Cards <span style="margin-left:100px;">:</span></label>
                         <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_cards">
                         <br>
                        <input class="btn btn-primary" type="submit" value="Submit" style="margin-left:450px;margin-top:30px;">
                        </form>
                     </div>
                </div>
            </div>
        </div>
    </div>

<script src="test.js"></script>
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