 <header class="header_section">
  <div class="container">
   <nav class="navbar navbar-expand-lg custom_nav-container ">
    <a class="navbar-brand" href="/"><img width="250" src="/images/logo.png" style="height: 60px; width: 60px;" alt="Home" /></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class=""> </span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
     <ul class="navbar-nav">
      <li class="nav-item <?php echo e(request()->segment(1)=='' ? 'active' : ''); ?>">
        <a class="nav-link" href="/">Home</a>
      </li>

      <li class="nav-item <?php echo e(request()->segment(1)=='courses' ||request()->segment(1)=='course'? 'active' : ''); ?>">
       <a class="nav-link" href="/courses">Courses</a>
     </li>
     <li class="nav-item <?php echo e(request()->segment(1)=='jobs' ? 'active' : ''); ?>">
       <a class="nav-link" href="/jobs">Jobs</a>
     </li>
     <li class="nav-item <?php echo e(request()->segment(1)=='blogs' ? 'active' : ''); ?>">
       <a class="nav-link" href="/blogs">Blogs</a>
     </li>
     <li class="nav-item <?php echo e(request()->segment(1)=='news' ? 'active' : ''); ?>">
       <a class="nav-link" href="/news">News</a>
     </li>
     <?php if(auth()->guard()->check()): ?>

     <li class="nav-item">
       <a class="nav-link" href="/dashboard" style="background-color: #8518FF; color: #fff;">Dashboard</a>
     </li>

     <li class="nav-item">
       <a class="nav-link" href="/logout" style="background-color: #f00; color: #fff;">Logout</a>
     </li>

     <?php else: ?>
     <li class="nav-item">
       <a class="nav-link" href="/login" style="background-color: #1f2839 ; color: #fff;">Login</a>
     </li>
     <?php endif; ?>
     <!-- Add similar lines for other menu items -->
   </ul>

   <script>
    function activateNavItem(element) {
        // Remove 'active' class from all nav items
        var navItems = document.querySelectorAll('.nav-item');
        navItems.forEach(function(item) {
          item.classList.remove('active');
        });

        // Add 'active' class to the clicked nav item
        element.parentNode.classList.add('active');
      }
    </script>

  </div>
</nav>
</div>
</header>
<?php /**PATH C:\xampp\htdocs\OneDrive\learning_web\resources\views/include/header.blade.php ENDPATH**/ ?>