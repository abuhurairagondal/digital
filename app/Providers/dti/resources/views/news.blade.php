<!DOCTYPE html>
<html>

<head>
    <title>News</title>

    <!-- Basic -->
    @include('include.header_links')


</head>

<body class="sub_page">

    <!-- header section strats -->
    @include('include.header')


    <section class="inner_page_head">
        <div class="container_fuild">
            <div class="row">
                <div class="col-md-12">
                    <div class="full">
                        <h3>News</h3>
                    </div>
                </div>
            </div>
        </div>
    </section>



       {{-- box start --}}
       <div class="container mt-4 mb-4">
        <div class="row">
            @foreach($news as $course)
            <div class="col-md-12">
            <ul style="list-style-type: none;">
                <li>
                    {{$course->news_id}} - 
                    <a target="_blank" href="/news/{{ $course->slug }}">
                        {{$course->title}}
                    </a>
                    <span> ({{ \Carbon\Carbon::parse($course->date)->format('d M y') }})</span>
                </li>
            </ul>
            </div>
            @endforeach

        </div>
    </div>
    {{-- end --}}




    <!-- inner page section -->



    <!-- footer section -->

    @include('include.footer')

    <!-- footer end -->

</body>
<!-- end header section -->

@include('include.footer_links')
<script>
    // JavaScript to handle Read More functionality
    const readMoreLinks = document.querySelectorAll('.read-more');

    readMoreLinks.forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();
            const newsId = this.getAttribute('data-newsid');
            const hiddenDetails = document.getElementById(`newsDetails${news_Id}`);

            if (hiddenDetails.style.display === 'none') {
                hiddenDetails.style.display = 'inline'; // Show hidden details
                this.innerText = 'Read less'; // Change link text
            } else {
                hiddenDetails.style.display = 'none'; // Hide details
                this.innerText = 'Read more'; // Change link text
            }
        });
    });
</script>


</html>
