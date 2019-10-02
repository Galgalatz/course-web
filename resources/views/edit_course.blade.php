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
<<<<<<< HEAD
          <a class="text-secondary" href="{{ route('courses', ['page_id'=>$page_id]) }}">חזור <i class="fas fa-angle-double-left"></i></a>
=======
          <a class="text-secondary" href="{{ url('courses') }}">חזור <i class="fas fa-angle-double-left"></i></a>
>>>>>>> b1164325b7d11e19e4c0349af0cd50d85802827d
        </div>
      </div>
      <div class="row">
        <div class="col-6 mx-auto">
<<<<<<< HEAD
          <form method="POST" action="{{ route('courses.update', ['page_id'=>$page_id, 'id'=>$id]) }}" autocomplete="off" novalidate="novalidation">
            @method('PUT') 
            @csrf
            <div class="form-group">
              <label for="course_name"><span class="text-danger">*</span><?php echo $page_id > 3 ? 'יום:' : ' שם סדנה:' ?></label>
            <input value="{{ $course_item['course_name'] }}" type="text" name="course_name" id="course_name" class="form-control">
            <small class="text-muted"><?php echo $page_id > 3 ? 'לדוגמא: ימי ג (ללא פסיקים, גרש,גרשיים וכו) ' : 'ללא פסיקים, גרש,גרשיים וכו' ?></small>   
          </div>
            <div class="form-group">
                <label for="city"><span class="text-danger">*</span> <?php echo $page_id > 3 ? 'עיר:' : 'כתובת:' ?></label>
=======
          <form method="POST" action="{{ url('courses/' . $course_item['id']) }}" autocomplete="off" novalidate="novalidation">
            @method('PUT') 
            @csrf
            <div class="form-group">
              <label for="course_name"><span class="text-danger">*</span> שם סדנה:</label>
            <input value="{{ $course_item['course_name'] }}" type="text" name="course_name" id="course_name" class="form-control">
            <small class="text-muted">ללא פסיקים, גרש,גרשיים וכו'</small>   
          </div>
            <div class="form-group">
                <label for="city"><span class="text-danger">*</span> כתובת:</label>
>>>>>>> b1164325b7d11e19e4c0349af0cd50d85802827d
              <input value="{{ $course_item['city'] }}" type="text" name="city" id="address" class="form-control">
              <small class="text-muted">ללא פסיקים, גרש,גרשיים וכו'</small>  
            </div>
            <div class="form-group">
<<<<<<< HEAD
              <label for="date"><span class="text-danger">*</span> <?php echo $page_id > 3 ? 'תאריך ושעות סדנא:' : 'תאריך:' ?></label>
            <input value="{{ $course_item['date'] }}" type="text" name="date" id="date" class="form-control">
            <small class="text-muted"><?php echo $page_id > 3 ? 'לדוגמא: בין השעות 11:30-12:30 מה-30.8' : 'במתכונת d.m.yy' ?></small>
            </div>
            @if ($page_id > 3)
    
            {{-- <input value="{{ old('mail_text') }}" type="text" name="mail_text" id="mail_text" class="form-control"> --}}
           <div class="form-group">
             <label for="mail_text"><span class="text-danger">*</span> טקסט בתוך המייל:</label>
             <select class="form-control" id="mail_text" name="mail_text">
               <option value="{{ $course_item['mail_text'] }}">{{ $course_item['mail_text'] }}</option>
             @foreach($tivi_emails as $tivi_email)
             <option value="{{$tivi_email['city_name']}} - {{$tivi_email['email_name']}}">{{$tivi_email['city_name']}} - {{$tivi_email['email_name']}}</option>
             @endforeach
             </select>
           </div>

           <div class="form-group">
            <label for="email"><span class="text-danger">*</span> מייל:</label>
              <select class="form-control input_tivi" id="email" name="email">
                  <option value="{{ $course_item['to_email'] }}">{{ $course_item['to_email'] }}</option>
             @foreach($tivi_emails as $tivi_email)
              <option value="{{$tivi_email['email_name']}}">{{$tivi_email['email_name']}}</option>
              @endforeach
              </select>
            </div>
            @else
=======
              <label for="date"><span class="text-danger">*</span> תאריך:</label>
            <input value="{{ $course_item['date'] }}" type="text" name="date" id="date" class="form-control">
            <small class="text-muted">במתכונת d.m.yy</small>
            </div>
>>>>>>> b1164325b7d11e19e4c0349af0cd50d85802827d
            <div class="form-group">
              <label for="email"><span class="text-danger">*</span> מייל:</label>
            <input value="{{ $course_item['to_email'] }}" type="email" name="email" id="email" class="form-control">
            <small class="text-muted">נא לוודא תקינות כתובת מייל</small>   
          </div>
<<<<<<< HEAD
          @endif

=======
>>>>>>> b1164325b7d11e19e4c0349af0cd50d85802827d
            <div class="form-group">
              <button type="submit" class="btn btn-danger btn-block">עדכן</button>
            </div>
  
          </form>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection


