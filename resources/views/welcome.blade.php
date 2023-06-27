<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <title>Laravel 9 Ajax Product Filters</title>
</head>
<body>
<div class="container">
    <div class="slider-area">
        @include('slider')
    </div>
    <div class="search-result">
        @include('search_result')
    </div>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script>
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });
</script>
<script>
    $(document).ready(function(e){
        $('.range_slider').on('change',function(){
            let left_value = $('#input_left').val();
            let right_value = $('#input_right').val();
            // alert(left_value+right_value);
            $.ajax({
                url:"{{ route('search.products') }}",
                method:"GET",
                data:{left_value:left_value, right_value:right_value},
                success:function(res){
                    $('.search-result').html(res);
                }
            });
        });

        $('#sort_by').on('change',function(){
            let sort_by = $('#sort_by').val();
            $.ajax({
                url:"{{ route('sort.by') }}",
                method:"GET",
                data:{sort_by:sort_by},
                success:function(res){
                    $('.search-result').html(res);
                }
            });
        });
    })
</script>

</body>
</html>
