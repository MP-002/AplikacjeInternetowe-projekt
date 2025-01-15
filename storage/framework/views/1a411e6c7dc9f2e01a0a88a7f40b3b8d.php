<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dodawanie</title>
    <link rel="stylesheet" href="../stylc.css">
</head>
<body>
<h1>AdminPanel</h1>
<h2>Dodaj użytkownika</h2>
    <form action="<?php echo e(route('admin.store')); ?>" method="POST">
    <?php echo csrf_field(); ?>
    <label for="nazwa" >Nazwa</label>
    <input type="text"  id="nazwa" name="nazwa" value="<?php echo e(old('nazwa', $user->nazwa ?? '')); ?>">
    <label for="haslo" >Hasło</label>
    <input type="text"  id="haslo" name="haslo" value="<?php echo e(old('haslo', $user->haslo ?? '')); ?>">
    <label for="rola" >Rola</label>
    <input type="text"  id="rola" name="rola" value="<?php echo e(old('rola', $user->rola ?? '')); ?>">
    <button type="submit">Potwierdź</button>
    </form>
    <button><a href="<?php echo e(route('admin')); ?>">Wróć</a></button>
</body>
</html><?php /**PATH D:\zawodowe\php\projektog\resources\views/admin/create.blade.php ENDPATH**/ ?>