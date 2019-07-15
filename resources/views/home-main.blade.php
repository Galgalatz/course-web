@extends('master')
@section('content')
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h1 class="text-center mt-5 display-4">סדנאות</h1>
                <div class="row">
                    <div class="col-6 mx-auto">
                        <form method="POST" action="" autocomplete="off" novalidate="novalidation">
                            @csrf
                            <div class="form-group">
                                <label for="name">שם:</label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror" value="{{ old('name') }}">
                            </div>
                            <div class="form-group">
                                <label for="email">מייל:</label>
                                <input type="email" name="email" id="email" class="form-control @error('email') is-invalid @enderror" value="{{ old('email') }}">
                            </div>
                            <div class="form-group">
                                <select name="course" id="course" class="custom-select  mt-3">
                                    <option value="0" class="form-control">בחר סדנא</option>
                                    @foreach($courses as $course)
                                        <option value="{{ $course['id'] }}" class="form-control">{{ $course['date'] }}
                                            - {{ $course['course_name'] }} - {{ $course['city'] }}</option>
                                    @endforeach
                                </select>
                                @if ($errors->has('בחר סדנא'))
                                    <span class="@error('course') is-invalid @enderror"></span>
                                @endif
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


