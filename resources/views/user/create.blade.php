


    <h1>Créer un nouvel utilisateur</h1>
    <form method="POST" action="{{ route('users.store') }}">
        @csrf
        @include('user.form')
        <button type="submit">Enregistrer</button>
    </form>

@if ($errors->any())
    <div>
        <ul>
            @foreach ($errors->all() as $error)
                <li style="color: red">{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
