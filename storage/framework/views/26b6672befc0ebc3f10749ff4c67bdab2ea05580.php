<?php $__env->startSection('styles'); ?>
<style type="text/css">
	.box {
	  width: 200px;
	  height: 200px;
	  border: 1px solid blue;
	  box-sizing: border-box;
	}
	.tp-bullet-inner
	{
		display: none;
	}
	.et_pb_text_0 {
	    font-weight: 700;
	    font-size: 27px;
	    background-image: linear-gradient(
	90deg
	,#00AFF2 30%,#ffffff 100%);
	    padding-top: 8px!important;
	    padding-right: 8px!important;
	    padding-bottom: 0px!important;
	    padding-left: 8px!important;
	    margin-bottom: 15px!important;
	}
	.et_pb_text_0.et_pb_text {
	    color: #ffffff!important;
	}

	.et_pb_text_1 {
	    background-image: linear-gradient(
	90deg
	,#00AFF2 30%,#ffffff 100%);
	    padding-top: 8px!important;
	    padding-right: 8px!important;
	    padding-left: 8px!important;
	    margin-bottom: 15px!important;
	}
	.et_pb_text>:last-child {
	    padding-bottom: 0;
	}
	.et_pb_text_inner {
	    position: relative;
	}
	.et_pb_text_1 h2 {
	    font-weight: 700;
	    text-transform: uppercase;
	    color: #ffffff!important;
	    text-align: center;
		padding-bottom: 4px;
	}
	.image:hover {
	  animation: shake 0.5s;
	  animation-iteration-count: infinite;
	}

	@keyframes  shake {
	  0% { transform: translate(1px, 1px) rotate(0deg); }
	  10% { transform: translate(-1px, -2px) rotate(-1deg); }
	  20% { transform: translate(-3px, 0px) rotate(1deg); }
	  30% { transform: translate(3px, 2px) rotate(0deg); }
	  40% { transform: translate(1px, -1px) rotate(1deg); }
	  50% { transform: translate(-1px, 2px) rotate(-1deg); }
	  60% { transform: translate(-3px, 1px) rotate(0deg); }
	  70% { transform: translate(3px, 1px) rotate(-1deg); }
	  80% { transform: translate(-1px, -1px) rotate(1deg); }
	  90% { transform: translate(1px, 2px) rotate(0deg); }
	  100% { transform: translate(1px, -2px) rotate(-1deg); }
	}
	section{
		padding-top: 7.5rem;
	    padding-right: 0px;
	    padding-bottom: 1rem;
	    padding-left: 0px;
	}
	.repairbutton{
		background-color: #00a9e4;
		color: white;
		border-width: 0px!important;
		border-color: rgba(0,0,0,0);
		border-radius: 4px;
		border-top-left-radius: 4px;
		border-top-right-radius: 4px;
		border-bottom-right-radius: 4px;
		border-bottom-left-radius: 4px;
		font-size: 13px;
		font-family: 'Roboto',Helvetica,Arial,Lucida,sans-serif!important;
		font-weight: 700!important;text-transform: uppercase!important;
	}
	.issueimage {
  		transition: transform .7s ease-in-out;
	}
	.issueimage:hover {
  		transform: rotate(360deg);
	}
</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<br>
<section class="mb-0">
	<div class="container">
		<div class="row">
			<div class="col-12">
				<div class="et_pb_column et_pb_column_4_4 et_pb_column_0 et_pb_css_mix_blend_mode_passthrough et-last-child">
					<div class="et_pb_module et_pb_text et_pb_text_0 et_pb_text_align_left et_pb_bg_layout_light">
						<div class="et_pb_text_inner">
							<h1><?php echo e($modelDetials->ModelName); ?>&nbsp;</h1>
						</div>
					</div>
				</div>
			</div>
			<br>
			<?php $__currentLoopData = $issues; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $issue): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
			<div class="col-md-3 col-sm-12">
	            <img class="image"  src="<?php echo e(asset('frontend/image/IssuePage')); ?>/<?php echo e($issue->image); ?>"/>
	        </div>
	        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
		</div>
	</div>
</section>
<div class="container">
	<div class="row">
		<div class="col-12">
	    	<div class="et_pb_column et_pb_column_4_4 et_pb_column_5 et_pb_css_mix_blend_mode_passthrough et-last-child">
	    		<div class="et_pb_module et_pb_text et_pb_text_1 et_pb_text_align_left et_pb_bg_layout_light">
	    			<div class="et_pb_text_inner">
	    				<h2>Choose Repair for  <?php echo e($modelDetials->ModelName); ?></h2>
	    			</div>
	    		</div>
	    	</div>
	    </div>
    </div>
</div>
<div class="container">
	<div class="row">
		<div class="col-md-3 col-sm-12">
			<div class="box mb-3">
				<center>
					<img src="<?php echo e(asset('frontend/broken (2).png')); ?>" width="60" height="60" class="mb-3 mt-4 issueimage" />
					<h2 style="font-weight: 700;text-transform: uppercase;font-size: 13px;color: #00A9E4;" class="mb-3">Screen and Lcd Display Replacement</h2>
					<a href="" type="button" class="btn btn-primary mb-3 repairbutton">Repair Now</a>
				</center>
			</div>
		</div>
	</div>
</div>
<br>
<div class="container">
	<div class="row">
		<div class="col-12">
			<div class="et_pb_column et_pb_column_4_4 et_pb_column_0 et_pb_css_mix_blend_mode_passthrough et-last-child">
				<div class="et_pb_module et_pb_text et_pb_text_0 et_pb_text_align_left et_pb_bg_layout_light">
					<div class="et_pb_text_inner">
						<h3>Can’t Find Repair In The List? &nbsp;</h3>
					</div>
				</div>
			</div>
			<p>if you are unable to find repair listed here for your device please click on Chat</p>
		</div>
	</div>
</div>
<br>
<div class="container">
	<div class="row">
		<div class="col-md-4 col-sm-12">
		    <div class="card">
		    	<div class="card-body">
		    		<i class="fa fa-check-circle fa-2x" style="color: #00AFF2;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px;color: #00aff2!important;line-height: 1.5em;text-align: center; ">No fix, No Charges</span>
		    	</div>
		    </div>
		</div>
		<div class="col-md-4 col-sm-12">
		    <div class="card">
		    	<div class="card-body">
		    		<i class="fa fa-check-circle fa-2x" style="color: #00AFF2;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px;color: #00aff2!important;line-height: 1.5em;text-align: center; ">No fix, No Charges</span>
		    	</div>
		    </div>
		</div>
		<div class="col-md-4 col-sm-12">
		    <div class="card">
		    	<div class="card-body">
		    		<i class="fa fa-check-circle fa-2x" style="color: #00AFF2;"></i>&nbsp;&nbsp;&nbsp;&nbsp;<span style="font-size: 20px;color: #00aff2!important;line-height: 1.5em;text-align: center; ">No fix, No Charges</span>
		    	</div>
		    </div>
		</div>
		<br>
		<p>asdfasfafafd</p>
	</div>
</div>
<br>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('scripts'); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('Frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Larvel Project\MobileRepairing\resources\views/Frontend/all_models_issues.blade.php ENDPATH**/ ?>