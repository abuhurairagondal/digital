<!DOCTYPE html>
<html lang="en">
<?php $__env->startSection('title'); ?>
Users
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
                            <h1 class="m-0"> Users pages </h1>
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
                                                    class="fa fa-list"></i>&nbsp;&nbsp;List users</a>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-home-tabjobs" data-toggle="pill"
                                                href="#custom-tabs-four-homejobs" role="tab"
                                                aria-controls="custom-tabs-four-homejobs" aria-selected="true"><i
                                                    class="fa fa-list"></i>&nbsp;&nbsp;JobsForm</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" id="custom-tabs-four-home-tabkcourse" data-toggle="pill"
                                                href="#custom-tabs-four-homecourse" role="tab"
                                                aria-controls="custom-tabs-four-homecourse" aria-selected="true"><i
                                                    class="fa fa-list"></i>&nbsp;&nbsp;Book Course</a>
                                        </li>
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
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Image</th>
                                                            <th>gender</th>
                                                            <th>city</th>
                                                            <th>phone</th>
                                                            <th>status</th>
                                                            <th>Action</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $users; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($cd->id); ?></td>
                                                            <td><?php echo e($cd->name); ?></td>
                                                            <td><?php echo e($cd->email); ?></td>
                                                            <td>
                                                                <img src="/uploads/profile/<?php echo e($cd->profile_picture); ?>"
                                                                    style="width: 120px; height: 100px; object-fit: contain;"
                                                                    alt="No Image">
                                                            </td>
                                                            <td><?php echo e($cd->gender); ?></td>
                                                            <td><?php echo e($cd->city); ?></td>
                                                            <td><?php echo e($cd->phone); ?></td>
                                                            <td><?php echo e($cd->status); ?></td>
                                                            <td>
                                                                <a href="/edit_blogs/<?php echo e($cd->id); ?>"
                                                                    class="btn btn-info btn-xs" title="Edit"><i
                                                                        class="fa fa-edit"></i></a>
                                                                <a onclick="return confirm('Are you sure to Delete?');"
                                                                    href="/delete_users/<?php echo e($cd->id); ?>"
                                                                    class="btn btn-danger btn-xs" title="Delete"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade  " id="custom-tabs-four-homejobs" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-home-tabjobs">
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
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Image</th>
                                                            <th>gender</th>
                                                            <th>city</th>
                                                            <th>country</th>

                                                            <th>Edu</th>
                                                            <th>Desc</th>
                                                            <th>Action</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $jobsfrom; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($cd->id); ?></td>
                                                            <td><?php echo e($cd->name); ?></td>
                                                            <td><?php echo e($cd->email); ?></td>
                                                            <td>
                                                                <img src="/uploads/profile/<?php echo e($cd->cv); ?>"
                                                                    style="width: 120px; height: 100px; object-fit: contain;"
                                                                    alt="No Image">
                                                            </td>
                                                            <td><?php echo e($cd->gender); ?></td>
                                                            <td><?php echo e($cd->city); ?></td>
                                                            <td><?php echo e($cd->country); ?></td>

                                                            <td><?php echo e($cd->edu); ?></td>
                                                            <td><?php echo e($cd->dec); ?></td>
                                                            <td>
                                                                <a href="/edit_blogs/<?php echo e($cd->id); ?>"
                                                                    class="btn btn-info btn-xs" title="Edit"><i
                                                                        class="fa fa-edit"></i></a>
                                                                <a onclick="return confirm('Are you sure to Delete?');"
                                                                    href="/delete_users/<?php echo e($cd->id); ?>"
                                                                    class="btn btn-danger btn-xs" title="Delete"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade " id="custom-tabs-four-homecourse" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-home-tabcourse">
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
                                                            <th>Name</th>
                                                            <th>Email</th>
                                                            <th>Image</th>
                                                            <th>gender</th>
                                                            <th>city</th>
                                                            <th>phone</th>
                                                            <th>course</th>
                                                            <th>Mode</th>


                                                            <th>amount</th>
                                                            <th>Action</th>


                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <?php $__currentLoopData = $bookcourse; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cd): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                        <tr>
                                                            <td><?php echo e($cd->id); ?></td>
                                                            <td><?php echo e($cd->name); ?></td>
                                                            <td><?php echo e($cd->email); ?></td>
                                                            <td>
                                                                <img src="/uploads/profile/<?php echo e($cd->pic); ?>"
                                                                    style="width: 120px; height: 100px; object-fit: contain;"
                                                                    alt="No Image">
                                                            </td>
                                                            <td><?php echo e($cd->gender); ?></td>
                                                            <td><?php echo e($cd->city); ?></td>
                                                            <td><?php echo e($cd->phone); ?></td>
                                                            <td><?php echo e($cd->course); ?></td>
                                                            <td><?php echo e($cd->course_mode); ?></td>


                                                            <td><?php echo e($cd->amount); ?></td>
                                                            <td>
                                                                <a href="/edit_blogs/<?php echo e($cd->id); ?>"
                                                                    class="btn btn-info btn-xs" title="Edit"><i
                                                                        class="fa fa-edit"></i></a>
                                                                <a onclick="return confirm('Are you sure to Delete?');"
                                                                    href="/delete_users/<?php echo e($cd->id); ?>"
                                                                    class="btn btn-danger btn-xs" title="Delete"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                    </tbody>
                                                </table>

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
<?php /**PATH C:\xampp\htdocs\OneDrive\learning_web\resources\views/admin/add_users.blade.php ENDPATH**/ ?>