<!DOCTYPE html>
<html>

<head>
    <title>Blogs</title>

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
                            <h3>Blogs</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page section -->

        
        <div class="container mt-4 mb-4">
            <div class="row">

                <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>

                <div class="col-lg-4 col-sm-12" style="padding:5px">

                    <div class="card">
                        <img class="card-img-top" src="/uploads/blogs/<?php echo e($blog->pic); ?>" alt="Card image" style="height:200px;">
                        <div class="card-body">
                            <h5 class="card-title">
                                <?php echo strlen(strip_tags($blog->title)) > 20 ?
                                substr(strip_tags($blog->title),
                                0,
                                20) . '...' : $blog->title; ?>

                            </h5>
                            <p class="card-text">
                                <?php echo strlen(strip_tags($blog->detail)) > 27 ?
                                substr(strip_tags($blog->detail), 0,
                                27) . '...' : $blog->detail; ?>

                            </p>
                           
                    </div>
                </div>

            </div>

            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>


<div class="col-md-12">
    <div class="pagination">
        <?php if($blogs->onFirstPage()): ?>
            <span>&laquo;</span>
        <?php else: ?>
            <a href="<?php echo e($blogs->previousPageUrl()); ?>">&laquo;</a>
        <?php endif; ?>

        <?php for($i = 1; $i <= $blogs->lastPage(); $i++): ?>
            <a class="<?php echo e(($blogs->currentPage() == $i) ? 'active' : ''); ?>" href="<?php echo e($blogs->url($i)); ?>"><?php echo e($i); ?></a>
        <?php endfor; ?>

        <?php if($blogs->hasMorePages()): ?>
            <a href="<?php echo e($blogs->nextPageUrl()); ?>">&raquo;</a>
        <?php else: ?>
            <span>&raquo;</span>
        <?php endif; ?>
    </div>
</div>


<style type="text/css">
    /* Pagination links */
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

/* Style the active/current link */
.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {background-color: #ddd;}
</style>



            </div>
        </div>
        

        <!-- end why section -->
        <!-- footer section -->
        <?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- footer end -->
        <?php echo $__env->make('include.footer_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

</body>

</html>
<?php /**PATH C:\xampp\htdocs\OneDrive\learning_web\resources\views/blog.blade.php ENDPATH**/ ?>