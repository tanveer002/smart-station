<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('admin/assets/libs/summernote/summernote-bs4.css')); ?>" rel="stylesheet" type="text/css" id="app-stylesheet" />
<link href="<?php echo e(asset('admin/assets/libs/toastr/toastr.min.css')); ?>" rel="stylesheet" type="text/css" id="app-stylesheet" />


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="card-box">
                        <?php if(session('success')): ?>
                        <div class="alert alert-success alert-dismissible" role="alert">
                            <strong><?php echo e(session('success')); ?></strong> 
                            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                          </div>
                        <?php endif; ?>
                        
                        <form action="<?php echo e(route('csv.import')); ?>" method="POST" enctype="multipart/form-data">
                            <?php echo csrf_field(); ?>
                            <div class="row">
                                <div class="col-10">
                                    <h4 class="header-title">Import & Export CSV File</h4>
                                   
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 offset-md-2">
                                            <div class="form-group">
                                                <label for="projectinput1">Select Excel File to Upload</label>
                                                <input type="file" class="form-control" name="csv_file"
                                                accept=".csv, application/vnd.openxmlformats-officedocument.spreadsheetml.sheet, application/vnd.ms-excel""
                                                    required>
                                                <?php $__errorArgs = ['csv_file'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                <div class="text-danger">
                                                    <?php echo e($message); ?>

                                                </div>
                                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row justify-content-center">
                                        <div class="col-md-10 offset-md-2">
                                            <div class="alert alert-danger">
                                                <ol>
                                                    <li>Upload only .csv files</li>
                                                    <li>Files larger than 15Mb are not allowed</li>
                                                    <li>Download and fill in the data in the sample file below
                                                        to avoid errors</li>
                                                    <li class="mt-2">Download the sample for upload Device Issues
                                                        <a href="<?php echo e(asset('upload/deviceIssues.csv')); ?>" class="btn btn-success btn-sm">Download template
                                                        </a>
                                                    </li>
                                                </ol>
                                            </div>
                                        </div>
                                    </div><hr>
                                    <div class="col-4 float-right">
                                        <button class="btn btn-sm  btn-primary float-right" data-toggle="modal" data-target="#myModal">
                                            <i class="fa fa-plus" aria-hidden="true"></i>
                                            Upload CSV
                                        </button>
                                        <a href="<?php echo e(route('device.index')); ?>" class="btn btn-sm  btn-danger float-right mr-2"> <i class="fa fa-dismiss" ></i>
                                            cancle
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<?php $__env->stopSection(); ?>
<?php $__env->startSection('scripts'); ?>
<script src="<?php echo e(asset('admin/assets/libs/summernote/summernote-bs4.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/js/pages/form-summernote.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /Users/macbookair/www/smart-station.com/resources/views/Dashboard/uploadCsv/uploadcsv.blade.php ENDPATH**/ ?>