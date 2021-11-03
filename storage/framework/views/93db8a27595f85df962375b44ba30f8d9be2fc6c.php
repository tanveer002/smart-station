<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta content="" name="description" />
    <meta content="Coderthemes" name="author" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    
    <link rel="shortcut icon" href="<?php echo e(asset('frontend/image/logo.jpg')); ?>">


    <link href="<?php echo e(asset('admin/assets/css/bootstrap.min.css')); ?>" rel="stylesheet" type="text/css" id="bootstrap-stylesheet" />
    <link href="<?php echo e(asset('admin/assets/css/icons.min.css')); ?>" rel="stylesheet" type="text/css" />
    <link href="<?php echo e(asset('admin/assets/css/app.min.css')); ?>" rel="stylesheet" type="text/css" id="app-stylesheet" />

   
    
    <?php echo $__env->yieldContent('styles'); ?>

</head>

<body>

    <!-- Begin page -->
    <div id="wrapper">

        
        <!-- Topbar Start -->
        <?php echo $__env->make('Dashboard.layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end Topbar --> 
        
        <!-- ========== Left Sidebar Start ========== -->
        <?php echo $__env->make('Dashboard.layouts.side_bar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
            <!-- Left Sidebar End -->

        <!-- ============================================================== -->
        <!-- Start Page Content here -->
        <!-- ============================================================== -->

        <?php echo $__env->yieldContent('content'); ?>

        <!-- ============================================================== -->
        <!-- End Page content -->
        <!-- ============================================================== -->
        <?php echo $__env->make('Dashboard.layouts.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <!-- END wrapper -->

    <!-- Right Sidebar -->
   
    <!-- /Right-bar -->

    <!-- Right bar overlay-->
    

    
    <script src="<?php echo e(asset('admin/assets/js/vendor.min.js')); ?>"></script>

    <script src="<?php echo e(asset('admin/assets/libs/morris-js/morris.min.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/libs/raphael/raphael.min.js')); ?>"></script>

    <script src="<?php echo e(asset('admin/assets/js/pages/dashboard.init.js')); ?>"></script>
    <script src="<?php echo e(asset('admin/assets/js/app.min.js')); ?>"></script>
    <?php echo $__env->yieldContent('scripts'); ?>

</body>

</html><?php /**PATH /var/www/smart-station.com/resources/views/Dashboard/layouts/app.blade.php ENDPATH**/ ?>