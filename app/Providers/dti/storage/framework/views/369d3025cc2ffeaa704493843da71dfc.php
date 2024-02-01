<!DOCTYPE html>
<html>

<head>
    <?php echo $__env->make('include.header_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <title>Waqas Bhatti Learning Web</title>
</head>

<body>
    <div class="hero_area">
        <!-- header section strats -->
        <?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end header section -->
        <!-- slider section -->
        <section class="slider_section ">
            <div class="slider_bg_box">
                <img src="images/slider-bg.png" alt="">
            </div>
            <div id="customCarousel1" class="carousel slide" data-ride="carousel">
             <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1 style="color:#fff;">Welcome to Waqas Bhatti Learning</h1>

                                    <p align="justify" style="color: #fff">

                                        One Place to Learn Top Freelancing Skills and Courses. Take control of
                                        your
                                        financial destiny with the Waqas Bhatti Learning App. Join our community
                                        of
                                        successful freelancers and online entrepreneurs. Whether you're a
                                        beginner
                                        looking to start your freelancing career or an experienced.

                                    </p>
                                    <div class="btn-box">
                                        <a href="/" class="" style="color: #fff">
                                            Click Chat button
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item ">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1 style="color:#fff;">Learn to Earn
                                        Book your <br>
                                        Freelancing Course
                                    </h1>

                                    <p align="justify" style="color: #fff">

                                        Your one-stop destination for top-notch courses, invaluable insights,
                                        and live chat support to guide you through every step of your
                                        freelancing career.

                                    </p>
                                    <div class="btn-box">
                                        <a href="/courses" class="btn1" style="color: #fff">
                                            Book a Course
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="container ">
                        <div class="row">
                            <div class="col-md-7 col-lg-6 ">
                                <div class="detail-box">
                                    <h1 style="color:#fff;">Get Freelancing Jobs
                                        Start You Freelancing Carrier Today
                                    </h1>

                                    <p align="justify" style="color: #fff">
                                        Start You Freelancing Carrier Today

                                    </p>
                                    <div class="btn-box">
                                        <a href="/jobapply" class="btn1" style="color: #fff">
                                        Apply for Job </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <ol class="carousel-indicators">
                    <li data-target="#customCarousel1" data-slide-to="0" class="active"></li>
                    <li data-target="#customCarousel1" data-slide-to="1"></li>
                    <li data-target="#customCarousel1" data-slide-to="2"></li>
                </ol>
            </div>
        </div>
    </section>

    
    <section class="why_section layout_padding">
        <div class="container">
            <div class="heading_container heading_center">
                <h2 style="color: #b69d74">
                    Important Links
                </h2>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <i class="fa fa-book fa-lg"></i>
                        </div>
                        <a href="/courses">
                            <div class="detail-box">
                                <h5 style="color: #FFF">
                                    Courses
                                </h5>


                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <i class="fa  fa-tasks
                            fa-lg"></i>
                        </div>
                        <a href="/jobs">
                            <div class="detail-box">
                                <h5 style="color: #FFF">
                                    Jobs
                                </h5>


                            </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="box ">
                        <div class="img-box">
                            <i class="fa  fa-newspaper-o
                            fa-lg"></i>
                        </div>
                        <a href="/news">
                            <div class="detail-box">
                                <h5 style="color: #FFF">
                                    News
                                </h5>


                            </div>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>
    

    <div class="col-md-12 mt-2" style="background: #b69d74;">
        <div class="row">
            <div class="col-md-6">
                <a class="text-decoration-none" href="/blogs">
                    <div class="d-flex align-items-center mb-4">
                        <div class="overflow-hidden" style="width: 100px; height: 100px;">
                            <img class="img-fluid" src="img/cat-4.jpg" alt="">
                        </div>
                        <div class="flex-fill pl-3">
                            <h6 style="color: white;margin-top: 40px;font-size: 30px;margin-left: 70px;"><a
                                href="/blogs" style="color: white;"><b>English Blog</b></a></h6>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6">
                    <a class="text-decoration-none" href="/urdublogs">
                        <div class="cat-item img-zoom d-flex align-items-center mb-4">
                            <div class="overflow-hidden" style="width: 100px; height: 100px;">
                                <img class="img-fluid" src="img/cat-4.jpg" alt="">
                            </div>
                            <div class="flex-fill pl-3">
                                <h6 style="color: white;margin-top: 40px;font-size: 30px;margin-left: 150px;"><a
                                    href="/blogs" style="color: white;"><b>Urdu Blog</b></h6>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>


            </div>

            
            <div class="services_section layout_padding">
                <div class="container">
                    <h1 class="sevices_taital">Our sevices</h1>
                    <p class="ipsum_text">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam</p>
                    <div class="banner_section_2">
                        <div class="row">
                            <div class="col-lg-4 col-sm-12" style="padding: 5px;">
                                <div class="custom-card">
                                    <div class="card-img">
                                        <img src="images/icon-1.png" alt="Card image" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Study Abroad</h4>
                                        <p class="card-text" style="color: #fff;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <div class="read-more-btn">
                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12" style="padding: 5px;">
                                <div class="custom-card">
                                    <div class="card-img">
                                        <img src="images/icon-2.png" alt="Card image" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title active">Preparations Service</h4>
                                        <p class="card-text" style="color: #fff;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <div class="read-more-btn">
                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4 col-sm-12" style="padding: 5px;">
                                <div class="custom-card">
                                    <div class="card-img">
                                        <img src="images/icon-3.png" alt="Card image" class="img-fluid">
                                    </div>
                                    <div class="card-body">
                                        <h4 class="card-title">Language Classes</h4>
                                        <p class="card-text" style="color: #fff;">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.
                                        </p>
                                        <div class="read-more-btn">
                                            <a href="#" class="btn btn-primary">Read More</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>



                </div>
            </div>
            

            
            <div class="services_section layout_padding">
                <div class="container">
                    <h1 class="sevices_taital">
                        Book your Freelancing Course
                    </h1>
                    <p class="ipsum_text">Learn to Earn Your one-stop destination for top-notch courses, invaluable insights,
                        and live chat
                    support to guide you through every step of your freelancing career.</p>
                    <div class="banner_section_2">
                        <div class="row">

                            <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                            <div class="col-lg-4 col-sm-12" style="padding:5px">

                                <div class="card">
                                    <img class="card-img-top" src="/uploads/courses/<?php echo e($course->pic); ?>" alt="Card image" style="height:200px;">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?php echo strlen(strip_tags($course->title)) > 20 ?
                                            substr(strip_tags($course->title),
                                            0,
                                            20) . '...' : $course->title; ?>

                                        </h5>
                                        <p class="card-text">
                                            <?php echo strlen(strip_tags($course->detail)) > 27 ?
                                            substr(strip_tags($course->detail), 0,
                                            27) . '...' : $course->detail; ?>

                                        </p>
                                        <div class="row text-center">
                                          <div class="col-6">
                                            <a href="/course/<?php echo e($course->slug); ?>" class="btn btn-primary">Read More</a>
                                        </div>

                                        <div class="col-6">
                                            <a href="/bookcourse/<?php echo e($course->courses_id); ?>" class="btn btn-success">Book Course</a>
                                        </div>

                                    </div>
                                </div>
                            </div>

                        </div>

                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                    </div>
                </div>
            </div>
        </div>
        
        
        <div class="services_section layout_padding">
            <div class="container">
                <h1 class="sevices_taital">
                    Get Freelancing Jobs
                </h1>
                <p class="ipsum_text">
                    Start You Freelancing Carrier Today
                    I you have done with your technical skills like, web development, graphic design, content creation, and
                    more, now its time to get benefit from you skills.

                </p>
                <div class="banner_section_2">
                    <div class="row">
                        <?php $__currentLoopData = $jobs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-lg-4 col-sm-12" style="padding:5px">

                            <div class="card">
                                <img class="card-img-top" src="/uploads/jobs/<?php echo e($course->pic); ?>" alt="Card image" style="height:200px;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo strlen(strip_tags($course->title)) > 20 ?
                                        substr(strip_tags($course->title),
                                        0,
                                        20) . '...' : $course->title; ?>

                                    </h5>
                                    <p class="card-text">
                                        <?php echo strlen(strip_tags($course->detail)) > 27 ?
                                        substr(strip_tags($course->detail), 0,
                                        27) . '...' : $course->detail; ?>

                                    </p>
                                    <div class="row text-center">
                                      <div class="col-6">
                                        <a href="/jobs/<?php echo e($course->slug); ?>" class="btn btn-primary">Read More</a>
                                    </div>

                                    <div class="col-6">
                                        <a href="/jobapply" class="btn btn-success">Apply jobs</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


                            </div>
                        </div>
                    </div>
                </div>
                
                
                <div class="services_section layout_padding">
                    <div class="container">
                        <h1 class="sevices_taital">
                            Get Freelancing Updates
                        </h1>
                        <p class="ipsum_text">Join our community of successful freelancers and online entrepreneurs. Whether you're
                        a beginner looking to start your freelancing career or an experienced.</p>
                        <div class="banner_section_2">
                            <div class="row">

                                <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                        <div class="col-lg-4 col-sm-12" style="padding:5px">

                            <div class="card">
                                <img class="card-img-top" src="/uploads/news/<?php echo e($course->pic); ?>" alt="Card image" style="height:200px;">
                                <div class="card-body">
                                    <h5 class="card-title">
                                        <?php echo strlen(strip_tags($course->title)) > 20 ?
                                        substr(strip_tags($course->title),
                                        0,
                                        20) . '...' : $course->title; ?>

                                    </h5>
                                    <p class="card-text">
                                        <?php echo strlen(strip_tags($course->detail)) > 27 ?
                                        substr(strip_tags($course->detail), 0,
                                        27) . '...' : $course->detail; ?>

                                    </p>
                                    <div class="row text-center">
                                      <div class="col-6">
                                        <a href="/jobs/<?php echo e($course->slug); ?>" class="btn btn-primary">Read More</a>
                                    </div>

                                </div>
                            </div>
                        </div>

                    </div>

                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                                    </div>
                                </div>
                            </div>
                        </div>
                        

                        <!-- footer start -->
                        <?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                        <!-- footer end -->
                        <?php echo $__env->make('include.footer_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    </div>
                </body>
                </html>
<?php /**PATH C:\xampp\htdocs\OneDrive\learning_web\resources\views//index.blade.php ENDPATH**/ ?>