<?php require 'header.php' ?>

<main id="contact" class="contact" role="main">
    <?php include 'navigation.php' ?>
    <section class="contact_page">
        <div class="column column-1"></div>
        <div class="column column-2">
            <form class="contact-form" action="contact_process.php" method="post">
                <input type="text" name="lastname" value="" placeholder="Nom" require>
                <br><input type="text" name="firstname" value="" placeholder="Prénom">
                <br><input type="mail" name="mail" value="" placeholder="Mail" require>
                <br><input type="text" name="subject" value="" placeholder="Sujet" require>
                <br><textarea name="message" placeholder="Votre message"></textarea>
                <br><input type="submit" value="Envoyer">
            </form>
        </div>
    </section>
</main>

<?php require 'footer.php' ?>
