
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
                                <h4 class="header-title mb-4">Footer Content</h4>

                            </div>
                            <div class="col-4">
                                <button class="btn btn-sm  btn-primary float-right" data-toggle="modal" data-target="#myModal">
                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                    ADD Content
                                </button>
                            </div>
                        </div>


                        <div class="table-responsive">
                            <table class="table table-hover  m-0" width="918px">
                                <thead>
                                    <tr>
                                        <th>ID</th>
                                        <th>Logo Image</th>
                                        <th>Logo Description</th>
                                        <th>Email</th>
                                        <th>Phone Number</th>
                                        <th>Address</th>
                                        <th>Description</th>
                                        <th>Action</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php if(isset($footers)): ?>
                                    <?php
                                    $count=1;
                                    ?>
                                    <?php $__currentLoopData = $footers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr>
                                        <th scope="row"><?php echo e($count++); ?></th>
                                        <td><img src="<?php echo e(asset('frontend/image/FooterImage')); ?>/<?php echo e($footer->image); ?>" height="80" width="80"></td>
                                        <td><?php echo $footer->LogoDescription; ?></td>
                                        <td><?php echo e($footer->email); ?></td>
                                        <td><?php echo e($footer->PhoneNumber); ?></td>
                                        <td><?php echo e($footer->Address); ?></td>
                                        <td><?php echo $footer->Description; ?></td>
                                        <td>
                                            <i class="fas fa-edit edit"  data-toggle="modal" data-target="#device_edit_modal_<?php echo e($footer->id); ?>"></i> 
                                            <a href="<?php echo e(route('deletefooter',$footer->id)); ?>">
                                                <i class="fas fa-trash delete" style="color:red;"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <div class="modal" id="device_edit_modal_<?php echo e($footer->id); ?>">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h4 class="modal-title">Footer Content</h4>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>
                                                <div class="modal-body">
                                                    <div class="row">
                                                        <div class="col-12">
                                                            <div class="p-1">
                                                                <form action="<?php echo e(route('editfooter',$footer->id)); ?>" method="post" enctype="multipart/form-data">
                                                                    <?php echo csrf_field(); ?>

                                                                    <div class="form-group">
                                                                        <label for="ServiceDescription">Footer Logo Image<span class="text-danger">*</span></label>
                                                                        <input type="file" name="image" parsley-trigger="change" required class="form-control" value="<?php echo e($footer->image); ?>" />
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Description">Logo Description<span class="text-danger">*</span></label>
                                                                        <textarea class="summernote" name="LogoDescription" value="<?php echo e($footer->LogoDescription); ?>"><?php echo e($footer->LogoDescription); ?></textarea>
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="ServiceTitle">Email<span class="text-danger">*</span></label>
                                                                        <input type="text" name="email" value="<?php echo e($footer->email); ?>" parsley-trigger="change" required placeholder="Enter Email" class="form-control">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="ServiceTitle">Phone Number<span class="text-danger">*</span></label>
                                                                        <input type="text" name="PhoneNumber" value="<?php echo e($footer->PhoneNumber); ?>" parsley-trigger="change" required placeholder="Enter Phone Number" class="form-control">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="ServiceTitle">Address<span class="text-danger">*</span></label>
                                                                        <input type="text" name="Address" value="<?php echo e($footer->Address); ?>" parsley-trigger="change" required placeholder="Enter Address" class="form-control">
                                                                    </div>

                                                                    <div class="form-group">
                                                                        <label for="Description">Description<span class="text-danger">*</span></label>
                                                                        <textarea class="summernote" name="Description" value="<?php echo e($footer->Description); ?>"><?php echo e($footer->Description); ?></textarea>
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
                <h4 class="modal-title">Main Page Content</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-12">
                        <div class="p-1">
                            <form action="<?php echo e(route('savefooter')); ?>" method="post" enctype="multipart/form-data">
                                <?php echo csrf_field(); ?>

                                <div class="form-group">
                                    <label for="image">Footer Logo Image<span class="text-danger">*</span></label>
                                    <input type="file" name="image" parsley-trigger="change" required class="form-control" />
                                </div>

                                <div class="form-group">
                                    <label for="Description">Logo Description<span class="text-danger">*</span></label>
                                    <textarea class="summernote" name="LogoDescription"></textarea>
                                </div>

                                <div class="form-group">
                                    <label for="ServiceTitle">Email<span class="text-danger">*</span></label>
                                    <input type="text" name="email" parsley-trigger="change" required placeholder="Enter Email" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="ServiceTitle">Phone Number<span class="text-danger">*</span></label>
                                    <input type="text" name="PhoneNumber"  parsley-trigger="change" required placeholder="Enter Phone Number" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="ServiceTitle">Address<span class="text-danger">*</span></label>
                                    <input type="text" name="Address" parsley-trigger="change" required placeholder="Enter Address" class="form-control">
                                </div>

                                <div class="form-group">
                                    <label for="Description">Description<span class="text-danger">*</span></label>
                                    <textarea class="summernote" name="Description" ></textarea>
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
<?php echo $__env->make('Dashboard.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home2/waqrhafeez/smartstation.focusdmt.com/resources/views/Dashboard/FooterContent/footercontent.blade.php ENDPATH**/ ?>