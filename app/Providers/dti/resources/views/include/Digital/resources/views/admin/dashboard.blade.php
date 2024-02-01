<!DOCTYPE html>
<html lang="en">
@section('title')
Dashboard
@endsection
<!-- Start top links -->
@include('admin.includes.headlinks')
<!-- end top links -->
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
       <h1 class="m-0">Dashboard</h1>
     </div><!-- /.col -->
     <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">Dashboard</li>
      </ol>
    </div><!-- /.col -->
  </div><!-- /.row -->
</div><!-- /.container-fluid -->
</div>
<!-- /.content-header -->

<section class="content">
  <div class="container-fluid">
    <!-- Small boxes (Stat box) -->
    <div class="row">

      <div class="col-12 col-sm-6 col-md-4">
        <a href="/add_blogs">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-danger elevation-1"><i class="nav-icon fab fa-blogger"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Blogs</span>
              <span class="info-box-number">
                @php
                $blogs = DB::select('SELECT COUNT(*) as blogs_count FROM blogs');
                echo $blogs[0]->blogs_count;
                @endphp
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>
      <!-- /.col -->


      <!-- /.col2 courses start -->

      <div class="col-12 col-sm-6 col-md-4">
        <a href="/add_courses">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-success elevation-1"><i class="nav-icon fab fa fa-book"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Courses</span>
              <span class="info-box-number">
                @php
                $courses = DB::select('SELECT COUNT(*) as courses_count FROM courses');
                echo $courses[0]->courses_count;
                @endphp
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>
      <!-- col 2 courses end -->
        <!-- /.col2 job start -->

      <div class="col-12 col-sm-6 col-md-4">
        <a href="/add_jobs">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-primary elevation-1"><i class="nav-icon fa fa-tasks"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Jobs</span>
              <span class="info-box-number">
                @php
                $jobs = DB::select('SELECT COUNT(*) as jobs_count FROM jobs');
                echo $jobs[0]->jobs_count;
                @endphp
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>
      <!-- col 2 jobs end -->
        <!-- /.col2 news start -->

      <div class="col-12 col-sm-6 col-md-4">
        <a href="/add_blogs">
          <div class="info-box mb-3">
            <span class="info-box-icon bg-gray elevation-1"><i class="nav-icon  fa fa-newspaper"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">News</span>
              <span class="info-box-number">
                @php
                $news = DB::select('SELECT COUNT(*) as news_count FROM news');
                echo $news[0]->news_count;
                @endphp
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>
      <!-- col 2 news end -->

        <!-- /.col2 user start -->

      <div class="col-12 col-sm-6 col-md-4">
        <a href="/add_users">
          <div class="info-box mb-3">
          <span class="info-box-icon bg-info elevation-1"><i class="nav-icon fa fa-user"></i></span>

            <div class="info-box-content">
              <span class="info-box-text">Users</span>
              <span class="info-box-number">
                 @php
                $users = DB::select('SELECT COUNT(*) as users_count FROM users');
                echo $users[0]->users_count;
                @endphp
              </span>
            </div>
            <!-- /.info-box-content -->
          </div>
          <!-- /.info-box -->
        </a>
      </div>
      <!-- col 2 user end -->
<!-- admin close here -->

      <!-- /.col -->
    </div>
  </div>
</section>


<!-- /.content -->
</div>
<!-- /.content-wrapper -->

<!-- Control Sidebar -->
<aside class="control-sidebar control-sidebar-dark">
 <!-- Control sidebar content goes here -->
</aside>
<!-- /.control-sidebar -->

<!------ Start Footer -->
@include('admin.includes.version')
<!------ end Footer -->

</div>
<!-- ./wrapper -->
<!------ Start Footer links-->
@include('admin.includes.footer_links')
<!------ end Footer links -->

</body>
</html>
