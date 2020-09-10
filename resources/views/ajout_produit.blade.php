@extends('master')

@section('master')
<br>
<div class="container">
<form action="{{url('pg3')}}"  methode="get" enctype="multipart/form-data">
	<div class="form-group">
       <label for="">nom</label>
       <input type="text"  name="nom" class="form-control">
    </div>
     
    <div class="form-group">
        <label for="">categorie</label>
<select name="categorie" class="form-control">
          <option>ordinateur</option>
          <option>portable</option>
          <option>machine</option>
          
        </select>


       
    </div>
             
    <div class="form-group">
         <label for="">nombre des piece</label>
         <input type="text"  name="nbr" class="form-control">
    </div>          

    <div class="form-group">
          <label for="">prix</label>
          <input type="text"  name="prix"  class="form-control">
    </div>

    <div class="form-group">
          <label for="">information</label>
          <input type="text"  name="info"  class="form-control">
    </div>


     <div class="form-group">
          <label for="">image</label>
          <input type="file"  name="image" class="form-control">
    </div>

     
    <div class="form-group">
          <input type="submit"  name="entrer" value="enregistrer" class="btn btn-info btn-block">
    </div>
    



</form></div>

	


@endsection