<?php
require_once('./db.php');
$email = $_GET['email'];
$token = $_GET['token'];

$db = new PDO('mysql:localhost;dbname=histhack', 'root', '');
try {
    $stmt = $db->prepare("SELECT token, exp_date FROM users WHERE email = '{$email}'");
    $stmt->execute();
} catch (Exception $exc) {
    exit('Error: ' . $exc->getMessage());
}

foreach ($stmt->fetchAll() as $d) {
    $tokenToCompare = $d['token'];
    $date = $d['exp_date'];
}
$dateTime = new DateTime();
$date_now = $dateTime->format('Y-m-d H:i:s');

if ($date_now < $date) {
    if ($token === $tokenToCompare) {
        try {
            $stmt = $db->prepare("UPDATE users SET is_active=1 WHERE email = '{$email}'");
            $stmt->execute();
        } catch (Exception $exc) {
            exit('Error: ' . $exc->getMessage());
        }
        header('Location:../index.php');
    } else {
        header('Location:../register.php?error=Błędny token');
    }
} else {
    header('Location:../register.php?error=Kod wygasł');
}
