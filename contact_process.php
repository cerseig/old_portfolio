<?php

  $to       = "circegrand@gmail.com";
  $subject  = "[Nouveau Portfolio] ".$_POST['subject'];
  $message  = $_POST['firstname']." ".$_POST['lastname']."\r\n".
              $_POST['mail']."\r\n".
              $_POST['message']."\r\n";
  $headers  = 'From: '.$_POST['mail']."\r\n".
              'Reply-To: '.$_POST['mail']."\r\n".
              'X-Mailer: PHP/'.phpversion();
  $errors   = [];

  if(!array_key_exists('lastname', $_POST) || empty($_POST['lastname'])) {
    $errors['nom'] = "Le champ 'Nom' est incorrect.";
  }
  if(!array_key_exists('firstname', $_POST) || empty($_POST['firstname'])) {
    $errors['prenom'] = "Le champ 'Prénom' est incorrect.";
  }
  if(!array_key_exists('mail', $_POST) || empty($_POST['mail']) || !filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
    $errors['email'] = "Le champ 'Email' est incorrect.";
  }
  if(!array_key_exists('subject', $_POST) || empty($_POST['subject'])) {
    $errors['sujet'] = "Le champ 'Sujet' est incorrect.";
  }
  if(!array_key_exists('message', $_POST) || empty($_POST['message'])) {
    $errors['message'] = "Votre message est incorrect.";
  }
  if(!empty($_POST['valid']) || $_POST['valid'] != '') {
    $errors['valid'] = "Votre message n'a pas pu s'envoyer.";
  }

  if(empty($errors)) {
    mail($to,$subject,$message,$headers);
    header('Location: index.php');
  } else {
    $_SESSION['errors'] = $errors;
    $_SESSION['inputs'] = $_POST;
    header('Location: index.php');
  }
