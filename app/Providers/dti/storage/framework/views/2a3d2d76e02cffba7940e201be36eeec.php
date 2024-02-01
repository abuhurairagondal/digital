<!DOCTYPE html>
<html>

<head>
    <title>Jobs</title>

    <!-- Basic -->
    <?php echo $__env->make('include.header_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        <?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end header section -->

        <!-- inner page section -->
           <section class="inner_page_head">
            <div class="container_fuild">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <h3>Jobs</h3>
                             <h2>
                                <a href="/jobapply" class="link-white" style="color: #00FFF">Apply for jobs
                                    click here</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end inner page section -->


        
        <div class="container mt-4 mb-4">
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
        



        <!-- footer section -->
        <?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- footer end -->
        <?php echo $__env->make('include.footer_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\OneDrive\learning_web\resources\views//jobs.blade.php ENDPATH**/ ?>