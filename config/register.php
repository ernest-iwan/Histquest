<?php
session_start();
require('../class/user.php');
if($_POST['pasword'] === $_POST['pasword2']){
    $user = new User($_POST['email'] ?? null,$_POST['password'] ?? null);
    if($user -> dataValidation() === true)
    {
        $user -> addUser();
        header('Location:../register.php?error=Potwierdź adres email w wysłanej wiadomości');
    }
    else{
        header('Location:../register.php?error='.$user->dataValidation());
    }
}
else{
    header('Location:../register.php?error=Hasła nie zgadzają się');
}
