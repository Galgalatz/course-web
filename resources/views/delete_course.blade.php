@extends('master')

@section('content')

<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
    <div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
      <h1 class="h3 mt-3">האם למחוק את הסדנה?</h1>
    </div>
<div class="row">
  <div class="col-lg-5 col-xs-10">
  <form action="{{ url('courses/' .$item_id) }}" method="POST">
    @method('DELETE')
    @csrf
      <a class="btn btn-secondary" href="{{ url('admin') }}">ביטול</a> &nbsp;
      <input class="btn btn-danger" type="submit" name="submit" value="מחיקה">
    </form>
  </div>
</div>
  </main>
  @endsection