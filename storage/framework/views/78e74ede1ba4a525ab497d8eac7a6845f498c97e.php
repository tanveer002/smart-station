
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
                                <h4 class="header-title mb-4">All Devices</h4>

                            </div>
                            <div class="col-4">
                                <button class="btn btn-sm  btn-primary float-right" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    ADD Device
                                </button>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-hover  m-0" width="918px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Device Name</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($devices)): ?>
                                    <?php
                                    $count=1;
                                    ?>
                                    <?php $__currentLoopData = $devices; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $device): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($count++); ?></th>
                                        <td><?php echo e($device->DeviceName); ?></td>
                                        <td>
                                            <i class="fas fa-edit edit"  data-toggle="modal" data-target="#device_edit_modal_<?php echo e($device->id); ?>"></i> 
                                            <a href="<?php echo e(route('deletedevice',$device->id)); ?>">
                                                <i class="fas fa-trash delete" style="color:red;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <div class="modal" id="device_edit_modal_<?php echo e($device->id); ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Devices</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="p-1">
                                                                <form action="<?php echo e(route('editdevice',$device->id)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>

                                                                    <div class="form-group">
                                                                        <label for="ServiceTitle">Device Name<span class="text-danger">*</span></label>
                                                                        <input type="text" name="DeviceName" value="<?php echo e($device->DeviceName); ?>" parsley-trigger="change" required placeholder="Enter Device Name" class="form-control">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="DeviceDescription">Device Description<span class="text-danger">*</span></label>
                                                                        <textarea class="summernote" name="DeviceDescription" value="<?php echo e($device->DeviceDescription); ?>"><?php echo e($device->DeviceDescription); ?></textarea>
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

<div class="modal" id="myModal">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Devices</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="p-1">
                            <form action="<?php echo e(route('savedevice')); ?>" method="post">
                                <?php echo csrf_field(); ?>

                                <div class="form-group">
                                    <label for="DeviceName">Device Name<span class="text-danger">*</span></label>
                                    <input type="text" name="DeviceName" parsley-trigger="change" required placeholder="Enter Device Name" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="DeviceDescription">Device Description<span class="text-danger">*</span></label>
                                    <textarea class="summernote" name="DeviceDescription"></textarea>
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
<?php echo $__env->make('Dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/smart-station.com/resources/views/Dashboard/Device/device.blade.php ENDPATH**/ ?>