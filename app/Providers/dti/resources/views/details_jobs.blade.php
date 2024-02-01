<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      @include('include.header_links')
      <title>{{$course[0]['title']}}</title>
   </head>
   <body class="sub_page">
      <div class="hero_area">
         <!-- header section strats -->
         @include('include.header')
         <!-- end header section -->
      </div>
      <!-- inner page section -->
      <section class="inner_page_head">
         <div class="container_fuild">
            <div class="row">
               <div class="col-md-12">
                  <div class="full">
                     <h3>{{$course[0]['title']}}</h3>
                  </div>
               </div>
            </div>
         </div>
      </section>


        <div class="container" style="padding: 15px;">
            <div class="row">
                <div class="col-md-9">
                     <img src="/uploads/jobs/@php echo $course[0]['pic'] @endphp" class="img-fluid" alt="Image" style="border-radius:5px;">
                     <p>
                       @php echo $course[0]['detail'] @endphp
                     </p>
                </div>
                <div class="col-md-3" style="background-color:#8518FF; color: #fff; border-radius: 5px; ">
    <h4 align="center" style="padding:10px 5px;">Other Jobs</h4>
    <ul class="list-unstyled">
        @foreach($courses as $otherJobs)
               <li style="display: flex; align-items: center; margin-bottom: 10px; background-color: #fff; border-radius: 5px;">
                <img src="/uploads/jobs/{{ $otherJobs->pic }}" alt="Thumbnail" class="img-thumbnail" style="margin-right: 10px; width: 40px; height: 40px;">
                <a href="{{ $otherJobs->slug }}">{{ $otherJobs->title }}</a>
            </li>
        @endforeach
    </ul>
</div>

            </div>
        </div>



        <!-- footer section -->
        @include('include.footer')
        <!-- footer end -->
        @include('include.footer_links')
</body>

</html>
