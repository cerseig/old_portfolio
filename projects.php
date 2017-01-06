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
            <ul class="grid effect-3" id="grid">
        <?php
            foreach ($projects as $project) {
                // Récupère les skills associés au projet.
                $request = "SELECT * FROM skills s INNER JOIN projects_skills ps ON ps.skill_id = s.id WHERE ps.project_id = ".$project->id;
                try {
                    $query = $db->prepare($request);
                    $query->execute();
                    $skills = $query->fetchAll(PDO::FETCH_OBJ);
                } catch(PDOException $e) {
                    $errors['badquery'] = "Requête SQL incorrect : ".$e->getMessage();
                    $_SESSION['errors'] = $errors;
                }
                // Récupère les categories associés au projet.
                $request = "SELECT * FROM categories c INNER JOIN projects_categories pc ON pc.category_id = c.id WHERE pc.project_id = ".$project->id;
                try {
                    $query = $db->prepare($request);
                    $query->execute();
                    $categories = $query->fetchAll(PDO::FETCH_OBJ);
                } catch(PDOException $e) {
                    $errors['badquery'] = "Requête SQL incorrect : ".$e->getMessage();
                    $_SESSION['errors'] = $errors;
                }
                // Puis j'affiche mon projet
                echo '

                        <li>
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
                                foreach ($skills as $skill) {
                                    echo '<li>'.$skill->name.'</li>';
                                }
                            echo '
                            </ul>
                                </div>
                        <li>

                ';
            }
        ?>
            </ul>
        </div>
    </section>
</main>

<?php require 'footer.php' ?>
