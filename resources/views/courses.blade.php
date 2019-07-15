@extends('master')

{{-- @section('home_css')
<link rel="stylesheet" href="{{ asset('css/home_css.css') }}">
@endsection --}}

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center mt-5 display-5">ניהול סדנאות</h1>
      <div class="row">
          <div class="col-6 float-right">
          <a href="{{ url('courses/create') }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> הוסף סדנה</a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">

            <table class="table table-striped mt-4">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">שם סדנה</th>
                    <th scope="col">עיר</th>
                    <th scope="col">תאריך</th>
                    <th scope="col">מייל לקוח</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($courses as $course)
                  <tr>
                    <th scope="row">{{ $course['id'] }}</th>
                    <td>{{ $course['course_name'] }}</td>
                    <td>{{ $course['city'] }}</td>
                    <td>{{ $course['date'] }}</td>
                    <td>{{ $course['to_email'] }}</td>
                    <td><a href="{{ url('courses/' .$course['id'].'/edit') }}"><i class="fas fa-pen pl-3 text-success"></i></a></td>
                    <td><a href="{{ url('courses/' .$course['id'] ) }}"><i class="far fa-trash-alt pl-3 text-danger"></i></a></td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              <div class="row">
                  <div class="col-4 col-xs-6 col-md-5"></div>
                    {{$courses->links()}}
                </div>
              {{-- {{ $courses->appends(['sort' => 'votes'])->links() }} --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection


