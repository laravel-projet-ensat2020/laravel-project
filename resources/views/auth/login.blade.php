@extends('layouts.app')
@section('home')
 <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/')}}">principal</a></li>
    </ul>
 <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/produit')}}">produit</a></li>
    </ul>   
    @endsection



@section('content')

<body style="background-color: #848486;">
<br><br>


<div class="well" style="width: 400px; margin-left:35%;" >
    
     <div class="container">
    
            <form method="POST" action="{{ route('login') }}">
                   @csrf
                <div class="form-group">
                <label for="">{{ __('E-Mail Address') }}:</label>
                <input type="email"  name="email" class="form-control" style="width:300px;">
                
                              @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                    </div>


                 <div class="form-group">
                <label for="">{{ __('Password') }}:</label>
                <input type="password"  name="password" class="form-control" style="width:300px;">
                         @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>
                
              <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                
                <div class="form-group">
                <label for=""></label>
                <input type="submit"  name="datedepub" value="login" class="btn btn-info btn-block" style="width:300px;"></div>
    </div>



</form>
</div></div>
@endsection