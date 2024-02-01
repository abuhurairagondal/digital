<!DOCTYPE html>
<html lang="en">
<?php $__env->startSection('title'); ?>
Add Blogs
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
                            <h1 class="m-0"> Blogs</h1>
                        </div><!-- /.col -->
                        <div class="col-sm-6"></div><!-- /.col -->
                    </div><!-- /.row -->
                </div><!-- /.container-fluid -->
            </div>
            <!-- /.content-header -->
            <section class="content">
                <div class="container-fluid">
                    <div class="row">
                        <!-- left column -->
                        <div class="col-md-12">
                            <div class="card card-primary card-outline card-outline-tabs">
                                <div class="card-header p-0 border-bottom-0">

                                    <ul class="nav nav-tabs" id="custom-tabs-four-tab" role="tablist">
                                        <li class="nav-item">
                                            <a class="nav-link active" id="custom-tabs-four-home-tab" data-toggle="pill"
                                                href="#custom-tabs-four-home" role="tab"
                                                aria-controls="custom-tabs-four-home" aria-selected="true"><i
                                                    class="fa fa-list"></i>&nbsp;&nbsp;List Blogs English</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-home-taburdu" data-toggle="pill"
                                                href="#custom-tabs-four-homeurdu" role="tab"
                                                aria-controls="custom-tabs-four-homeurdu" aria-selected="true"><i
                                                    class="fa fa-list"></i>&nbsp;&nbsp;List Blogs Urdu</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-profile-tab" data-toggle="pill"
                                                href="#custom-tabs-four-profile" role="tab"
                                                aria-controls="custom-tabs-four-profile" aria-selected="false"><i
                                                    class="fa fa-plus"></i>&nbsp;&nbsp;Add Blogs</a>
                                        </li>
                                    </ul>
                                </div>
                                <div class="card-body">
                                    <div class="tab-content" id="custom-tabs-four-tabContent">
                                        <div class="tab-pane fade show active" id="custom-tabs-four-home"
                                            role="tabpanel" aria-labelledby="custom-tabs-four-home-tab">
                                            <?php if($errors->any()): ?>
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($error); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                            <?php endif; ?>
                                            <?php echo $__env->make('admin.includes.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <div class="card card-primary">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Title</th>
                                                            <th>Detail</th>
                                                            <th>Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($cd->blog_id); ?></td>

                                                            <td><a href="/blog/<?php echo e($cd->slug); ?>" target="_blank"><?php echo e($cd->title); ?></a></td>

                                                            <td>
                                                                <p><?php echo strlen(strip_tags($cd->detail)) > 35 ?
                                                                    substr(strip_tags($cd->detail), 0, 35) . '...' :
                                                                    $cd->detail; ?></p>


                                                            </td>
                                                            <td>
                                                                <img src="/uploads/blogs/<?php echo e($cd->pic); ?>"
                                                                    style="width: 120px; height: 100px; object-fit: contain;">
                                                            </td>

                                                            <td>
                                                                <a href="/edit_blogs/<?php echo e($cd->blog_id); ?>"
                                                                    class="btn btn-info btn-xs" title="Edit"><i
                                                                        class="fa fa-edit"></i></a>
                                                                <a onclick="return confirm('Are you sure to Delete?');"
                                                                    href="/delete_blogs/<?php echo e($cd->blog_id); ?>"
                                                                    class="btn btn-danger btn-xs" title="Delete"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade" id="custom-tabs-four-homeurdu" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-home-taburdu">
                                            <?php if($errors->any()): ?>
                                            <div class="alert alert-danger">
                                                <ul>
                                                    <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                    <li><?php echo e($error); ?></li>
                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                </ul>
                                            </div>
                                            <?php endif; ?>
                                            <?php echo $__env->make('admin.includes.success', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
                                            <div class="card card-primary">
                                                <table id="example1" class="table table-bordered table-striped">
                                                    <thead>
                                                        <tr>
                                                            <th>#</th>
                                                            <th>Title</th>
                                                            <th>Detail</th>
                                                            <th>Image</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $urdu; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($cd->blog_id); ?></td>

                                                            <td><a href="/blog/<?php echo e($cd->slug); ?>" target="_blank"><?php echo e($cd->title); ?></a></td>

                                                            <td>
                                                                <p><?php echo strlen(strip_tags($cd->detail)) > 35 ?
                                                                    substr(strip_tags($cd->detail), 0, 35) . '...' :
                                                                    $cd->detail; ?></p>


                                                            </td>
                                                            <td>
                                                                <img src="/uploads/blogs/<?php echo e($cd->pic); ?>"
                                                                    style="width: 120px; height: 100px; object-fit: contain;">
                                                            </td>

                                                            <td>
                                                                <a href="/edit_blogs/<?php echo e($cd->blog_id); ?>"
                                                                    class="btn btn-info btn-xs" title="Edit"><i
                                                                        class="fa fa-edit"></i></a>
                                                                <a onclick="return confirm('Are you sure to Delete?');"
                                                                    href="/delete_blogs/<?php echo e($cd->blog_id); ?>"
                                                                    class="btn btn-danger btn-xs" title="Delete"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-profile-tab">

                                            <div class="card card-primary">

                                                <form name="BlogsForm" action="/save_blogs" method="POST"
                                                    enctype="multipart/form-data">
                                                    <?php echo csrf_field(); ?>
                                                    <div class="container-fluid">
                                                        <div class="row">

                                                            <div class="col-md-2">
                                                                <label for="language">Select Language:</label>
                                                                <select id="language" name="type" class="form-control"
                                                                    required="">
                                                                    <option>Choose type</option>
                                                                    <option value=0>English</option>
                                                                    <option value=1>Urdu</option>
                                                                </select>
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Title<code>*</code></label>
                                                                <input type="text" name="title" id="title"
                                                                    class="form-control" required=""
                                                                    placeholder="Blog Title">
                                                            </div>
                                                            <div class="col-md-4">
                                                                <label>Slug<code>*</code></label>
                                                                <input type="text" name="slug" id="slug"
                                                                    class="form-control" required=""
                                                                    placeholder="Blog Slug">
                                                            </div>
                                                            <div class="col-md-2">
                                                                <label>Pic<code>*</code></label>
                                                                <input type="file" name="pic" class="form-control"
                                                                    required="">
                                                            </div>

                                                          

                                                            <div class="col-md-12">
                                                                <div class="form-group">
                                                                    <label><b>Detail</b><code>*</code></label>
                                                                    <textarea name="detail"
                                                                        class="form-control textarea"
                                                                        placeholder="Detail"></textarea>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="card-footer text-center">
                                                        <a href="/dashboard" class="btn btn-danger">Cancel</a>
                                                        <button type="submit" class="btn btn-primary">Add Blogs</button>
                                                    </div>
                                                </form>

                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- /.card -->


                            </div>
                            <!--/.col (left) -->

                        </div>
                        <!-- /.row -->
                    </div>
                </div>
                <!-- /.container-fluid -->
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->

        <!------ Start Footer -->
        <?php echo $__env->make('admin.includes.version', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
        <!------ end Footer -->

    </div>
    <!-- ./wrapper -->
    <!------ Start Footer links-->
    <?php echo $__env->make('admin.includes.footer_links', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <!------ end Footer links -->

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
<?php /**PATH E:\xampp\htdocs\OneDrive\learning_web\resources\views/admin/add_blogs.blade.php ENDPATH**/ ?>