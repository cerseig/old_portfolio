<?php
    $db_user = 'root';
    $db_password = 'root';
    $db_host = 'localhost';
    $db_name = 'portfolio_responsive';

    $db = mysqli_connect($db_host,$db_user,$db_password,$db_name) or die('Erreur de connexion');
    mysqli_query($db,"SET NAMES UTF8");
 ?>
