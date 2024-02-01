<!DOCTYPE html>
<html>

<head>
    <title>Jobs</title>

    <!-- Basic -->
    @include('include.header_links')
</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section strats -->
        @include('include.header')
        <!-- end header section -->

        <!-- inner page section -->
           <section class="inner_page_head">
            <div class="container_fuild">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <h3>Jobs</h3>
                             <h2>
                                <a href="/jobapply" class="link-white" style="color: #00FFF">Apply for jobs
                                    click here</a>
                            </h2>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- end inner page section -->


        {{-- box start --}}
        <div class="container mt-4 mb-4">
            <div class="row">

                @foreach($jobs as $course)

                <div class="col-lg-4 col-sm-12" style="padding:5px">

                    <div class="card">
                        <img class="card-img-top" src="/uploads/jobs/{{$course->pic}}" alt="Card image" style="height:200px;">
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
                                <a href="/jobs/{{ $course->slug }}" class="btn btn-primary">Read More</a>
                            </div>

                            <div class="col-6">
                                <a href="/jobapply" class="btn btn-success">Apply jobs</a>
                            </div>

                        </div>
                    </div>
                </div>

            </div>

            @endforeach

            </div>
        </div>
        {{-- end --}}



        <!-- footer section -->
        @include('include.footer')
        <!-- footer end -->
        @include('include.footer_links')
</body>

</html>
