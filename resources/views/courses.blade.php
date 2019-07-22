@extends('master')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h1 class="text-center mt-5 display-5">ניהול סדנאות - @php echo $page_name; @endphp</h1>
      <input class="page_id_for_js" type="hidden" value="{{$page_id}}">
      <div class="row">
          <div class="col-6 float-right">
          <a href="{{ route('courses.create', ['page_id'=>$page_id]) }}" class="btn btn-primary"><i class="fas fa-plus-circle"></i> הוסף סדנה</a>
        </div>
        <div class="col-6">
          <a class="text-secondary float-left" href="{{ route('home') }}">בחירת דף נחיתה <i class="fas fa-angle-double-left"></i></a>
        </div>
      </div>
      <div class="row">
        <div class="col-12">

            <table class="table table-striped mt-4" id="courses-table">
                <thead>
                  <tr>
                    <th scope="col">id</th>
                    <th scope="col">שם סדנה</th>
                    <th scope="col">עיר</th>
                    <th scope="col">תאריך</th>
                    @if ($page_id > 3)
                      <th scope="col">טקסט בתוך המייל</th>
                    @endif
                    <th scope="col">מייל לקוח</th>
                    <th scope="col"></th>
                    <th scope="col"></th>
                  </tr>
                </thead>
                <tbody>
                  @foreach($courses as $course)
                  <tr data-index="{{ $course['id'] }}" data-position="{{ $course['position'] }}">
                    <th scope="row">{{ $course['id'] }}</th>
                    <td>{{ $course['course_name'] }}</td>
                    <td>{{ $course['city'] }}</td>
                    <td>{{ $course['date'] }}</td>
                    @if ($page_id > 3)
                      <td>{{ $course['mail_text'] }}</td>
                    @endif
                    <td>{{ $course['to_email'] }}</td>
                    <td><a href="{{ route('courses.edit', ['page_id'=>$page_id, 'id'=>$course['id']]) }}"><i class="fas fa-pen pl-3 text-success"></i></a></td>
                    <td>
                      <button data-page="{{$page_id}}" data-course="{{$course['id']}}" class="btn btn-sm text-center bg-transparent delete_course">
                        <i class="far fa-trash-alt text-danger"></i>
                      </button>
                    </td>
                  </tr>
                  @endforeach
                </tbody>
              </table>
              {{--<div class="row">
                  <div class="col-4 col-xs-6 col-md-5"></div>
                    {{$courses->links()}}
                </div>--}}
              {{-- {{ $courses->appends(['sort' => 'votes'])->links() }} --}}
        </div>
      </div>
    </div>
  </div>
</div>
@endsection

<!-- Modal -->
<div class="modal fade" id="delete_alert" tabindex="-1" role="dialog" aria-labelledby="delete_alert" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title text-danger" id="delete_alert_label">אזהרה</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body text-danger">
        להמשיך למחיקה?
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">ביטול</button>
        <form id="delete_form_modal" action="" method="post">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">למחוק</button>
        </form>
      </div>
    </div>
  </div>
</div>