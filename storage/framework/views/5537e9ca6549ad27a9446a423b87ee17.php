<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=i, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Halooo</h1>
    <p>ini adalah web author</p>

    <?php $__currentLoopData = $authors; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul>
        <li><?php echo e($item['a']); ?></li>
        <li><?php echo e($item['b']); ?></li>
        <li><?php echo e($item['c']); ?></li>
        <li><?php echo e($item['d']); ?></li>
    </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\Users\guagr\booksales-api\resources\views/authors.blade.php ENDPATH**/ ?>