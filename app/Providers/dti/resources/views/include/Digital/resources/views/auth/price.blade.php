<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <div class="col-md-6">
        <label>Course <code>*</code></label>
        <select name="course" id="course" class="form_field" required>
            <option value disabled selected>Select Course</option>
            @foreach ($data as $cd)
            <option value="{{ $cd->title }}" data-liveprice="{{ $cd->live_price }}" data-recordedprice="{{ $cd->recorded_price }}">{{ $cd->title }}</option>
            @endforeach
        </select>
        @error('course')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div class="col-md-6">
        <label>Course Category <code>*</code></label>
        <select name="course_mode" id="course_mode" class="form_field" required>
            <option value disabled selected>Select Course Category</option>
            <option value="Live Lecture">Live Lecture</option>
            <option value="Recorded Lecture">Recorded Lecture</option>
        </select>
        @error('course_mode')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>

    <div class="col-md-6">
        <label>Amount <code>*</code></label>
        <input type="number" name="amount" id="amount" class="form_field" required value="amount" readonly>
        @error('amount')
            <p style="color: red;">{{ $message }}</p>
        @enderror
    </div>



    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>




        $(document).ready(function() {
            $('#course').change(function() {
                var selectedCourse = $(this).children('option:selected');
                var courseMode = $('#course_mode').val();
                var price = courseMode === 'Live Lecture' ? selectedCourse.data('liveprice') : selectedCourse.data('recordedprice');
                $('#amount').val(price);
            });

            $('#course_mode').change(function() {
                var selectedCourse = $('#course').children('option:selected');
                var courseMode = $(this).val();
                var price = courseMode === 'Live Lecture' ? selectedCourse.data('liveprice') : selectedCourse.data('recordedprice');
                $('#amount').val(price);
            });
        });
    </script>





</body>
</html>l
