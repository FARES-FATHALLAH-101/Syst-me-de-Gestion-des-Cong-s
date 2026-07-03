<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription</title>
</head>
<body>
    <h2>Créer un compte</h2>

    <form method="POST" action="{{ '/register' }}">
        <label>Nom :</label><br>
        <input type="text" name="name" required><br>

        <label>Prenom :</label><br>
        <input type="text" name="prenom" required><br>

        <label>Email :</label><br>
        <input type="email" name="email" required><br>

        <label>Mot de passe :</label><br>
        <input type="password" name="pass" required><br>
        
    </form>


    
</body>
</html>