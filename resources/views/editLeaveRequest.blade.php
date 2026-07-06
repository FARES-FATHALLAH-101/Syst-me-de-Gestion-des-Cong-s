<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier une demande de congé</title>
</head>
<body>
    <h1>Modifier une demande de congé</h1>
    <form> action="{{ route('leave.update', $leaveRequest->id) }}" method="POST">
        <select name="Leave_type" required>
            <option value="Annuel" {{ $leaveRequest->leave_type == 'Annuel' ? 'selected' : '' }}>
                Congé annuel
            </option>
            <option value="Maladie" {{ $leaveRequest->leave_type == 'Maladie' ? 'selected' : '' }}>
                Congé maladie
            </option>
            <option value="Maternité" {{ $leaveRequest->leave_type == 'Maternité' ? 'selected' : '' }}>
                Congé maternité
            </option>
        </select> 

        <label>Date de début :</label>
        <input type="date" name="start_date" value="{{ $leaveRequest->start_date }}" required>
        <br><br> 

        <label>Date de fin :</label>
        <input type="date" name="end_date" value="{{ $leaveRequest->end_date }}" required>
        <br><br> 

        <label>Motif :</label>
        <textarea type="date" name="reason" rows="4" cols="40" required>{{ $leaveRequest->start_date }}</textarea>
        <br><br> 

        <button type="submit">Enregistrer les modifications</button>
        <button tyor="button" onclick="window.location.href='{{ route('leave.list') }}'">
            Retour
        </button>
    </form>
</body>
</html>