<!DOCTYPE html>
<html lang="he" dir="rtl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <script> var BASE_URL = "{{ url('') }}/"; </script>
  <link rel="stylesheet" href="{{ asset('../node_modules/rtl-bootstrap/dist/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{ asset('../node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/toastr.min.css') }}">
  <link rel="stylesheet" href="{{ asset('css/style.css') }}">
  <title>@if(!empty($title)) {{ $title }} @endif</title>
</head>
<body>
<!---example to css for specific page by his individual name-->
{{-- @yield('home_css')  --}}