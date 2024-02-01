<!DOCTYPE html>
<html>

<head>
    <title>News</title>

    <!-- Basic -->
    <?php echo $__env->make('include.header_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


</head>

<body class="sub_page">

    <!-- header section strats -->
    <?php echo $__env->make('include.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>News</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>



       
       <div class="container mt-4 mb-4">
        <div class="row">
            <?php $__currentLoopData = $news; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $course): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-md-12">
            <ul style="list-style-type: none;">
                <li>
                    <?php echo e($course->news_id); ?> - 
                    <a target="_blank" href="/news/<?php echo e($course->slug); ?>">
                        <?php echo e($course->title); ?>

                    </a>
                    <span> (<?php echo e(\Carbon\Carbon::parse($course->date)->format('d M y')); ?>)</span>
                </li>
            </ul>
            </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

        </div>
    </div>
    




    <!-- inner page section -->



    <!-- footer section -->

    <?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

    <!-- footer end -->

</body>
<!-- end header section -->

<?php echo $__env->make('include.footer_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<script>
    // JavaScript to handle Read More functionality
    const readMoreLinks = document.querySelectorAll('.read-more');

    readMoreLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const newsId = this.getAttribute('data-newsid');
            const hiddenDetails = document.getElementById(`newsDetails${news_Id}`);

            if (hiddenDetails.style.display === 'none') {
                hiddenDetails.style.display = 'inline'; // Show hidden details
                this.innerText = 'Read less'; // Change link text
            } else {
                hiddenDetails.style.display = 'none'; // Hide details
                this.innerText = 'Read more'; // Change link text
            }
        });
    });
</script>


</html>
<?php /**PATH E:\xampp\htdocs\OneDrive\learning_web\resources\views//news.blade.php ENDPATH**/ ?>