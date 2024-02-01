@php
$user = Auth::user();
@endphp
<!DOCTYPE html>
<html lang="en">
<title>User Profile</title>
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
   <section class="content-header">
    <div class="container-fluid">
     <div class="row mb-2">
      <div class="col-sm-6">
       <h1>Profile</h1>
     </div>
     <div class="col-sm-6">
       <ol class="breadcrumb float-sm-right">
        <li class="breadcrumb-item"><a href="#">Home</a></li>
        <li class="breadcrumb-item active">User Profile</li>
      </ol>
    </div>
  </div>
</div><!-- /.container-fluid -->
</section>

<!-- Main content -->
<section class="content">
  <div class="container-fluid">
   <div class="row">

    <div class="col-md-12">
      @include('admin.includes.success') 
    </div>
    
    <div class="col-md-12">
     <div class="card">
      <div class="card-body">

        <form role="form" method="POST" action="/profile_update" enctype="multipart/form-data">
          @csrf
          @method('PUT')

          <div class="row">
            <!-- Name -->
            <div class="col-md-3">
              <div class="form-group">
                <label for="name">Name</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
              </div>
            </div>


            <!-- Email -->
            <div class="col-md-3">
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
              </div>
            </div>

            <!-- Password -->
            <div class="col-md-2">
              <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" id="password" name="password">
              </div>
            </div>

           <div class="col-md-2">
            <img
    src="/uploads/profile/{{ Auth::user()->profile_picture }}"
    style="width: 80px; height: 80px; border-radius:5px;"
    onerror="this.onerror=null;this.src='/admin_assets/img/avatar5.png';"
    alt="Profile Picture"
>

           </div>

            <!-- Profile Picture -->
            <div class="col-md-2">
              <div class="form-group">
                <label for="profile_picture">Profile Picture</label>
                <input type="file" id="profile_picture" name="profile_picture">
              </div>
            </div>


            <div class="box-footer">
              <button type="submit" class="btn btn-primary">Update Profile</button>
            </div>
          </form>

        </div> <!--card body -->
        <!-- /.tab-content -->
      </div><!-- /.card-body -->
    </div>
    <!-- /.card -->
  </div>
  <!-- /.col -->
</div>
<!-- /.row -->

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

</body>
</html>

