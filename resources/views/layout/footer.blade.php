
<script src="{{ asset('js/jquery.min.js') }}"></script>
<script src="{{ asset('js/popper.js') }}"></script>
<script src="{{ asset('js/toastr.min.js') }}"></script>
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script src="{{ asset('js/script.js') }}"></script>
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