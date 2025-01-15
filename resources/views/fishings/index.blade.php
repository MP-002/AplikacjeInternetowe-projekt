<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="styli.css">
</head>
<body id="body">
    <h1>Baza połowów wędkarskich</h1>
    @if(session('user'))
        <h3>{{session('username')}} ({{session('user')}})</h3>
    @endif
    @if(session('user')=='guest')
        <button class="login"><a class="alogin" href="{{ route('login') }}">Zaloguj się</a></button>
    @elseif(session('user')=='user'| session('user')=='admin')
    <button class="logout"><a class="alogout" href="{{ route('logout') }}">Wyloguj się</a></button>
    @endif
    @if(session('user')=='admin')
    <button class="admin"><a class="alogin" href="{{ route('admin') }}">AdminPanel</a></button>
    @endif
        <h2>Lista połowów</h2>
        <div class="dost">
        <button class="aplus" onClick="Aplus()">A+</button>
        <button class="aminus" onClick="Aminus()">A-</button>
        <button class="k" onClick="Kontrast()">K</button>
        </div>
    <div>
    @if(session('user')=='user'| session('user')=='admin')
        <button class="dodaj"><a class="b" href="{{ route('fishings.create') }}">Dodaj połów</a></button>
    @endif
    <table>
    <thead>
        <tr>
            <th>Data</th>
            <th>Wędkarz</th>
            <th>Łowisko</th>
            <th>Ryba</th>
            <th>Akcje</th>
        </tr>
    </thead>
    <tbody>
        
        @foreach($fishings as $fishing)
            <tr>
                <td>{{ $fishing->data }}</td>
                
                <td>{{ $fishing->angler->imie ?? 'Brak danych' }} </td>
                <td>{{ $fishing->fishingspot->nazwa ?? 'Brak danych' }}</td>
                <td>{{ $fishing->fish->gatunek ?? 'Brak danych' }}</td>
                <td>
                    <button class="s"><a href="{{ route('fishings.show', $fishing->id) }}">Zobacz</a></button>
                    @if(session('user')=='user'| session('user')=='admin')
                        <button class="e"><a href="{{ route('fishings.edit', $fishing->id) }}">Edytuj</a></button>
                    @endif
                    @if(session('user')=='admin')
                        <form action="{{ route('fishings.destroy', $fishing->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="u" type="submit" onclick="return confirm('Czy usunąć ten wpis?')">Usuń</button>
                        </form>
                    @endif
                </td>
            </tr>
        @endforeach
        
    </tbody>
     
</table>
<div class="pagination">
        {{ $fishings->links() }}
    </div>
@if(session('success'))
        <div class="alert"><p>{{session('success')}}</p></div>
    @endif
    </div>
    
<script>
    
    function Aplus() {
            var textElement = document.getElementById('body');
            var currentSize = window.getComputedStyle(textElement, null).getPropertyValue('font-size');
            var newSize = parseFloat(currentSize) + 2;
            textElement.style.fontSize = newSize + 'px';
        }
        function Aminus() {
            var textElement = document.getElementById('body');
            var currentSize = window.getComputedStyle(textElement, null).getPropertyValue('font-size');
            var newSize = parseFloat(currentSize) - 2;
            textElement.style.fontSize = newSize + 'px';
        }
        let isContrastActive = false;

function Kontrast() {
    if (isContrastActive) {
        location.reload(); 
    } else {
        document.body.style.backgroundColor = 'black';
        document.body.style.color = 'yellow';

       
        document.querySelectorAll('h1, h2').forEach(function(element) {
            element.style.color = 'yellow';
        });

        
        document.querySelectorAll('td').forEach(function(element) {
            element.style.color = 'yellow';
            element.style.textShadow = '1px 1px black';
            element.style.backgroundColor = '#333333';
        });

        document.querySelectorAll('th').forEach(function(element) {
            element.style.color = 'yellow';
            element.style.textShadow = '1px 1px black';
            element.style.backgroundColor = '#333333';
        });

        isContrastActive = true; 
    }
}
         
</script>
</body>
</html>