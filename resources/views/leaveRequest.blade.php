<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulaire de demande de congé</h1>
    <form> action="{{ route('leave.store') }}" method="post">
        <label>Type de congé :</label><br>
        <select name="leave_type" required>
            <option value="">choisir un type</option>
            <option value="Annuel">Congé annuel</option>
            <option value="Maladie">Congé maladie</option>
            <option value="Maternité">Congé maternité</option>
        </select>
        <br><br>
        <label>Date de début :</label><br>
        <input type="date" name="start_date" required> <br><br>
        <label>Date de fin :</label><br>
        <input type="date" name="end_date" required> <br><br>
        <label>Motif :</label><br>
        <textarea>name="reason" rows="4" cols="40" required></textarea><br><br>
        <button type="submit">Envoyer la demande</button>
        <button type="button" onclick="window.location.href='{{ route ('employee.dashboard') }}'">
            Retour
        </button>
    </form>
</body>
</html>