<!DOCTYPE html>

<html lang="es">

<head>
     <meta charset="UTF-8">
     <meta name="viewpor" content="width=device-width, initial-scale=1.0">
     <title><?php echo $__env->yieldContent('title'); ?></title>   
     <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
     <link rel="stylesheet" href="/CSS/plantilla.css">
     </head>

<body >
    <div style="background-color: #000000">
    <?php $__env->startSection('header'); ?>
    <?php echo $__env->yieldSection(); ?>
    </div>
    <?php /**PATH C:\laragon\www\practicaPintores\resources\views/includes/header.blade.php ENDPATH**/ ?>