
@php
    $user = $user ?? null;
@endphp

<label>Nom:</label>
<input type="text" name="nom" value="{{ old('nom', $user->nom ?? '') }}"><br>

<label>Prénom:</label>
<input type="text" name="prenom" value="{{ old('prenom', $user->prenom ?? '') }}"><br>

<label>Email:</label>
<input type="email" name="email" value="{{ old('email', $user->email ?? '') }}"><br>

<label>Téléphone:</label>
<input type="text" name="telephone" value="{{ old('telephone', $user->telephone ?? '') }}"><br>

<label>Mot de passe:</label>
<input type="password" name="password"><br>
 
<label>Rôle:</label>
<input type="text" name="role" value="{{ old('role', $user->role ?? '') }}"><br>

<label>Date inscription:</label>
<input type="date" name="date_inscription" value="{{ old('date_inscription', $user->date_inscription ?? '') }}"><br>

<label>Statut:</label>
<input type="text" name="statut" value="{{ old('statut', $user->statut ?? '') }}"><br>
