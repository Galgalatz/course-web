@extends('master')

{{-- @section('home_css')
<link rel="stylesheet" href="{{ asset('css/home_css.css') }}">
@endsection --}}

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h2 class="text-center mt-5 mb-3">מכבי טבעי - הוספת כתובת</h2>
      <div class="row">
        <div class="col-8"></div>
        <div class="col-4 mb-4">
          {{-- <a class="text-secondary" href="{{ route('courses', ['page_id'=>$page_id]) }}">חזור <i class="fas fa-angle-double-left"></i></a> --}}
        </div>
      </div>
      <div class="row">
        <div class="col-6 mx-auto">
          <form method="POST" action="{{ route('maccabi-tv.store') }}" autocomplete="off" novalidate="novalidation">
              @csrf
            <div class="form-group">
              <label for="city"><span class="text-danger">*</span> שם עיר:</label>
            <input value="{{ old('city')}}" type="text" name="city" id="city_name" class="form-control">
            <small class="text-muted">ללא פסיקים, גרש,גרשיים וכו'</small>   
          </div>

            <div class="form-group">
              <label for="email"><span class="text-danger">*</span> מייל:</label>
            <input value="{{ old('email')}}" type="email" name="email" id="email" class="form-control">
            <small class="text-muted">נא לוודא תקינות כתובת מייל</small><br>
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


