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
            </div>
            <div class="grid">
                <?php
                    foreach ($projects as $project) {
                        // Puis j'affiche mon projet
                        echo '
                                <a href="project.php?id='.$project->id.'" alt="Redirection vers la description du projet sélectionné">
                                    <div class="project">
                                        <img src="assets/img/'.$project->img.'" alt="Photo pour illustrer">
                                        <h2>'.$project->date.'</h2>';
                                        // foreach ($categories as $category) {
                                        //     echo $category->name;
                                        // }
                                        echo '
                                        <h3>'.$project->title.'</h3>
                                        <p>'.$project->resume.'</p>
                                        <ul>';
                                            // foreach ($skills as $skill) {
                                            //     echo '<li>'.$skill->name.'</li>';
                                            // }
                                        echo '
                                        </ul>
                                    </div>
                                </a>

                        ';
                    }
                ?>
            </div>
        </div>
    </section>
<?php require 'footer.php' ?>
