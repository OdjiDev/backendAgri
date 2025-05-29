@extends('layout')

@section('content')
    <h1>Modifier l'utilisateur</h1>
    <form method="POST" action="{{ route('users.update', $user->id) }}">
        @csrf
        @method('PUT')
        @include('users.form', ['user' => $user])
        <button type="submit">Mettre à jour</button>
    </form>
@endsection
