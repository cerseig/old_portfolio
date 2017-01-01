<?php require 'functions/init.php'  ?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Basic meta -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Title -->
        <title>Circé Grand | Portfolio</title>

        <!-- Mobile meta -->

        <!-- SEO Elements -->

        <!-- Stylesheets -->
        <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,700|Poiret+One|Montserrat:400,700" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
        <link rel="stylesheet" type="text/css" href="assets/css/normalize.css">
        <link rel="stylesheet" type="text/css" href="assets/css/global.css">

        <!-- Custom script -->
    </head>
    <body>
        <?php
            if(isset($_SESSION['errors'])) {
                $errors = $_SESSION['errors'];

                /* On affiche les erreurs */
                echo    '<div class="alert alert-danger alert-dismissible errors" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                            <ul>';
                                foreach ($errors as $key => $value) {
                                    echo '<li>'.$value.'</li>';
                                }
                echo '      </ul>
                        </div>';

                /* On les supprime de la session */
                unset($_SESSION['errors']);
            }
        ?>
