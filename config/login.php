<?php
session_start();
require('../class/user.php');
$user = new User($_POST['email'] ?? null,$_POST['password'] ?? null);
if($user->chekUser() === true){
    $_SESSION['userID'] = $user -> getID();
    header('Location:../index.php');
}
else{
    header('Location:../login.php?error='.$user->chekUser());
}
?>