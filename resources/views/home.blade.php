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
    <div class="col-12">
      <h1 class="text-center mt-5 display-4">סדנאות</h1>

      <div class="row">
        <div class="col-6 mx-auto">
          <form method="POST" action="" autocomplete="off" novalidate="novalidation">
            <div class="form-group">
              <label for="name">שם:</label>
              <input type="text" name="name" id="name" class="form-control">
            </div>
            <div class="form-group">
              <label for="email">מייל:</label>
            <input type="email" name="email" id="email" class="form-control">
            </div>
            <div class="form-group">
            <select name="course" id="course" class="custom-select  mt-3">
              <option value="0" class="form-control">בחר סדנא</option>
            @foreach($courses as $course)
            <option value="{{ $course['id'] }}" class="form-control">{{ $course['date'] }}  - {{ $course['course_name'] }} - {{ $course['city'] }}</option>
            @endforeach
            </select>

            </div>
            <div class="form-group">
           <button type="submit" class="btn btn-primary btn-block" id="submit">הירשם</button>
            </div>
  
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection


