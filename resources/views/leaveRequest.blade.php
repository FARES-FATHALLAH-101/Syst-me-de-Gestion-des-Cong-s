<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Demande de congé</h1>
    <form action="{{ route('leave.store') }}" method="post">
        @csrf
        <label>Type de congé :</label>&nbsp;&nbsp;&nbsp;
        <select name="leave_type" required>
            <option value="">choisir un type</option>
            <option value="Annuel">Congé annuel</option>
            <option value="Maladie">Congé maladie</option>
            <option value="Maternité">Congé maternité</option>
        </select>
        <br><br>
        <label>Date de début :</label>&nbsp;&nbsp;&nbsp;
        <input type="date" name="start_date" required> <br><br>
        <label>Date de fin :</label>&nbsp;&nbsp;&nbsp;
        <input type="date" name="end_date" required> <br><br>
        <label>Motif :</label>&nbsp;&nbsp;&nbsp;
        <textarea name="reason" rows="4" cols="40" required></textarea><br><br>
        <button type="submit">Envoyer la demande</button>&nbsp;&nbsp;
        <button type="button" onclick="window.location.href='{{ route ('employeedashboard') }}'">
            Retour
        </button>
    </form>
</body>
</html>