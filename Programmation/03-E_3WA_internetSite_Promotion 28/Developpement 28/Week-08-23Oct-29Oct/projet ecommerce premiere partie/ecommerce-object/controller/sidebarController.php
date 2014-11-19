<?php

$sql = "SELECT * FROM categorie";
$requete = $DB->prepare($sql);
$requete->execute();

$categoriesSidebar = $requete->fetchAll(PDO::FETCH_ASSOC);