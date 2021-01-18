<?php require_once 'header.php'; ?>
<div class="container m-5">
    <?php
    if (isset($_POST['reponse1'])) {
        $reponse1 = $_POST['reponse1'];
    }

    if (isset($_POST['reponse'])) {
        $reponse = $_POST['reponse'];
    }
    if ($reponse1 == $reponse) {
        echo "<h2 class='alert-success text-center'>Bonne réponse !</h2>";
    } else {
        echo "<h2 class='alert-danger text-center'>Mauvaise réponse !</h2>";
    }


    ?>

    <a href="index.php" class="btn btn-success btn-lg">Retour</a>
</div>