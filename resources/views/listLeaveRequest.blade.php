<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Liste de mes demandes de congé</title>
</head>
<body>

    <h1>Liste des demandes</h1>

    <table border="1" cellpadding="10">
        <tr>
            <th>Type de congé</th>
            <th>Date de début</th>
            <th>Date de fin</th>
            <th>Motif</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>

        @foreach($leaveRequests as $leaveRequest)
        <tr>
            <td>{{ $leaveRequest->leave_type }}</td>
            <td>{{ $leaveRequest->start_date }}</td>
            <td>{{ $leaveRequest->end_date }}</td>
            <td>{{ $leaveRequest->reason }}</td>
            <td>{{ $leaveRequest->status }}</td>
            <td>
                <a href="{{ route('leave.edit', $leaveRequest->id) }}">
                    <button>Modifier</button>
                </a>

                <a href="{{ route('leave.cancel', $leaveRequest->id) }}">
                    <button>Annuler</button>
                </a>
            </td>
        </tr>
        @endforeach
    </table>

    <br>

    <form action="{{ route('leave.list') }}" method="get">
        @csrf
        <label>Type de congé :</label>
        <select name="leave_type">
            <option value="">Tous</option>
            <option value="Annuel">Annuel</option>
            <option value="Maladie">Maladie</option>
            <option value="Maternité">Maternité</option>
        </select>

        <label>Statut :</label>
        <select name="status">
            <option value="">Tous</option>
            <option value="En attente">En attente</option>
            <option value="Validée">Validée</option>
            <option value="Refusée">Refusée</option>
        </select>
    </form>
    <br><br>
    <button onclick="location.reload()">
        Actualiser
    </button>&nbsp;&nbsp;
    <button onclick="window.location.href='{{ route('employeedashboard') }}'">
        Retour
    </button>

</body>
</html>