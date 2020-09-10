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
 

<ul class="nav navbar-nav">
      <li class="active"><a href="{{url('pg11')}}">ma facture</a></li>
    </ul>   



@endsection


@section('content')

<body style="background-color: #848486;">



<div class="container" >

  @if($prix==0)
   <p>sorry vous avez pas une commande</p>

   @else
  <h2> la facture de mrs (Mme) {{$commande[0]->user_name}} </h2> 

  <table class="table">
    <thead>
      <td><strong>nom de produit</strong></td>
      <td><strong>nombre de piece</strong></td>
      <td><strong>prix totale</strong></td>
     
    </thead>
    <tbody>
      @foreach($commande as $com)
        <tr>
          <td>{{$com->produit_name}}</td>
          <td>{{$com->nbr_produit}}</td>
          <td>{{$com->prix_totale}} DH</td>
         
        </tr>
      @endforeach
    </tbody>
</table>

<tr>
  <tr>
 
   <div style="padding-left: 80%;">
  <ins> <h4><strong>Prix totale: {{$prix}} DH</strong></h4></ins>
 @endif
@endsection
























