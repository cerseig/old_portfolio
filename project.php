<?php require 'header.php' ?>

<main id="project" class="project" role="main">
    <?php include 'navigation.php' ?>
    <section class="project_page">


        <?php
        $errors = [];
        $id = $_GET['id'];
        $request = "SELECT * FROM projects WHERE id = $id";
        try {
            $query = $db->prepare($request);
            $query->execute();
            $projects = $query->fetchAll(PDO::FETCH_OBJ);
        } catch(PDOException $e) {
            $errors['badquery'] = "Requête SQL incorrect : ".$e->getMessage();
            $_SESSION['errors'] = $errors;
            header('Location:projects.php');
        }

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

            echo '
                    <div class="project">
                            <img src="assets/img/'.$project->thumbnails.'" alt="Photo pour illustrer">';
                            foreach ($categories as $category) {
                                echo $category->name;
                            }
                            echo '
                            <h3>'.$project->title.'</h3>
                            <p>'.$project->description.'</p>
                            <ul>';
                                foreach ($skills as $skill) {
                                    echo '<li>'.$skill->name.'</li>';
                                }
                            echo '
                            <a href="'.$project->url.'" alt="Redirection vers le projet en question">Voir le projet</a>
                            </ul>
                    </div>

                ';
            }
        ?>

    </section>
</main>

<?php require 'footer.php' ?>
