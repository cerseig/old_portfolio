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
            <h1>Réalisations</h1>
            <div class="line"></div>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
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
