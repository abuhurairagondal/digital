<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="col-md-6">
        <label>Course <code>*</code></label>
        <select name="course" id="course" class="form_field" required>
            <option value disabled selected>Select Course</option>
            <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <option value="<?php echo e($cd->title); ?>" data-liveprice="<?php echo e($cd->live_price); ?>" data-recordedprice="<?php echo e($cd->recorded_price); ?>"><?php echo e($cd->title); ?></option>
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
        <label>Course Category <code>*</code></label>
        <select name="course_mode" id="course_mode" class="form_field" required>
            <option value disabled selected>Select Course Category</option>
            <option value="Live Lecture">Live Lecture</option>
            <option value="Recorded Lecture">Recorded Lecture</option>
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
        <input type="number" name="amount" id="amount" class="form_field" required value="amount" readonly>
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



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>




        $(document).ready(function() {
            $('#course').change(function() {
                var selectedCourse = $(this).children('option:selected');
                var courseMode = $('#course_mode').val();
                var price = courseMode === 'Live Lecture' ? selectedCourse.data('liveprice') : selectedCourse.data('recordedprice');
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
</html>l
<?php /**PATH C:\xampp\htdocs\OneDrive\learning_web\resources\views//auth/price.blade.php ENDPATH**/ ?>