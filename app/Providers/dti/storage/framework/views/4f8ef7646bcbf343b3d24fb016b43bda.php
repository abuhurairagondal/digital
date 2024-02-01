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
    <div class="col-md-4">
        <div class="my_card box_main">
            <a href="/blogs/<?php echo e($blog->slug); ?>">
                <img src="/uploads/blogs/<?php echo e($blog->pic); ?>" class="img-fluid">
                <div class="card-textt text-center">
                   <h3><?php echo strlen(strip_tags($blog->title)) > 35 ? substr(strip_tags($blog->title), 0,
                        35) . '...' : $blog->title; ?></h3>
                    
                </div>
            </a>
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
<?php /**PATH E:\xampp\htdocs\OneDrive\learning_web\resources\views/blog.blade.php ENDPATH**/ ?>