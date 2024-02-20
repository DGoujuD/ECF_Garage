<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupération des données du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $telephone = $_POST['telephone'];
    $message = $_POST['message'];

    // Vous pouvez faire ici ce que vous souhaitez avec les données, par exemple les envoyer par e-mail, les enregistrer dans une base de données, etc.
    // Dans cet exemple, nous allons simplement afficher les données.

    echo "<h2>Données reçues :</h2>";
    echo "<p><strong>Nom :</strong> $nom</p>";
    echo "<p><strong>Prénom :</strong> $prenom</p>";
    echo "<p><strong>Adresse e-mail :</strong> $email</p>";
    echo "<p><strong>Numéro de téléphone :</strong> $telephone</p>";
    echo "<p><strong>Message :</strong> $message</p>";
}
?>
