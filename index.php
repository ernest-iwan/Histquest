<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/74557bc5d4.js" crossorigin="anonymous"></script>
</head>

<body class="body_index">
    <nav>
        <div class="logo"></div>
        <div class="nav-buttons">
            <a href="" class="active">
                Główna
            </a>
            <a href="">
                O nas
            </a>
            <a href="">
                Kontakt
            </a>
            <?php
            session_start();
            if (isset($_SESSION['userID'])) :
            ?>
                <a href="./config/logout.php">
                    Wyloguj
                </a>
            <?php endif; ?>
            <?php
            if (!isset($_SESSION['userID'])) :
            ?>
                <a href="./login.php">
                    Zaloguj
                </a>
            <?php endif; ?>
        </div>
    </nav>
    <div class="burger">
        <i class="fa-solid fa-bars"></i>
    </div>
    <div class="gradient"></div>
    <div class="banerL">

    </div>
    <div class="banerR">
    </div>
    <div class="content">
        <img src="./pictures/HISTQUEST.png" alt="">
        <p class="indexP">
            Innowacyjna, wieloplatformowa platforma edukacyjna pomagająca uczniom i nauczycielom w nauce historii. Nauka historii nie musi być nudna. Spróbuj już dziś. Odkryj historię na nowo z HistQuest - Twoim niezawodnym przewodnikiem w podróży w czasie!
        </p>
        <div class="button">
            <?php
            if (isset($_SESSION['userID'])) :
            ?>
                <a href="./quiz.php">GRAJ</a>
                </a>
            <?php endif; ?>
            <?php
            if (!isset($_SESSION['userID'])) :
            ?>
                <a href="./login.php">
                    GRAJ
                </a>
            <?php endif; ?>
        </div>
    </div>
</body>

</html>