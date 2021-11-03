<!DOCTYPE html>
<html lang="en" class="js csstransitions">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1, shrink-to-fit=no" name="viewport">
    <meta name="author" content="Themes Industry">
    <meta name="description" content="">
    <title></title>
    <link href="<?php echo e(asset('frontend/image/logo.jpg')); ?>" rel="icon">
    <link href="<?php echo e(asset('vendor/css/bundle.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/css/LineIcons.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/css/revolution-settings.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/css/jquery.fancybox.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/css/owl.carousel.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('vendor/css/cubeportfolio.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('corporate-finance/css/navigation.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('corporate-finance/css/line-awesome.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('corporate-finance/css/style.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('toastr\toastr.css ')); ?>" rel="stylesheet">
    <?php echo $__env->yieldContent('styles'); ?>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="90">


<div class="loader-bg">
    <div class="loader"></div>
</div>

<?php echo $__env->make('Frontend.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<?php echo $__env->yieldContent('content'); ?>


<?php echo $__env->make('Frontend.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="go-top">
    <i class="fas fa-angle-up"></i><i class="fas fa-angle-up"></i></div>

    <script src="<?php echo e(asset('vendor/js/bundle.min.js')); ?>"></script>

    <script src="<?php echo e(asset('vendor/js/jquery.appear.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/jquery.fancybox.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/owl.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/parallaxie.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/wow.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/jquery.cubeportfolio.min.js')); ?>"></script>

    <script src="<?php echo e(asset('vendor/js/jquery.themepunch.tools.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/jquery.themepunch.revolution.min.js')); ?>"></script>

    <script src="<?php echo e(asset('vendor/js/morphext.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/extensions/revolution.extension.actions.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/extensions/revolution.extension.carousel.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/extensions/revolution.extension.kenburn.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/extensions/revolution.extension.layeranimation.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/extensions/revolution.extension.migration.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/extensions/revolution.extension.navigation.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/extensions/revolution.extension.parallax.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/extensions/revolution.extension.slideanims.min.js')); ?>"></script>
    <script src="<?php echo e(asset('vendor/js/extensions/revolution.extension.video.min.js')); ?>"></script>


    <script src="<?php echo e(asset('corporate-finance/js/isotope.pkgd.js')); ?>"></script>
    <script src="<?php echo e(asset('corporate-finance/js/modernizr.custom.97074.js')); ?>"></script>
    <script src="<?php echo e(asset('corporate-finance/js/jquery.hoverdir.js')); ?>"></script>

    <script src="<?php echo e(asset('vendor/js/contact_us.js')); ?>"></script>
    <script src="<?php echo e(asset('corporate-finance/js/script.js')); ?>"></script>

    <?php echo $__env->yieldContent('scripts'); ?>
</body>
</html><?php /**PATH /home2/waqrhafeez/smartstation.focusdmt.com/resources/views/Frontend/layouts/app.blade.php ENDPATH**/ ?>