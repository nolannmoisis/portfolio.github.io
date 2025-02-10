<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = trim(htmlspecialchars($_POST["name"]));
    $email = filter_var($_POST["email"], FILTER_VALIDATE_EMAIL);
    $message = trim(htmlspecialchars($_POST["message"]));

    if (!$email) {
        die("Adresse email invalide.");
    }

    if (empty($nom) || empty($message)) {
        die("Tous les champs sont obligatoires.");
    }

    $to = "nolannmoisis@gmail.com";
    $subject = "Nouveau message de contact de $nom";
    $headers = "From: no-reply@example.com\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $mailBody = "Nom: $nom\n";
    $mailBody .= "Email: $email\n\n";
    $mailBody .= "Message:\n$message\n";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Message envoyé avec succès !";
    } else {
        die("Erreur lors de l'envoi du mail. Vérifie la configuration du serveur.");
    }
}
?>
