<?php require 'header.php' ?>

<main id="home" class="home" role="main">

<?php include 'navigation.php' ?>

<!-- SECTION PAGE D'ARRIVÉE -->
    <section class="landing">
        <div class="container">
            <div class="particles" id="particles-js"></div>
                <div class="block_noir">
                    <div class="content">
                        <div class="triangles">
                            <img src="assets/img/triangle.png" alt="">
                            <img src="assets/img/triangle-contour.png" alt="">
                        </div>
                        <div class="title">
                            <h1 class="name">Circé Grand</h1>
                            <h2 class="role">Creative Developer</2>
                        </div>
                        <hr>
                        <p class="resume">Bonjour et bienvenue sur mon portfolio ! Je suis une étudiante en 2ème année de DUT MMI (Métiers du Multimédia et de l'Internet). Je suis une développeuse créative et je suis à la recherche d'un stage en tant qu'intégrateur ou développeur pour une durée de 3 mois, à Paris ou dans les alentours.</p>
                    </div>
            </div>
        </div>
    </section>

<!-- SECTION A PROPOS -->
    <section class="about">
        <div class="container">
            <div class="content">
                <img src="assets/img/test-brush.png" alt="Photo de la section A Propos">
                <div class="text">
                    <h3>A dynamic french <br>web developer</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum. </p>
                    <a href="about.php" alt="Etre redirigé sur la page A Propos">En savoir plus</a>
                </div>
            </div>
        </div>
    </section>

<!-- SECTION PROJETS -->
    <section class="projects">
        <div class="container">
            <div class="top">
                <a href="projects.php" alt="Redirection vers la page présentant les projets" class="hvr-underline-from-center">
                    <h3>Mes réalisations<br></h3>
                </a>
            </div>
            <div class="content">
                <div class="important-project">
                    <a href="projects.php" alt="Redirection vers la page des projets">
                    <img src="assets/img/projettut1.png" alt="Projeut Tuteuré de première année">
                        <div class="presentation">
                            <h4>Projeut Tuteuré n°1</h4>
                            <p class="hvr-underline-from-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </a>
                </div>
                <div class="important-project">
                    <a href="projects.php" alt="Redirection vers la page des projets">
                        <div class="presentation">
                            <h4>Portfolio V.Bootstrap</h4>
                            <p class="hvr-underline-from-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                        <img src="assets/img/portfoliov1.png" alt="Portfolio, version n°1, version Bootstrap">
                    </a>
                </div>
                <div class="important-project">
                    <a href="projects.php" alt="Redirection vers la page des projets">
                        <img src="assets/img/aimemi.png" alt="Blog de 2ème année">
                        <div class="presentation">
                            <h4>Blog AIME.MI</h4>
                            <p class="hvr-underline-from-center">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt. Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt.</p>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

<!-- SECTION CONTACT -->
    <section class="contact">
        <div class="container">
            <div class="text">
                <h3>Besoin de me contacter ?<br><small>C'est avec plaisir que je vous répondrai</small></h3>
                <a href="contact.php" alt="Etre redirigé sur la page Contact" class="contact-link">M'écrire</a>
            </div>
            <div class="social-network">
                <ul>
                    <li><a href="https://twitter.com/circegrand_pro" alt="Redirection vers Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="https://fr.linkedin.com/in/circegrand" alt="Redirection vers Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="http://www.viadeo.com/p/002r2kearrmvi16" alt="Redirection vers Viadeo"><i class="fa fa-viadeo"></i></a></li>
                    <li><a href="https://github.com/cerseig" alt="Redirection vers Github"><i class="fa fa-github"></i></a></li>
                    <li><a href="https://www.youtube.com/channel/UCvx4lsTwaR_r_F_Z63BQYRA" alt="Redirection vers Youtube"><i class="fa fa-youtube"></i></a></li>
                    <li><a href="https://www.flickr.com/photos/circe_g/" alt="Redirection vers Flickr"><i class="fa fa-picture-o"></i></a></li>
                </ul>
                <hr>
            </div>
        </div>
    </section>

<?php require 'footer.php' ?>
