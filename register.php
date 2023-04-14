<?php
$error = $_GET['error'] ?? null;
?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Zaloguj się</title>
    <link rel="stylesheet" href="./css/style.css">
    <script src="https://kit.fontawesome.com/74557bc5d4.js" crossorigin="anonymous"></script>
</head>

<body class="body_login">
    <div class="login_foto">
        <img src="./pictures/login_img.jpg" alt="Józef Piłsudski">
    </div>
    <div class="login_form">
        <div class="background">
            <div class="s1"></div>
            <div class="s2"></div>
            <div class="s1"></div>
            <div class="s2"></div>
            <div class="s1"></div>
            <div class="s2"></div>
            <div class="s1"></div>
            <div class="s2"></div>
        </div>
        <div class="login_wrapper">
            <h1>Rejestracja</h1>
            <div class="login_with2">
                <i class="fa-brands fa-facebook"></i></i>Kontynuj przez facebooka
            </div>
            <div class="login_with1">
                <i class="fa-brands fa-google"></i>Kontynuj przez google
            </div>
            <div class="login_input">
                <form action="./config/register.php" method="post">
                    <div class="div_input">
                        <i class="fa-solid fa-envelope fa-bounce"></i>
                        <input type="email" name="email" id="email" placeholder="Podaj swój email">
                    </div>
                    <div class="div_input">
                        <i class="fa-solid fa-lock fa-bounce"></i>
                        <input type="password" name="password" id="password" placeholder="Podaj swoje hasło">
                    </div>
                    <div class="div_input">
                        <i class="fa-solid fa-lock fa-bounce"></i>
                        <input type="password" name="password2" id="password" placeholder="Powtórz swoje hasło">
                    </div>
                    <p class="error"><?= $error ?? null ?></p>
                    <button type="submit">Zarejestruj się</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>