<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Employé</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body>
    <h1> Gestion des Congé
    </h1>
    <button onclick="window.location.href='{{ route('leave.request') }}'">
        Faire une demande de congé
    </button>
    <br><br>
    <button onclick="window.location.href='{{ route('leave.list')}}'">
        Liste des demandes de congé
    </button>
    <br><br>
    <button onclick="window.location.href='{{ route('logout')}}'">
        Quitter
    </button>
</body>
</html>