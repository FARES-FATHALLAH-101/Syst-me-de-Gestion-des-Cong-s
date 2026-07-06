<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tableau de bord Employé</title>
</head>
<body>
    <button onclick="window.location.href='{{ route('leave.request') }}'">
        Faire une demande de congé
    </button>
    <br><br>
    <button onclick="window.location.href='{{ route('leave.list')}}'">
        Lister mes demandes de congé
    </button>
    <br><br>
    <button onclick="window.location.href='{{ route('leave.search')}}'">
        Rechercher une demande
    </button>
    <button onclick="window.location.href='{{ route('logout')}}'">
        Quitter
    </button>
</body>
</html>