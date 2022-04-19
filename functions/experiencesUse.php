<?php
function getExperiences($pdoP,$idCompetence) {
    $stmt = $pdoP->prepare("SELECT experiences.ID_EXPERIENCE, experiences.NOM_EXPERIENCE, experiences.DATE_DEBUT_EXPERIENCE, experiences.DATE_FIN_EXPERIENCE FROM experiences
    inner JOIN asso_illustration ON experiences.ID_EXPERIENCE = asso_illustration.ID_EXPERIENCE
    WHERE ID_COMPETENCE = ?;");
    $stmt->execute([$idCompetence]);
    return $stmt->fetchAll(PDO::FETCH_ASSOC);
}
?>