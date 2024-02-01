<!DOCTYPE html>
<html lang="en">
@section('title')
Add Blogs
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
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                            @include('admin.includes.success')
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
                                                        @foreach ($blogs as $cd)
                                                        <tr>
                                                            <td>{{ $cd->blog_id }}</td>

                                                            <td><a href="/blog/{{ $cd->slug }}" target="_blank">{{
                                                                    $cd->title }}</a></td>

                                                            <td>
                                                                <p>{!! strlen(strip_tags($cd->detail)) > 35 ?
                                                                    substr(strip_tags($cd->detail), 0, 35) . '...' :
                                                                    $cd->detail !!}</p>


                                                            </td>
                                                            <td>
                                                                <img src="/uploads/blogs/{{ $cd->pic }}"
                                                                    style="width: 120px; height: 100px; object-fit: contain;">
                                                            </td>

                                                            <td>
                                                                <a href="/edit_blogs/{{ $cd->blog_id }}"
                                                                    class="btn btn-info btn-xs" title="Edit"><i
                                                                        class="fa fa-edit"></i></a>
                                                                <a onclick="return confirm('Are you sure to Delete?');"
                                                                    href="/delete_blogs/{{ $cd->blog_id }}"
                                                                    class="btn btn-danger btn-xs" title="Delete"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                        {{-- urdu blog --}}
                                        <div class="tab-pane fade" id="custom-tabs-four-homeurdu" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-home-taburdu">
                                            @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                    <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                            @endif
                                            @include('admin.includes.success')
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
                                                        @foreach ($urdu as $cd)
                                                        <tr>
                                                            <td>{{ $cd->blog_id }}</td>

                                                            <td><a href="/blog/{{ $cd->slug }}" target="_blank">{{
                                                                    $cd->title }}</a></td>

                                                            <td>
                                                                <p>{!! strlen(strip_tags($cd->detail)) > 35 ?
                                                                    substr(strip_tags($cd->detail), 0, 35) . '...' :
                                                                    $cd->detail !!}</p>


                                                            </td>
                                                            <td>
                                                                <img src="/uploads/blogs/{{ $cd->pic }}"
                                                                    style="width: 120px; height: 100px; object-fit: contain;">
                                                            </td>

                                                            <td>
                                                                <a href="/edit_blogs/{{ $cd->blog_id }}"
                                                                    class="btn btn-info btn-xs" title="Edit"><i
                                                                        class="fa fa-edit"></i></a>
                                                                <a onclick="return confirm('Are you sure to Delete?');"
                                                                    href="/delete_blogs/{{ $cd->blog_id }}"
                                                                    class="btn btn-danger btn-xs" title="Delete"><i
                                                                        class="fa fa-trash"></i></a>
                                                            </td>
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>

                                            </div>
                                        </div>
                                        <div class="tab-pane fade" id="custom-tabs-four-profile" role="tabpanel"
                                            aria-labelledby="custom-tabs-four-profile-tab">

                                            <div class="card card-primary">

                                                <form name="BlogsForm" action="/save_blogs" method="POST"
                                                    enctype="multipart/form-data">
                                                    @csrf
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
        @include('admin.includes.version')
        <!------ end Footer -->

    </div>
    <!-- ./wrapper -->
    <!------ Start Footer links-->
    @include('admin.includes.footer_links')
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
