<!DOCTYPE html>
<html lang="en">
@section('title')
Edit courses
@endsection
<!-- Start top links -->
@include('admin.includes.headlinks')

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
    <div class="wrapper">
        <!-- Start navbar -->
        @include('admin.includes.navbar')
        <!-- end navbar -->

        <!-- Start Sidebar -->
        @include('admin.includes.sidebar')
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
                                    @include('admin.includes.success')
                                    <form name="BlogsForm" action="/update_courses" method="POST"
                                        enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="courses_id"
                                        value="@php echo $blogs[0]['courses_id'] @endphp">
                                        <div class="container-fluid">
                                            <div class="row">

                                                <div class="col-md-4">
                                                    <div class="form-group">
                                                        <label><b>Title</b><code>*</code></label>
                                                        <input type="text" name="title" id="title" placeholder="Title"
                                                        class="form-control" required
                                                        value="@php echo $blogs[0]['title'] @endphp">
                                                        @error('title')
                                                        <p class="help-block text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>

                                                <div class="col-md-4">
                                                    <label>Slug<code>*</code></label>
                                                    <input type="text" name="slug" id="slug" class="form-control" required="" placeholder="Blog Slug" value="@php echo $blogs[0]['slug'] @endphp">
                                                </div>

                                                <div class="col-md-1">
                                                    <img src="/uploads/courses/@php echo $blogs[0]['pic'] @endphp"
                                                    style="height: 60px; width: 60px;border-radius: 5px">
                                                </div>



                                                <div class="col-md-3">
                                                    <div class="form-group">
                                                        <label for="exampleInputBorder">Feature Image</label>
                                                        <div class="input-group mb-3">

                                                            <input type="file" name="pic" id="url" class="form-control"
                                                            placeholder="Feature Image">

                                                            <input type="hidden" name="hidden_pic"
                                                            value="@php echo $blogs[0]['pic'] @endphp">
                                                        </div>
                                                        @error('pic')
                                                        <p class="help-block text-danger">{{ $message }}</p>
                                                        @enderror
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>Recorded_price<code>*</code></label>
                                                    <input type="number" name="recorded_price" id="recorded_price"
                                                        class="form-control" required=""
                                                        placeholder="Enter price" value="@php echo $blogs[0]['recorded_price'] @endphp"  >
                                                </div>



                                                <div class="col-md-6">
                                                    <label>Live_price<code>*</code></label>
                                                    <input type="number" name="live_price" id="live_price"
                                                        class="form-control" required=""
                                                        placeholder="Enter Price" value="@php echo $blogs[0]['live_price'] @endphp">
                                                </div>




                                                <div class="col-md-12">
                                                    <div class="form-group">
                                                        <label><b>Detail</b><code>*</code></label>
                                                        <textarea name="detail" class="form-control textarea"
                                                            placeholder="Detail"
                                                            required>@php echo $blogs[0]['detail'] @endphp</textarea>
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

        @include('admin.includes.version')
    </div><!-- /.wrapper -->

    @include('admin.includes.footer_links')
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
