<header>
    <!--Navigation-->
    <nav class="navbar navbar-top-default navbar-expand-lg navbar-simple nav-line">
        <div class="container round-nav">
            <a href="<?php echo e(url('/')); ?>" title="Logo" class="logo scroll">
                <img src="<?php echo e(asset('frontend/image/logo.jpg')); ?>" alt="logo" class="ml-lg-3 m-0">
            </a>

            <div class="collapse navbar-collapse">
                <div class="navbar-nav ml-auto">
                    <a href="<?php echo e(url('/')); ?>" class="nav-link">Home</a>
                    <a class="nav-link" href="<?php echo e(route('apple_device')); ?>">Apple</a>
                    <a class="nav-link" href="<?php echo e(route('samsung_device')); ?>">Samsung</a>
                    <a class="nav-link" href="<?php echo e(route('sony_device')); ?>">Sony</a>
                    <a class="nav-link" href="<?php echo e(route('htc_device')); ?>">HTC</a>
                    <a class="nav-link" href="<?php echo e(route('huawei_device')); ?>">Huawei</a>
                    <a class="nav-link" href="<?php echo e(route('other_device')); ?>">Other</a>
                    <a href="http://localhost/BookMe/public/" class="btn btn-sm btn-rounded btn-green btn-hvr-up btn-hvr-blue" data-animation-duration="500" data-fancybox data-src="#animatedModal">Book Now</a>

                </div>
            </div>
        </div>

        <div class="navigation-toggle">
            <ul class="slider-social toggle-btn my-0">
                <li>
                    <a href="javascript:void(0);" class="sidemenu_btn" id="sidemenu_toggle">
                        <span></span>
                        <span></span>
                        <span></span>
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="side-menu hidden">
        <div class="mega-title" id="mega-title">
            <h2 class="inner-mega-title">Corporate Finance</h2>
        </div>

        <span id="btn_sideNavClose">
            <i class="las la-times btn-close"></i>
        </span>
        
        <div class="inner-wrapper">
            <nav class="side-nav w-100">
                <a href="<?php echo e(url('/')); ?>" title="Logo" class="logo scroll navbar-brand">
                    <img src="corporate-finance/images/logo.png" alt="logo">
                </a>
                <ul class="navbar-nav text-capitalize">
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo e(url('/')); ?>">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo e(route('apple_device')); ?>">Apple</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo e(route('samsung_device')); ?>">Samsung</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo e(route('sony_device')); ?>">Sony</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo e(route('htc_device')); ?>">HTC</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo e(route('huawei_device')); ?>">Huawei</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link scroll" href="<?php echo e(route('other_device')); ?>">Other</a>
                    </li>
                    <li class="get-started-btn">
                        <a href="" class="btn btn-medium btn-rounded btn-blue btn-hvr-green btn-hvr-up d-lg-none" data-animation-duration="500" data-fancybox data-src="#animatedModal">Get Started</a>
                    </li>
                </ul>
            </nav>

            <div class="side-footer w-100">
                <ul class="social-icons-simple">
                    <li><a class="facebook_bg_hvr2 wow fadeInLeft" href="javascript:void(0)" data-wow-delay="300ms"><i class="fab fa-facebook-f"></i> </a> </li>
                    <li><a class="instagram_bg_hvr2 wow fadeInUp" href="javascript:void(0)" data-wow-delay="500ms"><i class="fab fa-instagram"></i> </a> </li>
                    <li><a class="twitter_bg_hvr2 wow fadeInRight" href="javascript:void(0)" data-wow-delay="300ms"><i class="fab fa-twitter"></i> </a> </li>
                </ul>
                <p>&copy; </p>
            </div>
        </div>
    </div>
    
    <a id="close_side_menu" href="javascript:void(0);"></a>
    
    <div class="quote-content hidden animated-modal" id="animatedModal">
        <form class="contact-form" id="modal-contact-form-data">
            <div class="row">
                <div class="col-12" id="quote_result"></div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="quote_name" name="quoteName" placeholder="Name" required="" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_contact" name="userPhone" placeholder="Contact #" required="" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_type" name="projectType" placeholder="Project type" required="" type="text">
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="form-group">
                        <input class="form-control" id="quote_email" name="userEmail" placeholder="Email" required="" type="email">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_address" name="userAddress" placeholder="City / Country" required="" type="text">
                    </div>
                    <div class="form-group">
                        <input class="form-control" id="quote_budget" name="quoteBudget" placeholder="Budget" required="" type="text">
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-group">
                        <textarea class="form-control" id="userMessage" name="userMessage"  placeholder="Please explain your project in detail."></textarea>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="form-check">
                        <label class="checkbox-lable font-weight-200 font-16">Contact by phone is preferred
                            <input type="checkbox">
                            <span class="checkmark"></span>
                        </label>
                    </div>
                    <a href="javascript:void(0)" class="btn btn-large btn-rounded btn-green btn-hvr-up btn-hvr-blue modal_contact_btn" id="quote_submit_btn">Submit Now</a>
                </div>
            </div>
        </form>
    </div>
</header><?php /**PATH D:\Larvel Project\MobileRepairing\resources\views/Frontend/layouts/header.blade.php ENDPATH**/ ?>