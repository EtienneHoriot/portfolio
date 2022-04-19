<?php
function getCompetences($pdoP,$idRubrique) {
    $stmt = $pdoP->prepare("SELECT * FROM `competences` WHERE id_Rubrique=?;");
    $stmt->execute([$idRubrique]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>