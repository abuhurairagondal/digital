<!DOCTYPE html>
<html>

<head>
    <title>Courses</title>

    <!-- Basic -->
    <?php echo $__env->make('include.header_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <style>
        .book-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
            font-size: 16px;
        }

        .button-text {
            position: relative;
            z-index: 2;
        }

        .book-icon {
            width: 20px;
            height: 20px;
            background-color: #fff;
            border-radius: 50%;
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            transition: transform 0.3s ease-in-out;
        }

        .book-icon .cover,
        .book-icon .pages {
            width: 50%;
            height: 100%;
            background-color: #3498db;
            position: absolute;
            top: 0;
            transition: transform 0.3s ease-in-out;
        }

        .book-icon .cover {
            left: 0;
        }

        .book-icon .pages {
            right: 0;
        }

        .book-button:hover .book-icon {
            transform: translateX(100%);
        }

        .book-button:hover .book-icon .cover {
            transform: scaleX(0);
        }

        .book-button:hover .book-icon .pages {
            transform: scaleX(0);
        }
    </style>



</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section starts -->
        <?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end header section -->

        <!-- inner page section -->
        <section class="inner_page_head">
            <div class="container_fuild">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <h3>Courses</h3>
                            <a href="/bookcourse" class="book-button">
                                <div class="book-icon">
                                    <div class="cover"></div>
                                    <div class="pages"></div>
                                </div>
                                <span class="button-text">Book a Course</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page section -->

        
        <div class="container mt-4 mb-4">
            <div class="row">

                <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="col-md-4">
                    <div class="my_card box_main">
                        <a href="/course/<?php echo e($course->slug); ?>" class="course-link">
                            <img src="/uploads/courses/<?php echo e($course->pic); ?>" class="img-fluid">
                            <div class="card-textt text-center">
                                <h3>
                                    <?php echo strlen(strip_tags($course->title)) > 17 ? substr(strip_tags($course->title),
                                        0,
                                        17) . ' ...' : $course->title; ?>

                                </h3>
                                <p><?php echo strlen(strip_tags($course->detail)) > 20 ? substr(strip_tags($course->detail), 0,
                                    20) . ' ...' : $course->detail; ?></p>
                            </div>
                        </a>
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
<?php /**PATH E:\xampp\htdocs\OneDrive\learning_web\resources\views//courses.blade.php ENDPATH**/ ?>