<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie</title>
    <link rel="stylesheet" href="../stylc.css">
</head>
<body>
<h1>Baza połowów wędkarskich</h1>
<h2>Dodaj połow</h2>
    <form action="<?php echo e(route('fishings.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="imie" >Imię wędkarza</label>
    <input type="text"  id="title" name="imie" value="Zbigniew">
    <label for="nazwisko" >Nazwisko wędkarza</label>
    <input type="text"  id="nazwisko" name="nazwisko" value="Tromba">
    <label for="wiek" >Wiek wędkarza</label>
    <input type="number"  id="wiek" name="wiek" value="45">
    <label for="gatunek" >Gatunek ryby</label>
    <input type="text" id="gatunek" name="gatunek" value="Szczupak">
    <label for="dlugosc" >Długość ryby [cm]</label>
    <input type="number"  scale=0.1 id="dlugosc" name="dlugosc" value="92">
    <label for="masa" >Masa ryby [kg]</label>
    <input type="number" scale=0.1 id="masa" name="masa" value="8.4">
    <label for="nazwa" >Nazwa łowiska</label>
    <input type="text"  id="nazwa" name="nazwa" value="Wielkie">
    <label for="typ" >Typ łowiska</label>
    <input type="text" id="typ" name="typ"value="Jezioro" >
    <label for="data" >Data połowu</label>
    <input type="date"  id="data" name="data"  value='2024-12-05' required>
    <label for="godzina" >Godzina połowu</label>
    <input type="time" id="godzina" name="godzina" value="12:53" required>
    <button type="submit">Dodaj</button>
    </form>
    <button><a href="<?php echo e(route('fishings.index')); ?>">Wróć</a></button>
</body>
</html><?php /**PATH D:\zawodowe\php\projekt\resources\views/fishings/create.blade.php ENDPATH**/ ?>