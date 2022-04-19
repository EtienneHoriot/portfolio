<?php
//page d'accueil
//chargement des paramètres de la BD et connexion
include('./utils/db.php');
include('./functions/competencesUse.php');

?>

<div class="fondBleu">

    <div id="titre">
        <h1>INFOGRAPHIE</h1>
    </div>

    <div class="container">

        <?php
        $results = getCompetences($pdo, 1);
        echo "<table>";
        echo "<thead><tr><th>Compétence</th><th>Description</th></tr></thead>";
        echo "<tbody>";
        foreach ($results as $result) {
            echo "<tr>";
            echo "<td class='tableau'>" . $result["TITRE_COMPETENCE"] . "</td>
                   <td class='tableau'>" . $result["DESC_COMPETENCE"] . "</td>";
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        ?>

    </div>

</div>

<div class="fondBleuClair">

    <div id="containerBlocContact">
        <div id="blocContact">
            <a href="mailto:etienne.horiot@outlook.com" target="_blank">Contactez-moi</a>
        </div>
    </div>

</div>