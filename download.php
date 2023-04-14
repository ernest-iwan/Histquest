<?php
session_start();
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>Uzyskałeś <?=$_SESSION['points']*10?>% <br>
    Sugerowany poziom: 
    <?php
    if($_SESSION['points']<=4)
    echo "Łatwy";
    else if($_SESSION['points']<=7)
    echo "Średni";
    else if($_SESSION['points']<=10)
    echo "Trudny";
    ?>
</h1>
</body>

</html>