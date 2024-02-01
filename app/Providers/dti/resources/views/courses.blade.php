<!DOCTYPE html>
<html>

<head>
    <title>Courses</title>

    <!-- Basic -->
    @include('include.header_links')

    <style>
        .book-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #3498db;
            color: #fff;
            text-decoration: none;
            border-radius: 5px;
            position: relative;
            overflow: hidden;
            font-size: 16px;
        }

        .button-text {
            position: relative;
            z-index: 2;
        }

        .book-icon {
            width: 20px;
            height: 20px;
            background-color: #fff;
            border-radius: 50%;
            position: absolute;
            left: 10px;
            top: 50%;
            transform: translateY(-50%);
            transition: transform 0.3s ease-in-out;
        }

        .book-icon .cover,
        .book-icon .pages {
            width: 50%;
            height: 100%;
            background-color: #3498db;
            position: absolute;
            top: 0;
            transition: transform 0.3s ease-in-out;
        }

        .book-icon .cover {
            left: 0;
        }

        .book-icon .pages {
            right: 0;
        }

        .book-button:hover .book-icon {
            transform: translateX(100%);
        }

        .book-button:hover .book-icon .cover {
            transform: scaleX(0);
        }

        .book-button:hover .book-icon .pages {
            transform: scaleX(0);
        }
    </style>



</head>

<body class="sub_page">
    <div class="hero_area">
        <!-- header section starts -->
        @include('include.header')
        <!-- end header section -->

        <!-- inner page section -->
        <section class="inner_page_head">
            <div class="container_fuild">
                <div class="row">
                    <div class="col-md-12">
                        <div class="full">
                            <h3>Courses</h3>
                            <a href="/bookcourse" class="book-button">
                                <div class="book-icon">
                                    <div class="cover"></div>
                                    <div class="pages"></div>
                                </div>
                                <span class="button-text">Book a Course</span>
                            </a>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page section -->

        {{-- box start --}}
        <div class="container mt-4 mb-4">
            <div class="row">

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
                                <a href="/bookcourse/{{ $course->courses_id }}" class="btn btn-success">Book Course</a>
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
