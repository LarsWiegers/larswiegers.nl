<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Snake Game</title>
    <script
            src="https://code.jquery.com/jquery-3.2.0.min.js"
            integrity="sha256-JAW99MJVpJBGcbzEuXk4Az05s/XyDdBomFqNlM3ic+I="
            crossorigin="anonymous"></script>
    <script>
        var Data;
        var Button;
        var Rotary;
    </script>
    <script>
        $(document).ready(function(){

            setInterval(runFunction,50);
            function runFunction() {
                $.ajax(
                    {url: "api/api.php",
                        data: {},
                        method: 'post',
                        success: function(result) {
                            Data = result.split(",");
                            Button = parseInt(Data[0]);
                            Rotary = Data[1];
                            console.log(Data);
                            if(Button == 1) {
                                s.dir(1, 0);
                            }
                        }
                    });
            }
        });
    </script>
    <script src="libraries/p5.js" type="text/javascript"></script>
    <script src="libraries/p5.dom.js" type="text/javascript"></script>
    <script src="libraries/p5.sound.js" type="text/javascript"></script>

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../styles/style.css">

    <!-- Bootstrap -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style>
        canvas {
            background-color: #000;
            display: block;
            position: relative;
            margin: auto;
            top: 0;
            bottom: 0;
            left: 0;
            right: 0;
        }
    </style>
</head>
<body>
<?php include "../includes/header.html"; ?>
    <div id="snake">

    </div>
    <!-- snake game -->
    <script src="sketch.js" type="text/javascript"></script>
    <script src="snake.js" type="text/javascript"></script>
<?php include "../includes/footer.html"; ?>
<script>
    var Data;
    var Button;
    var Rotary;
</script>
<script>
    $(document).ready(function(){

        setInterval(runFunction,50);
        function runFunction() {
            $.ajax(
                {url: "../api/api.php",
                    data: {},
                    method: 'post',
                    success: function(result) {
                        Data = result.split(",");
                        Button = parseInt(Data[0]);
                        Rotary = Data[1];
                        console.log(Data);
                        if(Button == 1) {
                            s.dir(1, 0);
                        }
                    }
                });
        }
    });
</script>
</body>
</html>