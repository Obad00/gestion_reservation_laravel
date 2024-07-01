<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page de Connexion</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    <style>
        .container {
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .row {
            width: 100%;
        }
        .image-section {
            background: url('your-image-url.jpg') no-repeat center center;
            background-size: cover;
        }
        .form-section {
            padding: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row no-gutters">
            <div class="col-md-6 image-section"></div>
            <div class="col-md-6 form-section">
                <h2 class="mb-4">Inscription</h2>
                <form>
                    <div class="form-group">
                        <label for="firstName">Prénom</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Entrez votre prénom">
                    </div>
                    <div class="form-group">
                        <label for="lastName">Nom</label>
                        <input type="text" class="form-control" id="lastName" placeholder="Entrez votre nom">
                    </div>
                    <div class="form-group">
                        <label for="phone">Téléphone</label>
                        <input type="text" class="form-control" id="phone" placeholder="Entrez votre téléphone">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" id="email" placeholder="Entrez votre email">
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" class="form-control" id="password" placeholder="Entrez votre mot de passe">
                    </div>
                    <button type="submit" class="btn btn-primary btn-block">S'inscrire</button>
                </form>
                <p class="mt-4">Vous avez déjà un compte ? <a href="#">Connectez-vous</a>.</p>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
