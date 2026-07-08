<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <h2>Créer un compte</h2>
    
    <form method="POST" action="{{ '/register' }}">
        @csrf
        <label for="name">Nom :</label><br>
        <input type="text" id="name" name="name" required><br><br>
        <label for="email">Email :</label><br>
        <input type="email" id="email" name="email" required><br><br>
        <label for="password">Mot de passe :</label><br>
        <input type="password" id="password" name="password" required><br><br>
        <label for="password">Confirmer mot de passe :</label><br>
        <input type="password" id="password" name="password_confirmation" required><br><br>
        <button type="submit">S'incsrire</button>
        <button type="button" onclick="window.location.href='/'">
            Retour
        </button>
    </form>
</body>
</html>