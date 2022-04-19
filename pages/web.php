<?php
//page d'accueil
//chargement des paramètres de la BD et connexion
include('./utils/db.php');
include('./functions/competencesUse.php');
include('./functions/experiencesUse.php');
?>

<div class="fondBleu">

    <div id="titre">
        <h1>WEB</h1>
    </div>

    <div class="container">
        <?php
        $competences = getCompetences($pdo, 3);
        echo "<table class=\"table\">";
        echo "<thead><tr><th>Compétence</th><th>Description</th></tr></thead>";
        echo "<tbody>";
        foreach ($competences as $result) {
            echo "<tr>";
            echo "<td class='tableau'>" . $result["TITRE_COMPETENCE"] . "</td>
                    <td class='tableau'>" . $result["DESC_COMPETENCE"] . "</td>";     
            echo "</tr>";
        }
        echo "</tbody>";
        echo "</table>";
        foreach ($competences as $competence) {
            $idCompetence = $competence['ID_COMPETENCE'];
            $experiences = getExperiences($pdo, $idCompetence);
            foreach ($experiences as $experience) {
                echo $experience['NOM_EXPERIENCE'];
            }
        }
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