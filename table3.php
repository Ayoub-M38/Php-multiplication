<?php require_once 'header.php'; ?>

<div class="container">
    <h1 class="text-center text-success">Afficher la table de multiplication de 3</h1>
    <?php
    $num = 3;

    for ($i = 1; $i <= 10; $i++) {
        echo '<ul>
            <li> ' . $i * $num . '</li>
            </ul>';
    }
    ?>
    <a href="index.php" class="btn btn-success btn-lg">Retour</a>
</div>