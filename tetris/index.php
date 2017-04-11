<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>STC: Simple Tetris Clone</title>
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
<canvas></canvas>

<script src="js/class.js"></script>
<script src="js/engine.js"></script>
<script src="js/require.js" data-main="js/src/main.js"></script>
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
<?php include "../includes/footer.html"; ?>
</body>
</html>