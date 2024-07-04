<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Confirmation de Réservation Acceptée</title>
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

        <p>Nous avons le plaisir de vous informer que votre réservation pour l'événement "{{ $evenement->nom }}" a été acceptée.</p>

        <p>Nous sommes ravis de vous compter parmi nous et espérons que vous apprécierez cet événement. Pour plus d'informations ou pour toute question, n'hésitez pas à nous contacter.</p>

        <p>Nous nous réjouissons de vous accueillir lors de cet événement !</p>

        <p>Cordialement,<br>L'équipe de l'organisation</p>

        <div class="footer">
            <p>Pour toute question, vous pouvez nous contacter à <a href="mailto:adodabo00@gmail.com">adodabo00@gmail.com</a>.</p>
        </div>
    </div>
</body>
</html>
