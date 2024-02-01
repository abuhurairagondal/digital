<!DOCTYPE html>
<html>

<head>
    <title>Blogs</title>

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
                            <h3>Urdu Blogs</h3>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- end inner page section -->

        {{-- box start --}}
        <div class="container mt-4 mb-4">
            <div class="row">

                @foreach($blogs as $blog)
    <div class="col-md-4">
        <div class="my_card">
            <a href="/blogs/{{ $blog->slug }}">
                <img src="/uploads/blogs/{{ $blog->pic }}" class="img-fluid">
                <div class="card-text text-center">
                   <h3> <p>{!! strlen(strip_tags($blog->title)) > 27 ? substr(strip_tags($blog->title), 0,
                        27) . '...' : $blog->title !!}</p></h3>
                    <p>{!! strlen(strip_tags($blog->detail)) > 27 ? substr(strip_tags($blog->detail), 0, 27) . '...' : $blog->detail !!}</p>
                </div>
            </a>
        </div>
    </div>
@endforeach

            </div>
        </div>
        {{-- end --}}

        <!-- end why section -->
        <!-- footer section -->
        @include('include.footer')
        <!-- footer end -->
        @include('include.footer_links')
</body>

</html>
