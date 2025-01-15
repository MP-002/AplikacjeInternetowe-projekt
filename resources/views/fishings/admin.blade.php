<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AdminPanel</title>
</head>
<body>
<h1>AdminPanel</h1>
<h2>Przegląd użytkowników</h2>
    <table>
        <tr>
            <th>Nazwa użytkownika</th>
            <th>Hasło użytkownika</th>
            <th>Rola użytkownika</th>
            <th>Akcje</th>
        </tr>
        @foreach($users as $user)
            <tr>
                <td>{{ $user->nazwa }}</td>
                
                <td>{{ $user->haslo }} </td>
                <td>{{ $user->rola }}</td>
                <td>
                        <button class="e"><a href="{{ route('admin.edit', $user->id) }}">Edytuj</a></button>
                        <form action="{{ route('admin.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="u" type="submit" onclick="return confirm('Czy usunąć ten wpis?')">Usuń</button>
                        </form> 
                </td>
            </tr>
        @endforeach
    </table>
    <button class="dodaj"><a class="b" href="{{ route('admin.create') }}">Dodaj użytkownika</a></button>
    <button class="dodaj"><a class="b" href="{{ route('fishings.index') }}">Do strony głównej</a></button>
</body>
</html>