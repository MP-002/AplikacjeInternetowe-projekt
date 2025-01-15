<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edycja</title>
    <link rel="stylesheet" href="../../style.css">
</head>
<body>
<h1>Baza połowów wędkarskich</h1>
<h2>Edytuj połow</h2>
    <form action="{{route('fishings.update',$fishing->id)}}" method="POST">
    @csrf
    @method('PUT')
    <label for="imie" >Imię wędkarza</label>
    <input type="text"  id="title" name="imie" value="{{ old('imie', $fishing->angler->imie ?? '') }}">
    <label for="nazwisko" >Nazwisko wędkarza</label>
    <input type="text"  id="nazwisko" name="nazwisko" value="{{ old('nazwisko', $fishing->angler->nazwisko ?? '') }}">
    <label for="wiek" >Wiek wędkarza</label>
    <input type="number"  id="wiek" name="wiek" value="{{ old('wiek', $fishing->angler->wiek ?? '') }}">
    <label for="gatunek" >Gatunek ryby</label>
    <input type="text" id="gatunek" name="gatunek" value="{{ old('gatunek', $fishing->fish->gatunek ?? '') }}">
    <label for="dlugosc" >Długość ryby</label>
    <input type="number"   id="dlugosc" name="dlugosc" step="0.01" value="{{ old('dlugosc', $fishing->fish->dlugosc ?? '') }}">
    <label for="masa" >Masa ryby</label>
    <input type="number"  id="masa" name="masa" step="0.01" value="{{ old('masa', $fishing->fish->masa ?? '') }}">
    <label for="nazwa" >Nazwa łowiska</label>
    <input type="text"  id="nazwa" name="nazwa" value="{{ old('nazwa', $fishing->fishingspot->nazwa ?? '') }}">
    <label for="typ" >Typ łowiska</label>
    <input type="text" id="typ" name="typ" value="{{ old('typ', $fishing->fishingspot->typ ?? '') }}">
    <label for="data" >Data połowu</label>
    <input type="date"  id="data" name="data" value="{{ old('data', $fishing->fishing->data ?? '2024-12-05') }}" required>
    <label for="godzina" >Godzina połowu</label>
    <input type="time" id="godzina" name="godzina" value="{{ old('godzina', $fishing->fishing->godzina ?? '12:53') }}"required>
    <button type="submit">Potwierdź</button>
    </form>
    <button><a href="{{ route('fishings.index') }}">Wróć</a></button>
</body>
</html>