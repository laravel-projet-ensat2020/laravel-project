@extends('master')

@section('master')

  <div class="container">
<form action="{{url('pg16/'.$art->id)}}"  methode="get" enctype="multipart/form-data">
  <div class="form-group">
       <label for="">nom</label>
       <input type="text"  name="nom"  value="{{$art->name}}" class="form-control">
    </div>
     
    <div class="form-group">
        <label for="">categorie</label>
        <input type="text"  name="categorie" value="{{$art->categorie}}" class="form-control">
    </div>
             
    <div class="form-group">
         <label for="">nombre des pieces</label>
         <input type="text"  name="nbr" value="{{$art->nbr_stock}}" class="form-control">
    </div>          

    <div class="form-group">
          <label for="">prix</label>
          <input type="text"  name="prix" value="{{$art->prix}}" class="form-control">
    </div>

    <div class="form-group">
          <label for="">information</label>
          <input type="text"  name="info" value="{{$art->info}}" class="form-control">
    </div>


     <div class="form-group">
          <label for="">image</label>
          <input type="file"  name="image" value="{{$art->image}}" class="form-control">
    </div>

     
    <div class="form-group">
          <input type="submit"  name="entrer" value="enregistrer" class="btn btn-info btn-block">
    </div>
    



</form></div>

  


@endsection