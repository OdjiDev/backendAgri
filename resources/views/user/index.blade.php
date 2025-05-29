
    <h1>Liste des utilisateurs</h1>
    <a href="{{ route('users.create') }}">Créer un nouvel utilisateur</a>
    <table border="1">
        <tr>
            <th>Nom</th>
            <th>Prénom</th>
            <th>Email</th>
            <th>Téléphone</th>
            <th>Rôle</th>
            <th>Statut</th>
            <th>Actions</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->nom }}</td>
                <td>{{ $user->prenom }}</td>
                <td>{{ $user->email }}</td>
                <td>{{ $user->telephone }}</td>
                <td>{{ $user->role }}</td>
                <td>{{ $user->statut }}</td>
                <td>
                    <a href="{{ route('users.show', $user->id) }}">Voir</a>
                    <a href="{{ route('users.edit', $user->id) }}">Modifier</a>
                    <form method="POST" action="{{ route('users.destroy', $user->id) }}" style="display:inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" onclick="return confirm('Supprimer cet utilisateur ?')">Supprimer</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>

