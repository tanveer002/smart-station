
<?php $__env->startSection('styles'); ?>

<link href="<?php echo e(asset('admin/assets/libs/summernote/summernote-bs4.css')); ?>" rel="stylesheet" type="text/css" id="app-stylesheet" />
<link href="<?php echo e(asset('admin/assets/libs/toastr/toastr.min.css')); ?>" rel="stylesheet" type="text/css" id="app-stylesheet" />


<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>

<div class="content-page">
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-xl-12">
                    <div class="card-box">
                        <div class="row">
                            <div class="col-8">
                                <h4 class="header-title mb-4">Repair Services</h4>

                            </div>
                            <div class="col-4">
                                <button class="btn btn-sm  btn-primary float-right" data-toggle="modal" data-target="#my_Model_repair_services">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    ADD Repair Services
                                </button>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-hover  m-0" width="918px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        
                                        <th>Service Name</th>
                                        <th>Service Details</th>
                                        <th>Service Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($repairs)): ?>
                                    <?php
                                    $count=1;
                                    ?>
                                    <?php $__currentLoopData = $repairs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $repair): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <tr>
                                        <th scope="row"><?php echo e($count++); ?></th>
                                        <td><?php echo e($repair->ServiceName); ?></td>
                                        <td><?php echo $repair->ServiceDetail; ?></td>
                                        <td><img src="<?php echo e(asset('frontend/image/RepairService')); ?>/<?php echo e($repair->image); ?>" width="120" /></td>
                                        <td>
                                            <i class="fas fa-edit edit"  data-toggle="modal" data-target="#model_edit_repair_service_<?php echo e($repair->id); ?>"></i><a href="<?php echo e(url('deleterepairservice',$repair->id)); ?>">
                                                <i class="fas fa-trash delete" style="color:red;"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <div class="modal" id="model_edit_repair_service_<?php echo e($repair->id); ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Repair Service</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="p-1">
                                                                <form action="<?php echo e(route('editrepairservices',$repair->id)); ?>" method="post" enctype="multipart/form-data">
                                                                    <?php echo csrf_field(); ?>

                                                                    <div class="form-group">
                                                                        <label for="ServiceDescription">Service Name<span class="text-danger">*</span></label>
                                                                        <input type="text" name="ServiceName" value="<?php echo e($repair->ServiceName); ?>" parsley-trigger="change" required class="form-control" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="ServiceImage">Service Detail<span class="text-danger">*</span></label>
                                                                        <textarea class="summernote" name="ServiceDetail" value="<?php echo e($repair->ServiceDetail); ?>"><?php echo $repair->ServiceDetail; ?></textarea> 
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="ModelDescription">Service Icon Image<span class="text-danger">*</span></label>
                                                                        <input type="file" name="image" value="<?php echo e($repair->image); ?>" parsley-trigger="change" required class="form-control"></textarea>
                                                                    </div>

                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="modal-footer">
                                                        <button class="btn btn-primary waves-effect waves-light" type="submit" >
                                                            Update
                                                        </button>
                                                        <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endif; ?>
                                </tbody>
                            </table>

                        </div>
                    </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
<div class="modal" id="my_Model_repair_services">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Repair Services</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="p-1">
                            <form action="<?php echo e(route('saverepairservices')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="form-group">
                                    <label for="ServiceDescription">Service Name<span class="text-danger">*</span></label>
                                    <input type="text" name="ServiceName"  parsley-trigger="change" required class="form-control" />
                                </div>

                                <div class="form-group">
                                    <label for="ModelDescription">Service Detail<span class="text-danger">*</span></label>
                                    <textarea class="summernote" name="ServiceDetail" required ></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="ModelDescription">Service Icon Image<span class="text-danger">*</span></label>
                                    <input type="file" name="image"  parsley-trigger="change" required class="form-control"></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">

                    <button class="btn btn-primary waves-effect waves-light" type="submit" >
                        Submit
                    </button>

                    <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
                </div>
            </form>
        </div>
    </div>
</div>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<script src="<?php echo e(asset('admin/assets/libs/summernote/summernote-bs4.min.js')); ?>"></script>
<script src="<?php echo e(asset('admin/assets/js/pages/form-summernote.init.js')); ?>"></script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/waqrhafeez/smartstation.focusdmt.com/resources/views/Dashboard/RepairServices/repair_services.blade.php ENDPATH**/ ?>