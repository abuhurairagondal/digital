<!DOCTYPE html>
<html>

<head>
    <title>Book Course</title>
    <!-- Basic -->
    <?php echo $__env->make('include.header_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


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
                        <h3>Book Course</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- end inner page section -->
    <!-- job application section -->

    <section class="why_section layout_padding">
        <div class="container">
            <div class="row">
                <div class="col-md-6 mb-2" style="background-color: #F2F4F4; border-radius: 5px;">
                    <h2 style="height: 50px; color: #000000 ; margin-top: 40px;" align="center"><strong>Book
                    Course</strong></h2>
                    <h1 style="color:blue; font-size: 30px; text-align:center;"><?php echo e($selected_course[0]->title); ?></h1>
                    <?php echo $__env->make('include.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                    <div class="full">
                        <form name="save_bookcourse" action="/save_bookcourse" method="POST"
                        style="margin-top: 60px;"  enctype="multipart/form-data">

                        <?php echo csrf_field(); ?>
                        <div class="row">

                        <div class="col-md-6">
                            <label>Name <code>*</code></label>
                            <input type="text" name="name" placeholder="Name" class="form-control" required
                            value="<?php echo e(old('name')); ?>">
                            <?php $__errorArgs = ['name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p style="color: red;"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>


                        <div class="col-md-6">
                            <label>Phone <code>*</code></label>
                            <input type="number" name="phone" placeholder="Phone" class="form-control" required
                            value="<?php echo e(old('phone')); ?>">
                            <?php $__errorArgs = ['phone'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p style="color: red;"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6">
                            <label>E-Mail <code>*</code></label>
                            <input type="email" placeholder="Email" name="email" class="form-control" required
                            value="<?php echo e(old('email')); ?>">
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p style="color: red;"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6">
                        <label>Gender <code>*</code></label>
                        <select name="gender" id="gender" class="form-control" required>
                            <option value <?php echo e(old('gender')=='' ? 'selected' : ''); ?>>Select
                            Gender</option>
                            <option value="male" <?php echo e(old('gender')=='male' ? 'selected' : ''); ?>>Male
                            </option>
                            <option value="female" <?php echo e(old('gender')=='female' ? 'selected' : ''); ?>>
                            Female</option>
                            <option value="other" <?php echo e(old('gender')=='other' ? 'selected' : ''); ?>>Other
                            </option>
                        </select>
                        <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <p style="color: red;"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>



                        


                        <div class="col-md-6">
    <label>Course <code>*</code></label>
    <select name="course" id="course" class="form-control" required>
        <option value="" disabled selected>Select Course</option>
        <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($cd->title); ?>" data-liveprice="<?php echo e($cd->live_price); ?>" data-recordedprice="<?php echo e($cd->recorded_price); ?>" <?php if($cd->courses_id == $selected_course[0]->courses_id): ?> selected <?php endif; ?>><?php echo e($cd->title); ?></option>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </select>
    <?php $__errorArgs = ['course'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
        <p style="color: red;"><?php echo e($message); ?></p>
    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
</div>


                        <div class="col-md-6">
                            <label>Lecture <code>*</code></label>
                            <select name="course_mode" id="course_mode" class="form-control" required>
                                <option value disabled selected>Select Lecture</option>
                                <option value="Live Lecture">Live Lecture</option>
                                <option value="Recorded Lecture" selected>Recorded Lecture</option>
                            </select>
                            <?php $__errorArgs = ['course_mode'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p style="color: red;"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

                        <div class="col-md-6">
                            <label>Amount <code>*</code></label>
                            <input type="number" name="amount" id="amount" class="form-control" placeholder="0" required value="<?php echo e($selected_course[0]->recorded_price); ?>" readonly>
                            <?php $__errorArgs = ['amount'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p style="color: red;"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                        


                    <div class="col-md-12">
                        <label>Receipt<code>*</code></label>
                        <input type="file" name="pic" id="pic" class="form-control">

                        <?php $__errorArgs = ['pic'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <p style="color: red;"><?php echo e($message); ?></p>
                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>



                    <div class="col-md-12 mx-2" style="text-align: center; margin-top: 20px;">
                        <input type="submit" value="Book Course" style="color: white; border-radius: 5px;">
                    </div>
                    <br>

                </div>

            </form>

        </div>
    </div>
    <div class="col-md-6">
        <img src="/images/logo.png" style="height: 300px; margin-left: 150px; margin-top: 250px; ">

    </div>

</div>

</div>
</section>
<!-- end job application section -->
<!-- footer section -->
<?php echo $__env->make('include.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
<!-- footer end -->
<?php echo $__env->make('include.footer_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    $(document).ready(function() {
        $('#course').change(function() {
            var selectedCourse = $(this).children('option:selected');
            var courseMode = $('#course_mode').val();
            var price = courseMode === 'Live Lecture' ? selectedCourse.data('liveprice') :courseMode ==='Recorded Lecture' ? selectedCourse.data('recordedprice'):""
         ;
            $('#amount').val(price);
        });

        $('#course_mode').change(function() {
            var selectedCourse = $('#course').children('option:selected');
            var courseMode = $(this).val();
            var price = courseMode === 'Live Lecture' ? selectedCourse.data('liveprice') : selectedCourse.data('recordedprice');
            $('#amount').val(price);
        });
    });
</script>







</body>

</html>
<?php /**PATH E:\xampp\htdocs\OneDrive\learning_web\resources\views//bookcourse_form.blade.php ENDPATH**/ ?>