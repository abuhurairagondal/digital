<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <?php echo $__env->make('include.header_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <title><?php echo e($course[0]['title']); ?></title>
   </head>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         <?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3><?php echo e($course[0]['title']); ?></h3>
                  </div>
               </div>
            </div>
         </div>
      </section>


        <div class="container" style="padding: 15px;">
            <div class="row">
                <div class="col-md-9">
                     <img src="/uploads/courses/<?php echo $course[0]['pic'] ?>" class="img-fluid" alt="Image" style="border-radius:5px;">
                     <p>
                       <?php echo $course[0]['detail'] ?>
                     </p>
                </div>
                <div class="col-md-3" style="background-color:#8518FF; color: #fff; border-radius: 5px; ">
    <h4 align="center" style="padding:10px 5px;">Other Courses</h4>
    <ul class="list-unstyled">
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
                        <a href="/bookcourse" class="btn btn-success">Book Course</a>
                    </div>

                </div>
            </div>
        </div>

    </div>

    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </ul>
</div>

            </div>
        </div>



        <!-- footer section -->
        <?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- footer end -->
        <?php echo $__env->make('include.footer_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\OneDrive\learning_web\resources\views//details_courses.blade.php ENDPATH**/ ?>