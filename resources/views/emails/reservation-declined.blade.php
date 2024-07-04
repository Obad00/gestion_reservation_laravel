<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Confirmation de Réservation Déclinée</title>
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
        <p>Bonjour {{ $utilisateur->prenom }} {{ $utilisateur->nom }},</p>

        <p>Nous regrettons de vous informer que votre réservation pour l'événement "{{ $evenement->nom }}" n'a pas pu être acceptée.</p>

        <p>Nous comprenons votre déception et espérons avoir l'occasion de vous accueillir lors d'un prochain événement. N'hésitez pas à consulter notre site pour découvrir nos futurs événements.</p>

        <p>Nous restons à votre disposition pour toute question ou information complémentaire.</p>

        <p>Cordialement,<br>L'équipe de l'organisation</p>

        <div class="footer">
            <p>Si vous avez des questions, vous pouvez nous contacter à <a href="mailto:adodao00@gmail.com">adodabo00@gmail.com</a>.</p>
        </div>
    </div>
</body>
</html>
