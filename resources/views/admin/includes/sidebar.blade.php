<style type="text/css">
    .active {}

    .nav-item i {
        color: #fff;
    }
</style>




<!-- Main Sidebar Container -->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/dashboard" class="brand-link">
        <img src="/images/logo_white.png" alt="" style="height: 50px; width: 50px; border-radius: 10px;" class="brand-image">
        <span class="brand-text font-weight-light"><strong>Larning App</strong></span>
    </a>

    <!-- Sidebar -->
    <div class="sidebar">

        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                <li class="nav-item">
                    <a href="/dashboard" class="nav-link {{request()->segment(1)=='dashboard' ? 'active' : ''}}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/add_courses" class="nav-link {{request()->segment(1)=='add_courses' ||request()->segment(1)=='edit_courses' ? 'active' : ''}}">
                        <i class="nav-icon fa fa-book"></i>
                        <p>
                            Courses
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="/add_jobs" class="nav-link {{request()->segment(1)=='add_jobs' ||request()->segment(1)=='edit_jobs' ? 'active' : ''}}">
                       <i class="nav-icon fa fa-tasks"></i>
                       <p>Jobs</p>
                   </a>
               </li>
               <li class="nav-item">
                <a href="/add_news" class="nav-link {{request()->segment(1)=='add_news' ||request()->segment(1)=='edit_news' ? 'active' : ''}}">
                   <i class="nav-icon fa fa-newspaper"></i>
                   <p>News</p>
               </a>
           </li>

           <li class="nav-item">
            <a href="/add_blogs"  class="nav-link {{request()->segment(1)=='add_blogs' ||request()->segment(1)=='edit_blogs' ? 'active' : ''}}">
                <i class="nav-icon fab fa-blogger"></i>
                <p>Blogs</p>
            </a>
        </li>
        
           <li class="nav-item">
            <a href="/add_users"  class="nav-link {{request()->segment(1)=='add_users' ||request()->segment(1)=='edit_blogs' ? 'active' : ''}}">
                <i class="nav-icon fab fa fa-users"></i>
                <p>Users</p>
            </a>
        </li>



    </ul>
</li>

</nav>
<!-- /.sidebar-menu -->
</div>
<!-- /.sidebar -->

</aside>
