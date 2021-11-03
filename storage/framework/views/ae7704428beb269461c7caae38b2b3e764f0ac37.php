<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-12">
                <?php if(isset($footers)): ?>
                <?php $__currentLoopData = $footers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <img src="<?php echo e(asset('frontend/image/FooterImage')); ?>/<?php echo e($footer->image); ?>" class="mb-2" style="height: 70px;width: 270px;">
                <p><?php echo $footer->LogoDescription; ?></p>
                <hr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                <?php endif; ?>
            </div>
            <div class="col-md-4 col-sm-12">
                <h3 style="color: #00aff2;">Customer Care</h3>
                <ul>
                    <li><a href=""><i class="fa fa-check" style="color: black;">&nbsp;Device Pick-up and Drop-off Service</i></a></li>
                    <li><a href=""><i class="fa fa-check" style="color: black;">&nbsp;Why Choose our repair service?</i></a></li>
                    <li><a href=""><i class="fa fa-check" style="color: black;">&nbsp;We Fix problems!</i></a></li>
                    <li><a href=""><i class="fa fa-check" style="color: black;">&nbsp;Terms and Conditions</i></a></li>
                    <li><a href=""><i class="fa fa-check" style="color: black;">&nbsp;Privacy Policy</i></a></li>
                </ul>
                <hr>
                <h3 style="color: #00aff2;" class="mb-4">Openinng Time</h3>
                <p class="mb-0"><b>Mon, Tue, Wed, Fri</b>&nbsp;&nbsp; 9:00 AM-5:00 PM</p>
                <p class="mb-0"><b>Thursday</b> <span class="ml-5">10:00 AM-5:30 PM</span></p>
                <p class="mb-0"><b>Saturday, Sunday</b>&nbsp;11:00 AM-4:00 PM</p>
                <hr>
            </div>
            <?php if(isset($footers)): ?>
            <?php $__currentLoopData = $footers; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $footer): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-4 col-sm-12">
                <h3 style="color: #00aff2;" class="mb-4">Our Repair Center</h3>
                <p class="mb-1"><i class="fa fa-map-marker"></i><b class="ml-1">Address:</b><?php echo e($footer->Address); ?></p>
                <p class="mb-1"><i class="fas fa-phone" aria-hidden="true"></i><b class="ml-1">Phone:</b><?php echo e($footer->PhoneNumber); ?></p>
                <p><i class="fa fa-envelope" aria-hidden="true"></i><b class="ml-1">Email:</b><?php echo e($footer->email); ?></p>
                <hr>
                <p><?php echo $footer->Description; ?></p>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
        </div>
        <hr>
        <div class="row align-items-center">
            <div class="col-12 text-center">
                <div class="footer-social">
                    <ul class="list-unstyled social-icons social-icons-simple">
                        <li>
                            <a class="facebook_bg_hvr2 wow fadeInUp" href="javascript:void(0)"><i class="fab fa-facebook-f" aria-hidden="true"></i> </a>
                        </li>
                        <li>
                            <a class="twitter_bg_hvr2 wow fadeInDown" href="javascript:void(0)"><i class="fab fa-twitter" aria-hidden="true"></i> </a> 
                        </li>
                        <li><a class="googleplus_bg_hvr2 wow fadeInUp" href="javascript:void(0)"><i class="fab fa-google-plus-g" aria-hidden="true"></i> </a> </li>
                        <li><a class="linkdin_bg_hvr2 wow fadeInDown" href="javascript:void(0)"><i class="fab fa-linkedin-in" aria-hidden="true"></i> </a> </li>
                        <li><a class="instagram_bg_hvr2 wow fadeInUp" href="javascript:void(0)"><i class="fab fa-instagram" aria-hidden="true"></i> </a> </li>
                        <li><a class="pintrest_bg_hvr2 wow fadeInUp" href="javascript:void(0)"><i class="fab fa-pinterest-p" aria-hidden="true"></i> </a> </li>
                    </ul>
                </div>
                <p class="company-about fadeIn">© 2021  Made  By <a href="javascript:void(0);">FocusDMT</a></p>
            </div>
        </div>
    </div>
</footer><?php /**PATH C:\focus\MobileRepairing\resources\views/Frontend/layouts/footer.blade.php ENDPATH**/ ?>