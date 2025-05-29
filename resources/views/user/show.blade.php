@extends('layout')

@section('content')
    <h1>Détails de l'utilisateur</h1>
    <ul>
        <li><strong>Nom:</strong> {{ $user->nom }}</li>
        <li><strong>Prénom:</strong> {{ $user->prenom }}</li>
        <li><strong>Email:</strong> {{ $user->email }}</li>
        <li><strong>Téléphone:</strong> {{ $user->telephone }}</li>
        <li><strong>Rôle:</strong> {{ $user->rôle }}</li>
        <li><strong>Statut:</strong> {{ $user->statut }}</li>
        <li><strong>Date d'inscription:</strong> {{ $user->date_inscription }}</li>
    </ul>
    <a href="{{ route('users.index') }}">Retour à la liste</a>
@endsection
