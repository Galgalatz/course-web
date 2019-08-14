@extends('master')

{{-- @section('home_css')
<link rel="stylesheet" href="{{ asset('css/home_css.css') }}">
@endsection --}}

@section('content')
<div class="container">
  <div class="row">
    <div class="col-12">
      <h3 class="text-center mt-5 mb-3">מכבי טבעי - כתובות</h3>
      <div class="row  mb-4">

        <div class="col-6 m-auto">
          <a href="{{ route('maccabi-tv.create') }}" class="btn btn-outline-info float-right"> + הוסף</a>
        </div>

      </div>
      <div class="row">
        <div class="col-6 mx-auto">
    
          <table class="table table-striped mb-4">
            <thead>
              <tr>
                <th scope="col">#</th>
                <th scope="col">עיר</th>
                <th scope="col">כתובת מייל</th>
                <th scope="col">מחיקה</th>
              </tr>
            </thead>
            <tbody>
              @foreach ($tivi_emails as $email)
              <tr>
              <th scope="row">{{ $email['id']}}</th>
                <td>{{ $email['city_name']}}</td>
                <td>{{ $email['email_name']}}</td>
                <td><button data-tv="{{$email['id']}}" class="btn text-center bg-transparent delete_add"><i class="far fa-trash-alt text-danger"></i></button></td>
              @endforeach
              </tr>
          </table>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection

<!-- Modal -->
<div class="modal fade" id="delete_alert_tv" tabindex="-1" role="dialog" aria-labelledby="delete_alert_tv" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title text-danger" id="delete_alert_tv_label">אזהרה</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body text-danger">
          להמשיך למחיקה?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">ביטול</button>
          <form id="delete_form_modal_tv" action="" method="post">
            @csrf
            @method('DELETE')
            <button type="submit" class="btn btn-danger">למחוק</button>
          </form>
        </div>
      </div>
    </div>
  </div>
