@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5 display-4">פרויקט</h1>
                <div class="row">
                    <div class="col-6 mx-auto">
                        <form method="POST" action="" autocomplete="off" novalidate="novalidation">
                            @csrf
                            <div class="form-group">
                                <select name="course" id="course" class="custom-select  mt-3">
                                    <option value="0" class="form-control">בחר דף נחיתה</option>
                                    @foreach($pages as $page)
                                        <option value="{{ $course->id }}" class="form-control">{{$page->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary btn-block" id="submit">בחר</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


