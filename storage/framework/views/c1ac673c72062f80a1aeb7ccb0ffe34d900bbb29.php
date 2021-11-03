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
                        <a href="<?php echo e(route('device.csv')); ?>" class="btn btn-success btn-sm float-right mb-3"><i class="fa fa-arrow-up" ></i>Upload CSV</a>
                        <a href="<?php echo e(route('device.export')); ?>" class="btn btn-sm  btn-danger float-right mr-3" method="post")> <i class="fa fa-arrow-down" ></i>
                            Export CSV
                        </a>
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Sr.</th>
                                    <th>Brand</th>
                                    <th>Series</th>
                                    <th>Model</th>
                                    <th>Issues</th>
                                    <th>Issues Description</th>
                                    <th>Price</th>
                                   
                                </tr>
                            </thead>
                            <tbody>
                                <?php $__currentLoopData = $issues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr> 
                                    <td>
                                        <?php echo e($loop->iteration); ?>

                                    </td>
                                    <td><?php echo e($issue->model->series->device->DeviceName); ?></td>
                                    <td><?php echo e($issue->model->series->SeriesName); ?></td>
                                    <td><?php echo e($issue->model->ModelName); ?></td>
                                    <td>
                                        <?php echo e($issue->issue_name); ?>

                                    </td>
                                    <td>
                                        <?php echo e($issue->issue_description); ?>

                                    </td>
                                    <td>
                                        <?php echo e($issue->issue_price); ?>

                                    </td>
                                    
                                </tr>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                
                            </tbody>
                          </table><?php echo e($issues->links()); ?>

                        
                       
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
    
<?php echo $__env->make('Dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/smart-station.com/resources/views/Dashboard/uploadCsv/index.blade.php ENDPATH**/ ?>