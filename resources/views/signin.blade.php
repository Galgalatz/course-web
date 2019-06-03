@extends('master')

{{-- @section('home_css')
<link rel="stylesheet" href="{{ asset('css/home_css.css') }}">
@endsection --}}

@section('content')

<title>{{ $title }}</title>
</head>
<body>
  
<div class="container">
  <div class="row">
    <div class="col-12 mt-5">
      <div class="row">
        <div class="col-lg-4 col-sm-12 col-xs-12 col-md-5 mx-auto">
            <p class="text-center mt-5" id="register_box">כניסה למערכת</p>
          <form method="POST" action="" autocomplete="off" role="form" novalidate="novalidation">
           @csrf
            <div class="form-group">
              <label for="name">שם משתמש:</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="password">סיסמא:</label>
            <input type="password" name="password" id="password" class="form-control">
            </div>
            <div class="form-group">
           <input type="submit" class="btn btn-danger btn-block" value="כניסה">
            </div>
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection


