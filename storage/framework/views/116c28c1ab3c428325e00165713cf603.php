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
        <form action="<?php echo e(route('register')); ?>" method="_POST">
            <label for="nazwa">Podaj nazwe użytkownika</label><br>
            <input type="text" name="nazwa"><br>
            <label for="haslo">Podaj hasło</label><br>
            <input type="password" name="haslo"><br>
            <?php if(session('alert')): ?>
            <p><?php echo e(session('alert')); ?></p>
            <?php endif; ?>
            <button type="submit">Zapisz się</button>
        </form>
        
    </div>
</body>
</html><?php /**PATH D:\zawodowe\php\projekt\resources\views/fishings/register.blade.php ENDPATH**/ ?>