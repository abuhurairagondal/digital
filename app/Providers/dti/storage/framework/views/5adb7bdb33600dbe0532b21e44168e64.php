<?php if($errors->any()): ?>
          <div class="alert alert-danger">
            <ul>
              <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
              <li><?php echo e($error); ?></li>
              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </ul>
          </div>
          <?php endif; ?>
          
 <?php if(session()->has('success')): ?>
<div class="alert alert-success alert-dismissible fade show rounded" role="alert">
  <strong><?php echo e(session()->get('success')); ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?>

<?php if(session()->has('error')): ?>
<div class="alert alert-danger alert-dismissible fade show rounded" role="alert">
  <strong><?php echo e(session()->get('error')); ?></strong>
  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<?php endif; ?><?php /**PATH C:\Users\Ali\Desktop\dti\resources\views/include/success.blade.php ENDPATH**/ ?>