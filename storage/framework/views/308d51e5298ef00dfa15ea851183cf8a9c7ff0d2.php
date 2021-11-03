

<?php $__env->startSection('styles'); ?>
<style type="text/css">
    .pb-4{
        padding-bottom: 0.5rem!important;
    }
    .rotate {
    cursor:pointer;
    }

    .rotate:hover { 
        color:#afafaf;
        -moz-animation: spin .4s 1 linear;
        -o-animation: spin .4s 1 linear;
        -webkit-animation: spin .4s 1 linear;
        animation: spin .4s 1 linear;
    }

    @-webkit-keyframes spin {
        0% { -webkit-transform: rotate(0deg); }
        100% { -webkit-transform: rotate(359deg); }
    }

    @-moz-keyframes spin {
        0% { -moz-transform: rotate(0deg); }
        100% { -moz-transform: rotate(359deg); }
    }

    @-o-keyframes spin {
        0% { -o-transform: rotate(0deg); }
        100% { -o-transform: rotate(359deg); }
    }

    @-ms-keyframes spin {
        0% { -ms-transform: rotate(0deg); }
        100% { -ms-transform: rotate(359deg); }
    }
    @keyframes  spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(359deg); }
    }
    

.card:hover{
     transform: scale(1.05);
  box-shadow: 0 10px 20px rgba(0,0,0,.12), 0 4px 8px rgba(0,0,0,.06);
}

.slider_image{
    transition: none 0s ease 0s !important;
    text-align: inherit !important;
    line-height: 35px !important;
    border-width: 0px !important;
    margin: 0px 0px 0px 72px !important;
    padding: 0px !important;
    letter-spacing: 0px !important;
    font-weight: 600 !important;
    font-size: 20px !important;
    margin-left: 11px !important;
}

@media  screen and (min-width: 480px){
    .slider_image{
        font-size: 40px !important;
    }
}

.slider_text{
    transition: none 0s ease 0s !important;
    text-align: inherit !important;
    line-height: 35px !important;
    border-width: 0px !important;
    margin: 0px 0px 0px 72px !important;
    padding: 0px !important;
    letter-spacing: 0px !important;
    font-weight: 600 !important;
    font-size: 20px !important;
    margin-left: 11px !important;
}

@media  screen and (min-width: 480px){
    .slider_text{
        font-size: 40px !important;
    }
}

</style>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="slider-section" class="slider-section">
    <div id="revo_main_wrapper" class="rev_slider_wrapper fullwidthbanner-container m-0 p-0 bg-dark" data-alias="classic4export" data-source="gallery">
        
        <div id="vertical-bullets" class="rev_slider fullwidthabanner white vertical-tpb" data-version="5.4.1">
            <ul>
                <?php $__currentLoopData = $sliders; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $slider): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <li data-index="rs-01" data-transition="fade" data-slotamount="default" data-easein="Power100.easeIn" data-easeout="Power100.easeOut" data-masterspeed="2000" data-fsmasterspeed="1500" data-param1="01">
                    

                    <img src="<?php echo e(asset('frontend/image/Slider')); ?>/<?php echo e($slider->image); ?>"  data-kenburns="on" data-duration="15000" data-ease="Linear.easeNone" data-scalestart="100" data-scaleend="120" data-rotatestart="0" data-rotateend="0" data-offsetstart="0 0" data-offsetend="0 0" data-bgparallax="10"  data-bgfit="cover" data-bgrepeat="no-repeat" data-bgposition="center center" class="rev-slidebg" alt="slider-image" data-no-retina>
                    <div class="bg-overlay bg-black opacity-5"></div>
                    
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['-30','-30','-10','-10']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <h6 class="text-white main-font text-capitalize slider_image"><?php echo e($slider->title); ?></h6>
                    </div>
                    
                    <div class="tp-caption tp-resizeme rs-parallaxlevel-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['20','20','30','30']"
                         data-width="none" data-height="none" data-type="text"
                         data-textAlign="['center','center','center','center']"
                         data-responsive_offset="on" data-start="1000"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":2000,"to":"o:1;","delay":1500,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <a href="https://repairbook.focusdmt.com/" class="scroll btn btn-medium btn-rounded btn-blue btn-hvr-green btn-hvr-up" style="margin-top:20px;">Book Now</a>
                        </h1>
                    </div>

                    <!-- <div class="tp-caption tp-resizeme rs-parallaxlevel-3"
                         data-x="['center','center','center','center']" data-hoffset="['0','0','0','0']"
                         data-y="['middle','middle','middle','middle']" data-voffset="['100','100','110','110']"
                         data-width="none" data-height="none" data-textalign="['center','center','center','center']" data-type="text"
                         data-frames='[{"from":"y:[100%];z:0;rX:0deg;rY:0;rZ:0;sX:1;sY:1;skX:0;skY:0;opacity:0;","mask":"x:0px;y:[100%];s:inherit;e:inherit;","speed":1500,"to":"o:1;","delay":2000,"ease":"Power4.easeInOut"},{"delay":"wait","speed":1000,"to":"y:[100%];","mask":"x:inherit;y:inherit;s:inherit;e:inherit;","ease":"Power2.easeInOut"}]'>
                        <a href="<?php echo e($slider->link); ?>" class="scroll btn btn-medium btn-rounded btn-blue btn-hvr-green btn-hvr-up">Learn More</a>
                    </div> -->
                </li>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </ul>
        </div>
    </div>
    <ul class="social-icons social-icons-simple revicon white d-none d-md-block d-lg-block">
        <li class="d-table"><a href="javascript:void(0)" class="facebook_bg_hvr2"><i class="fab fa-facebook-f"></i></a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="twitter_bg_hvr2"><i class="fab fa-twitter"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="linkdin_bg_hvr2"><i class="fab fa-linkedin-in"></i> </a> </li>
        <li class="d-table"><a href="javascript:void(0)" class="instagram_bg_hvr2"><i class="fab fa-instagram"></i> </a> </li>
    </ul>
</div>

<!--<a href="#about" class="scroll-down link scroll main-font font-15 animate">Scroll Down <i class="fas fa-long-arrow-alt-down"></i></a>-->

<br>
    <div class="container">
        <div class="row">
            <div class="col-12">
                <center>
                    <h2 class="font-weight-bolder" style="text-transform: capitalize;font-family: 'Roboto',Helvetica,Arial,Lucida,sans-serif;font-weight: 700;font-size: 37px;color: #00a9e4">Book With Mobile Repair Shop Online</h2>
                <p>Get an instant price for your Device and book for free</p>
                <a href="<?php echo e(route('all_models')); ?>" class="btn btn-primary  btn-lg">Take My Device For Repair</a></center>
            </div>
        </div>
        <br>
        <div class="row">
            
            <div class="col-md-3 col-sm-12">
                <div class="about-box active center-block bg-blue wow zoomIn" data-wow-delay="500ms">
                    <div class="about-main-icon pb-4">
                        <i class="fa fa-tint fa-3x" aria-hidden="true"></i>
                    </div>
                    <p>Water Damage</p>
                </div>
            </div>
            
            <div class="col-md-3 col-sm-12">
                <div class="about-box active center-block bg-blue wow zoomIn" data-wow-delay="600ms">
                    <div class="about-main-icon pb-4">
                        <i class="fa fa-mobile-alt fa-3x" aria-hidden="true"></i>
                    </div>
                    <p>Screen Replacement</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="about-box active center-block bg-blue wow zoomIn" data-wow-delay="600ms">
                    <div class="about-main-icon pb-4">
                        <i class="fa fa-battery-half fa-3x" aria-hidden="true"></i>
                    </div>
                    <p>Battery Replacement</p>
                </div>
            </div>
            <div class="col-md-3 col-sm-12">
                <div class="about-box active center-block bg-blue wow zoomIn" data-wow-delay="600ms">
                    <div class="about-main-icon pb-4">
                        <i class="fa fa-camera fa-3x" aria-hidden="true"></i>
                    </div>
                    <p>Camera Replacement</p>
                </div>
            </div>

        </div>
    </div>
<br>

<div style="background-color: #f5f5f5;">
    <br><br>
    <div class="container">
        <div class="row wow fadeInUp" data-wow-delay="100ms">
            <div class="col-12 text-center">
                <p class="text-blue text-lg" style="text-transform: capitalize;font-family: 'Roboto',Helvetica,Arial,Lucida,sans-serif;line-height: 32px;font-weight: 700;font-size: 37px;color: #00a9e4">Device Pick-Up And Drop-Off Service</p>
            </div>
        </div>
        <br>
        <div class="row">
           <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-lg-3 col-md-12 col-sm-12 wow fadeInLeft" data-wow-delay="300ms">
                <div class="card h-100">
                    <img class="card-img-top" src="<?php echo e(asset('frontend/image/Services')); ?>/<?php echo e($service->image); ?>" alt="Card image" style="width:100%">
                    <div class="card-body">
                        <center><h5 class="card-title"><?php echo e($service->ServiceTitle); ?></h5></center>
                        <p style="text-align: justify;"><?php echo $service->ServiceDescription; ?></p>
                    </div>
                </div>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
        <br>
    </div>
</div>
<br><br>
<div class="container">
    <div class="row">
        
        <div class="col-12">
            <h1 style="text-align:center;font-family:Arial,sans-serif;font-size: 30px;padding-bottom: 10px;color: #333;font-weight: 500;line-height: 1em;">iPhone, iPad & Mobile Phone Repair Services Australia</h1>
            <?php if(isset($mainpages)): ?>
            <?php $__currentLoopData = $mainpages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $mainpage): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <p style="text-align:center;padding-bottom: 1em;">
                <?php echo $mainpage->Description; ?>

            </p>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            <?php endif; ?>
            
        </div>
        <?php if(isset($repairs)): ?>
        <?php $__currentLoopData = $repairs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $repair): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div class="col-md-4 col-sm-12">
            <div class="about-box active center-block bg-blue wow zoomIn" data-wow-delay="500ms">
                <div class="about-main-icon pb-4 rotate">
                    <img src="<?php echo e(asset('frontend/image/RepairService')); ?>/<?php echo e($repair->image); ?>" height="120" width="120"/>
                </div>
                <h3 style="color: #00A9E4;font-weight: 700;text-transform: uppercase;font-size: 18px;"><?php echo e($repair->ServiceName); ?></h3>
                <p><?php echo $repair->ServiceDetail; ?></p>
            </div>
            <br>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <?php endif; ?>
    </div> 
</div>
<br><br>
<div class="container">
    <div class="row">
        <div class="col-12">
            <h1 style="font-family: 'Roboto',Helvetica,Arial,Lucida,sans-serif;text-align:center;font-weight: 700;font-size: 37px;color: #00a9e4!important;line-height: .8em;">Phone Mail In Service To All Across Australia</h1>
        </div><br><br>
        <div class="col-lg-2 col-sm-12">
            <a href="<?php echo e(route('apple_device')); ?>" type="button" class="btn" style="background-color: #00a9e4!important;color: white;width: 200px;max-width: 100%;border-color: rgba(0,0,0,0);border-radius: 50px;">Sydeny</a>
            <br><br>
        </div>
        <div class="col-lg-2 col-sm-12">
            <a href="<?php echo e(route('apple_device')); ?>" type="button" class="btn" style="background-color: #00a9e4!important;color: white;width: 200px;max-width: 100%;border-color: rgba(0,0,0,0);border-radius: 50px;">Melbourne</a>
            <br><br>        
        </div>
        <div class="col-lg-2 col-sm-12">
            <a href="<?php echo e(route('apple_device')); ?>" type="button" class="btn" style="background-color: #00a9e4!important;color: white;width: 200px;max-width: 100%;border-color: rgba(0,0,0,0);border-radius: 50px;">Brisbane</a>
            <br><br>
        </div>
        <div class="col-lg-2 col-sm-12">
            <a href="<?php echo e(route('apple_device')); ?>" type="button" class="btn" style="background-color: #00a9e4!important;color: white;width: 200px;max-width: 100%;border-color: rgba(0,0,0,0);border-radius: 50px;">Newcastle</a>
            <br><br>
        </div>
        <div class="col-lg-2 col-sm-12">
            <a href="<?php echo e(route('apple_device')); ?>" type="button" class="btn" style="background-color: #00a9e4!important;color: white;width: 200px;max-width: 100%;border-color: rgba(0,0,0,0);border-radius: 50px;">Canberra</a>
            <br><br>
        </div>
        <div class="col-lg-2 col-sm-12">
            <a href="<?php echo e(route('apple_device')); ?>" type="button" class="btn" style="background-color: #00a9e4!important;color: white;width: 200px;max-width: 100%;border-color: rgba(0,0,0,0);border-radius: 50px;">Perth</a>
            <br><br>
        </div>
        <div class="col-lg-2 col-sm-12">
            <a href="<?php echo e(route('apple_device')); ?>" type="button" class="btn" style="background-color: #00a9e4!important;color: white;width: 200px;max-width: 100%;border-color: rgba(0,0,0,0);border-radius: 50px;">Logan City</a>
            <br><br>
        </div>
        <div class="col-lg-2 col-sm-12">
            <a href="<?php echo e(route('apple_device')); ?>" type="button" class="btn" style="background-color: #00a9e4!important;color: white;width: 200px;max-width: 100%;border-color: rgba(0,0,0,0);border-radius: 50px;">Mackay</a>
            <br><br>
        </div>
        <div class="col-lg-2 col-sm-12">
            <a href="<?php echo e(route('apple_device')); ?>" type="button" class="btn" style="background-color: #00a9e4!important;color: white;width: 200px;max-width: 100%;border-color: rgba(0,0,0,0);border-radius: 50px;">Cairns</a>
            <br><br>
        </div>
        <div class="col-lg-2 col-sm-12">
            <a href="<?php echo e(route('apple_device')); ?>" type="button" class="btn" style="background-color: #00a9e4!important;color: white;width: 200px;max-width: 100%;border-color: rgba(0,0,0,0);border-radius: 50px;">Parramatta</a>
            <br><br>
        </div>
        <div class="col-lg-2 col-sm-12">
            <a href="<?php echo e(route('apple_device')); ?>" type="button" class="btn" style="background-color: #00a9e4!important;color: white;width: 200px;max-width: 100%;border-color: rgba(0,0,0,0);border-radius: 50px;">Gold Coast</a>
            <br><br>
        </div>
        <div class="col-lg-2 col-sm-12">
            <a href="<?php echo e(route('apple_device')); ?>" type="button" class="btn" style="background-color: #00a9e4!important;color: white;width: 200px;max-width: 100%;border-color: rgba(0,0,0,0);border-radius: 50px;">Ballarat</a>
            <br><br>
        </div>
    </div>
</div>
<br><br>
<!-- <section class="about" id="about">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 wow fadeInLeft" data-wow-delay="300ms">
                <p class="text-blue font-weight-200 font-20">Basic Info about company</p>
                <h1 class="main-font font-weight-600 text-black">Corporate Finance<span>and <span class="text-green js-rotating">Developed,Investment</span></span> <span>Agency in NewYork</span></h1>
            </div>

            <div class="col-12 col-lg-6 m-ipad wow fadeInRight" data-wow-delay="300ms">
                <div class="ml-md-4 pl-md-2 font-weight-200 text-grey font-18">
                    <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. Nam porttitor justo sed mi finibus, vel tristique risus faucibus. </p>
                    <p>Curabitur mollis bibendum luctus. Duis suscipit vitae dui sed suscipit. Vestibulum auctor nunc vitae diam eleifend, in maximus metus sollicitudin. Quisque vitae sodales lectus. </p>
                </div>
            </div>
        </div>
        
        <div class="row about-margin">
            
            <div class="col-md-4 col-sm-12">
                <div class="about-box center-block bg-green wow zoomIn" data-wow-delay="400ms">
                    <div class="about-main-icon pb-4">
                        <i class="fa fa-lightbulb" aria-hidden="true"></i>
                    </div>
                    <h5>We have some investment<span> ideas for you.</span></h5>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-12">
                <div class="about-box active center-block bg-blue wow zoomIn" data-wow-delay="500ms">
                    <div class="about-main-icon pb-4">
                        <i class="fa fa-briefcase" aria-hidden="true"></i>
                    </div>
                    <h5>Your business is our <span>top priority.</span></h5>
                </div>
            </div>
            
            <div class="col-md-4 col-sm-12">
                <div class="about-box center-block bg-green wow zoomIn" data-wow-delay="600ms">
                    <div class="about-main-icon pb-4">
                        <i class="fa fa-grin-hearts" aria-hidden="true"></i>
                    </div>
                    <h5>We love our valued <span> customers.</span></h5>
                </div>
            </div>
        </div>
        
        <div class="d-flex justify-content-center wow bounceInLeft" data-wow-delay="300ms">
            <img src="corporate-finance/images/about-plant.jpg" alt="About-Us Plant">
        </div>
    </div>
</section> -->



<!-- <section class="half-section p-0 stats-bg">
    <h2 class="d-none">heading</h2>
    <div class="container-fluid">
        <div class="row align-items-center">
            <div class="col-lg-6 col-md-12 p-0 order-1 order-md-2">
                <div class="owl-carousel owl-theme owl-split">
                    
                    <div class="item">
                        <div class="hover-effect">
                            <img alt="blog" src="corporate-finance/images/team-img1.jpg" class="team-img">
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="hover-effect">
                            <img alt="blog" src="corporate-finance/images/team-img2.jpg" class="team-img">
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="hover-effect">
                            <img alt="blog" src="corporate-finance/images/team-img3.jpg" class="team-img">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="skill-box">
                    <div class="main-title mb-5 text-center text-lg-left main-title wow fadeIn" data-wow-delay="300ms">
                        <p class="font-weight-200 font-20 text-white">Check Our Skills</p>
                        <h2 class="margin-top main-font font-40 font-weight-normal text-white">We have best financial <span class="d-block mt-1">skilled team.</span></h2>
                    </div>
                    <ul class="text-left">
                        
                        <li class="custom-progress text-white">
                            <h6 class="font-16 mb-0 text-capitalize">Business Consulting <span class="float-right"><b class="numscroller">85</b>%</span></h6>

                            <div class="progress">
                                <div class="progress-bar blue-bar progress-bar-striped" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>
                        
                        <li class="custom-progress text-white">
                            <h6 class="font-16 mb-0 text-capitalize">Financial Advising<span class="float-right"><b class="numscroller">68</b>%</span></h6>

                            <div class="progress">
                                <div class="progress-bar green-bar progress-bar-striped" role="progressbar" aria-valuenow="65" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>
                        
                        <li class="custom-progress text-white">
                            <h6 class="font-16 mb-0 text-capitalize">Brand Consulting <span class="float-right"><b class="numscroller">85</b>%</span></h6>

                            <div class="progress">
                                <div class="progress-bar blue-bar progress-bar-striped" role="progressbar" aria-valuenow="85" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>
                        
                        <li class="custom-progress mb-0 text-white">
                            <h6 class="font-16 mb-0">Strategic Consulting<span class="float-right"><b class="numscroller">95</b>%</span></h6>

                            <div class="progress">
                                <div class="progress-bar green-bar progress-bar-striped" role="progressbar" aria-valuenow="95" aria-valuemin="0" aria-valuemax="100">
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section id="portfolio" class="padding">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="title text-center pb-5 wow fadeInUp" data-wow-delay="100ms">
                    <p class="text-green font-weight-200 font-20">Basic Info about work</p>
                    <h1 class="main-font font-weight-600 text-black">Our Valued Customers</h1>
                    <p class="margin-top font-16 alt-font font-weight-normal text-grey">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus in velit dolor.<span class="d-block"> Vivamus gravida, neque nec interdum cursus, erat ligula</span>.</p>
                </div>
                <div class="pointer nav nav-pills mb-4 mb-md-4 d-flex justify-content-center filtering">
                    <span data-filter="*" class="nav-link active">All</span>
                    <span class="nav-link" data-filter=".Agencies">Agencies</span>
                    <span class="nav-link" data-filter=".Business">Clinical</span>
                    <span class="nav-link" data-filter=".Personal">Personal</span>
                    <span class="nav-link" data-filter=".Medical">Medical</span>
                </div>

                <ul class="da-thumbs gallery">
                    
                    <li class="items Business Medical Agencies">
                        <img src="corporate-finance/images/portfolio-img1.jpg" alt="img">
                        <a href="corporate-finance/images/portfolio-img1.jpg" class="text-center" data-fancybox="images">
                            <div class="overlay">
                                <div>
                                    <div class="search-icon"><i class="fa fa-search"></i></div>
                                    <h4 class="">Hudson Lee</h4>
                                    <span>New York, USA</span>
                                </div>
                            </div>
                        </a>
                    </li>

                    
                    <li class="items Business Medical Agencies">
                        <img src="corporate-finance/images/portfolio-img2.jpg" alt="img">
                            <a href="corporate-finance/images/portfolio-img2.jpg" class="text-center" data-fancybox="images">
                                <div class="overlay">
                                    <div>
                                        <div class="search-icon"><i class="fa fa-search"></i></div>
                                        <h4 class="">Will Smith</h4>
                                        <span>New York, USA</span>
                                    </div>
                                </div>
                            </a>
                    </li>

                    
                    <li class="items Personal Business">
                        <img src="corporate-finance/images/portfolio-img3.jpg" alt="img">
                            <a href="corporate-finance/images/portfolio-img3.jpg" class="text-center" data-fancybox="images">
                                <div class="overlay">
                                    <div>
                                        <div class="search-icon"><i class="fa fa-search"></i></div>
                                        <h4 class="">Steve Smith</h4>
                                        <span>New York, USA</span>
                                    </div>
                                </div>
                            </a>
                    </li>

                    <li class="items Medical Personal">
                        <img src="corporate-finance/images/portfolio-img4.jpg" alt="img">
                            <a href="corporate-finance/images/portfolio-img4.jpg" class="text-center" data-fancybox="images">
                                <div class="overlay">
                                    <div>
                                        <div class="search-icon"><i class="fa fa-search"></i></div>
                                        <h4 class="">Janey Woods</h4>
                                        <span>New York, USA</span>
                                    </div>
                                </div>
                            </a>
                    </li>

                   
                    <li class="items Medical Agencies">
                        <img src="corporate-finance/images/portfolio-img5.jpg" alt="img">
                            <a href="corporate-finance/images/portfolio-img5.jpg" class="text-center" data-fancybox="images">
                                <div class="overlay">
                                    <div>
                                        <div class="search-icon"><i class="fa fa-search"></i></div>
                                        <h4 class="">Paul Jackson</h4>
                                        <span>New York, USA</span>
                                    </div>
                                </div>
                            </a>
                    </li>

                    <li class="items Business surgery Medical">
                        <img src="corporate-finance/images/portfolio-img6.jpg" alt="img">
                            <a href="corporate-finance/images/portfolio-img6.jpg" class="text-center" data-fancybox="images">
                                <div class="overlay">
                                    <div>
                                        <div class="search-icon"><i class="fa fa-search"></i></div>
                                        <h4 class="">Eva Marie</h4>
                                        <span>New York, USA</span>
                                    </div>
                                </div>
                            </a>
                    </li>
                </ul>
                <div class="text-center pt-5">
                    <a href="corporate-finance/standalone.html" class="btn btn-large btn-rounded btn-green btn-hvr-up btn-hvr-blue">View More Portfolio</a>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="pt-0 padding-bottom">
    <h2 class="d-none">hidden</h2>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                
                <div class="owl-carousel partners-slider">
                    
                    <div class="logo-item"><img alt="client-logo" src="corporate-finance/images/client-1.png"></div>
                    
                    <div class="logo-item"><img alt="client-logo" src="corporate-finance/images/client-1.png"></div>
                    
                    <div class="logo-item"><img alt="client-logo" src="corporate-finance/images/client-1.png"></div>
                    
                    <div class="logo-item"><img alt="client-logo" src="corporate-finance/images/client-1.png"></div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section class="parallax-img parallax">
    <div class="container">
        <div class="row">
            <div class="col-12 col-lg-6 offset-lg-3">
                
                <div id="testimonial-carousal" class="owl-carousel owl-theme testimonial-owl text-center wow fadeIn" data-wow-delay="300ms">
                    
                    <div class="item">
                        <div class="icon-quotes mb-4">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="description">
                            <p class="text-white paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus. </p>
                        </div>
                        <div class="testimonial-img mt-4">
                            <img src="corporate-finance/images/testimonial-1.png" alt="student img">
                        </div>
                        <div class="testimonial-tittle mt-3 mb-3">
                            <h3 class="mb-0 text-white alt-font font-weight-normal font-24">Sara Jones</h3>
                        </div>
                    </div>

                    
                    <div class="item">
                        <div class="icon-quotes mb-4">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="description">
                            <p class="text-white paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus. </p>
                        </div>
                        <div class="testimonial-img mt-4">
                            <img src="corporate-finance/images/testimonial-2.png" alt="student img">
                        </div>
                        <div class="testimonial-tittle mt-3 mb-3">
                            <h3 class="mb-0 text-white alt-font font-weight-normal font-24">Trixly Wanders</h3>
                        </div>
                    </div>

                    
                    <div class="item">
                        <div class="icon-quotes mb-4">
                            <i class="fas fa-quote-right"></i>
                        </div>
                        <div class="description">
                            <p class="text-white paragraph">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce vitae egestas mi, vel dapibus diam. Mauris malesuada, nisl non rutrum commodo, sem magna laoreet tellus, eu euismod dolor enim et mi. In at tempor purus. </p>
                        </div>
                        <div class="testimonial-img mt-4">
                            <img src="corporate-finance/images/testimonial-3.png" alt="student img">
                        </div>
                        <div class="testimonial-tittle mt-3 mb-3">
                            <h3 class="mb-0 text-white alt-font font-weight-normal font-24">Steve Austin</h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- <section class="half-section p-0 blog" id="blog">
    <h2 class="d-none">heading</h2>
    <div class="container-fluid">
        <div class="row align-items-center blog-bg">
            <div class="col-lg-6 col-md-12 p-0 order-1 order-md-2">
                <div class="owl-carousel owl-theme owl-split">
                    
                    <div class="item">
                        <div class="hover-effect">
                            <img alt="blog" src="corporate-finance/images/blog-im3.jpg" class="team-img">
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="hover-effect">
                            <img alt="blog" src="corporate-finance/images/blog-im1.jpg" class="team-img">
                        </div>
                    </div>
                    
                    <div class="item">
                        <div class="hover-effect">
                            <img alt="blog" src="corporate-finance/images/blog-im2.jpg" class="team-img">
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-12">
                <div class="align-items-center pc-0 px-md-5 skill-box">
                    <div class="main-title mb-5 text-center text-lg-left wow fadeIn" data-wow-delay="300ms">
                        <p class="text-green font-weight-200 font-20">News & Blogs</p>
                        <h1 class="main-font font-weight-600 text-black margin-top">Your Finance Guide</h1>
                        <p class="font-15 alt-font font-weight-normal text-grey margin-top">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmodt temp to the incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis a nostr a exercitation ullamco laboris nisi ut aliquip.</p>
                        <a href="corporate-finance/blog.html" class="mt-3 btn btn-medium btn-rounded btn-blue btn-hvr-up btn-hvr-green">Read Blog</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section> -->

<!-- <section id="contact" class="contact-sec">
    <div class="container">
        
        <div class="row">
            <div class="col-12 col-md-8 offset-md-2 text-center">
                <p class="text-blue font-weight-200 font-20">How to reach us</p>
                <h1 class="main-font font-weight-600 text-black">Let’s Get in Touch</h1>
            </div>
        </div>

        
        <div class="row">
            <div class="col-12 col-lg-6 contact-details text-md-left">
                <div class="font-15 alt-font light-grey text-center text-lg-left">
                    West is not just about graphic design; it's more than that. We offer integral communication services, and we're responsible for our process and results. We thank each client and their projects.
                </div>
                <div class="row mt-5 wow fadeIn" data-wow-delay="200ms">
                    
                    <div class="col-12 col-md-6 text-center text-lg-left">
                        <h4 class="main-font text-blue font-16 font-weight-600">Our Address</h4>
                        <p class="alt-font font-14 light-grey mt-3">123 Stree New York City , United States Of America. </p>
                    </div>
                    
                    <div class="col-12 col-md-6 pt-5 pt-md-0 wow fadeIn text-center text-lg-left" data-wow-delay="400ms">
                        <h4 class="main-font text-blue font-16 font-weight-600">Our Phone</h4>
                        <p class="alt-font font-14 light-grey mt-3">Office Telephone : 001 01085379709 Mobile : 001 63165370895 </p>
                    </div>
                </div>

                <div class="row mt-5">
                    
                    <div class="col-12 col-md-6 wow fadeIn text-center text-lg-left" data-wow-delay="600ms">
                        <h4 class="main-font text-blue font-16 font-weight-600">Our Email</h4>
                        <p class="alt-font font-14 light-grey mt-3">Main Email : admin@website.com Inquiries : email@website.com </p>
                    </div>
                    
                    <div class="col-12 col-md-6 pt-5 pt-md-0 wow fadeIn text-center text-lg-left" data-wow-delay="800ms">
                        <h4 class="main-font text-blue font-16 font-weight-600">Our Support</h4>
                        <p class="alt-font font-14 light-grey mt-3">Main Support : info@website.com Sales : support@website</p>
                    </div>
                </div>
            </div>

            <div class="col-12 col-lg-6 contact-form-box">
                <form class="contact-form" id="contact-form-data">
                    <div class="row">
                        
                        <div class="col-12">
                            <div class="col-sm-12 px-0" id="result"></div>
                        </div>

                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="First Name:" required="" id="first_name" name="firstName">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="text" placeholder="Last Name:" required="" id="last_name" name="lastName">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="email" placeholder="Email:" required="" id="email" name="userEmail">
                            </div>
                        </div>
                        <div class="col-12 col-md-6">
                            <div class="form-group">
                                <input class="form-control" type="tel" placeholder="Phone:" id="phone" name="userPhone">
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-group">
                                <textarea class="form-control" placeholder="Message" id="message" name="userMessage"></textarea>
                            </div>
                        </div>
                        <div class="col-12">
                            <button type="button" class="btn btn-large green-long-btn rounded-pill w-100 btn-hvr-up btn-hvr-blue mt-4 contact_btn" id="submit_btn">SUBMIT REQUEST</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section> -->
<section id="map" class="p-0">
    <div class="row">
        <div class="col-12">
            <div class="mapouter">
                <div class="gmap_canvas">
                    <iframe class="map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3333.9674103770367!2d-111.89998968532109!3d33.31966746342612!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMzPCsDE5JzEwLjgiTiAxMTHCsDUzJzUyLjEiVw!5e0!3m2!1sen!2s!4v1573716071790!5m2!1sen!2s" width="600" height="450" style="border:0;" allowfullscreen=""></iframe>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('Frontend.layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\focus\MobileRepairing\resources\views/Frontend/index.blade.php ENDPATH**/ ?>