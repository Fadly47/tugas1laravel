<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
</head>
<body>
    <h1>Selamat datang di Booksales</h1>

    <?php $__currentLoopData = $books; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <ul>
        <li><?php echo e($item['title']); ?></li>
        <li><?php echo e($item['description']); ?></li>
        <li><?php echo e($item['price']); ?></li>
        <li><?php echo e($item['stock']); ?></li>
    </ul>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
</body>
</html><?php /**PATH C:\Users\guagr\booksales-api\resources\views/books.blade.php ENDPATH**/ ?>