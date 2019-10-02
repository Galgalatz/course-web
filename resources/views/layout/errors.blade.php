@section('errors')
<<<<<<< HEAD
    @if ( $errors->any() )
        @foreach($errors->all() as $error)
            <div class="iconic-alert">
                <div class="alert alert-danger alert-dismissible fade show container col-3" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                    <div>{{ $error}}</div>
                </div>
            </div>
        @endforeach
    @endif
@endsection
=======

@if ( !empty($err_top) && $errors->any() )
@foreach($errors->all() as $error)
<div class="iconic-alert">
    <div class="alert alert-danger alert-dismissible fade show container col-3" role="alert">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
   
          
    <div>{{ $error}}</div>
           
    
    </div>
  </div>
  @endforeach
  @endif 

  @endsection
>>>>>>> b1164325b7d11e19e4c0349af0cd50d85802827d

