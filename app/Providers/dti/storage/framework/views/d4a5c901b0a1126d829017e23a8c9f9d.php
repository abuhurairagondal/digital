<!DOCTYPE html>
<html lang="en">
<?php $__env->startSection('title'); ?>
Edit courses
<?php $__env->stopSection(); ?>
<!-- Start top links -->
<?php echo $__env->make('admin.includes.headlinks', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Start navbar -->
        <?php echo $__env->make('admin.includes.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end navbar -->

        <!-- Start Sidebar -->
        <?php echo $__env->make('admin.includes.sidebar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!-- end Sidebar -->

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <!-- Content Header (Page header) -->
            <div class="content-header">
                <div class="container-fluid">
                    <div class="row mb-2">
                        <div class="col-sm-6">
                            <h1 class="m-0">Edit courses</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6">
                            <ol class="breadcrumb float-sm-right">
                                <li class="breadcrumb-item"><a href="#">Home</a></li>
                                <li class="breadcrumb-item active">Edit Blogs</li>
                            </ol>
                        </div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div><!-- /.content-header -->

            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="card card-secondary">
                                <div class="card-header">
                                    <h3 class="card-title">Edit Blogs</h3>
                                    <div class="card-tools">
                                        <!-- <a href="/admin_add_blogs" class="btn btn-sm btn-primary">Add Blogs</a>
                      <a href="/admin_blogs_list" class="btn btn-sm btn-primary">List Blogs</a> -->
                                    </div>
                                </div>
                                <div class="card-body">
                                    <!-- form start -->
                                    <?php echo $__env->make('admin.includes.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                    <form name="BlogsForm" action="/update_courses" method="POST"
                                        enctype="multipart/form-data">
                                        <?php echo csrf_field(); ?>
                                        <input type="hidden" name="courses_id"
                                        value="<?php echo $blogs[0]['courses_id'] ?>">
                                        <div class="container-fluid">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label><b>Title</b><code>*</code></label>
                                                        <input type="text" name="title" id="title" placeholder="Title"
                                                        class="form-control" required
                                                        value="<?php echo $blogs[0]['title'] ?>">
                                                        <?php $__errorArgs = ['title'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="help-block text-danger"><?php echo e($message); ?></p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Slug<code>*</code></label>
                                                    <input type="text" name="slug" id="slug" class="form-control" required="" placeholder="Blog Slug" value="<?php echo $blogs[0]['slug'] ?>">
                                                </div>

                                                <div class="col-md-1">
                                                    <img src="/uploads/courses/<?php echo $blogs[0]['pic'] ?>"
                                                    style="height: 60px; width: 60px;border-radius: 5px">
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputBorder">Feature Image</label>
                                                        <div class="input-group mb-3">

                                                            <input type="file" name="pic" id="url" class="form-control"
                                                            placeholder="Feature Image">

                                                            <input type="hidden" name="hidden_pic"
                                                            value="<?php echo $blogs[0]['pic'] ?>">
                                                        </div>
                                                        <?php $__errorArgs = ['pic'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                                        <p class="help-block text-danger"><?php echo e($message); ?></p>
                                                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Recorded_price<code>*</code></label>
                                                    <input type="number" name="recorded_price" id="recorded_price"
                                                        class="form-control" required=""
                                                        placeholder="Enter price" value="<?php echo $blogs[0]['recorded_price'] ?>"  >
                                                </div>



                                                <div class="col-md-6">
                                                    <label>Live_price<code>*</code></label>
                                                    <input type="number" name="live_price" id="live_price"
                                                        class="form-control" required=""
                                                        placeholder="Enter Price" value="<?php echo $blogs[0]['live_price'] ?>">
                                                </div>




                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><b>Detail</b><code>*</code></label>
                                                        <textarea name="detail" class="form-control textarea"
                                                            placeholder="Detail"
                                                            required><?php echo $blogs[0]['detail'] ?></textarea>
                                                    </div>
                                                </div>

                                            </div>
                                        </div>

                                        <div class="card-footer text-center">
                                            <a href="/admin_dashboard" class="btn btn-danger">Cancel</a>
                                            <button type="submit" class="btn btn-primary">Update Courses</button>
                                        </div>
                                    </form>

                                </div><!-- /.card -->
                            </div>
                            <!--/.col (left) -->
                        </div><!-- /.row -->
                    </div><!-- /.container-fluid -->
            </section><!-- /.content -->
        </div><!-- /.content-wrapper -->

        <?php echo $__env->make('admin.includes.version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div><!-- /.wrapper -->

    <?php echo $__env->make('admin.includes.footer_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script>
        $(document).ready(function () {
            $('#title').on('input', function () {
                // Get the value of the title input
                var titleValue = $(this).val().trim();

                // Replace spaces and special characters with hyphens and convert to lowercase for a simple slug
                var slugValue = titleValue.replace(/[^a-zA-Z0-9]/g, '-').toLowerCase();

                // Remove consecutive hyphens
                slugValue = slugValue.replace(/-+/g, '-');

                // Update the value of the slug input
                $('#slug').val(slugValue);
            });
        });
    </script>
</body>


</html>
<?php /**PATH C:\xampp\htdocs\OneDrive\learning_web\resources\views/admin/edit_courses.blade.php ENDPATH**/ ?>