<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edycja</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>AdminPanel</h1>
<h2>Edytuj użytkownika</h2>
    <form action="{{route('admin.update',$user->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="nazwa" >Nazwa</label>
    <input type="text"  id="nazwa" name="nazwa" value="{{ old('nazwa', $user->nazwa ?? '') }}">
    <label for="haslo" >Hasło</label>
    <input type="text"  id="haslo" name="haslo" value="{{ old('haslo', $user->haslo ?? '') }}">
    <label for="rola" >Rola</label>
    <input type="text"  id="rola" name="rola" value="{{ old('rola', $user->rola ?? '') }}">
    <button type="submit">Potwierdź</button>
    </form>
    <button><a href="{{ route('admin') }}">Wróć</a></button>
</body>
</html>