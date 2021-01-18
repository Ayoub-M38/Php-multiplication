<?php require_once 'header.php'; ?>

<body>
    <div class="container">

        <!-- Afficher la table de 3 -->

        <h1 class="text-danger text-center m-5">Afficher la table de 3</h1>
        <a href="table3.php"><button type="button" class="btn btn-warning btn-lg btn-block">Afficher la table de 3</button></a>
        <hr>

        <!-- Selection du multiple -->

        <form method="post" action="chosetable.php">
            <h1 class="text-danger text-center m-5">Selection du multiple</h1>

            <div class="form-group m-5">
                <label for="multiple">Example select</label>
                <select class="form-control" id="multiple" name="multiple">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success btn-lg btn-block">Résultat</button>
        </form>

        <hr>

        <!-- Afficher avec des boutons radio -->

        <form class="text-center" action="radio.php" method="post">
            <h1 class="text-danger text-center m-5">Afficher avec des boutons radio</h1>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="Checkbox" name="inlineCheckbox[]" id="inlineCheckbox1" value="1">
                <label class="form-check-label">1</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="Checkbox" name="inlineCheckbox[]" id="inlineCheckbox2" value="2">
                <label class="form-check-label">2</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="Checkbox" name="inlineCheckbox[]" id="inlineCheckbox3" value="3">
                <label class="form-check-label">3</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="Checkbox" name="inlineCheckbox[]" id="inlineCheckbox4" value="4">
                <label class="form-check-label">4</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="Checkbox" name="inlineCheckbox[]" id="inlineCheckbox5" value="5">
                <label class="form-check-label">5</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="Checkbox" name="inlineCheckbox[]" id="inlineCheckbox6" value="6">
                <label class="form-check-label">6</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="Checkbox" name="inlineCheckbox[]" id="inlineCheckbox7" value="7">
                <label class="form-check-label">7</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="Checkbox" name="inlineCheckbox[]" id="inlineCheckbox8" value="8">
                <label class="form-check-label">8</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="Checkbox" name="inlineCheckbox[]" id="inlineCheckbox9" value="9">
                <label class="form-check-label">9</label>
            </div>
            <div class="form-check form-check-inline">
                <input class="form-check-input" type="Checkbox" name="inlineCheckbox[]" id="inlineCheckbox10" value="10">
                <label class="form-check-label">10</label>
            </div>
            <button type="submit" class="btn btn-danger btn-lg btn-block">Voir les résultats</button>
        </form>

        <hr>

        <!-- Random multiplication -->

        <h1 class="text-danger text-center m-5">Random multiplication</h1>
        <form action="random.php" method="post">
            <div class="form-group">
                <div class="form-group">
                    <label for="reponse">Votre question :
                        <?php
                        $nbr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                        $multiply = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
                        $random_nbr = array_rand($nbr);
                        $random_multiply = array_rand($multiply);
                        $result = $random_nbr * $random_multiply;

                        echo $random_nbr . 'x' . $random_multiply . '=';
                        ?>
                    </label>
                    <input type="hidden" name="reponse" id="reponse" value="<?= $result ?>">
                </div>

                <div class="form-group">
                    <label for="reponse1">Réponse</label>
                    <input type="text" name="reponse1" id="reponse1" class="form-control">
                </div>
                <hr>
                <button type="submit" class="btn btn-info btn-lg btn-block">Valider</button>
            </div>
        </form>

    </div>
</body>

</html>