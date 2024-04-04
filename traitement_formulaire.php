<?php
// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom_culture = htmlspecialchars($_POST["nom_culture"]);
    $date_plantation = htmlspecialchars($_POST["date_plantation"]);
    $type_sol = htmlspecialchars($_POST["type_sol"]);
    $methode_arrosage = htmlspecialchars($_POST["methode_arrosage"]);
    $commentaires = htmlspecialchars($_POST["commentaires"]);

    // Connexion à la base de données
    $servername = "localhost";
    $username = "votre_nom_utilisateur";
    $password = "votre_mot_de_passe";
    $dbname = "suivi_culture";

    // Créer une connexion
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Vérifier la connexion
    if ($conn->connect_error) {
        die("Échec de la connexion : " . $conn->connect_error);
    }

    // Préparer et exécuter la requête SQL pour insérer les données du formulaire dans la base de données
    $sql = "INSERT INTO culture (nom, date_plantation, type_sol, methode_arrosage, commentaires) VALUES ('$nom_culture', '$date_plantation', '$type_sol', '$methode_arrosage', '$commentaires')";

    if ($conn->query($sql) === TRUE) {
        echo "Les données ont été enregistrées avec succès.";
    } else {
        echo "Erreur : " . $sql . "<br>" . $conn->error;
    }

    // Fermer la connexion
    $conn->close();
}
?>
