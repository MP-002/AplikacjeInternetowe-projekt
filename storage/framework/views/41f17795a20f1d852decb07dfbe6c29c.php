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
        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $user): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($user->nazwa); ?></td>
                
                <td><?php echo e($user->haslo); ?> </td>
                <td><?php echo e($user->rola); ?></td>
                <td>
                        <button class="e"><a href="<?php echo e(route('admin.edit', $user->id)); ?>">Edytuj</a></button>
                        <form action="<?php echo e(route('admin.destroy', $user->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="u" type="submit" onclick="return confirm('Czy usunąć ten wpis?')">Usuń</button>
                        </form> 
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </table>
    <button class="dodaj"><a class="b" href="<?php echo e(route('admin.create')); ?>">Dodaj użytkownika</a></button>
    <button class="dodaj"><a class="b" href="<?php echo e(route('fishings.index')); ?>">Do strony głównej</a></button>
</body>
</html><?php /**PATH D:\zawodowe\php\projektog\resources\views/fishings/admin.blade.php ENDPATH**/ ?>