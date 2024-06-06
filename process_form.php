<?php
require './PHP/ConexToDb.php'; // Assurez-vous d'ajuster le chemin selon votre structure de fichiers

// Créez une instance de la classe Database pour établir la connexion à la base de données
$database = new Database();
$conn = $database->connect();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $Date_naissance = $_POST["Date_naissance"];
    $CNI = $_POST["CNI"];
    $VisitMed = $_POST["VisitMed"];
    $region = $_POST["region"];
    $ville = $_POST["ville"];
    $malaise = $_POST["malaise"];
    $fievre = $_POST["fievre"];
    $maladies_chroniques = $_POST["maladies_chroniques"];
    $medicaments = $_POST["medicaments"];
    $antibiotiques = $_POST["antibiotiques"];
    $fumez = $_POST["fumez"];
    $alcool = $_POST["alcool"];
    $voyages = $_POST["voyages"];
    $regions_risque = $_POST["regions_risque"];
    $rapports_non_proteges = $_POST["rapports_non_proteges"];
    $nouveau_partenaire = $_POST["nouveau_partenaire"];
    $transfusion = $_POST["transfusion"];
    $cancers = $_POST["cancers"];
    $vih_hepatite = $_POST["vih_hepatite"];
    $chirurgie = $_POST["chirurgie"];
    $tatouages = $_POST["tatouages"];
    $enceinte = $_POST["enceinte"];

    // Préparation de la requête SQL d'insertion
    $sql = "INSERT INTO visiteur (Date_naissance, CNI, DERNIERE_VISITE_MED, region, ville, MALAISE_GENERAL,FIEVRE,MALADIES_CHRONIQUES, medicaments, antibiotiques, fumez, alcool, voyages, regions_risque, rapports_non_proteges, nouveau_partenaire, transfusion, cancers, vih_hepatite, chirurgie, tatouages, enceinte) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    // Préparation de la déclaration SQL
    $stmt = $conn->prepare($sql);

    // Vérification si la préparation de la déclaration a réussi
    if ($stmt) {
        // Assignation des valeurs aux paramètres et exécution de la requête
        $stmt->execute([$Date_naissance, $CNI, $VisitMed, $region, $ville, $malaise, $fievre, $maladies_chroniques, $medicaments, $antibiotiques, $fumez, $alcool, $voyages, $regions_risque, $rapports_non_proteges, $nouveau_partenaire, $transfusion, $cancers, $vih_hepatite, $chirurgie, $tatouages, $enceinte]);

        // Vérification de l'exécution de la requête
        if ($stmt->rowCount() > 0) {
            echo "Les données ont été enregistrées avec succès.";
        } else {
            echo "Erreur lors de l'enregistrement des données.";
        }

        // Fermeture de la déclaration
        $stmt = null;
    } else {
        echo "Erreur lors de la préparation de la requête: " . $conn->error;
    }

    // Fermeture de la connexion à la base de données
    $conn = null;
} else {
    // Redirection vers la page du formulaire si le formulaire n'a pas été soumis
    header("Location: formulaire.php");
    exit();
}
?>
