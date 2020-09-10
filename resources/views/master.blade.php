@extends('layouts.app')
@section('home')
 <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/pg1')}}">principal</a></li>
    </ul>
@endsection

@section('cp')

  <ul class="nav navbar-nav">
<li class="dropdown">
        <a class="dropdown-toggle" data-toggle="dropdown" href="#">catégorie <span class="caret"></span></a>
        <ul class="dropdown-menu">
          <li><a href="{{url('/pg1')}}">tous</a></li>
          <li><a href="{{url('/prd1')}}">telephone portable</a></li>
           <li><a href="{{url('/prd2')}}">ordinateurs</a></li>
           <li><a href="{{url('/prd3')}}">machine</a></li>
         
        </ul>
</li>
</ul>

@if($user->is_admin==1)

 <ul class="nav navbar-nav">
      <li class="active"><a href="{{url('pg2')}}">nouveau article</a></li>
    </ul>   

<ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/pg14')}}">les commandes</a></li>
 </ul> 

 @else

<ul class="nav navbar-nav">
      <li class="active"><a href="{{url('/pg11')}}">ma facture</a></li>
    </ul>   

  @endif



@endsection


@section('content')





<body style="background-color: #848486;">


     @yield('master')


@endsection     