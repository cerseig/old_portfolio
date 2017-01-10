<?php require 'header.php' ?>

<main id="contact" class="contact" role="main">
    <?php include 'navigation.php' ?>
    <section class="contact_page">
        <div class="column column-1"></div>
        <div class="column column-2">
            <form class="contact-form" action="_contact.php" method="post">
                <h1>Un message ?</h1>
                <input type="text" name="lastname" value="" placeholder="Nom" autocomplete="off" require>
                <br><input type="text" name="firstname" value="" placeholder="Prénom" autocomplete="off">
                <br><input type="mail" name="mail" value="" placeholder="Mail" autocomplete="off" require>
                <br><input type="text" name="subject" value="" placeholder="Sujet" autocomplete="off" require>
                <br><textarea name="message" placeholder="Votre message" autocomplete="off" ></textarea>
                <br><div class="beat"><input type="submit" name="valid" value="Envoyer"></div>
            </form>
        </div>
    </section>
<?php require 'footer.php' ?>
