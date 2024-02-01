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
                     <img src="/uploads/courses/@php echo $course[0]['pic'] @endphp" class="img-fluid" alt="Image" style="border-radius:5px;">
                     <p>
                       @php echo $course[0]['detail'] @endphp
                     </p>
                </div>
                <div class="col-md-3" style="background-color:#8518FF; color: #fff; border-radius: 5px; ">
    <h4 align="center" style="padding:10px 5px;">Other Courses</h4>
    <ul class="list-unstyled">
        @foreach($courses as $course)

        <div class="col-lg-4 col-sm-12" style="padding:5px">

            <div class="card">
                <img class="card-img-top" src="/uploads/courses/{{$course->pic}}" alt="Card image" style="height:200px;">
                <div class="card-body">
                    <h5 class="card-title">
                        {!! strlen(strip_tags($course->title)) > 20 ?
                        substr(strip_tags($course->title),
                        0,
                        20) . '...' : $course->title !!}
                    </h5>
                    <p class="card-text">
                        {!! strlen(strip_tags($course->detail)) > 27 ?
                        substr(strip_tags($course->detail), 0,
                        27) . '...' : $course->detail !!}
                    </p>
                    <div class="row text-center">
                      <div class="col-6">
                        <a href="/course/{{ $course->slug }}" class="btn btn-primary">Read More</a>
                    </div>

                    <div class="col-6">
                        <a href="/bookcourse" class="btn btn-success">Book Course</a>
                    </div>

                </div>
            </div>
        </div>

    </div>

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
