
<<<<<<< HEAD
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>

@if (Route::currentRouteName() == 'home')
  <script src="{{ asset('js/show_courses.js') }}"></script>
@endif

@if (Route::currentRouteName() == 'maccabi-tv')
  <script src="{{ asset('js/tv.js') }}"></script>
@endif

@if (Route::currentRouteName() == 'courses')
  <script src="{{ asset('js/jquery-ui.js') }}"></script>
  <script src="{{ asset('js/courses.js') }}"></script>
@endif

=======
<script src="{{ asset('../node_modules/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ asset('../node_modules/popper.js/dist/umd/popper.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/angular.min.js') }}"></script>
<script src="{{ asset('../node_modules/rtl-bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
>>>>>>> b1164325b7d11e19e4c0349af0cd50d85802827d
@if(Session::has('sm'))
<script>
toastr.options.positionClass = '{{ Session::get('smpos') }}';
toastr.success('{{ Session::get('sm') }}', '{{ Session::get('title') }}');
</script>
@endif
@if (Session::has('fm'))
<script>
  toastr.options.positionClass = '{{ Session::get('fmpos') }}';
toastr.warning('{{ Session::get('fm') }}', '{{ Session::get('title') }}');
</script>
@endif
</body>
</html>