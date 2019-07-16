<!DOCTYPE html>
<html lang="he" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>@if(!empty($title)) {{ $title }} @endif</title>

  <script>
    let config = {
      base:       "{{ url('/') . '/' }}",
      course_link:       "{{ route('courses', ['page_id'=>''])}}",
    };
  </script>
</head>
<body>
<!---example to css for specific page by his individual name-->
{{-- @yield('home_css')  --}}