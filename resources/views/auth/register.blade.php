@extends('layouts.app')
@section('home')
 <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/')}}">principal</a></li>
    </ul>
    @endsection


@section('content')

<body style="background-color: #848486;">
<br>
<br>
<div class="well" style="width: 400px; margin-left:32.5%;" >
    
     <div class="container">
    
             <form action="{{ route('register') }}" method="POST">
               @csrf
                <div class="form-group">
                <label for="">Nom:</label>
                <input type="text"  name="name" class="form-control" style="width:300px;">
                             @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
               </div>


                 <div class="form-group">
                <label for="">adresse email:</label>
                <input type="text"  name="email" class="form-control" style="width:300px;">
                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror


                </div>
                
                 <div class="form-group">
                <label for="">password</label>
                <input type="password"  name="password" class="form-control" style="width:300px;">
                      @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
            </div>

                 <div class="form-group">
                <label for="">confirmer password:</label>
                <input type="password"  name="password_confirmation" class="form-control" style="width:300px;"></div>
         
                <div class="form-group">
                <label for=""></label>
                <input type="submit"  name="datedepub" value="enregistrer" class="btn btn-info btn-block" style="width:300px;"></div>
    </div>



</form>



</div>
</div>

























@endsection
