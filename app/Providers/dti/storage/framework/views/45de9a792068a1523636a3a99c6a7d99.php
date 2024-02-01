<?php
$user = Auth::user();
?>

<!-- Preloader -->
<!-- <div class="preloader flex-column justify-content-center align-items-center">
  <img class="animation__wobble" src="images/logo.png" height="180" width="350">
</div> -->



<!-- Navbar -->
<nav class="main-header navbar navbar-expand navbar-dark mynav">
    <!-- Left navbar links -->
    <ul class="navbar-nav">
        <li class="nav-item">
            <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>

    </ul>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/" class="nav-link text-white">Home</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/courses" class="nav-link text-white">Courses</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/jobs" class="nav-link text-white">Jobs</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/blogs" class="nav-link text-white">Blogs</a>
    </li>
    <li class="nav-item d-none d-sm-inline-block">
        <a href="/news" class="nav-link text-white">News</a>
    </li>
    <!-- Right navbar links -->
    <ul class="navbar-nav ml-auto">
        <!-- Notifications Dropdown Menu -->
        <li class="nav-item dropdown">
            <a class="nav-link" data-toggle="dropdown" href="/user_profile">
                <img class="img-circle" src="/uploads/profile/<?php echo e(Auth::user()->profile_picture); ?>"
                    style="width: 30px; height: 30px;"
                    onerror="this.onerror=null;this.src='/admin_assets/img/avatar5.png';" alt="Profile Picture">
                &nbsp;&nbsp;
                <strong class="text-light"><?php echo e($user->name); ?></strong>&nbsp;&nbsp;
                <i class="fa fa-angle-down"></i>&nbsp;&nbsp;
            </a>
            <div class="dropdown-menu dropdown-menu-lg dropdown-menu-right">
                <a href="/user_profile/" class="dropdown-item">
                    <i class="fa fa-user mr-2"></i> My Profile
                </a>
                <div class="dropdown-divider"></div>
                <a href="/logout" class="dropdown-item">
                    <i class="fas fa-sign-out-alt mr-2"></i> Sign Out
                </a>

            </div>
        </li>

    </ul>
</nav>
<!-- /.navbar -->
<?php /**PATH C:\xampp\htdocs\OneDrive\learning_web\resources\views/admin/includes/navbar.blade.php ENDPATH**/ ?>