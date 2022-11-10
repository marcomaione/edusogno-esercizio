<?php

require_once('database.php');

if (isset($_POST['login'])) {
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    if (empty($email) || empty($password)) {
        printf($msg = 'Inserisci username e password ');
    } else {
        $query = " SELECT email, password FROM utenti WHERE email = :email";
        
        $check = $pdo->prepare($query);
        $check->bindParam(':email', $email, PDO::PARAM_STR);
        $check->execute();
        
        $user = $check->fetch(PDO::FETCH_ASSOC);
        
        if (!$user || password_verify($password, $user['password']) === false) {
            printf($msg = 'Credenziali utente errate <a href="login.html">torna indietro</a>');
        } else {
            
            header("location:./personale.php");
        }
    }
}