<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Connexion</h2>

    <form method="POST" action="{{ '/login' }}">
        <label for="email">Adresse e-mail :</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Mot de passe:</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <button type="submit">Se connecter</button>
    </form>
    <p>
        Vous n'avez pas de compte ?
        <a> href="{{ route('register') }}">S'inscrire</a>
    </p>
</body>
</html>