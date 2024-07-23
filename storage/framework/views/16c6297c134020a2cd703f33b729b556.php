<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>
    </head>
    <body>
    <form method="POST" action="/">
        <?php echo csrf_field(); ?>
        <h3>Загрузить таблицу</h3>
        <input type="file" name="table">
        <input type="submit" value="Загрузить">
    </form>
    <?php if(isset($isLoaded)): ?>
        <h2>Файл загружен!</h2>
    <?php endif; ?>
    </body>
</html>
<?php /**PATH C:\OSPanel\home\test.test\resources\views/home.blade.php ENDPATH**/ ?>