<!DOCTYPE html>
<html>
<head>
    <title>Liste des Réservations pour {{ $event->nom }}</title>
    <style>
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
    <!-- Styles spécifiques pour l'impression -->
    <style media="print">
        body { font-family: Arial, sans-serif; }
        table { width: 100%; border-collapse: collapse; }
        th, td { border: 1px solid black; padding: 8px; text-align: left; }
        th { background-color: #f2f2f2; }
    </style>
</head>
<body>

<h1>Liste des Réservations pour l'événement : <span style="color: red">{{ $event->nom }}</span></h1>

<table>
    <thead>
        <tr>
            <th>N</th>
            <th>Nom Complet</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Signature</th>
            <!-- Ajoutez d'autres colonnes selon vos besoins -->
        </tr>
    </thead>
    <tbody>
        @foreach ($reservations as $index => $reservation)
        <tr>
            <td>{{ $index +1 }}</td>
            <td>{{ $reservation->user->nom }} {{ $reservation->user->prenom }}</td>
            <td>{{ $reservation->user->email }}</td>
            <td>{{ $reservation->user->telephone }}</td>
            <td></td>
            <!-- Ajoutez d'autres colonnes selon vos besoins -->
        </tr>
        @endforeach
    </tbody>
</table>

<script>
    window.onload = function() {
        window.print();
    }
</script>

</body>
</html>
