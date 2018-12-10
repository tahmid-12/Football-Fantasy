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
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!--Google Fonts-->
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif|Notable" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Noto+Serif" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Anton" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Nunito+Sans" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Patua+One" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Acme" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Bree+Serif" rel="stylesheet">
    <!-- External CSS -->
    <link rel="stylesheet" href="style1.css">
    <title>Premier League Fixtures</title>
    <link rel="icon" href="image/Sm_logos/premier.jpg">
</head>
<body data-spy="scroll" data-target=".navbar">
    <div class="container-fluid" id="header_container">
        <div class="row">
            <div class="col-md-12">
                <h1 class="leagueLogo">Premier League</h1>
            </div>
        </div>
        <br>
        <!--Nav bar-->
        <div class="row">
            <div class="col-md-12">
                <ul class="nav nav-tabs nav-fill">
                    <li>
                        <a class="nav-link active" data-toggle="tab" href="#matches" role="tab">Matches</a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#standings" role="tab">Standings</a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#stats" role="tab">Stats</a>
                    </li>
                    <li>
                        <a class="nav-link" data-toggle="tab" href="#players" role="tab">Players</a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!--Tab Content-->
    <div class="tab-content">
    <!--Match Fixtures-->
    <div class="tab-pane fade show active match" id="matches" role="tabpanel">
           <!--1-->
            <table class="table table-bordered table-hover">
                <thead>
                    <tr>
                        <th class="table-hover" colspan="2" style="color: rgb(176,48,96); font-size: 30px;">Matches</th>
                    </tr>
                </thead>
                <tbody>
                <?php
                  $query = "SELECT * FROM  premiertable";
                
                  $result = mysqli_query($con, $query);
                  while ($data = mysqli_fetch_assoc($result)){
                      
                  
                ?>
                    <tr>
                        <td class="td_height text-center" style="font-family: 'Nunito Sans', sans-serif; font-size: 20px; color: rgb(176,48,96); font-weight: bold;">
                            <?php echo $data['HomeTeam'] ; ?>
                            <br> 
                            <strong>VS</strong>
                            <br>
                            <?php echo $data['AwayTeam']; ?>
                             <br>
                             <?php echo $data['Time'] ; ?>
                             <br>
                             <?php echo $data['Stadium'] ; ?> 
                        </td>
                    </tr>
                <?php
                  }  
                ?>
                </tbody>
            </table>
    </div>
    <!--Standings-->
    <div class="tab-pane fade show standing" id="standings" role="tabpanel">
        <!--Table-->
        <table class="table table-bordered table-hover">
            <thead>
               <tr>
                   <th class="td_font" style="width: 650px;">Club</th>
                   <th class="td_font text-center">Played</th>
                   <th class="td_font text-center">Won</th>
                   <th class="td_font text-center">Drawn</th>
                   <th class="td_font text-center">Lost</th>
                   <th class="td_font text-center">GF</th>
                   <th class="td_font text-center">GA</th>
                   <th class="td_font text-center">GD</th>
                   <th class="td_font text-center">Points</th>
               </tr> 
            </thead>
            <tbody>
            <?php
                  $query = "SELECT * FROM  premierstandings ORDER BY Pts DESC";
                
                  $result = mysqli_query($con, $query);
                  while ($data = mysqli_fetch_assoc($result)){
                      
                  
                ?>
                <tr style="font-family: 'Nunito Sans', sans-serif; color:#FF1493; font-size: 20px; font-weight: bold;">
                    <td>
                        <?php echo $data['Club'] ; ?>
                    </td>
                    <td>
                        <?php echo $data['MP'] ; ?>
                    </td>
                    <td>
                        <?php echo $data['W'] ; ?>
                    </td>
                    <td>
                        <?php echo $data['D'] ; ?>
                    </td>
                    <td>
                        <?php echo $data['L'] ; ?>
                    </td>
                    <td>
                        <?php echo $data['GF'] ; ?>
                    </td>
                    <td>
                        <?php echo $data['GA'] ; ?>
                    </td>
                    <td>
                        <?php echo $data['GD'] ; ?>
                    </td>
                    <td>
                        <?php echo $data['Pts'] ; ?>
                    </td>
                </tr>
                <?php
                  }
                ?>
            </tbody>
        </table>
        <h5 style="padding-left:15px; font-size: 30px; color:green;">*The Top 4 teams will play in the UEFA Champions League</h5>
        <h5 style="padding-left:15px; font-size: 30px; color:red;">*The Last 3 teams will be sent to Second Divison Football league</h5>
    </div>
    <!--Stats-->
    <div class="tab-pane fade show statistics" id="stats" role="tabpanel">
        <!--Table-->
        <h5 style="padding-left:25px;padding-top:15px;">Goals</h5>
        <table class="table table-bordered  table-hover">
            <thead>
                <tr>
                    <th style="width:80%;">Player</th>
                    .
                    <th class="text-center">Goals</th>
                </tr>
            </thead>
            <tbody>
            <?php
                  $query = "SELECT * FROM  premiergoals";
                
                  $result = mysqli_query($con, $query);
                  while ($data = mysqli_fetch_assoc($result)){
                      
                  
            ?>
                <tr style="font-family: 'Nunito Sans', sans-serif;">
                    <td>
                       <?php echo $data['ID'] ; ?>
                       .
                        <?php echo $data['Name'] ; ?>
                    </td>
                    <td>
                        <?php echo $data['Goals'] ; ?>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        <h5 style="padding-left:25px;padding-top:15px;">Assists</h5>
        <table class="table table-bordered  table-hover">
            <thead>
                <tr>
                    <th style="width:80%;">Player</th>
                    <th class="text-center">Assists</th>
                </tr>
            </thead>
            <tbody>
            <?php
                  $query = "SELECT * FROM  premierassists";
                
                  $result = mysqli_query($con, $query);
                  while ($data = mysqli_fetch_assoc($result)){
                      
                  
            ?>
                <tr style="font-family: 'Nunito Sans', sans-serif;">
                    <td>
                       <?php echo $data['ID'] ; ?>
                       .
                        <?php echo $data['Name'] ; ?>
                    </td>
                    <td>
                        <?php echo $data['Assists'] ; ?>
                    </td>
                </tr>
            <?php
            }
            ?>
            </tbody>
        </table>
        <h5 style="padding-left:25px;padding-top:15px;">Yellow Cards</h5>
        <table class="table table-bordered  table-hover">
            <thead>
                <tr>
                    <th style="width:80%;">Player</th>
                    <th class="text-center">Yellow Cards</th>
                </tr>
            </thead>
            <tbody>
            <?php
                  $query = "SELECT * FROM  premieryellow";
                
                  $result = mysqli_query($con, $query);
                  while ($data = mysqli_fetch_assoc($result)){
                      
                  
            ?>
                <tr style="font-family: 'Nunito Sans', sans-serif;">
                    <td>
                        <?php echo $data['ID'] ; ?>
                       .
                        <?php echo $data['Name'] ; ?>
                    </td>
                    <td>
                        <?php echo $data['Cards'] ; ?>
                    </td>
                </tr>
             <?php
            }
            ?>
            </tbody>
        </table>
        <h5 style="padding-left:25px;padding-top:15px;">Red Cards</h5>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="width:80%;">Player</th>
                    <th class="text-center">Red Cards</th>
                </tr>
            </thead>
            <tbody>
            <?php
                  $query = "SELECT * FROM  premierred";
                
                  $result = mysqli_query($con, $query);
                  while ($data = mysqli_fetch_assoc($result)){
                      
                  
            ?>
                <tr style="font-family: 'Nunito Sans', sans-serif;">
                    <td>
                         <?php echo $data['ID'] ; ?>
                       .
                        <?php echo $data['Name'] ; ?>
                    </td>
                    <td>
                         <?php echo $data['Cards'] ; ?>
                    </td>
                </tr>
             <?php
            }
            ?>
            </tbody>
        </table>
    </div>
    <!--Player-->
    <div class="tab-pane fade show player" id="players" role="tabpanel">
        <h5 class="text-center">Players</h5>
        <br>
        <table class="table table-bordered table-hover">
            <thead>
                <tr>
                    <th style="width:60%;">Player</th>
                    <th style="width:20%;" class="text-center">Position</th>
                    <th style="width:20%;" class="text-center">Team</th>
                </tr>
            </thead>
            <tbody>
            <?php
                  $query = "SELECT * FROM  premierplayers";
                
                  $result = mysqli_query($con, $query);
                  while ($data = mysqli_fetch_assoc($result)){
                      
                  
            ?>
                <tr style="font-family: 'Patua One', cursive;">
                    <td>
                       <?php echo $data['Name'] ; ?>
                    </td>
                    <td><?php echo $data['Position'] ; ?></td>
                    <td><?php echo $data['Team'] ; ?></td>
                </tr>
             <?php
            }
            ?>
            </tbody>
        </table>
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