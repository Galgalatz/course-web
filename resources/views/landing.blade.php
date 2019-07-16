@extends('master')

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5 display-4">פרויקט</h1>
                <div class="row">
                    <div class="col-6 mx-auto">
                        <div>
                            @csrf
                            <div class="form-group">
                                <select name="course" id="course" class="custom-select w-100 mt-3">
                                    <option value="" class="form-control">בחר דף נחיתה</option>
                                    @foreach($pages as $page)
                                        <option value="{{ $page->id }}" class="form-control">{{$page->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <a href="" class="btn btn-primary btn-block disabled" id="submit">בחר</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


