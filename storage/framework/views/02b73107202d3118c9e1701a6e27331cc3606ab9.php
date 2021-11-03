
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
                                <h4 class="header-title mb-4">All Issues Images</h4>

                            </div>
                            <div class="col-4">
                                <button class="btn btn-sm  btn-primary float-right" data-toggle="modal" data-target="#device_issue">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    New Issues
                                </button>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-hover  m-0" width="918px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Issue Name</th>
                                        <th>Issue Image</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($issues)): ?>
                                    <?php
                                    $count=1;
                                    ?>
                                    <?php $__currentLoopData = $issues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    
                                    <tr>
                                        <th scope="row"><?php echo e($count++); ?></th>
                                        <td><?php echo e($issue->IssueName); ?></td>
                                        <td><img src="<?php echo e(asset('frontend/image/Issues')); ?>/<?php echo e($issue->image); ?>" height="100" width="100"></td>
                                        <td>
                                            <i class="fas fa-edit edit"  data-toggle="modal" data-target="#issue_edit_modal_<?php echo e($issue->id); ?>"></i> 
                                            <a href="<?php echo e(url('deleteissueallimage',$issue->id)); ?>">
                                                <i class="fas fa-trash delete" style="color:red;"></i>
                                            </a>
                                        </td>
                                    </tr>

                                    <div class="modal" id="issue_edit_modal_<?php echo e($issue->id); ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Modal Issue</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="p-1">
                                                                <form action="<?php echo e(route('editissueallimage',$issue->id)); ?>" method="post">
                                                                    <?php echo csrf_field(); ?>

                                                                    <div class="form-group">
                                                                        <label for="ServiceTitle">Issue Name<span class="text-danger">*</span></label>
                                                                        <input type="text" name="IssueName" class="form-control" value="<?php echo e($issue->IssueName); ?>">
                                                                    </div>

                                                                    

                                                                    <div class="form-group">
                                                                        <label for="">Issue Image<span class="text-danger">*</span></label>
                                                                        <input type="file" name="image" >
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
<div class="modal" id="device_issue">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">Issues</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="p-1">
                            <form action="<?php echo e(route('saveissueallimage')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="form-group">
                                    <label for="DeviceName">Issue Name<span class="text-danger">*</span></label>
                                    <input type="text" name="IssueName" placeholder="Enter Issue Name" class="form-control">
                                    
                                </div>

                                <div class="form-group">
                                    <label for="ModelDescription">Issue Image<span class="text-danger">*</span></label>
                                    <input type="file" name="image">
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

<?php echo $__env->make('Dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Larvel Project\MobileRepairing\resources\views/Dashboard/Issues/issueimage.blade.php ENDPATH**/ ?>