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
                            <h3>Blogs</h3>
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

                <div class="col-lg-4 col-sm-12" style="padding:5px">

                    <div class="card">
                        <img class="card-img-top" src="/uploads/blogs/{{$blog->pic}}" alt="Card image" style="height:200px;">
                        <div class="card-body">
                            <h5 class="card-title">
                                {!! strlen(strip_tags($blog->title)) > 20 ?
                                substr(strip_tags($blog->title),
                                0,
                                20) . '...' : $blog->title !!}
                            </h5>
                            <p class="card-text">
                                {!! strlen(strip_tags($blog->detail)) > 27 ?
                                substr(strip_tags($blog->detail), 0,
                                27) . '...' : $blog->detail !!}
                            </p>
                           
                    </div>
                </div>

            </div>

            @endforeach


<div class="col-md-12">
    <div class="pagination">
        @if ($blogs->onFirstPage())
            <span>&laquo;</span>
        @else
            <a href="{{ $blogs->previousPageUrl() }}">&laquo;</a>
        @endif

        @for ($i = 1; $i <= $blogs->lastPage(); $i++)
            <a class="{{ ($blogs->currentPage() == $i) ? 'active' : '' }}" href="{{ $blogs->url($i) }}">{{ $i }}</a>
        @endfor

        @if ($blogs->hasMorePages())
            <a href="{{ $blogs->nextPageUrl() }}">&raquo;</a>
        @else
            <span>&raquo;</span>
        @endif
    </div>
</div>


<style type="text/css">
    /* Pagination links */
.pagination a {
  color: black;
  float: left;
  padding: 8px 16px;
  text-decoration: none;
  transition: background-color .3s;
}

/* Style the active/current link */
.pagination a.active {
  background-color: dodgerblue;
  color: white;
}

/* Add a grey background color on mouse-over */
.pagination a:hover:not(.active) {background-color: #ddd;}
</style>



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
