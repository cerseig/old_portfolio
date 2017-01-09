<?php require 'header.php' ?>

<main id="project" class="project" role="main">
    <?php include 'navigation.php' ?>
    <section class="project_page">
        <div class="container">
            <div class="column column-1">
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
                    echo '<img src="assets/img/'.$project->thumbnails.'" alt="">';
                    }
                ?>
            </div>

            <div class="column column-2">
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
                                    <h1>';
                                    foreach ($categories as $category) {
                                        echo $category->name;
                                    }
                                    echo '</h1>
                                    <h2>'.$project->title.'</h2>
                                    <p>'.$project->description.'</p>
                                    <ul>';
                                        foreach ($skills as $skill) {
                                            echo '<li><img src="assets/img/'.$skill->name.'"</li>';
                                        }
                                    echo '
                                    </ul>
                                <a href="'.$project->url.'" alt="Redirection vers le projet en question"><div class="link-project">Voir le projet</div></a>
                            </div>

                        ';
                    }
                ?>
            </div>
        </div>
    </section>
<?php require 'footer.php' ?>
