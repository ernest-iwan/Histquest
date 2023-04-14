<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../PHPMailer/src/Exception.php';
require '../PHPMailer/src/PHPMailer.php';
require '../PHPMailer/src/SMTP.php';

class User
{
    private ?string $password;
    private ?string $email;
    private int $id;
    private bool $isLogged = false;
    private object $db;

    public function __construct($email, $password)
    {
        $this->password = (preg_match('/^(?=.*\d)(?=.*[A-Za-z])[0-9A-Za-z!@#$%]{8,50}$/', $password)) ? $password : null;
        $this->email = (filter_var($email, FILTER_VALIDATE_EMAIL)) ? $email : null;
        $this->db = new PDO('mysql:localhost;dbname=histhack', 'root', '');
    }

    public function dataValidation()
    {
        if ($this->email === null) {
            return 'Niepoprawny email';
        } else if ($this->password === null) {
            return 'Niepoprawne hasło (Powinno zawierać: 1 liczbę, 1 literę, i mieć minimum 8 znaków)';
        } else {
            return true;
        }
    }

    public function addUser()
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM histhack.users WHERE email = '{$this->email}'");
            $stmt->execute();
        } catch (Exception $exc) {
            exit('Error: ' . $exc->getMessage());
        }
        if ($stmt->fetchAll()) {
            return "Istnieje już użytkownik o podanym emailu";
        } else {
            $dateTime = new DateTime();
            $dateTime->modify('+ 15 minutes');
            $exp_date = $dateTime->format('Y-m-d H:i:s');
            try {
                $password = password_hash($this->password, PASSWORD_DEFAULT);
                $token = bin2hex(random_bytes(32));
                $stmt = $this->db->prepare("INSERT INTO histhack.users VALUE(NULL,'{$this->email}','{$password}',0,'{$token}','{$exp_date}')");
                $stmt->execute();
            } catch (Exception $exc) {
                exit('Error: ' . $exc->getMessage());
            }

            $mail  = new PHPMailer(true);
            $mail->isSMTP();
            $mail->Host = 'mail.zsi.kielce.pl';
            $mail->Username = 'histquest';
            $mail->Password = 'bnt_ipn_2023';
            $mail->Port = 25;

            $mail->setFrom('histquest@histquest.zsi.kielce.pl');
            $mail->addAddress($this->email);
            $mail->isHTML(true);

            $mail->Subject = "Aktywuj swoje konto";
            $mail->Body = "https://histquest.zsi.kielce.pl/config/activation.php?token=" . $token . "&email=" . $this->email;

            $mail->send();
        }
    }

    public function chekUser()
    {
        try {
            $stmt = $this->db->prepare("SELECT * FROM histhack.users WHERE email = '{$this->email}'");
            $stmt->execute();
        } catch (Exception $exc) {
            exit('Error: ' . $exc->getMessage());
        }
        $data = $stmt->fetchAll();

        if ($data) {
            foreach ($data as $d) {
                $this->id = $d['id'];
                $passwordToCheck = $d['password'];
                $isActive = $d['is_active'];

                if ($isActive) {
                    if (password_verify($this->password, $passwordToCheck)) {
                        $this->isLogged = true;
                        return true;
                    } else {
                        return 'Błędne dane logowania';
                    }
                } else {
                    return 'Konto nie jest aktywne';
                }
            }
        } else {
            return 'Nie istnieje użytkownik z wprowadzonymi danymi';
        }
    }

    public function isLogged()
    {
        return $this->isLogged;
    }

    public function getID()
    {
        return $this->id;
    }
}
