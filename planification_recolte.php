<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = htmlspecialchars($_POST["nom"]);
    $date_recolte = htmlspecialchars($_POST["date_recolte"]);
    $main_oeuvre = htmlspecialchars($_POST["main_oeuvre"]);
    $equipement = htmlspecialchars($_POST["equipement"]);

    // Connexion à la base de données
    $servername = "localhost";
    $username = "votre_nom_utilisateur";
    $password = "votre_mot_de_passe";
    $dbname = "suivi_culture"; // Assurez-vous de remplacer ceci par le nom correct de votre base de données

    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }

    // Préparer et exécuter la requête SQL pour insérer les données du formulaire dans la base de données
    $sql = "INSERT INTO planification_recolte (nom, date_recolte, main_oeuvre, equipement) VALUES ('$nom', '$date_recolte', '$main_oeuvre', '$equipement')";

    if ($conn->query($sql) === TRUE) {
        echo "Les données ont été enregistrées avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
?>

