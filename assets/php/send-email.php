<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Récupérer les données du formulaire
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $message = htmlspecialchars($_POST['message']);

    // Destinataire de l'email
    $to = 'votre-email@gmail.com'; // Remplacez par votre adresse email
    $subject = 'Nouveau message de ' . $name;
    
    // Message
    $body = "Nom: $name\n";
    $body .= "Email: $email\n";
    $body .= "Téléphone: $phone\n";
    $body .= "Message:\n$message";

    // En-têtes de l'email
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    
    // Envoyer l'email
    if (mail($to, $subject, $body, $headers)) {
        echo 'Message envoyé avec succès.';
    } else {
        echo 'Échec de l\'envoi du message.';
    }
} else {
    echo 'Méthode de requête invalide.';
}
?>