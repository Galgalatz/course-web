@extends('master')

{{-- @section('home_css')
<link rel="stylesheet" href="{{ asset('css/home_css.css') }}">
@endsection --}}

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center mt-5 display-4 mb-3">הזנת סדנאות</h1>
      <div class="row">
        <div class="col-8"></div>
        <div class="col-4 mb-4">
          <a class="text-secondary" href="{{ url('courses') }}">חזור <i class="fas fa-angle-double-left"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="col-6 mx-auto">
          <form method="POST" action="{{ url('courses') }}" autocomplete="off" novalidate="novalidation">
              @csrf
            <div class="form-group">
              <label for="course_name"><span class="text-danger">*</span> שם סדנה:</label>
            <input value="{{ old('course_name')}}" type="text" name="course_name" id="course_name" class="form-control">
            <small class="text-muted">ללא פסיקים, גרש,גרשיים וכו'</small>   
          </div>
            <div class="form-group">
                <label for="city"><span class="text-danger">*</span> כתובת:</label>
              <input value="{{ old('city')}}" type="text" name="city" id="address" class="form-control">
              <small class="text-muted">ללא פסיקים, גרש,גרשיים וכו'</small>  
            </div>
            <div class="form-group">
              <label for="date"><span class="text-danger">*</span> תאריך:</label>
            <input value="{{ old('date')}}" type="text" name="date" id="date" class="form-control">
            <small class="text-muted">במתכונת d.m.yy</small>
            </div>
            <div class="form-group">
              <label for="email"><span class="text-danger">*</span> מייל:</label>
            <input value="{{ old('email')}}" type="email" name="email" id="email" class="form-control">
            <small class="text-muted">נא לוודא תקינות כתובת מייל</small>   
          </div>
            <div class="form-group">
              <button type="submit" class="btn btn-danger btn-block">הוסף</button>
            </div>
  
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection


