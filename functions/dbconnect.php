<?php
    $db_user = 'root';
    $db_password = 'root';
    $db_name = 'portfolio_responsive';
    $db_host = 'localhost';
    $errors = [];
    // Essai de connexion à la base de données
    try {
        // Enregistrement de la connexion à la base dans la variable db.
        $db = new PDO('mysql:host='.$db_host.';dbname='.$db_name, $db_user, $db_password, array(PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'));
    }
    // Si une erreur est détécté lors de la connexion, je la stocke dans ma session pour l'afficher plus tard.
    catch (PDOException $e) {
        $errors['bad_connexion'] = "Erreur de connexion à la base de données: " . $e->getMessage();
        $_SESSION['errors'] = $errors;
        header('Location:../index.php');
    }
 ?>
