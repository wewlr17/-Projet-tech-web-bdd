<?php
include_once ('./../src/setup.php');
try {
    $dbh = new PDO('mysql:host=gdcvonliphgdbdd.mysql.db;dbname=gdcvonliphgdbdd', 'gdcvonliphgdbdd', 'Gabin170');
} catch (PDOException $e) {
    print "Erreur !: " . $e->getMessage() . "<br/>";
    die();
}

$data = [
    "title" => $_POST["title"],
    "picture" => $_POST['picture'] ?: null,
    "logiciel" => $_POST["logiciel"],
    "lien" => $_POST["lien"],
];

$projetRepository = new \Projet\ProjetRepository($dbh);


if (null !== $data["title"] &&  null !== $data["picture"] &&  null !== $data["logiciel"] &&  null !== $data["lien"]) {
    $projetRepository->update($data);
}



