<?php

include ("db_connect.php");


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- font-awesome CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
     <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Muli" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Ruslan+Display" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Crete+Round" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Chango" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Notable" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- External CSS -->
    <link rel="stylesheet" href="style.css">
    <title>Football Fantasy</title>
</head>
<body data-spy="scroll" data-target=".navbar">
   
    <div class="container-fluid" id="header_container">
        <div class="row">
           <div class="col-md-3">
               <a href="#" class="logo" style="margin-left:80px; margin-bottom:45px;"><i class="fa fa-futbol fa-5x" style="color: red;"></i></a>
               <a class="d-inline-block logoText" style="" href="#">Football <br> Fantasy</a>
           </div>
           <div class="col-md-8 menuwrapper">
                <nav class="navbar navbar-expand-md navbar-dark mainmenu">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                            <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarNav">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a class="nav-link" href="#homeNav">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#leaguesNav">Leagues</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#transfersNav">Transfers</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#liveScoreNav">Live Matches</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#newsNav">News</a>
                            </li>
                        </ul>
                    </div>
                </nav>
           </div>
         </div>
      </div>
      <!--Home Slider-->
      <div class="home" id="homeNav">
        <div class="col-md-12">
            <div id="slider" class="carousel slide" data-ride="carousel">
                <ul class="carousel-indicators">
                    <li data-target="#slider" data-slide-to="0" class="active"></li>
                    <li data-target="#slider" data-slide-to="1"></li>
                    <li data-target="#slider" data-slide-to="2"></li>
                </ul>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="image/leagues.jpg" alt="" width="100%" height="570px">
                        <div class="carousel-caption">
                            <h3 class="LeagueHeader">Best Leagues in the world</h3>
                            <p class="LeagueParagraph">Get News about all the best leagues in the world through us.We provide you with the best football news around the world.Keep in touch with us to know the latest transfer news and to know the latest football score update of the best leagues in the world.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="image/players.jpg" alt="" width="100%" height="570px">
                        <div class="carousel-caption">
                            <h3 class="LeagueHeader">Players</h3>
                            <p class="LeagueParagraph">Learn all the details about your favourite players around the world through us.Watch their insane skills and make your opinion about it.You can also know where your favourite player started their football journey from through us.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                      <img src="image/transfer.jpg" alt="" width="100%" height="570px">
                      <div class="carousel-caption">
                        <h3 class="LeagueHeader">Tranfers</h3>
                        <p class="LeagueParagraph">Get to know about all the latest transfer news and gossips through us.All the done deals and all the tranfer possibilities.</p>
                      </div>   
                    </div>
                </div>
                <a class="carousel-control-prev" href="#slider" data-slide="prev">
                    <span class="carousel-control-prev-icon"></span>
                  </a>
                  <a class="carousel-control-next" href="#slider" data-slide="next">
                    <span class="carousel-control-next-icon"></span>
                  </a>
            </div>
        </div>
    </div>
    <!--Leagues-->
    <div class="leagues" id="leaguesNav">
        <!--Premier League,La liga & Bundesliga-->
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="font-family: 'Bree Serif', serif; font-size: 50px;">All Popular Leagues</p>
            </div>
        </div>
        <div class="row">
              <div class="col-md-4 premier">
                <a href="PremierLeague.php" target="_blank">
                 <img src="image/logo/premier.jpg" alt="">
                </a>
              </div>
              <div class="col-md-4 laliga">
                <a href="laliga.php" target="_blank">
                 <img src="image/logo/laliga.jpg" alt="">
                </a>
              </div>
        </div>
        <!--Seria A and Ligue 1-->
        <div class="row">
              <div class="col-md-6 seriea">
                  <a href="seriea.php" target="_blank">
                      <img src="image/logo/seriea.jpg" alt="">
                  </a>
              </div>
               <div class="col-md-4 bundesliga">
                <a href="bundesliga.php" target="_blank">
                 <img src="image/logo/bundesliga.jpg" alt="">
                </a>
             </div>  
        </div>
    </div>
    <!--Transfers-->
    <div class="transfer" id="transfersNav">
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="font-family: 'Bree Serif', serif; font-size: 50px;">Transfer News</p>
            </div>
            <br>
            <!--1st col-->
            <div class="col-md-4">
                <div class="card">
                  <img class="card-img-top" src="image/faces/pogba.jpg" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Paul Pogba to Barcelona?</h4>
                    <div id="anyId">
                        Manchester United star Paul Pogba is not on the market, according to agent Mino Raiola, who acknowledged the midfielder is "going through a delicate moment".
                        Pogba's future at Old Trafford has become uncertain following a reported falling out with under-fire United manager Jose Mourinho.
                    </div>
                  </div>
                </div>
            </div>
            <!--2nd col-->
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="image/faces/hazard.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Eden Hazard to Real madrid?</h4>
                        <div>
                            Eden Hazard says that he is finding it a 'hard decision' over whether to renew his Chelsea contract and has reiterated that moving to Real Madrid is something he has dreamed about.
                            Chelsea are keen to secure Hazard on a new deal following a summer of interest from Madrid.
                        </div>
                    </div>
                </div>
            </div>
            <!--3rd col-->
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="image/faces/rabiot.jpg" alt="">
                    <div class="card-body">
                        <h4 class="card-title">Adrien Rabiot to where?</h4>
                        <div>
                           Paris Saint-Germain may sell Barcelona target Adrien Rabiot before the end of the summer transfer window to help fund a move for Atletico Madrid left-back Filipe Luis.
                           There are clubs like Chelsea,Tottenham,Manchester City and many others are behind this midfielder.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!---->
    <!--LIVE SCORE-->
    <!---->
    <br>
    <div class="liveScore" id="liveScoreNav">
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="font-family: 'Bree Serif', serif; font-size: 70px;">Live League Matches</p>
            </div>
        </div>
        <!---->
        <!--Premier League-->
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="font-family: 'Bree Serif', serif; font-size: 50px;">
                   <img src="image/Sm_logos/premier.jpg" alt="">
                   Premier League
                </p>
            </div>
        </div>
        <!--Row Left Side-->
        <div class="row">
            <div class="col-md-12  text-center" style="font-family: 'Bree Serif', serif; font-size: 20px;">
                <?php
                  $query = "SELECT * FROM  premiertable LIMIT 3";
                
                  $result = mysqli_query($con, $query);
                  while ($data = mysqli_fetch_assoc($result)){
                            echo $data['HomeTeam'];
                            echo "<br>"; 
                            echo "<strong>VS</strong>";
                            echo "<br>";
                            echo $data['AwayTeam'];
                            echo "<br>";
                            echo $data['Time'];
                            echo "<br>";
                            echo $data['Stadium'];
                            echo "<br>";
                  }
                ?>
            </div>
        <div style="margin-top:-350px;margin-left:180px;">
            <img src="image/logo/premier.jpg" alt="">
        </div>
        <div style="margin-top:-350px;margin-left:600px;">
            <img src="image/logo/premier.jpg" alt="">
        </div>
        </div>
        <!--League Team Fixtures Link-->
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="PremierLeague.php" target="_blank" style="font-size: 25px; font-family: 'Anton', sans-serif;">Find the Full Premier League Fixtures</a>
            </div>
        </div>
        <!---->
        <!--la Liga-->
        <div class="row">
            <div class="col-md-12  text-center">
                <p style="font-family: 'Bree Serif', serif; font-size: 50px;">
                   <img src="image/Sm_logos/laliga.jpg" alt="">
                   La Liga
                </p>
            </div>
        </div>
        <!--Row Left and Right Sides-->
        <div class="row">
            <div class="col-md-12  text-center" style="font-family: 'Bree Serif', serif; font-size: 20px;">
                <?php
                  $query = "SELECT * FROM  laligatable LIMIT 3";
                
                  $result = mysqli_query($con, $query);
                  while ($data = mysqli_fetch_assoc($result)){
                            echo $data['HomeTeam'];
                            echo "<br>"; 
                            echo "<strong>VS</strong>";
                            echo "<br>";
                            echo $data['AwayTeam'];
                            echo "<br>";
                            echo $data['Time'];
                            echo "<br>";
                            echo $data['Stadium'];
                            echo "<br>";
                  }
                ?>
            </div>
        <div style="margin-top:-280px;margin-left:180px;">
            <img src="image/logo/laliga.jpg" alt="">
        </div>
        <div style="margin-top:-280px;margin-left:600px;">
            <img src="image/logo/laliga.jpg" alt="">
        </div>
        </div>
        <!--League Team Fixtures Link-->
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="laliga.php" target="_blank" style="font-size: 25px; font-family: 'Anton', sans-serif;">Find the La Liga League Fixtures</a>
            </div>
        </div>
        <!---->
         <!--Bundesliga-->
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="font-family: 'Bree Serif', serif; font-size: 50px;">
                   <img src="image/Sm_logos/bundesliga.jpg" alt="">
                   Bundesliga
                </p>
            </div>
        </div>
        <!--Row Left and Right Sides-->
        <div class="row" style="">
          <div class="col-md-12  text-center" style="font-family: 'Bree Serif', serif; font-size: 20px;">
                <?php
                  $query = "SELECT * FROM  bundesligatable LIMIT 3";
                
                  $result = mysqli_query($con, $query);
                  while ($data = mysqli_fetch_assoc($result)){
                            echo $data['HomeTeam'];
                            echo "<br>"; 
                            echo "<strong>VS</strong>";
                            echo "<br>";
                            echo $data['AwayTeam'];
                            echo "<br>";
                            echo $data['Time'];
                            echo "<br>";
                            echo $data['Stadium'];
                            echo "<br>";
                  }
                ?>
            </div>
        <div style="margin-top:-270px;margin-left:180px;">
            <img src="image/logo/bundesliga.jpg" alt="">
        </div>
        <div style="margin-top:-270px;margin-left:600px;">
            <img src="image/logo/bundesliga.jpg" alt="">
        </div>
        </div>
        <!--League Team Fixtures Link-->
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="bundesliga.php" target="_blank" style="font-size: 25px; font-family: 'Anton', sans-serif;">Find the Bundesliga League Fixtures</a>
            </div>
        </div>
        <!--->
         <!--Serie A-->
        <div class="row">
            <div class="col-md-12 text-center">
                <p style="font-family: 'Bree Serif', serif; font-size: 50px;">
                   <img src="image/Sm_logos/seriea.jpg" alt="">
                   Serie A
                </p>
            </div>
        </div>
        <!--Row Left and Right Sides-->
        <div class="row" style="">
          <div class="col-md-12  text-center" style="font-family: 'Bree Serif', serif; font-size: 20px;">
                <?php
                  $query = "SELECT * FROM  serieatable LIMIT 3";
                
                  $result = mysqli_query($con, $query);
                  while ($data = mysqli_fetch_assoc($result)){
                            echo $data['HomeTeam'];
                            echo "<br>"; 
                            echo "<strong>VS</strong>";
                            echo "<br>";
                            echo $data['AwayTeam'];
                            echo "<br>";
                            echo $data['Time'];
                            echo "<br>";
                            echo $data['Stadium'];
                            echo "<br>";
                  }
                ?>
        </div>
        <div style="margin-top:-300px;margin-left:180px;">
            <img src="image/logo/seriea.jpg" alt="">
        </div>
        <div style="margin-top:-300px;margin-left:600px;">
            <img src="image/logo/seriea.jpg" alt="">
        </div>
        </div>
        <!--League Team Fixtures Link-->
        <div class="row">
            <div class="col-md-12 text-center">
                <a href="seriea.php" target="_blank" style="font-size: 25px; font-family: 'Anton', sans-serif;">Find the SerieA League Fixtures</a>
            </div>
        </div>
    </div>
    <!--News-->
    <div class="news" id="newsNav">
       <div class="row">
           <div class="col-md-12 text-center">
                <p style="font-family: 'Bree Serif', serif; font-size: 50px;">Football News</p>
            </div>
            <br>
            <!--1st row-->
            <div class="col-md-4">
                <div class="card">
                  <img class="card-img-top" src="image/faces/ballon.jpg" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Ballon D'or Nominees</h4>
                    <div id="anyId">
                        FIFA has given 30 man list for the nomiees of the Ballon D'or.Selected Footballers are:Aguero,Alison,Bale,Benzema,De Bruyne,Cavani,Courtious,Firmino,Godin,Griezman,Hazard,Isco,Kane,Kante,Lloris,Mandzukic,Mane,Marcelo,Mbappe,Messi,Modric,Neymar,Oblak,Pogba,Ronaldo,Rakitic,Ramos,Salah,Suarez,Varane.
                    </div>
                  </div>
                </div>
            </div>
            <br>
            <!--2nd row-->
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="image/faces/messi.jpg" alt="">
                    <div class="card-body">
                    <h4 class="card-title">Barcelona are favourite for Messi</h4>
                    <div id="anyId">
                        It’s going to be hard to identify the best team in this season’s Champions League for a few rounds yet, but we already know who the best player is going to be.Lionel Messi is playing like a man who has had enough of Real Madrid carting off the biggest club trophy in the world.He is the best and Barcelona has a chance beacuse of him.
                    </div>
                  </div>
                </div>
            </div>
            <br>
            <!--3rd row-->
            <div class="col-md-4">
                <div class="card">
                  <img class="card-img-top" src="image/faces/ronaldo.jpg" alt="">
                  <div class="card-body">
                    <h4 class="card-title">Cristiano Ronaldo Straight to field</h4>
                    <div id="anyId">
                        Ronaldo drew his second consecutive blank in Serie A on Saturday against Lazio, although he did pick up a rather fortuitous assist when he diverted the ball into Mario Mandzukic's path. The former Real Madrid star may not have found his scoring boots yet since moving from Real Madrid, as the wait continues for his first competitive goal. But ever the perfectionist. 
                    </div>
                  </div>
                </div>
            </div>
       </div>
    </div>
    <!--Footer-->
    <div class="footer">
        <div class="row">
            <div class="col-md-4">
                <p class="text-center" style="font-family: 'Bree Serif', serif; font-size: 25px; color:white; padding-left:40px;
                padding-top:50px;">
                Love the Hustle
                </p>
                <p class="text-center" style="font-family: 'Bree Serif', serif; font-size: 10px; color:white; padding-left:-35px;
                padding-top:5px;margin-top:-21px;">
                    2017 All rights served
                </p>
                <p class="text-center" style="font-family: 'Bree Serif', serif; font-size: 10px; color:white; padding-left:-35px;
                padding-top:5px;margin-top:-21px;">
                    All rights served
                </p>
            </div>
            <div class="col-md-8">
                <p class="text-center" style="font-family: 'Bree Serif', serif; font-size: 35px; color:white; 
                padding-left:25px;
                padding-top:35px;">
                We Collaborate with amnitious brands and
                <br>
                people; let's build something great together.
                <br>
                <span style="font-size:15px;padding-left:-80px;color:#696969;">
                    Follow us
                </span>
                <br>
                <span>
                   <a href="" style="color: white; padding-right:100px;">
                    <i class="fab fa-facebook"></i>
                   </a>
                </span>
                <span>
                   <a href="https://www.instagram.com/md.tahmidchowdhury/" target="_blank" style="color: white; padding-right:100px;">
                    <i class="fab fa-instagram"></i>
                   </a>
                </span>
                <span>
                    <a href="" style="color: white;">
                       <i class="fab fa-twitter-square"></i> 
                    </a>
                </span> 
                </p>
                <br>
            </div>
        </div>
    </div>
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <!--External Javascript-->
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