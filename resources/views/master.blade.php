@include('layout.header')

@section('errors')
@include('layout.errors')
@show

@yield('content')

@include('layout.footer')

