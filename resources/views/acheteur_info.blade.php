@extends('master')

@section('master')

<div class="container">
<h3>pour acheter ce produit essayez de remplir cette formulaire</h3>


<div class="container">
<form action="{{url('pg9/'.$id)}}"  methode="get" >
             
    <div class="form-group">
         <label for="">numero_de_telephone</label>
         <input type="text"  name="tele" class="form-control">
    </div>          

    <div class="form-group">
          <label for="">nombre de piece</label>
          <input type="number"  name="nbr_piece"  class="form-control">
    </div>

    <div class="form-group">
          <input type="submit"  name="entrer" value="enregistrer" class="btn btn-info btn-block">
    </div>
    



</form></div>



@endsection
















