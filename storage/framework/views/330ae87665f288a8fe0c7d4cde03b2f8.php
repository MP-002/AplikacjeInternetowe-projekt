<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista</title>
    <link rel="stylesheet" href="styli.css">
</head>
<body>
    <h1>Baza połowów wędkarskich</h1>
    <h2>Lista połowów</h2>
    <div>
    <button class="dodaj"><a class="b" href="<?php echo e(route('fishings.create')); ?>">Dodaj połów</a></button>
   
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
        
        <?php $__currentLoopData = $fishings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $fishing): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr>
                <td><?php echo e($fishing->data); ?></td>
                
                <td><?php echo e($fishing->angler->imie ?? 'Brak danych'); ?> </td>
                <td><?php echo e($fishing->fishingspot->nazwa ?? 'Brak danych'); ?></td>
                <td><?php echo e($fishing->fish->gatunek ?? 'Brak danych'); ?></td>
                <td>
                    <button class="s"><a href="<?php echo e(route('fishings.show', $fishing->id)); ?>">Zobacz</a></button>
                    <button class="e"><a href="<?php echo e(route('fishings.edit', $fishing->id)); ?>">Edytuj</a></button>
                    <form action="<?php echo e(route('fishings.destroy', $fishing->id)); ?>" method="post">
                        <?php echo csrf_field(); ?>
                        <?php echo method_field('DELETE'); ?>
                        <button class="u" type="submit" onclick="return confirm('Czy usunąć ten wpis?')">Usuń</button>
                    </form>
                </td>
            </tr>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        
    </tbody>
     
</table>
<div class="pagination">
        <?php echo e($fishings->links()); ?>

    </div>
<?php if(session('success')): ?>
        <div class="alert"><p><?php echo e(session('success')); ?></p></div>
    <?php endif; ?>
    </div>
</body>
</html><?php /**PATH D:\zawodowe\php\lab7\resources\views/fishings/index.blade.php ENDPATH**/ ?>