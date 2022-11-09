<?php
require_once('database.php');

// var_dump($_POST);

if (isset($_POST['registrati'])) {
    $nome = $_POST['nome'] ?? '';
    $cognome = $_POST['cognome'] ?? '';
    $email = $_POST['email'] ?? '';
    $password = $_POST['password'] ?? '';
    
    $pwdLenght = mb_strlen($password);
    
    if (empty($nome) || empty($cognome) || empty($email) || empty($password)) {
        $msg = 'Compila tutti i campi %s';
    } 
    elseif ($pwdLenght < 8 || $pwdLenght > 20) {
        $msg = 'Lunghezza minima password 8 caratteri.
                Lunghezza massima 20 caratteri';
    } else {
        $password_hash = password_hash($password, PASSWORD_BCRYPT);

        $query = "SELECT id FROM utenti WHERE email = '" . $email . "'";

        echo "QUERY:".$query;
        
        $check = $pdo->prepare($query);
        $check->execute();
        
        $user = $check->fetchAll(PDO::FETCH_ASSOC);
        
        if (count($user) > 0) {
            $msg = 'email già in uso ';

        } else {
            $query = "INSERT INTO `utenti`(`id`, `nome`, `cognome`, `email`, `password`) VALUES (0, '" . $nome . "', '" . $cognome . "', '" . $email . "', '" . $password_hash ."')";
            $check = $pdo->prepare($query);
            $check->execute();
            
            if ($check->rowCount() > 0) {
                printf($msg = 'Registrazione eseguita con successo');
            } else {
                printf($msg = 'Problemi con l\'inserimento dei dati <a href="registrati.html">torna indietro</a>');
            }
        }
    }
    
    // printf($msg, '<a href="registrati.html">torna indietro</a>');
}