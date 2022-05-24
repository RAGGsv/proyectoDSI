<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title><?php echo $__env->yieldContent('title'); ?> - Aplicación para gestión de materiales</title>

    <!-- Tailwind CSS Link -->
    <link rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.0.1/tailwind.min.css">

    <!-- Fontawesome Link -->
    <link href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" rel="stylesheet">

  </head>
  <body class="bg-gray-100 text-gray-800">

    <nav class="flex py-5 bg-indigo-500 text-white">
        <div class="w-1/2 px-12 mr-auto">
            <p class = "text-2xl font bold">
                SGESM | DSI115 | GRUPO 2.4
            </p>
        </div>
        <ul class="w-1/2 px-16 ml-auto flex justify-end pt-1">
        <?php if(auth()->check()): ?>
            <li class="mx-3">
               <p class="text-xl">Bienvenido, <b><?php echo e(auth()->user()->name); ?></b></p>
            </li>
            <li class="mx-3">
                <a href="<?php echo e(route('login.destroy')); ?>" class="font-bold hover:bg-red-600 py-3 px-4 rounded-md bg-red-500">Cerrar Sesión</a>
            </li>
        <?php else: ?>
            <li class="mx-3">
                <a href="<?php echo e(route('login.index')); ?>" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md border-2 border-white">Inicio de Sesión</a>
            </li>
            <li class="mx-3">
                <a href="<?php echo e(route('register.index')); ?>" class="font-semibold hover:bg-indigo-700 py-3 px-4 rounded-md border-2 border-white">Registro de Usuarios</a>
            </li>
        <?php endif; ?>
        </ul>
    </nav>

      <?php echo $__env->yieldContent('content'); ?>
  </body>
</html>
<?php /**PATH C:\xampp\htdocs\DSI\resources\views/layouts/app.blade.php ENDPATH**/ ?>