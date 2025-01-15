<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rejestracja</title>
    <link rel="stylesheet" href="styll.css">
</head>
<body>

    <div>
        <form action="{{route('register')}}" method="_POST">
            <label for="nazwa">Podaj nazwe użytkownika</label><br>
            <input type="text" name="nazwa"><br>
            <label for="haslo">Podaj hasło</label><br>
            <input type="password" name="haslo"><br>
            @if(session('alert'))
            <p>{{session('alert')}}</p>
            @endif
            <button type="submit">Zapisz się</button>
        </form>
        
    </div>
</body>
</html>