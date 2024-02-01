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
        <?php $__currentLoopData = $courses; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $otherCourse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
               <li style="display: flex; align-items: center; margin-bottom: 10px; background-color: #fff; border-radius: 5px;">
                <img src="/uploads/courses/<?php echo e($otherCourse->pic); ?>" alt="Thumbnail" class="img-thumbnail" style="margin-right: 10px; width: 40px; height: 40px;">
                <a href="<?php echo e($otherCourse->slug); ?>"><?php echo e($otherCourse->title); ?></a>
            </li>
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
<?php /**PATH E:\xampp\htdocs\OneDrive\learning_web\resources\views//details_courses.blade.php ENDPATH**/ ?>