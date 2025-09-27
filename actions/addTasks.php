<?php
    require("connectToDB.php");

// Vérifier si le formulaire a été soumis
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $nom = $_POST['nom'];
    $description = $_POST['description'];

    // Préparer la requête d'insertion avec des requêtes préparées pour la sécurité
    // Cela empêche les injections SQL
    $sql = "INSERT INTO task (nom, description) VALUES (?, ?)";
    $stmt= $conn->prepare($sql);

    // Lier les valeurs et exécuter la requête
    $stmt->execute([$nom, $description]);

    echo "Données ajoutées avec succès !";
} else {
    echo "Erreur : Méthode de requête invalide.";
}
?>
