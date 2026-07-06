<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Liste des demandes des congés</title>
</head>
<body>
    <h1>LISTE DEMANDE</h1>
    <table border="1">
        <tr>
            <th>Type de congé</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Motif</th>
            <th>Statut</th>
        </tr>
        @foreach($leaveRequests as $leaveRequest)
        <tr>
            <td>{{ $leaveRequest->leave_type }}</td>
            <td>{{ $leaveRequest->start_date }}</td>
            <td>{{ $leaveRequest->end_date }}</td>
            <td>{{ $leaveRequest->reason }}</td>
            <td>{{ $leaveRequest->status }}</td>
        </tr>
        @endforeach

        <br><br>
        <button> onclick="window.location.href='{{ route('leave.edit') }}'"
            Modifier
        </button>
        <button> onclick="window.location.href='{{ route('leave.cancel') }}'"
            Annuler
        </button>
        <button> onclick="location.reload()">
            Actualiser
        </button>
        <button> onclick="window.location.href='{{ route('employee.dashboard') }}'"
            Retour
        </button>
    </table>
</body>
</html>