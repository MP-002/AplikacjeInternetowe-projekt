<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Przeglad</title>
    <link rel="stylesheet" href="../stylv.css">
</head>
<body>
<h1>Baza połowów wędkarskich</h1>
<h2>Szczegóły połowu</h2>
<div>
    <p>Imię wędkarza: <span>{{$fishing->angler->imie}}</span></p>
    <p>Nazwisko wędkarza: <span>{{$fishing->angler->nazwisko}}</span></p>
    <p>Wiek wędkarza: <span>{{$fishing->angler->wiek}}</span></p>
    <p>Gatunek ryby: <span>{{$fishing->fish->gatunek}}</span></p>
    <p>Długość w cm: <span>{{$fishing->fish->dlugosc}}</span></p>
    <p>Masa ryby w kg: <span>{{$fishing->fish->masa}}</span></p>
    <p>Miejsce połowu: <span>{{$fishing->fishingspot->typ}} {{$fishing->fishingspot->nazwa}}</span></p>
    <p>Data połowu: <span>{{$fishing->data}}</span></p>
    <p>Godzina połowu: <span>{{$fishing->godzina}}</span></p>
    <button><a href="{{ route('fishings.index') }}">Wróć</a></button>
    </div>
</body>
</html>