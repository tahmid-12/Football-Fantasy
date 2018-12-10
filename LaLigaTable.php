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
    <title>La Liga Table</title>
    <link rel="icon" href="image/Sm_logos/laliga.jpg">
</head>
<body style="background-image: url(image/grass.jpg);">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="box1">
                  <form action="LaLigaTableConnect.php" method="post">
                   <!--
                    <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">Home Team  Logo<span style="margin-left:45px;">:</span></label>
                    <input type="file" multiple="false" accept="image/*" id="finput" style="margin-left:30px;margin-top:50px;" onchange="readURL(this);">
                    <img id="blah" src="#" alt="your image">
                    -->
                    <br>
                    <label class="fonts" style="margin-left:120px;margin-top:50px;" for="t_height">Home Team <span style="margin-left:80px;">:</span></label>
                    <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="home_team">
                    <img src="image/Sm_logos/laliga.jpg" style="margin-left:300px;" alt="">
                    <br>
                    <!--
                    <label class="fonts" style="margin-left:120px;margin-top:40px;" for="t_height">Away Team Logo<span style="margin-left:47px;">:</span></label>
                    <input type="file" multiple="false" accept="image/*" id="finput" style="margin-left:30px;margin-top:40px;" onchange="readAwayURL(this);">
                    <img id="blah1" src="#" alt="your image">
                    -->
                    <br>
                    <label class="fonts" style="margin-left:120px;margin-top:30px;" for="t_height">Away Team <span style="margin-left:80px;">:</span></label>
                    <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="away_team">
                    <br>
                    <label class="fonts" style="margin-left:120px;margin-top:40px;" for="t_height">Stadium <span style="margin-left:105px;">:</span></label>
                    <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_stadium">
                     <br>
                     <label class="fonts" style="margin-left:120px;margin-top:40px;" for="t_height">Time <span style="margin-left:125px;">:</span></label>
                     <input type="text" id="t_heights" style="margin-left:30px" width="50px;" name="_time">
                     <br>
                     <input class="btn btn-primary" type="submit" value="Submit" style="margin-left:450px;margin-top:30px;width:200px;height:60px;">
                     </form>
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