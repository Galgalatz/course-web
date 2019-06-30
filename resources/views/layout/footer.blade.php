
<script src="{{ asset('../node_modules/jquery/dist/jquery.min.js') }}"></script>
<script src="{{ '../node_modules/popper.js/dist/popper.min.js'}}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/angular.min.js') }}"></script>
<script src="{{ asset('../node_modules/rtl-bootstrap/dist/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/validation.js') }}"></script>
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