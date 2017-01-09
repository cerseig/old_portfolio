<?php

require 'header.php';

$errors = [];
$request = "SELECT * FROM projects";
try {
    $query = $db->prepare($request);
    $query->execute();
    $projects = $query->fetchAll(PDO::FETCH_OBJ);
} catch(PDOException $e) {
    $errors['badquery'] = "Requête SQL incorrect : ".$e->getMessage();
    $_SESSION['errors'] = $errors;
    header('Location:projects.php');
}

?>

<main id="projects" class="projects" role="main">
    <?php include 'navigation.php' ?>
    <section class="projects_page">
        <div class="container">
            <div class="top">
                <h1>Réalisations</h1>
                <img src="assets/img/essai.png" alt="">
            </div>
            <div class="grid">
                <?php
                    foreach ($projects as $project) {
                        // Puis j'affiche mon projet
                        echo '
                                <a href="project.php?id='.$project->id.'" alt="Redirection vers la description du projet sélectionné">
                                    <div class="project">
                                        <figure class="snip1084 dark">
                                            <img src="assets/img/'.$project->img.'" alt="Photo pour illustrer">
                                            <figcaption>
                                                <div class="text">
                                                    <p><span>'.$project->title.'</span><br>'.$project->resume.'</p>
                                                </div>
                                            </figcaption>
                                        </figure>
                                    </div>
                                </a>

                        ';
                    }
                ?>
            </div>
        </div>
    </section>
<?php require 'footer.php' ?>
