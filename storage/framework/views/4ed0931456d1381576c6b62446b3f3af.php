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
    <?php if(session('user')): ?>
        <h3><?php echo e(session('username')); ?> (<?php echo e(session('user')); ?>)</h3>
    <?php endif; ?>
    <?php if(session('user')=='guest'): ?>
        <button class="login"><a class="alogin" href="<?php echo e(route('login')); ?>">Zaloguj się</a></button>
    <?php elseif(session('user')=='user'| session('user')=='admin'): ?>
    <button class="logout"><a class="alogout" href="<?php echo e(route('logout')); ?>">Wyloguj się</a></button>
    <?php endif; ?>
    <?php if(session('user')=='admin'): ?>
    <button class="admin"><a class="alogin" href="<?php echo e(route('admin')); ?>">AdminPanel</a></button>
    <?php endif; ?>
        <h2>Lista połowów</h2>
        <div class="dost">
        <button class="aplus" onClick="Aplus()">A+</button>
        <button class="aminus" onClick="Aminus()">A-</button>
        <button class="k" onClick="Kontrast()">K</button>
        </div>
    <div>
    <?php if(session('user')=='user'| session('user')=='admin'): ?>
        <button class="dodaj"><a class="b" href="<?php echo e(route('fishings.create')); ?>">Dodaj połów</a></button>
    <?php endif; ?>
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
                    <?php if(session('user')=='user'| session('user')=='admin'): ?>
                        <button class="e"><a href="<?php echo e(route('fishings.edit', $fishing->id)); ?>">Edytuj</a></button>
                    <?php endif; ?>
                    <?php if(session('user')=='admin'): ?>
                        <form action="<?php echo e(route('fishings.destroy', $fishing->id)); ?>" method="post">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button class="u" type="submit" onclick="return confirm('Czy usunąć ten wpis?')">Usuń</button>
                        </form>
                    <?php endif; ?>
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
</html><?php /**PATH D:\zawodowe\php\projektog\resources\views/fishings/index.blade.php ENDPATH**/ ?>