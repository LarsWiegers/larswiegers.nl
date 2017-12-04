<!DOCTYPE html>
<html>
    <head>
        <title>Raspberry games</title>
        
        <!-- Stylesheets -->
        <link rel="stylesheet" href="styles/style.css">
        
        <!-- Bootstrap -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    <body>
        <!-- Header -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <div class="jumbotron text-middle">
                        <a href="./"><img src="img/logo.png"></a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content -->
        <div class="container">
            <div class="row">
                <div class="col-sm-12">
                    <!-- Slider -->
<!--                    --><?php //include "includes/script.html"; ?>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-12">
                    <h1>Check out our latest RaspGames!</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-xs-6">
                    <a href="snake/index.php">
                        <div id="game1" class="gameDiv">
                            <div class="title_game">
                                <p class="titleGame">Snake</p>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-sm-4 col-xs-6">
                    <a href="space_invaders/index.php">
                        <div id="game2" class="gameDiv">
                            <div class="title_game">
                                <p class="titleGame">Space Invaders</p>
                            </div>
                        </div>
                    </a>
                </div>
                
                <div class="col-sm-4 col-xs-6">
                    <a href="tetris/index.php">
                        <div id="game3" class="gameDiv">
                            <div class="title_game">
                                <p class="titleGame">Tetris</p>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <?php include "includes/footer.html"; ?>
        
    </body>
</html>