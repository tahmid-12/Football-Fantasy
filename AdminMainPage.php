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
    <title>Admin Page</title>
</head>
<body>
    
    <div class="box">
        <h1 class="text-center" style="padding-top:10px; color:red; font-family: 'Righteous', cursive;">Admin Panel</h1>
    </div>
    <br>
    <!--Premier League-->
    <div style="margin-left:200px;margin-top:150px;">
        <img src="image/logo/premier.jpg" alt="">
        <p class="fonts">
        <a href="PremierTable.php" target="_blank" style="color:rgb(176,48,96);">Matches</a>
        </p>
        <p class="fonts">
        <a href="PremierStandings.php" target="_blank" style="color:rgb(176,48,96);">Standings</a>
        </p>
        <p class="fonts">
        <a href="PremierStats.php" target="_blank" style="color:rgb(176,48,96);">Stats</a>
        </p>
        <p class="fonts">
        <a href="PremierPlayers.php" target="_blank" style="color:rgb(176,48,96);">Players</a>
        </p>
        <p class="fonts">
        <a href="PremierUpdateStandings.php" target="_blank" style="color:rgb(176,48,96);">Update Table</a>
        </p>
    </div>
    <!--La Liga-->
    <div style="margin-left:550px;margin-top:-150px;">
            <img src="image/logo/laliga.jpg" alt="">
            <p class="fonts">
            <a href="LaLigaTable.php" target="_blank" style="color: rgb(0,0,139);">Matches</a>
            </p>
        <p class="fonts"><a href="laligaStandings.php" target="_blank" style="color: rgb(0,0,139);">Standings</a></p>
        <p class="fonts"><a href="LaLigaStats.php" target="_blank" style="color: rgb(0,0,139);">Stats</a></p>
        <p class="fonts"><a href="laligaPlayers.php" target="_blank" style="color: rgb(0,0,139);">Players</a></p>
        <p class="fonts">
        <a href="" target="_blank" style="color:rgb(0,0,139);">Update Table</a>
        </p>
    </div>
    <!--Bundesliga-->
    <div style="margin-left:900px;margin-top:-150px;">
            <img src="image/logo/bundesliga.jpg" alt="">
        <p class="fonts"><a href="bundesligaTable.php" target="_blank" style="color: rgb(139,0,0);">Matches</a></p>
        <p class="fonts"><a href="bundesligaStandings.php" target="_blank" style="color: rgb(139,0,0);">Standings</a></p>
        <p class="fonts"><a href="bundesligaStats.php"  target="_blank" style="color: rgb(139,0,0);">Stats</a></p>
        <p class="fonts"><a href="bundesligaPlayers.php" target="_blank" style="color: rgb(139,0,0);">Players</a></p>
        <p class="fonts"><a href="" target="_blank" style="color:rgb(139,0,0);">Update Table</a></p> 
    </div>
    <br>
    <!--SerieA-->
    <div style="margin-left:350px;margin-top:80px;">
            <img src="image/logo/seriea.jpg" alt="">
            <p class="fonts"><a href="serieatable.php" target="_blank" style="color: rgb(34,139,34);">Matches</a></p>
        <p class="fonts"><a href="serieaStandings.php" target="_blank" style="color: rgb(34,139,34);">Standings</a></p>
        <p class="fonts"><a href="serieaStats.php" target="_blank" style="color: rgb(34,139,34);">Stats</a></p>
        <p class="fonts"><a href="serieaPlayers.php" target="_blank" style="color: rgb(34,139,34);">Players</a></p>
        <p class="fonts">
        <a href="" target="_blank" style="color: rgb(34,139,34);">Update Table</a>
        </p>
    </div>
    <br>
    <!--
    <button type="submit" class="btn btn-primary" name="submit" style="margin-left:600px; width:150px;">
    Log Out
    </button>-->
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