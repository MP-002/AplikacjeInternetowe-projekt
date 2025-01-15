<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="styll.css">
</head>
<body>

    <div>
        <form action="{{route('login.check')}}" method="_POST">
            <label for="nazwa">Nazwa użytkownika</label><br>
            <input type="text" name="nazwa"><br>
            <label for="haslo">Hasło</label><br>
            <input type="password" name="haslo"><br>
            @if(session('alert'))
            <p>{{session('alert')}}</p>
            @endif
            <button type="submit">Zaloguj się</button>
        </form>
        <p>Nie masz konta? Zarejestruj się!</p>
        <button><a class="register" href="{{ route('showregister') }}">Rejestracja</a></button>
    </div>
</body>
</html>