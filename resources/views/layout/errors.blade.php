@if ( !empty($err_top) && $errors->any() )
<div class="iconic-alert">
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <strong><i class="fa fa-warning mb-2"></i> Wrong! Try Again</strong> 
      <ul>
        @foreach($errors->all() as $error)
      <li>{{ $error }}</li>
        @endforeach
      </ul>
    </div>
  </div>
  @endif

  