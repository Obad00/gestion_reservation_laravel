<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Réservation Soumise</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            color: #333;
            line-height: 1.6;
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 20px;
            background-color: #f9f9f9;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .footer {
            margin-top: 20px;
            font-size: 0.9em;
            color: #666;
        }
    </style>
</head>
<body>
    <div class="container">
        <p>Bonjour {{ $user->prenom }} {{ $user->nom }},</p>

        <p>Nous avons bien reçu votre demande de réservation pour l'événement "{{ $evenement->nom }}". Votre demande est actuellement en attente de validation par notre équipe.</p>

        <p>Nous vous remercions de votre patience et nous vous tiendrons informé de l'évolution de votre demande dans les plus brefs délais. Si vous avez des questions en attendant, n'hésitez pas à nous contacter.</p>

        <p>Merci de votre compréhension !</p>

        <p>Cordialement,<br>L'équipe de l'organisation</p>

        <div class="footer">
            <p>Pour toute question, vous pouvez nous contacter à <a href="mailto:adodabo00@gmail.com">adodabo00@gmail.com</a>.</p>
        </div>
    </div>
</body>
</html>
