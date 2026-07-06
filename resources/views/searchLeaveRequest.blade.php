<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Recherche demande de congé</title>
</head>
<body>
    <h1> Recherche demande de congé</h1>
    <form action="{{ route('leave.search') }}" methode="get">
        <label>Mot clé :</label>
        <input type="text" name="search" required>
        <button type="submit"> Rechercher</button>
    </form>
    <br>
    @if(isset($leaveRequests))
    <table border="1">
        <tr>
            <th> Type de congé </th>
            <th>Date de debut</th>
            <th>Date de fin</th>
            <th>Motif</th>
            <th>Statut</th>
        </tr>
        @foreach($leaveREquests as $leaveRequests)
        <tr>
            <td>{{ $leaveRequest->leavr_type }}</td>
            <td>{{ $leaveRequest->start_date }}</td>
            <td>{{ $leaveRequest->end_date }}</td>
            <td>{{ $leaveREquest->reason }}</td>
            <td>{{ $leaveRequest->status }}</td>
        </tr>
        @endforeach
    </table>
    @endif
    <button onclick="window.location.href='{{ route('employee.dashboard') }}'">
        Retour
    </button>
</body>
</html>