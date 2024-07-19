<html>
    <head>
        <title>Trabajo Final Laravel</title>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    </head>
<body>
    

    <!--
    <ul>
        <li><a href="<?php echo e(route('inicio')); ?>"> INICIO </a></li>
        <li><a href="<?php echo e(route('presentacion')); ?>"> PRESENTACION </a></li>
        <li><a href="<?php echo e(route('contacto')); ?>"> CONTACTO </a></li>
    </ul>
    -->
    <nav class="navbar navbar-expand-lg bg-body-tertiary navbar bg-primary" data-bs-theme="dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('inicio')); ?>">Inicio</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="<?php echo e(route('presentacion')); ?>">Presentacion</a>
                    </li>
                    <li class="nav-item">
                    <a class="nav-link" href="<?php echo e(route('contacto')); ?>">Contacto</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div>
        <?php echo $__env->yieldContent('content'); ?>
    </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html><?php /**PATH C:\xampp\htdocs\TrabajoFinal\resources\views/layout.blade.php ENDPATH**/ ?>